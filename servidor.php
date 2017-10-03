<?php 

	$menu = [
		['titulo'=>'Home', 'link'=>"#home"],
		['titulo'=>'Sobre', 'link'=>"#sobre"],
		['titulo'=>'Contato', 'link'=>"#contato"],
		['titulo'=>'Mapa', 'link'=>"#mapa"],
	];

	$dados = [

		['titulo'=>"Noticia 1", 'descricao'=>"Descricao cartão 1", 'detalhe'=>"Texto detalhe do cartão1", 'imagem'=> "https://tinyurl.com/htp4jn2", 'link'=>"#"],
		['titulo'=>"Cartao 2", 'descricao'=>"Descricao cartão 2", 'detalhe'=>"Texto detalhe do cartão2", 'imagem'=> "https://tinyurl.com/htp4jn2", 'link'=>"#"],
		['titulo'=>"Cartao 3", 'descricao'=>"Descricao cartão 3", 'detalhe'=>"Texto detalhe do cartão3", 'imagem'=> "https://tinyurl.com/htp4jn2", 'link'=>"#"],
		['titulo'=>"Cartao 4", 'descricao'=>"Descricao cartão 4", 'detalhe'=>"Texto detalhe do cartão4", 'imagem'=> "https://tinyurl.com/htp4jn2", 'link'=>"#"],
		['titulo'=>"Cartao 5", 'descricao'=>"Descricao cartão 5", 'detalhe'=>"Texto detalhe do cartão5", 'imagem'=> "https://tinyurl.com/htp4jn2", 'link'=>"#"],
		['titulo'=>"Cartao 6", 'descricao'=>"Descricao cartão 6", 'detalhe'=>"Texto detalhe do cartão6", 'imagem'=> "https://tinyurl.com/htp4jn2", 'link'=>"#"],
		['titulo'=>"Cartao 7", 'descricao'=>"Descricao cartão 7", 'detalhe'=>"Texto detalhe do cartão7", 'imagem'=> "https://tinyurl.com/htp4jn2", 'link'=>"#"],
		['titulo'=>"Cartao 8", 'descricao'=>"Descricao cartão 8", 'detalhe'=>"Texto detalhe do cartão8", 'imagem'=> "https://tinyurl.com/htp4jn2", 'link'=>"#"]

	];

	if(isset($_GET['menu'])){
		echo json_encode($menu); exit;
	}

	if(isset($_GET['dados'])){
		echo json_encode($dados); exit;
	}


?>