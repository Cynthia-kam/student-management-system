
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE PAGE</title>
    

</head>
<body>
    <h1><center><u>CREATE</u></center></h1>
    <form action="{{ url('student') }} " method="POST">
{!! csrf_field() !!}
    <table width=1200 height=600 
     align="center" style="font-size: 20px;" ><tr style="font-family: fantasy;" >


<tr height="30%" style="background-color: lightblue;"><td >
<table style="font-family:sans-serif;">
  <tr><td>Registration number:</td><td><input style="height: 30px;font-size: 16pt;border-radius: 5px;" type="text" name="regno"  size="30" required ></td>
      <td>Name:</td><td><input style="height: 30px;font-size: 16pt;border-radius: 5px;"type="text" name="name" size="30"></td></tr>

 <tr><td>Department:</td><td><input style="height: 30px;font-size: 16pt;border-radius:5px;" type="text" name="department"  size="30"></td>
      <td>Photo</td><td><input type="file" name="photo" accept="image/*" >
     

      </td></tr>
 <tr><td colspan="5"><center><input style="font-size:20px; background-color: lightcyan;" type="submit" name="" value="save">&nbsp &nbsp<input style="font-size:20px;background-color: lightcyan;" type="reset" name="" value="Clear" onclick=""></center></td></tr>       

</table>


</td></tr>


<tr><td>


 </td></tr>   
</body>
</html>