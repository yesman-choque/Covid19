Vamos adicionar essas funcionalidades ao README:

# Painel de Monitoramento da Covid-19

Este projeto consiste em um painel interativo que permite acompanhar a situação da Covid-19 em três países: Brasil, Canadá e Austrália. Você poderá visualizar o número atualizado de casos confirmados e mortes em cada um desses países, além de dados detalhados por estado.

## Requisitos

Antes de iniciar, verifique se sua máquina atende aos seguintes requisitos:

- **PHP:** Certifique-se de ter o PHP instalado em sua máquina. Você pode verificar executando o seguinte comando no terminal:

    ```bash
    php -v
    ```

- **Composer:** O Composer é uma ferramenta de gerenciamento de dependências para PHP. Se não estiver instalado, siga as instruções em [getcomposer.org](https://getcomposer.org) para instalá-lo.

- **MySQL/MariaDB:** Este projeto requer um banco de dados MySQL ou MariaDB para armazenar os dados da Covid-19.

- **Extensão mysqli:** Certifique-se de que a extensão mysqli esteja habilitada no seu arquivo `php.ini`.

- **Git:** Você precisará do Git para clonar o repositório do projeto. Você pode instalá-lo seguindo as instruções em [git-scm.com](https://git-scm.com).

## Funcionalidades Adicionais

Além de visualizar os dados gerais da Covid-19 em cada país, este painel oferece as seguintes funcionalidades adicionais:

1. **Dados por Estado:**
   
    Você pode visualizar os dados detalhados da Covid-19 em cada estado do país selecionado. Esses dados incluem o número de casos confirmados, número de mortes e outras informações relevantes.

2. **Uso da API da Kodopi:**
   
    Para obter os dados atualizados da Covid-19, este projeto utiliza a API da Kodopi. Essa API fornece acesso a informações precisas e em tempo real sobre a pandemia.

3. **Registro do Último Acesso à API:**
   
    O painel registra o último acesso feito à API da Kodopi, incluindo a data, hora e país selecionado. Isso permite que os usuários saibam quando os dados foram atualizados pela última vez.

## Como Executar o Projeto

Siga as instruções abaixo para configurar e executar o projeto em sua máquina:

1. **Clone o Projeto:**
   
    ```bash
    git clone git@github.com:yesmanic/Covid19.git
    ```

2. **Navegue até o Diretório do Projeto:**
   
    ```bash
    cd Covid19
    ```

3. **Instale as Dependências:**
   
    Use o Composer para instalar as dependências do projeto.

    ```bash
    composer install
    ```

4. **Configure as Credenciais do Banco de Dados:**
   
    Faça uma cópia do arquivo de ambiente `.env.example` e renomeie para `.env`. Abra o arquivo `.env` em um editor de texto e insira as credenciais do seu banco de dados.

5. **Inicialize o Banco de Dados:**
   
    Certifique-se de que o servidor MySQL/MariaDB esteja em execução. Execute o seguinte comando para criar a estrutura do banco de dados:

    ```bash
    php db.php
    ```

6. **Inicie o Servidor Local:**
   
    Execute o seguinte comando para iniciar o servidor PHP embutido:

    ```bash
    php -S localhost:8000
    ```

7. **Acesse o Painel da Covid-19:**
   
    Abra seu navegador da web e digite o seguinte URL na barra de endereços:

    ```
    http://localhost:8000
    ```

Você será redirecionado para o painel da Covid-19, onde poderá visualizar os dados atualizados da situação da pandemia nos países selecionados, bem como acessar as funcionalidades adicionais mencionadas acima.

Se surgirem dúvidas ou problemas durante a execução do projeto, sinta-se à vontade para perguntar!