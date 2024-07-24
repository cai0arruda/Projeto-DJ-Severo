# 📚 Nome do Projeto

Breve descrição do projeto.

## 🛠 Requisitos

- PHP 8.0
- Composer
- Docker

## 🚀 Instalação

### 💻 Localmente

1. Clone o repositório:
    ```bash
    git clone https://github.com/your-repo-name/project.git
    cd project
    ```
2. Instale as dependências do Composer:
    ```bash
    composer install
    ```
3. Configure o arquivo `.env`:
    ```bash
    cp .env.example .env
    ```
    Edite o arquivo `.env` com suas configurações de banco de dados e outras variáveis de ambiente.
4. Gere a chave da aplicação (se necessário):
    ```bash
    php artisan key:generate
    ```
5. Inicie o servidor local:
    ```bash
    php -S localhost:8000 -t public
    ```
6. Acesse a aplicação em [http://localhost:8000](http://localhost:8000).

### 🐋 Docker Setup

Este projeto usa Docker para simplificar o processo de configuração e implantação. Siga os passos abaixo para começar:

#### Pré-requisitos

Certifique-se de ter o [Docker](https://www.docker.com/products/docker-desktop) instalado em sua máquina.

#### 🏗 Build the Docker Image

1. Clone o repositório:
    ```bash
    git clone https://github.com/your-repo-name/project.git
    cd project
    ```
2. Crie um arquivo `.env` no diretório raiz com o seguinte conteúdo:
    ```env
    DB_HOST=your_database_host
    DB_USER=your_database_user
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```
3. Construa a imagem Docker:
    ```bash
    docker build -t your-image-name .
    ```

#### 🏃 Run the Docker Container

1. Execute o contêiner:
    ```bash
    docker run -d -p 80:80 \
      --env-file .env \
      your-image-name
    ```
    Este comando executa o contêiner Docker em modo desacoplado (`-d`), mapeia a porta 80 do host para a porta 80 do contêiner (`-p 80:80`), e carrega variáveis de ambiente do arquivo `.env`.

2. Acesse a aplicação:
    Abra seu navegador e vá para [http://localhost](http://localhost) para acessar a aplicação.

#### ⏹ Stopping the Container

Para parar o contêiner, primeiro encontre o ID do contêiner usando:
```bash
docker ps
