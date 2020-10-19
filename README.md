# Desafio Uotz

## Objetivo

Criar um CRUD para uma plataforma de seleção de vagas de emprego, que inclua criar, editar e deletar vagas apenas quando o usuário estiver logado.

## Como configurar o ambiente

Para rodar essa aplicação é necessário que o que ambiente possua:

- PHP >= 7.3
- composer e npm instalados

### Como atualizar o PHP para versão 7.4

Roda esses comandos no terminal, na seguinte ordem:

```
$ sudo apt-get update
$ sudo apt -y install software-properties-common
$ sudo add-apt-repository ppa:ondrej/php
$ sudo apt-get update
$ sudo apt -y install php7.4
```

Você pode checar a versão instalada com o seguinte comando `php -v`, e então instalar os demais pacotes adicionais, por exemplo:

```
$ sudo apt-get install -y php7.4-{bcmath,bz2,intl,gd,mbstring,mysql,zip}
```

Caso ao checar a versão do PHP ele ainda estiver em sua versão antiga, você pode atualizar manualmente utilizando o seguinte comando:

```
$ sudo update-alternatives --set php /usr/bin/php7.4
```

### Instalação do Composer

Basta seguir o guia de instalação do Composer em sua [documentação](https://getcomposer.org/download/).

### Instalaçao do Npm

```
$ sudo apt update
$ sudo apt install nodejs
$ sudo apt install npm
```

Você pode checar se o npm foi instalado corretamente com o comando `npm -v`


## Get Starter (Começando)

Para rodar este projeto localmente:

- Clone este repositório e entre no projeto

```
git clone https://github.com/Krsnananda/uotz.git
cd uotz
```

- Instale as dependências

```
composer install
npm install
```

- Crie e configure o arquivo .env

```
cp .env.example .env
```
_**Obs:** Insira os dados referentes ao seu banco de dados no arquivo .env, após isso gere a chave_

```
php artisan key:generate
```

- Execute as migrations (tabelas e seeders)

```
php artisan migrate
php artisan db:seed
```
- Crie o servidor

```
php artisan serve
```

- Acesse o projeto

```
http://localhost:8080
```
