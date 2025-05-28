<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Impacte Tecnològic de la Indústria TIC a les Comarques Catalanes</title>
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
    <h1 class="text-6xl font-bold max-w-5xl mx-auto animate-fade-in">L'Impacte Tecnològic de la Indústria TIC</h1>
  </header>
  <main class="max-w-5xl mx-auto p-6 space-y-16">
    <!-- Secció 1: Inversions vs. Desenvolupament Econòmic -->
    <section class="bg-white p-8 rounded-lg shadow-md">
      <h2 class="text-6xl font-bold mb-6 text-orange-600 animate-fade-in">1. Inversions vs. Desenvolupament Econòmic</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Barcelonès</h3>
          <p class="text-2xl font-bold">400€</p>
          <p>Inversió per càpita (2022)</p>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Vallès Occidental</h3>
          <p class="text-2xl font-bold">30,000€</p>
          <p>VAB per càpita (2022)</p>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Baix Llobregat</h3>
          <p class="text-2xl font-bold">3.91%</p>
          <p>Taxa d’atur (2024)</p>
        </div>
      </div>
      <p class="mb-4 text-lg"><strong>Hipòtesi:</strong> Com més s’inverteix en recerca i desenvolupament, més capacitat d’innovació i creixement tenen les comarques.</p>
      <p class="mb-4 text-lg"><strong>Relació:</strong> La despesa en inversions es relaciona amb el VAB total i dels sectors innovadors, així com amb la taxa d’atur.</p>
      <details class="mb-4">
        <summary class="text-xl font-semibold text-orange-600">Metodologia</summary>
        <div class="mt-2">
          <p><strong>Dades:</strong></p>
          <ul class="list-disc list-inside space-y-1 mb-4">
            <li>Inversions liquidades (2022, milions d’euros) i acumulades (2017-2021) de t15853.csv.</li>
            <li>VAB total i del sector "Metal·lúrgia, maquinària, material elèctric i de transport" (2022) de t15338.csv.</li>
            <li>Població (2024) de t15224.csv i atur registrat (2024) de t15303.csv.</li>
          </ul>
          <p>Vaig calcular la inversió per càpita, el VAB per càpita, el VAB innovador per càpita i la taxa d’atur (atur/població activa estimada al 60%). Vaig excloure "Catalunya" i vaig calcular correlacions de Pearson.</p>
        </div>
      </details>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Datasets</h3>
      <ul class="list-none space-y-2">
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Inversions reals pressupostades i liquidades (t15853.csv)
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Valor Afegit Brut per sectors (t15338.csv)
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Població (t15224.csv)
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Atur registrat (t15303.csv)
        </li>
      </ul>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Gràfic de dispersió: Inversió per càpita vs. VAB per càpita</h3>
      <?php include '../includes/charts/inversio_vab.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        El gràfic mostra una correlació positiva feble (r ≈ 0.25) entre inversió i VAB per càpita, amb Barcelonès i Vallès Occidental destacant. La taxa d’atur varia sense tendència clara, suggerint que altres factors influeixen. Això recolza parcialment la hipòtesi.
      </p>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Gràfic de caixa: Taxa d’atur per nivell d’inversió</h3>
      <?php include '../includes/charts/boxplot_atur_inversio.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        La taxa d’atur disminueix de comarques amb inversió baixa (~7-8%) a alta (~4-5%), amb menys variabilitat en inversió alta. Això recolza parcialment que més inversió millora l’ocupació.
      </p>
    </section>
    <!-- Secció 2: Empreses TIC vs. Ocupació i Dinamisme Econòmic -->
    <section class="bg-white p-8 rounded-lg shadow-md">
      <h2 class="text-6xl font-bold mb-6 text-orange-600 animate-fade-in">2. Empreses TIC vs. Ocupació i Dinamisme Econòmic</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Barcelonès</h3>
          <p class="text-2xl font-bold">8,218</p>
          <p>Empreses TIC estimades</p>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-orange-600">Vallès Occidental</h3>
          <p class="text-2xl font-bold">3.45%</p>
          <p>Ocupació TIC</p>
        </div>
      </div>
      <p class="mb-4 text-lg"><strong>Hipòtesi:</strong> Les comarques amb més empreses TIC tenen economies més actives i ocupació més qualificada.</p>
      <p class="mb-4 text-lg"><strong>Relació:</strong> El nombre d’empreses TIC es correlaciona amb el VAB dels serveis, la taxa d’atur, la població jove i l’ocupació TIC.</p>
      <details class="mb-4">
        <summary class="text-xl font-semibold text-orange-600">Metodologia</summary>
        <div class="mt-2">
          <p><strong>Dades:</strong></p>
          <ul class="list-disc list-inside space-y-1 mb-4">
            <li>Empreses TIC estimades (t10839.csv).</li>
            <li>VAB dels serveis (t15337.csv).</li>
            <li>Atur registrat (t15303.csv).</li>
            <li>Població total i jove (t15278.csv).</li>
            <li>Ocupació (t15290.csv).</li>
            <li>Inversió en I+D (IMASD2023.pdf).</li>
          </ul>
          <p>Vaig estimar empreses TIC (19,567 a Catalunya, 2022) segons el VAB dels serveis per comarca. Vaig calcular la taxa d’atur, la proporció de població jove (16-29 anys) i l’ocupació TIC (% d’ocupats en informació i comunicacions).</p>
        </div>
      </details>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Datasets</h3>
      <ul class="list-none space-y-2">
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Empreses TIC (t10839.csv)
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          VAB per sectors (t15337.csv)
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Atur registrat (t15303.csv)
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Població total i jove (t15278.csv)
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Ocupació (t15290.csv)
        </li>
        <li class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Inversió en I+D (IMASD2023.pdf)
        </li>
      </ul>
      <h3 class="text-3xl font-semibold mt-8 mb-2 text-orange-600">Gràfic de dispersió: Empreses TIC vs. Indicadors</h3>
      <?php include '../includes/charts/tic_indicators.html' ?>
      <h4 class="text-xl font-semibold mb-2 text-orange-600">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6 text-lg">
        El gràfic mostra una correlació positiva forta (r ≈ 0.90) entre empreses TIC i ocupació TIC, però feble amb la taxa d’atur (r ≈ -0.20) i moderada amb la població jove (r ≈ 0.40). Les empreses TIC impulsen el dinamisme econòmic, però no redueixen significativament l’atur.
      </p>
    </section>
    <!-- Secció 3: Conclusió General -->
    <section class="bg-white p-8 rounded-lg shadow-md">
      <h2 class="text-6xl font-bold mb-6 text-orange-600 animate-fade-in">Conclusió General</h2>
      <p class="mb-4 text-lg">
        <strong>Hipòtesi 1:</strong> Les inversions per càpita tenen una correlació positiva feble amb el VAB per càpita, però les inversions acumulades mostren un impacte més clar a llarg termini. Parcialment recolzada.
      </p>
      <p class="mb-4 text-lg">
        <strong>Hipòtesi 2:</strong> Les comarques amb més empreses TIC tenen economies més actives i ocupació qualificada, però l’impacte en l’atur és limitat. Confirmada parcialment.
      </p>
      <details class="mb-4">
        <summary class="text-xl font-semibold text-orange-600">Limitacions</summary>
        <div class="mt-2">
          <ul class="list-disc list-inside space-y-1">
            <li>Estimacions d’empreses TIC basades en VAB dels serveis poden no reflectir la distribució real.</li>
            <li>Taxa d’atur calculada amb població total, possiblement subestimant-la.</li>
            <li>Dades d’inversió en I+D no desglossades per comarca.</li>
          </ul>
        </div>
      </details>
      <a href="../index.php" class="inline-block bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700 transition-colors" aria-label="Torna a la pàgina principal">Torna a l'Inici</a>
    </section>
  </main>
  <?php include '../includes/footer.php' ?>
  <script src="../scripts/traducir.js"></script>
  <div id="google_translate_element" style="display:none"></div>
</body>
</html>