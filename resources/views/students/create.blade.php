
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
   .main{
margin-top: 150px;
height: 100%;
width: 50%;


   } 
   .body{
    background-image: url(/image/bg4.jpg);
    background-repeat: no-repeat;
    background-size: 57% 120%;
    float: right;
    
   }
   input[type=text]{
     border: 2px solid red;
   }
   input[type=submit],[type=reset]{
    border-radius: 7px;
    width: 70px;
    height: 50px;
     border: 2px solid blanchedalmond;
   }
   

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE PAGE</title>
    

</head>
<body class="body">

    <div class="main">

    <form enctype="multipart/form-data" action="{{ url('student') }} " method="POST" style="font-size: 20px;" style="font-family: fantasy;">
{!! csrf_field() !!}
   

  <label>Registration number:</label><input style="height: 30px;font-size: 16pt;border-radius: 5px;" type="text" name="regno"  size="30" required ></br></br>

   <label>Name:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input style="height: 30px;font-size: 16pt;border-radius: 5px;"type="text" name="name" size="30"></br></br>

 <label>Department:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input style="height: 30px;font-size: 16pt;border-radius:5px;" type="text" name="department"  size="30"></br></br>
<label>Photo</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="file" name="photo"  ></br></br>
     

 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp     
 <input style="font-size:20px; background-color: lightcyan;" type="submit" name="" value="save">&nbsp &nbsp<input style="font-size:20px;background-color: lightcyan;" type="reset" name="" value="Clear" onclick="">       







  </form>
</div>
</body>
</html>