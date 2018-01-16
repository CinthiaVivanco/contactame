<!DOCTYPE HTML>
<HTML lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Multiplataforma</title>


        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="icon" href="{{asset('img/logo.ico')}}"/>

        {{ Html::style('local/css/bt/bootstrap.min.css') }}
        {{ Html::style('local/css/bt/font-awesome.min.css') }}
        @yield('style')
        {{ Html::style('local/css/style.css') }}

    </head>

    <body>

        <header>

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Contactame</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Agenda</a></li>
                        <li><a href="#">Precios</a></li>
                        <li><a href="#">Empleados</a></li>
                      </ul>

                      <form class="navbar-form navbar-right" role="search">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>

                    </div>
                </div>
            </nav>


        </header>

        <section>



            @yield('section')
        </section>

            {{ Html::script('local/js/jquery-2.1.3.min.js') }}
            {{ Html::script('local/js/bootstrap.min.js') }}

            @yield('script')

            {{ Html::script('local/js/script.js') }}            

    </body>

</HTML>


