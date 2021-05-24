# EstruturaPadraoPHP
Estrutura de pastas e arquivos de forma padronizada para projetos em PHP

A estruturação de pastas deste arquivo não requer versões específicas do PHP, Apache ou MySQL.

Esta estrutura de projeto foi criada por DAVI BERINGER VEIT, com a intenção de ser uma facilitador na montagem de projetos WEB utilizando PHP, MYSQL, HTML, CSS e JAVASCRIPT.
Para a utilização, realizar o download zipado do projeto e extrair o arquivo para a pasta do servidor (htdocs, www, etc).
Pode-se criar novas pastas e sub pastas durante a utilização. Este projeto apenas monta uma estrutura básica.

# Conteudo do projeto

## Arquivo inicial index.php
O arquivo index.php é o arquivo principal da maioria das aplicações web. Já está incluido neste projeto, permitindo ser modificado. O arquivo deve ficar fora da hierarquia de pastas, podendo conter funções ou sendo apenas uma página inicial do sistema, como uma tela de login, por exemplo. O conteúdo varia e depende da idealização do projeto final.

## Pasta css
A pasta css é responsável por armazenar arquivos de estilização das páginas do sistema, sejam arquivos criados pelo próprio desenvolvedor ou de bibliotecas e frameworks CSS.

## Pasta html
A pasta armazena componentes para as páginas do sistema, como menus, botões, textos padrões, copyright, etc. Deve-se criar os componentes e salvá-los em arquivo .html. Os componentes devem ser definidos em um arquivo na pasta js/includes, em um arquivo javascript, através da função load do jquery, por exemplo: cria-se um componente "menu.html"; na pasta includes, cria-se um arquivo "pagina_includes.js"; para carregar o arquivo menu.html no arquivo include, deve-se definir um id para o componente, no caso pode-se chamar "menu"; desta forma, usando jquery, o código que chamará o arquivo menu.html ficará: "('#menu').load('../../html/menu.html');". Na página onde deseja-se carregar o componente menu, deve-se usar a tag script para importar o arquivo pagina_includes.js e adicionar uma div na posição desejada que o menu deve ficar, definindo a id da div como "menu". o código ficará o seguinte: "<div id='menu'></div>". Desta forma, todo conteúdo criado no componente menu.html será carregado na página, através do arquivo de include.
Esta é uma solução pensada na diminuição de linhas e organização final do código das páginas, porém pode ser feito da maneira mais desejada. Fica apenas como uma sugestão o carregamento de componentes.

## Pasta images
A pasta fica responsável por armazenar todas as imagens que serão usadas no projeto, desde imagens de background como icones de favorito (favicon).

## Pasta js
A pasta js é responsável por guardar arquivos javascript de funções, componentes, entre outros arquivos do tipo.
### Sub Pasta includes
A sub pasta includes, dentro de js, é responsável apenas por armazenar arquivos de carregamento de componentes para serem utilizados nas páginas do sistema, como citado anteriormente na Pasta html. Lembrando que a utilização desta pasta e deste formato de carregamento de componentes é totalmente facultativo.

## Pasta jquery
É responsável por armazenar unicamente o arquivo jquery.js, que já está importado ao projeto, pronto para a utilização, na versão 3.5.1. O uso deste arquivo é também facultativo, porém é necessário se deseja-se seguir o padrão utilizando carregamento de componentes.

  * jQuery JavaScript Library v3.5.1
  * Copyright JS Foundation and other contributors
  * Released under the MIT license
  * https://jquery.org/license
  
## Pasta pages
A pasta é responsável por armazenar arquivos php que serão as páginas do sistema. Pode-se também criar sub pastas dentro desta, caso desejado.

## Pasta php
A pasta é repsonsável por armazenar o arquivo de conexão com banco de dados, além de sub pastas. O arquivo de conexão já está presente no projeto, bastando apenas ao desenvolvedor realizar a configuração com seu banco de dados. Sub pastas desta podem armazenar arquivos de funções, que também já é incluída para funções básicas.
### Sub Pasta functions
A sub pasta functions armazena arquivos de funções php, como inserção de dados ao banco, funções de login, etc.
### Sub pasta components
A sub pasta components armazena componentes de páginas que necessitam de condições, funções ou includes PHP.

## Pasta sql
A pasta sql, por fim, armazena arquivos de backup do banco de dados do projeto ou estrutura do banco, tabelas, etc. Para o projeto, não há necessidade de se ter os arquivos sql da aplicação salvos na pasta do projeto, mas é uma opção viável caso deseje-se enviar a estrutura do banco de dados ou realizar um backup dos registros para o GitHub, entre outros.
