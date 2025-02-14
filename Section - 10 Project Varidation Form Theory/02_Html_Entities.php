<!-- HTML ENTITIES & HTML SPECIAL CHARS

So basically we use this to convert sign, or symbols into a specific code, to prevent from hackers and for safety purposes.
Instead of storing all complete : <a href = "https://www.google.com"></a> we will store it into database in encoding form like `&lt;a href = &quot;https://www.google.com&quot;&gt; &lt;/a&gt;`. This form will be store in the database that will prevent hacker attacks and ensure safety.

But when we access this we don't access same like in encoding format before accessing it and displaying it we will decode it properly and convert it into its original form then after we will display.

//! NOTE - HTML ENTITIES & HTMLSPECIALCHAR BOTH DO SAME THINGS, BUT WE USE `HTMLSPECIALCHARS` TO PREVENT MAINLY XSS(SERVER SIDE ATTACKS) BECUASE IT GENERALLY MORE APPROPRIATE BECAUSE IT FOCUSES SPECIFICALLY ON CHARACTERS WITH SPECIAL MEANING IN HTML. WHILE `HTML ENTITIES` USE IF YOU WANT TO ENSURE THAT ALL CHARACTERS, INCLUDING NON-ASCII CHARACTERS LIKE COPYRIGHT SYMBOL ETC, ARE CONVERTED TO HTML ENTITES, YOU MIGHT CHOOSE HTML ENTITIES.
-->
 
<?php

$myname = "My name 'is' <strong>Kuldeep Verma</strong>";
// echo $myname;

//? Incoding 
// echo htmlentities($myname);    // Go to view page source check there - We don't give flags and default its flag ENT_COMPAT (for double quotes) but it will apply on both single and double quotes, and it will encode both.
// echo htmlentities($myname, ENT_COMPAT); // It will encode only double quotes and leave single quotes alone.
// echo htmlentities($myname, ENT_QUOTES); // This going to encode both single & double quotes.
// echo htmlentities($myname, ENT_NOQUOTES); // This will not encode both single & double quotes. (Inside string)

//? For decoding this
// echo html_entity_decode($myname);

//? HTML SPECIAL CHARS

echo "HTML SPECIAL CHARS";


//? Incoding 
// echo htmlspecialchars($myname);

//? DECODING
// echo htmlspecialchars_decode($myname);

// print_r(get_html_translation_table(HTML_ENTITIES));

print_r(get_html_translation_table(HTML_SPECIALCHARS));