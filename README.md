## DifferDev - Repository Pattern no Laravel

Neste repo(do git) é um exercício simples de implementação do padrão Repository no Laravel.

Faremos o uso da camada de infraestrutura para trocar uma persistencia do bando de dados para a geração de uma ação em fila com o RabbitMQ.

Para testar:

Rodar na primeira vez:

```
docker compose up -d

docker compose exec app bash

cd /app

composer install

mv .env.example .env

php artisan migrate
```

Desafio Repository do vídeo:

1. Instalar a lib do RabbitMQ
2. Adicionar no docker-compose o container do Rabbit
3. Criar a fila no RabbitMQ
4. Implementar o RabbitMQRepositoryStrategy
5. Alterar a injeção de dependência.
6. Testar a implementação

Video no youtube: 
https://youtu.be/j0Yc4CQ5b88