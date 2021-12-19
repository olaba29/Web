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

    $izena = $_SESSION['izena'];
    $abizena = $_SESSION['abizena'];
    $emaila = $_SESSION['emaila'];
    $jaioData = $_SESSION['jaiodat'];
    $nan = $_SESSION['nan'];
    $telefonoa = $_SESSION['telf'];
    $bankuzenb = "proba";
    //$bankuzenb = $_SESSION['bankuZenb'];

    if(isset($_POST['sesioahasi']))
    {
        $_SESSION['erabIzena'] = $_POST['erabIzena'];
        $_SESSION['pasahitza'] = $_POST['pasahitza'];
        $erabIz= $_POST['erabIzena'];
        $pasahitza= $_POST['pasahitza'];
        $pasahitzaBer= $_POST['pasahitzaBer'];

        if($pasahitza == $pasahitzaBer){
            // Komandoa prestatu

            /* 
            $db = new mysqli("db", "admin", "test", "database");
            $sql = "SELECT * FROM liburu;";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            //grab a result set
            $resultSet = $stmt->get_result();
            //pull all results as an associative array
            $liburuak = $resultSet->fetch_all();
            foreach($liburuak as $libro) { */

            //echo("1");
            $db = new mysqli("db", "admin", "test", "database");
            $statement = $db->prepare("select * from erabiltzaile where erabIz = ?");
            $statement->bind_param("s", $erabIz);
            $emaitza = $statement->execute();
            //echo("2");
            /*



            $sql ="SELECT * FROM `erabiltzaile` WHERE `erabIz` = '$erabIzena'"; // Hau da konprobatzeko ea erabiltzaile izen hori hartuta dagoen edo ez.
            $query = mysqli_query($con,$sql);
            $nr = mysqli_num_rows($query); // nr (number rows) aldagaia 1 izango da erabiltzailea aurkitu badu eta 0 ez badu aurkitu.
            $row = mysqli_fetch_array($query); // Ez badago, row NULL balioa izango du. Eta sartu ahal dugu. Bestela, erabiltzaileizena emango digu.

             */
    
            if ($emaitza) 
            {   
                //echo("3");

                $algorithm = MCRYPT_BLOWFISH;
                $key = 'That golden key that opens the palace of eternity.';
                $mode = MCRYPT_MODE_CBC;

                $iv = mcrypt_create_iv(mcrypt_get_iv_size($algorithm, $mode), MCRYPT_DEV_URANDOM);

                $encrypted_data = mcrypt_encrypt($algorithm, $key, $bankuzenb, $mode, $iv);
                $bankEnk = base64_encode($encrypted_data);
                // pasahitza hasheatu egingo dugu seguruago izateko
                $pass_hasheatuta = password_hash($pasahitza, PASSWORD_DEFAULT); // Hash bat sortzen dugu pasahitzarekin
                
                $db = new mysqli("db", "admin", "test", "database");
                //$db = new PDO("mysql:host=db;dbname=database", "admin", "test");
                $stmt = $db->prepare("insert into erabiltzaile (erabIz, pasahitza, izena, abizena, telefonoa, nan, jaioData, emaila, bankuZenb) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssisssi", $erabIz, $pass_hasheatuta, $izena, $abizena, $telefonoa, $nan, $jaioData, $emaila, $bankEnk);
                $bool = $stmt->execute();

                //echo("4");
                /*
                //grab a result set
                $resultSet = $sententzia->get_result();
                //pull all results as an associative array
                $liburuDatuak = $resultSet->fetch_all(); // Hau bilatu duen liburuaren datuak (existitzen bada)
                */

                //$stmt = $db->prepare("INSERT INTO erabiltzaile (erabIz, pasahitza, izena, abizena, telefonoa, nan, jaioData, emaila) VALUES ('$erabIzena', '$pass_hasheatuta', '$izena','$abizena','$tel','$nan','$jdat','$emaila')");
                /*
                try{
                    $db = new mysqli("db", "admin", "test", "database");
                    //$db = new PDO("mysql:host=db;dbname=database", "admin", "test");
                    $stmt = $db->prepare("INSERT INTO `erabiltzaile` (`erabIz`, `pasahitza`, `izena`, `abizena`, `telefonoa`, `nan`, `jaioData`, `emaila`, `bankuZenb`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
                    $stmt->bind_param("ssssisssi", $erabIz, $pass_hasheatuta, $izena, $abizena, $telefonoa, $nan, $jaioData, $emaila, $bankuzenb);
                    // Esaten diogu zein motatako parametroak izango diren SQL injekzioa sahiesteko, s (string) eta i (integer)
                    $stmt->bindParam(":erabIz", $erabIz, PDO::PARAM_STR);
                    $stmt->bindParam(":pass_hasheatuta", $pass_hasheatuta, PDO::PARAM_STR);
                    $stmt->bindParam(":izena", $izena, PDO::PARAM_STR);
                    $stmt->bindParam(":abizena", $abizena, PDO::PARAM_STR);
                    $stmt->bindParam(":telefonoa", $telefonoa, PDO::PARAM_INT);
                    $stmt->bindParam(":nan", $nan, PDO::PARAM_STR);
                    $stmt->bindParam(":jaioData", $jaioData, PDO::PARAM_STR);
                    $stmt->bindParam(":emaila", $emaila, PDO::PARAM_STR);
                    $stmt->bindParam(":bankuZenb", $bankuzenb, PDO::PARAM_STR);
                    $bool = $stmt->execute();

                }catch(PDOException $ex)
                {
                    echo $ex->getMessage();
                }
                */




                //$stmt->bind_param('ssssissss', $erabIz, $pass_hasheatuta, $izena, $abizena, $tel, $nan, $jdat, $emaila, $bankuzenb);
                // query-a exekutatzen dugu


                if ($bool)
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
    <script type="text/javascript" src="script2.js" defer></script> 
</head>

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

    <form id="loginak" name="loginak" class="inputak" action="login.php" method="POST">
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
                <td><input id="sesioahasi" type="button" name="sesioahasi" value="Sesioa hasi" title="Eremu guztiak betetakoan sakatu" onclick="pswSecure()" /></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>
</body>
    
</div>

<!-- Html dokumentuaren amaiera -->
</html>