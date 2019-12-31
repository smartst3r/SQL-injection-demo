<?php
	//' OR 1=1 -- 
	include_once 'dbh.php';
	
	
	$un=$_POST['username'];
	$pw=$_POST['password'];
	$errors=[];
	$password = $pw;

		$query = "SELECT user_id FROM users WHERE user_name='$un' AND user_password='$password' LIMIT 1";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			
				header('location: ../search.php?message=Success');	
			// }
		}
		else {

			header('location: ../index.php?message=Wrong username/password combination');			
			// console.log('javascript:alert("Wrong username/password combination")');
			
			
		}
	// }
// }
	
	// "select ? from ? where user_name= "
	
	
	
	// "SELECT user_id FROM users WHERE user_name= ''' OR AND user_password='$password' LIMIT 1";
	
	
	
	
	
	
	
	
	
	
	
	
	// echo $un; "SELECT * FROM users";
	// $sql = "SELECT user_id FROM users WHERE user_name='$un' AND user_password='$pw'";
	// $results = mysqli_query($conn,$sql);
		// $resultsCheck = mysqli_num_rows($results);
	// if ($resultsCheck > 0) {
		// echo 'Login sucess';
		// header("Location: ../index.php?login=success");
	// }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// echo $result;
	
	// $results = mysqli_query($conn,$sql);
		// $resultsCheck = mysqli_num_rows($results);
	// if ($resultsCheck > 0) {
		// echo 'pass';
	// }
	
	
	// $sql = "INSERT INTO recipe (RECIPE_ID, RECIPE_TITLE, RECIPE_DATE_UPLOADED, RECIPE_DATE_UPDATED) VALUES (NULL, '$recipe_title', CURRENT_DATE(), '');";
	// mysqli_query($conn,$sql);
	
	// $sql = "INSERT INTO ingredients (ING_ID, ING_NAME) VALUES (NULL, '$ing_name');";
	// mysqli_query($conn,$sql);
	
	// $sql = "SELECT RECIPE_ID FROM recipe WHERE RECIPE_TITLE='$recipe_title';";
	// $results = mysqli_query($conn,$sql);
	// $resultsCheck = mysqli_num_rows($results);
	// if ($resultsCheck > 0) {
		// while ($row = mysqli_fetch_assoc($results)){
			// $recipe_id= $row['RECIPE_ID'];
		// }
	// }
	
	// $sql = "SELECT ING_ID FROM ingredients WHERE ING_NAME='$ing_name';";
	// $results = mysqli_query($conn,$sql);
	// $resultsCheck = mysqli_num_rows($results);
	// if ($resultsCheck > 0) {
		// while ($row = mysqli_fetch_assoc($results)){
			// $ing_id= $row['ING_ID'];
		// }
	// }
	
	// $sql = "INSERT INTO b_recipe (RECIPE_ID, ING_ID, B_ING_AMOUNT, B_ING_UNIT) VALUES ('$recipe_id', '$ing_id', '$ing_amount', '$ing_unit');";
	// mysqli_query($conn,$sql);
	
	
	
	
