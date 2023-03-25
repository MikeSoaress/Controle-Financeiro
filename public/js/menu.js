function changeMenu()
{
    var id_item_activate = location.hash.replace('#', '');
    var id_page_default = 'home';

    if(id_item_activate == "")
        id_item_activate = id_page_default; 
      
    editTitle(id_item_activate);
    selectBtnMenu(id_item_activate);
    pageVisibilite(id_item_activate);
}

function pageVisibilite(id_item_activate)
{
    var arr_pages = document.getElementsByClassName('pagina');

    for(var x = 0; x < arr_pages.length; x++)
    {
        arr_pages[x].classList.remove('activate');
    }

    document.getElementById(id_item_activate).classList.add('activate');

}

function selectBtnMenu(id_item_activate)
{
    var div_btn = document.getElementById('btn_' + id_item_activate);
    div_btn.click();
}

function editTitle(id_item_activate)
{
    var div_title = document.getElementById('titulo');
    var chr_title = document.getElementById(id_item_activate).attributes.name.nodeValue;
    div_title.innerText = chr_title;
}

function editTypeCategory(type)
{
    document.getElementById('type').value = type;
}

function redirect(url)
{
    location.href= "#" + url;
    changeMenu();
}