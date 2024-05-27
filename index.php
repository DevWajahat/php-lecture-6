<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <h1>Write table</h1>
<form method="get">
    <label for="">Enter number</label>
    <input type="number" name="number" id="number">
    <input type="submit" name="submit" value="submit"  id="">
</form> -->
<?php
// ALL TYPES FOR LOOPS
// For loop


// for($start = 0; $start <=10; $start++){
//     echo "<h1>Wajahat Abbas </h1>"."<br>";
// }


// While Loop 
// $start = 3;
// $i=1;
// while ($i <=10){
//     echo $start." x ".$i. " = ".$i*$start. "<br>";
// $i++;
// }
// if(isset($_GET['submit'])){
// $start =$_GET['number'];
// $i=1;
// do {
    // echo "3 ka table";
//        echo $start. " x ".$i. " = ". $i*$start. "<br>";
//        $i++;
// }
// while ($i<=10);
// }

for ($i=0; $i <10; $i++){
    echo "<br>";
    for($j=0; $j<$i;$j++){
        echo "0 1";
    }
}
for ($i=0; $i <100; $i++){
    echo "<br>";
    for($j=100; $j>$i;$j--){
        echo "0 1";
    }
}
?>
    
</body>
</html>
