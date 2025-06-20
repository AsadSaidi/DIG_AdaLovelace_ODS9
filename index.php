<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ODS 9 – Indústria, Innovació i Infraestructura</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estils/index.css">
</head>
<body class="bg-gray-50 min-h-screen text-gray-900"> <!-- Canviat a bg-gray-50 min-h-screen text-gray-900 -->
    <?php include 'includes/header.php' ?>
    
    <header class="bg-gradient-to-r from-[#F97316] to-[#FBBF24] text-white p-6">
        <h1 class="text-4xl md:text-5xl font-bold max-w-5xl mx-auto animate-fade-in text-white">Objectiu de Desenvolupament Sostenible 9</h1>
    </header>
    
    <main class="max-w-5xl mx-auto p-6 space-y-6">
        <section class="p-8 rounded-lg shadow-md hover-scale:-translate-y-1 transition-transform animate-fade-in">
            <div class="w-full mb-4">
                <?php include 'includes/animacion.html' ?>
            </div>
            <div class="text-[#1F2937] leading-relaxed space-y-4">
                <h2 class="text-2xl md:text-3xl font-semibold text-[#F97316]">Què és l’ODS 9?</h2>
                <p class="text-justify">L’Objectiu de Desenvolupament Sostenible 9 vol millorar el món construint infraestructures fortes, fent una indústria més ecològica i justa i fomentant la innovació i les noves tecnologies. És fonamental per al creixement econòmic, la millora de la qualitat de vida i la reducció de les desigualtats entre països.</p>
            </div>
        </section>

        <section class="p-8 rounded-lg shadow-md hover-scale:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-[#F97316]">Infraestructura resilient</h2>
            <p class="mt-3 text-justify text-[#1F2937]">La infraestructura resilient implica crear sistemes que puguin resistir i recuperar-se ràpidament de desastres naturals, crisi econòmiques o socials. Això inclou carreteres, ponts, transport, telecomunicacions i accés a serveis bàsics. Una bona infraestructura fa que les ciutats i pobles siguin més segurs i preparats per al futur.</p>
        </section>

        <section class="p-8 rounded-lg shadow-md hover-scale:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-[#F97316]">Industrialització sostenible i inclusiva</h2>
            <p class="mt-3 text-justify text-[#1F2937]">Promoure indústries sostenibles significa fomentar processos productius que minimitzin l’impacte ambiental i utilitzin recursos de manera eficient. La inclusió assegura que petites i mitjanes empreses, així com comunitats vulnerables, tinguin accés a tecnologies i mercats, generant ocupació i desenvolupament econòmic just.</p>
        </section>

        <section class="p-8 rounded-lg shadow-md hover-scale:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-[#F97316]">Innovació per al desenvolupament</h2>
            <p class="mt-3 text-justify text-[#1F2937]">La innovació és el motor del progrés. L’ODS 9 impulsa la inversió en recerca i desenvolupament tecnològic, facilitant l’accés a tecnologies avançades per a tots els països, especialment els en vies de desenvolupament, per tancar la bretxa digital i tecnològica.</p>
        </section>

        <section class="p-8 rounded-lg shadow-md hover-scale:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold mb-3 text-[#F97316] text-center">Sostenibilitat i ODS 9</h2>
            <p class="text-center max-w-3xl mx-auto text-[#1F2937] mb-4">L’ODS 9 promou un futur on la indústria és verda, les infraestructures connecten i ajuden a tothom, i la innovació fa la vida més fàcil i sostenible.</p>

            <!-- Carrusel amb colors actualitzats -->
            <div class="relative max-w-4xl mx-auto">
                <div id="carousel" class="overflow-hidden rounded-lg shadow-lg">
                    <div class="carousel-track flex">
                        <!-- Item 1 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-[#FEF3C7] text-center">
                            <div class="text-4xl mb-2 text-[#F97316]">🏭</div>
                            <h3 class="text-lg font-semibold mb-1 text-[#F97316]">Indústria sostenible</h3>
                            <p class="text-[#1F2937] text-sm max-w-xs mx-auto">Empreses que utilitzen menys energia i generen menys residus, cuidant el medi ambient mentre creixen.</p>
                        </div>
                        <!-- Item 2 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-[#FEF3C7] text-center">
                            <div class="text-4xl mb-2 text-[#F97316]">🔧</div>
                            <h3 class="text-lg font-semibold mb-1 text-[#F97316]">Infraestructures útils</h3>
                            <p class="text-[#1F2937] text-sm max-w-xs mx-auto">Construir carreteres, hospitals i connexions d’internet que milloren la vida de totes les persones.</p>
                        </div>
                        <!-- Item 3 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-[#FEF3C7] text-center">
                            <div class="text-4xl mb-2 text-[#F97316]">💡</div>
                            <h3 class="text-lg font-semibold mb-1 text-[#F97316]">Innovació per a tothom</h3>
                            <p class="text-[#1F2937] text-sm max-w-xs mx-auto">La tecnologia que ajuda escoles, agricultors, ciutats i empreses a treballar millor i de manera sostenible.</p>
                        </div>
                        <!-- Item 4 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-[#FEF3C7] text-center">
                            <div class="text-4xl mb-2 text-[#F97316]">🌱</div>
                            <h3 class="text-lg font-semibold mb-1 text-[#F97316]">Energia neta i eficient</h3>
                            <p class="text-[#1F2937] text-sm max-w-xs mx-auto">Fomentar fonts d’energia renovable i aprofitar l’energia de manera intel·ligent per protegir el planeta.</p>
                        </div>
                        <!-- Item 5 -->
                        <div class="carousel-item flex-shrink-0 w-full p-4 bg-[#FEF3C7] text-center">
                            <div class="text-4xl mb-2 text-[#F97316]">🤝</div>
                            <h3 class="text-lg font-semibold mb-1 text-[#F97316]">Cooperació i inclusió</h3>
                            <p class="text-[#1F2937] text-sm max-w-xs mx-auto">Treballar junts, grans i petits, per garantir que tothom tingui oportunitats justes i accés a la tecnologia.</p>
                        </div>
                    </div>
                </div>
                <!-- Fletxes amb colors actualitzats -->
                <button id="prev" aria-label="Anterior" class="absolute top-1/2 left-2 -translate-y-1/2 bg-[#F97316] hover:bg-[#FB923C] text-white p-3 rounded-full shadow-md transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="next" aria-label="Següent" class="absolute top-1/2 right-2 -translate-y-1/2 bg-[#F97316] hover:bg-[#FB923C] text-white p-3 rounded-full shadow-md transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </section>

        <section class="p-8 rounded-lg shadow-md hover-scale:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-[#F97316]">Calcula el teu impacte sostenible</h2>
            <p class="mt-3 text-justify text-[#1F2937]">Introdueix el consum energètic industrial (en ktep) per estimar les emissions de CO₂ equivalents:</p>
            <div class="mt-4 flex flex-col sm:flex-row sm:items-center gap-3">
                <input type="number" id="energyInput" placeholder="Consum energètic (ktep)" min="0" aria-label="Consum energètic en ktep" class="p-2 border border-gray-300 rounded-lg focus:ring-[#F97316] focus:border-[#F97316]">
                <button onclick="calculateEmissions()" class="bg-[#F97316] hover:bg-[#FB923C] text-white p-2 rounded-lg transition-colors">Calcular</button>
            </div>
            <p id="result" class="mt-3 hidden text-[#F97316]">Emissions estimades: <span id="emissions"></span> tones de CO₂</p>
        </section>

        <section class="p-8 rounded-lg shadow-md hover-scale:-translate-y-1 transition-transform animate-fade-in">
            <h2 class="text-2xl md:text-3xl font-semibold text-[#F97316]">Recursos per a la sostenibilitat</h2>
            <p class="mt-3 text-justify text-[#1F2937]">Explora recursos per promoure pràctiques sostenibles en la indústria:</p>
            <ul class="mt-3 list-disc pl-6 space-y-1">
                <li><a href="https://sdgs.un.org/goals" target="_blank" class="text-[#F97316] hover:text-[#FB923C] hover:underline">Nacions Unides – ODS 9</a></li>
                <li><a href="https://www.idescat.cat/" target="_blank" class="text-[#F97316] hover:text-[#FB923C] hover:underline">IDESCAT – Estadístiques de sostenibilitat</a></li>
                <li><a href="https://www.ine.es/" target="_blank" class="text-[#F97316] hover:text-[#FB923C] hover:underline">INE – Institut Nacional d’Estadística (Espanya)</a></li>
                <li><a href="https://administraciodigital.gencat.cat/ca/dades/dades-obertes/inici/" target="_blank" class="text-[#F97316] hover:text-[#FB923C] hover:underline">Catalunya Dades Obertes – Generalitat</a></li>
            </ul>
        </section>
    </main>
    
    <?php include 'includes/footer.php' ?>
    <script src="scripts/calculEmissio.js"><script>
    <script src="scripts/traducir.js"></script>
    <div id="google_translate_element" style="display:none"></div>
</body>
</html>