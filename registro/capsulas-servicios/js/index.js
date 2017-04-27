;(function () {
  'use strict'

  var $nombre = $("#nombre")

  $("#table-container").load("templates/table.php")

  $("#show-form").on("click", handleShowForm)
  $("#guardar").on("click", handelGuardar)
  $("#cancelar").on("click", handelCancelar)
  $("#show-capsula").on("click", handleShowCapsula)
  $("#closeCapsula").on("click", handleCloseCapsula)
  $("#aceptCapsula").on("click", handleAceptCapsula)

  $("#show-herramienta").on("click", handleShowHerramienta)
  $("#closeHerramienta").on("click", handleCloseHerramienta)
  $("#aceptHerramienta").on("click", handleAceptHerramienta)

  var detail = new Detail()

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
    $("#id").val("")
    db.capsulas = []
    db.herramientas = []
    db.bodega = []
    $("#capsula-detail").html('<tr><td colspan="3" class="text-center">Ingrese materiales</td></tr>')
    $("#herramientas-detail").html('<tr><td colspan="3" class="text-center">Ingrese herramientas</td></tr>')
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
        var code = item.dataset.id
        var name = item.dataset.name
        detail.add({ code, name })
        item.checked = false
      }
      else count++
    }
    if(capsula.length === count)
      toast("No ha ingresado ninguna materiales")
  }

  function handleShowHerramienta () {
    $(".panel-herramienta").slideDown()
  }

  function handleCloseHerramienta () {
    $(".panel-herramienta").slideUp()
  }

  function handleAceptHerramienta () {
    var HerramientaList = document.querySelectorAll(".HerramientaList")
    var herrmienta = Array.prototype.slice.call(HerramientaList)
    var count = 0

    for (var i in herrmienta) {
      var item = herrmienta[i]
      if(item.checked === true){
        var code = item.dataset.id
        var name = item.dataset.name
        detail.addHerramienta({ code, name })
        item.checked = false
      }
      else count++
    }
    if(herrmienta.length === count)
      toast("No ha ingresado ninguna herrmienta")    
  }

  function getData () {
    return {
      id: $("#id").val(),
      nombre: $nombre.val(),
      bodegas: db.bodega
    }
  }

  function validarForm () {
    if($nombre.val() === "" || $nombre.val() === "0"){
      toast("Ingrese el service")
      $nombre.focus()
      return false
    }
    if(db.capsulas.length === 0){
      toast("Ingrese ls materiales")
      handleShowCapsula()
      return false
    }
    if(db.herramientas.length === 0){
      toast("Ingrese las herramientas")
      handleShowHerramienta()
      return false
    }
    else return true
  }

  

})()