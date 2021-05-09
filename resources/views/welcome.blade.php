<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>{{ $contact->title }}</title>
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                /* font-family: 'Nunito', sans-serif; */
            }
        </style>
    </head>
    <body class="antialiased bg-orange-light relative font-akrobat bg-light">
        

        <div class="flex w-full justify-center">
            <div class="flex flex-col max-w-lg w-full justify-center">
                <div class="flex justify-center pt-10 ">
                    <img class="w-64" src="images/logo.png" alt="">
                </div>
                <div class="flex justify-between flex-row pt-6 w-8/12 m-auto py-3">
                    <a href="{{ $contact->facebook }}" target="_blank" class="flex w-12 overflow-hidden bg-secondary border-secondary border-solid border-4 rounded-2xl">
                        <img class="w-full" src="images/facebook.png" alt="">
                    </a>
                    <a href="{{ $contact->instagram }}" target="_blank" class="flex w-12 overflow-hidden bg-secondary border-secondary border-solid border-4 rounded-2xl">
                        <img class="w-full" src="images/instagram.png" alt="">
                    </a>
                    <a href="{{ $contact->whatsapp }}" target="_blank" class="flex w-12 overflow-hidden bg-secondary border-secondary border-solid border-4 rounded-2xl">
                        <img class="w-full" src="images/whatsapp.png" alt="">
                    </a>
                    <a href="{{ $contact->google }}" target="_blank" class="flex w-12 overflow-hidden bg-secondary border-secondary border-solid border-4 rounded-2xl">
                        <img class="w-full" src="images/google.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <div class="w-full flex flex-wrap max-w-5xl lg:mb-0 mb-32">

                <div class="flex w-full flex-col lg:w-1/2">
                    <div class="flex flex-row items-center w-full px-1 mt-12">
                        <div class="flex w-12 mr-2 -mt-2">
                            <div>
                                <img class="w-full" src="images/category.png" alt="">
                            </div>
                        </div>
                        <div class="flex w-auto">
                            <h1 class="text-4xl font-black font-akrobat uppercase text-primary">SANDWICHES SIMPLES</h1>
                        </div>
                    </div>
                    <div class="flex flex-row items-start px-1 mt-2 w-full">
                        <div class="w-full">
                            <div class="flex flex-row w-full items-stretch border-primary border-b-2">
                                <div class="flex-grow border-0 border-dotted mx-2"></div>
                                <div>
                                    <span class="block font-semibold text-lg">
                                        Normal
                                        <span class=" font-semibold text-sm mx-2.5"></span>
                                        3/4
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-start px-1 mt-2 w-full">
                        <div class="w-14 mr-1.5">
                            <img src="images/menu.png" alt="">
                        </div>
                        <div class="w-full">
                            <div class="flex flex-row w-full items-stretch -mb-2">
                                <div>
                                    <h2 class="flex font-bold text-xl leading-5">Thon avec charcuterie et Oeuf</h2>
                                </div>
                                <div class="flex-grow border-0 border-b-2 border-black border-dotted mx-2 mb-2"></div>
                                <div>
                                    <p class="block font-semibold text-lg leading-6">
                                        88DH
                                        <span class=" font-semibold text-sm mx-1"></span>
                                        88DH
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="flex text-sm text-black text-opacity-70 leading-4 mt-2" style="font-family: inherit ">
                                    Viande Hachée 80g, Cheddar, Oeuf, Oignon, Tomate, Salade, Cornichon, Sauce Maison, Frites
                                </p>
                                <span class="flex font-semibold text-lg text-light">
                                    88DH
                                    <span class=" font-semibold text-sm mx-1"></span>
                                    88DH
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($categories as $category)
                @if($category->plats()->get()->isEmpty())
                    @continue    
                @endif
                <div class="flex w-full flex-col lg:w-1/2">
                    <div class="flex flex-row items-center w-full justify-center mt-12">
                        <div class="flex w-16 mr-2 -mt-2">
                            <img class="w-full" src="{{ voyager::image($category->image) }}" alt="">
                        </div>
                        <div class="flex w-auto">
                            <h1 class="text-6xl font-black font-akrobat uppercase text-primary">{{ $category->title }}</h1>
                        </div>
                    </div>
                    @foreach ($category->plats()->get() as $plat)
                    <div class="flex flex-row items-center px-7 mt-2 w-full">
                        <div class="w-14 mr-3">
                            @empty(!$plat->image)
                            <img src="{{ voyager::image($plat->image) }}" alt="">
                            @endempty
                            @empty($plat->image)
                            <img src="images/menu.png" alt="">
                            @endempty
                        </div>
                        <div class="w-full">
                            <div class="flex flex-row w-full items-stretch -mb-2">
                                <div>
                                    <h2 class="font-bold text-2xl">{{ $plat->title }}</h2>
                                </div>
                                <div class="flex-grow border-0 border-b-2 border-black border-dotted mx-2 mb-2"></div>
                                <div>
                                    <span  class="font-bold text-2xl">{{ $plat->price }}DH</span>
                                </div>
                            </div>
                            <div>
                                <span class="text-sm text-black text-opacity-70">
                                    {{ $plat->descrption }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>

        <div class="fixed bottom-10 px-4 w-full flex justify-center">
            <a href="tel:{{ $contact->phone }}" class="bg-secondary w-full max-w-md py-1 px-2 rounded-full flex flex-row items-center">
                <div class="flex w-12 mr-4">
                    <img src="images/phone.png" class="w-full" alt="">
                </div>
                <div class="flex -mb-1">
                    <h1 class="text-neutral font-black uppercase text-3xl">comander facilement</h1>
                </div>
            </a>
        </div>
    </body>
</html>
