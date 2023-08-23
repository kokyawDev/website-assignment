<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="bg-[#FFFFF]">
    <div class="container mx-auto">
{{--        nav--}}
        <nav class="flex justify-between items-center space-x-4 pt-5 pb-2">
            <div>
                <div>The</div>
                <div class="text-2xl font-medium">Ordinary.</div>
            </div>

            <ul class="flex space-x-18">
                <li>
                    <a href="#" className="rounded-lg px-3 py-2 text-slate-700 font-medium hover:bg-slate-100 hover:text-slate-900">Catalogue</a>
                </li>
                <li>
                    <a href="#" className="rounded-lg px-3 py-2 text-slate-700 font-medium hover:bg-slate-100 hover:text-slate-900">Best Sellers</a>
                </li>
                <li>
                    <a href="#" className="rounded-lg px-3 py-2 text-slate-700 font-medium hover:bg-slate-100 hover:text-slate-900">About The Ordinary</a>
                </li>
                <li>
                    <a href="#" className="rounded-lg px-3 py-2 text-slate-700 font-medium hover:bg-slate-100 hover:text-slate-900">Blog</a>
                </li>
            </ul>

            <ul class="flex space-x-4 items-center pb-1">
                <li>
                    <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </li>
                <li>
                    <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                    </svg>
                </li>
                <li>
                    <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9V4a3 3 0 0 0-6 0v5m9.92 10H2.08a1 1 0 0 1-1-1.077L2 6h14l.917 11.923A1 1 0 0 1 15.92 19Z"/>
                    </svg>
                </li>
            </ul>
        </nav>
{{--        main--}}
        <main class="flex flex-col space-y-24 mt-5 mb-10">
            {{--        heading--}}
            <div class="h-[100vh] bg-no-repeat bg-cover bg-center bg-opacity-50" style="background-image: url({{ asset('img/heading-banner-removebg.png') }})">
                <div class="flex items-center mx-6 h-full">
                    <div>
                        <p class="mb-8 text-black/70">Clinical formulations <br> with integrity</p>
                        <div>
                            <p class="text-4xl">The</p>
                            <p class="text-8xl"> Ordinary.</p>
                        </div>
                    </div>
                </div>
            </div>
{{--            products--}}
            <div>
                <div class="flex justify-between mb-5">
                    <div class="text-lg font-semibold">BEST SELLERS</div>
                    <a href="#" class="text-lg font-semibold underline decoration-black/50">SEE ALL</a>
                </div>

                <div class="flex flex-wrap flex-row -mx-3">
                    <div class="md:w-1/4 p-3">
                        <div class="flex flex-col">
                            <div class="mb-4">
                                <img
                                    src="{{ asset('img/product-1.jpg') }}"
                                    class="object-cover w-full h-[480px]"
                                    alt=""
                                >
                            </div>
                            <div>
                                <div class="mb-2 flex justify-between mr-3">
                                    <div>
                                        <div class="text-sm font-medium">Hyaluronic Acid 2% + B5</div>
                                        <div class="text-sm font-medium">Hydrating Serum</div>
                                    </div>
                                    <div>
                                        <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="font-semibold">$8.90 - $15.70</div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/4 p-3">
                        <div class="flex flex-col">
                            <div class="mb-4">
                                <img
                                    src="{{ asset('img/product-1.jpg') }}"
                                    class="object-cover w-full h-[480px]"
                                    alt=""
                                >
                            </div>
                            <div>
                                <div class="mb-2 flex justify-between mr-3">
                                    <div>
                                        <div class="text-sm font-medium">Hyaluronic Acid 2% + B5</div>
                                        <div class="text-sm font-medium">Hydrating Serum</div>
                                    </div>
                                    <div>
                                        <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="font-semibold">$8.90 - $15.70</div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/4 p-3">
                        <div class="flex flex-col">
                            <div class="mb-4">
                                <img
                                    src="{{ asset('img/product-1.jpg') }}"
                                    class="object-cover w-full h-[480px]"
                                    alt=""
                                >
                            </div>
                            <div>
                                <div class="mb-2 flex justify-between mr-3">
                                    <div>
                                        <div class="text-sm font-medium">Hyaluronic Acid 2% + B5</div>
                                        <div class="text-sm font-medium">Hydrating Serum</div>
                                    </div>
                                    <div>
                                        <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="font-semibold">$8.90 - $15.70</div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/4 p-3">
                        <div class="flex flex-col">
                            <div class="mb-4">
                                <img
                                    src="{{ asset('img/product-1.jpg') }}"
                                    class="object-cover w-full h-[480px]"
                                    alt=""
                                >
                            </div>
                            <div>
                                <div class="mb-2 flex justify-between mr-3">
                                    <div>
                                        <div class="text-sm font-medium">Hyaluronic Acid 2% + B5</div>
                                        <div class="text-sm font-medium">Hydrating Serum</div>
                                    </div>
                                    <div>
                                        <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="font-semibold">$8.90 - $15.70</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

{{--        footer--}}
        <footer class="mt-24 pb-8">
            <div class="pb-8 mb-8 border-b border-gray-200">
                <div class="font-medium">The</div>
                <div class="text-2xl font-medium">Ordinary.</div>
            </div>
            <div class="flex flex-wrap flex-row w-full mb-12">
                <div class="md:w-1/4">
                    <div class="font-extrabold text-sm mb-3">MAIN PAGE</div>
                    <div class="font-extrabold text-sm mb-3">ABOUT US</div>
                    <div class="font-extrabold text-sm mb-3">CONTACTS</div>
                </div>
                <div class="md:w-1/4">
                    <div class="font-extrabold text-md mb-5">CATALOG</div>
                    <div class="font-medium text-sm text-black/80 mb-3">Skin care</div>
                    <div class="font-medium text-sm text-black/80 mb-3">Hair & Body</div>
                    <div class="font-medium text-sm text-black/80 mb-3">Best Sellers</div>
                </div>
                <div class="md:w-1/4">
                    <div class="font-extrabold text-md mb-5">CUSTOMER CARE</div>
                    <div class="font-medium text-sm text-black/80 mb-3">FAQ</div>
                    <div class="font-medium text-sm text-black/80 mb-3">Disposal Instructions</div>
                    <div class="font-medium text-sm text-black/80 mb-3">Return Policy</div>
                    <div class="font-medium text-sm text-black/80 mb-3">Promotion Terms & Conditions</div>
                </div>
{{--                <div class="md:w-1/4">--}}
{{--                    <div class="font-extrabold text-sm mb-3">MAIN PAGE</div>--}}
{{--                    <div class="font-extrabold text-sm mb-3">ABOUT US</div>--}}
{{--                    <div class="font-extrabold text-sm mb-3">CONTACTS</div>--}}
{{--                </div>--}}
            </div>
            <div class="flex flex-row justify-between items-center">
                <div class="text-black/50 text-xs">@ 2023 The Ordinary.<span class="underline">Terms of use and privacy policy.</span></div>
                <ul class="flex space-x-4">
                    <li>
                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                        </svg>
                    </li>
                    <li>
                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                        </svg>
                    </li>
                    <li>
                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                        </svg>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>
