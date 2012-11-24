<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
    <script type="text/javascript" language="javascript" src="js/funciones.js"></script> 

	<title>...::: Googleando Aprendo V2.5:::...</title>
       
</head>

<body>

  <div style="height: 200px;" align="center" >
    <div class="cabeza" >
      <a href="http://www.google.cl"><img src="google.png" border="0" /></a>
      <form name="form" >
        <input type="text" style="height: 24pt; font-size: 20pt; vertical-align: middle;" size="50" title="Busque en Google, lo que quiera" id="busca" onkeypress="key(event)" />
        <input type="button" style="height: 24pt; vertical-align: middle;" value="Buscar"  title="Buscar" onclick="googlear()" />
      </form>
    </div>
  </div>

  <div align="center">
    <br>

    <?php

      $db = new PDO('sqlite:db/datos.db3');
      $res = $db->query("SELECT * FROM paginasweb;");
      $c=1;

      while ($row = $res->fetch())
      {

        $imagen = 'http://www.bitpixels.com/getthumbnail?code=23100&size=200&url='.$row['web']
    ?>

        <span class="cuadro">
            <a href="<?php echo $row['web']; ?>" target="_blank"> <img src="<?php echo $imagen ?>" title="<?php echo $row['titulo']." - Tags : ".$row['tags'] ?>" class="imagen" /> </a>   
        </span>

    <?php

        if ($c==5)
        {
          print "<br>";
          $c=0;
        }
        $c++;
      } 

    ?>

  </div>

  <div align="center">
  	<br>
  	<br>
      <a href="/wordpress/wp-login.php" target="_blank">Linux por Siempre</a>
  	<br>
  	<br>
  		<a href='http://www.bitpixels.com/'>Website thumbnails provided by BitPixels</a>
  	<br>
    <br>
  		<a href='agregaweb.php'>Agrega una web a la base ...</a>
  	<br>
  	<br>
  </div>
  
</body>
</html>
