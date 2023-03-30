function prepareModalInput(action, id = '',value = '',id_category = '')
{
    var htmlForm = $('form_input');
    var htmlTitle = $('title_input');
    var htmlId = $('id_input');
    var htmlValue= $('value_input');
    var htmlIdCategory = $('id_category_input');
    var htmlBtn = $('btn_input');
    var htmlMsg = $('msg_input');

    if(action == "insert")
    {
        htmlForm.action = "/insert-input";
        htmlTitle.innerText = "Adicionar entrada";
        htmlBtn.innerText = "Inserir";
        htmlMsg.innerText = '';
    }

    else if(action == "update")
    {
        htmlForm.action = "/update-input";
        htmlTitle.innerText = "Editar entrada";
        htmlId.value = id;
        htmlValue.value = value;
        htmlIdCategory.value = id_category;
        htmlBtn.innerText = "Editar";
        htmlMsg.innerText = '';
    }    

    else if(action == "delete")
    {
        htmlForm.action = "/delete-input";
        htmlTitle.innerText = "Excluir entrada";
        htmlId.value = id;
        htmlValue.value = value;
        htmlIdCategory.value = id_category;
        htmlBtn.innerText = "Excluir";
        htmlMsg.innerText = 'Deseja realmente excluir esta entrada ?';
    }    
}
