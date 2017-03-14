window.onload =  function(){//kui browser avaneb, siis mis juhtuma hakkab
  (function(){//et jookseks isoleeritud funktsioonina, nested function. isoleeritud kõgiest muust
      var date = new Date();
      var time = date.getHours()+":"+
      date.getMinutes()+":"+date.getSeconds();
      document.getElementsByTagName("div")[0].innerHTML="Aeg JS´s: "+time;
      //võtame veebilehe ja otsime tagi "div"
      window.setTimeout(arguments.callee,1000);//mis ajatagant värskendatakse 1000 = 1 sekund
      //vähim ühik on 1 millisekund (javascript on kliendipoolne keel)
  })();
};
