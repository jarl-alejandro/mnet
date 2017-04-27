;(function () {
  'use strict'

  $("#table-container").load("templates/table.php")

  var dateMin = $("#DateMin").val()

  var $servicio = $("#servicio")
  var $cliente = $("#cliente")
  var $tecnico = $("#tecnico")
  var $fecha = $("#fecha-pedido")
  var $fechaVisita = $("#fecha-visita")
  var $horaVisita = $("#hora-visita")

  $( '.fechaPicker' ).pickadate({
    min: dateMin
  })

  $("#show-form").on("click", handleFormShow)
  $("#cancelar").on("click", handleCancelar)
  $("#guardar").on("click", handleGuardar)

  function handleFormShow () {
    $("#form-container").slideDown()
    $("#table-container").slideUp()
  }

  function handleCancelar () {
    $("#form-container").slideUp()
    $("#table-container").slideDown()
    $servicio.val("")
    $cliente.val("")
    $tecnico.val("")
    $fecha.val("")
    $fechaVisita.val("")
    $horaVisita.val("")
  }

  function handleGuardar () {
    if(validarForm()){
      $.ajax({
        url: "service/guardar.php",
        data: { servicio: $servicio.val(), cliente: $cliente.val(), tecnico: $tecnico.val(), 
                fecha: $fecha.val(), fechaVisita: $fechaVisita.val(), horaVisita: $horaVisita.val()
              },
        type: "POST"
      })
      .done(function (snap) {
        console.log(snap)
        if(snap == 201){
          toast("Se ha guardado con exito")
          $("#table-container").load("templates/table.php")
          handleCancelar()
        }
        else toast("Tenemos problema intente de nuevo")
      })
    }
  }

  function validarForm() {
    if($servicio.val() === "") {
      toast("Ingrese el servicio")
      $servicio.focus()
      return false
    }
    if($cliente.val() === "") {
      toast("Ingrese el cliente")
      $cliente.focus()
      return false
    }
    if($tecnico.val() === "") {
      toast("Ingrese el tecnico")
      $tecnico.focus()
      return false
    }
    if($fecha.val() === "") {
      toast("Ingrese el fecha")
      $fecha.focus()
      return false
    }
    if($fechaVisita.val() === "") {
      toast("Ingrese el fecha de visita")
      $fechaVisita.focus()
      return false
    }
    if($horaVisita.val() === "") {
      toast("Ingrese la hora de visita")
      $horaVisita.focus()
      return false
    }
    else return true
  }

})()