<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="./lib/jquery/jquery-3.7.0.min.js"></script>
	<script src="./lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>GELİSMİŞ MENÜLER nav pills</title>
</head>
<body>
    <div class="container-fluid">
        <ul class="nav nav-pills">
            <li id="anasayfa"><a href="11-2-GelismisMenuler-NavPills-index.php?sayfa=anasayfa">ANASAYFA</a></li>
            <li id="iletisim"><a href="11-2-GelismisMenuler-NavPills-index.php?sayfa=iletisim">İLETİŞİM</a></li>
            <li id="hakkimizda"><a href="11-2-GelismisMenuler-NavPills-index.php?sayfa=hakkimizda">HAKKIMIZDA</a></li>
        </ul>
        <?php 
        if(isset($_GET['sayfa'])){
            $baslik=$_GET['sayfa'];
            if($baslik=='anasayfa'){
                echo "<div><h4>ANASAYFA<h4><p>ANASAYFA İÇERİĞİ</p></div>";
            }
            if($baslik=='hakkimizda'){
                echo "<div><h4>HAKKIMIZDA<h4><p>HAKKIMIZDA İÇERİĞİ</p></div>";
            }
            if($baslik=='iletisim'){
                echo "<div><h4>İLETİŞİM<h4><p>İLETİŞİM İÇERİĞİ</p></div>";
            }
           echo "<script>document.getElementById('".$baslik."').classList.add('active');</script>";
        }
        
        ?>
        
    </div>
</body>
</html>