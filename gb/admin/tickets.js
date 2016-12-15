function ShowDiv(Count)
  {
  for (i=0; i<=Count; i++)
    {
	document.getElementById(i).style.display = "none";
	};
  var sel = document.getElementById("date_s"); // Получаем наш список
  var N = sel.options[sel.selectedIndex].value; // Получаем значение выделенного элемента
  document.getElementById(N).style.display = "block";
  }

function mail(id_f,key_f,ImName,ImageF)
{  
$.get(
  "mail_a.php",
  {
    id: id_f,
    key: key_f
  },
  onAjaxSuccess(ImName,ImageF)
);
}
 
function onAjaxSuccess(ImName,ImageF)
{
ChangeImg(ImName,ImageF);
}

function ChangeImg() {
 if(document.images) {
  eval("document."+ChangeImg.arguments[0]+
  ".src=('"+ChangeImg.arguments[1]+"')");
 }
}

function preload() {
  if (document.images) {
    var imgsrc = preload.arguments;
    arr=new Array(imgsrc.length);
    for (var j=0; j<imgsrc.length; j++) {
      arr[j] = new Image;
      arr[j].src = imgsrc[j];
    }
  }
}

function preloadall() {
preload("mail.png");
preload("mailed.png");
preload("OK.png");
preload("ok_1.png");
preload("delete.png");
}

function ShowDate(date)
  {
  $.get("tickets_JQ_server.php",date,function(data)
    {
	var NewDiv = $('#0');
	NewDiv.html(data);
	});
  }