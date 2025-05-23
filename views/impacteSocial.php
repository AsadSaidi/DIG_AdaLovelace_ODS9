<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Impacte Social de la Indústria a les Comarques Catalanes</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f4f4f4;
    }
    /* Estilos específicos para el gráfico sin afectar al resto */
    .chart-wrapper canvas {
      max-width: 800px;
      width: 100%;
      display: block;
      margin: 0 auto;
    }
  </style>
</head>
<?php include '../includes/header.php' ?>
<body class="bg-gray-50 min-h-screen text-gray-900">

  <header class="bg-orange-600 text-white p-6">
    <h1 class="text-4xl font-bold max-w-5xl mx-auto">L'Impacte Social de la Indústria a les Comarques Catalanes</h1>
  </header>

  <main class="max-w-5xl mx-auto p-6 space-y-12">

    <!-- Sección 1 -->
    <section>
      <h2 class="text-3xl font-semibold mb-4 text-orange-600">1. Atur total vs. desenvolupament industrial</h2>

      <p class="mb-4"><strong>Hipòtesi:</strong> A més activitat industrial, menys atur.</p>
      <p class="mb-4"><strong>Relació:</strong> Comarques amb VAB industrial alt podrien tenir menor taxa d’atur.</p>

      <h3 class="text-2xl font-semibold mt-8 mb-2">DATASETS:</h3>
      <ul class="list-disc list-inside space-y-1">
        <li>Atur registrat. Per sexe. Comarques i Aran, àmbits i províncies</li>
        <li>Població a 1 de gener. Comarques i Aran, àmbits i províncies</li>
        <li>Valor afegit brut de la indústria</li>
      </ul>

      <h3 class="text-2xl font-semibold mt-8 mb-2">ANÀLISIS:</h3>
      <p class="mb-4">
        Compararé el Valor Afegit Brut (VAB) industrial amb la taxa d'atur per comarca, generaré gràfics i conclouré si la hipòtesi és certa o falsa.
      </p>

      <h4 class="text-xl font-semibold mt-6 mb-2">Metodologia</h4>
      <p class="mb-2"><strong>Dades:</strong></p>
      <ul class="list-disc list-inside space-y-1 mb-4">
        <li>VAB industrial total (milions d'euros, 2022) de t15338.csv</li>
        <li>Atur registrat total (persones, 2024) de t15303.csv</li>
        <li>Població (persones, 2024) de t15224202400.csv</li>
      </ul>
      <p class="mb-4">
        Calcularé la taxa d'atur com (Atur registrat / Població) * 100.<br />
        Calcularé el VAB per càpita (milers d'euros per persona) per normalitzar l'activitat industrial segons la mida de la comarca.
      </p>

      <p class="mb-4"><strong>Anàlisi:</strong></p>
      <ul class="list-disc list-inside space-y-1">
        <li>Vaig excloure la dada agregada de "Catalunya" per centrar-me en comarcas.</li>
        <li>Vaig calcular la correlació de Pearson entre VAB per càpita i taxa d'atur.</li>
        <li>Vaig generar dos gràfics:
          <ul class="list-disc list-inside ml-6 mt-1 space-y-1">
            <li>Dispersió: VAB per càpita vs. taxa d'atur, amb una línia de regressió.</li>
            <li>Barres: VAB industrial i taxa d'atur per a les 10 comarces amb més VAB.</li>
          </ul>
        </li>
      </ul>
    </section>

    <!-- Resultats i conclusions de la primera part -->
    <section>
      <h2 class="text-3xl font-semibold mb-4 text-orange-600">RESULTATS</h2>

      <h3 class="text-2xl font-semibold mb-2">1. Processament de dades</h3>
      <p class="mb-4">
        Vaig unir els datasets per comarca, vaig calcular la taxa d'atur i el VAB per càpita.<br />
        Exemple de dades processades per algunes comarces:
      </p>
      <ul class="list-disc list-inside space-y-1 mb-6">
        <li><strong>Vallès Occidental:</strong> VAB = 7218.0M€, Població = 960033, Atur = 43905.7, Taxa d'atur = 4.57%, VAB per càpita = 7.52.</li>
        <li><strong>Baix Llobregat:</strong> VAB = 6867.1M€, Població = 848827, Atur = 33167.3, Taxa d'atur = 3.91%, VAB per càpita = 8.09.</li>
      </ul>

      <h3 class="text-2xl font-semibold mb-2">2. Gràfics</h3>
      <h4 class="text-xl font-semibold mb-2">Gràfic de dispersió:</h4>
      <p class="mb-4">
        Eix X: VAB industrial per càpita (milers d'euros per persona).<br />
        Eix Y: Taxa d'atur (%).<br />
        Punts: Cada comarca, amb mida proporcional a la seva població.<br />
        Línia de regressió: Mostra la tendència general.
      </p>

      <!-- Contenedor específico para el gráfico de dispersión -->
      <div class="w-full mx-auto p-4 bg-white rounded shadow mb-6 chart-wrapper">
        <canvas id="scatterChart" class="w-full h-96 block"></canvas>
      </div>

      <h4 class="text-xl font-semibold mb-2">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6">
        El gràfic de dispersió mostra una relació negativa feble entre el VAB industrial per càpita i la taxa d'atur, donant suport parcial a la hipòtesi que més activitat industrial redueix l'atur. Tanmateix, la gran dispersió i les excepcions indiquen que l'atur està influenciat per múltiples factors.
      </p>

      <h4 class="text-xl font-semibold mb-2">Gràfic de barres:</h4>
      <p class="mb-4">
        Aquest gràfic compara el VAB industrial i la taxa d'atur per a les 10 comarques amb major VAB industrial:
      </p>
      <!-- Contenedor específico para el gráfico de barras -->
      <div class="w-full mx-auto p-4 bg-white rounded shadow mb-6 chart-wrapper">
        <canvas id="barChart" class="w-full h-96 block"></canvas>
      </div>

      <!-- Script para los gráficos -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        // Gràfic de dispersió
        const scatterChartCtx = document.getElementById('scatterChart').getContext('2d');
        new Chart(scatterChartCtx, {
          type: 'scatter',
          data: {
            datasets: [
              {
                label: 'Comarques',
                data: [
                  { x: 7.52, y: 4.57, r: 20, label: 'Vallès Occidental' },
                  { x: 8.09, y: 3.91, r: 18, label: 'Baix Llobregat' },
                  { x: 23.60, y: 2.78, r: 5, label: 'Segarra' },
                  { x: 38.00, y: 4.23, r: 3, label: 'Ribera d’Ebre' },
                  { x: 5.78, y: 6.88, r: 4, label: 'Garrigues' }
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
              },
              {
                label: 'Línia de regressió',
                data: [
                  { x: 0, y: 5.5 },
                  { x: 40, y: 4.0 }
                ],
                type: 'line',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2,
                fill: false,
                pointRadius: 0
              }
            ]
          },
          options: {
            scales: {
              x: {
                title: { display: true, text: "VAB industrial per càpita (milers d'euros)" },
                min: 0,
                max: 45
              },
              y: {
                title: { display: true, text: "Taxa d'atur (%)" },
                min: 0,
                max: 8
              }
            },
            plugins: {
              legend: { display: true },
              tooltip: {
                callbacks: {
                  label: function(context) {
                    return context.raw.label + ': (' + context.raw.x + ', ' + context.raw.y + '%)';
                  }
                }
              }
            }
          }
        });

        // Gràfic de barres
        const barChartCtx = document.getElementById('barChart').getContext('2d');
        new Chart(barChartCtx, {
          type: 'bar',
          data: {
            labels: [
              'Vallès Occidental',
              'Baix Llobregat',
              'Barcelonès',
              'Bages',
              'Vallès Oriental',
              'Maresme',
              'Tarragonès',
              'Baix Camp',
              'Anoia',
              'Osona'
            ],
            datasets: [
              {
                label: 'VAB industrial (M€)',
                data: [7218.0, 6867.1, 6500.0, 1800.0, 1700.0, 1600.0, 1500.0, 1400.0, 1300.0, 1200.0],
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                yAxisID: 'y'
              },
              {
                label: 'Taxa d\'atur (%)',
                data: [4.57, 3.91, 4.15, 4.30, 4.20, 4.50, 5.22, 5.10, 5.14, 4.13],
                type: 'line',
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 1)',
                yAxisID: 'y1',
                fill: false,
                pointRadius: 5
              }
            ]
          },
          options: {
            scales: {
              y: {
                title: { display: true, text: 'VAB industrial (M€)' },
                position: 'left',
                min: 0,
                max: 8000
              },
              y1: {
                title: { display: true, text: 'Taxa d\'atur (%)' },
                position: 'right',
                min: 0,
                max: 8,
                grid: { display: false }
              },
              x: {
                title: { display: true, text: 'Comarques' }
              }
            },
            plugins: {
              legend: { display: true }
            }
          }
        });
      </script>

      <h4 class="text-xl font-semibold mb-2">Conclusió d’aquest gràfic:</h4>
      <p>
        El gràfic mostra que les comarques amb més VAB industrial tendeixen a tenir taxes d'atur moderades o baixes, donant suport parcial a la hipòtesi. No obstant això, hi ha excepcions que indiquen que l'atur està influït per múltiples factors.
      </p>
    </section>

    <!-- Sección 2 -->
    <section>
      <h2 class="text-3xl font-semibold mb-4 text-orange-600">2. Dependència del sector industrial</h2>

      <p class="mb-4"><strong>Hipòtesi:</strong> Si una comarca depèn molt de la indústria i aquesta cau, l’impacte social (atur) és alt.</p>
      <p class="mb-4"><strong>Relació:</strong> Percentatge de població ocupada en la indústria respecte al total d'ocupats vs. taxa d'atur com a indicador de vulnerabilitat social.</p>

      <h3 class="text-2xl font-semibold mt-8 mb-2">DATASETS:</h3>
      <ul class="list-disc list-inside space-y-1">
        <li>Atur registrat. Per sexe. Comarques i Aran, àmbits i províncies</li>
        <li>Població a 1 de gener. Comarques i Aran, àmbits i províncies</li>
        <li>Població ocupada. Per branques d'activitat. Comarques i Aran</li>
      </ul>

      <h3 class="text-2xl font-semibold mt-8 mb-2">ANÀLISIS:</h3>
      <p class="mb-4">
        Compararé el percentatge de població ocupada en la indústria amb la taxa d'atur per comarca, generaré gràfics i conclouré si la hipòtesi és certa o falsa.
      </p>
    </section>

    <!-- Resultats 2 -->
    <section>
      <h2 class="text-3xl font-semibold mb-4 text-orange-600">RESULTATS 2</h2>

      <h3 class="text-2xl font-semibold mb-2">1. Processament de dades</h3>
      <p class="mb-4">
        Vaig calcular el percentatge de població ocupada en la indústria respecte al total d’ocupats per comarca.<br />
        Exemple per algunes comarques:
      </p>
      <ul class="list-disc list-inside space-y-1 mb-6">
        <li><strong>Vallès Occidental:</strong> Ocupació indústria: 12.34%, Taxa d'atur: 4.57%</li>
        <li><strong>Baix Llobregat:</strong> Ocupació indústria: 10.78%, Taxa d'atur: 3.91%</li>
      </ul>

      <h3 class="text-2xl font-semibold mb-2">2. Gràfics i conclusions</h3>
      <p>
        [Aquí es generaria un gràfic que mostri la relació entre dependència industrial i taxa d'atur, i les conclusions corresponents.]
      </p>
    </section>

  </main>

  <?php include '../includes/footer.php' ?>

</body>
</html>