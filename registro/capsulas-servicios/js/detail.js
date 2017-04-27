'use strict'

var db = {}
db.capsulas = []
db.herramientas = []
db.bodega = []

var Detail = function Detail(){
  this.$body = $("#capsula-detail")
  this.$bodyHerramientas = $("#herramientas-detail")
}

Detail.prototype = {

  addHerramienta: function addHerramienta (object) {
    if(this.existHerramienta(object)) {
      this.insertHerramienta(object)
      this.buildHerramienta()
      $(".panel-herramienta").slideUp()
    }
  },

  existHerramienta: function existHerramienta (object) {
    var flag = false

    if(db.herramientas.length === 0){
      return true
    }

    for(var i in db.herramientas){
      var item = db.herramientas[i]
      if(item.code == object.code){
        toast(`Ya existe la capsula ${item.name}`)
        return false
      }
      else flag = true
    }
    return flag
  },
  insertHerramienta: function insertHerramienta (object) {
    db.herramientas.push(object)
    db.bodega.push(object)
  },

  add: function add (object) {
    if(this.existCapsula(object)) {
      this.insertData(object)
      this.build()
      $(".panel-capsula").slideUp()
    }
  },

  existCapsula: function existCapsula (object) {
    var flag = false

    if(db.capsulas.length === 0){
      return true
    }

    for(var i in db.capsulas){
      var item = db.capsulas[i]
      if(item.code == object.code){
        toast(`Ya existe la capsula ${item.name}`)
        return false
      }
      else flag = true
    }
    return flag
  },

  insertData: function insertData (object) {
    db.capsulas.push(object)
    db.bodega.push(object)
  },

  build: function build () {
    this.$body.html("")
    for(var i in db.capsulas){
      var item = db.capsulas[i]
      var trTag = `<tr>
        <td>${ item.code }</td>
        <td>${ item.name }</td>
        <td class="text-center">
          <button class="btn btn-embossed btn-danger eliminarCapsula" data-index="${i}">
            <i class="fa fa-trash-o"></i>
          </button>
        </td>
      </tr>`
      this.$body.append(trTag)
    }

    $(".eliminarCapsula").on("click", function (e) {
      e.preventDefault()
      var index = e.currentTarget.dataset.index
      db.capsulas.splice(index, 1)
      this.build()
    }.bind(this))
  },

  buildHerramienta: function buildHerramienta () {
    this.$bodyHerramientas.html("")
    for(var i in db.herramientas){
      var item = db.herramientas[i]
      var trTag = `<tr>
        <td>${ item.code }</td>
        <td>${ item.name }</td>
        <td class="text-center">
          <button class="btn btn-embossed btn-danger eliminarHerramienta" data-index="${i}">
            <i class="fa fa-trash-o"></i>
          </button>
        </td>
      </tr>`
      this.$bodyHerramientas.append(trTag)
    }

    $(".eliminarHerramienta").on("click", function (e) {
      e.preventDefault()
      var index = e.currentTarget.dataset.index
      db.herramientas.splice(index, 1)
      this.buildHerramienta()
    }.bind(this))
  }

}
