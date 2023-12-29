<?php

namespace App\Livewire\Backend;

use App\Models\quote;
use Livewire\Component;
use Carbon\Carbon;

class QuoteRequest extends Component
{
    public $desired_date;
    public $quotes = [];
    public $remarks;
    public $acceptTerms = false;
    public $return_package = false;

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

    public function addQuote()
    {
        $this->quotes[] = ['product' => '', 'volume' => '', 'packaging' => ''];
    }

    public function removeQuote($index)
    {
        unset($this->quotes[$index]);
        $this->quotes = array_values($this->quotes);
    }

    public function submit()
    {
        // Validate the form data
        $this->validate([
            'desired_date' => 'required|date|after:' . now()->addDay()->toDateString(),
            'quotes.*.product' => 'required',
            'quotes.*.volume' => 'required|numeric',
            'quotes.*.packaging' => 'required',
            'remarks' => 'nullable|string',
            'acceptTerms' => 'accepted',
            'return_package' => 'boolean',
        ],
        [
            [
                'quotes.*.volume' => 'select a valid volume',
            ]
        ]
    );

        
        foreach ($this->quotes as $quote) {
            quote::create([
                'user_id'=>auth()->user()->id,
                'desired_date' => $this->desired_date,
                'product' => $quote['product'],
                'volume' => $quote['volume'],
                'packaging' => $quote['packaging'],
                'remarks' => $this->remarks,
                'packaging_return'=>$this->return_package,
                
            ]);
        }


        $this->reset();


        session(['quote_success' => true]);

        return $this->redirect(route('quote-success'), navigate: true);

        
    }
    public function render()
    {
        return view('livewire.backend.quote-request');
    }
}
