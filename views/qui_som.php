<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Qui som</title>
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
    <h1 class="text-6xl font-bold max-w-5xl mx-auto animate-fade-in text-white">Qui som?</h1>
  </header>

  <main class="max-w-5xl mx-auto p-6 space-y-16">
    <section class="bg-white p-8 rounded-lg shadow-md space-y-4">
      <h2 class="text-3xl font-semibold text-orange-600 animate-fade-in">Presentació</h2>
      <p class="text-lg leading-relaxed">
        Som un grup de persones apassionades per la tecnologia i les dades, amb un objectiu clar: utilitzar-les per transformar i millorar el nostre territori, més enllà de les grans ciutats.
      </p>
      <p class="text-lg leading-relaxed">
        Creiem que la tecnologia ha d’arribar a tothom, independentment d’on visqui, i que les dades poden ser una eina poderosa per impulsar el canvi positiu.
      </p>
      <p class="text-lg leading-relaxed">
        Amb aquest projecte, no només portem la tecnologia a tots els racons, sinó que també compartim el coneixement que generem per inspirar i empoderar les comunitats.
      </p>
    </section>

    <section class="bg-white p-8 rounded-lg shadow-md space-y-4">
      <h2 class="text-3xl font-semibold text-orange-600 animate-fade-in">Missió</h2>
      <p class="text-lg leading-relaxed">
        Apropar la innovació tecnològica a nivell local, fent-la accessible i útil per a tothom. Creiem que, amb les dades ben gestionades i la col·laboració, podem ajudar a prendre decisions més intel·ligents i impulsar projectes que beneficiïn la comunitat.
      </p>
    </section>

    <section class="bg-white p-8 rounded-lg shadow-md space-y-4">
      <h2 class="text-3xl font-semibold text-orange-600 animate-fade-in">Visió</h2>
      <p class="text-lg leading-relaxed">
        Volem ser un referent en democratització tecnològica i impulsar la innovació social que transformi positivament les comunitats de Catalunya.
      </p>
    </section>

    <section class="bg-white p-8 rounded-lg shadow-md space-y-4">
      <h2 class="text-3xl font-semibold text-orange-600 animate-fade-in">Valors</h2>
      <ul class="list-disc list-inside text-lg space-y-2">
        <li><strong>Accessibilitat i inclusió digital:</strong> La tecnologia ha de ser per a tothom, sense barreres.</li>
        <li><strong>Transparència i responsabilitat:</strong> Treballem de manera oberta i ètica, respectant la privacitat i la confiança.</li>
        <li><strong>Col·laboració i comunitat:</strong> Creiem en la força del treball conjunt i en compartir coneixements.</li>
        <li><strong>Innovació sostenible:</strong> Busquem solucions que respectin el medi ambient i el desenvolupament social.</li>
      </ul>
    </section>

    <section class="bg-white p-8 rounded-lg shadow-md space-y-6">
      <h2 class="text-3xl font-semibold text-orange-600 animate-fade-in">Impactes</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-orange-100 p-4 rounded-lg">
          <h3 class="text-xl font-semibold mb-2 text-orange-600">Impacte Social</h3>
          <ul class="list-disc list-inside text-lg space-y-1">
            <li>Reduïm la bretxa digital rural.</li>
            <li>Empoderem les comunitats amb coneixement i eines tecnològiques.</li>
            <li>Fomentem la participació ciutadana en la presa de decisions.</li>
          </ul>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg">
          <h3 class="text-xl font-semibold mb-2 text-orange-600">Impacte Ambiental</h3>
          <ul class="list-disc list-inside text-lg space-y-1">
            <li>Promovem l’ús de dades per fer un ús més responsable dels recursos naturals.</li>
            <li>Afavorim projectes locals que respecten el medi ambient.</li>
            <li>Apostem per una innovació que contribueixi a un futur sostenible.</li>
          </ul>
        </div>
        <div class="bg-orange-100 p-4 rounded-lg">
          <h3 class="text-xl font-semibold mb-2 text-orange-600">Impacte Tecnològic</h3>
          <ul class="list-disc list-inside text-lg space-y-1">
            <li>Portem tecnologies emergents a entorns locals.</li>
            <li>Oferim formació i suport per garantir l’accés tecnològic equitatiu.</li>
            <li>Convertim dades obertes en valor públic real.</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="bg-white p-8 rounded-lg shadow-md space-y-4">
      <h2 class="text-3xl font-semibold text-orange-600 animate-fade-in">Equip</h2>
      <p class="text-lg leading-relaxed">
        Som Asad Tahere, Naila Jabeen, Pol Salvadori Barberà i Francisco Fernande Navarro, un equip multidisciplinari format per persones que han fet una recerca en àmbits com la tecnologia, les dades, la comunicació i el desenvolupament web.
      </p>
    </section>
  </main>

  <?php include '../includes/footer.php' ?>
  <script src="../scripts/traducir.js"></script>
  <div id="google_translate_element" style="display:none"></div>
</body>
</html>