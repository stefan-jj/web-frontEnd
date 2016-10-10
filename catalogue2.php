<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>NB Gardens' Gnometastic Website</title>
        <meta name="description" content="An exiting website from which to buy gnomes">
        <link rel="stylesheet" href="style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="javascript.js"> 
        </script>
        
        <script>
          $( function() {
            $( "#formContainer" ).draggable();
          } );
        </script>
        
        <script src="simpleCart.js"></script>
        <script>
            simpleCart.currency("GBP");
            
            simpleCart({
                cartColumns: [
                    { attr: "name" , label: "Item:" } ,
//                    { attr: "price" , label: "Price", view: 'currency' } ,
//                    { view: "decrement" , label: false , text: "-" } ,
                    { attr: "quantity" , label: "Qty" } ,
//                    { view: "increment" , label: false , text: "+" } ,
//                    { attr: "total" , label: "SubTotal", view: 'currency' } ,
//                    { view: "remove" , text: "Remove" , label: false }
                ]
            });
            
        </script>
        
    </head>
    
    <body onload="showGnome()">
        
        <div id="pageWrap">
        <div class="top">
            <img src="topbanner.png" width="890" height="90">
        </div>
        
        <div class="menuWrap">
        <div class="menu">
            <ul class="nav" id="nav">
                <li><a href="index.php">Home</a></li>
<!--                <li><a href="catalogue.html">Catalogue</a></li>-->
                <li><a href="catalogue2.php">Catalogue</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
            <div class="cart">
                <div id="log">
                    <button class="logBut" onclick="document.getElementById('formContainer').style.display='block'">Login</button>
                </div>
                
                <div class="cartImg">
                <img src="cart.png" height="40" width="40">
                </div>
            </div>
        </div>
        
        <div id="formContainer">
        <form action="action_page.php">
            <span onclick="document.getElementById('formContainer').style.display='none'" 
        class="close" title="Close Modal">&times;</span>
          <div class="imgcontainer">
            <img src="login.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="logButton">Login</button>
            <input type="checkbox" checked="checked"> Remember me
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
        </div>
        
            
        <div id="panelCon">
        <div id="panelContainer2">
            <div class="panel">
            <br />
            <br />
                <p><b>The following is in your cart</b></p>
                <span class="simpleCart_quantity"></span> items - <span class="simpleCart_total"></span>
<!--                <a href="javascript:;" class="simpleCart_checkout">Checkout</a>-->
                <br>
                <div class="simpleCart_items"><span class="item_name"></span><span class="item_quantity"></span></div>
                <br>
                <br>
                <a href="javascript:;" class="simpleCart_checkout"><button>Checkout</button></a>
                <button class="simpleCart_empty">Empty</button>
            </div>
            <div class="pull-me2">Cart Details</div>
        </div>
        </div>
            
        <div class="banner">
            <img src="bannerSpring.png">
        </div>
        
        <div class="mainCat2">
            
            <div class="titleP">
                <p>
                    Our Products
                </p>
                
            </div>
            
            <div class="prodcuts1">
                <p id="filt">Filter Products</p>
        
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
                  <option selected value="">Specify Colour:</option>
                  <option value="red">Red</option>
                  <option value="green">Green</option>
                  <option value="blue">Blue</option>
                  </select>
                </form>
                
                <form class="price">
                <select id="pri" name="priceSelect" onchange="showGnome()">
                  <option selected value="">Order by Price:</option>
                  <option value="ASC">Ascending</option>
                  <option value="DESC">Descending</option>
                </select>
                </form>

                <br>
                <div id="prods"><b>Gnome results will be displayed here...</b></div>

                
            
            </div>
            
            
            
             
<!--
            <div id="prodContainer">
                <ul class="products">
                    <li>
                        <a href="#">
                            <img src="gnome2.png">
                            <h4>Whistling Gnome</h4>
                            <p>£20.00</p>
                        </a>
                    </li><li>
                        <a href="#">
                            <img src="gnome3.png">
                            <h4>Lamp Gnome</h4>
                            <p>£25.00</p>
                        </a>
                    </li><li>
                        <a href="#">
                            <img src="gnome.png">
                            <h4>Mini Gnome</h4>
                            <p>£75.00</p>
                        </a>
                    </li><li>
                        <a href="#">
                            <img src="gnome4.png">
                            <h4>Cookie Gnome</h4>
                            <p>£45.00</p>
                        </a>
                    </li><li>
                        <a href="#">
                            <img src="gnome5.png" width="190px">
                            <h4>Pipe Gnome</h4>
                            <p>£250.00</p>
                        </a>
                    </li><li>
                        <a href="#">
                            <img src="gnome6.png">
                            <h4>Wise Gnome</h4>
                            <p>£65.00</p>
                        </a>
                    </li>
                </ul>
            </div>
-->
                
            
        
        <div class="footer">
            <p>
                Company info and sitemap etc
            </p>
        </div>
        </div>
    </body>
    
</html>