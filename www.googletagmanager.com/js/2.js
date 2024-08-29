setcookie('paginaAtual','inicio');

function pedirAgora(){
	console.log($('#caminhoAtual').text());
	loading();
	window.setTimeout(function(){
		window.location.href = $('#caminhoAtual').text()+'/finalizar';
		},1000);
	return;
	}
jQuery(document).ready(function($){	
	
});
