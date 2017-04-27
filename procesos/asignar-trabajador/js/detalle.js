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

    if(db.materiales.length === 0){
      return true
    }

    for(var i in db.materiales){
      var item = db.materiales[i]
      if(item.codigo == object.codigo){
        toast(`Ya existe el material ${item.name}`)
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

      alert(JSON.stringify(item))

      var template = `<tr>
        <td>${item.cantidadCliente}</td>
        <td>${item.nombre}</td>
        <td>${item.precio}</td>
        <td id="${i}_total">${item.total}</td>
      </tr>`
      this.$body.append(template)
    }
    $("#total").html(total.toFixed(2))

    $(".cant").keyup(function (e) {
      var cant = e.currentTarget.dataset.cant
      var index = e.currentTarget.dataset.index
      var precio = e.currentTarget.dataset.precio

      var input = $(`#${index}_cant`)
      if(parseInt(cant) < parseInt(this.value) ){
        input.val("0")
        toast(`No puede ingresar mas de ${cant}`)
        input.focus()
        return false
      }
      else {
        var total = parseFloat(precio) * parseInt(input.val())
        db.materiales[index].cantidadCliente = parseInt(input.val())
        db.materiales[index].total = total.toFixed(2)
        // $(`#${index}_total`).html(total.toFixed(2))
        this.build()
      }
    }.bind(this))

    $(".eliminar").on("click", function (e) {
      e.preventDefault()
      var index = e.currentTarget.dataset.index
      db.materiales.splice(index, 1)
      this.build()
    }.bind(this))
  }

}