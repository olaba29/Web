<?php
    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    session_start(); // Session global variable erabili ahal izateko


    //Aldez aurretik index-etik lortutako aldagaik baditugu, orain erabiltzaile izena eta pasahitza lortuko ditugu
    
    /*$izena = $_SESSION['izena'];
    $abizena = $_SESSION['abizena'];
    $emaila = $_SESSION['emaila'];
    $jdat =  $_SESSION['jaiodat'];
    $nan = $_SESSION['nan'];
    $tel = $_SESSION['telf'];*/

    $izena = $_POST['izena'];
    $abizena = $_POST['abizena'];
    $emaila = $_POST['emaila'];
    $jdat = $_POST['jaiotzeData'];
    $nan = $_POST['nan'];
    $tel = $_POST['telefonoZenbakia'];

    if(isset($_POST['sesioahasi']))
    {
        $_SESSION['erabIzena'] = $_POST['erabIzena'];
        $_SESSION['pasahitza'] = $_POST['pasahitza'];
        $erabIzena= $_POST['erabIzena'];
        $pasahitza= $_POST['pasahitza'];
        $pasahitzaBer= $_POST['pasahitzaBer'];

        if($pasahitza == $pasahitzaBer){
            // Komandoa prestatu
            $sql ="SELECT * FROM `erabiltzaile` WHERE `erabIz` = '$erabIzena'"; // Hau da konprobatzeko ea erabiltzaile izen hori hartuta dagoen edo ez.
            $query = mysqli_query($con,$sql);
            $nr = mysqli_num_rows($query); // nr (number rows) aldagaia 1 izango da erabiltzailea aurkitu badu eta 0 ez badu aurkitu.
            $row = mysqli_fetch_array($query); // Ez badago, row NULL balioa izango du. Eta sartu ahal dugu. Bestela, erabiltzaileizena emango digu.
    
    
            if ($row == NULL)
            {
                // Komandoa prestatu
                
                // pasahitza hasheatu egingo dugu seguruago izateko
                //lehenik sartuko diogu gatza (gure kasuan gatza "segurtasuna" hitza izango da)
                //$pasahitza .= "segurtasuna";     // orain $pasahitza aldagaiak "abc" balioa bazuen, "abcsegurtasuna" izango da.
                // gatza autogeneratzen du () funtzioak
                $pass_hasheatuta = password_hash($pasahitza, PASSWORD_DEFAULT); // Hash bat sortzen dugu pasahitzarekin+gatzarekin
                
                /*
                $db = new mysqli("db", "admin", "test", "database");

                $stmt = $db->prepare("SELECT * FROM liburu WHERE libIz = ?");
                $stmt->bind_param("i", $liburuIzena);
                $stmt->execute();

                //grab a result set
                $resultSet = $sententzia->get_result();
                //pull all results as an associative array
                $liburuDatuak = $resultSet->fetch_all(); // Hau bilatu duen liburuaren datuak (existitzen bada)
                */

                $db = new mysqli("db", "admin", "test", "database");
                //$stmt = $db->prepare("INSERT INTO erabiltzaile (erabIz, pasahitza, izena, abizena, telefonoa, nan, jaioData, emaila) VALUES ('$erabIzena', '$pass_hasheatuta', '$izena','$abizena','$tel','$nan','$jdat','$emaila')");
                $stmt = $db->prepare("INSERT INTO erabiltzaile (erabIz, pasahitza, izena, abizena, telefonoa, nan, jaioData, emaila) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
                // Esaten diogu zein motatako parametroak izango diren SQL injekzioa sahiesteko, s (string) eta i (integer)
                $stmt->bind_param("ssssisss", $erabIzena, $pass_hasheatuta, $izena, $abizena, $tel, $nan, $jdat, $emaila);
                // query-a exekutatzen dugu


                if ($stmt->execute())
                { // arrakasta badu sententzia, hemen sartuko da
                    //echo "Datuak DBan gorde dira."; ECHO HAU EZ DA BEHARREZKOA   

                    // hemen sartu behar ditugu datuak log taulan (arrakastatsua bai)

                    header("Location: http://localhost:81/erabileremu.php");
                    exit;
                }else{

                    // hemen sartu behar ditugu datuak log taulan (arrakastatsua ez)
                    /*
                    $db = new mysqli("db", "admin", "test", "database");
                    $stmt = $db->prepare("INSERT INTO log (erabIzena, saiakeraOrdua, arrakastatsua) VALUES (?, ?, ?);");
                    // Esaten diogu zein motatako parametroak sartuko diren.
                    $stmt->bind_param("s", $erabIzena);

                    FALTA POR CORREGIR
                    
                    */
                    echo "ERROREA: Ezin izan dira datuak ondo sartu DBan.";
                }
            }else {
                alert("ERROREA: Sartutako erabiltzailea existitzen da, saiatu beste batekin!!"); 
            }
    
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHU Liburutegia - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<script type=“text/javascript” src="script2.js" ></script>


<div class="irudia">
    <img src="Liburu-apalaFondo.jpg" alt="Libro Abierto" width="300" height="200">
</div>

<div class="content">

    <!-- Web Orriaren gorputza-->
<body background="Liburuak.webp">
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