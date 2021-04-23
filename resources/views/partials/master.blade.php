<!DOCTYPE html>
<html  data-wf-page=@yield('page') data-wf-site='5f8d4e0da2afa35b4a26d78e' class='w-mod-js w-mod-ix wf-poppins-n3-active wf-poppins-n4-active wf-poppins-n5-active wf-active'>
    <head>
        @include('partials.meta')
        <title>@yield('title') - Victoria Rose Aesthetics</title>
        <link href="/css/app.css" rel="stylesheet" type="text/css" />
        <link href="/css/blog.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,regular,500" media="all" />
        <script type="text/javascript">
            WebFont.load({ google: { families: ["Poppins:300,regular,500"] } });
        </script>
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
        <script type="text/javascript">
            !(function (o, c) {
                var n = c.documentElement,
                    t = " w-mod-";
                (n.className += t + "js"), ("ontouchstart" in o || (o.DocumentTouch && c instanceof DocumentTouch)) && (n.className += t + "touch");
            })(window, document);
        </script>
        <link href="/img/fav.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="/img/Victoria+Rose+Aesthetics+Primary+Logo.png" rel="apple-touch-icon" />
        <style>
            * {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
        </style>
    </head>
    <body>
        <div style="display: none; opacity: 0;" class="load-overlay"></div>

        @include('partials.nav')

        @yield('content')

        @include('partials.footer')

        <script
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f8d4e0da2afa35b4a26d78e"
            type="text/javascript"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
        <script src="/js/app.js" type="text/javascript"></script>
        <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    </body>
</html>

