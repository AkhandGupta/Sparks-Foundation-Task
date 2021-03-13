<!DOCTYPE html>
<html>
    <head>
        <title>Customer Details</title>
        <style>
            table{
                
           text-align: center;
             
             border:2px solid black;
             font-family:monospace;
             background-color:#00b0ff;
             font-size:20px;
             
  
         }
         th{
             background-color:blue;
             color:white;

         }
         td{
             padding:5px;
         }
         tr:nth-child(even){background-color:#f2f2f2;}
         h3{color:green;}
         </style>
</head>
<body>

<h3>"Transaction Successfull"</h3>
<h1>Customer's Details</h1>
<table>


    <tr>
        <th>Name </th>
        <th>Email Id </th>
        <th>Balance</th>
    </tr>
    <?php
     $conn=new mysqli('localhost','root','','bank');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }

    $sql="Select Name,Email,Balance from bank";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo"<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Balance"]."</td></tr>";

        }
        echo"</table>";
    }
    else{
        echo"0 result";
    }
    $conn->close();
    ?>
    
</table>


</body>
</html>