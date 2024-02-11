<?php

    $name = "alamin";
    $id = 12;
    $cgpa = 3.6;

    //$data = print($name);
    //echo $data;

    $std = [1,'alamin', 4.6, 'alamin@aiub.edu'];
    //$std = array(1,'alamin', 4.6, 'alamin@aiub.edu');
    // echo $std[1];

    // $stds = [
    //             [1,'alamin', 4.6, 'alamin@aiub.edu'],
    //             [2,'abc', 2.6, 'abc@aiub.edu'],
    //             [3,'xyz', 3.6, 'xyz@aiub.edu'],
    //         ];

    // echo $stds[1][3];
    //$student = ['id'=>1, 'name'=> 'alamin', 'email'=>'alamin@aiub.edu'];
    //echo $student['name'];

    // $students = [
    //                 ['id'=>1, 'name'=> 'alamin', 'email'=>'alamin@aiub.edu'],
    //                 ['id'=>2, 'name'=> 'xyz', 'email'=>'xyz@aiub.edu'],
    //                 ['id'=>3, 'name'=> 'abc', 'email'=>'abc@aiub.edu']
    //             ];

    $students = [
                    's1'=>['id'=>1, 'name'=> 'alamin', 'email'=>'alamin@aiub.edu'],
                    's2'=>['id'=>2, 'name'=> 'xyz', 'email'=>'xyz@aiub.edu'],
                    's3'=>['id'=>3, 'name'=> 'abc', 'email'=>'abc@aiub.edu']
                ];

    //echo "Your Data is: ".$students['s3']['email']; 

    function sum($a, $b){
        return $a+$b;
    }

    //echo sum(10,40);

    // for($i=0; $i<10; $i++){
    //     echo "<h1>My name is Alamin </h1>";
    // }

    // if( 1 == '1'){
    //     echo "true";
    // }else{
    //     echo "false";
    // }

    echo "<table border=1>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>CPGA</td>
            </tr>";

    for($i=0; $i<10; $i++){
        echo "<tr>
                <td>{$i}</td>
                <td>Alamin</td>
                <td>3.5</td>
            </tr>";
    }

    echo "</table>";

?>

<h1>Test</h1>