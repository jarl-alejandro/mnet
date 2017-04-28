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
      $("#id").val(snap.ced_cli)
      $("#cedula").val(snap.ced_cli)
      $("#nombre").val(snap.nom_cli)
      $("#apellido").val(snap.ape_cli)
      $("#email").val(snap.emi_cli)
      $("#telefono").val(snap.tel_cli)
      $("#celular").val(snap.cel_cli)
      $("#direccion").val(snap.dir_cli)

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

  $('.print').on('click', function () {
    window.open(`./reporte/lista.php`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
  })

  $('.inidividual').on('click', function (e) {
    var id = e.currentTarget.dataset.id
    window.open(`./reporte/individual.php?id=${id}`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
  })


})()