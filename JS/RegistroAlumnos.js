document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('form_alumnos').addEventListener('submit', function (event) {
        event.preventDefault();
        if (validarFormulario()== true) {
         
            this.submit();
        }
    })

    function validarFormulario() {
        var nombre = document.getElementById('nombre').value;
        var edad = document.getElementById('edad').value;
        var cuello = document.getElementById('cuello').value;
        var pecho = document.getElementById('pecho').value;
        var hombro = document.getElementById('hombro').value;
        var largo_playera = document.getElementById('largo_playera').value;
        var largo_manga = document.getElementById('largo_manga').value;
        var ancho_manga = document.getElementById('ancho_manga').value;
        var cintura = document.getElementById('cintura').value;
        var cadera = document.getElementById('cadera').value;
        var largo_pantalon = document.getElementById('largo_pantalon').value;
        var num_calzado = document.getElementById('num_calzado').value;
        var playera_entrenamiento = document.getElementById('playera_entrenamiento').value;
        var short_pants = document.getElementById('short_pants').value;
        var chamarra = document.getElementById('chamarra').value;
        var otro = document.getElementById('otro').value;
    
        if (
            nombre === '' ||
            edad === '' ||
            cuello === '' ||
            pecho === '' ||
            hombro === '' ||
            largo_playera === '' ||
            largo_manga === '' ||
            ancho_manga === '' ||
            cintura === '' ||
            cadera === '' ||
            largo_pantalon === '' ||
            num_calzado === '' ||
            playera_entrenamiento === '' ||
            short_pants === '' ||
            chamarra === '' ||
            otro === ''
        ) {
            alert('Por favor, completa todos los campos');
            return false;
        }
        return true;
    }



});

