<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
  		.container {
  			background-color: #133751;
  			width: 100%;
  			height: 100%;
  			left: 0;
    		top: 0;
    		overflow: hidden;
    		position: fixed;
    		justify-content: center;
    		align-items: center;
    		display: flex;
  		}
  		.form {
  			height: 95%;
  			width: 50%;
  			justify-content: center;
  			align-items: center;
  			background-color: #359ace;
  			/*left: 0;
    		top: 0;
    		overflow: hidden;
    		position: fixed;*/
    		display: flex;
    		flex-direction: column;
  		}
  		form {
  			justify-content: center;
  			align-items: center;
  			display: flex;
  			flex-direction: column;
  		}
  		input[type=text] {
  			padding:5px; 
	    	border:2px solid #ccc; 
	   	 	-webkit-border-radius: 5px;
	    	border-radius: 5px;
	    	width: 150%
  		}
  		input[type=password] {
  			padding:5px; 
	    	border:2px solid #ccc; 
	   	 	-webkit-border-radius: 5px;
	    	border-radius: 5px;
	    	width: 150%
  		}
  		.checkbox {
  			color: white;
  			margin-top: 0px;
  		}
  		button[type=button] {
  			padding:5px; 
	    	width: 100%;
	    	background-color: #666666;
	    	margin-bottom: 12px;
  		}
  		h2 {
  			margin-bottom: 24px;
  			color: white;
  			font-family: "Comic Sans MS", cursive, sans-serif;
  		}
  		.astext {
  			background:none;
		    border:none;
		    margin:0;
		    padding:0;
		    color: white;
		    margin: 8px 24px 3px 24px;
  		}
  		#hr {
		    display: block;
		    height: 1px;
		    border-top: 1px solid white;
		    margin-bottom: 24px;
		    width: 200%;
		}
		#hr_bottom {
		    display: block;
		    height: 1px;
		    border-top: 1px solid white;
		    margin-top: 24px;
		    width: 75%;
		}
  		.option_row {
  			flex-direction: row;
  			justify-content: space-between;
  			display: flex
  		}
  	</style>
</head>
<body>
	<div class="container">
		<div class="form">
			<form action="login_submit" method="post" accept-charset="utf-8">
				<h2>Login</h2>
				<div id="hr"></div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" name="username" placeholder="Enter your username"></br>
				<input type="password" name="password" placeholder="Enter your password"></br>
				<div class="checkbox">
				  <label><input type="checkbox" value="">Remember me?</label>
				</div>
				<button type="button" class="btn btn-primary">Login</button>
				
			</form>
			<div class="option_row">
				<button class="astext">Don't have an account?</button>
				<button class="astext">Return to Home</button>
			</div>
			<button class="astext">Forgotton Password?</button>
			<div id="hr_bottom"></div>
		</div>
	</div>
	
</body>
</html>