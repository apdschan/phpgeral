<html>
<head>
    <style>
        *{
            box-sizing: border-box;
        }
        .Anjay{
            display: flex;
            flex-direction: row;
            font-family: 'Candara';
        }
        .judul{
            text-align : center;
            padding: 20px;
            width : 100%;
            margin: 1em;
            border-radius: 3px;
            background-color: #00FFFF;
        }
        .Isi{
            text-align : center;
            background-color: #7FFFD4;
            margin: 0.5em;
            border-radius: 15px;
            width : 40%;
            padding : 20px;
        }
        body{
            background-color: #00CED1;
        }
        img{
            border-radius: 10px; 
        }
        .input{
            background-color :#7FFFD4;
            width : 90%;
            border-color : white;
        }
    </style>
</head>
<body>
<div class= Anjay>
<div class= judul><h1>Program Luas Dan Keliling Bangun Datar<h1></div>
</div>
<div class= Anjay>
<div class= Isi><h2>Segitiga Siku-siku</h2><p>
<img class=img src = sikusiku.JPEG width=90%></img>
<form action="" method="POST">
Tinggi : <p>
<input class="input" type="text" name="tinggi" required>
<p>Alas : <p>
<input class="input" type="text" name="alas" required>
<p>
<input class="input" type="submit" name="input" value="Kirim">
</form>
<form>
<?php
if(isset($_POST['input'])){
    $tinggi =$_POST['tinggi'];
    $alas   =$_POST['alas'];
    $luas = 0.5 * $alas * $tinggi;
    $keliling = ($tinggi*$tinggi) + ($alas*$alas);
    $simir = sqrt($keliling);
    $keliling2 = $tinggi + $alas + $simir;
    echo "Sisi Miring : <p>";
    echo "$simir <p>";
    echo "Luas : <p>";
    echo "$luas<p>";
    echo "Keliling : <p>";
    echo "$keliling2";
    }
?></form></div>
<div class= Isi><h2>Persegi</h2><p>
<img class=img src = persegi.JPEG width=90%></img>
<form action="" method="POST">
Sisi : <p>
<input class="input" type="text" name="sisi" required>
<p>
<input class="input" type="submit" name="data" value="Kirim">
</form>
<form>
<?php
if(isset($_POST['data'])){
    $Sisi =$_POST['sisi'];
    $luas = $Sisi *$Sisi;
    $keliling = 4 * $Sisi;
    echo "Luas : <p>";
    echo "$luas<p>";
    echo "Keliling : <p>";
    echo "$keliling";
    }
?></form>
</div>
<div class= Isi><h2>Persegi Panjang</h2><p>
<img class=img src = persegipanjang.JPEG width=90%></img>
<form action="" method="POST">
Panjang : <p>
<input class="input" type="text" name="panjang" required>
<p>Lebar : <p>
<input class="input" type="text" name="lebar" required>
<p>
<input class="input" type="submit" name="input2" value="Kirim">
</form>
<form>
<?php
if(isset($_POST['input2'])){
    $panjang =$_POST['panjang'];
    $lebar   =$_POST['lebar'];
    $luas = $panjang * $lebar;
    $keliling = $panjang + $lebar+  $panjang + $lebar;
    echo "Luas : <p>";
    echo "$luas<p>";
    echo "Keliling : <p>";
    echo "$keliling";
    }
?></form></div>
<div class= Isi><h2>LIngkaran</h2><p>
<img class=img src = lingkaran.JPEG width=90%></img>
<form action="" method="POST">
Diameter : <p>
<input class="input" type="text" name="diameter" required>
<p>
<input class="input" type="submit" name="input3" value="Kirim">
</form>
<form>
<?php
if(isset($_POST['input3'])){
    $diameter =$_POST['diameter'];
    $diameter2 = $diameter / 2;
    $luas = 22/7 * $diameter2  * $diameter2;
    $keliling = 22/7 * $diameter;
    echo "Jari-jari : <p>";
    echo "$diameter2 <p>";
    echo "Luas : <p>";
    echo "$luas <p>";
    echo "Keliling : <p>";
    echo "$keliling";
    }
?></form>
</div>
</div>
</body>
</html>