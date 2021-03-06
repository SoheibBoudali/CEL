<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
		<style type="text/css">
			.first{
				background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.1)),url("{{asset('images/index.png')}}");
			}
			.step{
				background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.1)),url("{{asset('images/index.png')}}");
			}
		</style>
		<title>Control Enjoy Learn</title>
	</head>
	<body>
		<nav class="navbar fixed-top">
			<img class="navbar-brand" src="{{asset('images/LOGO.png')}}">
			<div>
				<a href="" data-toggle="modal" data-target="#Modal">SE CONNECTER</a>
				<a href="{{asset('signup')}}">S'INSCRIRE</a>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row first">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				</div>
			</div>
		</div>
    <div class="modal fade" id="Modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center" >SE CONNECTER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="email">addresse Email</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control"  placeholder="Password" name="password">
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary ">SE CONNECTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	</body>
	<script type="text/javascript" src="{{asset('lib/jquery-3.3.1.js')}}" ></script>
	<script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.js')}}" ></script>
	<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</html>