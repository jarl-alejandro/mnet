;(function () {
  'use strict'

  $(".editar").on("click", handleEditar)
  $(".eliminar").on("click", handleEliminar)

  function handleEditar (e) {
    var id = e.currentTarget.dataset.id
    $.ajax({
      type: "GET",
      data: { id },
      url: "service/get.php",
      dataType: "JSON"
    })
    .done(function (snap) {
      console.log(snap)
      $("#id").val(snap.cod_bode)
      $("#nombre").val(snap.nom_bode)
      $("#costo").val(snap.cost_bode)
      $("#cantidad").val(snap.cant_bode)
      $("#cant-max").val(snap.max_bode)
      $("#cant-min").val(snap.min_bode)
      $("#precio-costo").val(snap.preci_bode)
      $("#precio-venta-1").val(snap.vent1_bode)
      $("#precio-venta-2").val(snap.vent2_bode)
      $("#precio-venta-3").val(snap.vent3_bode)
      $("#imagen_name").val(snap.imag_bode)
      $("#categoria").val(snap.cate_bode)
      $(".imagen__visualizador").attr("src", `../../media/fotos/${snap.imag_bode}`)

      var c = document.getElementById("categoria")
      var text = c.children[c.selectedIndex].innerText

      if(text === "Herramientas") {
        $("#precio-venta-1").attr("disabled", true)
        $("#precio-venta-2").attr("disabled", true)
        $("#precio-venta-3").attr("disabled", true)
      }
      else{ 
        $("#precio-venta-1").attr("disabled", false)
        $("#precio-venta-2").attr("disabled", false)
        $("#precio-venta-3").attr("disabled", false)
      }

      $("#table-container").slideUp()
      $("#form-container").slideDown()
    })
  }

  function handleEliminar (e) {
    var id = e.currentTarget.dataset.id    

    $.ajax({
      type: "POST",
      data: { id },
      url: "service/eliminar.php"
    })
    .done(function (snap) {
      if(snap == 200) {
        toast("Se ha elimina con exito")
        $("#table-container").load("templates/table.php")
      }
    })
  }

})()