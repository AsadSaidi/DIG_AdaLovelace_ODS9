<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="/../../estils/header.css">
</head>
<header class="sticky top-0 z-50 flex items-center justify-between p-4 bg-white text-black shadow-md">
  <div class="logo">
    <a href="../../index.php" aria-label="Tornar a la pàgina principal">
      <img src="../../data/logo.png" alt="Logo ODS 9: Indústria, Innovació i Infraestructura" class="h-12">
    </a>
  </div>
  <nav>
    <ul class="flex items-center space-x-6 list-none">
      <li class="flex items-center">
        <a href="../../index.php" class="text-black hover:text-blue-600 font-semibold text-sm">Inici</a>
      </li>
      <li class="flex items-center">
        <a href="../../views/qui_som.php" class="text-black hover:text-blue-600 font-semibold text-sm">Qui som?</a>
      </li>
      <li class="flex items-center">
        <a href="../../views/impacteSocial.php" class="text-black hover:text-blue-600 font-semibold text-sm">Impacte Social</a>
      </li>
      <li class="flex items-center">
        <a href="../../views/impacteAmbiental.php" class="text-black hover:text-blue-600 font-semibold text-sm">Impacte Ambiental</a>
      </li>
      <li class="flex items-center">
        <a href="../../views/impacteTecnologic.php" class="text-black hover:text-blue-600 font-semibold text-sm">Impacte Tecnològic</a>
      </li>
      <li class="flex items-center">
        <a href="../../views/solucions.php" class="text-black hover:text-blue-600 font-semibold text-sm">Solucions</a>
      </li>
      <li class="flex items-center">
        <a href="../../views/API/documentacion.php" class="text-black hover:text-blue-600 font-semibold text-sm">API</a>
      </li>
      <li class="flex items-center notranslate">
        <select id="languageSelector" onchange="cambiarIdioma(this.value)">
          <option value="ca">Català</option>
          <option value="es">Español</option>
          <option value="en">English</option>
          <option value="ar">العربية</option> <!-- árabe añadido -->
        </select>
      </li>
    </ul>
  </nav>
</header>