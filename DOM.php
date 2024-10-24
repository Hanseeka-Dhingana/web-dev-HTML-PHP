<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- <script src = "DOM.js"> </script> -->
     <script>
        function changeimage(){
            document.getElementById("but").style.backgroundColor = "red";
        }
     </script>
   
</head>
<body>
    
    <p id = 'q'>Hello World</p>
    <input id = "but" type="button" onclick = 'changeimage()', value = "change the content"  style = " background-color: lightblue; height: 30px ">
   
</body>
</html>