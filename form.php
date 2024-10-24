<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
        include("dbcom.php");

      ?>

   <form action="form.php" method = "GET" autocomplete = "off">

   Name:  <input type="text"  id = "name" placeholder = "Enter you name"   onkeyup = "showHinnt(this.value)"> <br><br>
   
   Father Name: <input type = "text" id = "fname" placeholder = "Enter your father name"> <br><br>
   CMS-Id: <input type = "text" id= "cma"  placeholder = "022-22-2222"> <br><br>
   Age: <input type="age" id = "age"> <br><br>
   Gender: Male <input type="radio" id = "gender"> Female  <input type="radio" id = "gender"> <br><br>
   Phone Number: <input type="tel" id = "num"> <br><br>
   department: <select  id="dept" >
                 <option >BSCS</option>
                 <option >BBA</option>
                 <option >BAF</option>
                 <option >BEd</option>
                 <option >AI</option>
                 <option >Other </option>
                
   </select><br><br>

   University: <select  id="Uni" >
                 <option ></option>
                 <option >Sukkur IBA University</option>
                 <option >Aror University</option>
                 <option >Sindh University</option>
                 <option >IQRA University</option>
                 <option >Zabist University</option>
                 <option >Other </option>
                
   </select>  <br><br>

   CV: <input type="file" id= "cv" placeholder = "upload file here"> <br><br>
  
   <input type="submit" value = "submit"  id = "sbt">

  </form>

  <?php
     if(isset($_GET["sbt"]))
     {
        $tname = $_GET['name'];
         $tfname = $_GET['fname'];
         $tage = $_GET['age'];
     }
     
     ?>


  <table  border-radius = 10% >
       <td>
          <td>RollNo</td>
          <td>Name</td>
          <td>FatherName</td>
          <td>Age</td>

       </td>
       
       <tr>
           <td><?php  echo 1 ?></td>
           <td><?php echo $tname ?></td>
           <td><?php echo $tfname ?></td>
           <td><?php echo $tage?></td>
       </tr>

     </table>
    


</body>
</html>