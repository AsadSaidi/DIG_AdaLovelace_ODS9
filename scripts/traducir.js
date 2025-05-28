function cambiarIdioma(lang) {
    if (lang === 'ca') {
        // Si se selecciona catalán, borrar idioma guardado y recargar
        localStorage.removeItem('idiomaSeleccionado');
        location.reload();
        return;
    }

    localStorage.setItem('idiomaSeleccionado', lang);

    if (!window.google || !window.google.translate) {
        const script = document.createElement('script');
        script.src = `https://translate.google.com/translate_a/element.js?cb=inicializarTraductor`;
        document.head.appendChild(script);
    } else {
        aplicarTraduccion(lang);
    }
}

function inicializarTraductor() {
    const lang = localStorage.getItem('idiomaSeleccionado') || 'ca';
    aplicarTraduccion(lang);
}

function aplicarTraduccion(lang) {
    new google.translate.TranslateElement({
        pageLanguage: 'ca',
        includedLanguages: 'en,ca,es,ar',
        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
    }, 'google_translate_element');

    if (lang !== 'ca') {
        const interval = setInterval(() => {
            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = lang;
                select.dispatchEvent(new Event('change'));
                clearInterval(interval);
            }
        }, 100);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const lang = localStorage.getItem('idiomaSeleccionado');
    if (lang) {
        const selector = document.getElementById('languageSelector');
        if (selector) selector.value = lang;
        cambiarIdioma(lang);
    }
});