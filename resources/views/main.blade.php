<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--CONFIGURAÇÕES BASICAS-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--PARAcard-prinMETROS PWA APPLE-->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="apple-touch-startup-image" media="(device-width: 414px) e (device-height: 896px) e (-webkit- proporção de pixel do dispositivo: 2)" href="images/img-carregamento.png">
        <link rel="apple-touch-icon"  href="images/icon-moeda-apple.png">  

        <!--DEFINIÇÃO FAVICON E TITLE-->
        <link rel="icon" type="image/x-icon" href="images/icon-moeda.png">
        <title>Finanças</title>

        <!--=IMPORTAÇÃO STYLES-->
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">
        <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    </head>

    <body class="bg-pourple" >
        <!--HEADER-->
        <header>
            <div class="bg-pourple p-2 text-light text-center">
                <h2 id="titulo"></h2>
            </div>
        </header>    
        <div class="bg-gray corpo">
            @yield('conteudo')
        </div>
        <!--MENU-->
        <nav class="menu menu-shaddow">
            <div class="container">
                <div class="row">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn bg-gray active" onclick="redirect('home')">
                            <input class="d-none" type="radio" name="options" id="btn_home" autocomplete="off" checked>
                            <img class="menu-icone" src="images/icon-home.png"><br>
                            Principal
                        </label>
                        <label class="btn bg-gray" onclick="redirect('entradas')">
                            <input class="d-none"  type="radio" name="options" id="btn_entradas" autocomplete="off"> 
                            <img class="menu-icone"  src="images/icon-entrada.png"><br>
                            Entradas
                        </label>
                        <label class="btn bg-gray" onclick="redirect('saidas')">
                            <input class="d-none"  type="radio" name="options" id="btn_saidas" autocomplete="off"> 
                            <img class="menu-icone" src="images/icon-saida.png"><br>
                            Saídas
                        </label>
                        <label class="btn bg-gray" onclick="redirect('categorias')">
                            <input class="d-none"  type="radio" name="options" id="btn_categorias" autocomplete="off"> 
                            <img class="menu-icone" src="images/icon-saida.png"><br>
                            Categorias
                        </label>
                    </div>
                </div>
            </div>
        </nav>     
        <!--IMPORTAÇÕES JAVA SCRIPT-->
        <script src="https://kit.fontawesome.com/184fe0d80a.js" crossorigin="anonymous"></script>        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script></body>       
        <script src="{{ asset('js/menu.js') }}"></script>   
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>