<?php
class Book{
		static $num=0;
		public function  showMe (){
				echo 'You are the '.self::$num.' vistor';
				self::$num++;
				}
				
}

$book1 = new Book ();
$book1->showMe();
echo "<br>";
$book2 = new Book ();
$book2->showMe();
echo "<br>";
echo' You are the '.Book::$num.' vistor';
?>
