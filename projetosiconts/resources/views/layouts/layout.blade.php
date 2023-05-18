<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- links de configuração -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link rel="stylesheet" href="css/materialize.min.css"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="blue" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="{{route('home')}}" class="brand-logo light">
                    <img src="{{asset('logo/Siconts_logo.jpg')}}" alt="_blank" width="85px">
                </a>

                {{-- menu de desktop inicial --}}
                <ul class="right hide-on-med-and-down" id="nav-mobile" class="sidenav" >

                    {{-- quando não estiver logado no sistema --}}
                    @guest
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Registre-se</a></li>
                    @endguest
                    {{-- quando estiver logado no sistema --}}
                    @auth
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    @endauth

                </ul>
            </div>
        </nav>

        <div class="section no-pad-bot">
            <div class="container">
                <br>
                <h1 class="header center black-text">Sistema Siconts</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Um sistema de Gerenciamento de Quadro de Tarefas Scrum</h5>
                </div>
                <br>
            </div>
        </div>

        <div class="container">
            <div class="section">
                <!-- seção dos ícones-->
                <div class="row">
                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Mais Controle nas Tarefas</h5>
                            <p class="light">Com o Siconts você poderá gerenciar melhor as suas tarefas do quadro
                                assim como os cartões da equipe. Além de automatizar os status de cada tarefa realizada,
                                isso permitirá maior vantagem quanto as ocorrências individuais dos membros da equipe.
                            </p>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">Melhor visualização da equipe</h5>
                            <p class="light">Você poderá trabalhar melhor com a sua equipe, gerenciando os cartões em
                                grupo e principalmente compartilhando as tarefas de desenvolvimento com a
                                automatização dos cartões do quadro Scrum.<br>
                                Faça Login ou Registre-se agora.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="page-footer blue">
            <div class="footer-copyright">
                <div class="container">
                    Projeto: <a class="black-text text-lighten-3" href="https://github.com/aleCS20/ProjetoSiconts" target="_blank">Github</a>
                </div>
            </div>
        </footer>

        @yield('content')

        {{-- script JQuery --}}
        <script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
            crossorigin="anonymous"></script>
        </script>

        <!-- Compiled and minified JavaScript-->
        <script src="js/materialize.min.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>
