<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Catalogue des cours</title>
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
            <h1 class="text-4xl font-bold text-black mb-4">Catalogue des cours</h1>
            <p class="text-xl text-gray-700">Découvrez nos cours et commencez votre apprentissage dès aujourd'hui</p>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex gap-4">
                <select class="px-4 py-2 border rounded-lg">
                    <option>Catégorie</option>
                    <option>Développement Web</option>
                    <option>Design</option>
                    <option>Marketing</option>
                </select>
                <input type="text" placeholder="Rechercher un cours..." 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
               

            </div>
        </div>
    </div>

    <!-- Course Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Course Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/600/300" alt="Course Preview" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-black text-white text-sm px-3 py-1 rounded">Développement Web</span>
                    </div>
                    <h2 class="text-xl font-bold mb-2">Développement Web Full-Stack</h2>
                    <p class="text-gray-600 mb-4">Maîtrisez HTML, CSS, JavaScript, PHP et MySQL pour devenir développeur full-stack</p>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">★★★★☆</div>
                        
                    </div>
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/40/40" alt="Instructor" class="w-8 h-8 rounded-full">
                        <span class="ml-2 text-gray-700">Par John Doe</span>
                    </div>
                    <div class="flex justify-between items-center">
                        
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                            Voir le cours
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/600/300" alt="Course Preview" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-black text-white text-sm px-3 py-1 rounded">Design</span>
                    </div>
                    <h2 class="text-xl font-bold mb-2">Design UX/UI Moderne</h2>
                    <p class="text-gray-600 mb-4">Créez des interfaces utilisateur modernes et intuitives</p>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">★★★★★</div>
                        
                    </div>
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/40/40" alt="Instructor" class="w-8 h-8 rounded-full">
                        <span class="ml-2 text-gray-700">Par Marie Martin</span>
                    </div>
                    <div class="flex justify-between items-center">
                        
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                            Voir le cours
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/600/300" alt="Course Preview" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-black text-white text-sm px-3 py-1 rounded">Intelligence Artificielle</span>
                    </div>
                    <h2 class="text-xl font-bold mb-2">Machine Learning Avancé</h2>
                    <p class="text-gray-600 mb-4">Apprenez les techniques avancées de machine learning avec Python et TensorFlow</p>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">★★★★☆</div>
                        
                    </div>
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/40/40" alt="Instructor" class="w-8 h-8 rounded-full">
                        <span class="ml-2 text-gray-700">Par Sarah Smith</span>
                    </div>
                    <div class="flex justify-between items-center">
                        
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                            Voir le cours
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex justify-center space-x-2">
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-100">Précédent</button>
            <button class="px-4 py-2 bg-black text-white rounded-lg">1</button>
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-100">2</button>
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-100">3</button>
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-100">Suivant</button>
        </div>
    </div>
</body>
</html>