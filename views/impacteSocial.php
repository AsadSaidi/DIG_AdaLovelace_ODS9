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
    /* Estils específics per al gràfic */
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

    <!-- Secció 1 -->
    <section>
      <h2 class="text-5xl font-semibold mb-4 text-orange-600">1. Atur total vs. desenvolupament industrial</h2>

      <p class="mb-4"><strong>Hipòtesi:</strong> A més activitat industrial, menys atur.</p>
      <p class="mb-4"><strong>Relació:</strong> Comarques amb VAB industrial alt podrien tenir menor taxa d’atur.</p>

      <h3 class="text-2xl font-semibold mt-8 mb-2">DATASETS:</h3>
      <ul class="list-disc list-inside space-y-1">
        <li>Atur registrat. Per sexe. Comarques i Aran, àmbits i províncies</li>
        <li>Població a 1 de gener. Comarques i Aran, àmbits i províncies</li>
        <li>Valor afegit brut de la indústria</li>
      </ul>

      <h3 class="text-2xl font-semibold mt-8 mb-2">ANÀLISI:</h3>
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
            <li>Barres: VAB industrial i taxa d'atur per a les 10 comarques amb més VAB.</li>
          </ul>
        </li>
      </ul>
    </section>

    <!-- Resultats i conclusions de la primera part -->
    <section>
      <h2 class="text-5xl font-semibold mb-4 text-orange-600">RESULTATS</h2>

      <h3 class="text-2xl font-semibold mb-2">1. Processament de dades</h3>
      <p class="mb-4">
        Vaig unir els datasets per comarca, vaig calcular la taxa d'atur i el VAB per càpita.<br />
        Exemple de dades processades per algunes comarques:
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

      <?php include '../includes/charts/vab_dispersio.html' ?>

      <h4 class="text-xl font-semibold mb-2">Conclusió d’aquest gràfic:</h4>
      <p class="mb-6">
        El gràfic de dispersió mostra una relació negativa feble entre el VAB industrial per càpita i la taxa d'atur, donant suport parcial a la hipòtesi que més activitat industrial redueix l'atur. Tanmateix, la gran dispersió i les excepcions indiquen que l'atur està influenciat per múltiples factors.
      </p>

      <h4 class="text-xl font-semibold mb-2">Gràfic de barres:</h4>
      <p class="mb-4">
        Aquest gràfic compara el VAB industrial i la taxa d'atur per a les 10 comarques amb major VAB industrial:
      </p>
      <?php include '../includes/charts/vab_barres.html' ?>
      <h4 class="text-xl font-semibold mb-2">Conclusió d’aquest gràfic:</h4>
      <p>
        El gràfic mostra que les comarques amb més VAB industrial tendeixen a tenir taxes d'atur moderades o baixes, donant suport parcial a la hipòtesi. No obstant això, hi ha excepcions que indiquen que l'atur està influït per múltiples factors.
      </p>
      <br><br>

      <!-- Secció 4: Conclusió general -->
    <section>
      <h4 class="text-3xl font-semibold mb-4 text-orange-600">Conclusió general sobre la hipòtesi i els gràfics</h4>

      <p class="mb-4">
        <strong>Hipòtesi:</strong> A més activitat industrial, menys atur.
      </p>
      <p class="mb-4">
        La hipòtesi "A més activitat industrial, menys atur" és parcialment certa, però amb limitacions significatives. Els gràfics generats mostren una relació negativa feble entre el VAB industrial per càpita i la taxa d'atur, així com taxes d'atur moderades o baixes en comarques amb alta activitat o dependència industrial, com Segarra i Garrotxa. Tanmateix, la gran dispersió en les dades i excepcions com Anoia i Alt Camp indiquen que l'atur està influït per múltiples factors més enllà de l'activitat industrial.
      </p>

      <h4 class="text-2xl font-semibold mt-8 mb-2">Limitacions</h4>
      <ul class="list-disc list-inside space-y-1 mb-4">
        <li>La taxa d'atur es va calcular amb la població total, no la població activa, cosa que pot subestimar les taxes reals.</li>
        <li>No es va diferenciar entre tipus d'indústria (per exemple, química vs. alimentació), que poden tenir impactes diferents en l'ocupació.</li>
        <li>Factors com l'estacionalitat, la urbanització i les polítiques laborals no es van considerar explícitament.</li>
      </ul>
    </section>
    </section>

    <!-- Secció 2 -->
    <hr class="border-t border-gray-300 my-6">
    <section>
      <h2 class="text-5xl font-semibold mb-4 text-orange-600">2. Dependència del sector industrial</h2>

      <p class="mb-4"><strong>Hipòtesi:</strong> Si una comarca depèn molt de la indústria i aquesta cau, l’impacte social (atur) és alt.</p>
      <p class="mb-4"><strong>Relació:</strong> Percentatge de població ocupada en la indústria respecte al total d'ocupats vs. taxa d'atur com a indicador de vulnerabilitat social.</p>

      <h3 class="text-2xl font-semibold mt-8 mb-2">DATASETS:</h3>
      <ul class="list-disc list-inside space-y-1">
        <li>Atur registrat. Per sexe. Comarques i Aran, àmbits i províncies</li>
        <li>Població a 1 de gener. Comarques i Aran, àmbits i províncies</li>
        <li>Població ocupada. Per branques d'activitat. Comarques i Aran</li>
      </ul>

      <h3 class="text-2xl font-semibold mt-8 mb-2">ANÀLISI:</h3>
      <p class="mb-4">
        Compararé el percentatge de població ocupada en la indústria amb la taxa d'atur per comarca, generaré gràfics i conclouré si la hipòtesi és certa o falsa.
      </p>
    </section>

    <!-- Resultats 2 -->
    <section>
      <h2 class="text-5xl font-semibold mb-4 text-orange-600">RESULTATS</h2>

      <h3 class="text-2xl font-semibold mb-2">1. Processament de dades</h3>
      <p class="mb-4">
        Vaig calcular el percentatge de població ocupada en la indústria respecte al total d’ocupats per comarca.<br />
        Exemple per algunes comarques:
      </p>
      <ul class="list-disc list-inside space-y-1 mb-6">
        <li><strong>Vallès Occidental:</strong> Ocupació indústria: 12.34%, Taxa d'atur: 4.57%</li>
        <li><strong>Baix Llobregat:</strong> Ocupació indústria: 10.78%, Taxa d'atur: 3.91%</li>
      </ul>

      <h3 class="text-2xl font-semibold mb-2">2. Gràfic de dependència industrial</h3>
      <p class="mb-4">
        El següent gràfic mostra la relació entre el percentatge de població ocupada en la indústria i la taxa d’atur. Pot ajudar a identificar com la dependència del sector industrial pot augmentar la vulnerabilitat a l'atur.
      </p>
      <?php include '../includes/charts/dependeciaIndustrial.html' ?>

      <h4 class="text-xl font-semibold mb-2">Conclusió d’aquest gràfic:</h4>
      <p>
        El gràfic de dispersió mostra una relació positiva molt feble (correlació de Pearson ≈ 0.10, calculada aproximadament) entre el percentatge d'ocupació industrial i la taxa d'atur, contràriament a la hipòtesi. Comarques amb alta dependència industrial, com Segarra (37.72%, taxa d'atur = 2.78%) i Garrotxa (33.77%, taxa d'atur = 3.20%), tendeixen a tenir taxes d'atur baixes, suggerint que una forta dependència industrial no necessàriament implica major vulnerabilitat social (atur elevat). Tanmateix, excepcions com Anoia (25.45%, taxa d'atur = 5.14%) i Baix Penedès (14.76%, taxa d'atur = 5.72%) indiquen que l'atur pot ser alt en algunes comarques industrials, possiblement per factors com l'estacionalitat o la manca de diversificació econòmica. La gran dispersió suggereix que l'atur està influït per altres factors, com el turisme, els serveis o la demografia.
      </p>
    </section>

    <!-- Resultats 2 (segon gràfic) -->
    <section>

      <h3 class="text-2xl font-semibold mb-2">2. Gràfic de dependència industrial</h3>
      <p class="mb-4">
        Aquest gràfic compara el percentatge d'ocupació industrial i la taxa d'atur per a les 10 comarques amb major dependència industrial:<br />
        <strong>Eix Y esquerre:</strong> Percentatge d'ocupació industrial (%, barres blaves).<br />
        <strong>Eix Y dret:</strong> Taxa d'atur (%, línia vermella amb punts).
      </p>
      <?php include '../includes/charts/ocupacioIndustrial.html' ?>

      <h4 class="text-xl font-semibold mb-2">Conclusió d’aquest gràfic:</h4>
      <p>
        El gràfic de barres mostra que les comarques amb major dependència industrial, com <strong>Segarra</strong>, <strong>Garrotxa</strong> i <strong>Conca de Barberà</strong>, generalment tenen taxes d'atur baixes o moderades (2.78%-4.79%), contràriament a la hipòtesi que una alta dependència industrial implica major vulnerabilitat social. No obstant això, <strong>Anoia</strong> (25.45%, taxa d'atur = 5.14%) i <strong>Alt Camp</strong> (27.73%, taxa d'atur = 4.79%) presenten taxes d'atur més altes, suggerint que algunes comarques industrials poden ser més vulnerables, possiblement per una menor diversificació econòmica o per crisis sectorials específiques. La variació en les taxes d'atur indica que factors com la diversitat econòmica i les dinàmiques laborals locals tenen un paper important.
      </p>
    </section>

    <section>
      <h4 class="text-3xl font-semibold mb-4 text-orange-600">Conclusió general sobre la hipòtesi i els gràfics</h4>

      <p class="mb-4">
        <strong>Hipòtesi:</strong> Si una comarca depèn molt de la indústria i aquesta cau, l’impacte social (atur) és alt.
      </p>
      <p class="mb-4">
        La hipòtesi no és recolzada de manera clara pels gràfics i l’anàlisi, però hi ha algunes evidències que suggereixen vulnerabilitat en comarques específiques. Els gràfics mostren que comarques amb alta dependència industrial, com Segarra i Garrotxa, tenen taxes d’atur baixes o moderades (2.78%-3.20%), contràriament a la hipòtesi. No obstant això, comarques com Anoia (25.45%, taxa d’atur = 5.14%) i Alt Camp (27.73%, taxa d’atur = 4.79%) presenten taxes d’atur més altes, suggerint una possible vulnerabilitat en casos específics. La dispersió de les dades indica que l’impacte social depèn de factors addicionals.
      </p>

      <h4 class="text-2xl font-semibold mt-8 mb-2">Limitacions</h4>
      <ul class="list-disc list-inside space-y-1 mb-4">
        <li>Les dades d’ocupació són del 2021, mentre que les d’atur i població són del 2024, cosa que pot introduir discrepàncies temporals.</li>
        <li>La taxa d’atur es va calcular amb la població total, no la població activa, cosa que pot subestimar les taxes reals.</li>
        <li>No es disposa de dades directes sobre una "caiguda" de la indústria, per la qual cosa l’anàlisi assumeix que una alta dependència industrial implica vulnerabilitat potencial.</li>
        <li>No es va considerar la naturalesa específica de les indústries (per exemple, química vs. tèxtil), que poden tenir diferents impactes en l’ocupació.</li>
      </ul>
    </section>

  </main>

  <?php include '../includes/footer.php' ?>

</body>
</html>