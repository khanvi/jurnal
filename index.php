<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<p class="h2"> Школьный журнал </p>
	<table class="table table-dark">
		<?php 
			$con = mysqli_connect('127.0.0.1','root','','hv');
			$query = mysqli_query($con, "SELECT * FROM tabl");
		?>
  		<thead>
    		<tr>
      			<th scope="col">
      				#
      			</th>
      			<th scope="col">
      				Фамилия
      			</th>
      			<th scope="col">
      				Имя
      			</th>
      			<th scope="col">
      				19 Ноября
      			</th>
      			<th scope="col">
      				20 Ноября
      			</th>
      			<th scope="col">
      				21 Ноября
      			</th>
    		</tr>
  		</thead>
  		<tbody>
  			<?php
  				for ($i=1; $i <= $query->num_rows; $i++) {
  			?>
    		<tr>   
    				<?php
    					$vv = $query->fetch_assoc();
    					echo '<td>' . $i . '</td>' .
		     			'<td>' .$vv['username'] . '</td>'.
		     			'<td>' .$vv['pname'] . '</td>'.
		     			'<td>' .$vv['19_November'] . '</td>'.
		     			'<td>' . $vv['20_November'] . '</td>'.
		     			'<td>' .$vv['21_November'] . '</td>';
					?>
    		</tr>
    		<?php } ?>
  		</tbody>
	</table>
</body>
</html>