<?php
	$xml = simplexml_load_file("book.xml");
	foreach($xml->book as $bk)
	{
		echo"Book no = $bk->bookno"."<br>";	 
		echo"Book Name = $bk->bookname"."<br>";
		echo"Author Name = $bk->authorname"."<br>";
		echo"Price = $bk->price"."<br>";
		echo"Year = $bk->year"."<br>";
	}
?>
