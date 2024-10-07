<?php

    namespace Core;
    use PDO;
    // Database class - 
    class Database {

        public $connection;
        public $statement;

        public function __construct($config, $username = 'root', $password = '')
        {            

            $dsn = 'mysql:' . http_build_query($config, '', ';');            
            $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]); 
        }

        public function query($query, $params = [])
        {
           

            $this->statement = $this->connection->prepare($query);

            $this->statement->execute($params);
            return $this;
  

        }

        public function find()
        {
            return $result = $this->statement->fetch();

        }

        public function count()
        {
            return $result = $this->statement->rowCount();
        }

        public function findOrFail()
        {
            $result = $this->find();

            if(! $result) {
                abort(RESPONSE::NOT_FOUND);
            }

            return $result;

        }


        public function get() {
            return $this->statement->fetchall();
        }


    }



