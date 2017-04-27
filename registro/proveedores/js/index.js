;(function () {
  'use strict'

  var $nombre = $("#nombre")
  var $email = $("#email")
  var $telefono = $("#telefono")
  var $celular = $("#celular")
  var $direccion = $("#direccion")

  var $nombreContacto = $("#nombre-contacto")
  var $emailContacto = $("#email-contacto")
  var $telefonoContacto = $("#telefono-contacto")
  var $celularContacto = $("#celular-contacto")
  var $direccionContacto = $("#direccion-contacto")

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
     $("#id").val("")
    $nombre.val("")
    $email.val("")
    $telefono.val("")
    $celular.val("")
    $direccion.val("")

    $nombreContacto.val("")
    $emailContacto.val("")
    $telefonoContacto.val("")
    $celularContacto.val("")
    $direccionContacto.val("")
  }

  function getData () {
    return {
      id: $("#id").val(),
      nombre: $nombre.val(),
      email: $email.val(),
      telefono: $telefono.val(),
      celular: $celular.val(),
      direccion: $direccion.val(),
      nombreContacto: $nombreContacto.val(),
      emailContacto: $emailContacto.val(),
      telefonoContacto: $telefonoContacto.val(),
      celularContacto: $celularContacto.val(),
    }
  }

  function validarForm () {
    if($nombre.val() === "" || $nombre.val() === "0"){
      toast("Ingrese el nombre")
      $nombre.focus()
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
    
    if($nombreContacto.val() === "" || $nombreContacto.val() === "0"){
      toast("Ingrese el nombre del contacto")
      $nombreContacto.focus()
      return false
    }
    if($emailContacto.val() === "" || $emailContacto.val() === "0"){
      toast("Ingrese el email del contacto")
      $emailContacto.focus()
      return false
    }
    if(!validarEmail($emailContacto.val())) {
      toast("Ingrese el email del contacto correcto")
      $emailContacto.focus()
      return false
    }
    if($telefonoContacto.val() === "" || $telefonoContacto.val() === "0"){
      toast("Ingrese el telefono del contacto")
      $telefonoContacto.focus()
      return false
    }
    if($celularContacto.val() === "" || $celularContacto.val() === "0"){
      toast("Ingrese el celular del contacto")
      $celularContacto.focus()
      return false
    }
    else return true
  }

})()