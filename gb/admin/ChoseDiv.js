function ShowDiv(Count, Start)
  {
  for (i=Start; i<=Count; i++)
    {
	document.getElementById(i).style.display = "none";
	};
  var sel = document.getElementById("date_s"); // �������� ��� ������
  var N = sel.options[sel.selectedIndex].value; // �������� �������� ����������� ��������
  document.getElementById(N).style.display = "block";
  }
