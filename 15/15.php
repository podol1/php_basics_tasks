<?php
$a = '10';
$b = '10';
$operator = ‘+’;

if ($operator == "+")
{
    $result = $a + $b;

}
else if ($operator == "-")
{
    $result = $a - $b;

}
else if ($operator == "*")
{
    $result = $a * $b;

}
else if ($operator == "/")
{
    if ($b != 0)
    {
        $result = $a / $b;

    }
    else
    {
        echo "на ноль делить нельзя!";
    }
}

?>
