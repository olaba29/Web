<?php
    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita
    session_start();

    //POSTeko aldagaiak definitu
    if(isset($_POST['erregistratu'])) // 'Erregistratu' botoia zapaldu bada
    {
        $_SESSION['izena'] = $_POST['izena'];
        $_SESSION['abizena'] = $_POST['abizena'];
        $_SESSION['emaila'] = $_POST['emaila'];
        $_SESSION['jaiodat'] = $_POST['jaiotzeData'];
        $_SESSION['nan'] = $_POST['nan'];
        $_SESSION['telf'] = $_POST['telefonoZenbakia'];
        header("Location: http://localhost:81/login.php");
        exit;
    }
    

    // EN ESTE DE ABAJO NO SE GUARDAN LOS DATOS Y CREO QUE POR ESO NO VA

    //$izena= $_POST['izena'];
    //$abizena= $_POST['abizena'];
    //$emaila= $_POST['emaila'];
    //$jaiotzeData= $_POST['jaiotzeData'];
    //$nan= $_POST['nan'];
    //$telefonoZenbakia= $_POST['telefonoZenbakia'];

    
    //Hurrengo orrialdera (login.php) eraman
    

    
    
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
    <title>EHU Liburutegia - Sarrera</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="./script.js" defer></script> 
</head>


<div class="irudia">
    <img src="../baliagarriak/Liburu-apalaFondo.jpg" alt="" width="300" height="200">
</div>

    <!-- Page content -->

    <!-- Web Orriaren gorputza-->
<body background="../baliagarriak/Liburuak.webp">
    
<div class="content">
    <div class="hasiera">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> LIBURUTEGIA </strong></p></td>
                <td>&nbsp;</td>
            </tr>
        </table>
        
    </div>

    <form name="loginak" id="loginak" class="inputak" action="index.php" method="POST" > <!-- Bere buruari parametroak pasa -->
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="izena" type="text" name="izena" placeholder="Izena" title="Letrak soilik. ADB: Markel" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="abizena" type="text" name="abizena" placeholder="Abizena" title="Letrak soilik. ADB: Garcia" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="emaila" type="email" name="emaila" placeholder="Email-a" title="ADB: jon291@gmail.com" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="jaiotzeData" type="text" name="jaiotzeData" placeholder="Jaiotze Data" pattern="[0-9]{4}[/]{1}[0-9]{2}[/]{1}[0-9]{2}" title="UUUU/HH/EE   ADB: 2021/01/18" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="nan" type="text" name="nan" placeholder="Sartu ezazu zure NAN" pattern="[0-9]{8}[A-Za-z]{1}" maxlenght="9"title="8 zenbaki eta letra 1. ADB: 55255754k" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><select class="form-control" id="countryCode" name="countryCode" style="max-width: 80px">
                    <option value="">+34</option>
                    <option value="">+56</option>
                    <option value="">+850</option>
                    <option value="">+972</option>
                </select>   
                <input class="form-control" id="telefonoZenbakia" type="tel" name="telefonoZenbakia" placeholder="Telefono Zenbakia" maxlenght="9" pattern="[0-9]{9}" title="9 zenbakiz osatuta." required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="button" value="Erregistratu" title="Sakatu baino lehen eremu guztiak beterik egon behar dira" onclick="datuakKonprobatu()"></td>
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
    <!--        
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Erregistratu" /></td>
                    <td>&nbsp;</td>
                </tr> -->

    <div class="botoiak">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td>Dagoeneko kontua badaukazu?</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="sesioahasi" type="button" name="sesioahasi" value="Saioa hasi" onclick="location.href='login2.php' " /></td>
                <td>&nbsp;</td>
            </tr>
        </table> 
    </div>

    
</div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>