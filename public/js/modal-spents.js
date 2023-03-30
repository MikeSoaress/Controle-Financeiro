function prepareModalSpent(action, id = '',value = '',id_category = '')
{
    var htmlForm = $('form_spent');
    var htmlTitle = $('title_spent');
    var htmlId = $('id_spent');
    var htmlValue= $('value_spent');
    var htmlIdCategory = $('id_category_spent');
    var htmlBtn = $('btn_spent');
    var htmlMsg = $('msg_spent');

    if(action == "insert")
    {
        htmlForm.action = "/insert-spent";
        htmlTitle.innerText = "Adicionar saída";
        htmlBtn.innerText = "Inserir";
        htmlMsg.innerText = '';
    }

    else if(action == "update")
    {
        htmlForm.action = "/update-spent";
        htmlTitle.innerText = "Editar saída";
        htmlId.value = id;
        htmlValue.value = value;
        htmlIdCategory.value = id_category;
        htmlBtn.innerText = "Editar";
        htmlMsg.innerText = '';
    }    

    else if(action == "delete")
    {
        htmlForm.action = "/delete-spent";
        htmlTitle.innerText = "Excluir saída";
        htmlId.value = id;
        htmlValue.value = value;
        htmlIdCategory.value = id_category;
        htmlBtn.innerText = "Excluir";
        htmlMsg.innerText = 'Deseja realmente excluir esta saída ?';
    }    
}