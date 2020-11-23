<?php
//class DivideByZeroException extends Exception{
//    public function eroor()
//    {
//       return "Can't divide by zero";
//    }
//}
//function divide($sochia,$sobichia){
//    if($sobichia==0){
//        throw new DivideByZeroException();
//    }
//    return $sochia/$sobichia;
//}
//
//try {
//$result=divide(100,50);
//echo $result;
//$result=divide(10,0);
//echo $result;
//
//catch (DivideByZeroException $i){
//    echo "loi".$i->eroor()."<br>";
//} finally {
//    echo "hihi";
//}

function check ($number){
    if($number>1){
        throw new Exception("gia tri phai <=1");
    }
    return true;
}

try {
    check(5);
}
catch (Exception $i){
    echo $i->getMessage();
}

