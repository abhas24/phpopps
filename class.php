<?php
class Book{
	var $price;
	var $title;

	function setPrice($pr){
		$this->price = $pr;
	}

	function getPrice(){
		return $this->price;
	}

	function setTitle($title){
		$this->title = $title;
	}

	function getTitle(){
		return $this->title;
	}
}

$book1 = new Book;

$book1->setPrice(10);
$book1->setTitle('Physics');

echo $book1->getPrice();
echo $book1->getTitle();
?>
