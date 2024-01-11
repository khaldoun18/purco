<x-app-layout>
    <div class="flex-col gap-[48px] items-center p-[72px] max-w-[1440px] mx-auto">
        <h1 class="text-center text-[32px] font-bold leading-[48px] text-[#313131]">Info Center</h1>

        <div class="relative mt-[48px] mb-[30px] flex flex-col lg:max-w-[1296px]  items-start gap-[10px]">
            <img class="p-0 bg-center bg-no-repeat bg-cover lg:max-w-[854px] 39px 72px 767px"
                src="{{ asset('images/info.png') }}" alt="">
            <div
                class="lg:absolute mx-auto right-0 flex flex-col items-center gap-8 p-[12px] bg-gray-200 top-[88px] max-w-[512px]">
                <p class="font-semibold leading-7 text-center text-gray-800 text-md sm:text-2xl">
                    Document/info aanvragen
                </p>
                <p class="text-xs font-medium leading-6 text-center text-gray-800 sm:text-base">
                    Lorem nulla qui esse qui pariatur veniam ex eu aliqua in est adipisicing eiusmod cupidatat in enim
                    veniam, Fugiat exercitation magna qui quis nostrud quis consectetur consequat duis minim veniam et
                    pariatur. Consequat id laborum et irure incididunt qui magna veniam. Sit cillum id ma
                </p>
                <button
                    class="flex items-center justify-center px-[32px] py-[16px] text-white space-x-2 max-h-[48px] bg-[#CC181B]">
                    Bekijk documenten
                </button>

            </div>

        </div>

        <div class="flex max-w-[744px] flex-col items-center gap-[32px] mx-auto">
            <h1 class="text-[#313131] text-[24px] font-semibold leading-9">Mijn documenten</h1>
            <div class="text-[12px] left-[18px] max-w-[349px] items-stretch text-center">
                Lorem nulla qui esse qui pariatur veniam ex eu aliqua in est adipisicing eiusmod cupidatat in enim
                veniam. Fugiat exercitation magna qui quis.
            </div>


        </div>
        <livewire:backend.infocenter />


    </div>
    <div class="mt-[72px]">
        <livewire:layout.footer>
    </div>
</x-app-layout>
