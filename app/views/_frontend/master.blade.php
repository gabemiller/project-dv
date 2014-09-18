<!DOCTYPE html>
<html>
    <head prefix="og: http://ogp.me/ns#">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">


        <link href="/assets/favicon.ico" rel="icon" type="image/x-icon" />
        <title>{{Config::get('globals.title');}} - {{$title or ''}}</title>

        <!--[if lt IE 9]>
            {{ HTML::script('//html5shim.googlecode.com/svn/trunk/html5.js'); }}
        <![endif]-->

        {{ HTML::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&subset=latin,latin-ext'); }}
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/font-awesome.min.css'); }}
        {{ HTML::style('css/blueimp-gallery.css'); }}
        {{ HTML::style('css/bootstrap-image-gallery.min.css'); }}
        {{ HTML::style('css/animate.css'); }}
        {{ HTML::style('css/site/divide.css'); }}

    </head>
    <body>
        <div id="fb-root"></div>

        @include('_frontend.lightbox')
        @include('_frontend.header')
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 

                    @yield('content')

                </div><!--/col-12-->
            </div>
        </div>
        @include('_frontend.footer')

        {{ HTML::script('js/jquery-2.1.1.min.js'); }}
        {{ HTML::script('js/bootstrap.min.js'); }}
        {{ HTML::script('js/plugins/metisMenu.js'); }}
        {{ HTML::script('js/plugins/jquery.blueimp-gallery.min.js'); }}
        {{ HTML::script('js/plugins/bootstrap-image-gallery.js'); }}
        {{ HTML::script('js/divide.js'); }}


    </body>
</html>
