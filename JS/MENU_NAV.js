//----------------- METODO PARA MOSTRAR Y OCULTAR EL PANEL DE NAVEGACION-----------------
var banderaPanel = 0;
function Mostrar() {
  if (banderaPanel == 0) {
    document.getElementById("divMenu").style.width = "180px";
    const spansConTexto = document.querySelectorAll(
      ".menu-links .li-links .Texto"
    );
    spansConTexto.forEach((span) => {
      span.style.opacity = 1;
    });
    document.querySelector(".TextoLogo").style.opacity = 1;
    banderaPanel = 1;
  } else {
    document.getElementById("divMenu").style.width = "47px";
    const spansConTexto = document.querySelectorAll(
      ".menu-links .li-links .Texto"
    );
    spansConTexto.forEach((span) => {
      span.style.opacity = 0;
    });
    banderaPanel = 0;
    document.querySelector(".TextoLogo").style.opacity = 0;
  }
}
