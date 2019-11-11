<style>
body{font-family: SansationRegular,Arial,sans-serif; margin:20px;
background-color:#d0ecd7;}
.title{font-size: 30px;text-align:center;font-weight:600; }
.contact{font-size: 18px;text-align:center;}
</style>
<body>
<div class="title">JSON From Github</div>
<div class="contact">rayanglin.tech@gmail.com</div>
<h2>Unformated</h2>
<?php
$jsondata=file_get_contents('instagram.json');
$obj=json_decode($jsondata, true);
print_r((array) json_decode($jsondata));
?>
<br>
<h2>Formated</h2>
<?php
$jsondata2=file_get_contents('instagram.json');
$obj2=json_decode($jsondata2, true);
echo "<pre>";
print_r((array) json_decode($jsondata2));
?>
</body>
