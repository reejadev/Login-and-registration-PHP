<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" href="txt/text.css" type="text/css">	
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	

</head>

<body>

<div style="padding:60px;">


<h1 align="left"> Registration </h1>

<p align="left"><b> Please fill in the form</b></p>


<form action="config.php" method="post">



 <table align="left" width="50%">

   <tr>
	<th>First Name:</th>
	<th><input type="text" id="t1" name="t1" size="20" required/></th>
   </tr>
 <tr>
	<th>Last Name:</th>
	<th><input type="text" id="t2" name="t2" size="20"required/></th>
   </tr>
   
 <tr>
	<th >Email:</th>
	<th> <input type="email" id="t3" name="t3" size="20"required/></th>
   </tr>

 
<tr>
	<th>Password:</th>
	<th> <input type="password" id="t4" name="t4" size="20"required/></th>
   </tr>

<tr>

	<th>Phone:</th>
	<th> <input  type="text" id="t5" name="t5" size="20"required/></th>
   </tr>


 <tr align="left">

<th align="right"></th>


	<th> <input class="mt-3" type="Submit" name="create" value ="Submit"> </th>
	


 </tr>

   </table>



</form>


</div>
</body>
</html>
