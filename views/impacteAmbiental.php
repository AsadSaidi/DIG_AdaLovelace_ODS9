<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Impacte Ambiental de la Indústria a les Comarques Catalanes</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    .chart-wrapper canvas {
      max-width: 100%;
      width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
    }
    details summary {
      cursor: pointer;
      transition: color 0.2s ease-in-out;
    }
    details summary:hover {
      color: #1E40AF;
    }
     /* Sobreescrita de l'estil :hover del menú de navegació */
    nav a:hover {
      color: #F97316 !important; /* Taronja per a l'hover */
      transform: scale(1.05);
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen text-gray-900">
  <?php include '../includes/header.php' ?>
  <header class="bg-gradient-to-r from-orange-600 to-orange-400 text-white p-6">
    <h1 class="text-6xl font-bold max-w-5xl mx-auto animate-fade-in">L'Impacte Ambiental de la Indústria</h1>
  </header>
  <main class="max-w-5xl mx-auto p-6 space-y-16">
    <!-- Secció 1: Emissions de Gasos d'Efecte Hivernacle -->
    <section class="bg-white p-8 rounded-lg shadow-md">
      <h2 class="text-6xl font-bold mb-6 text-orange-600 animate-fade-in">1. Emissions de Gasos d'Efecte Hivernacle (GEH)</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Barcelona</h3>
          <p class="text-2xl font-bold">4,500 ktep</p>
          <p>Consum no renovable (2020)</p>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Tarragona</h3>
          <p class="text-2xl font-bold">400 ktep</p>
          <p>Consum renovable (2020)</p>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Catalunya</h3>
          <p class="text-2xl font-bold">12,000 kt</p>
          <p>Emissions GEH (2020)</p>
        </div>
      </div>
      <p class="mb-4 text-lg"><strong>Hipòtesi:</strong> El consum d’energia no renovable domina, però les renovables creixen amb el temps i varien segons la província.</p>
      <p class="mb-4 text-lg"><strong>Relació:</strong> Les comarques amb més activitat industrial tenen emissions de GEH més elevades, però l’ús creixent de renovables pot mitigar aquest impacte.</p>
      <details class="mb-4">
        <summary class="text-xl font-semibold text-orange-600">Metodologia</summary>
        <div class="mt-2">
          <p><strong>Dades:</strong></p>
          <ul class="list-disc list-inside space-y-1 mb-4">
            <li>Consum energètic per tipus (gas natural, electricitat, biomassa, biogàs) i per província (Barcelona, Tarragona, Girona, Lleida).</li>
            <li>Emissions totals i per sectors (indústria, transport, LULUCF) de 2000 a 2020.</li>
          </ul>
          <p>Agruparé el consum per tipus d’energia i província, calcularé tendències temporals (2003-2020) i visualitzaré la proporció de renovables vs. no renovables. També analitzaré l’efecte compensatori del sector LULUCF. Vaig excloure dades agregades de "Catalunya" per centrar-me en províncies, vaig calcular la proporció de consum energètic renovable vs. no renovable, i vaig generar gràfics de dispersió i línia.</p>
        </div>
      </details>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Datasets</h3>
      <ul class="list-none space-y-2">
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Informe_Emissions_GEH_Catalunya
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Catalonia_Industrial_Energy_Consumption_Report
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          PIB. Per sectors. Variació en volum
        </li>
      </ul>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Gràfic de dispersió: Consum renovable vs. no renovable</h3>
      <?php include '../includes/charts/emissions_scatter.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        El gràfic mostra que el consum d’energia no renovable domina a totes les províncies, especialment a Barcelona i Tarragona. Les energies renovables (p. ex., biomassa) creixen (45% a Tarragona entre 2010 i 2020), però segueixen sent marginals, recolzant parcialment la hipòtesi.
      </p>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Gràfic de línia: Evolució del consum energètic</h3>
      <?php include '../includes/charts/emissions_line.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        El gràfic mostra una reducció progressiva del consum energètic entre 2002 i 2020, amb Barcelona liderant. Això suggereix millores en l’eficiència energètica i una transició cap a renovables, recolzant parcialment la hipòtesi.
      </p>
    </section>
    <!-- Secció 2: Consum Energètic Industrial i PIB Industrial -->
    <section class="bg-white p-8 rounded-lg shadow-md">
      <h2 class="text-6xl font-bold mb-6 text-orange-600 animate-fade-in">2. Consum Energètic Industrial i PIB Industrial</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">2008</h3>
          <p class="text-2xl font-bold">-5%</p>
          <p>Variació PIB industrial</p>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">2020</h3>
          <p class="text-2xl font-bold">4,200 ktep</p>
          <p>Consum energètic</p>
        </div>
      </div>
      <p class="mb-4 text-lg"><strong>Hipòtesi:</strong> Les emissions estan correlacionades amb l’activitat industrial i el consum energètic, amb Barcelona com a província més emissora.</p>
      <p class="mb-4 text-lg"><strong>Relació:</strong> El consum energètic industrial està vinculat al PIB industrial, amb impactes visibles durant les crisis (2008, 2020).</p>
      <details class="mb-4">
        <summary class="text-xl font-semibold text-orange-600">Metodologia</summary>
        <div class="mt-2">
          <p><strong>Dades:</strong></p>
          <ul class="list-disc list-inside space-y-1 mb-4">
            <li>Consum energètic industrial (ktep) de 2003 a 2020.</li>
            <li>Variació del PIB industrial (%) de 2003 a 2020.</li>
          </ul>
          <p>Vaig analitzar el consum energètic i el PIB industrial, identificant caigudes per crisis (2008, 2020) i generant un gràfic de dispersió per visualitzar la correlació.</p>
        </div>
      </details>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Datasets</h3>
      <ul class="list-none space-y-2">
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Informe_Emissions_GEH_Catalunya
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Catalonia_Industrial_Energy_Consumption_Report
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          PIB. Per sectors. Variació en volum
        </li>
      </ul>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Gràfic de dispersió: Consum Energètic vs. Variació PIB Industrial</h3>
      <?php include '../includes/charts/consum_pib.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        El gràfic mostra una correlació entre el consum energètic i la variació del PIB industrial, amb caigudes el 2008 i 2020 per les crisis. L’augment de renovables suggereix una transició cap a un model més sostenible.
      </p>
    </section>
    <!-- Secció 3: Conclusió General -->
    <section class="bg-white p-8 rounded-lg shadow-md">
      <h2 class="text-6xl font-bold mb-6 text-orange-600 animate-fade-in">Conclusió General</h2>
      <p class="mb-4 text-lg">
        <strong>Hipòtesi 1:</strong> El consum d’energia no renovable domina, però les renovables creixen lentament, especialment a Tarragona i Barcelona. Parcialment certa, ja que les renovables creixen però segueixen sent marginals.
      </p>
      <p class="mb-4 text-lg">
        <strong>Hipòtesi 2:</strong> Les emissions estan correlacionades amb l’activitat industrial, amb Barcelona com a màxim emissor. Confirmada, amb caigudes en consum i PIB durant les crisis (2008, 2020).
      </p>
      <details class="mb-4">
        <summary class="text-xl font-semibold text-orange-600">Limitacions</summary>
        <div class="mt-2">
          <ul class="list-disc list-inside space-y-1">
            <li>Les dades de consum energètic i emissions poden no reflectir variacions a nivell de comarca.</li>
            <li>La manca de dades detallades sobre l’ús de renovables per sector limita l’anàlisi.</li>
            <li>L’efecte compensatori del sector LULUCF pot estar subestimat.</li>
          </ul>
        </div>
      </details>
      <a href="../index.php" class="inline-block bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700 transition-colors" aria-label="Torna a la pàgina principal">Torna a l'Inici</a>
    </section>
  </main>
  <script src="scripts/traducir.js"></script>
  <div id="google_translate_element" style="display:none"></div>
  <?php include '../includes/footer.php' ?>
  <script src="../scripts/traducir.js"></script>
  <div id="google_translate_element" style="display:none"></div>
</body>
</html>