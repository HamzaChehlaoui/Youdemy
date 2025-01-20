<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Mes Cours</title>
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

    <!-- Header -->
    <div class="bg-gradient-to-r from-white to-gray-200 pt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-3xl font-bold text-black mb-4">Mes Cours</h1>
            <p class="text-gray-700">Continuez votre apprentissage</p>
        </div>
    </div>

    <!-- Course Tabs -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="border-b border-gray-200 mb-8">
            <nav class="-mb-px flex space-x-8">
                <a href="#" class="border-b-2 border-black pb-4 px-1 text-black font-medium">
                    En cours
                </a>
                <a href="#" class="border-b-2 border-transparent pb-4 px-1 text-gray-500 hover:text-black hover:border-gray-300">
                    En attente d'approbation
                </a>
                <a href="#" class="border-b-2 border-transparent pb-4 px-1 text-gray-500 hover:text-black hover:border-gray-300">
                    Terminés
                </a>
            </nav>
        </div>

        <!-- Course Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Active Course Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-black mb-2">Développement Web Full-Stack</h3>
                    <div class="flex items-center mb-4">
                        <div class="h-2 bg-gray-200 rounded-full flex-grow">
                            <div class="h-2 bg-black rounded-full" style="width: 60%"></div>
                        </div>
                        <span class="ml-2 text-sm text-gray-600">60%</span>
                    </div>
                    <button class="w-full bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                        Continuer le cours
                    </button>
                </div>
            </div>

            <!-- Pending Approval Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-black mb-2">UI/UX Design Masterclass</h3>
                    <p class="text-gray-600 mb-4">En attente d'approbation</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Demande envoyée le 12/01/2024</span>
                        <button class="text-black hover:underline">Voir le statut</button>
                    </div>
                </div>
            </div>

            <!-- Completed Course Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-black mb-2">Introduction à Python</h3>
                    <p class="text-gray-600 mb-4">Cours terminé</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Terminé le 15/12/2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
