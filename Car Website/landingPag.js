
//function to chnage the image to next
let next = 1;
function nextImage(){

    next++;

    if(next > 4)
    {
        next = 1;
    }

    var path = "images/Acura"+next+".jpg";
    document.getElementById("carChange").src = path;

}

//function to chnage the image to previous one
function prevImage(){
     next--;

     if(next == 0)
     {
        next = 4;
     }

     var path = "images/Acura"+next+".jpg";
     document.getElementById("carChange").src = path;
     
}

function FerrariModel(){

    document.getElementById("A").innerHTML = "TLX";
    document.getElementById("B").innerHTML = "MLX";
}

//function to change the value when the slider value change

window.onload = function() {
var slider = document.getElementById("myRange");
var output = document.getElementById("value");

output.innerHTML =  slider.value;

slider.oninput = function valueChange(){
      output.innerHTML = this.value;

   }
}