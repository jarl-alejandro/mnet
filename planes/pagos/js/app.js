;(function () {
  'use strict'

  $(".pago").on("click", handlePago)

  function handlePago (e) {
    var id = e.currentTarget.dataset.id

     swal({
      title: '¿Usted esta seguro?',
      text: "De confirmar el pago!",
      type: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar <i class="fa fa-thumbs-up"></i>',
      cancelButtonText:'Cancelar <i class="fa fa-thumbs-down"></i>',
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger no-margin',
    }).then(function () {
      $.ajax({
        type: "POST",
        url: "service/confirmar.php",
        data: { id }
      })
      .done(function (snap) {
        console.log(snap)
        $("#table-container").load("templates/table.php")
        if(snap == 2){
          window.open(`./reporte/individual.php?id=${id}`, "_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=50, left=60, width=1200, height=600")
          toast("Se ha confirmado con exito el pago")
          swal('Buen trabajo!','Se ha confirmado con exito.', 'success')
        } 
        else toast("Tenemos problemas intente mas tarde")
      })
    }, function (dismiss) {
       if (dismiss === 'cancel') {
        swal('Cancelado', 'No se ha confirmado el pago', 'error')
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