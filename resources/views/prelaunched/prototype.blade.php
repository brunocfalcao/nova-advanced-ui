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

            <!-- Logo header -->
            <div class="py-6 bg-background-900">
                <div class="w-full bg-background-900">
                    <img class="h-12 mx-auto" src="/vendor/nova-advanced-ui/images/logo.png" alt="{{ course()->name }}">
                </div>
            </div>
            <!-- /Logo header -->

            <!-- Hero -->

            <!-- /Hero -->

        </div>
        <script type="text/javascript" src="/vendor/nova-advanced-ui/js/retina.min.js"></script>
    </x-eduka::body>
</x-eduka::site>