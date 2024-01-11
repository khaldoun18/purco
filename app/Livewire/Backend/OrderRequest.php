<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Axlon\PostalCodeValidation\Rules\PostalCode;

class OrderRequest extends Component
{
    public $previous_order = false;
    public $desired_date;
    public $quotes = [];
    public $remarks;
    public $acceptTerms = false;
    public $return_package = false;
    public $delivery_address;
    public $address_number;
    public $postcode;
    public $city;
    // Assuming you have predefined products and packaging options
    public $products = [
        ['id' => 'product1', 'name' => 'Product 1'],
        ['id' => 'product2', 'name' => 'Product 2'],
        // Add more products as needed
    ];

    public $packagingOptions = [
        'Option 1',
        'Option 2',
        // Add more packaging options as needed
    ];

    public function mount()
    {
        $this->addQuote();
    }

    public function getProcessedQuotes()
    {
        return collect($this->quotes)->map(function ($quote) {
            $product = collect($this->products)->firstWhere('id', $quote['product']);
            return [
                'product_name' => $product['name'] ?? 'N/A',
                'volume' => $quote['volume'] ?? 'N/A',
                'packaging' => $quote['packaging'] ?? 'N/A',
            ];
        });
    }

    public function updatedPreviousOrder($value)
    {
        if ($value) {
            // Fetch the last order and its items
            $lastOrder = Order::where('user_id', Auth::id())->latest()->first();

            if ($lastOrder && $lastOrder->orderItems) {
                // Clear the current quotes
                $this->quotes = [];

                // Repopulate quotes with the last order items
                foreach ($lastOrder->orderItems as $item) {
                    $this->quotes[] = [
                        'product' => $item->product_id,
                        'volume' => $item->volume,
                        'packaging' => $item->packaging,
                    ];
                }
            } else {

                $this->quotes = [];
            }
        } else {

            $this->quotes = [['product' => '', 'volume' => '', 'packaging' => '']];
        }
    }


    public function addQuote()
    {
        $this->quotes[] = ['product' => '', 'volume' => '', 'packaging' => ''];
    }

    public function removeQuote($index)
    {
        unset($this->quotes[$index]);
        $this->quotes = array_values($this->quotes);
    }

    private function generateOrderNumber()
    {
        $year = date('y'); // Current year in two digits
        $prefix = "{$year}-" . random_int(10, 99); // e.g., "22-66"
        $uniquePart = random_int(1000, 9999); // 4-digit random number

        $orderNumber = "{$prefix}-{$uniquePart}";

        // Check if the generated order number already exists in the database
        while (Order::where('order_number', $orderNumber)->exists()) {
            $uniquePart = random_int(1000, 9999);
            $orderNumber = "{$prefix}-{$uniquePart}";
        }

        return $orderNumber;
    }

    public function submit()
    {
        $this->validate([
            'desired_date' => 'required|date|after:tomorrow',
            'quotes.*.product' => 'required',
            'quotes.*.volume' => 'required|numeric|min:1',
            'quotes.*.packaging' => 'required',
            'remarks' => 'nullable|string',
            'acceptTerms' => 'accepted',
            'return_package' => 'boolean',
            'delivery_address' => 'required|min:5',
            'address_number' => 'required',
            'postcode' => ['required', 'string', 'max:255', PostalCode::for('LB')->or('BE')],
            'city' => 'required'
        ],
    [
        'quotes.*.volume' => 'select a valid volume',
        'quotes.*.product' => 'select a valid product',
        'quotes.*.packaging' => 'select a valid packaging',
    ]
    );

        try {
            DB::beginTransaction();

            $orderNumber = $this->generateOrderNumber();


            $order = Order::create([
                'user_id' => Auth::id(),
                'desired_date' => $this->desired_date,
                'remarks' => $this->remarks,
                'packaging_return' => $this->return_package,
                'delivery_address' => $this->delivery_address,
                'address_number' => $this->address_number,
                'postcode' => $this->postcode,
                'city' => $this->city,
                'order_number' => $orderNumber,
                'status' => 'placed',
                'payment' => 'waiting',
            ]);

            foreach ($this->quotes as $quote) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $quote['product'],
                    'volume' => $quote['volume'],
                    'packaging' => $quote['packaging'],
                ]);
            }

            DB::commit();

            $this->reset();

            session()->flash('success', 'Order has been successfully placed.');

            session(['order_success' => true]);

            return $this->redirect(route('order-success'), navigate: true);
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'There was an error placing the order: ' . $e->getMessage());
        }
    }
    public function render()
    {
        $hasPreviousOrder = Order::where('user_id', Auth::id())->exists();

        return view('livewire.backend.order-request', compact('hasPreviousOrder'));
    }
}
