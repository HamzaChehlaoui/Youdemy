<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Cours</title>
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
                        <a href="../index.php" class="text-white hover:text-gray-300 px-3 py-2">Accueil</a>
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2">Cours</a>
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2">Catégories</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                        Connexion
                    </button>
                    <button class="border border-black text-black px-4 py-2 rounded-lg hover:bg-gray-100">
                        Inscription
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="bg-gradient-to-r from-white to-gray-200 pt-24 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-black mb-4">Explorez nos cours</h1>
            <p class="text-gray-700">Découvrez une large sélection de cours pour développer vos compétences</p>
        </div>
    </div>

    <!-- Search and Filters -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <input type="text" placeholder="Rechercher un cours..." 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                    <option>Toutes les catégories</option>
                    <option>Développement Web</option>
                    <option>Business</option>
                    <option>Design</option>
                    <option>Marketing</option>
                </select>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                    <option>Tous les niveaux</option>
                    <option>Débutant</option>
                    <option>Intermédiaire</option>
                    <option>Avancé</option>
                </select>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                    <option>Trier par</option>
                    <option>Les plus populaires</option>
                    <option>Les mieux notés</option>
                    <option>Prix croissant</option>
                    <option>Prix décroissant</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Course Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Course Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="bg-black text-white text-xs px-2 py-1 rounded">Développement</span>
                        <span class="ml-2 text-sm text-gray-600">Débutant</span>
                    </div>
                    <h3 class="text-lg font-semibold text-black mb-2">JavaScript Moderne</h3>
                    <p class="text-sm text-gray-700 mb-4">Maîtrisez JavaScript ES6+ et les dernières fonctionnalités</p>
                    <div class="flex items-center mb-2">
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                        <span class="ml-2 text-sm text-gray-600">4.5 (128 avis)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Par John Doe</span>
                        <span class="text-black font-semibold">49.99 €</span>
                    </div>
                </div>
            </div>

            <!-- Course Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="bg-gray-700 text-white text-xs px-2 py-1 rounded">Design</span>
                        <span class="ml-2 text-sm text-gray-600">Intermédiaire</span>
                    </div>
                    <h3 class="text-lg font-semibold text-black mb-2">Design UI/UX Avancé</h3>
                    <p class="text-sm text-gray-700 mb-4">Créez des interfaces modernes avec Figma</p>
                    <div class="flex items-center mb-2">
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                        <span class="ml-2 text-sm text-gray-600">5.0 (92 avis)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Par Jane Smith</span>
                        <span class="text-black font-semibold">59.99 €</span>
                    </div>
                </div>
            </div>

            <!-- Course Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="bg-gray-800 text-white text-xs px-2 py-1 rounded">Business</span>
                        <span class="ml-2 text-sm text-gray-600">Avancé</span>
                    </div>
                    <h3 class="text-lg font-semibold text-black mb-2">Marketing Digital Pro</h3>
                    <p class="text-sm text-gray-700 mb-4">Stratégies avancées de marketing digital</p>
                    <div class="flex items-center mb-2">
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                        <span class="ml-2 text-sm text-gray-600">4.8 (156 avis)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Par Mike Johnson</span>
                        <span class="text-black font-semibold">79.99 €</span>
                    </div>
                </div>
            </div>

            <!-- Course Card 4 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="bg-black text-white text-xs px-2 py-1 rounded">Développement</span>
                        <span class="ml-2 text-sm text-gray-600">Intermédiaire</span>
                    </div>
                    <h3 class="text-lg font-semibold text-black mb-2">React.js Complet</h3>
                    <p class="text-sm text-gray-700 mb-4">Développez des applications web modernes</p>
                    <div class="flex items-center mb-2">
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                        <span class="ml-2 text-sm text-gray-600">4.7 (203 avis)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Par Sarah Davis</span>
                        <span class="text-black font-semibold">69.99 €</span>
                    </div>
                </div>
            </div>

            <!-- More course cards... -->
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8 space-x-2">
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100">Précédent</button>
            <button class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800">1</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100">2</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100">3</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100">Suivant</button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-gray-300 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">À propos</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Qui sommes-nous</a></li>
                        <li><a href="#" class="hover:text-white">Carrières</a></li>
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Ressources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Centre d'aide</a></li>
                        <li><a href="#" class="hover:text-white">Devenir formateur</a></li>
                        <li><a href="#" class="hover:text-white">Affiliés</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Légal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Conditions d'utilisation</a></li>
                        <li><a href="#" class="hover:text-white">Politique de confidentialité</a></li>
                        <li><a href="#" class="hover:text-white">Cookies</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Newsletter</h3>
                    <p class="mb-4">Restez informé des derniers cours et promotions</p>
                    <div class="flex">
                        <p class="mb-4">Youdemy@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-12 pt-8 text-center">
                <p>&copy; 2024 Youdemy. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>