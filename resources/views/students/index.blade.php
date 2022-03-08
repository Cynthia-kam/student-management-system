
<!DOCTYPE html>
<html>
<style type="text/css">
       .body{

    background-repeat: no-repeat;
    
    float: right;
   }
     .main{ 
   
height: 100%;
width: 50%;
float: left;

}
.edit{
    width: 30%;
    height: 70%;
    vertical-align: right;
}
table{
    border-collapse: collapse;
   
}
tr{
    border-bottom: 2pt solid black;
}

</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>READ</title>
</head>
<body class="body">
      
    
    <div class="main">
<table cellpadding="30px">
    <center> <a href="{{ url('/student/create') }}"><button style="background-color:lightgreen;border-radius: 7px;height: 40px; width: 100px;font-family: cursive;font-size: 20px;">Add new</button></a></center>
    <thead>
     <tr style="background-color: black; color: white; font-family: cursive;">
                                        
            <th>RegNO</th>
            <th>NAMES</th>
            <th>DEPARTMENT</th>
            <th>PHOTO</th>
            <th>OPERATION</th>

            
     </tr>
    </thead>
    <tbody style="font-size: 20px;font-family: serif;">

      @foreach($students as $item)
            <tr style="font-family: monospace;"><td ><b>{{ $item->regno }}</b></td>

           
                <td>{{$item->name}}</td> 
                <td>{{$item->department}}</td> 
                <td> <img src="/image/default.png" style="width:100px;height: 100px;margin-left: 60px; border-radius: 50%;" />
                </td>
            <td> <a href="{{'/student/'.$item->regno.'/edit'}}" style="text-decoration: none;"><img src="image/editing.png" width="20" height="20">edit</a></br>

                <form method="post" action="{{'/student'.'/'.$item->regno }}"  accept-charset="UTF-8" >
                     {{ method_field('DELETE') }}
                    {{ csrf_field() }}
               <a href=""  onclick="return confirm(&quot;Confirm delete?&quot;)" ><button type="submit"><img src="image/bin.png" width="20" height="20" >delete</button></a>
                </form>
</td>
            </tr>  


      @endforeach

    </tbody>

</table>


</div>
</body>
</html>
