<x-app-layout>
    <div class="flex-col gap-[48px] items-center p-[72px] max-w-[1440px] mx-auto">
        <h1 class="text-center text-[32px] font-bold leading-[48px] text-[#313131]">Info Center</h1>

        <div class="relative mt-[48px] mb-[30px] flex flex-col lg:max-w-[1296px]  items-start gap-[10px]">
            <img class="p-0 bg-center bg-no-repeat bg-cover lg:max-w-[854px] 39px 72px 767px" src="{{ asset('images/info.png') }}"
                alt="">
            <div class="lg:absolute mx-auto right-0 flex flex-col items-center gap-8 p-[12px] bg-gray-200 top-[88px] max-w-[512px]">
                <p class="font-semibold leading-7 text-center text-gray-800 text-md sm:text-2xl">
                    Document/info aanvragen
                </p>
                <p class="text-xs font-medium leading-6 text-center text-gray-800 sm:text-base">
                    Lorem nulla qui esse qui pariatur veniam ex eu aliqua in est adipisicing eiusmod cupidatat in enim veniam, Fugiat exercitation magna qui quis nostrud quis consectetur consequat duis minim veniam et pariatur. Consequat id laborum et irure incididunt qui magna veniam. Sit cillum id ma
                </p>
                <button class="flex items-center justify-center px-[32px] py-[16px] text-white space-x-2 max-h-[48px] bg-[#CC181B]">
                    Bekijk documenten
                </button>

            </div>

        </div>

        <div class="flex max-w-[744px] flex-col items-center gap-[32px] mx-auto">
            <h1 class="text-[#313131] text-[24px] font-semibold leading-9">Mijn documenten</h1>
            <div class="text-[12px] left-[18px] max-w-[349px] items-stretch text-center">
                Lorem nulla qui esse qui pariatur veniam ex eu aliqua in est adipisicing eiusmod cupidatat in enim veniam. Fugiat exercitation magna qui quis.
            </div>

           
            </div>
            <div class="my-8 overflow-x-auto">
                <table class="min-w-full bg-white border-2 border-[#F7F7FC] mx-auto">
                    <thead class="bg-gray-50">
                        <tr class="border-2">
                            <th class="px-4 py-3 text-sm font-semibold text-center border ">Datum</th>
                            <th class="px-4 py-3 text-sm font-semibold text-center border ">Titel document</th>
                            <th class="px-4 py-3 text-sm font-semibold text-center border">Download</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">

                        <tr class="even:bg-[#DBDADE]">
                            <td class="px-4 py-3 text-center border">06/01/2023</td>
                            <td class="px-4 py-3 text-center border">Offerte: Lorem ipsum</td>
                            <td class="flex justify-center px-4 py-3">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.55831 11.275C7.31414 11.0309 7.31414 10.635 7.55831 10.3908C7.80248 10.1467 8.19834 10.1467 8.4425 10.3908L9.87581 11.8242V2.5C9.87581 2.155 10.1558 1.875 10.5008 1.875C10.8458 1.875 11.1258 2.155 11.1258 2.5V11.8242L12.5591 10.3908C12.8033 10.1467 13.1992 10.1467 13.4433 10.3908C13.6875 10.635 13.6875 11.0309 13.4433 11.275L10.9433 13.775C10.8858 13.8325 10.8167 13.8783 10.7401 13.91C10.6634 13.9417 10.5825 13.9583 10.5008 13.9583C10.4191 13.9583 10.3384 13.9417 10.2618 13.91C10.1851 13.8783 10.1158 13.8325 10.0583 13.775L7.55831 11.275ZM15.5 7.70833C15.155 7.70833 14.875 7.98833 14.875 8.33333C14.875 8.67833 15.155 8.95833 15.5 8.95833C16.8142 8.95833 17.375 9.51917 17.375 10.8333V15C17.375 16.3142 16.8142 16.875 15.5 16.875H5.5C4.18583 16.875 3.625 16.3142 3.625 15V10.8333C3.625 9.51917 4.18583 8.95833 5.5 8.95833C5.845 8.95833 6.125 8.67833 6.125 8.33333C6.125 7.98833 5.845 7.70833 5.5 7.70833C3.485 7.70833 2.375 8.81833 2.375 10.8333V15C2.375 17.015 3.485 18.125 5.5 18.125H15.5C17.515 18.125 18.625 17.015 18.625 15V10.8333C18.625 8.81833 17.515 7.70833 15.5 7.70833Z"
                                        fill="#313131" />
                                </svg>

                            </td>
                        </tr>
                        <tr class="even:bg-[#DBDADE]">
                            <td class="px-4 py-3 text-center border">06/01/2023</td>
                            <td class="px-4 py-3 text-center border">Offerte: Lorem ipsum</td>
                            <td class="flex justify-center px-4 py-3 ">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.55831 11.275C7.31414 11.0309 7.31414 10.635 7.55831 10.3908C7.80248 10.1467 8.19834 10.1467 8.4425 10.3908L9.87581 11.8242V2.5C9.87581 2.155 10.1558 1.875 10.5008 1.875C10.8458 1.875 11.1258 2.155 11.1258 2.5V11.8242L12.5591 10.3908C12.8033 10.1467 13.1992 10.1467 13.4433 10.3908C13.6875 10.635 13.6875 11.0309 13.4433 11.275L10.9433 13.775C10.8858 13.8325 10.8167 13.8783 10.7401 13.91C10.6634 13.9417 10.5825 13.9583 10.5008 13.9583C10.4191 13.9583 10.3384 13.9417 10.2618 13.91C10.1851 13.8783 10.1158 13.8325 10.0583 13.775L7.55831 11.275ZM15.5 7.70833C15.155 7.70833 14.875 7.98833 14.875 8.33333C14.875 8.67833 15.155 8.95833 15.5 8.95833C16.8142 8.95833 17.375 9.51917 17.375 10.8333V15C17.375 16.3142 16.8142 16.875 15.5 16.875H5.5C4.18583 16.875 3.625 16.3142 3.625 15V10.8333C3.625 9.51917 4.18583 8.95833 5.5 8.95833C5.845 8.95833 6.125 8.67833 6.125 8.33333C6.125 7.98833 5.845 7.70833 5.5 7.70833C3.485 7.70833 2.375 8.81833 2.375 10.8333V15C2.375 17.015 3.485 18.125 5.5 18.125H15.5C17.515 18.125 18.625 17.015 18.625 15V10.8333C18.625 8.81833 17.515 7.70833 15.5 7.70833Z"
                                        fill="#313131" />
                                </svg>

                            </td>
                        </tr>
                        <tr class="even:bg-[#DBDADE]">
                            <td class="px-4 py-3 text-center border">06/01/2023</td>
                            <td class="px-4 py-3 text-center border">Offerte: Lorem ipsum</td>
                            <td class="flex justify-center px-4 py-3 ">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.55831 11.275C7.31414 11.0309 7.31414 10.635 7.55831 10.3908C7.80248 10.1467 8.19834 10.1467 8.4425 10.3908L9.87581 11.8242V2.5C9.87581 2.155 10.1558 1.875 10.5008 1.875C10.8458 1.875 11.1258 2.155 11.1258 2.5V11.8242L12.5591 10.3908C12.8033 10.1467 13.1992 10.1467 13.4433 10.3908C13.6875 10.635 13.6875 11.0309 13.4433 11.275L10.9433 13.775C10.8858 13.8325 10.8167 13.8783 10.7401 13.91C10.6634 13.9417 10.5825 13.9583 10.5008 13.9583C10.4191 13.9583 10.3384 13.9417 10.2618 13.91C10.1851 13.8783 10.1158 13.8325 10.0583 13.775L7.55831 11.275ZM15.5 7.70833C15.155 7.70833 14.875 7.98833 14.875 8.33333C14.875 8.67833 15.155 8.95833 15.5 8.95833C16.8142 8.95833 17.375 9.51917 17.375 10.8333V15C17.375 16.3142 16.8142 16.875 15.5 16.875H5.5C4.18583 16.875 3.625 16.3142 3.625 15V10.8333C3.625 9.51917 4.18583 8.95833 5.5 8.95833C5.845 8.95833 6.125 8.67833 6.125 8.33333C6.125 7.98833 5.845 7.70833 5.5 7.70833C3.485 7.70833 2.375 8.81833 2.375 10.8333V15C2.375 17.015 3.485 18.125 5.5 18.125H15.5C17.515 18.125 18.625 17.015 18.625 15V10.8333C18.625 8.81833 17.515 7.70833 15.5 7.70833Z"
                                        fill="#313131" />
                                </svg>

                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>

        
    </div>
    <livewire:layout.footer>
</x-app-layout>
