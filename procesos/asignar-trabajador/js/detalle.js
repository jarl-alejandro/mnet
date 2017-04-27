'use strict'

var db = {}
db.materiales = []

function Detalle () {
  this.$body = $("#materialesbody")
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
    
    if(db.materiales.length === 0){
      return true
    }
    

    for(var i in db.materiales){
      var item = db.materiales[i]
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
    db.materiales.push(data)
  },

  build: function () {
    this.$body.html("")
    var total = 0
    for(var i in db.materiales) {
      var item = db.materiales[i]
      total = total + parseFloat(item.total)

      var template = `<tr>
        <td>${item.id}</td>
        <td>${item.nombre}</td>
        <td> <button class="btn btn-danger eliminar" data-index="${i}">Eliminar</button></td>
      </tr>`
      this.$body.append(template)
    }
    $("#total").html(total.toFixed(2))


    $(".eliminar").on("click", function (e) {
      e.preventDefault()
      var index = e.currentTarget.dataset.index
      db.materiales.splice(index, 1)
      this.build()
    }.bind(this))
  }

}