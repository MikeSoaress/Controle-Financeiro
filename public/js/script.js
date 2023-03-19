//SCRIPT RESPONSAVEL POR REMOVER SCROOL ELASTICO IOS

    document.body.addEventListener('touchmove', function(event) {
    event.preventDefault();
    }, {
    passive: false,
    useCapture: false
    });

    window.onresize = function() {
    $(document.body).width(window.innerWidth).height(window.innerHeight);
    }

    $(function() {
    window.onresize();
    });


//SCRIPT RESPONSAVEL POR ALTERNAR ENTRE PAGINAS UTILIZANDO O MENU
    alternaMenu('home', 'Resumo mensal');
    function alternaMenu(div, legenda, btn = "")
    {
        var titulo = document.getElementById('titulo');
        var pagina_ativar = document.getElementById(div);
        var paginas = document.getElementsByClassName('pagina');

        if(btn != "")
        {
            document.getElementById(btn).click();
        }

        for(var x = 0; x < paginas.length; x++)
        {
            paginas[x].classList.remove('activate');
        }

        pagina_ativar.classList.add('activate');
        titulo.textContent = legenda;


    }