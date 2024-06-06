<?php

$content = file_get_contents("https://api.adriatic.hr/test/it?user=184");


if ($content != "")
{

    print("<br />");
    print($content);

    $url = "https://api.adriatic.hr/test/it?user=184&pass=$content";

    header( "Location: $url" );
    
}

?>

<form method="GET" action="https://api.adriatic.hr/test/it">

    <input type="text" name="user" value="184" />
    <input type="submit" />
</form>


<?php


/*

https://api.adriatic.hr/test/it?user=184

https://api.adriatic.hr/test/it?user=???&pass=???


*/
?>