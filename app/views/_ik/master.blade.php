<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">


        <link href="/assets/favicon.ico" rel="icon" type="image/x-icon" />
        <title>Debreceni Egyetem Informatikai Kar</title>

        <!--[if lt IE 9]>
            {{ HTML::script('//html5shim.googlecode.com/svn/trunk/html5.js'); }}
        <![endif]-->

        {{ HTML::style('css/bootstrap.min.css'); }}

        <style>

            html {
                position: relative;
                min-height: 100%;
            }
            body {
                margin-bottom: 60px;
            }
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 60px;
                background-color: #f5f5f5;
            }

            body > .container {
                padding: 60px 15px 0;
            }
            .container .text-muted {
                margin: 20px 0;
            }

            .footer > .container {
                padding-right: 15px;
                padding-left: 15px;
            }

            code {
                font-size: 80%;
            }
        </style>

    </head>
    <body>

        @include('_ik.header')
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="well well-sm">
                        <h3>Molnár Gábor</h3>
                        <p>Email: {{HTML::link('mailto:gabormolnar92@gmail.com','gabormolnar92@gmail.com',array('target'=>'_blank'))}}</p>
                        <p>Fogadóóra: egyeztetés alapján</p>
                        <h3>Oktatás</h3>
                        <p>Bevezetés az Informatikába</p>
                        <ul>
                            <li>Péntek 8.00-10.00 (IK-204)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-9"> 

                    @yield('content')

                </div><!--/col-12-->
            </div>
        </div>
        @include('_ik.footer')

        {{ HTML::script('js/jquery-2.1.1.min.js'); }}
        {{ HTML::script('js/bootstrap.min.js'); }}

    </body>
</html>
