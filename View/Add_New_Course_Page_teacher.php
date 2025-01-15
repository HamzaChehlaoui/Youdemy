<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Ajouter un cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-black shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-white">Youdemy</a>
                    <div class="hidden md:flex space-x-8 ml-10">
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2">Dashboard</a>
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2">Mes Cours</a>
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2">Statistiques</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="pt-16 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="px-4 py-6 sm:px-0">
                <h1 class="text-3xl font-bold text-gray-900">Ajouter un nouveau cours</h1>
                <p class="mt-2 text-gray-600">Créez votre cours en remplissant les informations ci-dessous</p>
            </div>

            <!-- Course Form -->
            <div class="mt-6">
                <form class="space-y-8">
                    <!-- Basic Information -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-6">Informations de base</h2>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Titre du cours*
                                </label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Description*
                                </label>
                                <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black"></textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Catégorie*
                                    </label>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                                        <option>Développement Web</option>
                                        <option>Design</option>
                                        <option>Business</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Niveau*
                                    </label>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                                        <option>Débutant</option>
                                        <option>Intermédiaire</option>
                                        <option>Avancé</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Prix (€)*
                                </label>
                                <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                            </div>
                        </div>
                    </div>

                    <!-- Course Content -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-6">Contenu du cours</h2>
                        <div class="space-y-6">
                            <!-- Section 1 -->
                            <div class="border rounded-lg p-4">
                                <div class="flex justify-between items-center mb-4">
                                    <input type="text" placeholder="Titre de la section" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                                    <button type="button" class="text-black hover:text-gray-600">
                                        <span class="sr-only">Supprimer la section</span>
                                        ×
                                    </button>
                                </div>
                                <!-- Lessons -->
                                <div class="space-y-4 ml-6">
                                    <div class="flex items-center space-x-4">
                                        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                                            <option>Vidéo</option>
                                            <option>Document</option>
                                            <option>Quiz</option>
                                        </select>
                                        <input type="text" placeholder="Titre de la leçon" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                                        <button type="button" class="text-black hover:text-gray-600">×</button>
                                    </div>
                                </div>
                                <button type="button" class="mt-4 text-sm text-black hover:text-gray-600">
                                    + Ajouter une leçon
                                </button>
                            </div>
                            <button type="button" class="text-sm text-black hover:text-gray-600">
                                + Ajouter une section
                            </button>
                        </div>
                    </div>

                    <!-- Course Requirements -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-6">Prérequis</h2>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <input type="text" placeholder="Ajoutez un prérequis" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-black">
                                <button type="button" class="text-black hover:text-gray-600">×</button>
                            </div>
                            <button type="button" class="text-sm text-black hover:text-gray-600">
                                + Ajouter un prérequis
                            </button>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex justify-end space-x-4">
                        <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                            Enregistrer comme brouillon
                        </button>
                        <button type="submit" class="px-6 py-2 bg-black text-white rounded-lg hover:bg-gray-800">
                            Publier le cours
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>