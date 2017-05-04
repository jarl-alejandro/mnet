;(function (){
  'use strict'

  var $password = $("#password")

  $('#guardar').on('click', function (e) {
    e.preventDefault()
    if (validar()){
      $.ajax({
        type: "POST",
        url: "service/guardar.php",
        data: { password: $password.val() }
      })
      .done(function (snap) {
        console.log(snap)
        if (snap == 201) {
          toast("Se ha cambiadocon exito su contraseña")
          $password.val("")
        }
      })
    }

  })

  function validar () {
    if($password.val() == "") {
      toast("Ingrese tu nueva contraseña")
      $password.focus()
      return false
    }
    if($password.val().length < 8) {
      toast("Debe ingresar una contraseña igual o mayor que 8 caracteres")
      $password.focus()
      return false
    }
    return true
  }

})()