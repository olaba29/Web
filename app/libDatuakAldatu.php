<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    Session_start();

    if (isset($_POST['Joan'])) // Aukera bat aukeratu bada...
    {
        $x = $_POST['auk'];
        foreach($x as $value)
        {
            if($value == 'sartu') // Liburu bat sartu datu basean.
            {
                header("Location: http://localhost:81/libSartuDB.php");
            }elseif($value == 'aldatu'){ // Liburu baten datuak aldatu.
                header("Location: http://localhost:81/libEditatuDB.php");
            }
            else{
                echo 'ERROREA';
            }
            exit;
        } 
    }

?>

<!DOCTYPE html>
<!-- Goikoaren bidez artxiboaren extensioa espezifikatzen dugu (Badaezpada) -->

<!-- HTMLren hasiera -->
<html lang="en">
<!-- Honen bidez hmtl-k erabiliko duen hizkuntza esaten diogu ingelesa-->

<!-- Web Orriarren aurrekaria-->
<head>
    <title>LIBURU DATUAK ALDATU</title>
    <link rel="stylesheet" href="styles.css">
</head>

<script type=“text/javascript” src="script2.js" ></script>


<!--<div class="irudia">
    <img src="https://media.istockphoto.com/photos/blue-book-picture-id1281955543?b=1&k=20&m=1281955543&s=170667a&w=0&h=ZmwacrjQewEU3RqJLYufA-Bi7JVOI2JgcB8X0o7vPeI=" alt="" width="300" height="200">
</div>

<div class="content">-->



    <!-- Web Orriaren gorputza-->
<body background="https://cdn.pixabay.com/photo/2016/02/16/21/07/books-1204029__340.jpg?__cf_chl_jschl_tk__=pmd_rg0UyIVTKotZFzKXG6L7RTRiwJwdw6vwz3E1204eRgg-1635866096-0-gqNtZGzNAjujcnBszQhR">
<div class="hasiera">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> LIBURUTEGIA </strong></p></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> <Label>LIBURUEN EDIZIOA</Label> </strong></p></td>
                <td>&nbsp;</td>
            </tr>
<!-- ***********************************************************************************************************-->

            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> Hemen liburu bat editatu edo datu basera sartu dezakezu. </strong></p></td>
                <td>&nbsp;</td>
            </tr>

        

            <form name="editatuAukerak" class="inputak" action="libDatuakAldatu.php" method="POST">
                <tr>
                    <select id="libEditAuk"name="auk[]" required> 
                        <option value="">Ikusi zure aukerak hemen.</option>
                        <option value="sartu">Liburu bat sartu datu basean.</option> 
                        <option value="aldatu">Liburu baten datuak aldatu.</option> 
                    </select>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="Joan" type="submit" name="Joan" value="Joan" title="Desplegablearen aukera bat sartu eta sakatu." /></td>
                    <td>&nbsp;</td>
                </tr>
            </form>

            <tr>
                <td>&nbsp;</td>
                <td><input id="bueltatuBot" type="button" name="bueltatuBot" value="Bueltatu" onclick="location.href='erabileremu.php'"/></td>
                <td>&nbsp;</td>
            </tr>

            
        


<!-- ***********************************************************************************************************-->
        </table>
    </div>

<!-- Html dokumentuaren amaiera -->
</html>