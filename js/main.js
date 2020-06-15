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
    var lista_productos = document.getElementById('lista-productos');
    var suma_total= document.getElementById('suma-total');

    // Extras
    var camisas = document.getElementById('camisa-evento');
    var etiquetas = document.getElementById('etiquetas');

    //Eventos
    calcular.addEventListener('click', calcularTotal);
    pase_dia.addEventListener('blur', mostrarDias);
    pase_dosdias.addEventListener('blur', mostrarDias);
    pase_completo.addEventListener('blur', mostrarDias);

    nombre.addEventListener('blur', validarCampos);
    apellido. addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampos);

    email.addEventListener('blur', validarEmail);

    // Funciones
    function calcularTotal(event){
      event.preventDefault();
      if(regalo.value == ''){
        alert("You must choose a Gift!!");
        regalo.focus();
      }else{
        var ticketDia= parseInt(pase_dia.value, 10) || 0,
            ticket2Dias= parseInt(pase_dosdias.value, 10) || 0,
            ticketCompleto = parseInt(pase_completo.value, 10) || 0,
            totalCamisas = parseInt(camisas.value, 10) || 0,
            totalEtiquetas = parseInt(etiquetas.value, 10) || 0;

        var costeTickets = (ticketDia * 30) + (ticket2Dias * 45) + (ticketCompleto * 50);
        var total = costeTickets + ((totalCamisas * 10)*0.93) + (totalEtiquetas * 2);
        var listadoProductos = [];

        if(ticketDia >= 1)
          listadoProductos.push(ticketDia + ' - One Day pass');
        
        if(ticket2Dias >= 1)
          listadoProductos.push(ticket2Dias + ' - Two Day pass');

        if(ticketCompleto >= 1)
          listadoProductos.push(ticketCompleto + ' - Full pass');
        
        if(totalCamisas >= 1)
          listadoProductos.push(totalCamisas + ' - Number of T-shirts');
        
        if(totalEtiquetas >= 1)
          listadoProductos.push(totalEtiquetas + ' - Number of Sticker Packs');

        lista_productos.style.display= "block"; 
        lista_productos.innerHTML = '';
        for(var i= 0; i < listadoProductos.length; i++){
          lista_productos.innerHTML += listadoProductos[i] + '</br>';
        }

        suma_total.innerHTML = total.toFixed(2) + ' €';
      }
    }

    function mostrarDias(){
      var ticketDia= parseInt(pase_dia.value, 10) || 0,
          ticket2Dias= parseInt(pase_dosdias.value, 10) || 0,
          ticketCompleto = parseInt(pase_completo.value, 10) || 0.

      var dias_elegidos = [];

      if (ticketDia > 0){
        dias_elegidos.push('viernes');
      }
      if (ticket2Dias > 0){
        dias_elegidos.push('viernes', 'sabado');
      }
      if (ticketCompleto > 0){
        dias_elegidos.push('viernes', 'sabado', 'domingo');
      }

      for(var i= 0; i < dias_elegidos.length; i++){
        document.getElementById(dias_elegidos[i]).style.display= 'block';
      }
    }

    function validarCampos(){
      if(this.value == ''){
        errorDiv.style.display='block';
        errorDiv.innerHTML = 'This field is needed';
        this.style.border = '1px solid red';
      } else {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      }
    }

    function validarEmail(){
      if(this.value.indexOf("@") > -1){
        this.style.border = '1px solid #cccccc';
      }else{
        errorDiv.style.display='block';
        errorDiv.innerHTML = 'The Email introduced is not valid (@)';
        this.style.border = '1px solid red';
      }
    }

  }); //DOM CONTENT LOADED

})();