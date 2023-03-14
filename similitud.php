<html>
<head>
    <link rel='stylesheet' href='style3.css'>	
    <title>Metodo Similitud</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="LOGO2.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script data-ad-client="ca-pub-8025537612057421" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    
    <div class="codigo">
        <div class="titulo">
            <h1>CREDIT CARD EXTRAPOLATOR WEB</h1>
            <img src="LOGO2.png" alt="logo de cce">
        </div>
            <?php 
                $cc = (int)$_POST['cc_similitud'] ; 
                $cc2 = (int)$_POST['cc_similitud2'] ; 
                $cc_bin = substr($cc, 0, 6);
                $cc_m1 = substr($cc, 6, 16);
                $cc_m2 = substr($cc2, 6, 16);

                for($i=0;$i<strlen($cc_m1);$i++){
                    if ($cc_m1[$i] == $cc_m2[$i]){
                        $cc_bin .= $cc_m1[$i];}
                    else {
                        $cc_bin .= "x";}}; ?>

        <div class="respuesta">
            <h1>Tu CC extrapolada con el metodo Similitud es:  </br><spam> <?php echo $cc_bin?> </spam></h1>
        </div> 

         <div class="publicidad">
            <script type="text/javascript">
                atOptions = {
                    'key' : '1796c08b3e98222de2a6a0e935b9f260',
                    'format' : 'iframe',
                    'height' : 90,
                    'width' : 728,
                    'params' : {}
                };
                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentprofit.com/1796c08b3e98222de2a6a0e935b9f260/invoke.js"></scr' + 'ipt>');
            </script>
         </div>

        <div class="respuesta">
            <h1>Tu CC sin extrapolar es: </br> <spam><?php echo $cc?> </spam></h1>    
        </div>
        <div class="informacion">
            <h2>Mas información sobre </br> los metodos <a target="_blank" href="https://credit-card-extrapolator.github.io/CCE/metodos.html">aquí</a></h2>    
        </div>
        <div class="botones">
            <div class="form">
                <a  href = "../index.php">Inicio</a>                
              </div>
            <div class="form">
                <a  target='_blank' href ="https://namso-gen.com/">Ir a namso</a>                
              </div>  

            
    </div>


</body>
</html>
