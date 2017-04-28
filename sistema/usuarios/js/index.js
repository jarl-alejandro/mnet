;(function () {
  'use strict'

  var $cedula = $("#cedula")
  var $nombre = $("#nombre")
  var $apellido = $("#apellido")
  var $email = $("#email")
  var $telefono = $("#telefono")
  var $celular = $("#celular")
  var $direccion = $("#direccion")
  var $roles = $("#roles")

  $("#table-container").load("templates/table.php")

  $("#show-form").on("click", handleShowForm)
  $("#guardar").on("click", handelGuardar)
  $("#cancelar").on("click", handelCancelar)

  function handleShowForm () {
    $("#table-container").slideUp()
    $("#form-container").slideDown()
  }

  function handelGuardar (e) {
    if(validarForm()){
      $.ajax({
        type: "POST",
        url: "service/guardar.php",
        data: getData()
      })
      .done(function (snap) {
        console.log(snap)
        if (snap == 201) {
          toast("Se ha guardado con exito")
          $("#table-container").load("templates/table.php")
          handelCancelar()
        }
        else toast("Tenemos algun problema")
      })
    }
  }

  function handelCancelar () {
    $("#table-container").slideDown()
    $("#form-container").slideUp()
    $cedula.val("")
    $nombre.val("")
    $apellido.val("")
    $email.val("")
    $telefono.val("")
    $celular.val("")
    $direccion.val("")
    $roles.val("")
     $("#id").val("")
  }

  function getData () {
    return {
      id: $("#id").val(),
      cedula: $cedula.val(),
      nombre: $nombre.val(),
      apellido: $apellido.val(),
      email: $email.val(),
      telefono: $telefono.val(),
      celular: $celular.val(),
      direccion: $direccion.val(),
      roles: $roles.val()
    }
  }

  function validarForm () {
    if($cedula.val() === "" || $cedula.val() === "0"){
      toast("Ingrese el cedula")
      $cedula.focus()
      return false
    }
    if(!valida_ce($cedula.val()) ){
      $cedula.focus()      
      return false
    }
    if($nombre.val() === "" || $nombre.val() === "0"){
      toast("Ingrese el nombre")
      $nombre.focus()
      return false
    }
    if($apellido.val() === "" || $apellido.val() === "0"){
      toast("Ingrese el apellido")
      $apellido.focus()
      return false
    }
    if($email.val() === "" || $email.val() === "0"){
      toast("Ingrese el email")
      $email.focus()
      return false
    }
    if(!validarEmail($email.val())) {
      toast("Ingrese el email correcto")
      $email.focus()
      return false
    }
    if($telefono.val() === "" || $telefono.val() === "0"){
      toast("Ingrese el telefono")
      $telefono.focus()
      return false
    }
    if($celular.val() === "" || $celular.val() === "0"){
      toast("Ingrese el celular")
      $celular.focus()
      return false
    }
    if($direccion.val() === "" || $direccion.val() === "0"){
      toast("Ingrese el direccion")
      $direccion.focus()
      return false
    }
    if($roles.val() === "" || $roles.val() === "0"){
      toast("Ingrese el rol")
      $roles.focus()
      return false
    }
    else return true
  }
$
})()