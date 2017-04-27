;(function () {
  'use strict'

  $("#table-container").load("templates/table.php")

  var dateMin = $("#DateMin").val()
  var detalle = new Detalle()

  var $servicio = $("#servicio")
  var $cliente = $("#cliente")
  var $tecnico = $("#tecnico")
  var $fecha = $("#fecha-pedido")
  var $fechaVisita = $("#fecha-visita")
  var $horaVisita = $("#hora-visita")
  // $( '.fechaPicker' ).pickadate({
  //   min: dateMin
  // })

  $("#cancelar").on("click", handleCancelar)
  $("#show-capsula").on("click", handleShowCapsula)
  $("#closeCapsula").on("click", handleCloseCapsula)
  $("#aceptCapsula").on("click", handleAceptCapsula)
  $("#guardar").on("click", handleGuardar)
  $("#confirmar").on("click", handleConfirmar)
  
  function handleCancelar () {
    $("#form-container").slideUp()
    $("#table-container").slideDown()
    $servicio.val("")
    $cliente.val("")
    $tecnico.val("")
    $fecha.val("")
    $fechaVisita.val("")
    $horaVisita.val("")
    db.materiales = []
    $("#materialesbody").html('<td colspan="5" class="text-center">....</td>')

  }

  function handleShowCapsula () {
    $(".panel-capsula").slideDown()
  }

  function handleCloseCapsula () {
    $(".panel-capsula").slideUp()
  }

  function handleAceptCapsula () {
    var capsulaList = document.querySelectorAll(".capsulaList")
    var capsula = Array.prototype.slice.call(capsulaList)
    var count = 0

    for (var i in capsula) {
      var item = capsula[i]
      if(item.checked === true){
        var codigo = item.dataset.id
        var nombre = item.dataset.name
        var cant = item.dataset.cant
        var precio = item.dataset.precio
        detalle.add({ codigo, nombre, precio, cant, total: "0.00", cantidadCliente: "0.00" })
        item.checked = false
      }
      else count++
    }
    if(capsula.length === count)
      toast("No ha ingresado ninguna materiales")
  }

  function handleGuardar () {
    if(validarForm()) {
      var id = $("#id").val()
      $.ajax({
        type: "POST",
        url: "service/guardar.php",
        data: { id, materiales: db.materiales }
      })
      .done(function (snap) {
        console.log(snap)
        $("#table-container").load("templates/table.php")
        handleCancelar()
        // $("#confirmar").fadeIn()
        // $("#guardar").fadeOut()
        email(id)
        document.getElementById("confirmar").dataset.id = id
        window.open(`./reporte/individual.php?id=${id}`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
      })
    }
  }

  function email (id) {
    var cliente = $("#cliente").val()
    var url = location.href
    $.ajax({
      type: "POST",
      data: { id, cliente, url },
      url: "service/email.php"
    })
    .done(function (snap) {
      console.log(snap)
      if(snap == 2) toast("Se ha enviado el email con exito") 
      else toast("Tenemos problemas")
    })
  }

  function validarForm () {
    if(db.materiales.length === 0) {
      toast("Porfavor ingrese los materiales")
      return false
    }
    else return true
  }

  function handleConfirmar (e){
    var id = e.currentTarget.dataset.id
    $.ajax({
      type: "POST",
      url: "service/confirmar.php",
      data: { id }
    })
    .done(function (snap) {
      $("#table-container").load("templates/table.php")
      handleCancelar()
      if(snap == 2) toast("Se ha confirmado con exito la cotizacion")
      else toast("Tenemos problemas intente mas tarde")
    })
  }

})()