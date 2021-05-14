<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register User</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Name</label>
    		<input type="text" name="name" class="form-control" />
    	</div>

		<div class = "form-group">
		<label>Apellido</label>
		<input type="text" name="ApellidoAut" class="form-control" /> 
		</div>

	
    	<div class="form-group">
    		<label>Email</label>
    		<input type="text" name="email" class="form-control" />
    	</div>
		<div class="form-group">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control" />
    	</div>
		<div class = "form-Group">
		<label>Sexo</label>
		<input type="" />
		</div>

		<div class = "form-group">
		<label>Fecha de Nacimiento</label>
		<input type="date" name="FNAut" class="form-control"/>
		</div>

		<div class = "form-group">
		<label>imagen Perfil</label>
		<input type="image" name="imgAut" class="form-control" />
		</div>

		<div class = "form-group">
		<label>Biografia Autor </label>
		<input type="text" name="BiografiaAut" class="form-control" />
		</div>
    	
    	
		
		<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
  </div>
</div>