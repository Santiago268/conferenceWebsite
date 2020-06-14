(function(){
  "use strict";

  var regalo= document.getElementById('regalo');
  document.addEventListener('DOMContentLoaded', function(){
    console.log("listo");

    // Campos datos de usuario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    // Campos para los tickets
    var pase_dia = document.getElementById('pase-dia');
    var pase_completo = document.getElementById('pase-completo');
    var pase_dosdias = document.getElementById('pase-dosdias');

    // Botones & Div
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var resultado = document.getElementById('lista-productos');

    // Extras
    var camisas = document.getElementById('camisa_evento');
    var etiquetas = document.getElementById('etiquetas');

    calcular.addEventListener('click', calcularTotal);



    function calcularTotal(event){
      event.preventDefault();
      if(regalo.value == ''){
        alert("You must choose a Gift!!");
        regalo.focus();
      }else{
        var ticketDia= parseInt(pase_dia.value, 10) || 0,
            ticket2Dias= parseInt(pase_dosdias.value, 10) || 0,
            ticketCompleto = parseInt(pase_completo.value, 10) || 0,
            totalCamisas = parseInt(camisas, 10) || 0,
            totalEtiquetas = parseInt(etiquetas, 10) || 0;

        var costeTickets = (ticketDia * 30) + (ticket2Dias * 45) + (ticketCompleto * 50);
        var total = costeTickets + ((totalCamisas * 10)*0.93) + (etiqtotalEtiquetasuetas * 2);
        console.log(total);
      }
    }

  }); //DOM CONTENT LOADED

})();