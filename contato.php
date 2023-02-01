<!DOCTYPE php>
<html>
	<head>
		<title>AguiaSoft</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <meta name="description" content="Empresa de Softwares em Coronel Vivida e região">
        <meta name="keywords" content="" />
        <meta name="author" content="AguiaSoft" />
        <meta charset="utf-8" />

        <script src="https://use.fontawesome.com/95a054f061.js"></script>
	</head>
	<body>
	    <header id="menu" class="header">
	    	<div class="container">
	    		<div>
	    			<a href="index.php">
	        			<div class="logo"></div><!--logo-->
	        		</a>
	        	</div>
	            <nav class="desktop-menu">
	            	<ul>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="servicos.php">Serviços</a></li>
                        <li><a href="index.php">Home</a></li>
	                </ul>
	            </nav>
	            <nav class="mobile-menu">
	            	<ul>
	                	<li><a href="index.php"><div>Home</div></a></li>
	                    <li><a href="servicos.php"><div>Serviços</div></a></li>
	                    <li><a href="contato.php"><div>Contato</div></a></li>
	                </ul>
	            </nav>
	        <div class="clear"></div><!--clear-->
	        </div><!--container-->
	    </header>

        <section class="container-banner">
            <div class="container">
                <div class="container-list">
                    <ul>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=554632323889" class="whatsapp">
                                <div class="img"></div>
                                <div class="text">Contato via WhatsApp</div>
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li>
                            <a href="https://t.me/Cesar_AguiaSoft" class="telegram">
                                <div class="img"></div>
                                <div class="text">Contato via Telegram</div>
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li>
                            <div class="img telefone"></div>
                            <div class="text"><span>(46)3232-3889</span></div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <div class="img email"></div>
                            <div class="text"><span>aguiasoft@hotmail.com</span></div>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div><!--container-list-->

                <div class="form">
                    <h2>Preencha o formulário</h2>
                    <form action="contato.php" name="form_contato" method="post">
                        <div class="input-container">
                            <span>Nome:*</span>
                            <input type="text" name="nome" required />
                        </div><!--imput-container-->
                        
                        <div class="input-container">
                            <span>E-mail:*</span>
                            <input type="text" name="email" required />
                        </div><!--imput-container-->
                        
                        <div class="input-container emailBoot">
                            <span>E-mail:*</span>
                            <input type="text" name="emailBoot" />
                        </div><!--imput-container-->

                        <div class="input-container">
                            <span>Telefone:*</span>
                            <input type="text" name="telefone" required />
                        </div><!--imput-container-->

                        <div class="input-container">
                            <span>Mensagem:*</span>
                            <textarea name="mensagem" placeholder="Mensagem*" required></textarea>
                        </div><!--imput-container-->

                        <p class="warning">*Campos obrigatórios</p>
                        <div class="input-submit-container">
                            <input type="submit" name="btnEnviar" value="Enviar">
                        </div><!--imput-submit-container-->
                    </form>
                </div><!--div form-->
                <div class="clear"></div>
            </div><!--div center-->
        </section><!--div container-banner-->

        <footer>
            <div class="contairner">
                <div class="part1">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
                <div class="part2">
                    <p>©Copyright - AguiaSoft</p>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="js/menu.js"></script>
	</body>
</html>