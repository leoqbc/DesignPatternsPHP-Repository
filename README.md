## DifferDev - Repository Pattern no Laravel

Neste repo(do git) é um exercício simples de implementação do padrão Repository no Laravel.

Faremos o uso da camada de infraestrutura para trocar uma persistencia do bando de dados para a geração de uma ação em fila com o RabbitMQ.

Desafio:

1. Instalar a lib do RabbitMQ
2. Adicionar no docker-compose o container do Rabbit
3. Criar a fila no RabbitMQ
4. Implementar o RabbitMQRepositoryStrategy
5. Alterar a injeção de dependência.
6. Testar a implementação