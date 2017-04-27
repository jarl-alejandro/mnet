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

  // $("#show-capsula").on("click", handleShowCapsula)
  // $("#closeCapsula").on("click", handleCloseCapsula)
  // $("#aceptCapsula").on("click", handleAceptCapsula)
  // $("#confirmar").on("click", handleConfirmar)
  
  function handleCancelar () {
    $("#form-container").slideUp()
    $("#table-container").slideDown()
    $servicio.val("")
    $cliente.val("")
    $tecnico.val("")
    $fecha.val("")
    $fechaVisita.val("")
    $horaVisita.val("")
    // db.materiales = []
    // $("#materialesbody").html('<td colspan="5" class="text-center">....</td>')

  }

  function handleGuardar () {
      var id = $("#id").val()
      $.ajax({
        type: "POST",
        url: "service/guardar.php",
        data: { id, tecnico: $tecnico.val() }
      })
      .done(function (snap) {
        console.log(snap)
        $("#table-container").load("templates/table.php")
        handleCancelar()
        // window.open(`./reporte/individual.php?id=${id}`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
      })
  }


})()