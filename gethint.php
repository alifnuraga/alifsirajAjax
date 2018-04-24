<?php
$a[] = "Gilang";
$a[] = "Pak Cik Riswan";
$a[] = "alif nuraga";
$a[] = "melisa adhari alias milea";

$q = $_REQUEST["q"];

$hint = " ";

if ($q !== "") {
	$q = strtolower($q);
	$len=strlen($q);
	foreach($a as $name){
		if (stristr($q, substr($name, 0, $len))) {
			if ($hint === "") {
				$hint = $name;
			} else {
				$hint .= ", $name";
			}
		}
	}
}

echo $hint === "" ? "no suggestion" : $hint;
?>
