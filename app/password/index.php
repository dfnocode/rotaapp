
<?php
$path = dirname(__FILE__);
$path .= '/../config/functions/valida_token.php';
include_once($path);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>JC Férias</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<?php
			if($resultado == 0){
				echo "
			
				<span class='login100-form-title p-b-48'>
					<label> Token invalido.</label>
					<br/>
					<a  href='../login'>
						<button type='button' class='btn btn-primary'>Retornar para o ínico</button>
					</a>
				</span>
				

				";
			}else if ($resultado == 1) {
				$path = dirname(__FILE__);
                $path .= '/form.php';
                include_once($path);
			 } else{
				echo "
			
				<span class='login100-form-title p-b-48'>
					<label> Token de acesso expirado.</label>
					<br/>
					<a  href='../login'>
						<button type='button' class='btn btn-primary'>Retornar para o ínico</button>
					</a>
				</span>
				

				";
			 } ?>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<!--Swit Alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!--Forms -->
	<script src="js/form.js"></script>
	<script src="js/main.js"></script>
	

</body>
</html>