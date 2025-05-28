<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Documentació API - Dades Comarques</title>
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
     /* Sobreescrita de l'estil :hover del menú de navegació */
    nav a:hover {
      color: #F97316 !important; /* Taronja per a l'hover */
      transform: scale(1.05);
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen text-gray-900">
  <?php include '../../includes/header.php' ?>
  <header class="bg-gradient-to-r from-orange-600 to-orange-400 text-white p-6">
    <h1 class="text-4xl font-bold max-w-5xl mx-auto animate-fade-in">Documentació de l'API de la Base de Dades</h1>
  </header>

  <main class="max-w-5xl mx-auto p-6 space-y-8">
    <!-- Input readonly dinàmic -->
    <section>
      <label for="endpointSelect" class="block text-lg font-semibold mb-2">Selecciona una taula:</label>
      <select id="endpointSelect" class="w-full p-2 border rounded">
        <option value="poblacio_comarques">poblacio_comarques</option>
        <option value="poblacio_sectors">poblacio_sectors</option>
        <option value="atur_comarca">atur_comarca</option>
        <option value="vab_comarques">vab_comarques</option>
        <option value="inversions_comarques">inversions_comarques</option>
      </select>
      <input type="text" id="apiUrl" class="mt-4 w-full p-2 border rounded bg-gray-100" readonly />
    </section>

    <!-- Descripció general -->
    <section>
      <h2 class="text-2xl font-bold text-orange-600">Base de dades: database.db</h2>
      <p><strong>URL base:</strong> [domini actual]/api/api.php</p>
    </section>

    <section>
      <h3 class="text-xl font-semibold">Taules disponibles</h3>
      <ul class="list-disc list-inside space-y-2 mt-2">
        <li><strong>poblacio_comarques</strong>: comarca, valor</li>
        <li><strong>poblacio_sectors</strong>: comarca, industriesExtractives, industriesManufactureres, subministramentEnergia, subministramentAigua</li>
        <li><strong>atur_comarca</strong>: comarca, total</li>
        <li><strong>vab_comarques</strong>: comarca, [columnes per sectors, normalitzades]</li>
        <li><strong>inversions_comarques</strong>: comarca, [1995 a 2023]</li>
      </ul>
    </section>

    <!-- Endpoints -->
    <section>
      <h3 class="text-xl font-semibold">Endpoints de l'API</h3>
      <ul class="list-disc list-inside mt-2">
        <li><code>GET /api/api.php?table={taula}</code> - Tots els registres</li>
        <li><code>GET /api/api.php?table={taula}&comarca=Nom</code> - Filtra per comarca</li>
        <li><code>GET /api/api.php?table=inversions_comarques&year={any}</code> - Per any</li>
        <li><code>GET /api/api.php?table={taula}/columns</code> - Per veure les columnes disponibles de cada taula</li>
      </ul>
    </section>

    <!-- Format resposta -->
    <section>
      <h3 class="text-xl font-semibold">Format de la resposta:</h3><br>
      <h4 id="urlEjemplo" class="text-l font-semibold"> URL utilitzada: </h4>
      <pre id="apiEjemplo" class="bg-gray-200 text-black p-4 rounded overflow-x-auto overflow-y-auto" style="max-height: 400px;"></pre>    
    </section>

    <!-- Notes -->
    <section>
      <h3 class="text-xl font-semibold">Notes</h3>
      <ul class="list-disc list-inside mt-2">
        <li>Els noms de columna estan en minúscules, sense accents i amb guions baixos.</li>
        <li>S'han eliminat metadades i netejat els fitxers font per consistència.</li>
        <li>Per consultes o errors, contacta amb el desenvolupador o consulta el repositori associat.</li>
      </ul>
    </section>
  </main>

  <?php include '../../includes/footer.php' ?>

  <script>
    const select = document.getElementById('endpointSelect');
    const input = document.getElementById('apiUrl');
    const baseUrl = `${window.location.origin}/api/api.php`;
    const urlEjemploUtilizada = document.getElementById('urlEjemplo');
    input.value = `${baseUrl}?table=${select.value}`;

    select.addEventListener('change', () => {
      input.value = `${baseUrl}?table=${select.value}`;
    });

    // Ús d'api d'exemple
    let url = `${baseUrl}?table=poblacio_comarques`;
    urlEjemploUtilizada.textContent += url;

    fetch(url)
      .then(response => response.json())
      .then(data => {
        // Per mostrar el JSON en format "pretty"
        const prettyJson = JSON.stringify(data, null, 2);
        document.getElementById('apiEjemplo').textContent = prettyJson;
      })
      .catch(error => {
        document.getElementById("salida").textContent = "Error al carregar les dades: " + error;
      });
  </script>
  <script src="scripts/traducir.js"></script>
  <div id="google_translate_element" style="display:none"></div>
</body>
</html>
