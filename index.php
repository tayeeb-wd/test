<?php

$marks = 85;

if($marks>=0 && $marks <=32) {
    echo "<h1 style= 'color: red'> You Grade Is : F </h1>";    
}elseif ($marks>=33 && $marks <=39){
    echo "<h1 style= 'color: green'> You Grade Is : D </h1>";
}elseif ($marks>=40 && $marks <=49){
    echo "<h1 style= 'color: orange'> You Grade Is : C </h1>";
}elseif ($marks>=50 && $marks <=59){
    echo "<h1 style= 'color: blue'> You Grade Is : B </h1>";
}elseif ($marks>=60 && $marks <=69){
    echo "<h1 style= 'color: pink'> You Grade Is : A- </h1>";
}elseif ($marks>=70 && $marks <=79){
    echo "<h1 style= 'color: skyblue'> You Grade Is : A </h1>";
}elseif ($marks>=80 && $marks <=100){
    echo "<h1 style= 'color: red'> You Grade Is : A+ </h1>";
}
?>





<br><br><br>

<?PHP 
$amount = 850;
$type = 'pound';

// $rate = 0;
// if ($type == 'dollar'){
//     $rate = 85.30;
// } else if ($type == 'pound'){
//     $rate = 116;
// } else if ($type == 'euro'){
//     $rate = 95;
// } else if ($type == 'cad'){
//     $rate = 66;
// } else if ($type == 'rupi'){
//     $rate = 1.20;
// } else if ( $type == 'rubel'){
//     $rate = 34;
// } else if ( $type == 'won'){
//     $rate = 0.071;
// } else if ($type == "yuan"){
//     $rate = 13.62;
// } else if ($type == 'peso'){
//     $rate = 3.56;
// } else if ($type =='yen'){
//     $rate = 0.75;
// }


switch  ($type){

    case 'dollar':
        $rate = 85.30;
        break;
    case 'pound':
        $rate = 116;
        break;
    case 'euro':
        $rate = 95;
        break;
    case 'cad':
        $rate = 67.56;
        break;
    case 'rupi':
        $rate = 1.20;
        break;
    case 'rubel':
        $rate = 34;
        break;
    case 'won':
        $rate = 0.071;
        break;
    case 'yuan':
        $rate = 13.62;
        break;
    case 'pese':
        $rate = 3.56;
        break;
    case 'yen':
        $rate = 0.75;
        break;

}



$bdt = $amount * $rate;
echo " <h1 style= 'color: green';> {$amount} {$type} = {$bdt} BDT </h1>";



?>




<br><br><br>











<?php

$girl_age = 20;
    echo $girl_age >= 18 ? " <h1> You can Marry" : " You can't</h1>";

$boy_age = 20;
    echo $boy_age >=21? "You can marry" : "You can't";

?>















<?php

for ($i= 1000; $i <= 1100; $i++ ) {
    echo "I Love PHP {$i} <br>";
}

    
for ($i= 1000; $i >= 900; $i-- ){
echo "I Love PHP {$i} <br>";
} 



?>
































<br>
<br>
<br>

<?php

$required_result = 92;
    echo $required_result >= 95 ? " <h1> You can get scholarship" : 
    "You are not able to get scholarship</h1>";


?>





<br>
<br>
<br>





<?php


$age =25;
$experience = true;
$job = true;

    if ( $age >=26 || $experience ==true || $job ==true){
        echo "<h1>You are ready for this job</h1>";
        
    }else{
        echo "<h1>You are not ready for this job</h1>";
    }

?>

<br>
<br>
<br>


<?php

$member =true;
$id_card = true;


    if ( $member == true && $id_card ==false){
        echo "<h1>Welcome to the Party Sir</h1>";
        
    }else{
        echo "<h1>Sorry Sir, You are not allow here.<h1>";
    }


    $boy =true;
    $girl = true;
    $boys_age = 21;
    $girls_age = 18;
    
    
        if ( $boy == true && $boys_age <= 22){
            echo "<h1>You can marry</h1>";
            
        }else if ( $girl == true && $girls_age <=17 ) {
            echo "<h1>You can Marry <h1>";
        } else {
            echo "<h1> You can't Marry </h1>";
        }
        
        

?>





