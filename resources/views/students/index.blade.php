
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>READ</title>
</head>
<body>
<table  width=1200 cellpadding="5"  align="center">
    <thead>
     <tr style="background-color: darkblue; color: white; font-family: cursive;text-align: center;">
                                        
            <th>RegNO</th>
            <th>NAMES</th>
            <th>DEPARTMENT</th>
            <th>PHOTO</th>
     </tr>
    </thead>
    <tbody style="background-color:lightsteelblue;font-size: 20px;font-family: serif;padding: 10px;">
      @foreach($students as $item)
            <tr style="font-family: monospace;"><td ><b>{{ $item->regno }}</b></td> 
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
