<html>
    <head>
    <div align="center">
       <h2>Agrega Registros a la base de datos</h2>
    </div>
    </head>
    <body>
        <div align="center">
        <form action="graba.php" method="post">
        <table>
        <tr>
        <td>Pagina web</td>
        <td><input type="text" name="web" value="http://"  size=40 /><br></td>
        </tr>
        <tr>
        <td>Descripcion</td>
        <td><input type="text" name="descripcion" size=80 /><br></td>
        </tr>
        <tr>
        <td>Tags</td>
        <td><input type="text" name="tags" size=40 /><br></td>
        </tr>
        <table>
        <tr>
        <td><input type="submit" value="Enviar"/></td>
        <td><input type="reset"  value="Limpiar"/></td>
        </tr>
        </table>
        </table>
        </form>
        <a href="index.php">Volver</a>
        </div>
    </body>
</html>