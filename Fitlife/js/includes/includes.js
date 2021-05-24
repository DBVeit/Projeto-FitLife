includes.js
/*
A pasta includes, dentro da pasta js, possui arquivos responsaveis por fazerem a funcao de 
carregamento dos componentes da pasta html para a pasta pages.
Ex:
	- Cria-se um arquivo php na pasta pages, que sera uma pagina. Para melhor organizacao ou, caso 
	outras paginas utilizem os mesmos componentes, por exemplo, barra de menu, copyright, criamos os 
	componentes em arquivos .html na pasta html.
	- Nesta pasta de includes, carregamos os arquivos de componentes usando a funcao load do jquery, 
	atribuidos para um id javascript.
	- Na pasta pages, no head da pagina, adicionamos o arquivo de include via tag script, além de 
	criar div's ao longo da pagina com o id relativo ao componente html que desejamos.
*/