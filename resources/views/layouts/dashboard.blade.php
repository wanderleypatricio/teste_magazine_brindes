<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Magazine Brindes - Controle de Usuários</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>  
  
        <script>
            $(document).ready(function(){
                $('input[name=cpf]').mask('999.999.999-99');
                $('input[name=telefone]').mask('00 00000-0000');
            });
        </script>      
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#">DashBoard</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Usuários</a></li>
                    </ul>
                </div>
            </nav>
            <main>
                @if(Session::has('mensagem'))
                <div class="container">
                    <div class="row">
                        <div class="card {{Session::get('mensagem')['class']}}">
                            <div align="center" class="card-content">

                                {{Session::get('mensagem')['msg']}}
                            </div>

                        </div>

                    </div>
                </div>
                @endif

                @yield('content')

            </main>

        </div>

        <!-- jQuery library -->        
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </body>
</html>
