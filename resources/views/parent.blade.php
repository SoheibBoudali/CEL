<!DOCTYPE html>
<html>
	<head>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/parent.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Parent</title>
	</head>
	<body>
		<nav class="navbar fixed-top">
			<img class="navbar-brand" src="{{asset('images/LOGO.png')}}">
			<div class="dropdown">
				<img src="{{asset('images/LOGO.png')}}" class="dropdown-toggle"   id="dropdownMenuButton" data-toggle="dropdown">
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropMenu">
			    	<a class="dropdown-item" href="#">Déconnexion</a>
			    	<a class="dropdown-item" href="#">Réglage</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Mes enfants</h1>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">Ajouter un enfant</button>
					<table class="table">
					  	<thead>
					    	<tr>
							    <th scope="col">#</th>
							    <th scope="col">Email</th>
							    <th scope="col">Mot de passe</th>
							    <th scope="col">Etat</th>
							    <th scope="col">Réglage</th>
					    	</tr>
					  	</thead>
					  	<tbody>
						    <tr>
						      	<th scope="row">1</th>
						      	<td>Redi</td>
						      	<td>Esclave</td>
						      	<td>O</td>
						      	<td><i class="fa fa-sliders setkid" data-toggle="modal" data-target="#Modal1"></i></td>
						    </tr>
					  	</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1 >Quiz</h1>
					<table class="table">
					  	<thead>
					    	<tr>
							    <th scope="col">Email</th>
							    <th scope="col">Questions</th>
							    <th scope="col"><i class="fa fa-plus-square setquiz" data-toggle="modal" data-target="#Modal2"></i></th>
					    	</tr>
					  	</thead>
					  	<tbody>
						    <tr>
						      	<td>Redi</td>
						      	<td>
						      		<ul>
						      			<li>
								      		<label>Q1:How you doing !</label>
								      		<ul class="list-group">
											  	<li class="list-group-item">Rep 1</li>
											  	<li class="list-group-item">Rep 2</li>
											  	<li class="list-group-item">Rep 3</li>
											  	<li class="list-group-item">La bonne reponse</li>									  	
											</ul>
										</li>
									</ul>
						      		<ul>
						      			<li>
								      		<label>Q1:How you doing !</label>
								      		<ul class="list-group">
											  	<li class="list-group-item">Rep 1</li>
											  	<li class="list-group-item">Rep 2</li>
											  	<li class="list-group-item">Rep 3</li>
											  	<li class="list-group-item">La bonne reponse</li>									  	
											</ul>
										</li>
									</ul>
						      	</td>
						      	<td><i class="fa fa-trash delete" data-toggle="modal" data-target="#Modal3"></i></td>
						    </tr>
					  	</tbody>
					</table>					
				</div>
			</div>			
		</div>

	   	<div class="modal fade" id="Modal" tabindex="-1" aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="text-center" >Ajouter un enfant</h5>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
	                    <form action="" method="POST">
	                        <div class="form-group">
	                            <label for="email">Addresse email</label>
	                            <input type="email" class="form-control" placeholder="Enter email" name="email">
	                        </div>
	                        <div class="form-group">
	                            <label for="birthdate">Date de naissance</label>
	                            <input type="date" class="form-control"  placeholder="Ex:24/03/1997" name="birthdate">
	                        </div>
	                        <div class="modal-footer ">
	                            <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
	                            <button type="submit" class="btn btn-primary " >Ajouter</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
   		<div class="modal fade" id="Modal1" tabindex="-1" aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="text-center" >Modifier</h5>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
	                    <form action="" method="GET">
	                        <div class="form-group">
	                        	<label for="sites">sites a interdir</label>
	                        	<select name="sites" class="select2" multiple id="sites">
	                        		
	                        	</select>
	                        </div>
	                        <div class="form-group">
	                            <label for="birthdate">Temps de connexion</label>
	                            <input type="text" class="form-control" placeholder="1h" name="birthdate">
	                        </div>
	                        <div class="modal-footer ">
	                            <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
	                            <button type="submit" class="btn btn-primary " >Enregistrer</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
   		<div class="modal fade" id="Modal2" tabindex="-1" aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="text-center" >Ajouter une question</h5>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
	                    <form action="" method="GET">
	                        <div class="form-group">
	                            <label for="Question">La question</label>
	                            <input type="text" class="form-control" placeholder="How many stars on the sky?" name="Question">
	                        </div>
	                        <div class="form-group">
	                            <label for="child">La question est distinée a :</label>
	                            <select name="child" class="form-control">
	                            	<option class="form-control">Nasser</option>	                            		
	                            </select>
	                        </div>	            
	                        <label>Les reponses (cochez la bonne reponse)</label>
	                        <ol>
		                        <li>
		                         	<div class="form-group form-inline">
		                            	<input type="text" class="form-control" required name="Rep1">
		                            	<input type="radio" name="check">
		                        	</div>
		                    	</li>
		                        <li>
		                         	<div class="form-group form-inline">
		                            	<input type="text" class="form-control" required name="Rep1">
		                            	<input type="radio" name="check">
		                        	</div>
		                    	</li>
		                        <li>
		                         	<div class="form-group form-inline">
		                            	<input type="text" class="form-control" required name="Rep1">
		                            	<input type="radio" name="check">		                  
		                        	</div>
		                    	</li>
	                        </ol>
	                        <div class="modal-footer ">
	                            <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
	                            <button type="submit" class="btn btn-primary " >Enregistrer</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
   		<div class="modal fade" id="Modal3" tabindex="-1" aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="text-center">Supprimer une question</h5>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
	                	<h2>Vous êtes sûre ?</h2>
	                    <form action="" method="GET">
	                        <div class="modal-footer ">
	                            <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Non</button>
	                            <button type="submit" class="btn btn-primary " >Oui</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script type="text/javascript" src="{{asset('lib/jquery-3.3.1.js')}}" ></script>
	<script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.js')}}" ></script>
	<script type="text/javascript">
		$('.select2').select2({tags:true,width:"100%"});
	</script>
</html>