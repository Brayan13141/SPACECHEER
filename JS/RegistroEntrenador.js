document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('Formulario_entrenadores').addEventListener('submit', function (event) {
        event.preventDefault();
        const contraseña = document.getElementById('Contraseña').value.trim();
        // Realizar validaciones
        var nombre = $('#nombre').val();
        var telefono = $('#telefono').val();
        var equipo = $('#equipo').val();
        var correo = $('#correo').val();
        var direccion = $('#direccion').val();
        var ciudad = $('#ciudad').val();
        var cp = $('#cp').val();
        var usuario = $('#Usuario').val();


        try {
            if (!nombre.trim()) {
                alert('Por favor ingresa tu nombre.');
                return;
            }
            if (!validarLetras(nombre)) {
                alert('El nombre solo puede tener letras.');
                return;
            }
            if (!telefono.trim()) {
                alert('Por favor ingresa tu teléfono.');
                return;
            }
            if (!validarNumeros(telefono.trim())) {
                alert('El teléfono solo puede contener números.');
                return;
            }

            if (!equipo.trim()) {
                alert('Por favor ingresa el nombre de tu equipo.');
                return;
            }
         
            if (!correo.trim()) {
                alert('Por favor ingresa tu correo electrónico.');
                return;
            }

            if (!direccion.trim()) {
                alert('Por favor ingresa tu dirección.');
                return;
            }
        
            if (!ciudad.trim()) {
                alert('Por favor ingresa tu ciudad.');
                return;
            }   
            if (!validarLetras(ciudad)) {
                alert('La ciudad solo puede tener letras.');
                return;
            }

            if (!cp.trim()) {
                alert('Por favor ingresa tu código postal.');
                return;
            }
            if (!validarNumeros(cp)) {
                alert('El codigo postal solo puede tener nunmeros.');
                return;
            }

            if (!usuario.trim()) {
                alert('Por favor ingresa tu nombre de usuario.');

                return;
            }
            if (!contraseña.trim()) {
                alert('Por favor ingresa tu contraseña.');
                return;

            }
            if (contraseña.length < 8) {
                alert('La contraseña debe ser mayor a 8');
                return;
            }

            this.submit();

        } catch (error) {
            alert(error);
        }
    });
});

// Función para validar números
function validarNumeros(cadena) {
    return /^\d+$/.test(cadena); // Devuelve true si la cadena contiene solo números, de lo contrario devuelve false
}

// Función para validar letras
function validarLetras(cadena) {
    return /^[a-zA-Z]+$/.test(cadena); // Devuelve true si la cadena contiene solo letras, de lo contrario devuelve false
}