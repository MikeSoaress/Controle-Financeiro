changeMenu();
function $(elemento)
{
    return document.getElementById(elemento);
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

