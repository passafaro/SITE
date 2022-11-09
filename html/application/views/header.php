<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url() ?>application/views/imagens/favicon.png">
	<title>Alessandro Passafaro</title>

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url() ?>application/views/estilo.css">

	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script>
	$(document).ready(function () {
		
		$(window).scroll(function(){
			if($(this).scrollTop() < 20){
				$(".scrollToTop").css("opacity", "0");
			} else {
				$(".scrollToTop").css("opacity", "1");
			}
		});
		
		
		$("#botaoNavMobile").click(function(){ 
			$("#botoesNavegador a ").click(function(){ 
				$("#botoesNavegador").collapse('hide');
			});
		});
	
	
	
	});
	</script>

</head>
<body>


