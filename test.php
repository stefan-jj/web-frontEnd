<html>
    <head>
        <link rel="stylesheet" href="test.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <script>
            function showGnome() {
                var colour = document.getElementById("col");
                var item = document.getElementById("item");
                var colSel = colour.options[colour.selectedIndex].value;
                var itemSel = item.options[item.selectedIndex].value;
                
                if (colSel == "" && itemSel == "") {
                    document.getElementById("prods").innerHTML = "";
                    return;
                } else { 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("prods").innerHTML = this.responseText;
                        }
                    };
                    
//                    var text = itemSel+"&colour="+colSel;
//                    console.log(text);
                    
//                    xmlhttp.open("GET","getGnome.php?items=" + text,true);
                    xmlhttp.open("GET","getGnome.php?items=" + itemSel + "&colour=" + colSel,true);
                    xmlhttp.send();
                }
            }
        </script>
        
        
        <script src="simpleCart.js"></script>
        <script>
            simpleCart({
                checkout: { 
                    type: "PayPal" , 
                    email: "you@yours.com" 
                }
                tax: 		0.20,
		        currency: 	"GBR"
            });	
        </script>

        
        
        
    </head>
    <body onload="showGnome()">
        
        
        <div class="cartItems">
        
            <div class="simpleCart_shelfItem">
                <img src="gnome.png" height="200px" class="item_thumb" />
                <h2 class="item_name"> Awesome Gnome </h2>
                <input type="text" value="1" class="item_Quantity">
                <span class="item_price">£35.99</span>
                <a class="item_add" href="javascript:;"> Add to Cart </a>
            </div>
        
        </div>
        
        
        <div class="actualCart">
            <script>
            simpleCart({
                cartColumns: [
                    { attr: "name" , label: "Name" } ,
                    { attr: "price" , label: "Price", view: 'currency' } ,
                    { view: "decrement" , label: false , text: "-" } ,
                    { attr: "quantity" , label: "Qty" } ,
                    { view: "increment" , label: false , text: "+" } ,
                    { attr: "total" , label: "SubTotal", view: 'currency' } ,
                    { view: "remove" , text: "Remove" , label: false }
                ]
            });
            </script>
            
            <!-- create a checkout button -->
            <a href="javascript:;" class="simpleCart_checkout"><button>Checkout</button></a>
            <!-- button to empty the cart -->
            <a href="javascript:;" class="simpleCart_empty"><button>Empty</button></a>
            <!-- show the cart -->
            <div class="simpleCart_items"></div>
            <!-- cart total (ex. $23.11)-->
            <div class="simpleCart_total"></div>
            <!-- cart quantity (ex. 3) -->
            <div class="simpleCart_quantity"></div>
            <!-- tax cost (ex. $1.38) -->
            <div class="simpleCart_tax"></div>
            <!-- tax rate (ex. %0.6) -->
            <div class="simpleCart_taxRate">Tax 20%</div>
            <!-- shipping (ex. $5.00) -->
            <div class="simpleCart_shipping"></div>
            <!-- grand total, including tax and shipping (ex. $28.49) -->
            <div class="simpleCart_grandTotal"></div>
        </div>
        
        
        <div class="filter">
            
            
            
            <p>Filter</p>
        
            <form class="items">
              <select id="item" name="nameSelect" onchange="showGnome()">
                  <option selected value="all">All</option>
                  <option value="Cookie Gnome">Cookie Gnome</option>
                  <option value="Lamp Gnome">Lamp Gnome</option>
                  <option value="Mini Gnome">Mini Gnome</option>
                  <option value="Pretentious Gnome">Pretentious Gnome</option>
                  <option value="Whistling Gnome">Whistling Gnome</option>
                  <option value="Wise Gnome">Wise Gnome</option>
              </select>
            </form>
            
            <form class="colour">
            <select id="col" name="prodSelect" onchange="showGnome()">
              <option value="">Select a Colour:</option>
              <option value="red">Red</option>
              <option value="green">Green</option>
              <option value="blue">Blue</option>
              </select>
            </form>
            
            <br>
            <div id="prods"><b>Gnome results will be displayed here...</b></div>

            
        
            

        </div>
        
        
        
        
        
        
        
<!--        // previously working grid     -->
        
<!--
        
        <?php
        $con=mysqli_connect("localhost","root","","products");
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM allproducts");

        
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

        
        
-->
        
        
        
        
        
        
        
    </body>
    
</html>