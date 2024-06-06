<?php

function strArr($r): String {

    $start = "[";
    $end = "]";
    $result = $start;

    foreach ($r as $a) {

        $result .= "'" . $a . "',";

    }# end foreach

    $result = substr($result, 0, -1);

    $result .= $end;

    return $result;
    
} # end function


function diffArr($array1, $array2, $array3): String {

    $rAB = array_diff($array1, $array2);
    $rAC = array_diff($array1, $array3);

    $r=array_intersect($rAB,$rAC);

    return strArr($r);

}# end function


function interArr($array1, $array2, $array3): String {

    $r = array_intersect($array1, $array2, $array3);

    return strArr($r);

} # end function


function find($arrayA, $arrayB, $arrayC): void {

    $result = interArr($arrayA, $arrayB, $arrayC);

    print("<br />");

    print("U sva tri niza: " . $result . "<br />");


    $result = diffArr($arrayA, $arrayB, $arrayC);

    print("<br />");

    print("Samo u nizu \$arrayA = " . $result . "<br />");

    print("<br />");


    $result = diffArr($arrayB, $arrayA, $arrayC);

    print("Samo u nizu \$arrayB = " . $result . "<br />");

    print("<br />");


    $result = diffArr($arrayC, $arrayA, $arrayB);

    print("Samo u nizu \$arrayC = " . $result . "<br />");

} # end function 


$arrayA = ['a', 'b', 'c', 'dd', '234', '22', 'rc'];
$arrayB = ['a', 'b2', 'c', 'dad', 'rc', '24', '222'];
$arrayC = ['222', 'a', 'be', 'rc', 'dd', '234', '22', 'pp'];

find($arrayA, $arrayB, $arrayC);



/*
U sva tri niza: ['a', 'rc']
Samo u nizu $arrayA = ['b']
Samo u nizu $arrayB = ['b2', 'dad', '24']
Samo u nizu $arrayC = ['be', 'pp']

*/
?>