
![Fox-Web-Application-Firewall](https://images.vexels.com/media/users/3/151733/isolated/preview/456d96033f3c3783bd1ea0c549969784-fox-bonito-dos-desenhos-animados-by-vexels.png)

![version](https://img.shields.io/badge/version-2.0-purple.svg?longCache=true&style=flat-square)
![license](https://img.shields.io/badge/license-MIT-green.svg?longCache=true&style=flat-square)
![issues](https://img.shields.io/github/issues/jvinicius-net/Fox-Web-Application-Firewall.svg?longCache=true&style=flat-square)
![contributors](https://img.shields.io/github/contributors/jvinicius-net/Fox-Web-Application-Firewall.svg?longCache=true&style=flat-square)


# Instalação

1. Faça o download dos arquivos.
2. Extraia o pacote e copie para seu webserver.
3. Insira as linhas de codigo abaixo em seu website:

require('waf.class.php');
$x = new WAF();
$x->start();

4. Configure o bando de dados no arquivo waf.class.php
5. Pronto, seu website esta protegido

# Algumas alterações que podem ser feitas:

1. Caso você use o Cloudflare, você tera que adicionar a linha na função start:
	- @$this->useCloudflare();

2. Caso você use o Blazingfast, você tera que adicionar a linha na função start:
	- @$this-useBlazingfast();

3. Caso você use o DDoSGuard, você tera que adicionar a linha na função start:
	- @$this-useDDoSGuard();



# Requerimentos
* PHP >= 5.6.0
* MySQL

# Agradecimentos:
| [<img src="https://avatars.githubusercontent.com/cristlxrd?s=115"><br><sub>Cristian</sub>](https://github.com/cristlxrd) | 
| [<img src="https://avatars.githubusercontent.com/Alemalakra?s=115"><br><sub>Alemalakra</sub>](https://github.com/Alemalakra) | 

