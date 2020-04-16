<html>
<body>
<a href="index.html" class="previous">&laquo; Previous</a>

<head>
<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<!-- Contact Form -->
<link href="contact-form/css/style.css" media="screen" rel="stylesheet" type="text/css">
<link href="contact-form/css/uniform.css" media="screen" rel="stylesheet" type="text/css">
</head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 6px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #333333;
  color: white;
}


a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
</head>
<?php
$name= $_REQUEST['search'];
echo '<h1 align="center"> '.$name.' </h1>';

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "car";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


      $sql = "SELECT * FROM car WHERE name='$name'"; 

         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
				$field1name = $row["name"];
				$field2name = $row["price"];
				$field3name = $row["mileage"];
				$field4name = $row["transmission"];
				$field5name = $row["fuel"]; 
				$field6name = $row["seating_capacity"]; 







echo '<table border="2" cellspacing="2" cellpadding="2" id="customers"> 
      <tr> 
          <th> <font face="Arial">Name</font> </th> 
		   <td>'.$field1name.'</td> 
		</tr>
		<tr>
			<th> <font face="Arial">Price</font> </th> 
		   <td>'.$field2name.'</td> 
		 </tr>
		 	<tr>
			<th> <font face="Arial">Mailage</font> </th> 
		   <td>'.$field3name.'</td> 
		 </tr>
		 	<tr>
			<th> <font face="Arial">Transmission</font> </th> 
		   <td>'.$field4name.'</td> 
		 </tr>
		 	<tr>
			<th> <font face="Arial">Fuel</font> </th> 
		   <td>'.$field5name.'</td> 
		 </tr>
		 	<tr>
			<th> <font face="Arial">Seating Capacity</font> </th> 
		   <td>'.$field6name.'</td> 
		 </tr>
		
          
      </tr> </br>';
 

				
				
				

				
				
				
				
				
               
		    }
         } else {
            echo "0 results";
         }





$conn->close();
?>
</body>
</html>