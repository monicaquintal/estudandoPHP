<div align="center">
<h2>Estudando PHP 🐘</h2>
<h3>Seção 11: PHP</h3>
<p>Curso Desenvolvimento Web Completo 2022.</p>
</div>

<div align="justify">

## Introdução ao PHP
<a href="#aula01">O que é PHP?</a><br>
<a href="#aula02">Embutindo blocos PHP em páginas HTML</a><br>
<a href="#aula03">Habilitando e testando tags curtas (short_open_tag)</a><br>
<a href="#aula04">Saída de dados com echo() e print()</a><br>

<hr>

<div id="aula01" align="center">
<h2>Aula 01: O que é PHP?</h2>
</div>

PHP = "Hypertext Preprocessor"; seu uso é livre.

É uma linguagem de programação focada na criação de aplicações do lado do servidor.

Pode ser utilizado:
- diretamente na linha de comando (scripts de linha e comando, que podem ser executados diretamente pelo shell do SO);
- aplicações desktop (PHP - GTK);
- aplicações server-side (scripts).

É uma linguagem de programação interpretada e não compilada; ou seja, os scripts da aplicação não serão submetidos a uma compilação prrévia a fim de gerar um executável; serão interpretados em tempo de requisição das páginas.

É compatível com diversos SOs, e acrita tanto paradigma estrutural quanto orientado a objeto.

Tem suporte a diversos BDs, e tem vasto suporte a diversos protocolos de comunicação.


<hr>

<div id="aula02" align="center">
<h2>Aula 02: Embutindo blocos PHP em páginas HTML</h2>
</div>

Formas de inclusão do PHP em arquivos HTML:

NOME | TAG | STATUS
:---------:|:-----------:|:-------:
Tag padrão | &lt;?php código aqui ?&gt; | Habilitada
Tag de impressão | &lt;?= php código aqui ?&gt; | Habilitada
Tag curta | &lt;? código aqui ?&gt; | Desabilitada
*Asp tag | &lt;% código aqui %&gt; | Descontinuada na versão 7


<hr>

<div id="aula03" align="center">
<h2>Aula 03: Habilitando e testando tags curtas (short_open_tag)</h2>
</div>

A tag curta não está mais disponível na versão 8 do PHP! Utilizar a tag padrão:

~~~php
<?php código aqui ?>
~~~

<hr>

<div id="aula04" align="center">
<h2>Aula 04: Saída de dados com echo() e print()</h2>
</div>