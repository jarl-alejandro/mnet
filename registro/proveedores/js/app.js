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
      $("#id").val(snap.cod_prove)
      $("#nombre").val(snap.nom_prove)
      $("#email").val(snap.emi_prove)
      $("#telefono").val(snap.tel_prove)
      $("#celular").val(snap.cel_prove)
      $("#direccion").val(snap.dir_prove)

      $("#nombre-contacto").val(snap.nom_contac)
      $("#email-contacto").val(snap.emi_contac)
      $("#telefono-contacto").val(snap.tel_contac)
      $("#celular-contacto").val(snap.cel_contac)

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