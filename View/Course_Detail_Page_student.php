<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Détails du cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-black shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-white">Youdemy</a>
                    <div class="hidden md:flex space-x-8 ml-10">
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2">Accueil</a>
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2">Cours</a>
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2">Mes Cours</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                        Mon Compte
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Course Header -->
    <div class="bg-gradient-to-r from-white to-gray-200 pt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <span class="bg-black text-white text-sm px-3 py-1 rounded">Développement Web</span>
                    <h1 class="text-4xl font-bold text-black mt-4 mb-4">Développement Web Full-Stack</h1>
                    <p class="text-xl text-gray-700 mb-6">Maîtrisez HTML, CSS, JavaScript, PHP et MySQL pour devenir développeur full-stack</p>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">★★★★☆</div>
                        <span class="ml-2 text-gray-600">4.8 (256 avis)</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/40/40" alt="Instructor" class="w-10 h-10 rounded-full">
                        <span class="ml-2 text-gray-700">Par John Doe</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <span class="mr-4">Dernière mise à jour: 10/01/2024</span>
                        <span>Niveau: Débutant</span>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/api/placeholder/600/300" alt="Course Preview" class="w-full rounded-lg mb-6">
                    <button class="w-full bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800 mb-4">
                        S'inscrire au cours
                    </button>
                    <div class="space-y-4 text-gray-700">
                        <div class="flex items-center">
                            <span class="mr-2">✓</span>
                            <span>30 jours d'accès garantis</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">✓</span>
                            <span>Certificat de fin de cours</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">✓</span>
                            <span>Ressources téléchargeables</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column: Details -->
            <div class="lg:col-span-2">
                <!-- What you'll learn -->
                <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                    <h2 class="text-2xl font-bold mb-4">Ce que vous apprendrez</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <span class="mr-2">✓</span>
                            <span>Créer des sites web responsifs avec HTML et CSS</span>
                        </div>
                        <div class="flex items-start">
                            <span class="mr-2">✓</span>
                            <span>Maîtriser JavaScript et ses frameworks modernes</span>
                        </div>
                        <div class="flex items-start">
                            <span class="mr-2">✓</span>
                            <span>Développer des API REST avec PHP</span>
                        </div>
                        <div class="flex items-start">
                            <span class="mr-2">✓</span>
                            <span>Gérer des bases de données MySQL</span>
                        </div>
                    </div>
                </div>

                <!-- Course Description -->
                <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                    <h2 class="text-2xl font-bold mb-4">Description du cours</h2>
                    <div class="prose max-w-none">
                        <p class="mb-4">
                            Ce cours complet vous guidera à travers toutes les étapes nécessaires pour devenir un développeur web full-stack compétent. Vous apprendrez les technologies front-end et back-end les plus demandées sur le marché.
                        </p>
                        <p class="mb-4">
                            Le cours commence par les fondamentaux du développement web et progresse vers des concepts plus avancés. Vous réaliserez plusieurs projets pratiques pour consolider vos connaissances.
                        </p>
                    </div>
                </div>

                <!-- Course Content -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Contenu du cours</h2>
                    <div class="space-y-4">
                        <div class="border rounded-lg">
                            <div class="p-4 bg-gray-50 flex justify-between items-center">
                                <h3 class="font-semibold">Section 1: Introduction au développement web</h3>
                                <span class="text-gray-600">3 heures</span>
                            </div>
                            <div class="p-4 space-y-2">
                                <div class="flex items-center">
                                    <span class="mr-2">📹</span>
                                    <span>Introduction à HTML</span>
                                    <span class="ml-auto text-gray-600">45 min</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="mr-2">📹</span>
                                    <span>Bases de CSS</span>
                                    <span class="ml-auto text-gray-600">1 heure</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Requirements and Instructor -->
            <div>
                <!-- Requirements -->
                <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                    <h2 class="text-xl font-bold mb-4">Prérequis</h2>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>Connaissance basique en informatique</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>Aucune expérience en programmation requise</span>
                        </li>
                    </ul>
                </div>

                <!-- Instructor -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-4">À propos de l'instructeur</h2>
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/80/80" alt="Instructor" class="w-20 h-20 rounded-full">
                        <div class="ml-4">
                            <h3 class="font-semibold">John Doe</h3>
                            <p class="text-gray-600">Développeur Web Senior</p>
                        </div>
                    </div>
                    <p class="text-gray-700">
                        15 ans d'expérience en développement web. Expert en technologies front-end et back-end modernes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>