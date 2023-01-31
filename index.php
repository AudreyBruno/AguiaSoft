<?php
    if (isset($_POST['btnEnviar']) && $_POST['emailBoot'] === '') {
        //Variáveis
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];

        //Compo E-mail
        $arquivo = "
            <style type='text/css'>
                body{
                    margin:0px;
                    font-family:Verdane;
                    font-size:12px;
                    color: #000;
                }
            </style>
            <html>
                <table cellpadding='1' cellspacing='1' bgcolor='#fff'>
                    <tr>
                        <td>
                            <tr>
                                <td width='500'>Nome:$nome</td>
                            </tr>
                            <tr>
                                <td width='320'>E-mail:<b>$email</b></td>
                            </tr>
                            <tr>
                                <td width='320'>Telefone:$telefone</td>
                            </tr>
                            <tr>
                                <td width='320'>Mensagem:$mensagem</td>
                            </tr>
                        </td>
                    </tr>
                </table>
            </html>
        ";

        //enviar

        // emails para quem será enviado o formulário
        $emailenviar = "audreysiqueiracvv@gmail.com";
        $destino = $emailenviar;
        $assunto = "Contato pelo Site";

        // É necessário indicar que o formato do e-mail é html
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: $nome <$email>';
        //$headers .= "Bcc: $EmailPadrao\r\n";

        $enviaremail = mail($destino, $assunto, $arquivo, $headers);
        if($enviaremail){
            $mgm = "E-MAIL ENVIADO COM SUCESSO!";
            //echo $mgm;
        } else {
            $mgm = "ERRO AO ENVIAR E-MAIL!";
            //echo $mgm;
        }
    }
?>
<!DOCTYPE php>
<html>
	<head>
		<title>AguiaSoft</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <meta name="description" content="Empresa de Softwares em Coronel Vivida e região">
        <meta name="keywords" content="" />
        <meta name="author" content="AguiaSoft" />
        <meta charset="utf-8" />
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

	    <section class="sessao1">
	    	<div class="container">
	    		<div class="part1">
	    			<h2>Softwares com qualidade e inovação</h2>
	    			<p>Atendimento e agilidade na gerência de: Supermercados, Comércios, Distribuidoras, Industrias.</p>
	    		</div>
	    		<div class="part2"></div>
	    		<div class="clear"></div>
	    	</div>
		</section>

		<section class="sessao2">
			<div class="container">
				<div>
					<h2>Desenvolvido de pessoas para pessoas</h2>
					<p>O software é uma solução para automação de tarefas e processos que agiliza os setores operacionais e gerencias integrando compra, venda, faturamento, gerenciamento de estoque e controle financeiro oferecendo mais segurança e informações para seu dia a dia, sendo assim mais controle em todos os processos de sua empresa, proporcionando um crescimento planejado através do monitoramento adequado.</p>
				</div>
			</div>
		</section>

		<section class="sessao3">
			<div class="container">
				<div class="part1">
					<h2>Conquistas do Grupo</h2>
					<img src="img/logo-visual-software.png">
				</div>
				<div class="part2">
					<div class="conquistas">
						<h2>2836</h2>
						<p>Clientes</p>
					</div>
					<div class="conquistas">
						<h2>83</h2>
						<p>Colaboradores</p>
					</div>
					<div class="conquistas">
						<h2>15100</h2>
						<p>Usuários</p>
					</div>
					<div class="conquistas">
						<h2>80</h2>
						<p>Representantes</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</section>

		<section class="sessao4">
			<div class="container">
				<div class="texto-sessao4">
					<h2>NOSSAS SOLUÇÕES</h2>
					<ul>
						<li>SUPERMERCADOS</li>
						<li>DISTRIBUIDORAS</li>
						<li>COMERCIOS</li>
						<li>ÓTICAS</li>
						<li>MATERIAIS DE CONTRUÇÃO</li>
						<li>CALÇADOS E CONFECÇÕES</li>
					</ul>
					<div class="clear"></div>
					<div class="btn1-texto"><a href="contato.php">Entre em contato</a></div>
				</div><!--texto-sessao4-->
				<div class="device-sessao4"></div><!--device-->
				<div class="clear"></div>
			</div><!--container-->
		</section><!--sessao4-->

		<section class="sessao5">
			<div class="container">
				<div class="form">
					<h2>Entre em contato</h2>
					<form action="index.php" name="form_contato" method="post">
						<input type="text" name="nome" placeholder="Nome*" required>
						<input type="text" name="email" placeholder="E-mail*" required>
						<input class="emailBoot" type="text" name="emailBoot" placeholder="E-mail*">
						<input type="text" name="telefone" placeholder="Telefone*" required>
						<textarea name="mensagem" placeholder="Mensagem*" required></textarea>
						<div class="clear"></div>
						<div><input type="submit" name="btnEnviar" value="Enviar"></div>
					</form>
				</div><!--form-->
				<div class="map-wraper">
					<h2>Faça uma visita</h2>
					<div class="map-wraper3">
						<div class="map-wraper2">
							<div class="map" id='gmap_canvas'>
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7173.217375104542!2d-52.557528!3d-25.980871000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eff98bc683c54b%3A0x71522ad6e1ee5d37!2sR.%20da%20Liberdade%2C%20846%20-%20Cel.%20Vivida%2C%20PR%2C%2085550-000!5e0!3m2!1spt-BR!2sbr!4v1634556519258!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div><!--map-wraper2-->
					</div><!--map-wraper-3-->
				</div><!--map-wraper-->
				<div class="clear"></div>
			</div><!--container-->
		</section><!--sessao5-->

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