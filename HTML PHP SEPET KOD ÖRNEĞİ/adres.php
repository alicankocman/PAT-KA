<?php 
//Bağlantı sayfamızı include yöntemi ile sayfamıza çekiyoruz.
include ("baglan.php"); 
?>
 <body background="resimler/6.jpg">
<table border="1" width="1350" height="150" bgcolor="#00B5B5" bordercolor="aqua">
    <tr>
        <td>Ad Ve Soyad</td>
        <td>Adres</td>
        <td>Sipariş Key</td>
    </tr>
    <?php 
               $conn= mysqli_connect("localhost","root","","internet");
                //Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
                $verileriCek = mysqli_query ($conn,"select * from uyekayit");
               
                //Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
                while ($b=mysqli_fetch_array($verileriCek)){
                     
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $advesoyad = $b['advesoyad'];
                    $adres = $b['adres'];
                    $sipariskey=$b['sipariskey'];
                     
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                    echo "<tr>
                    <td>$advesoyad</td>
                    <td>$adres</td>
                    <td>$sipariskey</td>
                </tr>";
                     
                }
                 
   ?>
          <center>
           <form action="sonucb.php" method="get">
 Aramak İstediğiniz Keyi Yazınız...<input type="text" name="aramasorgusua" placeholder="Aramak istediğiniz kelimeyi yazınız"><br><br>
 <input type="submit" value="Ara"><br><br>
</form>  
     </center>        
</table></body>
<br><br><br>
<form>
    <center>
    <input type="button" onclick="window.location.href = 'index.html'" value="ANASAYFA" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" onclick="window.location.href = 'yoneticigirisi.html'" value="PANEL" class="button">
    </center>
</form>
<style>
  .button {

display: inline-block;

padding: 15px 25px;

font-size: 24px;

cursor: pointer;

text-align: center;

text-decoration: none;

outline: none;

color: #fff;

background-color:#f4511e;

border: none;

border-radius: 15px;

box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {

background-color: #3e8e41;

box-shadow: 0 5px #666;

transform: translateY(4px);
}
</style>
