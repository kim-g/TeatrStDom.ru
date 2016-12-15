function ShowDivJQ()
  {
  var sel = document.getElementById("date_s"); // Получаем наш список
  var N = sel.options[sel.selectedIndex].value; // Получаем значение выделенного элемента
  Alert(N);
  ShowDate(N);
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

function PrepareAUS()
{
 //alert("Подготовка POW"); 
 $(document).ready(function()
   {
   var pop_window = $('#pop-up-window');
   var pop_bkgd = $('#pop-up-bkgd');
   $(window).resize(function() 
     {
	 pop_window.css('left', ($(window).width()-pop_window.width())/2+ 'px');
     pop_window.css('top', ($(window).height()-pop_window.height())/2+ 'px'); 
     });

   pop_window.hide();
   pop_bkgd.hide();
   }
  );
   
}

function ShowMessage(Message)
  {
  var pop_window = $('#pop-up-window');
  var PUW = $('#PUW_data');
  var pop_bkgd = $('#pop-up-bkgd');
  PUW.html(Message);
  pop_window.css('left', ($(window).width()-pop_window.width())/2+ 'px');
  pop_window.css('top', ($(window).height()-pop_window.height())/2+ 'px'); 
  pop_bkgd.fadeTo(400,0.5); 
  pop_window.fadeTo(400,1);
  }

function ShowAUS(Type, id_order, Key, Line)
{
$.get("aus.php",{do: Type, id: id_order, key: Key, line: Line},function(data)
    {
	ShowMessage(data);
	});
}

function HideAUS()
{
var pop_window = $('#pop-up-window');
var pop_bkgd = $('#pop-up-bkgd');
pop_window.fadeTo(400,0); 
pop_bkgd.fadeTo(400,0);
pop_window.hide(400);
pop_bkgd.hide(400);
}

function preloadall() {
preload("mail.png");
preload("mailed.png");
preload("OK.png");
preload("ok_1.png");
preload("delete.png");
PrepareAUS();
	
var sel = document.getElementById("date_s"); // Получаем наш список
var N = sel.options[sel.selectedIndex].value; // Получаем значение выделенного элемента
ShowDate(N);
}

function ShowDate(date)
  {
  $.get("tickets_JQ_server.php",date,function(data)
    {
	var NewDiv = $('#OrderList');
	if(data=="!!! ERROR 0x00 - Вход не выполнен !!!") {location.reload();};
	NewDiv.html(data);
	});
  }
  
function HideElement(No)
  {
  $('#line_'+No).slideUp(400);
  }
  
function mail(ID,Key)
  {
  $.get("mail.php",{id: ID, key: Key}, function(data)
    {
	if(data!="OK")
	  {
	  ShowMessage(data);
	  };
	});
  }
  
function mail_ReplaceVV2PPI(ID,Key)
  {
  $.get("mail_ReplaceVV2PPI.php",{id: ID, key: Key}, function(data)
    {
	if(data!="OK")
	  {
	  ShowMessage(data);
	  };
	});
  }
  
function send_sms(ID,Key,Phone)
  {
  $.get("sms.send.php",{text: "Report", id: ID, key: Key, phone: Phone}, function(data)
    {
	if(data!="OK")
	  {
	  ShowMessage(data);
	  };
	});
  }
  
function send_sms_ReplaceVV2PPI(ID,Key,Phone)
  {
  $.get("sms.send.php",{text: "ReplaceVV2PPI", id: ID, key: Key, phone: Phone}, function(data)
    {
	if(data!="OK")
	  {
	  ShowMessage(data);
	  };
	});
  }
  
function Mark(AfterDo, Line, OK, id, key)
  {$.get("action.php",{do: "mark", p1: id, p2: key}, function(data)
    {
	if(data!="OK")
	  {
	  ShowMessage(data);
	  };
	});
   switch (AfterDo)
    {
	
	case "mark": 
	  {
	  var ImageN='mailed.png';
	  if(OK=='true'){ImageN='ok_1.png';};
	  ChangeImg('img_'+Line,ImageN);
	  break;
	  };
	case "hide": {HideElement(Line); break;};
	default: {ShowMessage("<p class=zag2>ОШИБКА!</p><p class=text>Не указан параметр AfterDo</p><p><a href=# onclick='HideAUS()' class=buttom-ticket>Закрыть</a><p>"); break;};
	};
  }  
  
function delete_order(id_order,key_order, Element)
  {
  $.get("delete.php",{id: id_order, key: key_order}, function(data)
    {
	if(data=="OK")
	  {
	  HideElement(Element);
	  HideAUS();
	  }
	else
	  {
	  HideAUS();
	  ShowMessage(data);
	  };
	});
  }