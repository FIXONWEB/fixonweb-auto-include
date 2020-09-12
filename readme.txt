=== fixonweb-auto-include ===
Contributors: (fixonweb)
Donate link: https://example.com/
Tags: comments, spam
Requires at least: 4.5
Tested up to: 5.5
Requires PHP: 5.6
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Carrega os arquivos .php postados no diretorio add-in.

== Description ==


== Installation ==

Instalar normalmente a partir do arquivo zipado baixado do github.


== Frequently Asked Questions ==

= Na prática, pra que serve mesmo esse plugin =

No dia-a-dia, prestando serviços de ajustes e implementação de sites wordpress, as vezes, acabamos por ter que desenvolver um monte de plugins sendo que cada um com um objetivo especifico seja de ajuste de layout ou adição de algum recurso tais como um cadastro ou emissão de relatorio. Usando esse plugin, basta adicionar cada arquivo .php na pasta add-in e assim teremos a facilitade de inserir cada recurso em arquivos diferente sem ter que estar criando cada plugin pra cada necessidade.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 0.1.0 =
* Configurações basicas do plugin
* Testes e liberação do plugin.

= 0.1.1 =
* Adicionado a pasta "add-in-mu" para o modo multi-site onde cada subpasta "casa" com a url do sub-site. Sendo assim, podemos adicionar um ou mais recurso em um sub-site sem que o mesmo recurso esteja presente nos demais sites da rede wp.

== Upgrade Notice ==

= 0.1.0 =
Sem avisos de atualização no momento


== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](https://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: https://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`
