'use strict'

var db = {}
db.materiales = []
db.empleados = []

function Detalle () {
  this.$body = $("#empleadosbody")
  this.$bodyMaterial = $("#materialesbody")
}

Detalle.prototype = {
  add: function (data) {
    if(this.existCapsula(data)) {
      this.insertData(data)
      this.build()
      $(".panel-capsula").slideUp()
    }
  },

  existCapsula: function (object) {
    var flag = false
    
    if ($("#tecnico").val() == object.id) {
      toast(`El empleado ${object.nombre} no puede ingresar por que es tecnico responsable`)
      return false
    }    
    if(db.empleados.length === 0){
      return true
    }

    for(var i in db.empleados){
      var item = db.empleados[i]
      if(item.id == object.id){
        toast(`Ya existe el empleado ${item.nombre}`)
        return false
      }
      else if ($("#tecnico").val() == object.id) {
        toast(`El empleado ${item.nombre} no puede ingresar por que es tecnico responsable`)
        return false
      }
      else flag = true
    }
    return flag
  },

  insertData: function (data) {
    db.empleados.push(data)
  },

  insertDataMaterial: function (data) {
    db.materiales.push(data)
  },

  build: function () {
    this.$body.html("")
    var total = 0
    for(var i in db.empleados) {
      var item = db.empleados[i]
      total = total + parseFloat(item.total)

      var template = `<tr>
        <td>${item.id}</td>
        <td>${item.nombre}</td>
      </tr>`
      this.$body.append(template)
    }
    $("#total").html(total.toFixed(2))


    $(".eliminar").on("click", function (e) {
      e.preventDefault()
      var index = e.currentTarget.dataset.index
      db.empleados.splice(index, 1)
      this.build()
    }.bind(this))
  },

  buildMateria: function () {
    this.$bodyMaterial.html("")
    var total = 0
    for(var i in db.materiales) {
      var item = db.materiales[i]
      total = total + parseFloat(item.total)

      var template = `<tr>
        <td><input onkeypress="numeros()" class="form-control editarRetorno" value="${item.cant}" 
            data-index="${i}" data-precio="${item.precio}" data-cant="${item.cant}"/></td>
        <td>${item.nombre}</td>
        <td>${item.precio}</td>
        <td id="${i}_total">${item.total}</td>
      </tr>`
      this.$bodyMaterial.append(template)
    }
    $("#total-material").html(total.toFixed(2))

    $(".editarRetorno").keyup(function (e) {
      e.preventDefault()
      var index = e.currentTarget.dataset.index
      var precio = e.currentTarget.dataset.precio
      var cantMax = e.currentTarget.dataset.cant
      var cant = $(this).val()
      
      if (cantMax > cant) {
        var total = parseFloat(precio) * parseInt(cant)
        $(`#${index}_total`).html(total.toFixed(2))
        db.materiales[index].cant = cant
        db.materiales[index].total = total
        db.materiales[index].devolucion = true
      }
      else {
        toast(`No puede ingresar mas de ${cantMax}`)
        $(this).val(cantMax)
      }
    })

  }

}