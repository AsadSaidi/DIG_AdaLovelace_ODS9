<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    nav a {
      transition: color 0.2s ease-in-out, transform 0.2s ease-in-out;
    }
    nav a:hover {
      color: #1E40AF;
      transform: scale(1.05);
    }
  </style>
</head>
<header class="sticky top-0 z-50 flex items-center justify-between p-4 bg-white text-black shadow-md">
  <div class="logo">
    <a href="../../index.php" aria-label="Tornar a la pàgina principal">
      <img src="../../data/logo.png" alt="Logo ODS 9: Indústria, Innovació i Infraestructura" class="h-12">
    </a>
  </div>
  <nav>
    <ul class="flex space-x-6 list-none">
      <li><a href="../../index.php" class="text-black hover:text-blue-600 font-semibold">Inici</a></li>
      <li><a href="../../views/impacteSocial.php" class="text-black hover:text-blue-600 font-semibold">Impacte Social</a></li>
      <li><a href="../../views/impacteAmbiental.php" class="text-black hover:text-blue-600 font-semibold">Impacte Ambiental</a></li>
      <li><a href="../../views/impacteTecnologic.php" class="text-black hover:text-blue-600 font-semibold">Impacte Tecnològic</a></li>
      <li><a href="../../views/solucions.php" class="text-black hover:text-blue-600 font-semibold">Solucions</a></li>
      <li><a href="../../views/API/documentacion.php" class="text-black hover:text-blue-600 font-semibold">API</a></li>
      <li><a href="../../views/qui_som.php" class="text-black hover:text-blue-600 font-semibold">Qui som?</a></li>
    </ul>
  </nav>
</header>
