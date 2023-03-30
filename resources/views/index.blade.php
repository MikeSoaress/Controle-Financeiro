@extends('main')
@section('conteudo')
    <!--HOME-->
    <section id="home" name="Home" class="mt-5 pagina activate">
        <div class="container text-center color-gray" >                       
            <div class="text-end h-0">
                <button type="button" class="btn bg-gray card-btn" data-toggle="modal" data-target="#AddModal">+</button><br>                             
            </div>
            <div class="row m-2 p-4 bg-white-light shadow-sm" onclick="redirect('entradas')">
                <div class="col-12">   
                    <img class="card-img" src="images/img-ganho.png" alt="Card image cap">
                    <h5 class="card-title p-1">Entradas</h5>
                    <h4 class="card-content">{{$inputs_mensais}}</h4>                                                   
                </div>                           
            </div> 
            <div class="text-end h-0">
                <button type="button" class="btn bg-gray card-btn" data-toggle="modal" data-target="#AddSaidaModal">+</button><br>                             
            </div>
            <div class="row m-2 p-4 bg-white-light shadow-sm" onclick="redirect('saidas')">
                <div class="col-12">
                    <img class="card-img" src="images/img-gasto.png" alt="Card image cap">
                    <h5 class="card-title p-1">Saídas</h5>
                    <h4 class="card-content">{{$spents_mensais}}</h4>                                                       
                </div>
            </div> 
            <div class="row m-2 p-4">
                <div class="col-12">
                    <img class="card-img" src="images/img-saldo.png" alt="Card image cap">
                    <h5 class="card-title p-1">Saldo</h5>
                    <h4 class="card-content">{{$saldo_mensal}}</h4>                                                     
                </div>
            </div> 
        </div>
    </section>

    <!--ENTRADAS-->
    <section id="entradas" name="Entradas"  class="p-3 mt-4 pagina">
        <div class="container color-gray p-3 bg-white-light"> 
            <div class="col-12 text-end h-0">
                <button type="button" class="btn bg-gray card-btn-2" onclick="prepareModalInput('insert')" data-toggle="modal" data-target="#modal_input">+</button><br>                             
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
                    @foreach($inputs as $input)
                    <tr>
                        <td>{{$input->value_formated}}</td>
                        <td>{{$input->legend}}</td>
                        <td>{{$input->created_at->format('d/m/Y')}}</td>
                        <td>
                            <i class="fa-solid fa-pen-to-square ff-Awesome" data-toggle="modal" data-target="#modal_input" onclick="prepareModalInput('update','{{$input->id}}','{{$input->value}}','{{$input->id_categoria}}')"></i>                                
                            <i class="fa-thin fa-trash ff-Awesome" data-toggle="modal" data-target="#modal_input" onclick="prepareModalInput('delete','{{$input->id}}','{{$input->value}}','{{$input->id_categoria}}')"></i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!--SAIDAS-->
    <section id="saidas" name="Saidas"  class="p-3 mt-4 pagina">
        <div class="container color-gray p-3 bg-white-light"> 
            <div class="col-12 text-end h-0">
                <button type="button" class="btn bg-gray card-btn-2" onclick="prepareModalSpent('insert')" data-toggle="modal" data-target="#AddSaidaModal">+</button><br>                             
            </div>      
            <h3>Saidas do mês</h3>
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
                    @foreach($spents as $spent)
                    <tr>
                        <td>{{$spent->value_formated}}</td>
                        <td>{{$spent->legend}}</td>
                        <td>{{$spent->created_at->format('d/m/Y')}}</td>
                        <td>
                            <i class="fa-solid fa-pen-to-square ff-Awesome" data-toggle="modal" data-target="#modal_spent" onclick="prepareModalSpent('update','{{$spent->id}}','{{$spent->value}}','{{$spent->id_categoria}}')"></i>                                
                            <i class="fa-thin fa-trash ff-Awesome" data-toggle="modal" data-target="#modal_spent" onclick="prepareModalSpent('delete','{{$spent->id}}','{{$spent->value}}','{{$spent->id_categoria}}')"></i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!--CATEGORIAS-->
    <section id="categorias" name="Categorias"  class="p-3 mt-4 pagina">
        <div class="container color-gray  p-3 bg-white-light">
            <div class="col-12 text-end h-0">
                <button type="button" class="btn bg-gray card-btn-2" data-toggle="modal" data-target="#modal_category" onclick="prepareModalCategory('e', 'insert')">+</button><br>                             
            </div>
            <h3>Categorias entrada</h3>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        @if($categoria->type == "e")
                            <tr>
                                <td>{{$categoria->id}}</td>
                                <td>{{$categoria->legend}}</td>
                                <td>
                                    <i class="fa-solid fa-pen-to-square ff-Awesome"  data-toggle="modal" data-target="#modal_category" onclick="prepareModalCategory('', 'update', '{{$categoria->legend}}' ,'{{$categoria->id}}')"></i>                                
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="container bg-white p-3 bg-white-light mt-3">
            <div class="col-12 text-end h-0">
                <button type="button" class="btn bg-gray card-btn-2" data-toggle="modal" data-target="#modal_category" onclick="prepareModalCategory('s', 'insert')">+</button><br>                             
            </div>
            <h3 class=>Categorias saida</h3>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        @if($categoria->type == "s")
                            <tr>
                                <td>{{$categoria->id}}</td>
                                <td>{{$categoria->legend}}</td>
                                <td>
                                    <i class="fa-solid fa-pen-to-square ff-Awesome" id="categoria_{{$categoria->id}}" data-toggle="modal" data-target="#modal_category" onclick="prepareModalCategory('', 'update','{{$categoria->legend}}','{{$categoria->id}}')"></i>                                
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!--MODAL ENTRADA-->
    <form id="form_input" action="" method="POST">
        @csrf
        <div class="modal fade" id="modal_input" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title_input"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fs-2" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="msg_input"></p>
                        <input type="number" class="d-none" id="id_input" name="id_input">
                        <input type="number" id="value_input" name="value_input"  class="form-control w-75" placeholder="Valor">
                        <select id="id_category_input" name="id_category_input" class="form-select w-50" aria-label="Default select example">
                            @foreach($categorias as $categoria)
                                @if($categoria->type == "e")
                                    <option value="{{$categoria->id}}">{{$categoria->legend}}</option>          
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btn_input" class="btn bg-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--MODAL SAIDA-->
    <form id="form_spent" action="" method="POST">
        @csrf
        <div class="modal fade" id="modal_spent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title_spent"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fs-2" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="msg_spent"></p>
                        <input type="number" class="d-none" id="id_spent" name="id_spent">
                        <input type="number" id="value_spent" name="value_spent"  class="form-control w-75" placeholder="Valor">
                        <select id="id_category_spent" name="id_category_spent" class="form-select w-50" aria-label="Default select example">
                            @foreach($categorias as $categoria)
                                @if($categoria->type == "s")
                                    <option value="{{$categoria->id}}">{{$categoria->legend}}</option>          
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btn_spent" class="btn bg-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--MODAL CATEOGORIA-->
    <form id="form_category"  action="" method="POST">
        @csrf
        <div class="modal fade" id="modal_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title_category"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fs-2" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control w-75" id="legend_category" name="legend_category" placeholder="Categoria">
                        <input type="text" class="d-none" id="type_category" name="type_category">
                        <input type="text" class="d-none" id="id_category" name="id_category">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btn_category" class="btn bg-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
     
@endsection

