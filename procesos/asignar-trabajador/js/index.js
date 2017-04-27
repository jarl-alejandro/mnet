;(function () {
  'use strict'

  $("#table-container").load("templates/table.php")

  // var dateMin = $("#DateMin").val()
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
  $("#guardar").on("click", handleGuardar)
  $('#show-form').on('click', handleShowForm)

  $("#show-capsula").on("click", handleShowCapsula)
  $("#closeCapsula").on("click", handleCloseCapsula)
  $("#aceptCapsula").on("click", handleAceptCapsula)

  function handleShowForm (e) {
    $("#table-container").slideUp()
    $("#form-container").slideDown()
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
    db.materiales = []
    $("#materialesbody").html('<td colspan="3" class="text-center">....</td>')

  }

  function handleGuardar () {
    if (validarAssig()) {
      var idEditar = $("#id").val()
      $.ajax({
        type: "POST",
        url: "service/guardar.php",
        data: { idEditar, id: $("#servicio").val(), tecnico: $tecnico.val(), equipo:  db.materiales }
      })
      .done(function (snap) {
        console.log(snap)
        $("#table-container").load("templates/table.php")
        handleCancelar()
        // window.open(`./reporte/individual.php?id=${id}`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
      })
    }
  }

  function validarAssig () {
    if ($("#servicio").val() == "") {
      toast("Ingrese el servicio")
      $("#servicio").focus()
      return false
    }
    if ($("#tecnico").val() == "") {
      toast("Ingrese el tecnico")
      $("#tecnico").focus()
      return false
    }
    if (db.materiales.length == 0) {
      toast("Ingrese los empleados")
      $(".panel-capsula").slideDown()
      return false
    }
    else return true
  }
  
  function handleShowCapsula () {
    if($("#tecnico").val() == "") {
      toast("Ingrese primero el tecnico responsable")
      return false
    }
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
        var id = item.dataset.id
        var nombre = item.dataset.name
        detalle.add({ id, nombre })
        item.checked = false
      }
      else count++
    }
    if(capsula.length === count)
      toast("No ha ingresado ninguna materiales")
  }


})()