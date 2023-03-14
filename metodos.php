<html >
<head>
	<link rel='stylesheet' href='style2.css'/>	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="LOGO2.png" />
	<script data-ad-client="ca-pub-8025537612057421" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
<div class="code">
	<?php

	#--------------------------------------
	#METODO BASICO
	#--------------------------------------
		if(isset($_POST['basico'])){
		echo "
		
		<form  method='post' action='basico.php'>    
		<h3>Elegiste el metodo Basico por favor introduce la CC,</br>
		para mas información sobre los metodos dar click <a href='https://n9.cl/4ha0' >aqui.</a></h3>
		<input target='_blank' type='text' name='cc' maxlength='16'  placeholder='Coloca tu cc' >
		<button>Extrapolar</button>
		</form>";}

			#--------------------------------------
			#METODO ACTIVACION 
			#--------------------------------------
			elseif(isset($_POST['activacion'])){
				echo "

				<form method='post' action='activacion.php'> 
				<h3>Elegiste el metodo Activación por favor introduce la CC,</br>
				para mas información sobre los metodos dar click <a href='https://n9.cl/4ha0' >aqui.</a></h3>   
				<input type='text' name='cc_activacion' maxlength='16'  placeholder='Coloca tu cc' >
				<button>Extrapolar</button>
				</form>";}

					#--------------------------------------
					#METODO SIMILITUD 
					#--------------------------------------
					elseif(isset($_POST['similitud'])){
						echo "
						<form method='post' action='similitud.php'>
						<h3>Elegiste el metodo Similitud por favor introduce dos CC del mismo Bin,</br>
						para mas información sobre los metodos dar click <a href='https://n9.cl/4ha0' >aqui.</a></h3>    
						<input type='text' name='cc_similitud' maxlength='16'  placeholder='Coloca tu primera cc' >
						<input type='text' name='cc_similitud2' maxlength='16'  placeholder='Coloca tu segunda cc' >
						<button>Extrapolar</button>
						</form>";}

							#--------------------------------------
							#METODO IDENTACION
							#-------------------------------------- 
							elseif(isset($_POST['identacion'])){
								echo "
								<form method='post' action='identacion.php'>    
								<h3>Elegiste el metodo Identación por favor introduce la CC,</br>
								para mas información sobre los metodos dar click <a href='https://n9.cl/4ha0' >aqui.</a></h3>
								<input type='text' name='cc_identacion' maxlength='16'  placeholder='Coloca tu cc' >
								<button>Extrapolar</button>
								</form>";}

									#--------------------------------------
									#METODO SOPHIA
									#-------------------------------------- 
									elseif(isset($_POST['sophia'])){
										echo "
										<form method='post' action='sophia.php'>
										<h3>Elegiste el metodo Sophia por favor introduce dos CC del mismo Bin,</br>
										para mas información sobre los metodos dar click <a href='https://n9.cl/4ha0' >aqui.</a></h3>    
										<input type='text' name='cc_sophia' maxlength='16'  placeholder='Coloca tu primera cc' >
										<input type='text' name='cc_sophia2' maxlength='16'  placeholder='Coloca tu segunda cc' >
										<button>Extrapolar</button>
										</form>";}

											#--------------------------------------
											#METODO N.DIGITOS
											#-------------------------------------- 
											elseif(isset($_POST['digitos'])){
												echo "
												<form method='post' action='digitos.php'>    
												<h3>Para saber cuantos digitos tiene tu CC escribela y da clic en Comprobar.</h3>
												<input type='text' name='digitos'   placeholder='Coloca tu cc' >
												<button>Comprobar</button>
												</form>";};


		
	?>
</div>	
</body>
</html>



