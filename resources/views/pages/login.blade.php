<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<style>
    body{
	background: #eee;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
}
    .card{
	border-radius: 12px;
}
    .card1{
	background-image: url("https://i.imgur.com/aeidEH1.jpg");
	
	margin-top: 20px;
    }
    .first{
    background-image: url("{{ asset('img/loginBackground.webp') }}"); /* Ensure the correct path */
    background-repeat: no-repeat; /* Prevents tiling */
    background-size: cover; /* Ensures the image covers the container */
    background-position: center; /* Centers the image */
    border-radius: 12px 0 0 12px; /* Applies border-radius if needed */
    max-width: 100%; /* Ensures no overflow */
    display: block; /* Makes it a block element */
    /* height: 100vh;  */
    margin: 0; /* Removes default margin */
    opacity: 0.8; /* Adjust the value (0.0 to 1.0) to control transparency */
}

    .welcome{
	margin-top: 130px;
	font-size: 28px;

}
    .form-group{
	padding-top: 5px;
	font-size: 15px;

}
    .form-control{
	background: #E3F2FD;
	margin-top: 10px;
	font-size: 13px;
    font-weight: bold;
    color: #fff;
    padding-top: 15px;
    padding-bottom: 15px;
    caret-color: red;
    
}

    .form-control:focus{
box-shadow: none;	

}
    .forgot{
	padding-top: 7px;
	color: #42A5F5;
}
    .space{
	padding-top: 28px;
}
    .btn1, .btn2 {
    display: inline-block; /* Ensures anchor behaves like a button */
    text-align: center; /* Centers text inside the anchor */
    text-decoration: none; /* Removes underline from links */
    font-size: 11px;
    font-weight: bold;
    padding: 10px 46px; /* Adjust padding for consistent size */
    border-radius: 0%; /* Matches original button style */
}

    .btn1 {
    background: #0277BD;
    color: #fff; /* Ensure text is white */
}

    .btn1:hover {
    background: #01579B; /* Slightly darker blue on hover */
    color: #fff; /* Maintain white text on hover */
}

    .btn2 {
    background-color: #fff;
    color: #0277BD;
    border: 2px solid #0277BD; /* Add border for consistency */
}

    .btn2:hover {
    background-color: #E3F2FD; /* Light blue background on hover */
    color: #01579B; /* Darker blue text on hover */
}

    .under{
	font-size: 12px;
	color: #42A5F5;
	padding-top: 40px;
}



    @media only screen and (max-width: 800px) {

	.formBackground{

		display: none;
	}
}
</style>
<body>
<div class="card p-4 card1 ">

<div class="row d-flex justify-content-center">

    <div class="col-md-10">
        
    
    <div class="card">
    <div class="row no-gutters">
        <div class="col-md-4 first">
            <div class="formBackground"><span class="no-gutters text-primary font-weight-bold"></div>
        </div> 
        <div class="col-md-6 second pl-4 pr-4">
            <h4 class="welcome text-primary">Welcome</h4>
            <div class="form-group" action="{{ route('login.submit') }}" method="POST">
                <input type="email number" name="email number" placeholder="Email or Phone" class="form-control">
                <input type="Password" name="Password" placeholder="Password" class="form-control">
                <div class="forgot"	><span>Forgot Password?</span></div>
                
            </div>
            <div class="space">
                <a href="#" class="btn btn-primary btn1">Login</a>
                <a href="/signup" class="btn btn-primary btn2">Sign Up</a>
            </div>
            
            <div class="row">
                <div class="col-sm-4 under">
                    <span>Copyright Policy</span>
                    <p>User Agreement</p>
                    
                </div>
                <div class="col-sm-3 under">
                    <span>Privacy Policy</span>
                    <p>Cookie Policy</p>
                </div>
                <div class="col-sm-4 under">
                    <span>Send Feedback</span>
                    <p>Community Guidelines</p>
                    
                </div>
                <div class="col-md-1	">
                    <p> </p>
                    
                </div>
            </div>
            
        </div>
        
    </div>
    
    
</div>

</div>
    

</div>

</div>
</body>
</html>