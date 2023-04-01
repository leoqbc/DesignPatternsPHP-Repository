<?php

namespace Architecture\Infrastructure\Repository\RabbitMQ;

use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use Architecture\Infrastructure\Repository\RepositoryInterface;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMQRepositoryStrategy implements RepositoryInterface
{
    protected string $queueName;

    protected AMQPStreamConnection $connection;

    protected AMQPChannel $channel;

    public function __construct()
    {
        $this->connection = new AMQPStreamConnection(
            getenv('RABBITMQ_HOST'),
            getenv('RABBITMQ_PORT'),
            getenv('RABBITMQ_USER'),
            getenv('RABBITMQ_PASSWORD'),
        );
        $this->channel = $this->connection->channel();
    }

    public function setCollectionName(string $collectionName): void
    {
        $this->queueName = $collectionName;
    }

    public function save(object $entity): bool
    {
        $entityAsJson = json_encode($entity);
        $message = new AMQPMessage($entityAsJson);
        $this->channel->basic_publish($message, '', $this->queueName);
        return true;
    }

    public function __destruct()
    {
        $this->channel->close();
        $this->connection->close();
    }
}
