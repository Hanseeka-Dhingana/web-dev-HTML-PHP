<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="imagechange.css">
    <script>
      
   let nextnumber =2 ; 

   setInterval(Next, 1500);
   
   function Next(){
    nextnumber++;
    if(nextnumber > 10)
    {
        nextnumber = 1; 
    }

    document.getElementById("Image").src = "images\\"+nextnumber+".jfif";
}
    </script>
</head>
<body>


  <div  id = text>
      
  <h1 id = "time" >Happy Ganesh Chaturthi</h1>


  <img src="images\\1.jfif" alt="Ganesh Bagwan image" id = "Image">

 <h2 >Fri, Sep 6, 2024, 2:31 PM – Sat, Sep 7, 2024, 5:07 PM</h2>
</div>

    <h3 id = "h3"> 
      What is the Ganesh Chaturthi?
    </h3>
<div  class = "container">
    <h4>
     Ganesh Chaturthi, also known as Vinayaka Chaturthi or Vinayaka Chavithi or Vinayagar Chaturthi, 
     is a Hindu festival that tributes Hindu deity Ganesha. The festival is marked with the installation 
     of Ganesha's clay murtis privately in homes and publicly on elaborate pandals.
    </h4>

    <img src="images\\11.gif" alt=" Ganesh Bagwan"  width = 500px height = 300px  class ="Image">
     
</div>


   <h3>
    History
   </h3>
   <h2>
    Ganesha
   </h2>

   <div  class = "container">

    <img src="images\\12.gif"  height = 350px width = 500px   class ="Image">
    <h4>
    Though not alluding to the classical form of Ganapati, the earliest mention of Ganapati is found in the Rigveda.
    It appears twice in the Rigveda, once in shloka 2.23.1, as well as in shloka 10.112.9.[16][17][18] Both of these shlokas imply a role of Ganapati as
    "the seer among the seers, abounding beyond measure in food presiding among the elders and being the lord of an invocation",
     while the shloka in mandala 10 states that without Ganapati "nothing nearby or afar is performed without you", according to Michael.[16][19] However,
    it is uncertain that the Vedic term Ganapati which literally means "guardian of the multitudes", referred specifically to later era Ganesh, nor do the
    Vedic texts mention Ganesh Chaturthi.[20] It appears in post-Vedic texts such as the Grhya Sutras and thereafter ancient Sanskrit texts such as the Vajasaneyi
    Samhita, the Yajnavalkya Smriti and the Mahabharata mention Ganapati as Ganesvaras and Vinayak. Ganesh appears in the medieval Puranas in the form of "god of success, obstacle remover". 
    The Skanda Purana, Narada Purana and the Brahma Vaivarta Purana, in particular, profusely praise him. [21] Beyond textual interpretations, archaeological and epigraphical 
    evidence suggest Ganesha had become popular, was revered before the 8th century CE and numerous images of him are traceable to the 7th century or earlier.

    For example, carvings at Hindu, Buddhist, and Jain temples such as at the Ellora Caves, dated between the 5th and 8th-century show Ganesha reverentially seated with major Hindu goddess
    </h4>
    </div>
</body>
</html>