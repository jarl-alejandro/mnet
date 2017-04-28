;(function () {
  'use strict'

  $(".editar").on("click", handleEditar)
  $(".eliminar").on("click", handleEliminar)

  var detail = new Detail()

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
      $("#id").val(snap.servicio.cod_capsu)
      $("#nombre").val(snap.servicio.serv_capsu)
      loadMateriales(snap.materiales)
      loadHerramientas(snap.herramientas)

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

  function loadMateriales (materiales) {
    for (var i in materiales) {
      var item = materiales[i]

      var context = { code: item.code, name: item.name}
      detail.insertData(context)
    }
    detail.build()
  }

  function loadHerramientas (herramientas) {
    for (var i in herramientas) {
      var item = herramientas[i]

      var context = { code: item.code, name: item.name}
      detail.insertHerramienta(context)
    }
    detail.buildHerramienta()
  }

  $('.print').on('click', function () {
    window.open(`./reporte/lista.php`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
  })

  $('.inidividual').on('click', function (e) {
    var id = e.currentTarget.dataset.id
    window.open(`./reporte/individual.php?id=${id}`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
  })


})()