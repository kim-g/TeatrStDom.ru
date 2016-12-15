function ShowDiv(Count, Start)
  {
  for (i=Start; i<=Count; i++)
    {
	document.getElementById(i).style.display = "none";
	};
  var sel = document.getElementById("date_s"); // Получаем наш список
  var N = sel.options[sel.selectedIndex].value; // Получаем значение выделенного элемента
  document.getElementById(N).style.display = "block";
  }
