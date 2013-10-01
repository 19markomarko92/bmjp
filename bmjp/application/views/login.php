<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>WALA !!!</title>
	<link href="assets/bootstrap/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#mask {
		font-family: Consolas;
		color: #f6f6f6;
		font-size: 15px;		
		padding : 12px 0px  0px 383px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	#up1{
		height : 250px;
		background-color:#e9e9e9;
	
	}
		#up1 img{
		padding: 162px 15px 10px 390px;
	
	}
		#up2{
		height : 250px;
		background-color:#232323;
	
	}
			#up3{
		height : 5px;
		background-color:#646560;
	
	}
	#button{
		font-family: Consolas;
		color: #f6f6f6;
		width : 80px;
		height : 25px;
		background-color:#0077cc;
		-webkit-border-radius:5px;
		-moz-border-radius:5px;
		border-radius:5px;
		border:0px;
		
	}
		#button1{
		font-family: Consolas;
		color: #f6f6f6;
		width : 150px;
		height : 25px;
		background-color:#3c3e3f;
		-webkit-border-radius:5px;
		-moz-border-radius:5px;
		border-radius:5px;
		border:0px;
		text-align:center;
	}
#t1{

		width : 250px;
			height : 30px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;

}
	
	
	</style>
</head>
<body>
<script src="assets/bootstrap/assets/js/bootstrap.min.js"></script>

<div id="container">
	<div id="up1"><img src="<?php echo base_url();?>assets/images/img1.png"></div>
		<div id="up3"></div>
			<div id="up2">
				<div id="mask">Username <input type="text" id="t1"  name="Username"></input></div>
				<div id="mask">Password <input type="text"  id="t1"  name="Password"></input></div>
				<div id="mask"><input type="checkbox" value="RememberMe" name="RememberMe">Remember Me</input></div>
					<div id="mask">
						<form>
						<input  id="button" type="submit" value="SUBMIT"/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<input  id="button1" type="Reset Password" value="Reset Password"/>
						</form>
					</div>
				</div>
			</div>
</div>
</body>
</html>