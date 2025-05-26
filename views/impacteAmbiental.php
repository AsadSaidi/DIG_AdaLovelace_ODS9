<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Impacte Ambiental de la Indústria a les Comarques Catalanes</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f4f4f4;
    }
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
    <h1 class="text-4xl font-bold max-w-5xl mx-auto">L'Impacte Ambiental de la Indústria a les Comarques Catalanes</h1>
  </header>

  <main class="max-w-5xl mx-auto p-6 space-y-12">
    <!-- Secció 1 -->
    <section>
      <h2 class="text-5xl font-semibold mb-4 text-orange-600">1. Emissions de Gasos d'Efecte Hivernacle (GEH) a Catalunya</h2>

      <p class="mb-4"><strong>Hipòtesi:</strong> El consum d’energia no renovable domina, però les renovables creixen amb el temps i varien segons la província.</p>
      <p class="mb-4"><strong>Relació:</strong> Les comarques amb més activitat industrial tenen emissions de GEH més elevades, però l’ús creixent de renovables pot mitigar aquest impacte.</p>

      <h3 class="text-2xl font-semibold mt-8 mb-2">DATASETS:</h3>
      <ul class="list-disc list-inside space-y-1">
        <li>Informe_Emissions_GEH_Catalunya</li>
        <li>Catalonia_Industrial_Energy_Consumption_Report</li>
        <li>PIB. Per sectors. Variació en volum</li>
      </ul>

      <h3 class="text-2xl font-semibold mt-8 mb-2">ANÀLISI:</h3>
      <p class="mb-4">
        Analitzaré el consum energètic per tipus d’energia (renovable i no renovable) i les emissions de GEH per província, generaré gràfics i conclouré si la hipòtesi és certa o falsa.
      </p>

      <h4 class="text-xl font-semibold mt-6 mb-2">Metodologia</h4>
      <p class="mb-2"><strong>Dades:</strong></p>
      <ul class="list-disc list-inside space-y-1 mb-4">
        <li>Consum energètic per tipus (gas natural, electricitat, biomassa, biogàs) i per província (Barcelona, Tarragona, Girona, Lleida).</li>
        <li>Emissions totals i per sectors (indústria, transport, LULUCF) de 2000 a 2020.</li>
      </ul>
      <p class="mb-4">
        Agruparé el consum per tipus d’energia i província, calcularé tendències temporals (2003-2020) i visualitzaré la proporció de renovables vs. no renovables. També analitzaré l’efecte compensatori del sector LULUCF.
      </p>

      <p class="mb-4"><strong>Anàlisi:</strong></p>
      <ul class="list-disc list-inside space-y-1">
        <li>Vaig excloure dades agregades de "Catalunya" per centrar-me en províncies.</li>
        <li>Vaig calcular la proporció de consum energètic renovable vs. no renovable.</li>
        <li>Vaig generar dos gràfics:
          <ul class="list-disc list-inside ml-6 mt-1 space-y-1">
            <li>Dispersió: Consum energètic renovable vs. no renovable per província.</li>
            <li>Línia: Evolució del consum energètic per província (2002-2020).</li>
          </ul>
        </li>
      </ul>
    </section>

    <!-- Resultats i conclusions de la primera part -->
    <section>
      <h2 class="text-5xl font-semibold mb-4 text-orange-600">RESULTATS</h2>

      <h3 class="text-2xl font-semibold mb-2">1. Processament de dades</h3>
      <p class="mb-4">
        Vaig agrupar les dades per província, calculant el consum energètic (ktep) i les emissions de GEH. Exemple de dades processades:
      </p>
      <ul class="list-disc list-inside space-y-1 mb-6">
        <li><strong>Barcelona:</strong> Consum no renovable (2020) = 4,500 ktep, Consum renovable = 450 ktep, Emissions GEH = 12,000 kt CO₂ eq.</li>
        <li><strong>Tarragona:</strong> Consum no renovable (2020) = 2,800 ktep, Consum renovable = 400 ktep (45% creixement biomassa 2010-2020), Emissions GEH = 8,000 kt CO₂ eq.</li>
      </ul>

      <h3 class="text-2xl font-semibold mb-2">2. Gràfics</h3>
      <h4 class="text-xl font-semibold mb-2">Gràfic de dispersió: Consum renovable vs. no renovable</h4>
      <p class="mb-4">
        Eix X: Consum energètic no renovable (ktep).<br />
        Eix Y: Consum energètic renovable (ktep).<br />
        Punts: Cada província, amb mida proporcional a les emissions de GEH.<br />
        Línia de referència: Tendència general.
      </p>

      <?php include '../includes/charts/emissions_scatter.html' ?>

      <h4 class="text-xl font-semibold mb-2">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6">
        El gràfic de dispersió mostra que el consum d’energia no renovable domina àmpliament en totes les províncies, especialment a Barcelona i Tarragona. Les energies renovables, com la biomassa, mostren un creixement (p. ex., 45% a Tarragona entre 2010 i 2020), però segueixen sent marginals. Això recolza parcialment la hipòtesi, ja que les renovables creixen, però el consum no renovable segueix sent predominant.
      </p>

      <h4 class="text-xl font-semibold mb-2">Gràfic de línia: Evolució del consum energètic</h4>
      <p class="mb-4">
        Aquest gràfic mostra l’evolució del consum energètic (ktep) per província entre 2002 i 2020.
      </p>

      <?php include '../includes/charts/emissions_line.html' ?>

      <h4 class="text-xl font-semibold mb-2">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6">
        El gràfic de línia mostra una reducció progressiva del consum energètic a les quatre províncies entre 2002 i 2020, amb Barcelona mantenint el consum més elevat. Això suggereix millores en l’eficiència energètica i una possible transició cap a fonts renovables, recolzant parcialment la hipòtesi.
      </p>
    </section>

    <!-- Secció 2 -->
    <hr class="border-t border-gray-300 my-6">
    <section>
      <h2 class="text-5xl font-semibold mb-4 text-orange-600">2. Consum Energètic Industrial i PIB Industrial</h2>

      <p class="mb-4"><strong>Hipòtesi:</strong> Les emissions estan correlacionades amb l’activitat industrial i el consum energètic, amb Barcelona com a província més emissora.</p>
      <p class="mb-4"><strong>Relació:</strong> El consum energètic industrial està estretament vinculat al PIB industrial, amb impactes visibles durant les crisis econòmiques (2008, 2020).</p>

      <h3 class="text-2xl font-semibold mt-8 mb-2">DATASETS:</h3>
      <ul class="list-disc list-inside space-y-1">
        <li>Informe_Emissions_GEH_Catalunya</li>
        <li>Catalonia_Industrial_Energy_Consumption_Report</li>
        <li>PIB. Per sectors. Variació en volum</li>
      </ul>

      <h3 class="text-2xl font-semibold mt-8 mb-2">ANÀLISI:</h3>
      <p class="mb-4">
        Compararé el consum energètic industrial amb el PIB industrial, analitzant l’impacte de les crisis econòmiques i generant gràfics per visualitzar les tendències.
      </p>

      <h4 class="text-xl font-semibold mt-6 mb-2">Metodologia</h4>
      <p class="mb-4">
        Creació de gràfics de dispersió entre consum energètic i PIB industrial.<br />
        Identificació de caigudes per crisis (2008 i 2020).<br />
        Anàlisi de la proporció d’energies renovables durant aquestes crisis.
      </p>
    </section>

    <!-- Resultats 2 -->
    <section>
      <h2 class="text-5xl font-semibold mb-4 text-orange-600">RESULTATS</h2>

      <h3 class="text-2xl font-semibold mb-2">1. Processament de dades</h3>
      <p class="mb-4">
        Vaig analitzar l’evolució del consum energètic i el PIB industrial (2003-2020). Exemple de dades:
      </p>
      <ul class="list-disc list-inside space-y-1 mb-6">
        <li><strong>2008:</strong> Consum energètic = 5,000 ktep, Variació PIB industrial = -5% (crisi econòmica).</li>
        <li><strong>2020:</strong> Consum energètic = 4,200 ktep, Variació PIB industrial = -8% (pandèmia).</li>
      </ul>

      <h3 class="text-2xl font-semibold mb-2">2. Gràfics i conclusions</h3>
      <h4 class="text-xl font-semibold mb-2">Gràfic: Consum Energètic vs. Variació PIB Industrial</h4>
      <p class="mb-4">
        Aquest gràfic correlaciona el consum energètic industrial (ktep) i la variació del PIB industrial (%) a Catalunya del 2004 al 2020.
      </p>

      <?php include '../includes/charts/consum_pib.html' ?>

      <h4 class="text-xl font-semibold mb-2">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6">
        El gràfic mostra una correlació entre el consum energètic i la variació del PIB industrial, amb caigudes pronunciades el 2008 i el 2020, reflectint l’impacte de les crisis econòmiques. Tot i això, l’augment de renovables durant aquests períodes suggereix una transició cap a un model més sostenible.
      </p>
    </section>

    <!-- Conclusió general -->
    <section>
      <h2 class="text-3xl font-semibold mb-4 text-orange-600">Conclusió General</h2>
      <p class="mb-4">
        L’anàlisi recolza parcialment les hipòtesis. El consum d’energia no renovable domina, però les renovables creixen lentament, especialment a Tarragona i Barcelona. Les emissions de GEH estan correlacionades amb l’activitat industrial, amb Barcelona com a màxim emissor. Les crisis econòmiques redueixen el consum energètic i el PIB industrial, però l’augment de renovables indica una transició cap a una indústria més sostenible. Les polítiques de compensació de carboni (LULUCF) i l’eficiència energètica són claus per mitigar l’impacte ambiental.
      </p>

      <h3 class="text-2xl font-semibold mt-8 mb-2">Limitacions</h3>
      <ul class="list-disc list-inside space-y-1 mb-4">
        <li>Les dades de consum energètic i emissions poden no reflectir variacions a nivell de comarca.</li>
        <li>La manca de dades detallades sobre l’ús de renovables per sector limita l’anàlisi.</li>
        <li>L’efecte compensatori del sector LULUCF pot estar subestimat.</li>
      </ul>
    </section>

  </main>
  <?php include '../includes/footer.php' ?>
</body>
</html>