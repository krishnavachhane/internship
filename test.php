<?php
$_temp=$_REQUEST;
$location=$_REQUEST['location'];
$count=$_REQUEST['count'];
$Category=$_REQUEST['cat'];
echo"internship at [$location] <br> Number:[$count] <br> Category [$cat]";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>Internship at<?php echo $location?></h3>
   <div class="">
    Found<?php echo $count ?>Internships:
   </div>
   <?php
   for{$i=0;$i<$count;$i++}
   echo
   '
   <div style="border:1px solid grey;margin:1rem;padding:1rem">
    Internship'.($i+1).'
    <br>
    Category:'.$Category.'
    <br>
    Internship details
    
   </div>
   ';
   ?> 
</body>
</html>
