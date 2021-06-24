<?php
	header("Content-type: text/html; charset=UTF-8");
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
    
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    
    <title>ControlePay</title>
    
    <link type="image/x-icon" rel="shortcut icon" href="images/favicon.png?time=<?php echo time(); ?>">
    <link type="image/x-icon" rel="icon" href="images/favicon.png?time=<?php echo time(); ?>">
    
	<!-- GoogleFont -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&amp;display=swap">
	
	<!-- FontIcon -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="styles/painel.css?time=<?php echo time(); ?>">
	
</head>
<body>
	
    <?php require "topo.php"; ?>
	
    <section class="corpo">
        <div class="container">
			
			<div class="grid-3">
				
			<?php require "lateral.php"; ?>	
				
			</div>
			
            <div class="grid-9">
				
            <?php

            	if( (isset($_REQUEST['modulo'])) && (isset($_REQUEST['file'])) ) {

            		if( ($_REQUEST['modulo'] == "cobranca") && ($_REQUEST['file'] == "form") )
            		{
            			require "modulos/cobranca/form.php";
            		}
            		elseif ( ($_REQUEST['modulo'] == "cobranca") && ($_REQUEST['file'] == "list") )
            		{
            			require "modulos/cobranca/list.php";
            		}
            		else 
            		{
            			echo "M�dulo n�o encontrado";
            		}
            	}
            	else 
            	{
            		echo "Seja Bem-Vindo(a)";
            	}

            ?>
				
            </div>
			
        </div>
    </section>
	
	<script src="scripts/tinytable.js"></script>
	<script>
		var sorter = new TINY.table.sorter('sorter','table',{
			headclass:'head',
			ascclass:'asc',
			descclass:'desc',
			evenclass:'evenrow',
			oddclass:'oddrow',
			evenselclass:'evenselected',
			oddselclass:'oddselected',
			paginate:true,
			size:100,
			colddid:'columns',
			currentid:'currentpage',
			totalid:'totalpages',
			startingrecid:'startrecord',
			endingrecid:'endrecord',
			totalrecid:'totalrecords',
			hoverid:'selectedrow',
			pageddid:'pagedropdown',
			navid:'tablenav',
			//sortcolumn:0,
			sortdir:1,
			//sum:[8],
			//avg:[6,7,8,9],
			columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
			init:true
		});
	</script>
	
</body>
</html>