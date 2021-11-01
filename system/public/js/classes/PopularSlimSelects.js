// !! classe responsável por ajudar na população das SlimSelects com dados...

class PopularSlimSelects {

    constructor() {

    }

    popularSlimSelectBasico(slimSelectId, data, elementValueKey, elementTextKey) {
        if(elementTextKey == undefined && elementValueKey == undefined){
            data.forEach(function (element) {
                $(slimSelectId).append('<option value="' + element + '">' + element + '</option>');
            });
        }
    }

    popularSlimSelectBasicoComValorSelecionado(slimSelectId, data, valorSelecionado, elementValueKey, elementTextKey) {
        if(elementTextKey == undefined && elementValueKey == undefined){
            data.forEach(function (element) {
                if(element == valorSelecionado){
                    $(slimSelectId).append('<option selected value="' + element + '">' + element + '</option>');
                }else{
                    $(slimSelectId).append('<option value="' + element + '">' + element + '</option>');
                }
            });
        }
    }

    popularSlimSelectAjaxBasico(url, slimSelectId, elementValueKey, elementTextKey, data = {}, type = "POST", dataType = "json") { //! popula um slimSelect com as informações mais básicas        
        $.ajax({
            url: url,
            type: type,
            data: data,
            dataType: dataType,
            success: function (response) {
                response.forEach(element => {
                    $(slimSelectId).append('<option value="' + element[elementValueKey] + '">' + element[elementTextKey] + '</option>');
                });

            }
        });
    }

    popularSlimSelectAjaxComValorSelecionado(url, slimSelectId, elementValueKey, elementTextKey, data = {}, idObjetoSelecionado, type = "POST", dataType = "json") { //! popula um slimSelect com as informações mais básicas        
        $.ajax({
            url: url,
            type: type,
            data: data,
            dataType: dataType,
            success: function (response) {
                response.forEach(element => {
                    if (idObjetoSelecionado == element.id) {
                        $(slimSelectId).append('<option selected value="' + element[elementValueKey] + '">' + element[elementTextKey] + '</option>');
                    } else {
                        $(slimSelectId).append('<option value="' + element[elementValueKey] + '">' + element[elementTextKey] + '</option>');
                    }
                });

            }
        });
    }
}