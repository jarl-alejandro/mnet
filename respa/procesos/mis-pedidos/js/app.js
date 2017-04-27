;(function () {
  'use strict'

  var detalle = new Detalle()

  $(".confirmar__pedido").on("click", handleConfirmar)
  $(".editar").on("click", handleEditar)

  function handleConfirmar (e) {
    var id = e.currentTarget.dataset.id
    swal({
      title: '¿Usted esta seguro?',
      text: "De confirmar el pedido!",
      type: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar <i class="fa fa-thumbs-up"></i>',
      cancelButtonText:'Cancelar <i class="fa fa-thumbs-down"></i>',
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger no-margin',
    }).then(function () {
      window.open(`./reporte/individual.php?id=${id}`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
      $.ajax({
        type: "POST",
        url: "service/confirmar.php",
        data: { id }
      })
      .done(function (snap) {
        $("#table-container").load("templates/table.php")
        if(snap == 2){
          toast("Se ha confirmado con exito la cotizacion")
          swal('Buen trabajo!','Se ha confirmado con exito.', 'success')
        } 
        else toast("Tenemos problemas intente mas tarde")
      })
    }, function (dismiss) {
       if (dismiss === 'cancel') {
        swal('Cancelado', 'No se ha confirmado la cotizacion', 'error')
      }
    })
  }

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
      $("#servicio").val(snap.pedido.serv_ped)
      $("#cliente").val(snap.pedido.clie_ped)
      $("#tecnico").val(snap.pedido.tecn_ped)
      $("#fecha-pedido").val(snap.pedido.fech_ped)
      $("#fecha-visita").val(snap.pedido.fevis_ped)
      $("#hora-visita").val(snap.pedido.hovis_ped)
      loadMateriales(snap.materiales)
      $("#table-container").slideUp()
      $("#form-container").slideDown()
    })
  }

  function loadMateriales(materiales) {
    for(var i in materiales){
      var item = materiales[i]
      item.total = "0.00"
      item.cantidadCliente = "0.00"
      detalle.insertData(item)
    }
    detalle.build()
  }


})()