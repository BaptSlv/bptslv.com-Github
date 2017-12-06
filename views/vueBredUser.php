<?php ob_start(); ?>
	<div class="content-wrapper">
    	<div class="container-fluid">
      	<!-- Breadcrumbs-->
      	<ol class="breadcrumb">
        	<li class="breadcrumb-item">
        		StarTDL
        	</li>
        	<li class="breadcrumb-item active">
        		Mes To Do Lists
        	</li>
      	</ol>
      		<div class="card mb-3">
        		<div class="card-header">
          			<i class="fa fa-list"></i> Informations de connexion
        		</div>
        		<div class="card-body">
          			<table class="table table-bordered">
            			<thead>
            	  			<tr>
            	    			<th scope="col">Login</th>
            	    			<th scope="col">Mot de passe</th>
            	    			<th scope="col">Editer</th>
            	  			</tr>
            			</thead>
            			<tbody>
            	  			<tr>
								<form action="" method="post">
									<td>
	    							<input class="form-control" value="<?= $user['login'] ?>" type="text" name="login"/>
	    						</td>
	    						<td>
	    							<input class="form-control" value="<?= $user['password'] ?>" type="text" name="password"/>
	    						</td>
	    						<td>
	    							<input type="submit" value="Editer" name="editer" class="btn btn-primary">
	    						</td>
	 							</form>
							</tr>
            			</tbody>
          			</table>
                <div class="row justify-content-md-center">
                  <a class="btn btn-warning" data-toggle="modal" data-target="#supAccount">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    Désactiver mon compte
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                  </a>
                </div>
        		</div>
    		</div>
      	<div class="card mb-3">
        	<div class="card-header">
        			<i class="fa fa-list"></i>Informations personnelles
        	</div>
        	<div class="card-body">
        	</div>
      	</div>
    </div>
  </div>
<?php $logpwd = ob_get_clean(); ?>