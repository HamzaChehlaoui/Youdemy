<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Gestion des cours</title>
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
            <!-- Statistics Overview -->
            <div class="px-4 py-6 sm:px-0">
                <h1 class="text-3xl font-bold text-gray-900">Tableau de bord</h1>
                <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Total Students -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <!-- Icon placeholder -->
                                    <div class="h-12 w-12 bg-black rounded-full flex items-center justify-center">
                                        <span class="text-white">👥</span>
                                    </div>
                                </div>
                                <div class="ml-5">
                                    <div class="text-sm font-medium text-gray-500">
                                        Total Étudiants
                                    </div>
                                    <div class="text-2xl font-semibold text-gray-900">
                                        1,234
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Courses -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <div class="h-12 w-12 bg-black rounded-full flex items-center justify-center">
                                        <span class="text-white">📚</span>
                                    </div>
                                </div>
                                <div class="ml-5">
                                    <div class="text-sm font-medium text-gray-500">
                                        Cours Actifs
                                    </div>
                                    <div class="text-2xl font-semibold text-gray-900">
                                        12
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>

            <!-- Course Management -->
            <div class="mt-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h2 class="text-xl font-semibold text-gray-900">Gestion des cours</h2>
                    </div>
                    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                        <a href="add_cours_teacher.php" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-black hover:bg-gray-800">
                            Ajouter un cours
                        </a>
                    </div>
                </div>
                
                <!-- Course Table -->
                <div class="mt-8 flex flex-col">
                    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                               
                            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Nom du Cours</th>
                                            <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Date de Création</th>
                                            <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Nombre d'Étudiants</th>
                                            <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <!-- Sample Course Row 1 -->
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Développement Web</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12 janvier 2025</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">150</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                                                <span class="mx-2">|</span>
                                                <a href="#" class="text-red-600 hover:text-red-900">Supprimer</a>
                                            </td>
                                        </tr>
                                        <!-- Sample Course Row 2 -->
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Marketing Digital</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5 décembre 2024</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">75</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                                                <span class="mx-2">|</span>
                                                <a href="#" class="text-red-600 hover:text-red-900">Supprimer</a>
                                            </td>
                                        </tr>
                                        <!-- Add more courses as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-white text-center py-4 mt-12">
        <p>&copy; 2025 Youdemy. Tous droits réservés.</p>
    </footer>

</body>
</html>
