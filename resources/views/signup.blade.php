<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/signup.css')}}">
        <style type="text/css">
            .container-fluid{
                background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.1)),url("{{asset('images/signup.png')}}");
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="col-md-12" id="signup-logo">
                            <img src="{{asset('images/LOGO.png')}}">
                        </div>
                        <div class="col-md-12">
                            <h5>Inscription/h5>
                            <form action="" method="POST" class="registration">
                                <div class="form-group col-md-12 ">
                                    <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="First name">
                                </div>                      
                                <div class="form-group col-md-12 ">
                                    <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="Last name">
                                </div>
                                <div class="form-group col-md-12 ">
                                    <input type="text" class="form-control" id="email" name="email" required placeholder="E-mail">
                                </div>
                                <div class="form-group col-md-12 ">
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="password">
                                </div>
                                <div class="form-group col-md-12 ">
                                    <input type="password" class="form-control" id="validatePassword" name="validatePassword" required placeholder="Validate your password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="submit-btn" class="btn btn-default btn-block">Créer un compte</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <script type="text/javascript" src="{{asset('lib/jquery-3.3.1.js')}}" ></script>
        <script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.js')}}" ></script>
    </body>
</html>