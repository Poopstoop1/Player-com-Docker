# Projeto - API Laravel

Este projeto teve como objetivo criar um Music Player simples e funcional, utilizando uma variedade de tecnologias para oferecer uma experiência interativa e responsiva. 
A interface foi desenvolvida com HTML, CSS e JavaScript, enquanto o back-end foi construído com Laravel (PHP) e integrado ao MySQL para o armazenamento de dados. 
O Docker foi utilizado para facilitar a implantação e o ambiente de desenvolvimento.

## Diretórios

- src = Aplicação wordpress
- db = Arquivos do banco de dados
- src/app =  controllers
- src/resources = Arquivos do front-end
- DockerConfig = Arquivos de configuração do Docker
- scr/resources/player.blade.php = HTML

## Para rodar 

- É necessario ter o docker desktop instalado. 
- Passar o sistema de linux para windows caso esteja no windows. 
dar um git clone com a --config core.autocrlf=input para o sistema ficar todo em LF
exemplo: git clone https://github.com/Poopstoop1/Player-com-Docker.git --config core.autocrlf=input

## Como rodar

### Levanta o ambiente (na raiz)

```bash
docker-compose up --build -d
```

### Durrubar o container (na raiz)

```bash
docker-compose down
```

### verifica se o container estar de pé 

```bash
docker ps
```

### Acessando o container da aplicação

```bash
docker exec -it aula-laravel bash
```

### Instalando as dependencias

```bash
composer install
```

### Rodando as migrations

```bash
php artisan migrate
```

### Acessando a ROTA (Trocar {rota} pelo nome da rota criado)

```bash
localhost/api/{rota}
```



##############################################################################

#outros

### Acessando o container do Banco de Dados

```bash
docker exec -it db_agenda bash
```

### Se tiver problema no Windows

```
 --config core.autocrlf=input
```
