<?php

require("Dijkstra.php");
function runTest() {
	$g = new graph();
	$g->addedge("a", "b", 162);
	$g->addedge("a", "c", 155);
	$g->addedge("a", "f", 130);
	$g->addedge("a", "j",750 );
	$g->addedge("a", "g",212 );
	$g->addedge("a", "d",268 );
	$g->addedge("a", "e", 159);
	$g->addedge("d", "b", 160);
	$g->addedge("d", "e", 162);
	$g->addedge("d", "h", 300);
	$g->addedge("d", "i", 270);
	$g->addedge("d", "g",240 );
	$g->addedge("d", "j",594 );
	$g->addedge("j", "i", 310);
	$g->addedge("j", "k",489 );
	$g->addedge("j", "g", 12);
	$g->addedge("j", "l",561 );
	$g->addedge("j", "h", 181);
	$g->addedge("g", "c", 110);
	$g->addedge("g", "f", 200);
	$g->addedge("g", "k", 156);
	$g->addedge("g", "l", 280);
	$g->addedge("b", "a", 162);
	$g->addedge("c", "a", 155);
	$g->addedge("f", "a", 130);
	$g->addedge("j", "a",750 );
	$g->addedge("g", "a",212 );
	$g->addedge("d", "a",268 );
	$g->addedge("e", "a", 159);
	$g->addedge("b", "d", 160);
	$g->addedge("e", "d", 162);
	$g->addedge("h", "d", 300);
	$g->addedge("i", "d", 270);
	$g->addedge("g", "d",240 );
	$g->addedge("j", "d",594 );
	$g->addedge("i", "j", 310);
	$g->addedge("k", "j",489 );
	$g->addedge("g", "j", 12);
	$g->addedge("L", "j",561 );
	$g->addedge("h", "j", 181);
	$g->addedge("c", "g", 110);
	$g->addedge("f", "g", 200);
	$g->addedge("k", "g", 156);
	$g->addedge("l", "g", 280);
	
	list($distances, $prev) = $g->paths_from($_POST["txt1"]);
	
	$path = $g->paths_to($prev, $_POST["txt2"]);
	
	print_r($path);
	
	echo("a--> New Delhi     b-->Neemrana     c-->Aligarh   d-->Jaipur    e-->Alwar    f-->Sihri    g--> Agra    h-->Guna     i-->Kota    j--> Bhopal     k-->Bhind     l-->Kanpur");
	
}
runTest();