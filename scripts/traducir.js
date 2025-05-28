// Función para cambiar el idioma
function cambiarIdioma(lang) {
    // Guarda el idioma seleccionado
    localStorage.setItem('idiomaSeleccionado', lang);
    
    // Carga la API de Google Translate dinámicamente
    if (!window.google || !window.google.translate) {
        const script = document.createElement('script');
        script.src = `https://translate.google.com/translate_a/element.js?cb=inicializarTraductor`;
        document.head.appendChild(script);
    } else {
        aplicarTraduccion(lang);
    }
}

// Función que se ejecuta cuando la API está cargada
function inicializarTraductor() {
    const lang = localStorage.getItem('idiomaSeleccionado') || 'es';
    aplicarTraduccion(lang);
}

// Aplica la traducción directamente
function aplicarTraduccion(lang) {
    if (window.google && window.google.translate) {
        new google.translate.TranslateElement({
            pageLanguage: 'es',
            includedLanguages: 'en,ca,es',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');
        
        // Forzar el cambio de idioma
        if (lang !== 'es') {
            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = lang;
                select.dispatchEvent(new Event('change'));
            }
        }
    }
}

// Inicialización al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    const lang = localStorage.getItem('idiomaSeleccionado');
    if (lang) {
        document.getElementById('languageSelector').value = lang;
    }
    
    // Opcional: Cargar el traductor al inicio si quieres que esté disponible
    cambiarIdioma(lang || 'es');
});