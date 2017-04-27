;(function () {
  'use strict'

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

  $('#table-misPedidos').load('template/table.php')

  $('.pedidos-cliente').on('click', handleShowPedidos)
  $('#cerrar-ped').on('click', handleClosePedidos)
  $('.show-new-ped').on('click', handleShowForm)
  $('#cancelarPed').on('click', handleCancelPed)
  $('#guardarPed').on('click', handleSavePed)

  function handleShowPedidos () {
    $('.mis-pedidos').slideDown()
  }

  function handleClosePedidos () {
    $('.mis-pedidos').slideUp()
    handleCancelPed()
  }

  function handleShowForm () {
    $('#table-misPedidos').slideUp()
    $('#form-container').slideDown()
  }

  function handleCancelPed () {
    $('#table-misPedidos').slideDown()
    $('#form-container').slideUp()

    $servicio.val("")
    $cliente.val("")
    $tecnico.val("")
    $fecha.val("")
    $fechaVisita.val("")
    $horaVisita.val("")
  }

  function handleSavePed () {
        if(validarForm()){
      $.ajax({
        url: "service/guardar-pedido.php",
        data: { servicio: $servicio.val(), cliente: $cliente.val(),
                fecha: $fecha.val(), fechaVisita: $fechaVisita.val(), horaVisita: $horaVisita.val()
              },
        type: "POST"
      })
      .done(function (snap) {
        console.log(snap)
        if(snap == 201){
          toast("Se ha guardado con exito")
          $('#table-misPedidos').load('template/table.php')          
          handleCancelPed()
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