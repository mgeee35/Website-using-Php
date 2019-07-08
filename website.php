<html>
    <head>
            <title>THE PROJECT</title>
	
    </head><center>
<h1></h1>
<h1></h1>
<h1></h1>

<img src="resim.jpg" width="200" height="200">


<center><u><h1>DISIPLINLERARASI TASARIM PROJESI</u></center></h1>

<h1></h1>
<img src="logo.png" width="500" height="80">
<img src="logo2.jpg" width="500" height="80">

    <style>
        input#sayi1{
            width:200px;
            height:35px;
            border:1px solid #cfcfcf;
            -webkit-box-shadow:2px 2px 5px #cfcfcF;
            -moz-box-shadow:2px 2px 5px #cfcfcF;
            font-family: Calibri;
            font-size:16px;
            color:red;
            font-weight: bold;
        }
        span{
            font-family:Calibri;
            font-size:16px;
            font-weight: bold;
        }
        span.islem{
            font-family: Calibri;
            font-size:20px;
            color:black;
        }
        span.sonuc{
            font-family: Calibri;
            font-size:20px;
            color:red;
        }
        input#sub{
            width:100px;
            height:35px;
            font-family: Arial;
            font-weight: bold;
        }
        select{
        width:100px;
        height:33px;
        }
    </style>
<body><center>
<h2>GOVDE BORULU ISI DEGISTIRICILER</h2>
<h2>MUKAVEMET HESAPLARI</h2>
<h0><u>LUTFEN ASAGIDAKI BILGILERI DOLDURUNUZ VE YAPMAK ISTEDIGINIZ HESAPLAMA SECIMINI "SECINIZ" KISMINDAN YAPINIZ.</u></h0>

<h5>P: HESAP TASARIM BASINCI</h5>
<h5>K: HESAP SICAKLIGINDA MALZEME MUKAVEMETI</h5>
<h5>S: EMNIYET KATSAYISI</h5></sub>
<h5>V: KAYNAK EMNIYET KATSAYISI</h5>
<h5>D0: GOVDE DIS CAPI</h5>
<h5>B: HESAPLAMA KATSAYISI (BETA)</h5>
<h5>d2: AYNA DELIKLERINE TEGET OLAN EN BUYUK CEMBER CAPI</h5>
<h5><i>********************************************************************************</i></h5>

    <form action="" method="post">
	<p><span>P:</span><input id="sayi1" type="text" name="sayi1"></p>
	<p><span>K: </span><input id="sayi1" type="text" name="sayi2"></p>
	<p><span>S: </span><input id="sayi1" type="text" name="sayi3"></p>
	<p><span>V: </span><input id="sayi1" type="text" name="sayi4"></p>
	<p><span>D0: </span><input id="sayi1" type="text" name="sayi5"></p>
        <p><span>B: </span><input id="sayi1" type="text" name="sayi6"></p>  
	<p><span>d2: </span><input id="sayi1" type="text" name="sayi7"></p>
        <p><span>FR: </span><input id="sayi1" type="text" name="sayi8"></p>     
        <p><span>d: </span><input id="sayi1" type="text" name="sayi9"></p>
 	<p><span>b: </span><input id="sayi1" type="text" name="sayi10"></p>
        <p><span>k: </span><input id="sayi1" type="text" name="sayi11"></p> 

	  <select name="islem">
                <option value="yok">--SECINIZ--</option>
                <option value="GOVDE">GOVDE ET KALINLIGI HESABI</option>
                <option value="BOMBE">BOMBE HESABI</option>
                <option value="AYNA">AYNA HESABI</option>
                <option value="BORU">BORU KAYNAKLARI HESABI</option>
		<option value="FLANS">FLANS HESABI</option>
            </select>
        <input type="submit" id="sub" value="HESAPLA">
<h5><i>********************************************************************************</i></h5>
<h5><i>GOVDE ET KALINLIGI HESABI ICIN --- P, K, S, V, D0</i></h5>
<h5><i>BOMBE HESABI ICIN --- D0, P, B, K, S, V</i></h5>
<h5><i>AYNA HESABI ICIN --- d2, P, S, K</i></h5>
<h5><i>BORU KAYNAKLARI HESABI ICIN --- FR, S, K</i></h5>
<h5><i>FLANS HESABI ICIN --- d, b, k</i></h5>
<h5><i>DEGERLERINI GIRMELISINIZ. AKSI TAKDIRDE PROGRAM HATA VERECEKTIR.</i></h5>
<h5><i>********************************************************************************</i></h5>
</form>
<?php
$sayi1=@$_POST['sayi1'];
$sayi2=@$_POST['sayi2'];
$sayi3=@$_POST['sayi3'];
$sayi4=@$_POST['sayi4'];
$sayi5=@$_POST['sayi5'];
$sayi6=@$_POST['sayi6'];
$sayi7=@$_POST['sayi7'];
$sayi8=@$_POST['sayi8'];
$sayi9=@$_POST['sayi9'];
$sayi10=@$_POST['sayi10'];
$sayi11=@$_POST['sayi11'];
$islem=@$_POST['islem'];

switch($islem){

    case "yok";
    echo "<font color=red>ISLEM SECIMI YAPMADINIZ. LUTFEN HESAPLAMA YAPMAK ISTEDIGINIZ ISLEMI SECINIZ.</font>";
    break;

    case "GOVDE";
    echo "<span class=islem>SONUC=</span>";
    echo "<span class=sonuc>",$sonuc=($sayi5*$sayi1*$sayi3)/($sayi2*$sayi4*20+$sayi1*$sayi3),"</sonuc>";
    break;

    case "BOMBE";
    echo "<span class=islem>SONUC=</span>";
    echo "<span class=sonuc>",$sonuc=($sayi5*$sayi1*$sayi6*$sayi3)/(40*$sayi2*$sayi4),"</sonuc>";
    break;

    case "AYNA";
    echo "<span class=islem>SONUC=</span>";
    echo "<span class=sonuc>",$sonuc=$sayi7*0.4*sqrt(($sayi1*$sayi3)/($sayi2*10)),"</span>";
    break;

    case "BORU";
    echo "<span class=islem>SONUC=</span>";
    echo "<span class=sonuc>",$sonuc=(0.4*$sayi8*$sayi3)/(27*$sayi2),"</span>";
    break;

    case "FLANS";
    echo "<span class=islem>SONUC=</span>";
    echo "<span class=sonuc>",$sonuc=(6*$sayi10-0.5*(0.39*$sayi11-2*$sayi9))/(0.39*$sayi11-2*$sayi9),"</span>";
    break;
    default:
}
?>
</center>
<center><h5><i>********************************************************************************</i></h5></center>
<center><u><h3>ONLINE SICAKLIK BILGISI</u></center></h3>

<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/204680/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
<center><h5><i>********************************************************************************</i></h5></center>
<center><u><h2>PROJE EKIBI</u></center></h2>
<center><h3>HALIL IBRAHIM YILDIRIM - 05110000982</center></h3>
<center><h3>MUSTAFA GUCLU - 05110000994</center></h3>
<center><h3>ARMAGAN DOGANAY - 05130001375</center></h3>
<center><h3>IBRAHIM BATUHAN OZTURK - 05150000711</center></h3>
<center><h5><i>********************************************************************************</i></h5></center>


</body>
</html>