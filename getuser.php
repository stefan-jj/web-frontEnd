<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>

<?php
//$q = intval($_GET['q']);
$q = (isset($_GET['q']) ? $_GET['q'] : null);

$con = mysqli_connect('localhost','root','','products');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM allproducts WHERE name = '".$q."'";
$result = mysqli_query($con,$sql);


echo "<div id='prodContainer'>";
echo "<ul class='products'>";    
while($row = mysqli_fetch_array($result))
{

    if($row['name'] == "Pretentious Gnome"){
        echo "<li>";
        echo "<a href='" . $row['link'] . "'>";
        echo "<img src='" . $row['image'] . "'" . "width='190px'" . ">";
        echo "<h4>" . $row['name'] . "</h4>";
        echo "<p>" . $row['price'] . "</p>";
        echo "</a>";
        echo "</li>";
}
    
    else{            
        echo "<li>";
        echo "<a href='" . $row['link'] . "'>";
        echo "<img src='" . $row['image'] . "'>";
        echo "<h4>" . $row['name'] . "</h4>";
        echo "<p>" . $row['price'] . "</p>";
        echo "</a>";
        echo "</li>";
    }
            
}
echo "</ul>";
echo "</div>";
     
mysqli_close($con);
?>
</body>
</html>