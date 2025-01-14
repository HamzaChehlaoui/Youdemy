<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy</title>
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
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2">Catégories</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="front_and/login.php"><button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                        Connexion
                    </button></a>
                    <button class="border border-black text-black px-4 py-2 rounded-lg hover:bg-gray-100">
                        Inscription
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-white to-gray-200 pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                <div class="mb-8 lg:mb-0">
                    <h1 class="text-4xl font-bold text-black mb-6">
                        Apprenez de nouvelles compétences avec Youdemy
                    </h1>
                    <p class="text-xl text-gray-700 mb-8">
                        Des milliers de cours en ligne dispensés par des experts. Trouvez le vôtre dès aujourd'hui.
                    </p>
                    <div class="flex space-x-4">
                        <button class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800">
                            Commencer
                        </button>
                        <button class="border border-black text-black px-6 py-3 rounded-lg hover:bg-gray-100">
                            En savoir plus
                        </button>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://www.skillfinder.com.au/media/wysiwyg/udemylogo.png" alt="Learning" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <input type="text" placeholder="Rechercher un cours..." 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black text-black">
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black text-black">
                    <option>Toutes les catégories</option>
                    <option>Développement Web</option>
                    <option>Business</option>
                    <option>Design</option>
                </select>
                <button class="w-full bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                    Rechercher
                </button>
            </div>
        </div>
    </div>

    <!-- Featured Courses -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-black mb-8">Cours populaires</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-black text-white text-xs px-2 py-1 rounded">Développement</span>
                        </div>
                        <h3 class="text-xl font-semibold text-black mb-2">Développement Web Full-Stack</h3>
                        <p class="text-gray-700 mb-4">Apprenez HTML, CSS, JavaScript, PHP et MySQL</p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-700">Par John Doe</span>
                            <span class="text-black font-semibold">49.99 €</span>
                        </div>
                    </div>
                </div>

                <!-- Course Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-700 text-white text-xs px-2 py-1 rounded">Design</span>
                        </div>
                        <h3 class="text-xl font-semibold text-black mb-2">UI/UX Design Masterclass</h3>
                        <p class="text-gray-700 mb-4">Maîtrisez Figma et les principes du design moderne</p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-700">Par Jane Smith</span>
                            <span class="text-black font-semibold">39.99 €</span>
                        </div>
                    </div>
                </div>

                <!-- Course Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="/api/placeholder/400/200" alt="Course" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-800 text-white text-xs px-2 py-1 rounded">Business</span>
                        </div>
                        <h3 class="text-xl font-semibold text-black mb-2">Marketing Digital</h3>
                        <p class="text-gray-700 mb-4">Stratégies SEO et médias sociaux</p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-700">Par Mike Johnson</span>
                            <span class="text-black font-semibold">59.99 €</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-black mb-8">Catégories populaires</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-black mb-2">Développement Web</h3>
                    <p class="text-gray-700">112 cours</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-black mb-2">Design</h3>
                    <p class="text-gray-700">89 cours</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-black mb-2">Business</h3>
                    <p class="text-gray-700">95 cours</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-black mb-2">Marketing</h3>
                    <p class="text-gray-700">76 cours</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-black rounded-lg shadow-xl p-8 md:p-12">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-white mb-4">Prêt à commencer votre apprentissage ?</h2>
                    <p class="text-gray-300 mb-8">Rejoignez des milliers d'apprenants qui transforment leur vie avec Youdemy</p>
                    <button class="bg-white text-black px-8 py-3 rounded-lg hover:bg-gray-100">
                        Commencer gratuitement
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-gray-300">
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
