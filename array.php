<div>
    <h2>Person with only Firstname with for-loop</h2>
    <?php
        // declare person1 and person2 in single dimension array
        $person1 = [
            "Savas",
            "Erbas",
            "Gelistirici",
            31
        ];

        // loop with for-loop 
    for($i=0; $i<sizeof($person1); $i++)
    {
        echo '<li>'.$person1[$i].'</li>';  
    }
    ?>
</div>
<hr/>
<div>
<h2>Person with Firstname withou for-Loop</h2>
<?php
$person2 =[
    'name' => 'Savas',
    'surename' => 'Erbas',
    'job' => 'Gelistirici',
    'age' => 23
    ];

    echo '<li>'.$person2['surename'].'</li>';  
    echo '<li>'.$person2['job'].'</li>';  
    echo '<li>'.$person2['age'].'</li>';     
    echo '<li>'.$person2['name'].'</li>';  

?>
</div>
<hr/>
<div>
<h2>Loop Multidimension Array</h2>
<?php    
    // mutli dimension array
    $multi_dim_array = [ 
        'names' => ['Max','Mike','Joe'],
        'surename' => ['Musterman','Peters','Francis'],
        'ages'=>[21,34,15]
     ];
    
     // loop multi dimension array
     foreach($multi_dim_array as $block){
         echo '<li>'.$block[0].' '.$block[1].'</li>';
     }
?>
</div>

