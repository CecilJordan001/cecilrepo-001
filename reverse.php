<!Doctype html>

<body>

<?php
// Author... Cecil Anderson Jordan
// Live Long And Code..........
// This should wet the appetite of some php enthusiasts
// This program will take a string that is stored as a variable and 
// print out the reverse version of it.
$OriginalWord = "Christmas";
// The reverse word/result should be "samtsirhC"
// watch how it is done.
$WordLength = strlen($OriginalWord);
//die("Word Length is " .$WordLength); /// just checking to make sure that the correct length is used.
echo "The Reverse version is ";
for($a = $WordLength-1; $a >=0; $a--)
{
  
    echo $OriginalWord[$a];
}
echo "\n"; // use "\n" if you are running it in the console/command line, or "<br>" 
           // if you are running this script from the browser
?>
</body>

</html>