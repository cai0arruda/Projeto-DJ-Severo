# 📚 Nome do Projeto

Breve descrição do projeto.

## 🛠 Requisitos

- PHP 8.0
- Composer
- Docker

## 🚀 Instalação

### 🐋 Docker Setup

Este projeto usa Docker para simplificar o processo de configuração e implantação. Siga os passos abaixo para começar:

#### Pré-requisitos

Certifique-se de ter o [Docker](https://www.docker.com/products/docker-desktop) instalado em sua máquina.

#### 🏗 Build the Docker Image

1. Clone o repositório:
    ```bash
    git clone https://github.com/cai0arruda/Projeto-DJ-Severo.git
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
