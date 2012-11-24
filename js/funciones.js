      function googlear()
      {
        var f=document.form;
        var linea = new String();
        var cadenabusca = new String();
        linea=document.form.busca.value; 
        linea = linea.replace(/ /g, "+");
        cadenabusca = "http://www.google.cl/search?hl=es&q="+linea; 
  //      cadenabusca = "http://www.bing.com/search?q="+linea; 	
        window.open(cadenabusca);
      }
        
     	function limpiar()
    	{
    		document.form.reset();
    		document.form.busca.focus();
    	}
      
      function key(e) 
      {
        if (e.which == 13) googlear(); //presionaron enter
      }