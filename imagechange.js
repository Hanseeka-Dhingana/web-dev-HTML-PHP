var path;

var back = 1; 

function counterimage(){
     
    
     next++;
    if(back == 10)
    {
        back == 1;
    }
    
     path =  back+"jfif";
     document.getElementById('image').scr = path;
     
}