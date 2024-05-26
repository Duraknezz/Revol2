//---------------BOTON-------------------
const loginButton = document.querySelector('.login-boton button');

loginButton.addEventListener('click', () => {
    alert('Login');
});

// Función para agregar la animación de pulsación a los iconos
function addPulseAnimation(element) {
    element.classList.add('pulse');
}

// Función para eliminar la animación de pulsación a los iconos
function removePulseAnimation(element) {
    element.classList.remove('pulse');
}

// Obtener los elementos de notificación y mensajes
const notificationIcon = document.querySelector('.notification i');
const messagesIcon = document.querySelector('.messages i');

// Agregar animación de pulsación cuando la página se carga
window.addEventListener('load', () => {
    addPulseAnimation(notificationIcon);
    addPulseAnimation(messagesIcon);
});

// Agregar eventos para agregar y quitar la animación de pulsación al hacer clic en los iconos
notificationIcon.addEventListener('click', () => {
    addPulseAnimation(notificationIcon);
    setTimeout(() => {
        removePulseAnimation(notificationIcon);
    }, 1500); // Tiempo en milisegundos para quitar la animación
});

messagesIcon.addEventListener('click', () => {
    addPulseAnimation(messagesIcon);
    setTimeout(() => {
        removePulseAnimation(messagesIcon);
    }, 1500); // Tiempo en milisegundos para quitar la animación
});