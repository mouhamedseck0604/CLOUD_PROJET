<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Candidatures</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1e40af',
                        success: '#10b981',
                        warning: '#f59e0b',
                        danger: '#ef4444',
                        info: '#3b82f6',
                        light: '#f8fafc',
                        dark: '#1e293b'
                    }
                }
            }
        }
    </script>
    <style>
        /* Animation pour les cartes de candidature */
        .application-card {
            transition: all 0.3s ease;
        }
        
        .application-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        /* Badge animé pour les nouveaux éléments */
        .status-badge {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.6; }
            100% { opacity: 1; }
        }
        
        /* Personnalisation du sélecteur */
        .custom-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%233b82f6'%3e%3cpath d='M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.5rem center;
            background-size: 1.5em;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- En-tête -->
        <header class="mb-8">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold text-dark">Mes Candidatures</h1>
                <button class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-lg flex items-center transition-colors">
                    <i class="fas fa-plus mr-2"></i> Nouvelle candidature
                </button>
            </div>
            <p class="text-gray-600 mt-2">Suivez l'évolution de toutes vos candidatures en un seul endroit</p>
        </header>

        <!-- Statistiques -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-xl shadow-md p-4 border-l-4 border-primary">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Total</p>
                        <p class="text-2xl font-bold">24</p>
                    </div>
                    <i class="fas fa-file-alt text-primary text-2xl"></i>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-4 border-l-4 border-info">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">En attente</p>
                        <p class="text-2xl font-bold">8</p>
                    </div>
                    <i class="fas fa-clock text-info text-2xl"></i>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-4 border-l-4 border-success">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Entretiens</p>
                        <p class="text-2xl font-bold">5</p>
                    </div>
                    <i class="fas fa-handshake text-success text-2xl"></i>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-4 border-l-4 border-danger">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Refusées</p>
                        <p class="text-2xl font-bold">3</p>
                    </div>
                    <i class="fas fa-times-circle text-danger text-2xl"></i>
                </div>
            </div>
        </section>

        <!-- Filtres et recherche -->
        <section class="mb-8 bg-white p-4 rounded-xl shadow-md">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="col-span-1 md:col-span-2">
                    <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Rechercher</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" id="search" placeholder="Entreprise, poste, référence..." 
                               class="pl-10 w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary">
                    </div>
                </div>
                <div>
                    <label for="status-filter" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                    <select id="status-filter" class="custom-select w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary">
                        <option value="all">Tous les statuts</option>
                        <option value="pending">En attente</option>
                        <option value="interview">Entretien</option>
                        <option value="accepted">Acceptée</option>
                        <option value="rejected">Refusée</option>
                    </select>
                </div>
                <div>
                    <label for="date-filter" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                    <select id="date-filter" class="custom-select w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary">
                        <option value="recent">Plus récentes</option>
                        <option value="oldest">Plus anciennes</option>
                        <option value="deadline">Échéance</option>
                    </select>
                </div>
            </div>
        </section>

        <!-- Liste des candidatures -->
        <section>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-dark">Historique des candidatures</h2>
                <button id="toggle-view" class="text-primary hover:text-secondary transition-colors">
                    <i class="fas fa-list-ul mr-2"></i> Mode tableau
                </button>
            </div>

            <!-- Cartes de candidatures (vue par défaut) -->
            <div id="cards-view" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Carte 1 -->
                <div class="application-card bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-primary">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-bold text-dark truncate">Développeur Full Stack</h3>
                            <span class="status-badge bg-primary/10 text-primary text-xs px-2 py-1 rounded-full">Nouveau</span>
                        </div>
                        <p class="text-gray-600 mb-2"><i class="fas fa-building mr-2 text-gray-400"></i>Tech Solutions Inc.</p>
                        <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>Paris, France</p>
                        
                        <div class="flex justify-between items-center mb-4">
                            <span class="bg-primary/10 text-primary text-xs px-2 py-1 rounded">En attente</span>
                            <span class="text-sm text-gray-500">Postulé le 12/06/2023</span>
                        </div>
                        
                        <div class="flex justify-between">
                            <button class="text-primary hover:text-secondary text-sm font-medium transition-colors">
                                <i class="fas fa-eye mr-1"></i> Voir
                            </button>
                            <button class="text-gray-500 hover:text-gray-700 text-sm transition-colors">
                                <i class="fas fa-trash-alt mr-1"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="application-card bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-success">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-bold text-dark truncate">Product Manager Senior</h3>
                            <span class="bg-success/10 text-success text-xs px-2 py-1 rounded">Acceptée</span>
                        </div>
                        <p class="text-gray-600 mb-2"><i class="fas fa-building mr-2 text-gray-400"></i>Innovatech Corp</p>
                        <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>Lyon, France</p>
                        
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <span class="bg-success/10 text-success text-xs px-2 py-1 rounded mr-2">Entretien</span>
                                <span class="text-xs text-gray-500">2 entretiens</span>
                            </div>
                            <span class="text-sm text-gray-500">Postulé le 05/06/2023</span>
                        </div>
                        
                        <div class="flex justify-between">
                            <button class="text-primary hover:text-secondary text-sm font-medium transition-colors">
                                <i class="fas fa-eye mr-1"></i> Voir
                            </button>
                            <button class="text-gray-500 hover:text-gray-700 text-sm transition-colors">
                                <i class="fas fa-trash-alt mr-1"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="application-card bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-danger">
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-bold text-dark truncate">UX/UI Designer</h3>
                            <span class="bg-danger/10 text-danger text-xs px-2 py-1 rounded">Refusée</span>
                        </div>
                        <p class="text-gray-600 mb-2"><i class="fas fa-building mr-2 text-gray-400"></i>Digital Creations</p>
                        <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>Toulouse, France</p>
                        
                        <div class="flex justify-between items-center mb-4">
                            <span class="bg-danger/10 text-danger text-xs px-2 py-1 rounded">Refusée</span>
                            <span class="text-sm text-gray-500">Postulé le 28/05/2023</span>
                        </div>
                        
                        <div class="flex justify-between">
                            <button class="text-primary hover:text-secondary text-sm font-medium transition-colors">
                                <i class="fas fa-eye mr-1"></i> Voir
                            </button>
                            <button class="text-gray-500 hover:text-gray-700 text-sm transition-colors">
                                <i class="fas fa-trash-alt mr-1"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tableau (caché par défaut) -->
            <div id="table-view" class="hidden bg-white rounded-xl shadow-md overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Poste</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Entreprise</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Localisation</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="font-medium text-gray-900">Développeur Full Stack</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">Tech Solutions Inc.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-500">Paris, France</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs rounded-full bg-primary/10 text-primary">En attente</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                12/06/2023
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-primary hover:text-secondary mr-3"><i class="fas fa-eye"></i></a>
                                <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="font-medium text-gray-900">Product Manager Senior</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">Innovatech Corp</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-500">Lyon, France</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs rounded-full bg-success/10 text-success">Acceptée</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                05/06/2023
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-primary hover:text-secondary mr-3"><i class="fas fa-eye"></i></a>
                                <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="font-medium text-gray-900">UX/UI Designer</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">Digital Creations</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-500">Toulouse, France</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs rounded-full bg-danger/10 text-danger">Refusée</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                28/05/2023
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-primary hover:text-secondary mr-3"><i class="fas fa-eye"></i></a>
                                <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-between items-center">
                <div class="text-sm text-gray-500">
                    Affichage <span class="font-medium">1</span> à <span class="font-medium">3</span> sur <span class="font-medium">24</span> résultat(s)
                </div>
                <div class="flex space-x-1">
                    <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-500 hover:bg-gray-50 disabled:opacity-50" disabled>
                        Précédent
                    </button>
                    <button class="px-3 py-1 rounded-md bg-primary text-white hover:bg-secondary">
                        1
                    </button>
                    <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50">
                        2
                    </button>
                    <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50">
                        3
                    </button>
                    <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-500 hover:bg-gray-50">
                        Suivant
                    </button>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Toggle entre vue cartes et vue tableau
        document.getElementById('toggle-view').addEventListener('click', function() {
            const cardsView = document.getElementById('cards-view');
            const tableView = document.getElementById('table-view');
            const toggleButton = document.getElementById('toggle-view');
            
            if (cardsView.classList.contains('hidden')) {
                cardsView.classList.remove('hidden');
                tableView.classList.add('hidden');
                toggleButton.innerHTML = '<i class="fas fa-list-ul mr-2"></i> Mode tableau';
            } else {
                cardsView.classList.add('hidden');
                tableView.classList.remove('hidden');
                toggleButton.innerHTML = '<i class="fas fa-th-large mr-2"></i> Mode cartes';
            }
        });

        // Filtrage des candidatures
        document.getElementById('status-filter').addEventListener('change', function() {
            const status = this.value;
            // Ici, vous pourriez implémenter la logique de filtrage
            console.log('Filtrage par statut:', status);
        });

        document.getElementById('date-filter').addEventListener('change', function() {
            const dateOrder = this.value;
            // Ici, vous pourriez implémenter la logique de tri par date
            console.log('Tri par date:', dateOrder);
        });

        // Recherche
        document.getElementById('search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            // Ici, vous pourriez implémenter la logique de recherche
            console.log('Recherche:', searchTerm);
        });

        // Simulation de chargement des données
        document.addEventListener('DOMContentLoaded', function() {
            // Vous pourriez faire une requête AJAX ici pour charger les données réelles
            console.log('Page chargée - chargement des données...');
        });
    </script>
</body>
</html>