<?php
$no1 = $_POST["no1"];
$operator = $_POST["operator"];
$no2 = $_POST["no2"];
$result = null;


function funcal($no1, $no2, $operator, $result = null){
    switch($operator){
        case 'add':
            $result = $no1 + $no2;
                break;
            case 'sub':
                $result = $no1 - $no2;
                break;
                case 'mult':
                    $result = $no1 * $no2;
                break;        
                case 'div':
                    $result = $no1 / $no2;
                break;       
    }

    return $result;
}
$result = funcal($no1, $no2,  $operator, $result) ;

    echo "$result";







?>