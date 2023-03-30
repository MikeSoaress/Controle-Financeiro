function prepareModalCategory(type, action, legend = '', id = '')
{
    var htmlTitle = $('title_category');
    var htmlLegend= $('legend_category');
    var htmlType = $('type_category');
    var htmlId = $('id_category');
    var htmlBtn = $('btn_category');
    var htmlForm = $('form_category');

    if(action == "insert")
    {
        htmlTitle.innerText = "Adicionar categoria";
        htmlType.value = type;
        htmlBtn.innerText = "Inserir";
        htmlForm.action = "/insert-category";

    }

    else if(action == "update")
    {
        htmlTitle.innerText = "Editar categoria";
        htmlLegend.value = legend;
        htmlId.value = id;
        htmlBtn.textContent = "Editar";
        htmlForm.action = "/update-category";
    }    
}
