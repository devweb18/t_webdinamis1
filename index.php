<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 1</title>
</head>
<body>
<h5>NAMA : ILHAM</h5>
<h5>NIM : 11170391</h5>
<hr>
<br>
<form>
<DIV>
<label>Pilih Tanggal</label>
<br>
<div>
<!- TANGGAL-->
<select>
<?php
$a=date('d');
$selt='';
for ($i=1; $i < 32 ; $i++) { 

	if($a==$i){
		$selt='selected';
	}else{
		$selt='';
	}
	?>
	<option <?=$selt?>><?=$i?></option>
	<?php
}
?>
</select>
<!- BULAN -->
<select>
<?php
$variable=[
1=>'Januari',
2=>'Februari',
3=>'Maret',
4=>'April',
5=>'Mei',
6=>'Juni',
7=>'Juli',
8=>'Agustus',
9=>'September',
10=>'Oktober',
11=>'November',
12=>'Desember',

];
echo $b=date('n');
foreach ($variable as $key => $value) {
 if($b==$key){
		$selb='selected';
	}else{
		$selb='';
	}
	?>
	<option  <?=$selb?>><?=$value?></option>
	<?php
}
?>
</select>
<!- TAHUN -->
<select>
<?php
$t=date('Y');
$selt='';
for ($h=2014; $h <= $t ; $h++) { 

	if($t==$h){
		$selh='selected';
	}else{
		$selh='';
	}
	?>
	<option <?=$selh?>><?=$h?></option>
	<?php
}
?>
</div>
	<p>hamroy1228@gmail.com</p>
</DIV>
</form>
</body>
</html>




