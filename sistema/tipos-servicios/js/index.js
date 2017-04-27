;(function () {
  'use strict'

  var $nombre = $("#nombre")
  var $detalle = $("#detalle")

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
    $nombre.val("")
    $detalle.val("")
     $("#id").val("")
  }

  function getData () {
    return {
      id: $("#id").val(),
      nombre: $nombre.val(),
      detalle: $detalle.val(),
    }
  }

  function validarForm () {
    if($nombre.val() === "" || $nombre.val() === "0"){
      toast("Ingrese el nombre")
      $nombre.focus()
      return false
    }
    if($detalle.val() === "" || $detalle.val() === "0"){
      toast("Ingrese el detalle")
      $detalle.focus()
      return false
    }
    else return true
  }

})()