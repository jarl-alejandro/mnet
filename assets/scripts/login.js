;(function (){
  'use strict'

  var $email = $('#email')
  var $password = $('#password')
  //show-new-ped


  $('.inicar-cliente').on('click', handleIniciarCliente)
  $('#cancelar').on('click', handleCancelar)
  $('#ingresar').on('click', handleIngresar)

  function handleIniciarCliente () {
    $('.login-cliente').slideDown()    
  }

  function handleCancelar () {
    $('.login-cliente').slideUp()
    $email.val('')
    $password.val('')
  }

  function handleIngresar () {
    if (validarLogin()) {
      $.ajax({
        type: 'POST',
        url: 'service/login_cliente.php',
        data: { email: $email.val(), password: $password.val() }
      })
      .done(function (snap) {
        console.log(snap)
        if (snap == 200) {
          toast('Ha iniciado sesión correcramente')
          handleCancelar()
          setTimeout(function (){
            location.reload()
          }, 600)
        }
        else toast('Usuario no existe')
      })
    }
  }

  function validarLogin () {
    if ($email.val() === '') {
      $email.focus()
      toast('Ingrese su email')
      return false
    }
    if ($password.val() === '') {
      $password.focus()
      toast('Ingrese su contraseña')
      return false
    }
    else return true
  }

})()