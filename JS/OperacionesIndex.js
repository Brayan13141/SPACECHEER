
// -----------------METODO PARA OCULTAR Y MOSTRAR LOS DIV DE LAS OPCIONES(ALUMNO.HTML)-----------------
var banderaOpciones = 0;
document.getElementById("opcion1").addEventListener("click", () => {
  banderaOpciones = 0;
  Opciones();
});
document.getElementById("opcion2").addEventListener("click", () => {
  banderaOpciones = 1;
  Opciones();
});
const Opciones = () => {
  banderaOpciones == 0
    ? ((document.getElementById("opcion1").classList.value =
      "opcion opcion-activa"),
      (document.getElementById("contenido1").classList.value =
        "contenido contenido-activo"))
    : ((document.getElementById("opcion1").classList.value = "opcion"),
      (document.getElementById("contenido1").classList.value = "contenido"));

  banderaOpciones == 1
    ? ((document.getElementById("opcion2").classList.value =
      "opcion opcion-activa"),
      (document.getElementById("contenido2").classList.value =
        "contenido contenido-activo"))
    : ((document.getElementById("opcion2").classList.value = "opcion"),
      (document.getElementById("contenido2").classList.value = "contenido"));
};

 