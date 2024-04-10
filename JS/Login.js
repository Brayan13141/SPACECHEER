
document.addEventListener('DOMContentLoaded', function () {

    try {
        var labelElement = document.getElementById('LabelModal');
        var labelValue = "";
        if (labelElement !== null) {
            labelValue = labelElement.innerText;
        }
        
        if (labelValue !== "") {
            const myModal = document.getElementById('ModalError');
            const modalInstance = new bootstrap.Modal(myModal);
            modalInstance.show();
        }
        
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault();
            const usuario = document.getElementById('usuario').value.trim();
            const contraseña = document.getElementById('contraseña').value.trim();
      
            if (!usuario.trim()) {
                alert('Por favor ingresa tu nombre de usuario.');
                return;
            }
            if (!contraseña.trim()) {
                alert('Por favor ingresa tu contraseña.');
                return;
            }
        
            this.submit();
        });  
    } catch (error) {
        alert(error);
    }
     
    
    });
    