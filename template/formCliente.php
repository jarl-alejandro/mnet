 <style>
 #clienteFomrRegister {
   position: fixed;
   top: 5em;
   z-index: 1111;
   display: none
 }
 .center{
   display: flex;
   justify-content: center;
 }
 .center button:last-child{
   margin-left: 1em;

 }
 </style>
 <div class="panel panel-primary">
  <div class="panel-heading text-center">Registar nuevo cliente</div>
  <div class="panel-body">
    <input type="hidden" id="id">
    <div class="col-xs-12 col-md-5 bottom">
      <label for="cedula">Ingrese numero de cedula</label>
      <input type="text" class="form-control" placeholder="Ingrese numero de cedula"
          maxlength="13" id="cedula" onkeypress="numeros()">
    </div>
    <div class="col-xs-12 col-md-6 bottom">
      <label for="nombre">Ingrese el nombre del cliente</label>    
      <input type="text" class="form-control" placeholder="Ingrese el nombre del cliente" 
          maxlength="100" id="nombre" onkeypress="textos()">
    </div>
    <div class="col-xs-12 col-md-5 bottom">
      <label for="apellido">Ingrese el apellido del cliente</label>    
      <input type="text" class="form-control" placeholder="Ingrese el apellido del cliente"
          maxlength="100" id="apellido" onkeypress="textos()">
    </div>
    <div class="col-xs-12 col-md-6 bottom">
      <label for="emailRegister">Ingrese el e-mail del cliente</label>    
      <input type="text" class="form-control" placeholder="Ingrese el e-mail del cliente" 
          maxlength="140" id="emailRegister">
    </div>
    <div class="col-xs-12 col-md-5 bottom">
      <label for="telefono">Ingrese el numero de telefono del cliente</label>    
      <input type="text" class="form-control" placeholder="Ingrese numero de telefono"
          maxlength="10" id="telefono" onkeypress="numeros()">
    </div>
    <div class="col-xs-12 col-md-6 bottom">
      <label for="celular">Ingrese el numero celular del cliente</label>    
      <input type="text" class="form-control" placeholder="Ingrese numero celular"
          maxlength="10" id="celular" onkeypress="numeros()">
    </div>
    <div class="col-xs-12 col-md-5 bottom">
      <label for="direccion">Ingrese la direccion del cliente</label>    
      <input type="text" class="form-control" placeholder="Ingrese la direccion" 
          maxlength="100" id="direccion" onkeypress="textos()">
    </div>
    <div class="col-xs-12 col-md-5 bottom">
      <label for="passwordRegister">Ingrese su contraseña</label>    
      <input type="password" class="form-control" placeholder="Ingrese la contraseña" 
          maxlength="100" id="passwordRegister">
    </div>
    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <button class="btn btn-danger" id="cancelar">Cancelar</button>
    </div>
  </div>
</div>
