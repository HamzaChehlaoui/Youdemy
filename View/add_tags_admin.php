<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Gestion des Tags</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="fixed top-0 w-full bg-black shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-white">Youdemy Admin</a>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-white">Gestion des Tags</span>
                </div>
            </div>
        </div>
    </nav>

    <div class="pt-20 pb-8 max-w-7xl mx-auto px-4">
        <!-- Bulk Tag Input Section -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-xl font-bold mb-4">Insertion en Masse des Tags</h2>
            
            <!-- Quick Templates -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Templates Rapides</label>
                <div class="flex flex-wrap gap-2">
                    <button onclick="insertTemplate('dev')" class="px-3 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                        Template Développement
                    </button>
                    <button onclick="insertTemplate('design')" class="px-3 py-1 bg-purple-100 text-purple-700 rounded hover:bg-purple-200">
                        Template Design
                    </button>
                    <button onclick="insertTemplate('business')" class="px-3 py-1 bg-green-100 text-green-700 rounded hover:bg-green-200">
                        Template Business
                    </button>
                </div>
            </div>

            <!-- Bulk Input -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Entrez les tags (un par ligne ou séparés par des virgules)
                </label>
                <textarea
                    id="bulkInput"
                    class="w-full h-32 p-2 border rounded focus:ring-2 focus:ring-black focus:outline-none"
                    placeholder="javascript, react, node.js&#10;python, django, flask&#10;design, figma, sketch"></textarea>
            </div>

            <div class="flex justify-between items-center mb-6">
                <div class="space-x-4">
                    <button onclick="processBulkInput()" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                        Traiter les Tags
                    </button>
                    <button onclick="clearAll()" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                        Effacer Tout
                    </button>
                </div>
                <span id="tagCount" class="text-sm text-gray-600">0 tags</span>
            </div>
        </div>

        <!-- Preview and Edit Section -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Aperçu des Tags</h3>
                <div class="flex space-x-2">
                    <button onclick="saveAllTags()" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Enregistrer Tout
                    </button>
                    <button onclick="exportTags()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Exporter CSV
                    </button>
                </div>
            </div>

            <!-- Tag Preview Grid -->
            <div id="tagPreview" class="flex flex-wrap gap-2">
                <!-- Tags will be dynamically inserted here -->
            </div>

            <!-- Batch Actions -->
            <div class="mt-6 pt-6 border-t">
                <h4 class="text-md font-semibold mb-3">Actions par Lot</h4>
                <div class="flex space-x-4">
                    <select id="categorySelect" class="border rounded px-3 py-2">
                        <option value="">Sélectionner une catégorie...</option>
                        <option value="dev">Développement</option>
                        <option value="design">Design</option>
                        <option value="business">Business</option>
                    </select>
                    <button onclick="applyCategory()" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
                        Appliquer la Catégorie
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let tags = new Set();

        // Template data
        let templates = {
            dev: `javascript, typescript, react, angular, vue.js
node.js, express, mongodb, sql, aws
python, django, flask, fastapi
docker, kubernetes, ci/cd`,
            design: `ui design, ux design, wireframing
figma, sketch, adobe xd
typography, color theory
responsive design, mobile first`,
            business: `marketing, seo, analytics
business strategy, management
finance, accounting, excel
project management, agile`
        };

        // Insert template content
        function insertTemplate(type) {
            let textarea = document.getElementById('bulkInput');
            textarea.value = templates[type];
            processBulkInput();
        }

        // Process bulk input
        function processBulkInput() {
            let input = document.getElementById('bulkInput').value;
            
            // Split by both newlines and commas
            let newTags = input
                .split(/[\n,]/)
                .map(tag => tag.trim())
                .filter(tag => tag.length > 0);
            
            newTags.forEach(tag => tags.add(tag));
            updateTagPreview();
            updateTagCount();
        }

        // Update tag preview
        function updateTagPreview() {
            let preview = document.getElementById('tagPreview');
            preview.innerHTML = '';
            
            [...tags].sort().forEach(tag => {
                let tagElement = document.createElement('div');
                tagElement.className = 'group relative bg-gray-100 px-3 py-1 rounded-full flex items-center space-x-2';
                tagElement.innerHTML = `
                    <span>${tag}</span>
                    <button onclick="removeTag('${tag}')" class="opacity-0 group-hover:opacity-100 text-red-500 hover:text-red-700">
                        ×
                    </button>
                `;
                preview.appendChild(tagElement);
            });
        }

        // Remove individual tag
        function removeTag(tag) {
            tags.delete(tag);
            updateTagPreview();
            updateTagCount();
        }

        // Update tag count
        function updateTagCount() {
            document.getElementById('tagCount').textContent = `${tags.size} tags`;
        }

        // Clear all tags
        function clearAll() {
            if (confirm('Êtes-vous sûr de vouloir effacer tous les tags ?')) {
                tags.clear();
                document.getElementById('bulkInput').value = '';
                updateTagPreview();
                updateTagCount();
            }
        }

        // Save all tags
        function saveAllTags() {
            // Simulated save operation
            let saveStatus = document.createElement('div');
            saveStatus.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow';
            saveStatus.textContent = `${tags.size} tags enregistrés avec succès`;
            document.body.appendChild(saveStatus);
            
            setTimeout(() => saveStatus.remove(), 3000);
        }

        // Export tags to CSV
        function exportTags() {
            let csv = [...tags].join('\n');
            let blob = new Blob([csv], { type: 'text/csv' });
            let url = window.URL.createObjectURL(blob);
            let a = document.createElement('a');
            a.href = url;
            a.download = 'tags_export.csv';
            a.click();
        }

        // Apply category to selected tags
        function applyCategory() {
            let category = document.getElementById('categorySelect').value;
            if (!category) return;

            // Add category prefix to tags
            let newTags = new Set();
            tags.forEach(tag => {
                newTags.add(`${category}:${tag}`);
            });
            tags = newTags;
            
            updateTagPreview();
        }

        // Initialize with empty state
        updateTagCount();
    </script>
</body>
</html>