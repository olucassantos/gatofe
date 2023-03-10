# Criação de projeto e CRUD básico no Laravel 9

## Passos

- Criação do Projeto
- Criação do Modelo
- Criação do Banco de Dados
- Criação da Migration
- Criação do Controller
- Criação das Rotas
- Criação das Views

## Comando uteis
- php artisan serve - Inicia o servidor local do Laravel

## Criação do Projeto

É necessário ter o composer instalado na máquina. Para instalar o composer, basta seguir o tutorial do próprio site do composer: https://getcomposer.org/download/

Após a instalação do composer, basta executar o comando abaixo para criar o projeto:

     composer create-project --prefer-dist laravel/laravel GatoFe

GatoFe é o nome do projeto. O nome pode ser qualquer um.

## Criação do Modelo

    Um modelo é uma classe que representa uma tabela do banco de dados. Para criar um modelo, basta executar o comando abaixo:

    O nome do modelo deve ser no singular e no padrão CamelCase.

    php artisan make:model Gato

    O modelo é utilizado para fazer a comunicação com o banco de dados.

    Dentro do modelo devemos definir:
    - A tabela que ele representa (table)
    - Os campos da tabela (fillable)

    Os modelos ficam na pasta: app/Models/...

## Criação do Banco de Dados
    O banco de dados é o lugar onde as informações são armazenadas. O banco de dados pode ser criado com qualquer tipo de SGBD (Sistema Gerenciador de Banco de Dados). Neste tutorial, será utilizado o MySQL.

    Depois de criado devemos configurar o arquivo .env com as informações do banco de dados.

    DB_CONNECTION=mysql
    DB_HOST= - Endereço do banco de dados
    DB_PORT= - Porta do banco de dados
    DB_DATABASE= - Nome do banco de dados
    DB_USERNAME= - Usuário do banco de dados
    DB_PASSWORD= - Senha do banco de dados

## Criação da Migration
    As migrations são responsáveis por criar as tabelas no banco de dados. Para criar uma migration, basta executar o comando abaixo:

    php artisan make:migration create_gatos_table

    Para criar tabelas o nome do arquivo deve se iniciar com create_ e terminar com _table.

    Dentro da migration devemos definir:
    - O nome da tabela (table)
    - Os campos da tabela (fillable)

    As migrations ficam na pasta: database/migrations/...

    Para criar os campos dentro da migration devemos utilizar os métodos diponiveis na documentação do laravel: https://laravel.com/docs/9.x/migrations#creating-columns