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
      $('.panelTerminar').slideDown()
    }
  }


  function validarForm () {
    if(db.materiales.length === 0) {
      toast("Porfavor ingrese los materiales")
      return false
    }
    else return true
  }

  function clearFormTask () {
    $('.panelTerminar').slideUp()
    $('#informe').val("")
    var cheked = Array.prototype.slice.call(document.querySelectorAll('[name="calificar"]'))
    for (var i in cheked) {
      cheked[i].checked = false
    }
  } 

  $("#cancelarPanelTarea").on('click', function (e) {
    e.preventDefault()
    clearFormTask()
  })

  $('#guardarTarea').on('click', function (e) {
    var id = e.currentTarget.dataset.id
    var calificar = document.querySelector('[name="calificar"]:checked').value
    
    if (validarTask()) {
      $.ajax({
        type: "POST",
        url: "service/guardar.php",
        data: { id, informe: $('#informe').val(), calificar }
      })
      .done(function (snap) {
        console.log(snap)
        $("#table-container").load("templates/table.php")
        clearFormTask()
        window.open(`./reporte/individual.php?id=${id}`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
      })
    }
  })

  function validarTask () {    
    if (document.querySelector('[name="calificar"]:checked') == null) {
      toast('Calique el trabajo')
      return false
    }
    if ($('#informe').val() == "") {
      $('#informe').focus()
      toast("Porfavor ingreseel informe")
      return false
    }
    else return true
  }

})()