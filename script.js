function m1(){
    var sp1 = document.getElementById("sp1");
    sp1.className = "sp-1 sp1-click";
    
    var div1 = document.getElementById("div1");
    div1.className = "div-1 i2";
    
}

function m2(){
    var sp2 = document.getElementById("sp2");
    sp2.className =  "sp-1 sp1-click";
    
    var div1 = document.getElementById("div1");
    div1.className = "div-1 i2";
    
}

function m3(){
    var sp3 = document.getElementById("sp3");
    sp3.className =  "sp-1 sp1-click";
    
    var div1 = document.getElementById("div1");
    div1.className = "div-1 i3";
    
}

function m4(){
   var sp4 = document.getElementById("sp4");
    sp4.className =  "sp-1 sp1-click";
    
    var div1 = document.getElementById("div1");
    div1.className = "div-1 i4";
    
}

function m5(){
    var sp5 = document.getElementById("sp5");
    sp5.className =  "sp-1 sp1-click";
    
    var div1 = document.getElementById("div1");
    div1.className = "div-1 i5";
}

var x = 2;

function n(){
    var div1 = document.getElementById("div1");
    div1.className = " div-1 i"+x;
    x++;
    
    if(x===6){
        x = 1;
    }
}