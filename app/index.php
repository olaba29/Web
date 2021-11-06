<?php
    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    //POSTeko aldagaiak definitu
    $izena= $_POST['izena'];
    $abizena= $_POST['abizena'];
    $emaila= $_POST['emaila'];
    $jaiotzeData= $_POST['jaiotzeData'];
    $nan= $_POST['nan'];
    $telefonoZenbakia= $_POST['telefonoZenbakia'];

    //Hurrengo orrialdera (login.php) eraman
    header("Location: http://localhost:81/login.php");
    exit;
?>


<!DOCTYPE html>
<!-- Goikoaren bidez artxiboaren extensioa espezifikatzen dugu (Badaezpada) -->

<!-- HTMLren hasiera -->
<html lang="en">
<!-- Honen bidez hmtl-k erabiliko duen hizkuntza esaten diogu ingelesa-->

<!-- Web Orriarren aurrekaria-->
<head>
    <title>EHU Liburutegia - Sarrera</title>
    <link rel="stylesheet" href="styles.css">
    <script type=“text/javascript” src="script.js" ></script> 
</head>


<div class="irudia">
    <img src="https://images.freeimages.com/images/large-previews/76e/book-with-white-pages-1507326.jpg" alt="" width="300" height="200">
</div>

    <!-- Page content -->

    <!-- Web Orriaren gorputza-->
<body background= "https://cdn.pixabay.com/photo/2016/02/16/21/07/books-1204029__340.jpg?__cf_chl_jschl_tk__=pmd_rg0UyIVTKotZFzKXG6L7RTRiwJwdw6vwz3E1204eRgg-1635866096-0-gqNtZGzNAjujcnBszQhR">
    
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

    <form name="loginak" class="inputak" action="index.php" method="POST" > <!-- Bere buruari parametroak pasa -->
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="izena" type="text" name="izena" placeholder="Izena" title="Letrak soilik. ADB: Markel" ></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="abizena" type="text" name="abizena" placeholder="Abizena" title="Letrak soilik. ADB: Garcia" ></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="emaila" type="email" name="emaila" placeholder="Email-a" title="ADB: jon291@gmail.com"></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="jaiotzeData" type="text" name="jaiotzeData" placeholder="Jaiotze Data" pattern="[0-9]{4}[/]{1}[0-9]{2}[/]{1}[0-9]{2}" title="UUUU/HH/EE   ADB: 2021/01/18"></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="nan" type="text" name="nan" placeholder="Sartu ezazu zure NAN" pattern="[0-9]{8}[A-Za-z]{1}" maxlenght="9"title="8 zenbaki eta letra 1. ADB: 55255754k" /></td>
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
                <input class="form-control" id="telefonoZenbakia" type="tel" name="telefonoZenbakia" placeholder="Telefono Zenbakia" maxlenght="9" pattern="[0-9]{9}" title="9 zenbakiz osatuta." ></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="erregistratu" type="submit" name="erregistratu" value="Erregistratu" title="Sakatu baino lehen eremu guztiak beterik egon behar dira" ></td> <!-- Hemen berez, js funtziotik pasa beharko zen -->
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
                <td><input id="sesioahasi" type="button" name="sesioahasi" value="Sesioa hasi" onclick="location.href='login2.php' " /></td>
                <td>&nbsp;</td>
            </tr>
        </table> 
    </div>

    
</div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>