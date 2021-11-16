<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita


?>

<!DOCTYPE html>
<!-- Goikoaren bidez artxiboaren extensioa espezifikatzen dugu (Badaezpada) -->

<!-- HTMLren hasiera -->
<html lang="en">
<!-- Honen bidez hmtl-k erabiliko duen hizkuntza esaten diogu ingelesa-->

<!-- Web Orriarren aurrekaria-->
<head>
    <title>LIBURUEN ZERRENDA</title>
    <link rel="stylesheet" href="styles.css">
</head>

<script type=“text/javascript” src="script2.js" ></script>


<!--<div class="irudia">
    <img src="https://media.istockphoto.com/photos/blue-book-picture-id1281955543?b=1&k=20&m=1281955543&s=170667a&w=0&h=ZmwacrjQewEU3RqJLYufA-Bi7JVOI2JgcB8X0o7vPeI=" alt="" width="300" height="200">
</div>

<div class="content">-->



    <!-- Web Orriaren gorputza-->
<body background="https://cdn.pixabay.com/photo/2016/02/16/21/07/books-1204029__340.jpg?__cf_chl_jschl_tk__=pmd_rg0UyIVTKotZFzKXG6L7RTRiwJwdw6vwz3E1204eRgg-1635866096-0-gqNtZGzNAjujcnBszQhR">
    <div class="inputak">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> LIBURUEN ZERRENDA </strong></p></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <form name="erabAukerak" class="inputak" action="erabileremu.php" method="POST">
                    <tr>
                        <td>&nbsp;</td>
                        <input id="bilatu" type="text" name="bilatu" placeholder="Bilatu liburu bat." title="Letrak soilik. ADB: Garcia" required/>
                        <td><input id="bilatuButton" type="submit" name="bilatuButton" value="Bilatu" title="Sakatu hemen liburua bilatzeko." /></td>
                    </tr>
                </form>
                </tr>
        </table>
    </div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>