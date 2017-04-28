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

  $("#guardar").on("click", handleGuardar)
  $("#cancelar").on("click", handleCancelar)
  
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

  function handleGuardar () {
    if (validarFormRetorno()) {
      $.ajax({
        type: 'POST',
        url: 'service/retorno.php',
        data: { materiales: db.materiales }
      })
      .done(function (snap) {
        console.log(snap)
        toast("Se ha retornado con exito")
        handleCancelar()
      })
    }
  }

  function validarFormRetorno () {
    var len = db.materiales.length
    var count = 0

    for (var i in db.materiales) {
      var item = db.materiales[i]
      if (item.devolucion == true) {
        count++
      }
    }
    if (count === 0){
      toast("No hay que devolver")
      return false
    }
    else return true
  }

  function validarForm () {
    if(db.materiales.length === 0) {
      toast("Porfavor ingrese los materiales")
      return false
    }
    else return true
  }

})()