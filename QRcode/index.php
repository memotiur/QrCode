<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<title>Cross-Browser QRCode generator for Javascript</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="qrcode.js"></script>
</head>
<body>
<?php
	for($i=1;$i<=5;$i++){
		echo'<div id="'.$i.'" style="width:100px; height:100px; margin-top:15px;padding-bottom:200px;"></div>';
		echo'<br><hr>';
	}
	
?>



<script type="text/javascript">
for(var i=5;i>=1;i--){
var elText = i+4852;
var qrcode = new QRCode(document.getElementById(i));
alert(i);
function makeCode () {		
	
	qrcode.makeCode(elText);
}

makeCode();


}
</script>
</body>



