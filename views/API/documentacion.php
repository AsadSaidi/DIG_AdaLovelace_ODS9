<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Documentació API - Dades Comarques</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen text-gray-900">
    <?php include '../../includes/header.php' ?>
  <header class="bg-orange-600 text-white p-6">
    <h1 class="text-4xl font-bold max-w-5xl mx-auto">Documentació de l'API de la Base de Dades</h1>
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
      <h2 class="text-2xl font-bold text-orange-600">Base de dades: poblacio_comarques_limpio.db</h2>
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
        <li><code>GET /api.php?table={taula}</code> - Tots els registres</li>
        <li><code>GET /api.php?table={taula}&comarca=Nom</code> - Filtra per comarca</li>
        <li><code>GET /api.php?table={taula}&year=2022</code> - Per any (només inversions)</li>
        <li><code>GET /api.php?table={taula}/columns</code> - Columnes disponibles</li>
      </ul>
    </section>

    <!-- Format resposta -->
    <section>
      <h3 class="text-xl font-semibold">Format de la resposta</h3>
      <pre class="bg-gray-100 p-4 rounded overflow-x-auto">
[
  {
    "comarca": "Alt Camp",
    "valor": 44455
  },
  {
    "comarca": "Alt Empordà",
    "valor": 138221
  }
]</pre>
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

    input.value = `${baseUrl}?table=${select.value}`;

    select.addEventListener('change', () => {
      input.value = `${baseUrl}?table=${select.value}`;
    });
  </script>
</body>
</html>