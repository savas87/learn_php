<?php

    // declare person1 and person2 in single dimension array
    $person1 = [
        "Savas",
        "Erbas",
        "Gelistirici",
        31
    ];
    $person2 =[
        'ad' => 'Savas',
        'soyad' => 'Erbas',
        'meslek' => 'Gelistirici',
        'yas' => 23
    ];
    // loop with for-loop 
    for($i=0; $i<sizeof($person1); $i++)
    {
        echo '<li>'.$person1[$i].'</li>';  
    }
    

    

    $zwei_dimensional = [ 
        'names' => ['Max','Mike','Joe'],
        'surename' => ['Musterman','Peters','Francis'],
        'ages'=>[21,34,15]
     ];
    
     foreach($zwei_dimensional as $spalte){
         echo '<li>'.$spalte[0].' '.$spalte[1].'</li>';
     }

    print_r($person2);
?>