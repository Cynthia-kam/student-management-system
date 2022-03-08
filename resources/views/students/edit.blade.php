<!DOCTYPE html>
<html>
<style type="text/css">
     .main{
margin-top: 150px;
height: 100%;
width: 50%;

float: right;
   } 
</style>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE</title>
</head>
<body class="main">
 

<form action="{{ url('student/'.$students->regno) }} " method="POST">
{!! csrf_field() !!}
@method("PATCH")
    <table width=600 height=600 
      style="font-size: 20px;text-align: center;"  >


<tr height="100%"><td ><h1 style="font-family: sans-serif;color: forestgreen;"><center><u>UPDATE</u></center></h1>
<table style="font-family:!important;font-weight: bold;background-color: beige;border-radius: 10px;" >
  <tr><td>Registration number:</td><td><input style="height: 30px;font-size: 16pt;border-radius: 5px;text-align:center; " type="text" name="regno"  size="30" value="{{$students->regno}}" ></td>
   <tr><td>Name:</td><td><input style="height: 30px;font-size: 16pt;border-radius: 5px;text-align: center;"type="text" name="name" size="30" value="{{$students->name}}"></td></tr>

 <tr><td>Department:</td><td><input style="height: 30px;font-size: 16pt;border-radius:5px; text-align:center" type="text" name="department"  size="30" value="{{$students->department}}"></td></tr>
     <tr> <td>Photo</td><td><input type="file" id="img" name="" accept="image/*" ></td>
     <!--  <img id="output"/>
      <script type="text/javascript">
          var loadFile=function(event){
            var output=document.getElementById('output');
            output.scr= URL.createObjectURL(event.target.files[0]);
            output.onload=function(){
                URL.revokeObjectURL(output.scr)
            }
          };
      </script> -->

      </td></tr>
 <tr><td colspan="5"><center><input style="font-size:20px; background-color: lightblue;" type="submit" name="" value="update"></center></td></tr>       

</table>


</td></tr>


</body>
</html>