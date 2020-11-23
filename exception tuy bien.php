<?php
class DivideByZeroException extends Exception{
    public function __toString()
    {
       return "Can't devide by zero"."<br>";
    }
}
function divide($numerator,$denominator){
    if($denominator == 0){
        throw new DivideByZeroException();
    }
    return $numerator/$denominator;
}

try
{
    echo divide(10,5)."<br>";
    echo divide(10,0);
}
catch (DivideByZeroException $e){
    echo "co loi xay ra". $e;
}
finally {
    echo "hihi";
}
