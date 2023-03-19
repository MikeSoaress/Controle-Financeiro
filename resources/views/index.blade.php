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
        <div class="bg-gray corpo">   

            <!--HEADER-->
            <header>
                <div class="bg-pourple p-2 text-light text-center">
                    <h2 id="titulo"></h2>
                </div>
            </header> 

            <!--HOME-->
            <section id="home" class="mt-5 pagina activate">
                <div class="container text-center color-gray" >                       
                    <div class="text-end h-0">
                        <button type="button" class="btn bg-gray card-btn" data-toggle="modal" data-target="#AddModal">+</button><br>                             
                    </div>
                    <div class="row m-2 p-4 bg-white-light shadow-sm" onclick="alternaMenu('entradas','Entradas','btn_entradas')">
                        <div class="col-12">   
                            <img class="card-img" src="images/img-ganho.png" alt="Card image cap">
                            <h5 class="card-title p-1">Entradas</h5>
                            <h4 class="card-content">R$3500,00</h4>                                                   
                        </div>                           
                    </div> 
                    <div class="text-end h-0">
                        <button type="button" class="btn bg-gray card-btn " data-toggle="modal" data-target="#RemoveModal">+</button>                          
                    </div>
                    <div class="row m-2 p-4 bg-white-light shadow-sm" onclick="alternaMenu('saidas','Saídas','btn_saidas')">
                        <div class="col-12">
                            <img class="card-img" src="images/img-gasto.png" alt="Card image cap">
                            <h5 class="card-title p-1">Saídas</h5>
                            <h4 class="card-content">R$1800,00</h4>                                                       
                        </div>
                    </div> 
                    <div class="row m-2 p-4">
                        <div class="col-12">
                            <img class="card-img" src="images/img-saldo.png" alt="Card image cap">
                            <h5 class="card-title p-1">Saldo</h5>
                            <h4 class="card-content">R$1700,00</h4>                                                     
                        </div>
                    </div> 
                </div>
            </section>

            <!--ENTRADAS-->
            <section id="entradas"  class="p-3 mt-4 pagina">
                <div class="container color-gray p-3 bg-white-light"> 
                    <div class="col-12 text-end h-0">
                        <button type="button" class="btn bg-gray card-btn-2" data-toggle="modal" data-target="#AddModal">+</button><br>                             
                    </div>      
                    <h3>Entradas do mês</h3>
                    <hr>             
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Valor</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>R$500,00</td>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                                <i class="fa-thin fa-trash ff-Awesome"></i>
                            </td>
                          <tr>
                            <td>R$500,00</td>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                                <i class="fa-thin fa-trash ff-Awesome"></i>
                            </td>
                          </tr>
                          <tr>
                            <td>R$500,00</td>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                                <i class="fa-thin fa-trash ff-Awesome"></i>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </section>
            
            <!--SAIDAS-->
            <section id="saidas"  class="p-3 mt-4 pagina">
                <div class="container color-gray  p-3 bg-white-light">
                <div class="col-12 text-end h-0">
                        <button type="button" class="btn bg-gray card-btn-2" data-toggle="modal" data-target="#RemoveModal">+</button><br>                             
                    </div>  
                    <h3>Saídas do mês</h3>
                    <hr>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Valor</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>R$500,00</td>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                                <i class="fa-thin fa-trash ff-Awesome"></i>
                            </td>
                          </tr>
                          <tr>
                            <td>R$500,00</td>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                                <i class="fa-thin fa-trash ff-Awesome"></i>
                            </td>
                          </tr>
                          <tr>
                            <td>R$500,00</td>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                                <i class="fa-thin fa-trash ff-Awesome"></i>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </section>
            
            <!--CATEGORIAS-->
            <section id="categorias"  class="p-3 mt-4 pagina color-gray">
                <div class="container p-3 bg-white-light">
                    <h3>Categorias entrada</h3>
                    <div class="col-12 text-end h-0">
                        <button type="button" class="btn bg-gray btn-add-categoria" data-toggle="modal" data-target="#AddModal">+</button><br>                             
                    </div>
                    <hr>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data inserção</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                            </td>
                            </tr>
                            <tr>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                            </td>
                            </tr>
                            <tr>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container bg-white p-3 bg-white-light mt-3">
                    <h3 class=>Categorias saida</h3>
                    <div class="col-12 text-end h-0">
                        <button type="button" class="btn bg-gray btn-add-categoria" data-toggle="modal" data-target="#AddModal">+</button><br>                             
                    </div>
                    <hr>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data inserção</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                            </td>
                            </tr>
                            <tr>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                            </td>
                            </tr>
                            <tr>
                            <td>Global</td>
                            <td>01/01/2023</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square ff-Awesome"></i>                                
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            
            <!--MODAL ENTRADA-->
            <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inserir entrada</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fs-2" aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <input type="number" class="form-control w-75" id="exampleInputPassword1" placeholder="Valor">
                        <select class="form-select w-50" aria-label="Default select example">
                            <option selected>Categoria</option>
                            <option value="1">Global</option>
                            <option value="2">Uber</option>
                            <option value="3">Concessionaria</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gray">Inserir</button>
                    </div>
                </div>
                </div>
            </div>
            
            <!--MODAL SAIDA-->
            <div class="modal fade" id="RemoveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inserir Saída</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fs-2" aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <input type="number" class="form-control w-75" id="exampleInputPassword1" placeholder="Valor">
                        <select class="form-select w-50" aria-label="Default select example">
                            <option selected>Categoria</option>
                            <option value="1">Global</option>
                            <option value="2">Uber</option>
                            <option value="3">Concessionaria</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gray">Inserir</button>
                    </div>
                </div>
                </div>
            </div>

            <!--MENU-->
            <nav class="menu menu-shaddow">
                <div class="container">
                    <div class="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn bg-gray active" onclick="alternaMenu('home', 'Resumo mensal');">
                                <input class="d-none" type="radio" name="options" id="btn_home" autocomplete="off" checked>
                                <img class="menu-icone" src="images/icon-home.png"><br>
                                Principal
                            </label>
                            <label class="btn bg-gray" onclick="alternaMenu('entradas','Entradas');">
                                <input class="d-none"  type="radio" name="options" id="btn_entradas" autocomplete="off"> 
                                <img class="menu-icone"  src="images/icon-entrada.png"><br>
                                Entradas
                            </label>
                            <label class="btn bg-gray" onclick="alternaMenu('saidas', 'Saídas');">
                                <input class="d-none"  type="radio" name="options" id="btn_saidas" autocomplete="off"> 
                                <img class="menu-icone" src="images/icon-saida.png"><br>
                                Saídas
                            </label>
                            <label class="btn bg-gray" onclick="alternaMenu('categorias','Categorias');">
                                <input class="d-none"  type="radio" name="options" id="btn_categorias" autocomplete="off"> 
                                <img class="menu-icone" src="images/icon-saida.png"><br>
                                Categorias
                            </label>
                        </div>
                    </div>
                </div>
            </nav>        
        </div>

        <!--IMPORTAÇÕES JAVA SCRIPT-->
        <script src="https://kit.fontawesome.com/184fe0d80a.js" crossorigin="anonymous"></script>        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script></body>       
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>