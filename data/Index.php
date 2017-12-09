<h1>Accounts and Levels:</h1><ul>
<?php
echo "<h3>Index</h3>\n";
echo "<table>\n";
$directorio = opendir(".");
while ($archivo = readdir($directorio))
   {
   $nombreArch = ucwords($archivo);
   $nombreArch = str_replace("..", "Atras", $nombreArch);
   echo "<tr>\n<td>\n<a href='$archivo'>\n";
   echo "<img src='./imagenes/carpeta.png' alt='Ver $nombreArch'";
   echo " border=0>\n";
   echo "<b>&nbsp;$nombreArch</b></a></td>\n";
   echo "\n</tr>\n";
   }
closedir($directorio); 
echo "</table>\n";
?>