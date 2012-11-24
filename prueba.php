<?php
/*      $database = new PDO('sqlite:db/datos.db3');
      $res = $database->query("SELECT * FROM paginasweb;");

      while ($row = $res->fetch()){
        echo $row['web'] . "<br>";
      }*/
?>

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