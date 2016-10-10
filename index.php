<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>NB Gardens' Gnometastic Website</title>
        <meta name="description" content="An exiting website from which to buy gnomes">
        <link rel="stylesheet" href="style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <script type="text/javascript" src="javascript.js"> </script>
        
        
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        
        <script>
          $( function() {
            $( "#formContainer" ).draggable();
          } );
        </script>
                
    </head>
    
    <body>
        
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
            
        <div class="banner">
            <img src="bannerSpring.png">
        </div>
        
        
            
        <div class="caroWrap">
            <div class="caro">
              <div class="item">
                <a href="catalogue2.php"><img src="gnome.png" height="60" width="40"/></a>
                <p>Mini-gnome</p>
              </div>
              <div class="item">
                  <a href="catalogue2.php"><img src="gnome2.png" height="60" width="40"/></a>
                <p>Whistle gnome</p>
              </div>
              <div class="item">
                  <a href="catalogue2.php"><img src="gnome3.png" height="60" width="40"/></a>
                <p>Light gnome</p>
              </div>
              <div class="item">
                  <a href="catalogue2.php"><img src="gnome.png" height="60" width="40"/></a>
                <p>Mini-gnome</p>
              </div>
              <div class="item">
                  <a href="catalogue2.php"><img src="gnome2.png" height="60" width="40"/></a>
                <p>Whistle gnome</p>
              </div>
              <div class="item">
                  <a href="catalogue2.php"><img src="gnome3.png" height="60" width="40"/></a>
                <p>Light gnome</p>
              </div>
            </div>
        </div>
            
        <script type="text/javascript" src="slick/slick.min.js"></script>
        
        <script type="text/javascript" src="caroStart.js"> </script>
            
        <div class="main">
            <div class="sidePanel">
                <h2><u>Latest News</u></h2>
                <div class="news">
                    <p id="head1"><b>Todays news</b></p>
                    <p id="text1">
                        Read here to find out the latest news regarding NB Gardens.
                    </p>
                </div>
                
                <div class="news">
                    <p id="head1"><b>Todays news</b></p>
                    <p id="text1">
                        Read here to find out the latest news regarding NB Gardens.
                    </p>
                </div>
                
                <div class="news">
                    <p id="head1"><b>Todays news</b></p>
                    <p id="text1">
                        Read here to find out the latest news regarding NB Gardens.
                    </p>
                </div>
                
            </div>
            
            <div class="mainText">
                <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus lacinia pretium. Sed efficitur volutpat convallis. Integer non libero ornare, aliquam eros a, tempus lacus. Morbi sodales, felis feugiat mollis placerat, felis lorem sodales arcu, eu eleifend sem erat quis leo. Vestibulum risus nibh, auctor sed viverra non, placerat bibendum justo. Quisque tempus nec nisl vitae fringilla. Nunc varius arcu vel orci convallis, at blandit elit vehicula. 
                </p>
                <p>
                    Aliquam rutrum nunc mi, eu facilisis metus luctus in. Integer tempus convallis fringilla. Donec porttitor lobortis tellus porta pellentesque. Morbi pellentesque ornare nisi nec accumsan. Donec condimentum iaculis nibh, porttitor egestas sem consectetur vel. Aenean aliquam nibh neque, vitae rhoncus ligula lobortis non. Aenean enim dolor, dictum quis erat sit amet, eleifend rhoncus metus. Morbi non maximus mi. Nulla faucibus porttitor sapien nec bibendum. Curabitur est ante, suscipit nec augue quis, mollis ornare ante.
                </p>
                <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus lacinia pretium. Sed efficitur volutpat convallis. Integer non libero ornare, aliquam eros a, tempus lacus. Morbi sodales, felis feugiat mollis placerat, felis lorem sodales arcu, eu eleifend sem erat quis leo. Vestibulum risus nibh, auctor sed viverra non, placerat bibendum justo. Quisque tempus nec nisl vitae fringilla. Nunc varius arcu vel orci convallis, at blandit elit vehicula. 
                </p>
                <p>
                    Aliquam rutrum nunc mi, eu facilisis metus luctus in. Integer tempus convallis fringilla. Donec porttitor lobortis tellus porta pellentesque. Morbi pellentesque ornare nisi nec accumsan. Donec condimentum iaculis nibh, porttitor egestas sem consectetur vel. Aenean aliquam nibh neque, vitae rhoncus ligula lobortis non. Aenean enim dolor, dictum quis erat sit amet, eleifend rhoncus metus. Morbi non maximus mi. Nulla faucibus porttitor sapien nec bibendum. Curabitur est ante, suscipit nec augue quis, mollis ornare ante.
                </p>
            </div>
        </div>
        
            
        <div id="panelContainer">
            <div class="panel">
            <br />
            <br />
                <p><b>You found the limited edition product!</b></p>
                <img src="gnome4.png" height="200" width="200">
            </div>
            <p class="slide"><div class="pull-me">Secrets</div></p>
        </div>
        
            <div class="footer">
            <p>
                Company info and sitemap etc
            </p>
        </div>
        </div>
    </body>
    
</html>