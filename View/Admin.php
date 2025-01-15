<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Administration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-black shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-white">Youdemy Admin</a>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-white">Admin</span>
                    <a href="#" class="text-white hover:text-gray-300">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="pt-16">
        <!-- Tabs -->
        <div class="bg-white shadow">
            <div class="max-w-7xl mx-auto">
                <div class="flex space-x-8 px-4" role="tablist" id="tabs">
                    <button class="px-4 py-4 text-sm font-medium text-black border-b-2 border-black" role="tab" onclick="switchTab('users')">
                        Gestion des Utilisateurs
                    </button>
                    <button class="px-4 py-4 text-sm font-medium text-gray-500 hover:text-black" role="tab" onclick="switchTab('content')">
                        Gestion du Contenu
                    </button>
                    <button class="px-4 py-4 text-sm font-medium text-gray-500 hover:text-black" role="tab" onclick="switchTab('stats')">
                        Statistiques
                    </button>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="max-w-7xl mx-auto px-4 py-8">
            <!-- Teacher Validation Section -->
            <div id="users-tab" class="tab-content">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-black mb-6">Validation des Enseignants</h2>
                    <div class="grid gap-6">
                        <!-- Teacher Cards -->
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-semibold">Marie Dupont</h3>
                                    <p class="text-gray-600">4 cours · 156 étudiants</p>
                                    <p class="text-gray-600 mt-2">Email: marie.dupont@email.com</p>
                                    <p class="text-gray-600">Date d'inscription: 15/01/2025</p>
                                    <div class="mt-2">
                                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Actif</span>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                                        Activer
                                    </button>
                                    <button class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">
                                        Suspendre
                                    </button>
                                    <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Management Section -->
            <div id="content-tab" class="tab-content hidden">
                <div class="grid gap-6">
                    <!-- Course Management -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-black mb-6">Gestion des Cours</h2>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Catégorie</label>
                            <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option>Développement</option>
                                <option>Design</option>
                                <option>Business</option>
                                <option>Marketing</option>
                            </select>
                        </div>
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Titre</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Enseignant</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Étudiants</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4">Développement Web Full-Stack</td>
                                    <td class="px-6 py-4">Marie Dupont</td>
                                    <td class="px-6 py-4">89</td>
                                    <td class="px-6 py-4">
                                        <button class="text-blue-600 hover:text-blue-800">Modifier</button>
                                        <button class="text-red-600 hover:text-red-800 ml-4">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Bulk Grade Entry -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-black mb-6">Saisie en Masse des Notes</h2>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Cours</label>
                            <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option>Développement Web Full-Stack</option>
                                <option>Design UX/UI</option>
                                <option>Marketing Digital</option>
                            </select>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Étudiant</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Note Actuelle</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nouvelle Note</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4">Jean Dubois</td>
                                        <td class="px-6 py-4">85</td>
                                        <td class="px-6 py-4">
                                            <input type="number" class="border rounded px-2 py-1 w-20" min="0" max="100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4">Marie Lambert</td>
                                        <td class="px-6 py-4">92</td>
                                        <td class="px-6 py-4">
                                            <input type="number" class="border rounded px-2 py-1 w-20" min="0" max="100">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            <button class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800">
                                Enregistrer Toutes les Notes
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Section -->
            <div id="stats-tab" class="tab-content hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Total Courses by Category -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Total des Cours par Catégorie</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span>Développement</span>
                                <span class="font-bold">45</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Design</span>
                                <span class="font-bold">32</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Business</span>
                                <span class="font-bold">28</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Marketing</span>
                                <span class="font-bold">21</span>
                            </div>
                        </div>
                    </div>

                    <!-- Top 3 Teachers -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Top 3 Enseignants</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span>Marie Dupont</span>
                                <span class="font-bold">156 étudiants</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sophie Laurent</span>
                                <span class="font-bold">124 étudiants</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Pierre Martin</span>
                                <span class="font-bold">89 étudiants</span>
                            </div>
                        </div>
                    </div>

                    <!-- Most Popular Course -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Cours le Plus Populaire</h3>
                        <div class="space-y-2">
                            <p class="font-bold">Développement Web Full-Stack</p>
                            <p class="text-gray-600">Par Marie Dupont</p>
                            <p class="text-green-600">89 étudiants inscrits</p>
                            <div class="mt-4">
                                <div class="h-2 bg-gray-200 rounded">
                                    <div class="h-2 bg-green-600 rounded" style="width: 89%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('hidden');
            });
            
            // Show selected tab content
            document.getElementById(tabName + '-tab').classList.remove('hidden');
            
            // Update tab styles
            document.querySelectorAll('[role="tab"]').forEach(tab => {
                tab.classList.remove('text-black', 'border-b-2', 'border-black');
                tab.classList.add('text-gray-500');
            });
            
            // Style active tab
            event.target.classList.remove('text-gray-500');
            event.target.classList.add('text-black', 'border-b-2', 'border-black');
        }
    </script>
</body>
</html>