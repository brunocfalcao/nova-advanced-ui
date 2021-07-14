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
        <div class="px-4 sm:px-8 md:px-12 xl:container mx-auto">
            <!-- Logo header -->
            <section class="pt-12 bg-background-900">
                <div class="w-full bg-background-900">
                    <img class="h-12 mx-auto" src="/vendor/nova-advanced-ui/images/logo.png" alt="{{ course()->name }}">
                </div>
            </section>
            <!-- /Logo header -->
            <!-- Hero -->
            <!-- Responsive outer container -->
            <section class="w-full bg-background-900 px-12 xl:px-32 py-12">
                <!-- Inner container -->
                <div class="flex flex-wrap md:flex-nowrap gap-6 sm:gap-16">
                    <!-- Left hero container -->
                    <!-- Title and subtitle -->
                    <div class="w-full md:w-1/2">
                        <p class="text-4xl md:text-3xl lg:text-4xl text-center sm:text-left sm:text-5xl font-bold text-primary-400 italic leading-tight pb-6">The <span class="text-secondary-600">aspirin</span> for your Nova UI coding <span class="text-secondary-600">headaches</span></p>
                        <p class="text-2xl md:text-xl lg:text-2xl text-center sm:text-left font-bold text-primary-100 leading-snug">The course that will empower you to create killer, beautiful, and enhanced UI components in Laravel Nova</p>
                        <!-- /Title and subtitle -->
                        <!-- Features -->
                        <div class="py-12">
                            <ul class="flex flex-col gap-6 text-secondary-100 text-xl">
                                <li class="w-full sm:flex gap-6 items-start">
                                    <svg class="mx-auto sm:mx-0 flex-shrink-0 h-16 w-16 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="text-xl md:text-base lg:text-xl pt-3 sm:pt-0 text-center sm:text-left">Deep-dive in all UI components, from Fields to Resource Tools, from Metrics to Cards. You will learn the nitty-gritty of the Nova UI framework!</p>
                                </li>
                                <li class="w-full sm:flex gap-6 items-start">
                                    <svg class="mx-auto sm:mx-0 flex-shrink-0 h-16 w-16 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="text-xl md:text-base lg:text-xl pt-3 sm:pt-0 text-center sm:text-left">HD professional crystal clean videos, downloadable, codebase examples for each lesson, free UI Form Wizard Nova Component</p>
                                </li>
                            </ul>
                        </div>
                        <!-- /Features -->
                        <!-- Subscription Form -->
                        <form class="flex flex-col sm:flex-row gap-4 pb-3">
                            <input placeholder="Enter email address" class="focus:outline-none bg-white border border-background-300 px-4 py-2 flex-1 rounded-lg" type="text">
                            <button href="#" class="focus:outline-none flex-shrink-0 flex font-semibold rounded-lg mx-auto sm:mx-0">
                                <div class="tracking-wide flex-shrink-0 p-3 bg-secondary-600 rounded-l-lg text-white">
                                    <div>Send me updates!</div>
                                </div>
                                <div class="bg-secondary-800 p-3 rounded-r-lg">
                                    <svg class="w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </button>
                        </form>
                        <!-- /Subscription Form -->
                        <!-- Form disclaimers -->
                        <div class="flex gap-4 justify-center md:justify-start">
                            <div class="flex items-center gap-3">
                                <svg class="h-6 w-6 text-secondary-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-secondary-200 text-xs">No SPAM</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="h-6 w-6 text-secondary-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-secondary-200 text-xs">Special discount if you register for updates</p>
                            </div>
                        </div>
                        <!-- /Form disclaimers -->
                    </div>
                    <!-- /Left hero container -->
                    <!-- Right hero container -->
                    <div class="w-full md:w-1/2 order-first md:order-last">
                        <img src="@image_placeholder_url(640,640)" class="rounded-lg" />
                    </div>
                    <!-- /Right hero container -->
                </div>
                <!-- /Inner container -->             
            </section>
            <!-- /Responsive outer container -->
            <!-- /Hero -->
            <!-- Testimonial section -->
            <section class="px-12 xl:px-32 py-12 bg-primary-300 text-coolgray-600">
                <div class="flex gap-8 flex-wrap sm:flex-nowrap">
                    <img src="/vendor/nova-advanced-ui/images/me.jpg" class="rounded-full w-40 h-40" />
                    <div class="sm:border-l-4 border-primary-200 sm:pl-8">
                        <p class="text-lg lg:text-xl font-bold italic">After creating the first-ever premium Laravel Nova course, Mastering Nova, I'm back to record a new community-requested course about how to create and extend the Laravel Nova UI framework, so you will never be stuck to create different Vue components that will match your needs inside Nova!</p>
                        <p class="text-lg font-bold text-coolgray-700 pt-6"><a class="link" href="https://twitter.com/brunocfalcao" target="_blank">@htmlentities('Bruno Falcão')</a></p>
                        <p class="text-base font-semibold text-coolgray-500">Creator of <a href="https://www.masteringnova.com" class="link" target="_blank">Mastering Nova</a>, <a href="https://github.com/laraning/nova-time-field" class="link" target="_blank">Nova Time Field</a>, <a href="https://www.laraflash.com" class="link" target="_blank">Laraflash</a>, <a href="https://www.laraning.com" class="link" target="_blank">Laraning</a> and <a href="https://github.com/brunocfalcao/blade-feather-icons" class="link" target="_blank">Feather Icons Blade Ui Kit</a></p>
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
            <section class="px-12 xl:px-32 py-12 bg-white text-coolgray-600">
                <p class="text-center text-2xl sm:text-3xl md:text-4xl text-coolgray-700 font-bold">Hidden Gems all the way</p>
                <p class="text-center text-xl lg:text-xl text-coolgray-600 mt-2">Create your Nova UI components using Vue</p>
                <div class="flex flex-wrap">
                    <div class="w-full max-w-md flex-auto h-16 bg-primary-500">1</div>
                    <div class="w-full max-w-md flex-auto h-16 bg-primary-300">2</div>
                    <div class="w-full max-w-md flex-auto h-16 bg-primary-500">3</div>
                </div>
            </section>
            <!-- /Features section -->
        </div>
        <script type="text/javascript" src="/vendor/nova-advanced-ui/js/retina.min.js"></script>
    </x-eduka::body>
</x-eduka::site>