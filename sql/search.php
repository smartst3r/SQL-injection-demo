<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="whygod3.css">
<script type='text/javascript' src="jquery-3.3.1.min.js"></script>
<script type='text/javascript' src='main.js'></script>
<script type='text/javascript' src='effect.js'></script>
<title>sql</title>
</head>
<body style='display:grid;grid-template-columns:1fr;background-color:gray;'>
	

	<?php
		//r' UNION (SELECT 1, TABLE_NAME, TABLE_SCHEMA FROM INFORMATION_SCHEMA.TABLES) ;-- 
		//r' UNION (SELECT 1, column_name, 3 FROM INFORMATION_SCHEMA.columns where table_name='users' );-- 
		//r' UNION (SELECT 1, user_name, user_password FROM users );-- 
		
		// grid-template-columns:2fr 1fr
		session_start();
		// require_once 'includes/dbh.php';



		if (isset($_SESSION['message'])) {
		   $info_list=$_SESSION['message'];
		   unset($_SESSION['message']);
		}
		if (isset($_GET['message'])) {  
				$temp=$_GET['message'];
				echo "<script>console.log(alert('$temp'))</script>";
			
	}
	?>


	<div class='parent-box'>
		<div class='nav-bar'>
			<div></div>
			<div id='console-up' style='font-weight:bold;color:#B35A00;'>
				<button class='button-fake' id='q-fix' style='margin-right:90%;'>Login</button> <
			</div>
			<div class='nav-bar-product-info'>
				<button class='button-fake'>ALL PRODUCTS</button>
				<button class='button-fake'>DEALS & SERVICES</button>
				<button class='button-fake'>FEATURED SELLERS</button>
			</div>
			<div class='nav-bar-search'>
				<form class='search-form' action='includes/recipeLookUp.php' method='POST'>
					<input class='search' id='search-field' type="text" name='search' >
					<button class='search' style='background-color:white;' id='search-button' type='Submit' name='submit'>search</button>
					
				</form>
			</div>
		</div>
		<div class='lower-half'>
			<div class='left-side-bar'>
				<div class='left-side-bar-sorting-o'>
					<p class='left-side-bar-sorting-o-title'>Shop Category</p>
					<p>Desktop Graphic Cards</p>
					<p>Workstation Graphics Cards</p>
				</div>
				<div class='left-side-bar-sorting-o'>
					<p class='left-side-bar-sorting-o-title'>Accessories</p>
					<p>Other Adapter & Gender Changers</p>
					<p>VGA Cooling</p>
					<p>Video Card Accessories</p>
				</div>
				<div class='left-side-bar-sorting-o'>
					<p class='left-side-bar-sorting-o-title'>Shopping Tools</p>
					<p>Graphic Cards Buying Guide</p>
				</div>
			</div>
			<div class='right-body'>

			</div>
		</div>
	</div>
	<div id='printchatbox' style='display:none;'>
		<div class='chatbox-box' style='justify-items:center;' ><img style='height:15px; padding-top:5px;' src="images/cmd.png"><p id='oo'>C:\1337\350\wow.exe</p></div>
			<div class='pp' >
				<p> SELECT ____, <br>FROM ______, <br>WHERE _____ = LIKE </p>
				<p style='display:inline;'>'% </p><p id='search-q' style='display:inline;'></p><p style='display:inline;'> %'</p>
				
			</div>
		</div>
	
	
	 <script type="text/javascript">
		 $(document).ready(function(){
			var info_list = <?php echo json_encode($info_list) ?>;
			for(i=0;info_list.length>i;i++){
					$('.right-body').append("<div class='right-body-product-box'> <img class='product-img' src='images/"+info_list[i][0]+".jpg' alt=><div class='right-body-product-box-text'> <p>"+info_list[i][1]+"</p><p>"+info_list[i][2]+"</p></div></div>");
			}
		 })
	 </script>


	<script>//SELECT id , test_name , test_amount FROM test_table WHERE test_name LIKE '%$wow%'
		 			var inputBox = document.getElementById('search-field');

				inputBox.onkeyup = function(){
					document.getElementById('search-q').innerHTML = inputBox.value;
			}
	</script>

	<script>
		$(document).ready(function(){
			// $("#printchatbox").hide()
			
			$('#console-up').click(function(){
				$('body').css('grid-template-columns', '2fr 1.5fr')
				$("#printchatbox").show()

			})
		})
	</script>
</body>
</html>