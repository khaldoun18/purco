<x-app-layout>
    <div class=" py-[80px]">
        <h1 class="mb-[60px] text-[32px] font-bold text-center">Info Center</h1>

        <div class="">
            <div class="flex flex-col px-4 md:flex-row">
                <!-- Left side image -->
                <div class="md:w-6/10">
                    <img src="{{ asset('images/info.png') }}" alt="Worker" class="w-full h-auto" />
                </div>

                <!-- Right side contact card -->
                <div class="mt-4 md:mt-0 md:w-4/10">
                    <div class="p-8 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-2xl font-bold">Document/info aanvragen</h2>
                        <p class="mb-4">Lorem nulla qui esse qui pariatur veniam ex eu aliqua in est adipisicing
                            eiusmod cupidatat in enim veniam, Fugiat exercitation magna qui quis
                            nostrud quis consectetur consequat duis minim veniam et pariatur.
                            Consequat id laborum et irure incididunt qui magna veniam. Sit cillum id ma</p>


                        <button
                            class="bg-[#CC181B] text-white px-4 py-2 hover:bg-white hover:text-[#CC181B] border-2 hover:border-[#CC181B]">Bekijk documenten</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 sm:px-8">
            <div class="my-12 text-center">
                <h1 class="my-3 text-2xl font-black">Mijn documenten</h1>
                <p class="text-xl px-[200px] max-small:px-5 ">Lorem nulla qui esse qui pariatur veniam ex eu aliqua in
                    est
                    adipisicing eiusmod cupidatat in enim veniam. Fugiat
                    exercitation magna qui quis</p>
            </div>
            <div class="py-8">
                <div class="overflow-hidden border-b border-gray-200 rounded shadow">
                    <table class="mx-auto bg-white border-2 border-[#F7F7FC]">
                        <thead class="bg-gray-50">
                            <tr class="border-2">
                                <th class="px-4 py-3 border-2 text-sm font-semibold text-center ">Datum</th>
                                <th class="px-4 py-3 border-2 text-sm font-semibold text-center ">Titel document</th>
                                <th class="px-4 py-3 border-2 text-sm font-semibold text-center">Download</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            <tr>
                                <td class="px-4 py-3 border-2 text-center">06/01/2023</td>
                                <td class="px-4 py-3 border-2 text-center">Offerte: Lorem ipsum</td>
                                <td class="flex justify-center  px-4 py-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.55831 11.275C7.31414 11.0309 7.31414 10.635 7.55831 10.3908C7.80248 10.1467 8.19834 10.1467 8.4425 10.3908L9.87581 11.8242V2.5C9.87581 2.155 10.1558 1.875 10.5008 1.875C10.8458 1.875 11.1258 2.155 11.1258 2.5V11.8242L12.5591 10.3908C12.8033 10.1467 13.1992 10.1467 13.4433 10.3908C13.6875 10.635 13.6875 11.0309 13.4433 11.275L10.9433 13.775C10.8858 13.8325 10.8167 13.8783 10.7401 13.91C10.6634 13.9417 10.5825 13.9583 10.5008 13.9583C10.4191 13.9583 10.3384 13.9417 10.2618 13.91C10.1851 13.8783 10.1158 13.8325 10.0583 13.775L7.55831 11.275ZM15.5 7.70833C15.155 7.70833 14.875 7.98833 14.875 8.33333C14.875 8.67833 15.155 8.95833 15.5 8.95833C16.8142 8.95833 17.375 9.51917 17.375 10.8333V15C17.375 16.3142 16.8142 16.875 15.5 16.875H5.5C4.18583 16.875 3.625 16.3142 3.625 15V10.8333C3.625 9.51917 4.18583 8.95833 5.5 8.95833C5.845 8.95833 6.125 8.67833 6.125 8.33333C6.125 7.98833 5.845 7.70833 5.5 7.70833C3.485 7.70833 2.375 8.81833 2.375 10.8333V15C2.375 17.015 3.485 18.125 5.5 18.125H15.5C17.515 18.125 18.625 17.015 18.625 15V10.8333C18.625 8.81833 17.515 7.70833 15.5 7.70833Z"
                                            fill="#313131" />
                                    </svg>

                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 border-2 text-center">06/01/2023</td>
                                <td class="px-4 border-2 py-3 text-center">Offerte: Lorem ipsum</td>
                                <td class="flex justify-center px-4 border-t-2 py-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.55831 11.275C7.31414 11.0309 7.31414 10.635 7.55831 10.3908C7.80248 10.1467 8.19834 10.1467 8.4425 10.3908L9.87581 11.8242V2.5C9.87581 2.155 10.1558 1.875 10.5008 1.875C10.8458 1.875 11.1258 2.155 11.1258 2.5V11.8242L12.5591 10.3908C12.8033 10.1467 13.1992 10.1467 13.4433 10.3908C13.6875 10.635 13.6875 11.0309 13.4433 11.275L10.9433 13.775C10.8858 13.8325 10.8167 13.8783 10.7401 13.91C10.6634 13.9417 10.5825 13.9583 10.5008 13.9583C10.4191 13.9583 10.3384 13.9417 10.2618 13.91C10.1851 13.8783 10.1158 13.8325 10.0583 13.775L7.55831 11.275ZM15.5 7.70833C15.155 7.70833 14.875 7.98833 14.875 8.33333C14.875 8.67833 15.155 8.95833 15.5 8.95833C16.8142 8.95833 17.375 9.51917 17.375 10.8333V15C17.375 16.3142 16.8142 16.875 15.5 16.875H5.5C4.18583 16.875 3.625 16.3142 3.625 15V10.8333C3.625 9.51917 4.18583 8.95833 5.5 8.95833C5.845 8.95833 6.125 8.67833 6.125 8.33333C6.125 7.98833 5.845 7.70833 5.5 7.70833C3.485 7.70833 2.375 8.81833 2.375 10.8333V15C2.375 17.015 3.485 18.125 5.5 18.125H15.5C17.515 18.125 18.625 17.015 18.625 15V10.8333C18.625 8.81833 17.515 7.70833 15.5 7.70833Z"
                                            fill="#313131" />
                                    </svg>

                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 border-2 text-center">06/01/2023</td>
                                <td class="px-4 py-3 border-2 text-center">Offerte: Lorem ipsum</td>
                                <td class="flex  justify-center px-4 border-t-2 py-3">
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
        </div>

    </div>
    <livewire:layout.footer>
</x-app-layout>
