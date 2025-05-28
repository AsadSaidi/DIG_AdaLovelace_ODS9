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
    nav a:hover {
      color: #F97316 !important;
      transform: scale(1.05);
    }
    pre {
      white-space: pre-wrap;
      word-wrap: break-word;
    }
    .hover-scale {
      transition: transform 0.3s;
    }
    .hover-scale:hover {
      transform: scale(1.02);
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen text-gray-900">
  <?php include '../../includes/header.php' ?>
  
  <header class="bg-gradient-to-r from-orange-600 to-orange-400 text-white p-4">
    <h1 class="text-3xl md:text-4xl font-bold max-w-5xl mx-auto animate-fade-in text-white">Documentació de l'API de la Base de Dades</h1>
  </header>

  <main class="max-w-5xl mx-auto p-4 space-y-6">
    <!-- Input readonly dinàmic -->
    <section class="bg-white p-6 rounded-lg shadow-md animate-fade-in">
      <label for="endpointSelect" class="block text-lg font-semibold text-orange-600 mb-2">Selecciona una taula:</label>
      <select id="endpointSelect" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
        <option value="poblacio_comarques">poblacio_comarques</option>
        <option value="poblacio_sectors">poblacio_sectors</option>
        <option value="atur_comarca">atur_comarca</option>
        <option value="vab_comarques">vab_comarques</option>
        <option value="inversions_comarques">inversions_comarques</option>
      </select>
      <input type="text" id="apiUrl" class="mt-3 w-full p-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-700" readonly />
    </section>

    <!-- Descripció general -->
    <section class="bg-white p-6 rounded-lg shadow-md animate-fade-in">
      <h2 class="text-2xl font-bold text-orange-600 mb-2">Base de dades: database.db</h2>
      <p class="text-gray-700"><strong>URL base:</strong> [domini actual]/api/api.php</p>
    </section>

    <section class="bg-white p-6 rounded-lg shadow-md animate-fade-in">
      <h3 class="text-xl font-semibold text-orange-600 mb-2">Taules disponibles</h3>
      <ul class="list-disc list-inside space-y-1 text-gray-700">
        <li><strong>poblacio_comarques</strong>: comarca, valor</li>
        <li><strong>poblacio_sectors</strong>: comarca, industriesExtractives, industriesManufactureres, subministramentEnergia, subministramentAigua</li>
        <li><strong>atur_comarca</strong>: comarca, total</li>
        <li><strong>vab_comarques</strong>: comarca, [columnes per sectors, normalitzades]</li>
        <li><strong>inversions_comarques</strong>: comarca, [1995 a 2023]</li>
      </ul>
    </section>

    <!-- Endpoints -->
    <section class="bg-white p-6 rounded-lg shadow-md animate-fade-in">
      <h3 class="text-xl font-semibold text-orange-600 mb-2">Endpoints de l'API</h3>
      <ul class="list-disc list-inside space-y-1 text-gray-700">
        <li><code class="bg-gray-100 p-1 rounded">GET /api/api.php?table={taula}</code> - Tots els registres</li>
        <li><code class="bg-gray-100 p-1 rounded">GET /api/api.php?table={taula}&comarca=Nom</code> - Filtra per comarca</li>
        <li><code class="bg-gray-100 p-1 rounded">GET /api/api.php?table=inversions_comarques&year={any}</code> - Per any</li>
        <li><code class="bg-gray-100 p-1 rounded">GET /api/api.php?table={taula}/columns</code> - Per veure les columnes disponibles de cada taula</li>
      </ul>
    </section>

    <!-- Format resposta -->
    <section class="bg-white p-6 rounded-lg shadow-md animate-fade-in">
      <h3 class="text-xl font-semibold text-orange-600 mb-2">Format de la resposta:</h3>
      <h4 id="urlEjemplo" class="text-lg font-semibold text-gray-700 mb-1">URL utilitzada:</h4>
      <pre id="apiEjemplo" class="bg-orange-100 text-black p-3 rounded-lg overflow-x-auto overflow-y-auto max-h-96 text-sm"></pre>    
    </section>

    <!-- Notes -->
    <section class="bg-white p-6 rounded-lg shadow-md animate-fade-in">
      <h3 class="text-xl font-semibold text-orange-600 mb-2">Notes</h3>
      <ul class="list-disc list-inside space-y-1 text-gray-700">
        <li>Els noms de columna estan en minúscules, sense accents i amb guions baixos.</li>
        <li>S'han eliminat metadades i netejat els fitxers font per consistència.</li>
        <li>Per consultes o errors, contacta amb el desenvolupador o consulta el repositori associat.</li>
      </ul>
    </section>
  </main>

  <?php include '../../includes/footer.php' ?>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const select = document.getElementById('endpointSelect');
      const input = document.getElementById('apiUrl');
      const urlEjemplo = document.getElementById('urlEjemplo');
      const apiEjemplo = document.getElementById('apiEjemplo');
      const baseUrl = `${window.location.origin}/api/api.php`;

      if (!select || !input || !urlEjemplo || !apiEjemplo) {
        console.error('Algun element no s\'ha trobat en el DOM');
        return;
      }

      input.value = `${baseUrl}?table=${select.value}`;

      select.addEventListener('change', () => {
        input.value = `${baseUrl}?table=${select.value}`;
      });

      let url = `${baseUrl}?table=poblacio_comarques`;
      urlEjemplo.textContent = `URL utilitzada: ${url}`;

      fetch(url)
        .then(response => response.json())
        .then(data => {
          const prettyJson = JSON.stringify(data, null, 2);
          apiEjemplo.textContent = prettyJson;
        })
        .catch(error => {
          apiEjemplo.textContent = `Error al carregar les dades: ${error}`;
        });
    });
  </script>
</body>
</html>