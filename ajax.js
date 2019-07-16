$( document ).ready(function() {
    $("#btn").click(
		function(){
			AjaxFormDo('result', 'ajax_form', 'action_ajax_form.php');
			return false; 
		}
	);
});
 
function AjaxFormDo(result, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" + ajax_form).serialize(),  // Сериализация
        success: function(response) { //Данные отправлены успешно
        	result = $.parseJSON(response);
        	$('#result').html('<b>Имя:</b> ' + result.name + '<br><b>Фамилия:</b> ' + result.soname);
    	},
    	error: function(response) { // Данные не отправлены
            $('#result').html('Данные не отправлены.');
    	}
 	});
}
