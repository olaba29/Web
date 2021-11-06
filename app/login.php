<?php
    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    //Aldez aurretik index-etik lortutako aldagaik baditugu, orain erabiltzaile izena eta pasahitza lortuko ditugu
    $erabIzena= $_POST['erabIzena'];
    $pasahitza= $_POST['pasahitza'];
    $pasahitzaBer= $_POST['pasahitzaBer'];

    if($pasahitza == $pasahitzaBer){
        // Komandoa prestatu
        $sql = "INSERT INTO erabiltzaile (erabIz, pasahitza, izena, abizena, telefonoa, nan, jaioData, emaila) VALUES ('$erabIzena', '$pasahitza', '$izena','$abizena','$telefonoZenbakia','$nan','$jaiotzeData','$emaila')";
        
        if(mysqli_query($con, $sql)){
            echo "Datuak DBan gorde dira.";
            $_SESSION['erabIz'] = $erabIzena;  // Session aldagaian gordetzen dugu erabiltzailearen nickname-a
            header("Location: http://localhost:81/erabileremu.php");
            exit;
        } else{
            echo "ERROR: Ezin izan dira datuak ondo sartu DBan.";
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
    <title>EHU Liburutegia - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<script type=“text/javascript” src="script2.js" ></script>


<div class="irudia">
    <img src="https://media.istockphoto.com/photos/blue-book-picture-id1281955543?b=1&k=20&m=1281955543&s=170667a&w=0&h=ZmwacrjQewEU3RqJLYufA-Bi7JVOI2JgcB8X0o7vPeI=" alt="" width="300" height="200">
</div>

<div class="content">

    <!-- Web Orriaren gorputza-->
<body background="https://cdn.pixabay.com/photo/2016/02/16/21/07/books-1204029__340.jpg?__cf_chl_jschl_tk__=pmd_rg0UyIVTKotZFzKXG6L7RTRiwJwdw6vwz3E1204eRgg-1635866096-0-gqNtZGzNAjujcnBszQhR">
    <div class="hasiera">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> LIBURUTEGIA </strong></p></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>

    <form name="loginak" class="inputak" action="login.php" method="POST">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><input name="erabIzena" id="erabIzena" type="text"  placeholder="Erabiltzaile Izena" title="Erabiltzaile izena sartu. ADB: mikgar19"required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitza" type="password" name="pasahitza" placeholder="Pasahitza Sartu"  title="Zure pasahitza sartu." ></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitzaBer" type="password" name="pasahitzaBer" placeholder="Pasahitza Berretsi" title="Pasahitza berriz ere idatzi." ></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="sesioahasi" type="submit" name="sesioahasi" value="Sesioa hasi" title="Eremu guztiak betetakoan sakatu" /></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>
</body>
    
</div>

<!-- Html dokumentuaren amaiera -->
</html>