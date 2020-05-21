<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>samochody</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container_samochody">
        
      <div class="obrazki_s">
        <table>
            <tr>
            <td><a class="linki_s" href="index.php">Strona Główna</a></td>
            <td><a class="linki_s" href="zdjęcia_gór.php">zdjęcia Gór</a></td>
            <td><a class="linki_s" href="zdjęcia_miast.php">zdjęcia Miast</a></td>
        </tr>   
            
            </table>
        <div class="margines">
            <img src="Aventador.jpg" width="75%" height="330vh">
        </div>
        <div class="margines">
            <img src="italiano485.jpg" width="75%"  height="330vh">
        </div>
        <div class="margines">
            <img src="BMW.jpg" width="75%"  height="330vh">
        </div>
        <div class="margines">
            <img src="aud.jpg" width="75%"  height="330vh">
        </div>
    </div>
    
        <div class="ferrari">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "basinski";
    
        $con = new mysqli($servername, $username, $password, $dbname);
        
    
       $sql_av = "SELECT * FROM marki,samochody WHERE marki.id = idmarki and samochody.id=2";
    
       $result_av = $con->query( $sql_av);
       echo("<table class='tabela_av'>");
       echo("<tr>
               <th>Marka</th>
               <th>model</th>
               <th>Prędkość maksymalna </th>
               <th>0-100 km/h</th>
           </tr>");
           while( $wiersz = $result_av->fetch_assoc() ) {
               echo("<tr>");
               echo( "<td class='col_av'>".$wiersz['marka']." </td>
               <td class='col_av'> ".$wiersz['model']."</td>
               <td class='col_av'> ".$wiersz['predkosc_maksymalna']."</td>
               <td class='col_av'> ".$wiersz['0-100 km/h']."</td>
               " );
               echo("</tr>");
           }
    
           echo("</table>");
           $sql_it = "SELECT * FROM marki,samochody WHERE marki.id = idmarki and samochody.id=1";
           $result_it = $con->query( $sql_it);
       
       echo("<table class='tabela_it'>");
       echo("<tr>
               <th>Marka</th>
               <th>model</th>
               <th>Prędkość maksymalna </th>
               <th>0-100 km/h</th>
           </tr>");
           while( $wiersz = $result_it->fetch_assoc() ) {
               echo("<tr>");
               echo( "<td class='col_it'>".$wiersz['marka']." </td>
               <td class='col_it'> ".$wiersz['model']."</td>
               <td class='col_it'> ".$wiersz['predkosc_maksymalna']."</td>
               <td class='col_it'> ".$wiersz['0-100 km/h']."</td>
               " );
               echo("</tr>");
           }
    
           echo("</table>");
          
       
        ?>
        </div>
        <div class="BMW">
            <?php
            $sql_it = "SELECT * FROM marki,samochody WHERE marki.id = idmarki and samochody.id=3";
            $result_BMW = $con->query( $sql_it);
        
        echo("<table class='tabela_BMW'>");
        echo("<tr>
                <th>Marka</th>
                <th>model</th>
                <th>Prędkość maksymalna </th>
                <th>0-100 km/h</th>
            </tr>");
            while( $wiersz = $result_BMW->fetch_assoc() ) {
                echo("<tr>");
                echo( "<td class='col_BMW'>".$wiersz['marka']." </td>
                <td class='col_BMW'> ".$wiersz['model']."</td>
                <td class='col_BMW'> ".$wiersz['predkosc_maksymalna']."</td>
                <td class='col_BMW'> ".$wiersz['0-100 km/h']."</td>
                " );
                echo("</tr>");
            }
     
            echo("</table>");
            ?>
        </div>
        <div class="Audi">
        <?php
            $sql_it = "SELECT * FROM marki,samochody WHERE marki.id = idmarki and samochody.id=4";
            $result_BMW = $con->query( $sql_it);
        
        echo("<table class='tabela_au'>");
        echo("<tr>
                <th>Marka</th>
                <th>model</th>
                <th>Prędkość maksymalna </th>
                <th>0-100 km/h</th>
            </tr>");
            while( $wiersz = $result_BMW->fetch_assoc() ) {
                echo("<tr>");
                echo( "<td class='col_au'>".$wiersz['marka']." </td>
                <td class='col_au'> ".$wiersz['model']."</td>
                <td class='col_au'> ".$wiersz['predkosc_maksymalna']."</td>
                <td class='col_au'> ".$wiersz['0-100 km/h']."</td>
                " );
                echo("</tr>");
            }
     
            echo("</table>");
            ?>
        </div>
        
        </div>
</body>
</html>
