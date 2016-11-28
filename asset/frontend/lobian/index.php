<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href=""/>
<link rel="stylesheet" href="dist/css/Lobibox.min.css"/>

</head>
<body>

<input type="button" id ="btnTest" class="btn btn-danger" value="Test"/>
<button id="basicError" class="btn btn-danger">Error</button>

<script src="lib/jquery.1.11.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/Lobibox.min.js"></script>
<script src="demo/demo.js"></script>
<script>
$(document).ready(function(){
		$("#btnTest").click(function(){
			audioElement.play();
			Lobibox.notify('error', {
				msg: 'กรุณากรอกข้อมูล'
			});
		});
		
});

</script>
</body>
</html>