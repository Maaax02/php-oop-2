<?php

    require_once __DIR__ . '/index.php';

    class Food extends Products{
        private string $weight;
        private string $expiration;

        function __construct(string $title, int $price, int $quantity, string $description, int $weight, string $expiration){

                parent::__construct($title, $price, $quantity, $description);

                $this->setWeight($weight);
                $this->setExpiration($expiration);
        }
        /**
         * Get the value of weight
         */ 
        public function getWeight()
        {
                return $this->weight;
        }
    
        /**
         * Set the value of weight
         *
         * @return  self
         */ 
        public function setWeight($weight)
        {
                $this->weight = $weight;
    
                return $this;
        }
    
        /**
         * Get the value of expiration
         */ 
        public function getExpiration()
        {
                return $this->expiration;
        }
    
        /**
         * Set the value of expiration
         *
         * @return  self
         */ 
        public function setExpiration($expiration)
        {
                $this->expiration = $expiration;
    
                return $this;
        }
    };

    

    $food1 = new Food('food1', 300, 1, 'suca', 200, '20/05/2022');

    var_dump($food1);
?>