# laravel-simple-crud
Uma aplicação simples de CRUD de usuários para testes do framework Laravel.

Infraestrutura disponibilizada por [@aschmelyun](https://github.com/aschmelyun/docker-compose-laravel)

## Funcionalidades
- Cadastrar, visualizar, editar e deletar usuários (nome e e-mail).
- Uso do Docker para facilitar a infraestrutura do projeto.
- Desenvolvido no ambiente Linux do WSL 2.

## Uso

- Clonar o repo em uma pasta desejada.
- Executar `docker-compose up -d --build` na raíz do projeto.
- Configurar o arquivo .env de acordo.
- Executar `docker-compose run --rm composer install`
- Executar `docker-compose run --rm artisan key:generate`
- Executar `docker-compose run --rm artisan migrate`
