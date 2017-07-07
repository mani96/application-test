<!DOCTYPE html>
<html lang="">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		
	</head>
	
	<body>
		
		<?php
			$people = array(
			array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
			array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
			array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
			array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
			array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
		); ?>
		<div class="table-responsive container text-center">  
			<table class="table">
				<tbody>
					<?php foreach($people as $people)
						{ 
						?>
						
						<tr>    
						<td><?=$people['id']?></td>
						<td><?=$people['first_name']?></td>
						<td><?=$people['last_name']?></td>
						<td><?=$people['email']?></td>
						<td><button class="btn btn-primary"onclick="myFunction('<?=$people["first_name"]?>' , '<?=$people["email"]?>')">Click here</button></td>
						
						</tr>
						<?php 
						}    ?>
						</tbody>
						</table>
						</div>
						<script>
						function myFunction(firstname, emial){
						alert("Firstname: "+firstname+", Email Id: "+emial);
						}
						
						</script>
						</body>
						</html>
												
