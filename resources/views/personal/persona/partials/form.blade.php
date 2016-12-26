			<!--<div class="form-group">
				<label for="tipo_persona">Tipo Persona</label>
				<input type="text" name="tipo_persona" class="form-control" placeholder="Tipo de¨Persona...">
			</div>-->


					<div class="form-group">
					<label for="tipo_persona">Tipo de Persona</label>
			  	    {!! Form::select('tipo_persona',
			  	      ['Activo' =>'Activo', 'Inactivo' => 'Inactivo'],
			  	      null,
		            </div>
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control" placeholder="Nombre...">
					</div>
					<!--<div class="form-group">
						<label for="tipo_documento">Tipo Documento</label>
						<input type="text" name="tipo_documento" class="form-control" placeholder="Tipo de documento...">
					</div>-->
					<div class="form-group">
					<label for="tipo_documento">Tipo de Documento</label>
			  	    {!! Form::select('tipo_documento',
			  	      ['Cedula' =>'Cedula', 'Pasaporte' => 'Pasaporte', 'dni' => 'DNI'],
			  	      null,
		            </div>
					<div class="form-group">
					<label for="num_documento">Nro Documento</label>
					<input type="text" name="num_documento" class="form-control" placeholder="Nro de documento...">
					</div>

			
					<div class="form-group">
						<label for="direccion">Dirección</label>
						<input type="text" name="direccion" class="form-control" placeholder="Dirección...">

					</div>



					<div class="form-group">
						<label for="telefono">Teléfono</label>
						<input type="text" name="telefono" class="form-control" placeholder="Teléfono...">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" placeholder="Email...">
					</div>
