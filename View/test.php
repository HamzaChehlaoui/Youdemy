<?php

require_once('../Controller/Detail_cours.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - <?= htmlspecialchars($courseDetails['title']) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">
    <!-- Navigation remains the same -->
    <nav class="fixed top-0 w-full bg-black shadow-sm z-50">
        <!-- ... navigation code ... -->
    </nav>

    <!-- Course Header -->
    <div class="bg-gradient-to-r from-white to-gray-200 pt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <span class="bg-black text-white text-sm px-3 py-1 rounded">
                        <?= htmlspecialchars($courseDetails['category_name']) ?>
                    </span>
                    <h1 class="text-4xl font-bold text-black mt-4 mb-4">
                        <?= htmlspecialchars($courseDetails['title']) ?>
                    </h1>
                    <p class="text-xl text-gray-700 mb-6">
                        <?= htmlspecialchars($courseDetails['description']) ?>
                    </p>
                    
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/40/40" alt="Instructor" class="w-10 h-10 rounded-full">
                        <span class="ml-2 text-gray-700">Par <?= htmlspecialchars($courseDetails['teacher_name']) ?></span>
                    </div>
                    
                    <?php if (!empty($courseDetails['tags'])): ?>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <?php foreach ($courseDetails['tags'] as $tag): ?>
                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-sm">
                                <?= htmlspecialchars($tag['name']) ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg w-[450px]">
                    
                        <div class="w-[400px] aspect-h-9 mb-6">
                            <img class="w-full rounded-lg" src="../img/Black Grey Minimalist Book Club Logo.png">
                    </img>
                        </div>
                    
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
                            <span><?= $courseDetails['content_type'] === 'video' ? 'Vidéos à votre rythme' : 'Documents téléchargeables' ?></span>
                        </div>
                        <div class="flex items-center">
                           
                          
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
                <!-- Course Description -->
                <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                    <h2 class="text-2xl font-bold mb-4">Description du cours</h2>
                    <div class="prose max-w-none">
                        <p class="mb-4">
                            <?= nl2br(htmlspecialchars($courseDetails['description'])) ?>
                        </p>
                    </div>
                </div>

                <!-- Course Content -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Contenu du cours</h2>
                    <div class="space-y-4">
                        <div class="border rounded-lg">
                            <div class="p-4 bg-gray-50 flex justify-between items-center">
                                <h3 class="font-semibold">Type de contenu: <?= ucfirst($courseDetails['title']) ?></h3>
                            </div>
                            <div class="p-4 space-y-2">
                                <div class="flex items-center">
                                    <span class="mr-2"><?= $courseDetails['content_type'] === 'video' ? '📹' : '📄' ?></span>
                                    <span><?= htmlspecialchars($courseDetails['description']) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Instructor -->
            <div>
                <!-- Instructor -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-4">À propos de l'instructeur</h2>
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/80/80" alt="Instructor" class="w-20 h-20 rounded-full">
                        <div class="ml-4">
                            <h3 class="font-semibold"><?= htmlspecialchars($courseDetails['teacher_name']) ?></h3>
                            <p class="text-gray-600"><?= htmlspecialchars($courseDetails['teacher_biography'] ?? '') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>