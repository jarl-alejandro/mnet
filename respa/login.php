<?php 
session_start();
if(isset($_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"])){
  header("Location: sistema/parametros");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Mundonet</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/mundonet.css">
    <link rel="stylesheet" href="assets/css/flat.css">
</head>

<body class="body-Login-back">
    <div id="toast">Hola</div>
    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Iniciar Sesión</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" id="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" type="password" value="">
                                </div>
                                <!--<div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>-->
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" id="ingresar">Ingresar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/scripts/validaciones.js"></script>

    <script>
        var $email = $("#email")
        var $password = $("#password")

        $("#ingresar").on("click", handleIngresar)

        function handleIngresar (e) {
            e.preventDefault()
            if(validar()){
                $.ajax({
                    type: "POST",
                    url: "service/login.php",
                    data: { email: $email.val(), password: $password.val() }
                })
                .done(function (snap) {
                    console.log(snap)
                    if(snap == 200){
                        toast("Ha iniciado sesión con exito")
                        location.reload()
                    }
                    else{
                        toast("Usuario no existe")
                    }
                })
            }
        }

        function validar() {
            if($email.val() === ""){
                toast("Ingrese el email")
                email.focus()
                return false
            }
            if($password.val() === ""){
                toast("Ingrese el password")
                password.focus()
                return false
            }
            else return true
        }
    </script>

</body>

</html>
