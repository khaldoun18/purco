<div>
    <section class="mt-10">
        <div class="max-w-screen-xl px-4 mx-auto lg:px-12">
            <!-- Start coding here -->
            @if (count($orders) > 0)
                <div class="relative my-6 overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                    <div class="flex items-center justify-between p-4 d">


                    </div>
                    <div class="overflow-x-auto whitespace-nowrap">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr class="">
                                    <th scope="col" class="px-4 py-3" wire:click="setSortBy('created_at')">Nr</th>
                                    <th scope="col" class="px-4 py-3 cursor-pointer"
                                        wire:click="setSortBy('created_at')">
                                        <div class="flex gap-x-3">
                                            <h1>Datum</h1>
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.75226 2.82444L3.58807 0.286608C3.26218 -0.0955365 2.73576 -0.0955365 2.40987 0.286608L0.245676 2.82444C-0.280751 3.44175 0.0952682 4.5 0.83895 4.5L5.16735 4.5C5.91103 4.5 6.27869 3.44175 5.75226 2.82444Z"
                                                    fill="#313131" />
                                                <path
                                                    d="M0.247736 9.17556L2.41193 11.7134C2.73782 12.0955 3.26424 12.0955 3.59013 11.7134L5.75432 9.17556C6.28075 8.55825 5.90473 7.5 5.16105 7.5H0.832654C0.0889721 7.5 -0.278691 8.55825 0.247736 9.17556Z"
                                                    fill="#313131" />
                                            </svg>
                                        </div>

                                    </th>
                                    <th scope="col" class="px-4 py-3 cursor-pointer"
                                        wire:click="setSortBy('order_number')">
                                        <div class="flex gap-x-3">
                                            <h1>Bestelnummer</h1>
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.75226 2.82444L3.58807 0.286608C3.26218 -0.0955365 2.73576 -0.0955365 2.40987 0.286608L0.245676 2.82444C-0.280751 3.44175 0.0952682 4.5 0.83895 4.5L5.16735 4.5C5.91103 4.5 6.27869 3.44175 5.75226 2.82444Z"
                                                    fill="#313131" />
                                                <path
                                                    d="M0.247736 9.17556L2.41193 11.7134C2.73782 12.0955 3.26424 12.0955 3.59013 11.7134L5.75432 9.17556C6.28075 8.55825 5.90473 7.5 5.16105 7.5H0.832654C0.0889721 7.5 -0.278691 8.55825 0.247736 9.17556Z"
                                                    fill="#313131" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 py-3 cursor-pointer"
                                        wire:click="setSortBy('order_number')">
                                        <div class="flex gap-x-3">
                                            <h1>Ordernummer</h1>
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.75226 2.82444L3.58807 0.286608C3.26218 -0.0955365 2.73576 -0.0955365 2.40987 0.286608L0.245676 2.82444C-0.280751 3.44175 0.0952682 4.5 0.83895 4.5L5.16735 4.5C5.91103 4.5 6.27869 3.44175 5.75226 2.82444Z"
                                                    fill="#313131" />
                                                <path
                                                    d="M0.247736 9.17556L2.41193 11.7134C2.73782 12.0955 3.26424 12.0955 3.59013 11.7134L5.75432 9.17556C6.28075 8.55825 5.90473 7.5 5.16105 7.5H0.832654C0.0889721 7.5 -0.278691 8.55825 0.247736 9.17556Z"
                                                    fill="#313131" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 py-3 cursor-pointer"
                                        wire:click="setSortBy('status')">
                                        <div class="flex gap-x-3">
                                            <h1>Status</h1>
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.75226 2.82444L3.58807 0.286608C3.26218 -0.0955365 2.73576 -0.0955365 2.40987 0.286608L0.245676 2.82444C-0.280751 3.44175 0.0952682 4.5 0.83895 4.5L5.16735 4.5C5.91103 4.5 6.27869 3.44175 5.75226 2.82444Z"
                                                    fill="#313131" />
                                                <path
                                                    d="M0.247736 9.17556L2.41193 11.7134C2.73782 12.0955 3.26424 12.0955 3.59013 11.7134L5.75432 9.17556C6.28075 8.55825 5.90473 7.5 5.16105 7.5H0.832654C0.0889721 7.5 -0.278691 8.55825 0.247736 9.17556Z"
                                                    fill="#313131" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 py-3 cursor-pointer"
                                        wire:click="setSortBy('payment')">
                                        <div class="flex gap-x-3">
                                            <h1>Betaling</h1>
                                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.75226 2.82444L3.58807 0.286608C3.26218 -0.0955365 2.73576 -0.0955365 2.40987 0.286608L0.245676 2.82444C-0.280751 3.44175 0.0952682 4.5 0.83895 4.5L5.16735 4.5C5.91103 4.5 6.27869 3.44175 5.75226 2.82444Z"
                                                    fill="#313131" />
                                                <path
                                                    d="M0.247736 9.17556L2.41193 11.7134C2.73782 12.0955 3.26424 12.0955 3.59013 11.7134L5.75432 9.17556C6.28075 8.55825 5.90473 7.5 5.16105 7.5H0.832654C0.0889721 7.5 -0.278691 8.55825 0.247736 9.17556Z"
                                                    fill="#313131" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 py-3">Factuur</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key => $order)
                                    <tr class="text-center border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $key + 1 }}
                                        </th>
                                        <td class="px-4 py-3">{{ $order->created_at->format('d/m/Y') }}</td>
                                        <td class="px-4 py-3 text-green-500">{{ $order->order_number }}</td>
                                        <td class="px-4 py-3">#{{ $order->order_number }}</td>
                                        @if ($order->status == 'placed')
                                            <td class="px-4 py-3 text-blue-500 bg-blue-100">Bestelling geplaatst</td>
                                        @elseif ($order->status == 'delivered')
                                            <td class="px-4 py-3 text-green-500 bg-green-100">Afgeleverd (POD)</td>
                                        @elseif ($order->status == 'transport')
                                            <td class="px-4 py-3 text-yellow-500 bg-yellow-100">Transport</td>
                                        @endif

                                        @if ($order->payment == 'waiting')
                                            <td class="px-4 py-3 text-yellow-500">
                                                <div class="flex gap-x-2">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.732 5.30868L12.3541 4.68669C12.5494 4.49135 12.5494 4.17466 12.3541 3.97933C12.1588 3.784 11.8421 3.784 11.6467 3.97933L10.9947 4.63135C10.0694 3.92468 8.91808 3.5 7.66675 3.5C4.63408 3.5 2.16675 5.96733 2.16675 9C2.16675 12.0327 4.63408 14.5 7.66675 14.5C10.6994 14.5 13.1667 12.0327 13.1667 9C13.1667 7.57867 12.62 6.28601 11.732 5.30868ZM7.66675 13.5C5.18541 13.5 3.16675 11.4813 3.16675 9C3.16675 6.51867 5.18541 4.5 7.66675 4.5C10.1481 4.5 12.1667 6.51867 12.1667 9C12.1667 11.4813 10.1481 13.5 7.66675 13.5ZM9.30005 9.60002C9.52072 9.76602 9.5655 10.0793 9.3995 10.3C9.30216 10.4306 9.15145 10.5 8.99878 10.5C8.89478 10.5 8.78946 10.4673 8.69946 10.4L7.36613 9.39998C7.2408 9.30532 7.1661 9.15733 7.1661 9V6.66667C7.1661 6.39067 7.3901 6.16667 7.6661 6.16667C7.9421 6.16667 8.1661 6.39067 8.1661 6.66667V8.75L9.30005 9.60002ZM5.50008 2C5.50008 1.724 5.72408 1.5 6.00008 1.5H9.33342C9.60942 1.5 9.83342 1.724 9.83342 2C9.83342 2.276 9.60942 2.5 9.33342 2.5H6.00008C5.72408 2.5 5.50008 2.276 5.50008 2Z"
                                                            fill="#FFC600" />
                                                    </svg>
                                                    <h1>Bestelling geplaatst</h1>
                                                </div>
                                            </td>
                                        @elseif ($order->payment == 'success')
                                            <td class="px-4 py-3 text-green-500">
                                                <div class="flex gap-x-2">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.33333 9.33333L5.23309 10.7582C5.66178 11.0797 6.26772 11.0061 6.60705 10.5914L12 4"
                                                            stroke="#338734" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                    <h1>Voldaan</h1>
                                                </div>
                                            </td>
                                        @elseif ($order->payment == 'dismissed')
                                            <td class="px-4 py-3 text-red-500">
                                                <div class="flex gap-x-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g filter="url(#filter0_d_27_6524)">
                                                            <path
                                                                d="M11.9999 15.1663C8.04792 15.1663 4.83325 11.9517 4.83325 7.99967C4.83325 4.04767 8.04792 0.833008 11.9999 0.833008C15.9519 0.833008 19.1666 4.04767 19.1666 7.99967C19.1666 11.9517 15.9519 15.1663 11.9999 15.1663ZM11.9999 1.83301C8.59925 1.83301 5.83325 4.59901 5.83325 7.99967C5.83325 11.4003 8.59925 14.1663 11.9999 14.1663C15.4006 14.1663 18.1666 11.4003 18.1666 7.99967C18.1666 4.59901 15.4006 1.83301 11.9999 1.83301ZM12.6799 10.333C12.6799 9.96501 12.3819 9.66634 12.0133 9.66634H12.0066C11.6386 9.66634 11.3432 9.96501 11.3432 10.333C11.3432 10.701 11.6453 10.9997 12.0133 10.9997C12.3813 10.9997 12.6799 10.701 12.6799 10.333ZM12.4999 8.04704V4.99967C12.4999 4.72367 12.2759 4.49967 11.9999 4.49967C11.7239 4.49967 11.4999 4.72367 11.4999 4.99967V8.04704C11.4999 8.32304 11.7239 8.54704 11.9999 8.54704C12.2759 8.54704 12.4999 8.32304 12.4999 8.04704Z"
                                                                fill="#C33D1F" />
                                                        </g>
                                                        <defs>
                                                            <filter id="filter0_d_27_6524" x="0" y="0" width="24"
                                                                height="24" filterUnits="userSpaceOnUse"
                                                                color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0"
                                                                    result="BackgroundImageFix" />
                                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                    result="hardAlpha" />
                                                                <feOffset dy="4" />
                                                                <feGaussianBlur stdDeviation="2" />
                                                                <feComposite in2="hardAlpha" operator="out" />
                                                                <feColorMatrix type="matrix"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                <feBlend mode="normal" in2="BackgroundImageFix"
                                                                    result="effect1_dropShadow_27_6524" />
                                                                <feBlend mode="normal" in="SourceGraphic"
                                                                    in2="effect1_dropShadow_27_6524" result="shape" />
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                    <h1>Vervallen factuur</h1>
                                                </div>
                                            </td>
                                        @endif

                                        <td class="flex items-center justify-end px-4 py-3">
                                            <button class="px-3 py-1 "><svg width="21" height="20"
                                                    viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.55831 11.275C7.31414 11.0309 7.31414 10.635 7.55831 10.3908C7.80248 10.1467 8.19834 10.1467 8.4425 10.3908L9.87581 11.8242V2.5C9.87581 2.155 10.1558 1.875 10.5008 1.875C10.8458 1.875 11.1258 2.155 11.1258 2.5V11.8242L12.5591 10.3908C12.8033 10.1467 13.1992 10.1467 13.4433 10.3908C13.6875 10.635 13.6875 11.0309 13.4433 11.275L10.9433 13.775C10.8858 13.8325 10.8167 13.8783 10.7401 13.91C10.6634 13.9417 10.5825 13.9583 10.5008 13.9583C10.4191 13.9583 10.3384 13.9417 10.2618 13.91C10.1851 13.8783 10.1158 13.8325 10.0583 13.775L7.55831 11.275ZM15.5 7.70833C15.155 7.70833 14.875 7.98833 14.875 8.33333C14.875 8.67833 15.155 8.95833 15.5 8.95833C16.8142 8.95833 17.375 9.51917 17.375 10.8333V15C17.375 16.3142 16.8142 16.875 15.5 16.875H5.5C4.18583 16.875 3.625 16.3142 3.625 15V10.8333C3.625 9.51917 4.18583 8.95833 5.5 8.95833C5.845 8.95833 6.125 8.67833 6.125 8.33333C6.125 7.98833 5.845 7.70833 5.5 7.70833C3.485 7.70833 2.375 8.81833 2.375 10.8333V15C2.375 17.015 3.485 18.125 5.5 18.125H15.5C17.515 18.125 18.625 17.015 18.625 15V10.8333C18.625 8.81833 17.515 7.70833 15.5 7.70833Z"
                                                        fill="#313131" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>

                    <div class="px-3 py-4">
                        <div class="flex ">
                            <div class="flex items-center mb-3 space-x-4">
                                <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                                <select wire:model.live='perPage'
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="flex justify-center">
                    <h1 class="bg-[#338734] text-white px-6 py-2 text-2xl font-bold my-12">No Order Yet!</h1>
                </div>
            @endif
        </div>
    </section>
    {{ $orders->links() }}
</div>
