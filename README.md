# Covid19

O projeto consiste em um painel para verificar a ocorrência de Covid-19 no Brasil, Canada e Australia. Para cada país, é possível verificar o número de casos confirmados e mortes.

## Como rodar o projeto

Para rodar o projeto, é necessário ter o php instalado. Para verificar se o php está instalado, basta rodar o comando:

```bash
php -v
```

Faça o clone do projeto:

```bash
git clone git@github.com:yesmanic/Covid19.git
```

Entre na pasta do projeto:

```bash
cd Covid19
```

Instale as dependências:

```bash
composer install
```

Coloque as credenciais do banco de dados no .env:

```bash
cp .env.example .env
```

Inicie o banco de dados (para isso certifique-se de que o mysql/mariadb esteja rodando e a extensão mysqli esteja habilitada no php.ini):

```bash
php db.php
```

Rode o servidor:

```bash
php -S localhost:8000
```