;(function () {
  'use strict'

  var $iva = $("#iva")
  var $factura = $("#factura")
  var $caduca = $("#caduca")

handleShowForm()

  // $("#show-form").on("click", handleShowForm)
  $("#guardar").on("click", handelGuardar)
  // $("#cancelar").on("click", handelCancelar)

  function handleShowForm () {
    $.ajax({
      type: "GET",
      url: "service/get.php",
      dataType: "JSON"
    })
    .done(function (snap) {
      $iva.val(snap.iva_param)
      $factura.val(snap.fact_param)
      $caduca.val(snap.cadu_param)
      $("#form-container").slideDown()
    })
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
          // handelCancelar()
        }
        else toast("Tenemos algun problema")
      })
    }
  }

  function handelCancelar () {
    $("#table-container").slideDown()
    $("#form-container").slideUp()
    $iva.val("")
    $factura.val("")
    $caduca.val("")
  }

  function getData () {
    return {
      iva: $iva.val(),
      factura: $factura.val(),
      caduca: $caduca.val(),
    }
  }

  function validarForm () {
    if($iva.val() === "" || $iva.val() === "0"){
      toast("Ingrese el iva")
      $iva.focus()
      return false
    }
    if($factura.val() === "" || $factura.val() === "0"){
      toast("Ingrese el factura")
      $factura.focus()
      return false
    }
    if($caduca.val() === "" || $caduca.val() === "0"){
      toast("Ingrese el caduca")
      $caduca.focus()
      return false
    }
    else return true
  }

})()