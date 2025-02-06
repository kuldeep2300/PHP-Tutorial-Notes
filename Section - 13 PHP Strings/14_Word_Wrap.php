<?php
// The wordwrap function in PHP is used to wrap a string to a given number of characters. It inserts line breaks ("\n") into the string at specified intervals to ensure that no line exceeds the given length. 
// wordwrap(string $str, int $width = 75, string $break = "<br>" ) ; 

$content = "This is a very long content and it is a string";
// $wordwrap = wordwrap($content, 2, "\n"); // This will not work because of \n
$wordwrap = wordwrap($content, 2, "<br>"); // This will work because of adding <br>, and not add break after 2 character, instead of this it will add break at spaces, that's why we have to put extra argument.
$wordwrap = wordwrap($content, 2, "<br>", true); // If the cut is set to true, the string is always wrapped at or before the specified width. So if you have a word that is larger than the given width, it is broken apart, by default this fourth argument is false. 
echo $wordwrap;