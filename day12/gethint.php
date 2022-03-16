<?php
// Array with names
$a[] = "Anna";
$a[] = "Angel";
$a[] = "Art";
$a[] = "Amma";
$a[] = "Appa";
$a[] = "Brittany";
$a[] = "Brave";
$a[] = "Bright";
$a[] = "Breezyy";
$a[] = "Bubbly";
$a[] = "Cinderella";
$a[] = "Calm";
$a[] = "Careful";
$a[] = "Cold";
$a[] = "Calender";
$a[] = "Diana";
$a[] = "Dog";
$a[] = "Decent";
$a[] = "Dynamic";
$a[] = "Devoted";
$a[] = "Eva";
$a[] = "Early Morning in this day";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "How to learn javascript";
$a[] = "How to build website";
$a[] = "How to klearn front end";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "What is html";
$a[] = "What is javascript";
$a[] = "Why to learn javascript";
$a[] = "Vicky";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= "<br> $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>