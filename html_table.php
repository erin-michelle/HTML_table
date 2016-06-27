<?php

$users = array( 
					   array('first_name' => 'Michael', 'last_name' => 'Choi'),
					   array('first_name' => 'John', 'last_name' => 'Supsupin'),
					   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
					   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
					   array('first_name' => 'ET', 'last_name' => 'Phone Home'),
					   array('first_name' => 'Michael', 'last_name' => 'Choi'),
					   array('first_name' => 'John', 'last_name' => 'Supsupin'),
					   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
					   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
					   array('first_name' => 'ET', 'last_name' => 'Phone Home'),
					   array('first_name' => 'Michael', 'last_name' => 'Choi'),
					   array('first_name' => 'John', 'last_name' => 'Supsupin'),
					   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
					   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
					   array('first_name' => 'ET', 'last_name' => 'Phone Home')
				

					);
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
   </script>
   <style>

   .highlight:nth-child(6) {
   		background-color: black;
   		color: white;
   }

    .highlight:nth-child(11) {
   		background-color: black;
   		color: white;
   }

    .highlight:nth-child(16) {
   		background-color: black;
   		color: white;
   }

   	th, td {
   		text-align: center;
   		padding: 5px;
   	}

     </style>
</head>
<body>
	<div class='col-md-6'>
		<table class = "table table-striped">
			<thead>
				<tr>
					<th>User #</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Full Name</th>
					<th>Full Name is upper case</th>
					<th>Length of full </th>
				</tr>

					
					<?php foreach ($users as $key => $person) { ?>
						

							<tr class="highlight">	



								<td><?= $key + 1 ?></td> 
								<td><?= $person['first_name'] ?></td>
								<td><?= $person['last_name'] ?></td>
								<td><?= $person['first_name'] . " " . $person['last_name'] ?></td>
								<td><?= strtoupper($person['first_name'] . " " . $person['last_name']) ?></td>
								<td><?= strtolower($person['first_name'] . " " . $person['last_name']) ?></td>

							</tr>	
					
						<?php } ?>	
			</thead>

			<tbody>


				

			</tbody>	
		</table>
	</div>
</body>

</html>