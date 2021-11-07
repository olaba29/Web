<?php


require 'dbkon.php';


if(isset($_POST['aukerak']))
{
    $auk = $_POST['aukerak'];
    foreach ($auk as $value)
    {
        // AQUI TENEMOS QUE MIRAR A VER SI EL VALOR $VALUE ES:
        // DATALD LIBZER O LIBDATALD
        // Y DEPENDIENDO DE ESO REENVIARLO A EL PHP CORRESPONDIENTE

        if($value == "libzer")
        {
            header("Location: http://localhost:81/libzerrikusi.php");

        }elseif($value == "datAld")
        {
            header("Location: http://localhost:81/datuakEditatu.php");
        }elseif($value == "libDatAld")
        {
            header("Location: http://localhost:81/libDatuakAldatu.php");
        }else
        {
            echo "na de na";
        }
        exit;
    }
}








// ESTO DE ABAJO EN VD SUDA SI LO HACE O NO PERO VIENE BIEN TENERLO PA BASARNOS EN ELLO

/*$query = "SELECT * FROM erabiltzaile";
$result = mysqli_query($con, $query);


if($result-> num_rows > 0){ // Si el query da mas de 0 erabiltzailes... (como deberia)
    while($row = mysqli_fetch_array($result)){ // Pasa por todas las rows

        $erabIz= $row["erabIz"];
        $email = $row["emaila"];




        
        
        // **************************** FALTA METER EN EL ECHO EL NICKNAME Y EL MAIL BIEN *************************************************

        echo "<tr><td>" . $erabIz . "</td>  <td>" . $email . "</td></tr>";
    }


}
else{
    echo "0 emaitza";
}
*/



?>

<!DOCTYPE html>
<!-- Goikoaren bidez artxiboaren extensioa espezifikatzen dugu (Badaezpada) -->

<!-- HTMLren hasiera -->
<html lang="en">
<!-- Honen bidez hmtl-k erabiliko duen hizkuntza esaten diogu ingelesa-->

<!-- Web Orriarren aurrekaria-->
<head>
    <title>EHU Liburutegia - Erabiltzaile</title>
    <link rel="stylesheet" href="styleerab.css?v=<?php echo time(); ?>">
</head>




<div class="irudia">
    <img src="data:image/png;base64,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" alt="" width="300" height="200">
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
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> Erabiltzaile-Eremua </strong></p></td>
                <td>&nbsp;</td>
            </tr>
        </table>
<!-- ***********************************************************************************************************-->
        <div class="inputak">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> DATUEN ALDAKETA </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td> Hautatu bat eta botoia klikatu </td>
                    <td>&nbsp;</td>
                </tr>
                <form name="erabAukerak" class="inputak" action="erabileremu.php" method="POST">
                    <tr>
                        <td>&nbsp;</td>
                        <td><select id="aukeratu"name="aukerak[]" required> 
                            <option value="">Ikusi zure aukerak hemen.</option>
                            <option value="libzer">Nire liburuen zerrenda ikusi.</option> 
                            <option value="datAld">Nire datuak aldatu.</option> 
                            <option value="libDatAld">Liburu baten datuak aldatu.</option>
                        </select></td>
                        <td><input id="aukeratuBotoia" type="submit" name="Aukeratu" value="Aukeratu" title="Desplegablearen aukera bat sartu eta sakatu." /></td>
                    </tr>
                </form>

                <tr>
            </tr>
            </table>
        </div>
        <div class="botoiak">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="bueltatuBot" type="button" name="bueltatuBot" value="Sesioa Itxi" onclick="location.href='index.php'"/></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
    </div>
<!-- ***********************************************************************************************************-->
</body>
    
</div>

<!-- Html dokumentuaren amaiera -->
</html>
