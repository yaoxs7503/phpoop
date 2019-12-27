<?php


class Book{
  private $bookName;
  private $bookAuthor;
  const Br='<br/>';
  public function __construct($name,$author){
    $this->bookName=$name;
    $this->bookAuthor=$author;
  }

  public function getNameAuthor(){
    return $this->bookName. '-' .$this->book.self::BR;
  }
}
class BookFactory{
  public static function create($name,$author){
    return new Book($name,$author);
  }
}

$book1=BookFactory::create('杂志','阿升');
$book2=BookFactory::create('杂志2','阿明');

echo $book1->getNameAuthor();
echo $book2->getNameAuthor();
?>