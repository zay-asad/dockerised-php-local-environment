<?php

class ShoppingList {
    public function __construct(
        private ?float $price,
        private ?int $quantity,  
        private ?string $productName, 
        ) 
        {}
        
        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of quantity
         */ 
        public function getQuantity()
        {
                return $this->quantity;
        }

        /**
         * Set the value of quantity
         *
         * @return  self
         */ 
        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;

                return $this;
        }

        /**
         * Get the value of productName
         */ 
        public function getProductName()
        {
                return $this->productName;
        }

        /**
         * Set the value of productName
         *
         * @return  self
         */ 
        public function setProductName($productName)
        {
                $this->productName = $productName;

                return $this;
        }

        public function priceAsCurrency($divisor = 1 , $currencySymbol = '£'): string
        //passing 2 default values for the arguments in the method above
        {
        $priceAsCurrency = $this->price / $divisor;

        return 'The full price is: ' . $currencySymbol . $priceAsCurrency;
        }
}

