<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>

<?php
//$q = intval($_GET['q']);
$colour = (isset($_GET['colour']) ? $_GET['colour'] : null);
$items = (isset($_GET['items']) ? $_GET['items'] : null);
$price = (isset($_GET['price']) ? $_GET['price'] : null);

//    echo "<br>";
//    echo $price;
//    echo "<br>";
//    echo "<br>";
//    //echo $colour;
//    echo "<br>";
//    echo "<br>";
    
$con = mysqli_connect('localhost','root','','products');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
    


$isAll = false;    
    
if ($items == "all"){
    $sql="SELECT * FROM allproducts";
    $isAll = true;
}
else{
    $sql="SELECT * FROM allproducts WHERE name = '".$items."'";
}

//if ($colour !== ""){
//    $sql .= "SELECT * FROM allproducts WHERE colour = '".$colour."'";
//}
//else{
//    
//}

    
switch($colour){
    case "red":
    //$sql .= " UNION SELECT * FROM allproducts WHERE colour = '".$colour."'";
        if($isAll == true){
            $sql .= " WHERE colour = '".$colour."'";
            break;
        }
        else{
            $sql .= " AND colour = '".$colour."'";
            break;
        }
        
    
    case "green":
        if($isAll == true){
            $sql .= " WHERE colour = '".$colour."'";
            break;
        }
        else{
            $sql .= " AND colour = '".$colour."'";
            break;
        }
        
    case "blue":
        if($isAll == true){
            $sql .= " WHERE colour = '".$colour."'";
            break;
        }
        else{
            $sql .= " AND colour = '".$colour."'";
            break;
        }
        
    default:
        break;
}
    
switch($price){
    case "ASC":
        $sql .= " ORDER BY price ASC";
        break;
        
    case "DESC":
        $sql .= " ORDER BY price DESC";
        break;
}
    
    //echo $sql;
    //echo "<br>";
    //echo $items;
$result = mysqli_query($con,$sql);



echo "<div id='prodContainer'>";
echo "<ul class='products'>";    
while($row = mysqli_fetch_array($result))
{

    if($row['name'] == "Pretentious Gnome"){
        echo "<div class='simpleCart_shelfItem'>";
        echo "<li>";
        //echo "<a href='" . $row['link'] . "'>";
        echo "<img src='" . $row['image'] . "'" . "width='190px'" . "class='item_thumb'" . ">";
        echo "<h4 class='item_name'>" . $row['name'] . "</h4>";
        echo "<div class='lowerTag'>";
        echo "<input type='text' value='1' class='item_Quantity'>";
        echo "<p class='item_price'>£" . $row['price'] . "</p>";
        //echo "</a>";
        echo "<p><a class='item_add' href='javascript:;'><button id='cartButton'>Add to Cart</button></a></p>";
        echo "</div>";
        echo "</li>";
        echo "</div>";
}
    
    else{            
        echo "<div class='simpleCart_shelfItem'>";
        echo "<li>";
        //echo "<a href='" . $row['link'] . "'>";
        echo "<img src='" . $row['image'] . "'" . "class='item_thumb'" . ">";
        echo "<h4 class='item_name'>" . $row['name'] . "</h4>";
        echo "<div class='lowerTag'>";
        echo "<input type='text' value='1' class='item_Quantity'>";
        echo "<p class='item_price'>£" . $row['price'] . "</p>";
        //echo "</a>";
        echo "<p><a class='item_add' href='javascript:;'><button id='cartButton'>Add to Cart</button></a></p>";
        echo "</div>";
        echo "</li>";
        echo "</div>";
    }
            
}
echo "</ul>";
echo "</div>";
    
    

    
    
    
    
    
//while($row = mysqli_fetch_array($result)) {
//    echo "Starting...";
//    echo $row['name'];
//    echo $row['price'];
//    echo $row['colour'];
//    
//}  
    
mysqli_close($con);
?>
</body>
</html>