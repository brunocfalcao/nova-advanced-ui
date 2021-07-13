<x-eduka::site title="My title">
    <x-eduka::head>
        <link rel="stylesheet" type="text/css" href="/vendor/nova-advanced-ui/css/app.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">

        <!-- Social media -->
        <!--
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@brunocfalcao" />
        <meta name="twitter:title" content="Nova Advanced UI" />
        <meta name="twitter:description" content="Nova training course in advanced User Interface development" />
        <meta name="twitter:image" content="https://tailwindui.com/img/og-image.png" />
        <meta name="twitter:creator" content="@brunocfalcao" />
        <meta property="og:url" content="https://www.tailwindui.com/" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Tailwind UI" />
        <meta property="og:description" content="Beautiful UI components by the creators of Tailwind CSS." />
        <meta property="og:image" content="https://tailwindui.com/img/og-image.png" />
        <meta property="description" content="Beautiful UI components by the creators of Tailwind CSS." />
        -->
        <!-- /Social media -->

        <!-- Favicon --> 
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />        
        <!-- /Favicon -->
    </x-eduka::head>
    <x-eduka::body class="font-primary bg-repeat heropattern-topography-primary-950 antialised bg-background-900">
        <x-eduka::responsive-breakpoints></x-eduka::responsive-breakpoints>
        <div class="container mx-auto">

            <!-- Logo section -->
            <section class="bg-background-900 px-6 lg:px-8 py-8">
                <div class="max-w-screen-xl mx-auto flex justify-center items-center">
                    <img class="h-12" src="/vendor/nova-advanced-ui/images/logo.png" alt="{{ course()->name }}">
                </div>
            </section>
            <!-- /Logo section -->

            <!-- Hero section -->
            <section class="bg-background-900 px-6 lg:px-8">
                <div class="max-w-screen-xl mx-auto grid grid-cols-2 gap-8 lg:gap-24 md:items-start">
                    <div class="col-span-2 md:col-span-1 order-2 md:order-1">
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl text-primary-400 font-bold mb-6 xl:leading-tight">
                            The <i><span class="text-secondary-600">aspirin</span></i> for your Nova UI coding <i><span class="text-secondary-600">headaches</span></i>
                        </h2>
                        <p class="text-2xl text-primary-100 my-6">The course that will empower you to create killer, beautiful, and enhanced UI components in Laravel Nova</p>
                        <ul class="pt-6 space-y-5 text-lg">
                            <li class="flex space-x-5 items-start">
                                <span class="w-12 flex-shrink-0">
                                    <svg class="text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </span>
                                <span class="text-white">
                                Deep-dive in all UI components, from Fields to Resource Tools, from Metrics to Cards. You will learn the nitty-gritty of the Nova UI framework!
                                </span>
                            </li>
                            <li class="flex space-x-5 items-start">
                                <span class="w-12 flex-shrink-0">
                                    <svg class="text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </span>
                                <span class="text-white">
                                HD professional crystal clean videos, downloadable, codebase examples for each lesson, free UI Form Wizard Nova Component
                                </span>
                            </li>
                        </ul>
                        <!-- Early subscription form -->
                        @routename('prelaunched.welcome')
                        <form method="POST" action="{{ route('prelaunched.welcome') }}" class="flex flex-wrap space-y-2 space-x-2 md:space-y-3 xl:space-y-0 lg:space-x-1 xl:space-x-2 mt-6 lg:mt-8">
                            @csrf
                            @honeypot
                            <input name="email" type="text" placeholder="Enter email address" class="h-14 focus:outline-none bg-white border border-background-300 px-4 py-2 flex-1 rounded-lg">
                            <button href="#" class="focus:outline-none flex-shrink-0 flex font-semibold rounded-lg">
                                <div class="tracking-wide flex-shrink-0 p-4 bg-secondary-600 h-14 rounded-l-lg text-white">
                                    <div>Send me updates!</div>
                                </div>
                                <div class="bg-secondary-800 p-4 rounded-r-lg">
                                    <svg class="w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </button>

                            <div class="flex flex-wrap sm:flex-no-wrap justify-center items-center text-secondary-500 pt-2">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </form>
                        <!-- /Early subscription form -->
                        @endroutename
                        @routename('prelaunched.subscribed')
                        <ul class="py-5 space-y-5 text-lg">
                            <li class="flex space-x-5 items-start">
                                <span class="w-12 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                    </svg>
                                </span>
                                <span class="text-secondary-500 pt-3 font-bold">
                                    Thank you for subscribing! I'll be in touch!
                                </span>
                            </li>
                        </ul>
                        @endroutename
                        <div class="flex flex-col md:flex-row py-4 lg:py-8 space-x-6">
                            <div class="hidden lg:flex space-x-2 items-center">
                                <span class="w-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <span class="text-primary-100 font-semibold">
                                No Spam
                                </span>
                            </div>
                            <div class="hidden lg:flex space-x-2 items-center">
                                <span class="w-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <span class="text-primary-100 font-semibold">
                                Special discount if you register for updates
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="bgcol-span-2 md:col-span-1 flex flex-row space-x-2 order-1 md:order-2 items-center justify-center pt-4">
                        <img src="/vendor/nova-advanced-ui/images/hero.jpg" alt="" class="max-w-md w-full rounded-lg">
                    </div>
                </div>
            </section>
            <!-- /Hero section -->

            <!-- Testimonial section -->
            <section class="bg-primary-300 text-coolgray-600 px-6 lg:px-8 py-14">
                <div class="max-w-screen-lg mx-auto flex flex-col md:flex-row items-start space-y-6 md:space-y-0 md:space-x-6 lg:space-x-10">
                    <img src="/vendor/nova-advanced-ui/images/me.jpg" alt="Testimonial" class="rounded-full w-40 relative -top-2">
                    <div class="border-l-4 border-primary-200 pl-4 md:pl-8">
                        <p class="text-lg lg:text-xl font-bold italic">After creating the first-ever premium Laravel Nova course, Mastering Nova, I'm back to record a new community-requested course about
                            how to create and extend the Laravel Nova UI framework, so you will never be stuck to create different Vue components that will match your needs inside Nova!
                        </p>
                        <div class="mt-4">
                            <p class="text-lg font-bold text-coolgray-700 block"><a class="link" href="https://twitter.com/brunocfalcao" target="_blank">@htmlentities('Bruno Falcão')</a></p>
                            <p class="text-base font-semibold text-coolgray-500 block">Creator of <a href="https://www.masteringnova.com" class="link" target="_blank">Mastering Nova</a>, <a href="https://github.com/laraning/nova-time-field" class="link" target="_blank">Nova Time Field</a>, <a href="https://www.laraflash.com" class="link" target="_blank">Laraflash</a>, <a href="https://www.laraning.com" class="link" target="_blank">Laraning</a> and <a href="https://github.com/brunocfalcao/blade-feather-icons" class="link" target="_blank">Feather Icons Blade Ui Kit</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Testimonial section -->

            <!-- CTA section -->
            <section class="flex items-center justify-center p-3 text-white bg-secondary-600">
                <p class="ml-3 text-sm text-center font-bold">
                    This course will cover both the current Orion (3.x) version and the new Nova version planned to be released this year
                </p>
            </section>
            <!-- /CTA section -->

            <!-- Features section -->
            <section class="bg-white text-coolgray-600 px-6 lg:px-8 pt-12 pb-12">
                <div class="max-w-screen-xl mx-auto text-center">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl text-coolgray-700 font-bold">Hidden gems all the way</h2>
                    <p class="text-xl lg:text-xl text-coolgray-600 mt-2">Create your Nova UI components using Vue</p>
                </div>
                <div class="md:grid md:grid-cols-2 xl:grid-cols-3 md:gap-12 xl:gap-y-20 max-w-screen-xl mx-auto mt-12 lg:mt-12 space-y-12 md:space-y-0">
                    <div class="text-center">
                        <div class="w-16 mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">All default UI Components taught</h3>
                        <p>You'll learn all the default methods and attributes you can use in Fields, Cards, Panels, and Tools and the differences between them</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Deep dives all the way</h3>
                        <p>We'll deep dive into the UI components framework, understand how it was built and how you can take the most advantage of building your own UI components</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 mx-auto mb-4">
                            <svg class="text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">New components built from scratch</h3>
                        <p>Finally, you'll learn and master how to build new components from scratch, and with advanced techniques using Vue and other tools</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 mx-auto mb-4">
                            <svg class="text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Professional recording videos</h3>
                        <p>Full HD high-resolution videos, professional sound quality, and full downloaded so you can watch them offline and anytime you want</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 mx-auto mb-4">
                            <svg class="text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Downloadable codebase</h3>
                        <p>Each lesson will have a downloadable codebase so you don't need to copy-paste the codebase you're learning during each tutorial</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Purchase Power Parity</h3>
                        <p>You can buy this course at a proportional discount given the country you are located. And if you pre-subscribe now, you even get an extra discount</p>
                    </div>
                </div>
            </section>
            <!-- /Features section -->

            <!-- FAQ -->
            <div class="bg-secondary-500 text-coolgray-600 px-6 lg:px-8 pt-12 pb-20">
                <div class="max-w-screen-xl mx-auto text-center pb-12">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl text-primary-100 font-bold">Questions?</h2>
                    <p class="text-xl lg:text-xl text-primary-200 mt-2">Get more details on my course answers below</p>
                </div>
                <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-x-12">
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg my-4">
                        <h3 class="text-xl font-bold text-coolgray-700 block">Why should I buy this course?</h3>
                        <p class="mt-3">If you are already using Nova and you are stuck in developing UI components that will fit your needs then this course is for you. You will learn how the Nova UI was built, and how you can create simple and advanced UI Components like Fields, buttons, Tools, and much more</p>
                    </div>
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg my-4">
                        <h3 class="text-xl font-bold text-coolgray-700 block">I am new to Nova. Is this course for me?</h3>
                        <p class="mt-3">Unfortunately it is not. This course needs intermediate experience in using Laravel Nova and Vue. You should look at my other course, <a class="link" href="https://www.masteringnova.com" target="_blank">Mastering Nova</a>, and if you buy it, you'll have 50% discount in this one.</p>
                    </div>

                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg my-4">
                        <h3 class="text-xl font-bold text-coolgray-700 block">When will this course be released?</h3>
                        <p class="mt-3">There isn't an exact launch date yet, clearly, it will be released this year. I am currently recording the video tutorials, and hopefully will release the course on an early-access special discount base</p>
                    </div>
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg my-4">
                        <h3 class="text-xl font-bold text-coolgray-700 block">I bought your previous Mastering Nova course. Can I have a discount on this one?</h3>
                        <p class="mt-3">Yes you will! You will receive a <underline>personal discount of 50%</underline> (non-cumulative) for this course to thank you for your loyalty!</p>
                    </div>

                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg my-4">
                        <h3 class="text-xl font-bold text-coolgray-700 block">How much will this course cost?</h3>
                        <p class="mt-3">I don't know at the moment. But don't worry! You will have plenty of discount options and also purchase power parity!</p>
                    </div>
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg my-4">
                        <h3 class="text-xl font-bold text-coolgray-700 block">Who made your amazing logo?</h3>
                        <p class="mt-3"><a href="https://twitter.com/caneco" class="link" target="_blank">Caneco</a>. Who else :) ?</p>
                    </div>
                </div>
            </div>            
            <!-- /FAQ -->

            <!-- Footer section -->
            <footer class="bg-primary-300 text-coolgray-600 py-6 lg:py-8 px-6 lg:px-8 xl:px-4">
                <div class="max-w-screen-xl mx-auto flex flex-col space-y-6 lg:space-y-0 lg:flex-row justify-between items-center">
                    <img class="h-8" src="/images/uptimemate-logo-dark.svg" alt="UptimeMate logo">
                    <div class="flex items-center justify-center space-x-4">
                        <a href="#" class="hover:text-coolgray-500">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-8 w-8" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="hover:text-coolgray-500">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-8 w-8" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="hover:text-coolgray-500">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-8 w-8" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="text-center">© 2021 - themes.dev - All rights reserved</p>
                </div>
            </footer>
            <!-- /Footer section -->
        </div>

        <script type="text/javascript" src="/vendor/nova-advanced-ui/js/retina.min.js"></script>
    </x-eduka::body>
</x-eduka::site>