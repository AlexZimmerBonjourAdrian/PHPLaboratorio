

		<script>
			function previewFile(input){
				var file = $("input[type=file]").get(0).files[0];
		
				if(file){
					var reader = new FileReader();
		
					reader.onload = function(){
						$("#previewImg").attr("src", reader.result);
					}
		
					reader.readAsDataURL(file);
				}
			}
		</script>



<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Agregar Recurso</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
    	<div class="form-group">
    		<label>Nombre</label>
    		<input type="text" name="Nombre" class="form-control" />
    	</div>
 		<div class="form-group">
		 <input type="radio" id="NDescarg" name="Descarg" value="0 " class="form-control">
  		<label for="NDescarg">No Descargable</label><br>
  		<input type="radio" id="Descarg" name="Descarg" value="1" class="form-control">
  		<label for="Descarg">Descargable</label><br>
    	</div>
		<div class="form-group">
		<input type="radio" id="NSuscrip" name="Suscrip" value="0 " class="form-control">
  		<label for="NSuscrip">Gratis</label><br>
  		<input type="radio" id="Suscrip" name="Suscrip" value="1" class="form-control">
  		<label for="Suscrip">Premium</label><br>
    	</div>
		<div class="form-group">
		<p>Elija el Tipo de Recurso</p>
  		<input type="radio" id="Libro" name="Tipo" value="Libro " class="form-control">
  		<label for="Libro">Libro</label><br>
  		<input type="radio" id="AudioLibro" name="Tipo" value="AudioLibro" class="form-control">
  		<label for="AudioLibro">AudioLibro</label><br>
  		<input type="radio" id="Revista" name="Tipo" value="Revista" class="form-control">
  		<label for="Revista">Revista</label>
		<input type="radio" id="Podcast" name="Tipo" value="Podcast" class="form-control">
  		<label for="Podcast">Podcast</label><br>
		<input type="radio" id="Documento" name="Tipo" value="Documento" class="form-control">
  		<label for="Documento">Documento</label><br>
		<br>  
		</div>
    	<div class="form-group">
		<label>Imagen</label>
		<input type="file" name="Imagen" class="form-control" onchange="previewFile(this);" >
		</p><img id="previewImg" src=" " alt=""><p>
    	</div>

	 	<div class="form-group">
		 <label>Descripción</label>
		<textarea name="Descrip" class="form-control" required placeholder="Una Descripción de su Recurso ..." ></textarea>
		</div>

		<div class="form-group">
		<label>Link de Descarga</label>
		<input type="text" name="Enlace" class="form-control"> 
		</div>

		<!--<input type="hidden" name="filename">--> 

    
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>