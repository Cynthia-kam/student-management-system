
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>READ</title>
</head>
<body>
      
    <h1><center>READ</center></h1>
<table  width=800 cellpadding="5"  align="center">
    <center> <a href="{{ url('/student/create') }}"><button style="background-color:lightgreen;border-radius: 7px;height: 40px; width: 100px;font-family: cursive;font-size: 20px;">Add new</button></a></center>
    <thead>
     <tr style="background-color: darkblue; color: white; font-family: cursive;">
                                        
            <th>RegNO</th>
            <th>NAMES</th>
            <th>DEPARTMENT</th>
            <th>PHOTO</th>
     </tr>
    </thead>
    <tbody style="background-color:lightsteelblue;font-size: 20px;font-family: serif;padding: 10px;">
      @foreach($students as $item)
            <tr style="font-family: monospace;"><td ><b>{{ $item->regno }}</b></br><a href="{{'/student/'.$item->regno.'/edit'}}" style="text-decoration: none;"><button style="border-radius: 7px;background-color: lightcyan;"><img src="image/editing.png" width="20" height="20">Edit</button> &nbsp<button style="border-radius: 7px;background-color: white;"><img src="image/bin.png" width="20" height="20"/>delete</button></td> 
                <td>{{$item->name}}</td> 
                <td>{{$item->department}}</td> 
                <td>{{$item->photo}} <img id="output"/>
      <script type="text/javascript">
          var loadFile=function(event){
            var output=document.getElementById('output');
            output.scr= URL.createObjectURL(event.target.files[0]);
            output.onload=function(){
                URL.revokeObjectURL(output.scr)
            }
          };
      </script></td></tr>  

      @endforeach
    </tbody>

</table>
</body>
</html>
