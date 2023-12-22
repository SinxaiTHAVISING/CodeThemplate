<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <fieldset>
        <legend>POIN</legend>
        <input type="text" name="score" id="" >
    </fieldset>
    <button type="submit">check</button>
</form>
<?php
if($_GET['score']!=""){
    $scr=$_GET['score'];
    if($scr>100){
        echo"Enter try again!";
    }
    elseif($scr>=90){
        echo"A";
    }
    elseif($scr>=80){
        echo"B+";
    }
    elseif($scr>=70){
        echo"B";
    }
    elseif($scr>=60){
        echo"C+";
    }
    elseif($scr>=50){
        echo"C";
    }
    elseif($scr>=40){
        echo"D+";
    }
    elseif($scr>=30){
        echo"D";
    }
    else{
        echo"F";
    }
};
$x = 1;
while($x <= 5) {
    echo "<br/> ";
  echo "The number <br>";
  $x++;

}
// ------------------------Form Example----------------------------------------
// if(isset($_POST[btn])!=""){
//     function cal(){
    // Welcome  echo $_GET["name"];<br>
    //  Your email address is: echo $_GET["email"];
    
// }
// }
// <html>
// <body>

// <form action="welcome_get.php" method="get">
// Name: <input type="text" name="name"><br>
// mail: <input type="text" name="email"><br>
// <input type="submit">
// </form>

// </body>
// </html>
?>
</body>
</html>