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
            background-color: #f4f4f4;
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .section {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            transition: transform 0.3s;
        }
        .section:hover {
            transform: translateY(-5px);
        }
        .btn {
            background-color: #FF6B00;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #FF8C00;
        }
        nav a:hover {
            color: #F97316 !important;
            transform: scale(1.05);
        }
        .carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            gap: 1rem;
            padding: 1rem;
            scrollbar-width: thin;
        }
        .carousel-item {
            flex: 0 0 300px;
            background-color: #fff;
            padding: 1rem;
            border-radius: 0.5rem;
            scroll-snap-align: start;
            transition: transform 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .carousel-item:hover {
            transform: scale(1.02);
        }
        .calculator input, .calculator button {
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #d1d5db;
        }
        .calculator button {
            background-color: #FF6B00;
            color: white;
            border: none;
        }
        .calculator button:hover {
            background-color: #FF8C00;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen text-gray-900">
    <?php include 'includes/header.php' ?>
    
    <header class="bg-gradient-to-r from-orange-600 to-orange-400 text-white p-6">
        <h1 class="text-6xl font-bold max-w-5xl mx-auto animate-fade-in text-white">Objectiu de Desenvolupament Sostenible 9</h1>
    </header>
    
    <main class="max-w-5xl mx-auto p-6 space-y-16">
        <section class="section animate-fade-in">
            <div class="w-full">
                <?php include 'includes/animacion.html' ?>
            </div>
            <div class="text-gray-800 text-lg leading-relaxed space-y-8">
                <h2 class="text-3xl font-semibold mb-4 text-orange-600">Què és l’ODS 9?</h2>
                <p class="mb-6 text-justify">L’Objectiu de Desenvolupament Sostenible 9 vol millorar el món construint infraestructures fortes, fent una indústria més ecològica i justa i fomentant la innovació i les noves tecnologies. És fonamental per al creixement econòmic, la millora de la qualitat de vida i la reducció de les desigualtats entre països.</p>
            </div>
        </section>

        <section class="section animate-fade-in">
            <h2 class="text-3xl font-semibold mb-4 text-orange-600">Infraestructura resilient</h2>
            <p class="mb-6 text-justify">La infraestructura resilient implica crear sistemes que puguin resistir i recuperar-se ràpidament de desastres naturals, crisis econòmiques o socials. Això inclou carreteres, ponts, transport, telecomunicacions i accés a serveis bàsics. Una bona infraestructura fa que les ciutats i pobles siguin més segurs i preparats per al futur..</p>
        </section>

        <section class="section animate-fade-in">
            <h2 class="text-3xl font-semibold mb-4 text-orange-600">Industrialització sostenible i inclusiva</h2>
            <p class="mb-6 text-justify">Promoure indústries sostenibles significa fomentar processos productius que minimitzin l’impacte ambiental i utilitzin recursos de manera eficient. La inclusió assegura que petites i mitjanes empreses, així com comunitats vulnerables, tinguin accés a tecnologies i mercats, generant ocupació i desenvolupament econòmic just.</p>
        </section>

        <section class="section animate-fade-in">
            <h2 class="text-3xl font-semibold mb-4 text-orange-600">Innovació per al desenvolupament</h2>
            <p class="mb-6 text-justify">La innovació és el motor del progrés. L’ODS 9 impulsa la inversió en recerca i desenvolupament tecnològic, facilitant l’accés a tecnologies avançades per a tots els països, especialment els en vies de desenvolupament, per tancar la bretxa digital i tecnològica.</p>
        </section>

            <section class="section animate-fade-in">
        <h2 class="text-3xl font-semibold mb-6 text-orange-600 text-center">Sostenibilitat i ODS 9</h2>
        <p class="mb-8 text-center max-w-3xl mx-auto text-gray-700">
            L’ODS 9 promou un futur on la indústria és verda, les infraestructures connecten i ajuden a tothom, i la innovació fa la vida més fàcil i sostenible.
        </p>

        <!-- Carrusel senzill amb Tailwind i JS -->
        <div class="relative max-w-4xl mx-auto">
            <div id="carousel" class="overflow-hidden rounded-lg shadow-lg">
            <div class="carousel-track flex transition-transform duration-500">
                <!-- Item 1 -->
                <div class="carousel-item flex-shrink-0 w-full p-6 bg-orange-50 text-center">
                <div class="text-6xl mb-4 text-orange-500">🏭</div>
                <h3 class="text-2xl font-semibold mb-2 text-orange-600">Indústria sostenible</h3>
                <p class="text-gray-700 max-w-xl mx-auto">
                    Empreses que utilitzen menys energia i generen menys residus, cuidant el medi ambient mentre creixen.
                </p>
                </div>
                <!-- Item 2 -->
                <div class="carousel-item flex-shrink-0 w-full p-6 bg-orange-50 text-center">
                <div class="text-6xl mb-4 text-orange-500">🔧</div>
                <h3 class="text-2xl font-semibold mb-2 text-orange-600">Infraestructures útils</h3>
                <p class="text-gray-700 max-w-xl mx-auto">
                    Construir carreteres, hospitals i connexions d’internet que milloren la vida de totes les persones.
                </p>
                </div>
                <!-- Item 3 -->
                <div class="carousel-item flex-shrink-0 w-full p-6 bg-orange-50 text-center">
                <div class="text-6xl mb-4 text-orange-500">💡</div>
                <h3 class="text-2xl font-semibold mb-2 text-orange-600">Innovació per a tothom</h3>
                <p class="text-gray-700 max-w-xl mx-auto">
                    La tecnologia que ajuda escoles, agricultors, ciutats i empreses a treballar millor i de manera sostenible.
                </p>
                </div>
                <!-- Item 4 -->
                <div class="carousel-item flex-shrink-0 w-full p-6 bg-orange-50 text-center">
                <div class="text-6xl mb-4 text-orange-500">🌱</div>
                <h3 class="text-2xl font-semibold mb-2 text-orange-600">Energia neta i eficient</h3>
                <p class="text-gray-700 max-w-xl mx-auto">
                    Fomentar fonts d’energia renovable i aprofitar l’energia de manera intel·ligent per protegir el planeta.
                </p>
                </div>
                <!-- Item 5 -->
                <div class="carousel-item flex-shrink-0 w-full p-6 bg-orange-50 text-center">
                <div class="text-6xl mb-4 text-orange-500">🤝</div>
                <h3 class="text-2xl font-semibold mb-2 text-orange-600">Cooperació i inclusió</h3>
                <p class="text-gray-700 max-w-xl mx-auto">
                    Treballar junts, grans i petits, per garantir que tothom tingui oportunitats justes i accés a la tecnologia.
                </p>
                </div>
            </div>
            </div>

            <!-- Controls -->
            <button id="prev" aria-label="Anterior" class="absolute top-1/2 left-0 -translate-y-1/2 bg-orange-600 hover:bg-orange-700 text-white p-2 rounded-r">
            &#8592;
            </button>
            <button id="next" aria-label="Següent" class="absolute top-1/2 right-0 -translate-y-1/2 bg-orange-600 hover:bg-orange-700 text-white p-2 rounded-l">
            &#8594;
            </button>
        </div>
        </section>

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
        </script>


        <section class="section animate-fade-in">
            <h2 class="text-3xl font-semibold mb-4 text-orange-600">Calcula el teu impacte sostenible</h2>
            <p class="mb-6 text-justify">Introdueix el consum energètic industrial (en ktep) per estimar les emissions de CO₂ equivalents:</p>
            <div class="calculator">
                <input type="number" id="energyInput" placeholder="Consum energètic (ktep)" min="0" aria-label="Consum energètic en ktep">
                <button onclick="calculateEmissions()" class="ml-2">Calcular</button>
                <p id="result" class="mt-4 hidden">Emissions estimades: <span id="emissions"></span> tones de CO₂</p>
            </div>
        </section>

        <section class="section animate-fade-in">
            <h2 class="text-3xl font-semibold mb-4 text-orange-600">Recursos per a la sostenibilitat</h2>
            <p class="mb-6 text-justify">Explora recursos per promoure pràctiques sostenibles en la indústria:</p>
            <ul class="list-disc pl-6">
                <li><a href="https://sdgs.un.org/goals" target="_blank" class="text-orange-600 hover:underline">Nacions Unides – ODS 9</a></li>
                <li><a href="https://www.idescat.cat/" target="_blank" class="text-orange-600 hover:underline">IDESCAT – Estadístiques de sostenibilitat</a></li>
                <li><a href="https://www.ine.es/" target="_blank" class="text-orange-600 hover:underline"> INE – Institut Nacional d’Estadística (Espanya)</a></li>
                <li><a href="https://administraciodigital.gencat.cat/ca/dades/dades-obertes/inici/" target="_blank" class="text-orange-600 hover:underline">  Catalunya Dades Obertes – Generalitat</a></li>

            </ul>
        </section>

        <div class="text-center">
        </div>
    </main>
    
    <?php include 'includes/footer.php' ?>

    <script>
        function calculateEmissions() {
            const energyInput = document.getElementById('energyInput').value;
            const resultDiv = document.getElementById('result');
            const emissionsSpan = document.getElementById('emissions');
            if (energyInput && energyInput > 0) {
                // Factor d'emissió mitjà basat en dades industrials (aproximat): 0.5 tones CO₂ per ktep
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