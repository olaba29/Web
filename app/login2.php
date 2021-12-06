<?php
    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita


Session_start();
    $erabIz= $_POST['erabIzena'];
    $pasahitza= $_POST['pasahitza'];
    $pasahitza_hasheatuta = password_hash($pasahitza, PASSWORD_DEFAULT);

    $sql ="SELECT * FROM `erabiltzaile` WHERE `erabIz` = '$erabIz' and `pasahitza` = '$pasahitza_hasheatuta'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

    if(isset($_POST['sesioahasi']))
    {
        if($row['erabIz']!=null){ //Erabiltzailea existitzen bada
            $_SESSION['erabIz'] = $erabIz;  // Session aldagaian gordetzen dugu erabiltzailearen nickname-a
            header("Location: http://localhost:81/erabileremu.php");
            exit;      
        }else{
            echo "ERROREA: Erabiltzaile hori ez da existitzen!!"; 
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

    <form name="loginak" class="inputak" method="POST" action="login2.php"> <!-- Se envia al ".php" la info -->
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><input id="erabIzena" type="text" name="erabIzena" placeholder="Erabiltzaile Izena" title="Erabiltzaile izena sartu. ABD: mikgar19" required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitza" type="password" name="pasahitza" placeholder="Pasahitza Sartu" title="Zure pasahitza sartu." required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="sesioahasi" type="submit" name="sesioahasi" value="Saioa hasi" title="Eremu guztiak betetakoan sakatu" /></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>

    <table>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

    <table class="inputak">
        <tr>
            <td>&nbsp;</td>
            <td>Ez zara erregistratu?</td>
            <td>&nbsp;</td>
            <tr>
                <td>&nbsp;</td>
                <td><input id="erregistroBuelta" type="button" name="erregistroBuelta" value="Erregistratu" onclick="location.href='index.php'" /></td>
                <td>&nbsp;</td>
            </tr>
        </tr>
    </table>
</body>
    
</div>

<!-- Html dokumentuaren amaiera -->
</html>