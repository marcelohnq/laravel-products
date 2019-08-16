## Sobre o projeto

Sistema para cadastro de histórico de preço de produtos. Nele o usuário será possível armazenar o preço de produtos que compra com frequência, podendo realizar comparações de loja, características, preço maior/menor, entre outras.

Projeto desenvolvimento para estudo do framework Laravel e do Docker.

## Configuração

Fornecido Docker Compose com a seguinte configuração:

- Laravel: [5.8.31](https://github.com/laravel/laravel);
- PostgreSQL: 11.4
- Nginx
- Bootstrap 4
- Jquery
- Multilinguagem

Também foram incluídos arquivos para configurar o PHP e o Nginx, que irão ser mapeados para os respectivos containers.

PHP:

```bash
laravel-products/php/local.ini
```

Nginx:

```bash
laravel-products/nginx/conf.d/app.conf
```

## Requisitos

Necessário a instalação do composer dentro do projeto.

## Get Started

Após realizar o clone do repositório e iniciar o Docker, acesse a pasta do projeto e execute o seguinte comando:

```bash
$ docker-compose up -d
```

Após a iniciação de todos os containers será possível acessar o projeto pelo endereço [http://localhost/](http://localhost/).

