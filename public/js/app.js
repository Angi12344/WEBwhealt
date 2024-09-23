document.addEventListener('DOMContentLoaded', function() {
    // Función para cargar el contenido dinámico
    function loadContent(section) {
        let contentArea = document.getElementById('content-area');

        switch (section) {
            case 'pacientes':
                fetch('/partial/pacientes')
                    .then(response => response.text())
                    .then(html => {
                        contentArea.innerHTML = html;
                    })
                    .catch(error => console.error('Error cargando la sección Pacientes:', error));
                break;
            case 'citas':
                fetch('/partial/citas')
                    .then(response => response.text())
                    .then(html => {
                        contentArea.innerHTML = html;
                    })
                    .catch(error => console.error('Error cargando la sección Citas:', error));
                break;
            case 'consultas':
                // Agregar funcionalidad si es necesario
                break;
            case 'plan-alimenticio':
                fetch('/partial/planes-alimenticios')
                    .then(response => response.text())
                    .then(html => {
                        contentArea.innerHTML = html;
                    })
                    .catch(error => console.error('Error cargando la sección Plan Alimenticio:', error));
                break;
            case 'perfil':
                fetch('/partial/perfil')
                    .then(response => response.text())
                    .then(html => {
                        contentArea.innerHTML = html;
                    })
                    .catch(error => console.error('Error cargando la sección Perfil:', error));
                break;
        }
    }

    // Eventos para los enlaces de la barra lateral
    document.getElementById('pacientes-link')?.addEventListener('click', function(event) {
        event.preventDefault();
        loadContent('pacientes');
    });

    document.getElementById('citas-link')?.addEventListener('click', function(event) {
        event.preventDefault();
        loadContent('citas');
    });

    document.getElementById('plan-alimenticio-link')?.addEventListener('click', function(event) {
        event.preventDefault();
        loadContent('plan-alimenticio');
    });

    document.getElementById('perfil-link')?.addEventListener('click', function(event) {
        event.preventDefault();
        loadContent('perfil');
    });

    // Validación de campos vacíos en formulario
    const form = document.querySelector('.form-content');
    if (form) {
        form.addEventListener('submit', function(event) {
            let isValid = true;
            const inputs = form.querySelectorAll('input[required]');
            
            inputs.forEach(input => {
                if (!input.value) {
                    input.style.borderColor = 'red';
                    isValid = false;
                } else {
                    input.style.borderColor = '#3FB58C';
                }
            });
    
            if (!isValid) {
                event.preventDefault(); // Evita envío si hay campos vacíos
                alert('Please fill in all required fields.');
            }
        });
    }

    // Mostrar/ocultar contraseña
    const passwordField = document.querySelector('input[name="n_contrasena"]');
    if (passwordField) {
        const togglePassword = document.createElement('span');
        togglePassword.textContent = 'Show';
        togglePassword.style.cursor = 'pointer';
        togglePassword.style.color = '#3FB58C';
        togglePassword.style.marginLeft = '10px';
        passwordField.parentNode.appendChild(togglePassword);
    
        togglePassword.addEventListener('click', function() {
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                togglePassword.textContent = 'Hide';
            } else {
                passwordField.type = 'password';
                togglePassword.textContent = 'Show';
            }
        });
    }

    // Validación de email
    const emailField = form?.querySelector('input[name="correo"]');
    if (form && emailField) {
        form.addEventListener('submit', function(event) {
            const emailValue = emailField.value;
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
            if (!emailPattern.test(emailValue)) {
                event.preventDefault();
                emailField.style.borderColor = 'red';
                alert('Please enter a valid email address.');
            } else {
                emailField.style.borderColor = '#3FB58C';
            }
        });
    }

    // Confirmación antes de enviar formulario
    if (form) {
        form.addEventListener('submit', function(event) {
            const confirmation = confirm('Are you sure you want to submit the form?');
    
            if (!confirmation) {
                event.preventDefault();
            }
        });
    }

    // Deshabilitar botón de envío al enviar formulario
    const submitButton = form?.querySelector('.submit-button');
    if (form && submitButton) {
        form.addEventListener('submit', function() {
            submitButton.disabled = true;
            submitButton.textContent = 'Submitting...';
        });
    }

    // Interacción simulada en las citas
    document.querySelectorAll('.cita-card').forEach(card => {
        card.addEventListener('click', function() {
            alert('Esta funcionalidad es simulada.');
        });
    });
});
