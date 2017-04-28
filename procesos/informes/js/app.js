;(function () {
  'use strict'

  var detalle = new Detalle()

  $(".editar").on("click", handleEditar)
  
  $('.buttonTerminar').on('click', function (e) {
    document.getElementById('guardarTarea').dataset.id = e.currentTarget.dataset.id
    $('.panelTerminar').slideDown()
  })

  function handleEditar (e) {
    var id = e.currentTarget.dataset.id
    $.ajax({
      type: "GET",
      data: { id },
      url: "service/get.php",
      dataType: "JSON"
    })
    .done(function (snap){
      console.log(snap)
      $("#id").val(id)
      document.getElementById('guardarTarea').dataset.id = id
      $("#servicio").val(snap.pedido.cod_ped)
      // $("#tecnico").val(snap.tecnico.tec_trab)
      // $("#cliente").val(snap.pedido.clie_ped)
      // $("#fecha-pedido").val(snap.pedido.fech_ped)
      // $("#fecha-visita").val(snap.pedido.fevis_ped)
      // $("#hora-visita").val(snap.pedido.hovis_ped)
      //loadEmpleados(snap.empleados)
      loadMateriales(snap.materiales)
      $("#table-container").slideUp()
      $("#form-container").slideDown()
    })
  }

  function loadEmpleados(empleados) {
    for(var i in empleados){
      var item = {
        id: empleados[i].id,
        nombre: empleados[i].nombre,
      }
      detalle.insertData(item)
    }
    detalle.build()
  }

  function loadMateriales(materiales) {
    for(var i in materiales){
      var item = materiales[i]
      item.devolucion = false
      detalle.insertDataMaterial(item)
    }
    detalle.buildMateria()
  }

})()