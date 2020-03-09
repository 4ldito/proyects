(function() {
  "use strict";

  let regalo = document.getElementById("regalo");

  document.addEventListener("DOMContentLoaded", function() {
    var map = L.map("mapa", {
      center: [-33.897109, -61.09952],
      zoom: 15.4
    });

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-33.897109, -61.09952])
      .addTo(map)
      .bindTooltip("El evento se realizará aquí")
      .openTooltip();

    // var map = L.map("mapa").setView([(-33.897109, -61.09952)], 13);

    //  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    //  }).addTo(map);

    // Campos datos usuario
    let nombre = document.getElementById("nombre");
    let apellido = document.getElementById("apellido");
    let email = document.getElementById("email");

    //  Campos Entradas

    let pase_dia = document.getElementById("pase_dia");
    let pase_completo = document.getElementById("pase_completo");
    let pase_dos_dias = document.getElementById("pase_dos_dias");

    // Botones y divs

    let calcular = document.getElementById("calcular");
    let errorDiv = document.getElementById("error");
    let botonPago = document.getElementById("confirmar_pago");
    let listadoProductos = document.getElementById("lista-productos");
    let suma = document.getElementById("suma-total");

    // Extras

    let etiquetas = document.getElementById("etiquetas");
    let remeras = document.getElementById("camisa-evento");
    let descuentoRemeras = 0.15; // Descuento del 15% en las remeras

    // Calcular montos, Mostrar listado de productos

    if (document.getElementById("calcular")) {
      calcular.addEventListener("click", calcularMontos);

      // Mostrar los dias disponibles
      pase_dia.addEventListener("blur", mostrarDias);
      pase_completo.addEventListener("blur", mostrarDias);
      pase_dos_dias.addEventListener("blur", mostrarDias);

      // Validacion de campos

      nombre.addEventListener("blur", validarCampos);
      apellido.addEventListener("blur", validarCampos);
      // email.addEventListener("blur", validarCampos);  // No funciona porque siempre le pone el display block la funcion de abajo
      email.addEventListener("blur", validarMail);

      function validarCampos() {
        if (this.value.length < 2) {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "Este campo es obligatorio";
          this.style.border = "1px solid #fe4918";
          // this.style.borderRadius = "3px"
        } else {
          this.style.border = "1px solid #A9A9A9";
          errorDiv.style.display = "none";
        }
      }

      function validarMail() {
        if (this.value.indexOf("@") >= 0) {
          this.style.border = "1px solid #A9A9A9";
          errorDiv.style.display = "none";
        } else {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "El email debe tener un @";
          this.style.border = "1px solid #fe4918";
        }
      }

      function calcularMontos(event) {
        event.preventDefault();

        if (regalo.value === "") {
          alert("Elige un regalo");
          regalo.focus();
        } else {
          let totalPagar =
            pase_dia.value * 20 +
            pase_completo.value * 50 +
            pase_dos_dias.value * 35 +
            etiquetas.value * 2 +
            remeras.value * (10 - 10 * descuentoRemeras);

          // console.log(totalPagar);
          // console.log(remeras.value * (10 - (10 * descuentoRemeras)));

          let listaProductos = [];
          // Pases
          if (pase_dia.value > 0) {
            listaProductos.push("Pases por un día: " + pase_dia.value);
          }
          if (pase_dos_dias.value > 0) {
            listaProductos.push("Pases por dos días: " + pase_dos_dias.value);
          }
          if (pase_completo.value > 0) {
            listaProductos.push("Pases Completos: " + pase_completo.value);
          }
          // Extras - Regalos
          if (remeras.value > 0) {
            listaProductos.push("Remeras: " + remeras.value);
          }
          if (etiquetas.value > 0) {
            listaProductos.push("Etiquetas: " + etiquetas.value);
          }
          listadoProductos.style.display = "block";
          listadoProductos.innerHTML = "";

          for (let i = 0; i < listaProductos.length; i++) {
            listadoProductos.innerHTML += listaProductos[i] + "</br>";
          }

          suma.innerHTML = "$" + totalPagar.toFixed(2);

          // console.log(listaProductos);
        }
      }

      function mostrarDias(event) {
        document.getElementById("eventos").style.display = "none";
        document.getElementById("viernes").style.display = "none";
        document.getElementById("sabado").style.display = "none";
        document.getElementById("domingo").style.display = "none";

        let diasElegidos = [];

        if (pase_completo.value > 0) {
          diasElegidos.push("viernes", "sabado", "domingo");
          document.getElementById("eventos").style.display = "block";
        }

        if (pase_dia.value > 0) {
          diasElegidos.push("viernes");
          document.getElementById("eventos").style.display = "block";
        }
        if (pase_dos_dias.value > 0) {
          diasElegidos.push("viernes", "sabado");
          document.getElementById("eventos").style.display = "block";
        }

        for (let i = 0; i < diasElegidos.length; i++) {
          document.getElementById(diasElegidos[i]).style.display = "block";
        }

        // console.log(pase_dos_dias.value);
        // console.log(pase_dia.value);
        // console.log(pase_completo.value);
      }
    }
  });
})();

$(function() {
  // Lettering

  $(".nombre-sitio").lettering();

  // Menu Fijo

  let windowHeight = $(window).height();
  let barraAltura = $(".barra").innerHeight();

  $(window).scroll(function() {
    let scroll = $(window).scrollTop();

    if (scroll > windowHeight) {
      $(".barra").addClass("fixed");
      $("body").css({ "margin-top": barraAltura + "px" });
    } else {
      $(".barra").removeClass("fixed");
      $("body").css({ "margin-top": "0px" });
    }
  });

  // menu responsive

  $(".menu-movil").click(function() {
    $(".navegacion-principal").slideToggle();
  });

  $(".programa-evento .info-curso:first").show();
  $(".menu-programa a:first").addClass("activo");

  $(".menu-programa a").on("click", function() {
    $(".menu-programa a").removeClass("activo");
    $(this).addClass("activo");

    var enlace = $(this).attr("href");
    $(".programa-evento .info-curso").fadeOut();
    $(enlace).fadeIn();
    return false;
  });

  // Animaciones Numeros
  let firstTime = true;

  if (".resumen-evento") {

    $(".resumen-evento").waypoint(function() {
          if (firstTime) {

        firstTime = false;
        $(".resumen-evento li:nth-child(1) p:first").animateNumber(
            { number: 6 },
            1200
          );
          $(".resumen-evento li:nth-child(2) p:first").animateNumber(
            { number: 15 },
            1600
          );
          $(".resumen-evento li:nth-child(3) p:first").animateNumber(
            { number: 3 },
            1100
          );
          $(".resumen-evento li:nth-child(4) p:first").animateNumber(
            { number: 9 },
            1400
          );
        }
          
      }, {
          offset: "60%"
      })
  }




  // Cuenta regresiva

  $(".cuenta-regresiva").countdown("2020/03/15 09:00:00", function(event) {
    $("#dias").html(event.strftime("%D"));
    $("#horas").html(event.strftime("%H"));
    $("#minutos").html(event.strftime("%M"));
    $("#segundos").html(event.strftime("%S"));
  });

  // Colorbox

  $(".invitadotexto").colorbox({inline:true, width:"50%", href:".invitadotexto"});


});
