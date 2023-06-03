<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
	<!-- viewport görüntüleme alanını cihazın genişliği ile otomatik olarak ölçülendirdik ve oranı birebir yaptık-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap ve query script lerinin cdn üzerinden alınması
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="./lib/jquery/jquery-3.7.0.min.js"></script>
	<script src="./lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body><!--	container : ölçüsü değiştirilemez  ve tarayıcıyı ortalayacak şekilde sayfa düzeni oluşturulur
			container-fluid:tarayıcının genişliği ile birlikte sayfanın otomatik olarak esnemesini sağlayacak düzen oluşturulur
		-->
  <div class="container-fluid">
    <ul class="nav nav-pills">
       <li id="anasayfa" ><a  href="1-index.php?sayfa=anasayfa" >Ana Sayfa</a></li>
       <li id="hakkimizda" ><a  href="1-index.php?sayfa=hakkimizda">Hakkımızda</a></li>
       <li id="iletisim" ><a href="1-index.php?sayfa=iletisim">İletişim</a></li>
    </ul>
	</div>
  <?php
  if(isset($_GET["sayfa"])){
	$baslik =  $_GET["sayfa"]; 
	if($baslik=='anasayfa'){
	   echo "<div><h4>Ana Sayfa</h4><br>Ana sayfa içeriği....</div>";
	}
	if($baslik=='hakkimizda'){
	   echo "<div><h4>Hakkımızda</h4><br>Hakkımızda içeriği....</div>";
	}
	if($baslik=='iletisim'){
	   echo "<div><h4>İletişim</h4><br>İletişim içeriği....</div>";
	}
	echo "<script>document.getElementById('".$baslik."').classList.add('active');</script>";
  }
  
  ?>

</body>
</html>