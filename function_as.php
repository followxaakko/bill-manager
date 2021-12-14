<html>
    <body>
        <head>
            <center>
<style>
            #box {
      background-image: linear-gradient(rgb(121, 165, 135) , rgb(34, 48, 42));
      background-position: right bottom, left top;
      background-repeat: no-repeat, repeat;
      padding: 15px;
      border-radius: 15px;
      width: 620px;
      height: "auto"px;
      box-shadow: 0 5px 15px 0 rgba(255, 255, 255, 0.2), 0 2px 15px 0 rgba(0, 0, 0, 0.30);
      border-style: solid;
      border-width: 5px;
    border-color: rgb(255, 255, 255);
    }

    body {
      color: white;
    }
    
    h1 {
      color: rgb(255, 255, 255);
    }

    </style>


<div id="box">


<h1>TOTAL BILL CHECKER</h1>
<?php

$electricbill = $_GET ['electricbill'];
$waterbill = $_GET ['waterbill'];
$internetbill = $_GET ['internetbill'];
$garbagedisposal = $_GET ['garbagedisposal'];
//monthlyexpenses
$foodbill = $_GET ['foodbill'];
$rent = $_GET ['rent'];
$groceries = $_GET ['groceriesbill'];
$totalexpenses = $rent + $foodbill + $groceries;
//peoples
$totalofpplhide = $_GET ['sharingwith'];
$totalofppl = $totalofpplhide;


function totalbillamont ($electricbill , $waterbill , $internetbill , $garbagedisposal) {
    $bills = $electricbill + $waterbill + $internetbill + $garbagedisposal;
    return $bills;
}

echo " ". "Total for all bills = MVR " . totalbillamont($electricbill, $waterbill, $internetbill, $garbagedisposal);

echo "<br>";
echo "<br>";

function totalexpenses ($foodbill , $rent , $groceries){
    $totalexpenses = $rent + $foodbill + $groceries;
    return round($totalexpenses);

}


function dividemonthlyexpenses ($totalexpenses , $totalofppl){
    $dividedtotalexpense = $totalexpenses / $totalofppl;
    return ($dividedtotalexpense);
    
}

echo "Rent for each person (shared) = MVR " . dividemonthlyexpenses ($totalexpenses , $totalofppl);
echo ifAbove8000($totalexpenses , $totalofppl);


//echos
echo "<br>";
echo "<br>";
echo "TOTAL OF EXPENSES AND BILLS";
echo "<br>";
echo "<br>";
echo "ELECTRIC BILL : " . $electricbill;
echo "<br>";
echo "WATER BILL : " . $waterbill;
echo "<br>";
echo "INTERNET BILL : " . $internetbill;
echo "<br>";
echo "GARBAGE DISPOSAL : " . $garbagedisposal;
echo "<br>";
echo  "FOOD BILL : " . $foodbill;
echo "<br>";
echo "RENT : " . $rent;
echo "<br>";
echo "GROCERIES : " . $groceries;
echo "<br>";


echo "<br>";
echo "<br>";

echo "Total expenses = MVR " . totalexpenses($foodbill , $rent , $groceries);


function ifAbove8000 ($totalexpenses , $totalofppl) {
    if (dividemonthlyexpenses($totalexpenses , $totalofppl) > 8000) {
        echo "!! KEEP YOUR EXPENSES DOWN 8000 FOR EACH PERSON THATS TOO HIGH !! ";
    }
   
}



?>



</head>
</center>
    </body>
</html>
