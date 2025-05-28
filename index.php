<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ODS 9 – Indústria, Innovació i Infraestructura</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .carousel-track {
            transition: transform 0.5s ease-in-out;
        }
        .carousel-item {
            scroll-snap-align: start;
            transition: transform 0.3s ease-in-out;
        }
        .carousel-item:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen text-gray-900">
    <?php include 'includes/header.php' ?>
    
    <header class="bg-gradient-to-r from-orange-600 to-orange-400 text-white p-6">
        <h1 class="text-4xl md:text-5xl font-bold max-w-5xl mx-auto animate-fade-in text-white">Objectiu de Desenvolupament Sostenible 9</h1>
    </header>
    
    <main class="max-w-5xl mx-auto p-6 space-y-6">
        <section class="bg-white p-6 rounded-lg shadow-md hover:-translate-y-1 transition-transform animate-fade-in">
            <div class="w-full mb-4">
                <?php include 'includes/animacion.html' ?>
            </div>
            <div class="text-gray-800 leading-relaxed space-y-4">
                <h2 class="text-2xl md:text-3xl font-semibold text-orange-600">Què és l’ODS 9?</h2>
                <p class="text-justify">L’Objectiu de Desenvolupament Sostenible 9 vol millorar el món construint infraestructures fortes, fent una indústria més ecològica i justa i fomentant la innovació i les noves tecnologies. És fonamental per al creixement econòmic, la millora de la qualitat de vida i la reducció de les desigualtats entre països.</p>
            </div>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-md hover:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-orange-600">Infraestructura resilient</h2>
            <p class="mt-3 text-justify">La infraestructura resilient implica crear sistemes que puguin resistir i recuperar-se ràpidament de desastres naturals, crisi econòmiques o socials. Això inclou carreteres, ponts, transport, telecomunicacions i accés a serveis bàsics. Una bona infraestructura fa que les ciutats i pobles siguin més segurs i preparats per al futur.</p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-md hover:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-orange-600">Industrialització sostenible i inclusiva</h2>
            <p class="mt-3 text-justify">Promoure indústries sostenibles significa fomentar processos productius que minimitzin l’impacte ambiental i utilitzin recursos de manera eficient. La inclusió assegura que petites i mitjanes empreses, així com comunitats vulnerables, tinguin accés a tecnologies i mercats, generant ocupació i desenvolupament econòmic just.</p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-md hover:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-orange-600">Innovació per al desenvolupament</h2>
            <p class="mt-3 text-justify">La innovació és el motor del progrés. L’ODS 9 impulsa la inversió en recerca i desenvolupament tecnològic, facilitant l’accés a tecnologies avançades per a tots els països, especialment els en vies de desenvolupament, per tancar la bretxa digital i tecnològica.</p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-md hover:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold mb-3 text-orange-600 text-center">Sostenibilitat i ODS 9</h2>
            <p class="text-center max-w-3xl mx-auto text-gray-700 mb-4">L’ODS 9 promou un futur on la indústria és verda, les infraestructures connecten i ajuden a tothom, i la innovació fa la vida més fàcil i sostenible.</p>

            <!-- Carrusel mejorado -->
            <div class="relative max-w-4xl mx-auto">
                <div id="carousel" class="overflow-hidden rounded-lg shadow-lg">
                    <div class="carousel-track flex">
                        <!-- Item 1 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-orange-50 text-center">
                            <div class="text-4xl mb-2 text-orange-500">🏭</div>
                            <h3 class="text-lg font-semibold mb-1 text-orange-600">Indústria sostenible</h3>
                            <p class="text-gray-700 text-sm max-w-xs mx-auto">Empreses que utilitzen menys energia i generen menys residus, cuidant el medi ambient mentre creixen.</p>
                        </div>
                        <!-- Item 2 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-orange-50 text-center">
                            <div class="text-4xl mb-2 text-orange-500">🔧</div>
                            <h3 class="text-lg font-semibold mb-1 text-orange-600">Infraestructures útils</h3>
                            <p class="text-gray-700 text-sm max-w-xs mx-auto">Construir carreteres, hospitals i connexions d’internet que milloren la vida de totes les persones.</p>
                        </div>
                        <!-- Item 3 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-orange-50 text-center">
                            <div class="text-4xl mb-2 text-orange-500">💡</div>
                            <h3 class="text-lg font-semibold mb-1 text-orange-600">Innovació per a tothom</h3>
                            <p class="text-gray-700 text-sm max-w-xs mx-auto">La tecnologia que ajuda escoles, agricultors, ciutats i empreses a treballar millor i de manera sostenible.</p>
                        </div>
                        <!-- Item 4 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-orange-50 text-center">
                            <div class="text-4xl mb-2 text-orange-500">🌱</div>
                            <h3 class="text-lg font-semibold mb-1 text-orange-600">Energia neta i eficient</h3>
                            <p class="text-gray-700 text-sm max-w-xs mx-auto">Fomentar fonts d’energia renovable i aprofitar l’energia de manera intel·ligent per protegir el planeta.</p>
                        </div>
                        <!-- Item 5 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-orange-50 text-center">
                            <div class="text-4xl mb-2 text-orange-500">🤝</div>
                            <h3 class="text-lg font-semibold mb-1 text-orange-600">Cooperació i inclusió</h3>
                            <p class="text-gray-700 text-sm max-w-xs mx-auto">Treballar junts, grans i petits, per garantir que tothom tingui oportunitats justes i accés a la tecnologia.</p>
                        </div>
                    </div>
                </div>
                <!-- Flechas mejoradas -->
                <button id="prev" aria-label="Anterior" class="absolute top-1/2 left-2 -translate-y-1/2 bg-orange-600 hover:bg-orange-700 text-white p-3 rounded-full shadow-md transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="next" aria-label="Següent" class="absolute top-1/2 right-2 -translate-y-1/2 bg-orange-600 hover:bg-orange-700 text-white p-3 rounded-full shadow-md transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-md hover:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-orange-600">Calcula el teu impacte sostenible</h2>
            <p class="mt-3 text-justify">Introdueix el consum energètic industrial (en ktep) per estimar les emissions de CO₂ equivalents:</p>
            <div class="mt-4 flex flex-col sm:flex-row sm:items-center gap-3">
                <input type="number" id="energyInput" placeholder="Consum energètic (ktep)" min="0" aria-label="Consum energètic en ktep" class="p-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
                <button onclick="calculateEmissions()" class="bg-orange-600 hover:bg-orange-700 text-white p-2 rounded-lg transition-colors">Calcular</button>
            </div>
            <p id="result" class="mt-3 hidden">Emissions estimades: <span id="emissions"></span> tones de CO₂</p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-md hover:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-orange-600">Recursos per a la sostenibilitat</h2>
            <p class="mt-3 text-justify">Explora recursos per promoure pràctiques sostenibles en la indústria:</p>
            <ul class="mt-3 list-disc pl-6 space-y-1">
                <li><a href="https://sdgs.un.org/goals" target="_blank" class="text-orange-600 hover:underline">Nacions Unides – ODS 9</a></li>
                <li><a href="https://www.idescat.cat/" target="_blank" class="text-orange-600 hover:underline">IDESCAT – Estadístiques de sostenibilitat</a></li>
                <li><a href="https://www.ine.es/" target="_blank" class="text-orange-600 hover:underline">INE – Institut Nacional d’Estadística (Espanya)</a></li>
                <li><a href="https://administraciodigital.gencat.cat/ca/dades/dades-obertes/inici/" target="_blank" class="text-orange-600 hover:underline">Catalunya Dades Obertes – Generalitat</a></li>
            </ul>
        </section>
    </main>
    
    <?php include 'includes/footer.php' ?>

    <script>
        const track = document.querySelector('.carousel-track');
        const items = document.querySelectorAll('.carousel-item');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');
        const totalItems = items.length;
        let currentIndex = 0;

        function updateCarousel() {
            const width = items[0].clientWidth;
            track.style.transform = `translateX(-${currentIndex * width}px)`;
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? totalItems - 1 : currentIndex - 1;
            updateCarousel();
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === totalItems - 1) ? 0 : currentIndex + 1;
            updateCarousel();
        });

        window.addEventListener('resize', updateCarousel);

        function calculateEmissions() {
            const energyInput = document.getElementById('energyInput').value;
            const resultDiv = document.getElementById('result');
            const emissionsSpan = document.getElementById('emissions');
            if (energyInput && energyInput > 0) {
                const emissions = (energyInput * 0.5).toFixed(2);
                emissionsSpan.textContent = emissions;
                resultDiv.classList.remove('hidden');
            } else {
                resultDiv.classList.add('hidden');
            }
        }
    </script>
    <script src="scripts/traducir.js"></script>
    <div id="google_translate_element" style="display:none"></div>
</body>
</html>