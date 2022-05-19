<?php
	$str=<<<XML
	<xml version = "1.0" encoding = "ISO-8859-I"?>
	<BookInfo>
		<book>
			<PHP>
			<bookno>1</bookno>
			<bookname>JAVA</bookname>
			<authorname>Balguru Swami</authorname>
			<price>250</price>
			<year>2006</year>
			</PHP>
			<PHP>
			<bookno>2</bookno>
			<bookname>C</bookname>
			<authorname>Dennis Ritchie</authorname>
			<price>500</price>
			<year>1971</year>
			</PHP>
		</book>
	</BookInfo>
XML;
	$fname = "book.xml";
	$fp = fopen($fname,"w");
	fwrite($fp, $str);
	fclose($fp);
	echo"Created filename is: ".$fname;
?>
