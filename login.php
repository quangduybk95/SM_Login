<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <!--<link rel="stylesheet" href="css/main.css"> -->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		    <div class="container">
	        	<div class="card card-container">
	            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
		            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		            <p id="profile-name" class="profile-name-card"></p>
		            <form class="form-signin" id="login" action="check.php" method="POST">
		                <span id="reauth-email" class="reauth-email"></span>
		                <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
		                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		                <div id="remember" class="checkbox">
		                    <label>
<!-- 		                        <input type="checkbox" value="remember-me"> Remember me
 -->		                    </label>
		                </div>
		                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
		            </form><!-- /form -->
<!-- 		            <a href="#" class="forgot-password">
		                Forgot the password?
		            </a>
 -->	        	</div><!-- /card-container -->
    </div><!-- /container -->





        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="script.js"></script>

    </body>
</html>