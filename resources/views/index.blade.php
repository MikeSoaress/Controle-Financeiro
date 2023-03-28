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
                    <h4 class="card-content">R$3500,00</h4>                                                   
                </div>                           
            </div> 
            <div class="text-end h-0">
                <button type="button" class="btn bg-gray card-btn " data-toggle="modal" data-target="#RemoveModal">+</button>                          
            </div>
            <div class="row m-2 p-4 bg-white-light shadow-sm" onclick="redirect('saidas')">
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
    <section id="entradas" name="Entradas"  class="p-3 mt-4 pagina">
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
                    @foreach($inputs as $input)
                    <tr>
                        <td>{{$input->value_formated}}</td>
                        <td>{{$input->legend}}</td>
                        <td>{{$input->created_at->format('d/m/Y')}}</td>
                        <td>
                            <i class="fa-solid fa-pen-to-square ff-Awesome" id="ipnut_{{$input->id}}" data-toggle="modal" data-target="#InputUpdateModal" onclick="openModalnputUpdate('{{$input->id}}','{{$input->value}}','{{$input->id_categoria}}')"></i>                                
                            <i class="fa-thin fa-trash ff-Awesome" id="ipnut_{{$input->id}}" data-toggle="modal" data-target="#InputDeleteModal" onclick="openModalnputDelete('{{$input->id}}','{{$input->value}}','{{$input->id_categoria}}')"></i>
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
                <button type="button" class="btn bg-gray card-btn-2" data-toggle="modal" data-target="#AddSaidaModal">+</button><br>                             
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
                            <i class="fa-solid fa-pen-to-square ff-Awesome" id="spent_{{$spent->id}}" data-toggle="modal" data-target="#spentUpdateModal" onclick="openModaSpentUpdate('{{$spent->id}}','{{$spent->value}}','{{$spent->id_categoria}}')"></i>                                
                            <i class="fa-thin fa-trash ff-Awesome" id="ipnut_{{$spent->id}}" data-toggle="modal" data-target="#spentDeleteModal" onclick="openModaSpentDelete('{{$spent->id}}','{{$spent->value}}','{{$spent->id_categoria}}')"></i>
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
                <button type="button" class="btn bg-gray card-btn-2" data-toggle="modal" data-target="#CategoriaModal" onclick="openModalAdd('e')">+</button><br>                             
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
                                        <i class="fa-solid fa-pen-to-square ff-Awesome" id="categoria_{{$categoria->id}}" data-toggle="modal" data-target="#CategoriaUpdateModal" onclick="openModalCategoryUpdate('{{$categoria->id}}','{{$categoria->legend}}')"></i>                                
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                </tbody>
            </table>
        </div>

        <div class="container bg-white p-3 bg-white-light mt-3">
            <div class="col-12 text-end h-0">
                <button type="button" class="btn bg-gray card-btn-2" data-toggle="modal" data-target="#CategoriaModal" onclick="openModalAdd('s')">+</button><br>                             
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
                                    <i class="fa-solid fa-pen-to-square ff-Awesome" id="categoria_{{$categoria->id}}" data-toggle="modal" data-target="#CategoriaUpdateModal" onclick="openModalCategoryUpdate('modal_update_category', '{{$categoria->id}}','{{$categoria->legend}}')"></i>                                
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!--MODAL ENTRADA-->
    <form id="modal_insert_entrada" action="/add-entrada" method="POST">
        @csrf
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
                    <input type="number" id="value_entrada" name="value_entrada"  class="form-control w-75" placeholder="Valor">
                    <select id="id_input_entrada" name="id_input_entrada" class="form-select w-50" aria-label="Default select example">
                        @foreach($categorias as $categoria)
                            @if($categoria->type == "e")
                            <option value="{{$categoria->id}}">{{$categoria->legend}}</option>          
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gray">Inserir</button>
                </div>
            </div>
            </div>
        </div>
    </form>

    <!--MODAL ENTRADA UPDATE-->
    <form id="modal_update_category"  action="/update-entrada" method="POST">
        @csrf
        <div class="modal fade" id="InputUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar entrada</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fs-2" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="d-none" id="id_entrada_update" name="id_entrada_update">
                        <input type="number" id="value_entrada_update" name="value_entrada_update"  class="form-control w-75" placeholder="Valor">
                        <select id="id_categoria_input_update" name="id_categoria_input_update" class="form-select w-50" aria-label="Default select example">
                            @foreach($categorias as $categoria)
                                @if($categoria->type == "e")
                                <option value="{{$categoria->id}}">{{$categoria->legend}}</option>          
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gray">Editar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    <!--MODAL ENTRADA DELETE-->
    <form id="modal_delete_category"  action="/delete-entrada" method="POST">
        @csrf
        <div class="modal fade" id="InputDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Excluir entrada</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fs-2" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir esta entrada ?</p>
                        <input type="text"  class="d-none" id="id_entrada_delete" name="id_entrada_delete">
                        <input style="touch-action: none;pointer-events: none" type="number" id="value_entrada_delete" name="value_entrada_delete"  class="form-control w-75" placeholder="Valor">
                        <select style="touch-action: none;pointer-events: none" id="id_categoria_input_delete" name="id_categoria_input_delete" class="form-select w-50" aria-label="Default select example">
                            @foreach($categorias as $categoria)
                                @if($categoria->type == "e")
                                <option value="{{$categoria->id}}">{{$categoria->legend}}</option>          
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--MODAL SAIDA-->
    <form id="modal_spent_entrada" action="/add-spent" method="POST">
        @csrf
        <div class="modal fade" id="AddSaidaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inserir saída</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="fs-2" aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="number" id="value_saida" name="value_saida"  class="form-control w-75" placeholder="Valor">
                    <select id="id_category_spent_saida" name="id_category_spent_saida" class="form-select w-50" aria-label="Default select example">
                        @foreach($categorias as $categoria)
                            @if($categoria->type == "s")
                            <option value="{{$categoria->id}}">{{$categoria->legend}}</option>          
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gray">Inserir</button>
                </div>
            </div>
            </div>
        </div>
    </form>

    <!--MODAL SAIDA UPDATE-->
    <form id="modal_update_category"  action="/update-spent" method="POST">
        @csrf
        <div class="modal fade" id="spentUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar saída</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fs-2" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="d-none" id="id_spent_update" name="id_spent_update">
                        <input type="number" id="value_spent_update" name="value_spent_update"  class="form-control w-75" placeholder="Valor">
                        <select id="id_categoria_spent_update" name="id_categoria_spent_update" class="form-select w-50" aria-label="Default select example">
                            @foreach($categorias as $categoria)
                                @if($categoria->type == "s")
                                <option value="{{$categoria->id}}">{{$categoria->legend}}</option>          
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gray">Editar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    <!--MODAL SAIDA DELETE-->
    <form id="modal_delete_category"  action="/delete-spent" method="POST">
        @csrf
        <div class="modal fade" id="spentDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Excluir saída</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fs-2" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir esta entrada ?</p>
                        <input type="text"  class="d-none" id="id_spent_delete" name="id_spent_delete">
                        <input style="touch-action: none;pointer-events: none" type="number" id="value_spent_delete" name="value_spent_delete"  class="form-control w-75" placeholder="Valor">
                        <select style="touch-action: none;pointer-events: none" id="id_categoria_spent_delete" name="id_categoria_spent_delete" class="form-select w-50" aria-label="Default select example">
                            @foreach($categorias as $categoria)
                                @if($categoria->type == "s")
                                <option value="{{$categoria->id}}">{{$categoria->legend}}</option>          
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

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

    <!--MODAL CATEGORIA INSERT-->
    <form id="modal_insert_category"  action="/add-categoria" method="POST">
        @csrf
        <div class="modal fade" id="CategoriaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fs-2" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control w-75" id="legend" name="legend" placeholder="Categoria">
                        <input type="text" class="d-none" id="type_category" name="type" >
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gray">Inserir</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--MODAL CATEGORIA UPDATE-->
    <form id="modal_update_category"  action="/update-categoria" method="POST">
        @csrf
        <div class="modal fade" id="CategoriaUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fs-2" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control w-75"  id="legend_categoria_update" name="legend_categoria_update">
                        <input type="text" class="d-none" id="id_categoria_update" name="id_categoria_update">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gray">Editar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

