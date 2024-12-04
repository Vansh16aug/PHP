<?php
    class Book{
        private $title;
        private $author;
        private $price;

        public function setTitle($title){
            $this -> title = $title;
        }
        public function setAuthor($author){
            $this -> author = $author;
        }
        public function setPrice($price){
            if($price < 0){
                throw new Exception("Price cannot be negative");
            }
            $this -> price = $price;
        }
        public function getDetails() {
            return "Title: $this->title, Author: $this->author, Price: $this->price";
        }
    }
    
    try{
        $book1 = new Book();
        $book1->setTitle("Legend");
        $book1->setAuthor("Vansh");
        $book1->setPrice(10000);

        echo $book1->getDetails();
    }catch(Exception $e){
        echo "Error: ". $e->getMessage();
    }
?>