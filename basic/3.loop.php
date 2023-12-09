<?php

for( $i = 0; $i < 10; $i++ ){
    echo $i,", ";
}

 $x=1;
while($x<5){    
    echo 'no.', $x ;
    $x++;
}

do{
    echo 'No:',$x;
    $x++;
}while($x< 10);

$days=['sud','mon','tue','thu','fri','sat'];

// for($i=0;$i<count($day); $i++){
//     echo $day[$i],', ';
// }

foreach($days as $day){
    echo $day,', ';
}

foreach($days as $index => $day){
    echo $index+1,':-' ,$day,', ';

}

$person =[
    'first_name'=>'Niroj',
    'last_name'=> 'Thapa',
    "email"=>"tt@gmail.com"
];

foreach($person as $key => $value){
 echo $key,":",$value,", "; 
}