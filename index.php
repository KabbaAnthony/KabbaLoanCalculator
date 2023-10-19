<?php
$first_name = "Kabba Anthony";
$last_name = "Bangura";
// Declaring Loan Amount Below
$loan_amount = 10000.00;
$num_months = 2;
 
if ($num_months == 1){
  $interest_rate = 10;
  $interest_amount = ($loan_amount * $interest_rate)/ 100;
  echo "Interest Amount for 1 month: le". $interest_amount;

}elseif($num_months == 2){
$interest_rate = 15;
$interest_amount = ($loan_amount * $interest_rate)/ 100;
echo "Interest Amount for  month: le". $interest_amount;

}elseif($num_months == 3){
    $interest_rate = 20;
    $interest_amount = ($loan_amount * $interest_rate)/ 100;
    echo "Interest Amount for  month: le". $interest_amount;

}elseif($num_months == 4){
$interest_rate = 25;
$interest_amount = ($loan_amount * $interest_rate)/ 100;
echo "Interest Amount for  month: le". $interest_amount;

}elseif($num_months == 5){
    $interest_rate = 30;
    $interest_amount = ($loan_amount * $interest_rate)/ 100;
    echo "Interest Amount for  month: le". $interest_amount;

 }else {
    echo "Come to our Office You Owe Monger";
  }
?>
