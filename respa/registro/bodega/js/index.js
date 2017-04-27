;(function () {
  'use strict'

  var precionFlag = false

  var $nombre = $("#nombre")
  var $costo = $("#costo")
  var $cantidad = $("#cantidad")
  var $cantMax = $("#cant-max")
  var $cantMin = $("#cant-min")
  var $precioVenta1 = $("#precio-venta-1")
  var $precioVenta2 = $("#precio-venta-2")
  var $precioVenta3 = $("#precio-venta-3")
  var $categoria = $("#categoria")
  var $imagen = $("#imagen")

  $("#table-container").load("templates/table.php")

  $("#show-form").on("click", handleShowForm)
  $("#guardar").on("click", handelGuardar)
  $("#cancelar").on("click", handelCancelar)
  $categoria.on("click", handleCategoria)
  $imagen.on("change", imageChange)

  function handleShowForm () {
    $("#table-container").slideUp()
    $("#form-container").slideDown()
  }

  function handleCategoria (){
    var categoria = $categoria.val()
    var c = document.getElementById("categoria")
    var text = c.children[c.selectedIndex].innerText

    if(text === "Herramientas") {
      $precioVenta1.attr("disabled", true)
      $precioVenta2.attr("disabled", true)
      $precioVenta3.attr("disabled", true)
      precionFlag = true
    }
    else{ 
      $precioVenta1.attr("disabled", false)
      $precioVenta2.attr("disabled", false)
      $precioVenta3.attr("disabled", false)
      precionFlag = false
    }
    
  }

  function handelGuardar (e) {
    if(validarForm()){
      $.ajax({
        type: "POST",
        url: "service/guardar.php",
        data: getData(),
        cache: false,
				contentType: false,
				processData: false
      })
      .done(function (snap) {
        console.log(snap)
        if (snap == 201) {
          toast("Se ha guardado con exito")
          $("#table-container").load("templates/table.php")
          handelCancelar()
        }
        else toast("Tenemos algun problema")
      })
    }
  }

  function handelCancelar () {
    $("#table-container").slideDown()
    $("#form-container").slideUp()
    $("#id").val("")
    $nombre.val("")
    $costo.val("")
    $cantidad.val("")
    $cantMax.val("")
    $cantMin.val("")
    $precioVenta1.val("")
    $precioVenta2.val("")
    $precioVenta3.val("")
    $imagen.val("")
    $categoria.val("")
    $precioVenta1.attr("disabled", false)
    $precioVenta2.attr("disabled", false)
    $precioVenta3.attr("disabled", false)
    $(".imagen__visualizador").attr("src", "")
    $("#imagen_name").val("")
  }

  function imageChange (e) {
		var upload = document.querySelector('#imagen')
		var visualizador = document.querySelector(".imagen__visualizador")

		var file = e.target.files[0]
    console.log(file)
		if (file.size > (1024 * 1024 * 2)) {
			alerta("No puede subir imagenes mas de 2mb")
			return false
		}

		var reader = new FileReader()
		reader.onload = (function (theFile) {
			return function (e) {
				visualizador.src = e.target.result
				$("#imagen_name").val(e.target.result)
			}
		})(file)
		reader.readAsDataURL(file)
	}

  function getData () {
    var formData = new FormData()
		var file_image = document.getElementById("imagen")

    formData.append("id", $("#id").val())
    formData.append("nombre", $nombre.val())
    formData.append("costo", $costo.val())
    formData.append("cantidad", $cantidad.val())
    formData.append("cantMax", $cantMax.val())
    formData.append("cantMin", $cantMin.val())
    formData.append("categoria", $categoria.val())
    formData.append("precioVenta1", $precioVenta1.val())
    formData.append("precioVenta2", $precioVenta2.val())
    formData.append("precioVenta3", $precioVenta3.val())
    formData.append("imagen", file_image.files[0])
    formData.append("is_imagen", file_image.files.length)

    return formData
  }

  function validarForm () {
    if($nombre.val() === "" || $nombre.val() === "0"){
      toast("Ingrese el nombre")
      $nombre.focus()
      return false
    }
    if($costo.val() === "" || $costo.val() == 0){
      toast("Ingrese el costo")
      $costo.focus()
      return false
    }
    if($cantidad.val() === "" || $cantidad.val() == 0){
      toast("Ingrese el cantidad")
      $cantidad.focus()
      return false
    }
    if($cantMax.val() === "" || $cantMax.val() == 0){
      toast("Ingrese el cantidad maxima")
      $cantMax.focus()
      return false
    }
    if(parseInt($cantMax.val()) < parseInt($cantidad.val())){
      toast("La cantidad no puede ser mayor que la cantidad maxima")
      $cantidad.focus()
      return false
    }
    if($cantMin.val() === "" || $cantMin.val() == 0){
      toast("Ingrese el cantidad maxima")
      $cantMin.focus()
      return false
    }
    if(parseInt($cantidad.val()) < parseInt($cantMin.val())){
      toast("La cantidad minima no puede ser mayor que la cantidad")
      $cantidad.focus()
      return false
    }
    if($categoria.val() === ""){
      toast("Ingrese la categoria")
      $categoria.focus()
      return false
    }
    if(precionFlag == false) {
      if($precioVenta1.val() === "" || $precioVenta1.val() == 0){
        toast("Ingrese el precio de venta 1")
        $precioVenta1.focus()
        return false
      }
      if($precioVenta2.val() === "" || $precioVenta2.val() == 0){
        toast("Ingrese el precio de venta 2")
        $precioVenta2.focus()
        return false
      }
      if($precioVenta3.val() === "" || $precioVenta3.val() == 0){
        toast("Ingrese el precio de venta 3")
        $precioVenta3.focus()
        return false
      }
    }
    
    if($("#imagen_name").val() == ""){
      toast("Ingrese la imagen")
      $imagen.focus()
      return false
    }
    else return true
  }

})()