<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="asset/css/login.css" >
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="post" action="{{ route('auth.login') }}" class="box">
                        @csrf
                        <h1>Login</h1>
                        <p class="text-muted"> Please enter your login and password!</p> 
                        <input type="text" name="email" placeholder="Username"> 
                        <input type="password" name="password" placeholder="Password"> 
                        <a class="forgot text-muted" href="#">Forgot password?</a> 
                        <input type="submit" onclick="login" name="submit" value="Login">
                        <a class="forgot text-muted" href="#">Register an account</a>
                        <div class="col-md-12">
                            
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="logo-github" title="GitHub"><i class="fab fa-github"></i></a></li>
                                <li><a href="{{ url('/auth/redirect/google') }}"  class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>