$(function() {
	$(".datepicker").datepicker({dateFormat: "dd/mm/yy"},$.datepicker.regional["ru"]);

	$(".slider").slider({
		range: "min",
		value: 10000,
		min: 1000,
		max: 3000000,
		slide: function( event, ui ) {
			$( ".computing-pole1" ).val( ui.value );
		}
	});

	$(".slider2").slider({
		range: "min",
		value: 10000,
		min: 1000,
		max: 3000000,
		slide: function( event, ui ) {
		$(".computing-pole2").val( ui.value );
		}
	});

	$(".computing-pole1").val($(".slider").slider("value"));
	$(".computing-pole2").val($(".slider2").slider("value" ));

	// Изменение местоположения ползунка при вводе данных в элементах input
	$("input.computing-pole1").change(function(){
		var value1=$("input.computing-pole1").val();
		$(".slider").slider("value",value1);
	});
	$("input.computing-pole2").change(function(){
		var value2=$("input.computing-pole2").val();
		$(".slider2").slider("value",value2);
	});

	// фильтрация ввода в поля
	jQuery(".computing-pole1, .computing-pole2").keypress(function(event){
		var key, keyChar;
		if(!event) var event = window.event;

		if (event.keyCode) key = event.keyCode;
		else if(event.which) key = event.which;

		if(key==null || key==0 || key==8 || key==13 || key==9 || key==46 || key==37 || key==39 ) return true;
		keyChar=String.fromCharCode(key);

		if(!/\d/.test(keyChar))	return false;
	});
});

function funcSuccess(data){
	$(".result").text(data);
}

$(document).ready(function() {
	$(".calculation-button").bind("click",function() {
		$.ajax({
			url: "calc.php",
			type: "POST",
			data: ({
				pole1:$(".computing-pole1").val(),
				pole2:$(".computing-pole2").val(),
				date:$(".datepicker").val(),
				term:$(".list").val(),
				radio:$("input[type=radio]:checked").val()
			}),
			dataType: "html",
			success: funcSuccess
		});
	});
});
