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

	    <section class="serv_sessao1">
	    	<div class="container">
	    		<div class="container-serv">
	    			<div class="img"><img src="img/servicos/nfe.png"></div>
	    			<div class="text">
	    				<h2>NOTA FISCAL ELETRÓNICA (NFE)</h2>
	    				<p>- Sistema de NFe próprio, sem custos adicionais e sem necessidade de software ou componentes de terceiros;</p>
	    				<p>- Emissão de NFe adequada a legislação vigente;</p>
	    				<p>- Geração de nota de compra através da importação do xml ou pela leitura chave da nfe constante no DANFE, com isto o sistema faz o cadastro automático de produtos, fornecedores e o preenchimento completo da nota de entrada;</p>
	    			</div>
	    			<div class="clear"></div>
	    		</div>
	    		<div class="container-serv">
	                <div class="img"><img src="img/servicos/cte.png"></div>
	                <div class="text">
	                    <h2>CONHECIMENTO DE TRANSPORTE ELETRÓNICO (CTE)</h2>
	                    <p>- Sistema de CTe próprio, simplificado e de fácil utilização para comércios que possuem seu próprio caminhão para transporte direto para o destinatário;</p>
	                </div>
	                <div class="clear"></div>
	            </div>
	            <div class="container-serv">
	                <div class="img"><img src="img/servicos/boleto.png"></div>
	                <div class="text">
	                    <h2>GERAÇÃO DE BOLETOS</h2>
	                    <p>- Sistema gera boletos de carteiras sem registro, para os bancos;</p>
	                    <p>- Geração Boleto em formato de carnê;</p>
	                    <p>- Geração de carnês e duplicatas;</p>
	                </div>
	                <div class="clear"></div>
	            </div>
	            <div class="container-serv">
	                <div class="img"><img src="img/servicos/visor.png"></div>
	                <div class="text">
	                    <h2>VISOR</h2>
	                    <p>Acompanhe sua empresa em tempo real através de gráficos e relatórios gerados conforme a movimentação em tempo real, atualizada a cada minuto;</p>
	                </div>
	                <div class="clear"></div>
	            </div>
	            <div class="container-serv">
	                <div class="img"><img src="img/servicos/relatorios.png"></div>
	                <div class="text">
	                    <h2>RELATÓRIOS</h2>
	                    <p>- Crie lista de dados através de filtros ou pesquisas, selecione os campos e faça geração da lista em html, txt ou pdf com esta opção são inúmeras as possibilidades de relatórios a serem gerados;</p>
	                    <p>- Para relatórios mais detalhados ou que envolvam cálculos complexos possuímos mais de 150 relatórios que podem ser gerados em PDF, visualizados em tela ou impressos;</p>
	                </div>
	                <div class="clear"></div>
	            </div>
	            <div class="container-serv">
	                <div class="img"><img src="img/servicos/etiquetas.png"></div>
	                <div class="text">
	                    <h2>GERAÇÃO DE ETIQUETAS</h2>
	                    <p>- Gere etiquetas para impressoras Matriciais, Jato de tinta, Laser, impressoras de Gôndola; Etiquetas para Estoque, clientes, fornecedores e Ordem de Serviço;</p>
	                    <p>- Configuração individual por campo: Opção de cores, rotação, estilos de fonte, posição em linha e coluna em milímetros;</p>
	                    <p>- Configure campos ilimitados (*até que tenha espaço na etiqueta);</p>
	                    <p>- Exportação e importação de configurações, facilita o cadastro no caso de clientes que usam o mesmo modelo de etiqueta;</p>
	                </div>
	                <div class="clear"></div>
	            </div>
	            <div class="container-serv">
	                <div class="img"><img src="img/servicos/backup.png"></div>
	                <div class="text">
	                    <h2>BACKUP</h2>
	                    <p>- Backup agendado iniciado com Windows independente do sistema aberto;</p>
	                    <p>- Possibilidade de configuração dos arquivos que fazem parte do backup;</p>
	                    <p>- Restauração modo completo ou dos arquivos selecionados;</p>
	                </div>
	                <div class="clear"></div>
	            </div>
	            <div class="container-serv">
	                <div class="img"><img src="img/servicos/arquivos.png"></div>
	                <div class="text">
	                    <h2>ARQUIVOS FISCAIS</h2>
	                    <p>- Geração de Sintegra;</p>
	                    <p>- Geração de SPED FISCAL;</p>
	                    <p>- Geração de SPED Contribuições (Pis/Cofins) para lucro presumido;</p>
	                </div>
	                <div class="clear"></div>
	            </div>
	            <div class="container-serv">
	                <div class="img"><img src="img/servicos/nfce.png"></div>
	                <div class="text">
	                    <h2>NOTA FISCAL DO CONSUMIDOR ELETRÔNICA</h2>
	                    <p>- O projeto da Nota Fiscal de Consumidor eletrônica surgiu em âmbito nacional, tendo como objetivo implantar um modelo de documento fiscal único em todo o pais e substituir as emissões de papéis, sem perder a validade jurídica;</p>
	                    <p>- VANTAGENS PARA A EMPRESA;</p>
	                    <p>- Envio online e em tempo real do cupom fiscal para a Secretaria da Fazenda;</p>
	                    <p>- Mais agilidade e segurança no registro de Emissor de Cupom Fiscal;</p>
	                    <p>- Diminuição dos gastos com papel;</p>
	                    <p>- Economia na compra de impressoras e softwares de emissão de cupom fiscal (atualmente estes gastos podem chegar até R$4 mil);</p>
	                    </p>
	                </div>
	                <div class="clear"></div>
	            </div>
	            <div class="container-serv">
	                <div class="img"><img src="img/servicos/nfse.png"></div>
	                <div class="text">
	                    <h2>NOTA FISCAL DE SERVIÇO ELETRONICA</h2>
	                    <p>- É um documento de existência digital, gerado e armazenado eletronicamente em ambiente de TI Nacional pela Receita Federal, pela prefeitura, por outra entidade e/ou órgão público conveniado, para documentar as operações de prestação de serviços;</p>
	                    <p>- Ao contratar um serviço, é preciso solicitar a emissão da Nota Fiscal de Serviços Eletrônica (NFS-e);</p>
	                    <p>- Informe sempre para o prestador de serviços o seu CPF ou o seu CNPJ, sendo está a sua garantia para obter os benefícios da NFS-e;</p>
	                </div>
	                <div class="clear"></div>
	            </div>
	            <div class="container-serv">
	                <div class="img"><img src="img/servicos/aplicativos.png"></div>
	                <div class="text">
	                    <h2>APLICATIVOS</h2>
	                    <p>- Aplicativos produzidos exclusivamente para atender as demandas específicas ou gerais de qualquer tipo de cliente;</p>
	                    <p>- Dados Armazenados na Nuvem;</p>
	                </div>
	                <div class="clear"></div>
	            </div>
	    	</div>
	    </section>

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