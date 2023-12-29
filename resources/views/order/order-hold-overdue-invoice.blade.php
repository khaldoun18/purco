<x-app-layout>
   <div class="py-[80px]">
    <div class="container mx-auto sm:px-[72px] px-[37px]">

        <h1 class="sm:text-[32px] text-2xl font-bold text-center">Bestel nu</h1>

        <div class="flex justify-center py-[48px]">

            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_32_4678)">
                    <path
                        d="M53.374 60.25H50.7152V54.8856C50.7152 48.2995 47.5937 41.9474 41.6881 36.5161C39.5458 34.5459 37.4135 33.0373 35.7742 32C37.4135 30.9627 39.5458 29.4541 41.6881 27.4839C47.5937 22.0526 50.7152 15.7005 50.7152 9.11438V3.75H53.374C54.4095 3.75 55.249 2.9105 55.249 1.875C55.249 0.8395 54.4095 0 53.374 0C52.1361 0 12.5163 0 10.6211 0C9.58559 0 8.74609 0.8395 8.74609 1.875C8.74609 2.9105 9.58559 3.75 10.6211 3.75H13.2798V9.11438C13.2798 16.2603 16.935 22.5434 22.307 27.4839C24.4492 29.4541 26.5816 30.9627 28.2208 32C26.5816 33.0373 24.4492 34.5459 22.307 36.5161C16.4013 41.9474 13.2798 48.2995 13.2798 54.8856V60.25H10.6211C9.58559 60.25 8.74609 61.0895 8.74609 62.125C8.74609 63.1605 9.58559 64 10.6211 64H53.374C54.4095 64 55.249 63.1605 55.249 62.125C55.249 61.0895 54.4095 60.25 53.374 60.25ZM46.9652 9.11438C46.9652 11.3019 46.5602 13.4377 45.7583 15.5138H18.2367C17.4348 13.4376 17.0298 11.3018 17.0298 9.11438V3.75H46.9652V9.11438ZM20.161 19.2638H43.8341C41.0482 23.583 36.4828 27.3965 31.9976 29.8804C27.5078 27.394 22.9452 23.5805 20.161 19.2638ZM31.9975 34.1196C39.7627 38.4201 46.9652 45.8546 46.9652 54.8856V57.5945L42.4225 52.7536C39.6657 49.8159 35.9287 48.1981 31.9001 48.198C31.8998 48.198 31.9002 48.198 31.9001 48.198C27.8716 48.198 24.1342 49.8161 21.3776 52.7536L17.0298 57.3867V54.8855C17.0297 45.897 24.1856 38.4459 31.9975 34.1196ZM19.4855 60.25L24.112 55.3199C26.1523 53.1455 28.9182 51.948 31.9 51.948C34.8817 51.9481 37.6475 53.1455 39.688 55.3199L44.3146 60.25H19.4855Z"
                        fill="#F1AF33" />
                </g>
                <defs>
                    <clipPath id="clip0_32_4678">
                        <rect width="64" height="64" fill="white" />
                    </clipPath>
                </defs>
            </svg>


        </div>

        <div class="mb-8 text-center">
            <button href="{{ route('order') }}" wire:navigate class="py-3 px-4 bg-[#F1AF33] text-black text-sm font-semibold">
                Bestelling on hold. Zie hieronder.

            </button>
            <div class="flex flex-col items-center gap-[46px] ">
                <div class="mt-6 text-lg font-black text-[#C33D1F] flex justify-center ">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 22.75C6.572 22.75 1.75 17.928 1.75 12C1.75 6.072 6.572 1.25 12.5 1.25C18.428 1.25 23.25 6.072 23.25 12C23.25 17.928 18.428 22.75 12.5 22.75ZM12.5 2.75C7.399 2.75 3.25 6.899 3.25 12C3.25 17.101 7.399 21.25 12.5 21.25C17.601 21.25 21.75 17.101 21.75 12C21.75 6.899 17.601 2.75 12.5 2.75ZM13.52 15.5C13.52 14.948 13.073 14.5 12.52 14.5H12.51C11.958 14.5 11.5149 14.948 11.5149 15.5C11.5149 16.052 11.968 16.5 12.52 16.5C13.072 16.5 13.52 16.052 13.52 15.5ZM13.25 12.071V7.5C13.25 7.086 12.914 6.75 12.5 6.75C12.086 6.75 11.75 7.086 11.75 7.5V12.071C11.75 12.485 12.086 12.821 12.5 12.821C12.914 12.821 13.25 12.485 13.25 12.071Z"
                            fill="#C33D1F" />
                    </svg>
                    <h1 class="font-bold">
                        Opgelet: vervallen facturen
                    </h1>
                </div>

                <div class="max-w-[420px]">

                    <h1 class="text-[12px]">We stellen vast dat volgende factuur vervallen is: #F0001. Uw bestelling kan
                        worden behandeld 24u nadat u het vervallen factuur heeft betaald. Gelieve
                        per afzonderlijke e-mail betaling te bevestigen.</h1>
                </div>
            </div>

            <div class="flex justify-center mt-[48px]">
                <button
                    class="bg-[#CC181B] text-white px-4 py-2 hover:bg-white hover:text-[#CC181B] border-2 hover:border-[#CC181B]">Bekijk
                    facturen</button>

            </div>

        </div>





    </div>
   </div>
    <livewire:layout.image>
        <livewire:layout.footer>

</x-app-layout>
