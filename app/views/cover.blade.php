<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <link href="/assets/favicon.ico" rel="icon" type="image/x-icon" />
        <title>{{Config::get('globals.title');}} - {{$title or ''}}</title>

        <!--[if lt IE 9]>
            {{ HTML::script('//html5shim.googlecode.com/svn/trunk/html5.js'); }}
        <![endif]-->

        {{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext'); }}
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/font-awesome.min.css'); }}
        {{ HTML::style('css/animate.css'); }}
        {{ HTML::style('css/site/divide.css'); }}

    </head>
    <body>

        <header> 
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="divide-logo">
                            <img class="animated tada" src="assets/divide_logo.svg" height="150" width="150">
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                        <div class="table-responsive">
                            <table class="table table-hover info-table">
                                <tbody>
                                    <tr>
                                        <td>Cégnév</td>
                                        <td>Divide-Expo Kft.</td>
                                    </tr>
                                    <tr>
                                        <td>Cégjegyzékszám</td>
                                        <td>05-09-019821</td>
                                    </tr>
                                    <tr>
                                        <td>Adószám</td>
                                        <td>22710893-2-05</td>
                                    </tr>
                                    <tr>
                                        <td>Közösségi adószám</td>
                                        <td>HU22710893</td>
                                    </tr>
                                    <tr>
                                        <td>Bankszámlaszám (OTP)</td>
                                        <td>11734200-29901687</td>
                                    </tr>
                                    <tr>
                                        <td>Székhely</td>
                                        <td>3770 Sajószentpéter Kossuth Lajos utca 191. 1/2</td>
                                    </tr>
                                    <tr>
                                        <td>Telefonszám</td>
                                        <td>+36 (30) 623-13-12</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>+36 (30) 623-10-30</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{HTML::link('mailto:divide@divide.hu','divide@divide.hu',array('target'=>'_blank'))}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <div class="decor-top">
                <svg height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0 L100 100 L0 100" stroke-width="0"></path>
                </svg>
            </div>
            <div class="footer-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p class="text-center">© 2010-{{date('Y')}} Divide-Expo Kft.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        {{ HTML::script('js/jquery-2.1.1.min.js'); }}
        {{ HTML::script('js/bootstrap.min.js'); }}
        {{ HTML::script('js/divide.js'); }}


    </body>
</html>
