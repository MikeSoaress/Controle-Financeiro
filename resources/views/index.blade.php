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
<section id="saidas" name="Saídas"   class="p-3 mt-4 pagina">
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
<section id="categorias" name="Categorias"  class="p-3 mt-4 pagina color-gray">
    <div class="container p-3 bg-white-light">
        <h3>Categorias entrada</h3>
        <div class="col-12 text-end h-0">
            <button type="button" class="btn bg-gray btn-add-categoria" data-toggle="modal" data-target="#CategoriaModal" onclick="editTypeCategory('e')">+</button><br>                             
        </div>
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
                                    <i class="fa-solid fa-pen-to-square ff-Awesome" id="categoria_{{$categoria->id}}"></i>                                
                                </td>
                            </tr>
                        @endif
                    @endforeach
            </tbody>
        </table>
    </div>

    <div class="container bg-white p-3 bg-white-light mt-3">
        <h3 class=>Categorias saida</h3>
        <div class="col-12 text-end h-0">
            <button type="button" class="btn bg-gray btn-add-categoria" data-toggle="modal" data-target="#CategoriaModal" onclick="editTypeCategory('s')">+</button><br>                             
        </div>
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
                            <i class="fa-solid fa-pen-to-square ff-Awesome" id="categoria_{{$categoria->id}}"></i>                                
                        </td>
                    </tr>
                @endif
            @endforeach
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

<!--MODAL CATEGORIA-->
<form action="/add-categoria" method="POST">
    @csrf
    <div class="modal fade" id="CategoriaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inserir Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fs-2" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control w-75" id="legend" name="legend" placeholder="Categoria">
                    <input type="text" class="d-none" id="type" name="type">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gray">Inserir</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

