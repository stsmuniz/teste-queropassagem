# Teste QueroPassagem

## Sobre

Esta é uma aplicação para fins de teste, solicitada como parte do processo de seleção de profissionais da QueroPassagem

## Tecnologias

As tecnologias aplicadas para o desenvolvimento desta aplicação foram:

* PHP 8.1
* Bootstrap 5
* Sqlite 3
* Laravel 9

## Configuração

Para configurar o projeto, siga os seguintes passos

### Dependências

Antes de iniciar a configuração do projeto, assegure-se de ter os seguintes recursos na máquina host:
* PHP 8.x
* Extensão php-sqlite
* Composer ([instruções de instalação](https://getcomposer.org/download/))

### Clone este projeto

No seu terminal, use o comando `git clone https://github.com/stsmuniz/teste-queropassagem`

### Configure o projeto

* Acesse a pasta do projeto `cd teste-queropassagem`
* Renomeie o arquivo de variáveis de ambiente teste `mv .env.example .env`
* Resolva as dependências `composer install`
* Crie a estrutura de banco de dados `php artisan migrate`
* Ative o servidor embutido do PHP `php artisan serve`

## Navegação

Com a configuração feita, agora é possível navegar pelo projeto acessando https://localhost:8000 do seu navegador.
No canto superior direito, há os links para as páginas de autenticação (entre), e registro (cadastre-se), onde o usuário pode cadastrar-se com e-mail, nome e senha ou conectar-se ao sistema caso já tenha registro


