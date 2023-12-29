<x-app-layout>
    <div class="container mx-auto sm:p-[72px] p-[37px]">
        <h1 class="sm:text-[32px] text-2xl font-bold text-center mb-[48px]">Dashboard</h1>
        <div class="grid grid-cols-3 gap-x-[24px] gap-y-[24px] max-small:grid-cols-2">
            <a  href="{{ route('quote') }}" wire:navigate>
                <div class="flex flex-col items-center justify-center text-center my-[28px] sm:my-[48px]">


                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d=" M18.937 67.9375H7.4375C4.33095 67.9375 1.8125 65.419 1.8125 62.3125V7.1875C1.8125
                4.08095 4.33095 1.5625 7.4375 1.5625H34.4375C35.9907 1.5625 37.397 2.19208 38.4149 3.21006L44.0399
                8.83506C45.0578 9.85291 45.6875 11.2592 45.6875 12.8125V28.3064" stroke="#CC1819" stroke-width="3"
                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M58.5852 31.3165C60.7819 29.1198 64.3435 29.1198 66.5401 31.3165C68.7368 33.5132 68.7368 37.0748 66.5401 39.2715L43.2904 62.5212C42.8827 62.9288 42.4149 63.2714 41.903 63.5369L34.0263 67.6227C32.9671 68.1722 31.6316 68.0026 30.7427 67.1138C29.854 66.2251 29.6844 64.8896 30.2338 63.8302L34.3197 55.9535C34.5852 55.4418 34.9277 54.9738 35.3354 54.5661L58.5852 31.3165Z"
                stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M13.0625 22.9375H34.4375" stroke="#CC1819" stroke-width="3" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
            <path d="M13.0625 34.1875H34.4375" stroke="#CC1819" stroke-width="3" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
            <path d="M13.0625 45.4375H23.1875" stroke="#CC1819" stroke-width="3" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <h1 class="my-[20px] font-semibold lg:text-[24px]">Offerte aanvragen</h1>

        </div>
        </a>
        <a href="{{ route('order') }}" wire:navigate>
            <div class="flex flex-col items-center justify-center sm:my-[48px] my-[28px]  text-center">

                <svg width="72" height="73" viewBox="0 0 72 73" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M63.5625 47.6504H24.1875C21.081 47.6504 18.5625 45.1319 18.5625 42.0254C18.5625 38.9188 21.081 36.4004 24.1875 36.4004H27"
                        stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M24.1875 69.9375C27.2941 69.9375 29.8125 67.4191 29.8125 64.3125C29.8125 61.2059 27.2941 58.6875 24.1875 58.6875C21.0809 58.6875 18.5625 61.2059 18.5625 64.3125C18.5625 67.4191 21.0809 69.9375 24.1875 69.9375Z"
                        stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M57.9375 69.9375C61.0441 69.9375 63.5625 67.4191 63.5625 64.3125C63.5625 61.2059 61.0441 58.6875 57.9375 58.6875C54.8309 58.6875 52.3125 61.2059 52.3125 64.3125C52.3125 67.4191 54.8309 69.9375 57.9375 69.9375Z"
                        stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M2.8125 3.5625H8.24541C10.8658 3.5625 13.1392 5.37192 13.727 7.92553L18.7774 29.8637C19.6394 33.6083 22.9936 36.4005 27 36.4005H41.0625"
                        stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M13.8076 8.27539H63.5626C66.6691 8.27539 69.1876 10.7938 69.1876 13.9004C69.1876 14.6135 69.0548 15.2957 68.8128 15.9234L63.0004 30.9974C61.7817 34.158 58.7152 36.4002 55.1251 36.4002H52.3126"
                        stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>


                <h1 class="my-[20px] font-semibold lg:text-[24px]">Bestel nu</h1>
            </div>
        </a>
        <a href="{{ route('my-orders') }}" wire:navigate>
            <div class="flex flex-col items-center justify-center my-[28px] sm:my-[48px] text-center">

                <svg width="72" height="73" viewBox="0 0 72 73" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_27_5839)">
                        <mask id="mask0_27_5839" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="72" height="73">
                            <path d="M72 0.75H0V72.75H72V0.75Z" fill="white" />
                        </mask>
                        <g mask="url(#mask0_27_5839)">
                            <path d="M42.8906 21.1484H33.1875" stroke="#CC1819" stroke-width="3" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <mask id="mask1_27_5839" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="72" height="73">
                                <path d="M0 0.750008H72V72.75H0V0.750008Z" fill="white" />
                            </mask>
                            <g mask="url(#mask1_27_5839)">
                                <path d="M54.2812 47.2969V11.0156C54.2812 6.89939 57.6181 3.5625 61.7344 3.5625"
                                    stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" />
                                <path
                                    d="M61.875 3.56251H11.25C6.59011 3.56251 2.8125 7.34012 2.8125 12V61.5C2.8125 66.1599 6.59011 69.9375 11.25 69.9375H45.8438C50.5036 69.9375 54.2812 66.1599 54.2812 61.5"
                                    stroke="#CC1819" stroke-width="3" stroke-miterlimit="10"
                                    stroke-linecap="round" />
                                <path
                                    d="M14.0625 19.8828L17.2408 23.0926C17.9041 23.7347 18.9657 23.6627 19.5394 22.9369L24.4687 15.9375"
                                    stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M42.8906 38.1719H33.1875" stroke="#CC1819" stroke-width="3"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M14.0625 36.9063L17.2408 40.116C17.9041 40.7581 18.9657 40.6861 19.5394 39.9604L24.4687 32.9609"
                                    stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M54.4219 28.4531H60.7624C65.4223 28.4531 69.1999 24.6755 69.1999 20.0156V11.0156C69.1999 6.89939 65.863 3.5625 61.7468 3.5625"
                                    stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" />
                                <path d="M42.8906 55.0469H33.1875" stroke="#CC1819" stroke-width="3"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M14.0625 53.7813L17.2408 56.991C17.9041 57.6331 18.9657 57.5611 19.5394 56.8354L24.4687 49.8359"
                                    stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </g>
                    </g>
                    <defs>
                        <clipPath id="clip0_27_5839">
                            <rect width="72" height="72" fill="white" transform="translate(0 0.75)" />
                        </clipPath>
                    </defs>
                </svg>


                <h1 class="my-[20px] font-semibold lg:text-[24px]">Mijn bestellingen</h1>
            </div>
        </a>

        <a href="{{ route('info-center') }}" wire:navigate>
            <div class="flex flex-col items-center justify-center my-[28px] sm:my-[48px] text-center">

                <svg width="72" height="73" viewBox="0 0 72 73" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M36 53.8281V35.2656C36 32.1591 33.4815 29.6406 30.375 29.6406H28.9688M28.9688 53.9688H36H43.0312M66.8534 48.5C68.3595 44.7099 69.1875 40.5766 69.1875 36.25C69.1875 17.9211 54.3289 3.0625 36 3.0625C17.6711 3.0625 2.8125 17.9211 2.8125 36.25C2.8125 54.5789 17.6711 69.4375 36 69.4375C42.3915 69.4375 48.361 67.6307 53.4256 64.5C56.2919 62.7282 58.8684 60.5323 61.0675 58"
                        stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <circle cx="36.5" cy="21.75" r="2.5" fill="#CC1819" />
                </svg>



                <h1 class="my-[20px] font-semibold lg:text-[24px]">Info Center</h1>
            </div>
        </a>

        <a href="{{ route('profile') }}" wire:navigate>
            <div class="flex flex-col items-center justify-center my-[28px] sm:my-[48px] text-center">

                <svg width="72" height="73" viewBox="0 0 72 73" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_27_5876)">
                        <mask id="mask0_27_5876" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="72" height="73">
                            <path d="M0 0.250008H72V72.25H0V0.250008Z" fill="white" />
                        </mask>
                        <g mask="url(#mask0_27_5876)">
                            <path
                                d="M36 39.0625C29.797 39.0625 24.75 34.0155 24.75 27.8125C24.75 21.6095 29.797 16.5625 36 16.5625C42.203 16.5625 47.25 21.6095 47.25 27.8125C47.25 34.0155 42.203 39.0625 36 39.0625Z"
                                stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M14.998 63.8086C14.9995 63.7903 15.0009 63.772 15.0037 63.7538C16.0232 53.055 25.0343 44.6878 36.0004 44.6878C46.9663 44.6878 55.976 53.0536 56.9985 63.7523"
                                stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M65.5905 18.3074C68.7659 23.5371 70.5938 29.6779 70.5938 36.25C70.5938 47.4705 65.2655 57.4352 56.9981 63.752V63.7534C51.1777 68.2028 43.9003 70.8438 36 70.8438C28.1011 70.8438 20.8237 68.2028 15.0034 63.7534C6.73593 57.4366 1.40625 47.4719 1.40625 36.25C1.40625 17.1306 16.8778 1.65625 36 1.65625C43.9975 1.65625 51.3572 4.36328 57.2134 8.91222"
                                stroke="#CC1819" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                    </g>
                    <defs>
                        <clipPath id="clip0_27_5876">
                            <rect width="72" height="72" fill="white" transform="translate(0 0.25)" />
                        </clipPath>
                    </defs>
                </svg>




                <h1 class="my-[20px] font-semibold lg:text-[24px]">Mijn profiel</h1>
            </div>
        </a>


        <div class="flex flex-col items-center justify-center my-[28px] sm:my-[48px] leading-6 text-center bg-[#EEFFF1]">
            <h1 class="mt-3 lg:text-[24px] font-semibold max-small:text-sm">Vragen? Contacteer ons!</h1>
            <h1 class="mt-1 text-xs large:mt-4 max-small:text-2xs">Nulla dolore eiusmod in amet aliqua</h1>
            <h1 class="mt-1 text-xs large:mt-4 max-small:text-2xs">reprehenderit nostrud sint nisi com</h1>

            <div class="large:flex large:gap-x-4 large:my-4 large:text-[16px] font-semibold large:whitespace-nowrap">
                <div class="flex large:gap-x-1 max-small:text-sm">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.8087 15.5253C18.8087 15.8253 18.742 16.1337 18.6003 16.4337C18.4587 16.7337 18.2753 17.017 18.0337 17.2837C17.6253 17.7337 17.1753 18.0587 16.667 18.267C16.167 18.4753 15.6253 18.5837 15.042 18.5837C14.192 18.5837 13.2837 18.3837 12.3253 17.9753C11.367 17.567 10.4087 17.017 9.45866 16.3253C8.50033 15.6253 7.59199 14.8503 6.72533 13.992C5.86699 13.1253 5.09199 12.217 4.40033 11.267C3.71699 10.317 3.16699 9.36699 2.76699 8.42533C2.36699 7.47533 2.16699 6.56699 2.16699 5.70033C2.16699 5.13366 2.26699 4.59199 2.46699 4.09199C2.66699 3.58366 2.98366 3.11699 3.42533 2.70033C3.95866 2.17533 4.54199 1.91699 5.15866 1.91699C5.39199 1.91699 5.62533 1.96699 5.83366 2.06699C6.05033 2.16699 6.24199 2.31699 6.39199 2.53366L8.32533 5.25866C8.47533 5.46699 8.58366 5.65866 8.65866 5.84199C8.73366 6.01699 8.77533 6.19199 8.77533 6.35033C8.77533 6.55033 8.71699 6.75033 8.60033 6.94199C8.49199 7.13366 8.33366 7.33366 8.13366 7.53366L7.50033 8.19199C7.40866 8.28366 7.36699 8.39199 7.36699 8.52533C7.36699 8.59199 7.37533 8.65033 7.39199 8.71699C7.41699 8.78366 7.44199 8.83366 7.45866 8.88366C7.60866 9.15866 7.86699 9.51699 8.23366 9.95033C8.60866 10.3837 9.00866 10.8253 9.44199 11.267C9.89199 11.7087 10.3253 12.117 10.767 12.492C11.2003 12.8587 11.5587 13.1087 11.842 13.2587C11.8837 13.2753 11.9337 13.3003 11.992 13.3253C12.0587 13.3503 12.1253 13.3587 12.2003 13.3587C12.342 13.3587 12.4503 13.3087 12.542 13.217L13.1753 12.592C13.3837 12.3837 13.5837 12.2253 13.7753 12.1253C13.967 12.0087 14.1587 11.9503 14.367 11.9503C14.5253 11.9503 14.692 11.9837 14.8753 12.0587C15.0587 12.1337 15.2503 12.242 15.4587 12.3837L18.217 14.342C18.4337 14.492 18.5837 14.667 18.6753 14.8753C18.7587 15.0837 18.8087 15.292 18.8087 15.5253Z"
                            stroke="#CC1819" stroke-width="1.5" stroke-miterlimit="10" />
                    </svg>
                    <h1>+32 12345678</h1>
                </div>
                <div class="flex large:gap-x-1 max-small:text-sm">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.667 17.3337H6.33366C3.83366 17.3337 2.16699 16.0837 2.16699 13.167V7.33366C2.16699 4.41699 3.83366 3.16699 6.33366 3.16699H14.667C17.167 3.16699 18.8337 4.41699 18.8337 7.33366V13.167C18.8337 16.0837 17.167 17.3337 14.667 17.3337Z"
                            stroke="#CC1819" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M14.6663 7.75L12.058 9.83333C11.1997 10.5167 9.79134 10.5167 8.933 9.83333L6.33301 7.75"
                            stroke="#CC1819" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <h1>email@email.com</h1>
                </div>
            </div>

        </div>

    </div>
    </div>
    <livewire:layout.footer>
</x-app-layout>
