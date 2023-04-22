<?php
 echo "<form action='index.php' method='GET'>
        <input type='text' name='nombre' />
        <input type='text' name='edad' />
        <input type='submit'>
        </form>
    ";

if(isset($_GET["nombre"])){
      $nombre = $_GET["nombre"];
      echo $nombre;
}
