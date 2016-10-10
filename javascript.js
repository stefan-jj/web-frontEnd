

function purchase() {
    window.alert("You bought a gnome!");
}



var k = 0;
var l = 0;
var h = 0;
var s = 0;

function flip1() {
    var j = document.getElementById("card1");
    k += 180;
    j.style.transform = "rotatey(" + k + "deg)";
    j.style.transitionDuration = "0.5s"
}

function flip2() {
    var j = document.getElementById("card2");
    l += 180;
    j.style.transform = "rotatex(" + l + "deg)";
    j.style.transitionDuration = "0.5s"
}

function flip3() {
    var j = document.getElementById("card3");
    h += 180;
    j.style.transform = "rotatey(" + h + "deg)";
    j.style.transitionDuration = "0.5s"
}

function flip44() {
    var j = document.getElementByClass("productRight");
    s += 180;
    j.style.transform = "rotatey(" + s + "deg)";
    j.style.transitionDuration = "0.5s"
}




/* Product selection */


function showGnome() {
    var colour = document.getElementById("col");
    var item = document.getElementById("item");
    var price = document.getElementById("pri");
    var colSel = colour.options[colour.selectedIndex].value;
    var itemSel = item.options[item.selectedIndex].value;
    var priSel = price.options[price.selectedIndex].value;
        
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
                    
//      var text = itemSel+"&colour="+colSel;
//      console.log(text);
                    
//      xmlhttp.open("GET","getGnome.php?items=" + text,true);
    xmlhttp.open("GET","getGnome.php?items=" + itemSel + "&colour=" + colSel + "&price=" + priSel,true);
    xmlhttp.send();
    }
}
        




/* Slider Panel */

$(document).ready(function(){
    $('.pull-me').click(function(){
        $('.panel').slideToggle('slow');
    });
    
    $('.pull-me2').click(function(){
        $('.panel').slideToggle('slow');
    });
    
});















