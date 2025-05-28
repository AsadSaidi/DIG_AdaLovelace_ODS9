<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Impacte Social de la Indústria a les Comarques Catalanes</title>
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
<body class="bg-gray ?-50 min-h-screen text-gray-900">
  <?php include '../includes/header.php' ?>
  <header class="bg-gradient-to-r from-orange-600 to-orange-400 text-white p-6">
    <h1 class="text-6xl font-bold max-w-5xl mx-auto animate-fade-in">L'Impacte Social de la Indústria</h1>
  </header>
  <main class="max-w-5xl mx-auto p-6 space-y-16">
    <!-- Secció 1: Atur total vs. Desenvolupament Industrial -->
    <section class="bg-white p-8 rounded-lg shadow-md">
      <h2 class="text-6xl font-bold mb-6 text-orange-600 animate-fade-in">1. Atur total vs. Desenvolupament Industrial</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Vallès Occidental</h3>
          <p class="text-2xl font-bold">7.52</p>
          <p>VAB per càpita (milers €)</p>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Baix Llobregat</h3>
          <p class="text-2xl font-bold">3.91%</p>
          <p>Taxa d'atur</p>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Segarra</h3>
          <p class="text-2xl font-bold">2.78%</p>
          <p>Taxa d'atur</p>
        </div>
      </div>
      <p class="mb-4 text-lg"><strong>Hipòtesi:</strong> A més activitat industrial, menys atur.</p>
      <p class="mb-4 text-lg"><strong>Relació:</strong> Comarques amb VAB industrial alt podrien tenir menor taxa d’atur.</p>
      <details class="mb-4">
        <summary class="text-xl font-semibold text-orange-600">Metodologia</summary>
        <div class="mt-2">
          <p><strong>Dades:</strong></p>
          <ul class="list-disc list-inside space-y-1 mb-4">
            <li>VAB industrial total (milions d'euros, 2022) de t15338.csv</li>
            <li>Atur registrat total (persones, 2024) de t15303.csv</li>
            <li>Població (persones, 2024) de t15224202400.csv</li>
          </ul>
          <p>Calcularé la taxa d'atur com (Atur registrat / Població) * 100 i el VAB per càpita com (VAB industrial / Població). Vaig excloure "Catalunya" per centrar-me en comarques, vaig calcular la correlació de Pearson, i vaig generar gràfics de dispersió i barres.</p>
        </div>
      </details>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Datasets</h3>
      <ul class="list-none space-y-2">
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Atur registrat. Per sexe. Comarques i Aran
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Població a 1 de gener. Comarques i Aran
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Valor afegit brut de la indústria
        </li>
      </ul>
      Gràfic de dispersió:
      <?php include '../includes/charts/vab_dispersio.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        El gràfic mostra una relació negativa feble entre el VAB industrial per càpita i la taxa d’atur, donant suport parcial a la hipòtesi. Excepcions com Garrigues suggereixen que altres factors (p. ex., ruralitat) influeixen.
      </p>
      <?php include '../includes/charts/vab_barres.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        Les comarques amb més VAB industrial (p. ex., Vallès Occidental, Baix Llobregat) tenen taxes d’atur moderades o baixes, donant suport parcial a la hipòtesi. Excepcions com Tarragonès (5.22%) indiquen influències addicionals.
      </p>
    </section>
    <!-- Secció 2: Dependència del Sector Industrial -->
    <section class="bg-white p-8 rounded-lg shadow-md">
      <h2 class="text-6xl font-bold mb-6 text-orange-600 animate-fade-in">2. Dependència del Sector Industrial</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Segarra</h3>
          <p class="text-2xl font-bold">37.72%</p>
          <p>Ocupació industrial</p>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Garrotxa</h3>
          <p class="text-2xl font-bold">3.20%</p>
          <p>Taxa d'atur</p>
        </div>
      </div>
      <p class="mb-4 text-lg"><strong>Hipòtesi:</strong> Si una comarca depèn molt de la indústria i aquesta cau, l’impacte social (atur) és alt.</p>
      <p class="mb-4 text-lg"><strong>Relació:</strong> Percentatge de població ocupada en la indústria vs. taxa d’atur com a indicador de vulnerabilitat social.</p>
      <details class="mb-4">
        <summary class="text-xl font-semibold text-orange-600">Metodologia</summary>
        <div class="mt-2">
          <p><strong>Dades:</strong></p>
          <ul class="list-disc list-inside space-y-1 mb-4">
            <li>Atur registrat (2024) de t15303.csv</li>
            <li>Població ocupada per sectors (2021) de dataset ocupació</li>
            <li>Població total (2024) de t15224202400.csv</li>
          </ul>
          <p>Vaig calcular el percentatge d’ocupació industrial com (Ocupats indústria / Total ocupats) * 100 i la taxa d’atur. Vaig generar gràfics de dispersió i barres per analitzar la relació.</p>
        </div>
      </details>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Datasets</h3>
      <ul class="list-none space-y-2">
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Atur registrat. Per sexe. Comarques i Aran
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Població ocupada. Per branques d’activitat
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Població a 1 de gener. Comarques i Aran
        </li>
      </ul>
      <?php include '../includes/charts/dependenciaIndustrial.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        La relació positiva feble (correlació ≈ 0.10) contradiu la hipòtesi. Comarques com Segarra (37.72% ocupació, 2.78% atur) tenen taxes d’atur baixes, però excepcions com Alt Camp (25%, 5.90%) suggereixen vulnerabilitat en algunes comarques.
      </p>
      <?php include '../includes/charts/ocupacioIndustrial.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        Comarques amb alta dependència industrial (p. ex., Segarra, Garrotxa) tenen taxes d’atur baixes, contràriament a la hipòtesi. Excepcions com Anoia (5.14%) suggereixen que la diversificació econòmica pot influir en la vulnerabilitat.
      </p>
    </section>
    <!-- Secció 3: Conclusió General -->
    <section class="bg-white p-8 rounded-lg shadow-md">
      <h2 class="text-6xl font-bold mb-6 text-orange-600 animate-fade-in">Conclusió General</h2>
      <p class="mb-4 text-lg">
        <strong>Hipòtesi 1:</strong> A més activitat industrial, menys atur. Parcialment certa, amb una relació negativa feble entre VAB per càpita i taxa d’atur, però amb excepcions (p. ex., Garrigues).
      </p>
      <p class="mb-4 text-lg">
        <strong>Hipòtesi 2:</strong> Alta dependència industrial implica major vulnerabilitat (atur). No recolzada clarament, ja que comarques com Segarra tenen taxes d’atur baixes, però algunes com Anoia mostren vulnerabilitat.
      </p>
      <details class="mb-4">
        <summary class="text-xl font-semibold text-orange-600">Limitacions</summary>
        <div class="mt-2">
          <ul class="list-disc list-inside space-y-1">
            <li>Taxa d’atur calculada amb població total, no activa, possiblement subestimant-la.</li>
            <li>Dades d’ocupació (2021) i atur/població (2024) poden tenir discrepàncies temporals.</li>
            <li>No es diferencia entre tipus d’indústria (p. ex., química vs. tèxtil).</li>
            <li>Factors com estacionalitat, urbanització o polítiques laborals no es van considerar.</li>
          </ul>
        </div>
      </details>
      <a href="../index.php" class="inline-block bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700 transition-colors" aria-label="Torna a la pàgina principal">Torna a l'Inici</a>
    </section>
  </main>
  <script src="scripts/traducir.js"></script>
  <div id="google_translate_element" style="display:none"></div>
  <?php include '../includes/footer.php' ?>
</body>
</html>