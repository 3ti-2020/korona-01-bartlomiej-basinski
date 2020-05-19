<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="main.css" rel="stylesheet">
    <title>Dane z Bazy</title>
</head>
<body>
<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "basinski";

    $con = new mysqli($servername, $username, $password, $dbname);
    
    echo("<div class='container'>");

   $sql = "SELECT * FROM marki,samochody WHERE marki.id = idmarki";

   $result = $con->query( $sql);

   
   echo("<div class='tabelka'>");
   echo("<h3 class='tytul'></h3>");
   echo("<table class='tabelka_moja'>");
   echo("<tr>
           <th>Marka</th>
           <th>model</th>
           <th>Prędkość maksymalna </th>
           <th>0-100 km/h</th>
       </tr>");
       while( $wiersz = $result->fetch_assoc() ) {
           echo("<tr class='row'>");
           echo( "<td class='col'>".$wiersz['marka']." </td>
           <td class='col'> ".$wiersz['model']."</td>
           <td class='col'> ".$wiersz['predkosc_maksymalna']."</td>
           <td class='col'> ".$wiersz['0-100 km/h']."</td>
           " );
           echo("</tr>");
       }

       echo("</table>");
      
   echo("</div>");


?>
</body>
</html>
