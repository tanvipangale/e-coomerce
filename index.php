<?php 

/*
1) Class
2) Objects
3) Encapsulation
4) Inheritance
5) Polymorphism
6) Abstraction
7) Constructor & Destructor
*/


//////// Creating Class 
Class book {
	public  $bookname  ;
	private   $price ; 
	protected $pages ;
	
	var $author ;
	
	private function addbooks($bookname,$price,$pages,$author)
	{
		$this->bookname = $bookname ; 
		$this->price = $price ; 
		$this->pages = $pages ; 
		$this->author = $author ; 
	}
	function printbooks()
	{   
	   echo $this->bookname ;  echo '<br>';
	   echo $this->price ;     echo '<br>'; 
	   echo $this->pages ;     echo '<br>';
	   echo $this->author ;    echo '<br>';
		
	}
	
}


Class hindi extends book
{
	var $fontname ; 
}


/////////Creating Object
$book1 = new book() ; 


echo $book1->bookname = "PHP Fundamentals";  echo '<br>';
//echo $book1->price = 500 ;   echo '<br>';
echo $book1->Pages = 200 ;   echo '<br>';
echo $book1->author = "Denis Ritchi";  echo '<br>';


$hindibook = new hindi(); 

echo $hindibook->bookname = "The Autobiography of Ramdhari_singh Dinkar" ; 
//echo '<br>'; echo $hindibook->price = 500 ;  echo '<br>';
echo '<br>'; echo $hindibook->Pages = 400 ;  echo '<br>';
echo $hindibook->author = "Ramdhari_singh" ; echo '<br>';
echo $hindibook->fontname = "Kruti dev" ;


interface shapes {
	function calculatearea(){
		
	}
}

class circle extends shapes
{
	function calculatearea(){
		
	}
}

class square extends shapes
{
	 function calculatearea(){
	   	
	}
}

circle1 = new circle();
square1 = new square1();









////// Creating Inhertance
////// Creating Encapsulation
////// Polymorphism
////// Abstraction
////// Constructor & Destructor



?>