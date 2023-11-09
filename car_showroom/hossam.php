<?php

// this is post coulmns in database.
$car_manufacturer=$_POST["car_manufacturer"];
$car_model_name=$_POST["car_model_name"];
$your_address=$_POST["your_address"];
$email_address=$_POST["email_address"];
$contact_number=$_POST["contact_number"];

/*this is all privileges in database for php my admin*/
// assign name of server it will be localhost or 127.0.0.1
$server_name= "localhost";
// assign user name it will be root.
$user_name= "root";
// assign password it will be defulat no password.
$password= "";
// name of database it will be showroom.
$db_name= "showroom";


// create connection with server.
$connection= new mysqli($server_name,$user_name,$password,$db_name);
// here make queries in database so insert the columns and values.
$query_hossam1 = "insert into showroom() values('$car_manufacturer','$car_model_name','$your_address','$email_address','$contact_number')";
// this connection database with server.
mysqli_query($connection,$query_hossam1);
// this is select all columns from table showroom.
 $query_hossam2= "select * from showroom ";
 // this is connection with two quiers to display coulmns.
 $results_hossam= mysqli_query($connection,$query_hossam2);

 echo "<br>";

 // printing or display coulmns
 echo "<table>
        <thead>
 
 <tr>

     <th>car_manufacturer</th>
     <th>car_model_name</th>
     <th>email_address</th>
     <th>contact_number</th>
 </tr>
 <thead>";
 
// viewing or display a table on srever so add int database in php admin.
while($row = mysqli_fetch_array($results_hossam)){
    echo "
    <tr>
    <td>".$row['car_manufacturer']."</td>
    <td>".$row['car_model_name']."</td>
    <td>".$row['email_address']."</td>
    <td>".$row['contact_number']."</td>

</tr> ";
     
 }


// this is close connection on server.
$connection -> close();


?>