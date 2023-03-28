changeMenu();

function openModalAdd(type)
{    
    document.getElementById('type_category').value = type;
}

function openModalCategoryUpdate(id, legend)
{    
    document.getElementById('id_categoria_update').value = id;
    document.getElementById('legend_categoria_update').value = legend;
}

function openModalnputUpdate(id, value, id_categoria)
{   var selected = document.getElementById('id_categoria_input_update');
    selected.value = id_categoria;
    document.getElementById('id_entrada_update').value = id;
    document.getElementById('value_entrada_update').value = value;
}

function openModalnputDelete(id, value, id_categoria)
{   var selected = document.getElementById('id_categoria_input_delete');
    selected.value = id_categoria;
    document.getElementById('id_entrada_delete').value = id;
    document.getElementById('value_entrada_delete').value = value;
}

function openModaSpentUpdate(id, value, id_categoria)
{   var selected = document.getElementById('id_categoria_spent_update');
    selected.value = id_categoria;
    document.getElementById('id_spent_update').value = id;
    document.getElementById('value_spent_update').value = value;
}

function openModaSpentDelete(id, value, id_categoria)
{   var selected = document.getElementById('id_categoria_spent_delete');
    selected.value = id_categoria;
    document.getElementById('id_spent_delete').value = id;
    document.getElementById('value_spent_delete').value = value;
}

function formataMoeda()
{
    var f = atual.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
}

//SCRIPT RESPONSAVEL POR REMOVER SCROOL ELASTICO IOS
document.body.addEventListener('touchmove', 
function(event) 
{
    event.preventDefault();
}, 

{
    passive: false,
    useCapture: false
});

window.onresize = function() 
{
    $(document.body).width(window.innerWidth).height(window.innerHeight);
}

$(function() 
{
    window.onresize();
});

