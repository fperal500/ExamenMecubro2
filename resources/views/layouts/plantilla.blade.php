
<html>

<head>
	<meta charset="utf-8">
		<title> Examen Mecubro 2 </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
		{!! Html::style('assets/css/bootstrap.css') !!}
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
 
 <style>
 	
 	.selector-for-some-widget {
  box-sizing: content-box;
}


 </style>

</head>

<body>

	<div class ="contenido">

		@yield("contenido")
</div>	

<div class ="pie">

	@yield("pie")

	</div>

	<!-- JAVA SCRIPT BOOTSTRAP-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/docs.min.js"></script>




</body>

</html>