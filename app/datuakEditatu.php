<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    $erabIzena= $_SESSION['erabIzena'];

	$query = "SELECT * FROM liburuak where erabIz ='$erabIzena'";
	$result = mysqli_query($con, $query);


	if($result-> num_rows > 0){
		
        $row = mysqli_fetch_array($result);
		$erabIzena= $row["erabIz"];
        $pasahitza= $row["pasahitza"];
        $izena = $row["izena"];
        $abizena = $row["abizena"];
        $emaila = $row["emaila"];
        $jdat =  $row["jaioData"];
        $nan = $row["nan"];
        $tel = $row["telefonoa"];

		echo "<tr><td id ='erabiltzaile izena'>" . $erabIzena . "</td><td id = 'pasahitza'>" . $pasahitza . "</td><td id = 'izena'>" . $izena . "</td></td><td id = 'abizena'>" . $abizena . "</td></td><td id = 'emaila'>" . $emaila . "</td></td><td id = 'jaiotze data'>" . $jdat . "</td></td><td id = 'nan'>" . $nan . "</td></td><td id = 'telefonoa'>" . $tel . "</td></tr>";
		


	}
?>

<!DOCTYPE html>
<!-- Goikoaren bidez artxiboaren extensioa espezifikatzen dugu (Badaezpada) -->

<!-- HTMLren hasiera -->
<html lang="en">
<!-- Honen bidez hmtl-k erabiliko duen hizkuntza esaten diogu ingelesa-->

<!-- Web Orriarren aurrekaria-->
<head>
    <title>LIBURU BAT SARTU</title>
    <link rel="stylesheet" href="styles.css"?v=<?php echo time(); ?>">
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
                <td><p style="background-color: lightblue"><strong> <Label>LIBURU BAT SARTU</Label> </strong></p></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> Liburuaren datuak sartu ezazu. </strong></p></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
    <div class="inputak">
        <form action="libSartuDB.php" method="POST">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><input id="bueltatuBot" type="button" name="bueltatuBot" value="Bueltatu" onclick="location.href='erabileremu.php'"/></td>
                <td>&nbsp;</td>
            </tr>
        </table>
        </form>
    </div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>