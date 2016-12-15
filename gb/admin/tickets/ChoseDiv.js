
  
function ShowDate(date)
  {
  $.get("action.php",{do: "cookies-set", cookie_name: "DateToShow", cookie_value: date, cookie_time: 604800});
  $.get("tickets_JQ_server.php",{date: date},function(data)
    {
	var NewDiv = $('#OrderList');
	NewDiv.html(data);
	});
  }
  
function ShowDiv()
  {
  var sel = document.getElementById("date_s"); // Получаем наш список
  var N = sel.options[sel.selectedIndex].value; // Получаем значение выделенного элемента
  //alert(N);
  
  ShowDate(N);
  }
  
