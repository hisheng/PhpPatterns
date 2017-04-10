<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/10
 * Time: 19:28
 */
namespace Pattern\Structural\DependencyInjection;

class DatabaseConnection
{
    private $configuration;

    public function __construct(DatabaseConfiguration $configuration){
        $this->configuration = $configuration;
    }

    public function getDsn(){
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}