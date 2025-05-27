<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ODS 9 – Indústria, Innovació i Infraestructura</title>
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
        .section {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            transition: transform 0.3s;
        }
        .section:hover {
            transform: translateY(-5px);
        }
        .btn {
            background-color: #FF6B00; /* Color del botó */
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #FF8C00; /* Color del botó en hover */
        }
         /* Sobreescrita de l'estil :hover del menú de navegació */
        nav a:hover {
        color: #F97316 !important; /* Taronja per a l'hover */
        transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen text-gray-900">
    <?php include 'includes/header.php' ?>
    
    <header class="bg-gradient-to-r from-orange-600 to-orange-400 text-white p-6">
        <h1 class="text-6xl font-bold max-w-5xl mx-auto animate-fade-in text-white">Objectiu de Desenvolupament Sostenible 9</h1>
    </header>
    
    <main class="max-w-5xl mx-auto p-6 space-y-16">
        <section class="section animate-fade-in">
            <div class="w-full">
                <?php include 'includes/animacion.html' ?>
            </div>
            <div class="text-gray-800 text-lg leading-relaxed space-y-8">
                <h2 class="text-3xl font-semibold mb-4 text-orange-600">Què és l’ODS 9?</h2>
                <p class="mb-6 text-justify">L’Objectiu de Desenvolupament Sostenible 9 busca construir infraestructures resilients, promoure una industrialització sostenible i inclusiva, i fomentar la innovació. És fonamental per al creixement econòmic, la millora de la qualitat de vida i la reducció de les desigualtats entre països.</p>
            </div>
        </section>

        <section class="section animate-fade-in">
            <h2 class="text-3xl font-semibold mb-4 text-orange-600">Infraestructura resilient</h2>
            <p class="mb-6 text-justify">La infraestructura resilient implica crear sistemes que puguin resistir i recuperar-se ràpidament de desastres naturals, crisis econòmiques o socials. Això inclou carreteres, ponts, transport, telecomunicacions i accés a serveis bàsics. Una infraestructura robusta és clau per al desenvolupament sostenible.</p>
        </section>

        <section class="section animate-fade-in">
            <h2 class="text-3xl font-semibold mb-4 text-orange-600">Industrialització sostenible i inclusiva</h2>
            <p class="mb-6 text-justify">Promoure indústries sostenibles significa fomentar processos productius que minimitzin l’impacte ambiental i utilitzin recursos de manera eficient. La inclusió assegura que petites i mitjanes empreses, així com comunitats vulnerables, tinguin accés a tecnologies i mercats, generant ocupació i desenvolupament econòmic just.</p>
        </section>

        <section class="section animate-fade-in">
            <h2 class="text-3xl font-semibold mb-4 text-orange-600">Innovació per al desenvolupament</h2>
            <p class="mb-6 text-justify">La innovació és el motor del progrés. L’ODS 9 impulsa la inversió en recerca i desenvolupament tecnològic, facilitant l’accés a tecnologies avançades per a tots els països, especialment els en vies de desenvolupament, per tancar la bretxa digital i tecnològica.</p>
        </section>

        <section class="section animate-fade-in">
            <h2 class="text-3xl font-semibold mb-4 text-orange-600">Importància global</h2>
            <p class="mb-6 text-justify">Sense infraestructures, indústria i innovació adequades, és impossible assolir altres ODS relacionats amb l’educació, la salut, la igualtat i la pobresa. L’ODS 9 és un pilar clau per construir un món més sostenible, resilient i inclusiu.</p>
        </section>

        <div class="text-center">
        </div>
    </main>
    
    <?php include 'includes/footer.php' ?>
</body>
</html>
