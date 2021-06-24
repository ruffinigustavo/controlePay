<?php
	header("Content-type: text/html; charset=iso-8859-1");
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pr-br"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="pr-br"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="pr-br"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->
<head>
    
    <!--<base href="">-->
    
    <meta charset="iso-8859-1">
    <meta name="robots" content="noindex, nofollow">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    
    <title>Login</title>
    
    <link type="image/x-icon" rel="shortcut icon" href="images/favicon.png?time=<?php echo time(); ?>">
    <link type="image/x-icon" rel="icon" href="images/favicon.png?time=<?php echo time(); ?>">
    
	<!-- GoogleFont -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&amp;display=swap">
	
	<!-- FontIcon -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="styles/login.css?time=<?php echo time(); ?>">
	
</head>
<body>
    
    <header class="topo">
		<div class="container">

			<div class="grid-12">
				<a href="../"><img src="images/logotipo.png?time=<?php echo time(); ?>" width="200" border="0" alt="" title="" /></a>
			</div>

		</div>
	</header>
    
    <section class="login">
		
        <div class="container">
            <h2><i class="far fa-user"></i> Login</h2>
        </div>
        
        <div class="container">
            <form action="/login/" method="post">
                
                <div class="grid-12">
                    <label>* E-mail</label>
                    <input type="email" name="form[email]" value="" placeholder="Ex: joaosilva@gmail.com" />
                </div>
                
                <div class="grid-12">
                    <label>* Senha</label>
                    <input type="password" name="form[senha]" value="" placeholder="Senha de acesso" />
                </div>
                
                <div class="grid-12">
                    <input type="submit" name="submit" value="ENTRAR" />
                </div>
                
            </form>
			
			<div class="grid-12">
				<center>
					<a href="#"><i class="far fa-envelope-open"></i> acessar webmail</a><br>
					<a href="#"><i class="fas fa-link"></i> voltar para o site</a>
				</center>
				
			</div>
			
			
        </div>
        
    </section>
	
</body>
</html>