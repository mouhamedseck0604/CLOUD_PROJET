<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Candidat | TalentFinder</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .notification-badge {
            transform: translate(50%, -50%);
        }
        .sidebar-item:hover i {
            color: #3b82f6 !important;
        }
        .progress-ring__circle {
            transition: stroke-dashoffset 0.5s ease;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
        .mobile-menu {
            transition: all 0.3s ease;
        }
        .mobile-menu.closed {
            transform: translateX(-100%);
            opacity: 0;
        }
        .mobile-menu.open {
            transform: translateX(0);
            opacity: 1;
        }
        @media (max-width: 767px) {
            .stats-grid {
                grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white border-r border-gray-200">
                <div class="flex items-center justify-center h-16 px-4 bg-gradient-to-r from-blue-600 to-blue-500">
                    <span class="text-white text-xl font-bold">TALENTFINDER</span>
                </div>
                <div class="flex flex-col flex-grow px-4 py-8 overflow-y-auto">
                    <!-- Quick profile -->
                    <div class="flex items-center mb-8">
                        <div class="relative">
                            <img class="h-12 w-12 rounded-full object-cover shadow-md" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Photo de profil">
                            <span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full bg-green-500 ring-2 ring-white"></span>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Sophie Martin</p>
                            <p class="text-xs text-gray-500">Développeuse Fullstack</p>
                        </div>
                    </div>
                    
                    <!-- Navigation menu -->
                    <nav class="flex-1 space-y-2">
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg transition-all duration-200">
                            <i class="fas fa-home mr-3 text-blue-600"></i>
                            Tableau de bord
                        </a>
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-all duration-200">
                            <i class="fas fa-briefcase mr-3 text-gray-400"></i>
                            Mes candidatures
                        </a>
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-all duration-200">
                            <i class="fas fa-heart mr-3 text-gray-400"></i>
                            Offres sauvegardées
                        </a>
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-all duration-200">
                            <i class="fas fa-bell mr-3 text-gray-400"></i>
                            Alertes emploi
                        </a>
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-all duration-200">
                            <i class="fas fa-user mr-3 text-gray-400"></i>
                            Mon profil
                        </a>
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-all duration-200">
                            <i class="fas fa-cog mr-3 text-gray-400"></i>
                            Paramètres
                        </a>
                    </nav>
                    
                    <!-- Logout section -->
                    <div class="mt-auto pt-4">
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all duration-200">
                            <i class="fas fa-sign-out-alt mr-3 text-gray-400"></i>
                            Déconnexion
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile sidebar overlay -->
        <div id="mobileOverlay" class="fixed inset-0 z-10 bg-black bg-opacity-50 hidden"></div>

        <!-- Mobile sidebar -->
        <div id="mobileMenu" class="mobile-menu closed fixed inset-y-0 left-0 z-20 w-64 bg-white border-r border-gray-200 md:hidden">
            <div class="flex items-center justify-center h-16 px-4 bg-gradient-to-r from-blue-600 to-blue-500">
                <span class="text-white text-xl font-bold">TALENTFINDER</span>
            </div>
            <div class="flex flex-col flex-grow px-4 py-8 overflow-y-auto">
                <!-- Mobile quick profile -->
                <div class="flex items-center mb-8">
                    <div class="relative">
                        <img class="h-12 w-12 rounded-full object-cover shadow-md" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Photo de profil">
                        <span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full bg-green-500 ring-2 ring-white"></span>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Sophie Martin</p>
                        <p class="text-xs text-gray-500">Développeuse Fullstack</p>
                    </div>
                </div>
                
                <!-- Mobile navigation menu -->
                <nav class="flex-1 space-y-2">
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg">
                        <i class="fas fa-home mr-3 text-blue-600"></i>
                        Tableau de bord
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-briefcase mr-3 text-gray-400"></i>
                        Mes candidatures
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-heart mr-3 text-gray-400"></i>
                        Offres sauvegardées
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-bell mr-3 text-gray-400"></i>
                        Alertes emploi
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-user mr-3 text-gray-400"></i>
                        Mon profil
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-cog mr-3 text-gray-400"></i>
                        Paramètres
                    </a>
                </nav>
                
                <!-- Mobile logout section -->
                <div class="mt-auto pt-4">
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-red-500 hover:bg-red-50 rounded-lg">
                        <i class="fas fa-sign-out-alt mr-3 text-gray-400"></i>
                        Déconnexion
                    </a>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Header -->
            <header class="flex items-center justify-between h-16 px-4 sm:px-6 bg-white border-b border-gray-200">
                <!-- Mobile menu button -->
                <button id="mobileMenuButton" class="md:hidden text-gray-500 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                
                <!-- Search -->
                <div class="flex-1 max-w-md mx-2 sm:mx-4">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Rechercher des offres...">
                    </div>
                </div>
                
                <!-- Notifications and profile -->
                <div class="flex items-center space-x-3 sm:space-x-4">
                    <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none relative">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="notification-badge absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>
                    <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                        <i class="fas fa-envelope text-xl"></i>
                    </button>
                    <div class="relative ml-2">
                        <button class="flex items-center space-x-2 focus:outline-none" id="profileDropdownButton">
                            <span class="text-sm font-medium text-gray-700 hidden sm:inline-block">Sophie M.</span>
                            <div class="relative">
                                <img class="h-8 w-8 rounded-full object-cover shadow-sm" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Photo de profil">
                            </div>
                        </button>
                        <!-- Profile dropdown -->
                        <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mon profil</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Paramètres</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Aide</a>
                            <div class="border-t border-gray-200"></div>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Déconnexion</a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto p-4 sm:p-6 bg-gray-50">
                <div class="max-w-7xl mx-auto">
                    <!-- Header section -->
                    <div class="flex items-center justify-between mb-6 sm:mb-8">
                        <div>
                            <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Alertes emploi</h1>
                            <p class="text-gray-600 mt-1">Gérez vos alertes pour ne manquer aucune opportunité</p>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                            <i class="fas fa-plus mr-2"></i>Nouvelle alerte
                        </button>
                    </div>

                    <!-- Alert cards -->
                    <div class="grid grid-cols-1 gap-6 mb-8">
                        <!-- Active alert -->
                        <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition-all duration-200 border-l-4 border-blue-500">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-semibold text-lg text-gray-900">Développeur Fullstack</h3>
                                    <div class="flex items-center mt-2">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800 mr-3">
                                            <i class="fas fa-circle text-xs mr-1"></i> Active
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            <i class="far fa-bell mr-1"></i> Quotidienne
                                        </span>
                                    </div>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span class="px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">JavaScript</span>
                                        <span class="px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">React</span>
                                        <span class="px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">Node.js</span>
                                        <span class="px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">Télétravail</span>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="p-2 text-gray-400 hover:text-blue-500 rounded-full hover:bg-blue-50">
                                        <i class="fas fa-pencil-alt text-sm"></i>
                                    </button>
                                    <button class="p-2 text-gray-400 hover:text-red-500 rounded-full hover:bg-red-50">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Inactive alert -->
                        <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition-all duration-200 border-l-4 border-gray-300">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-semibold text-lg text-gray-900">Data Scientist</h3>
                                    <div class="flex items-center mt-2">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800 mr-3">
                                            <i class="fas fa-circle text-xs mr-1"></i> Inactive
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            <i class="far fa-bell mr-1"></i> Hebdomadaire
                                        </span>
                                    </div>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span class="px-2 py-1 rounded text-xs font-medium bg-purple-100 text-purple-800">Python</span>
                                        <span class="px-2 py-1 rounded text-xs font-medium bg-purple-100 text-purple-800">Machine Learning</span>
                                        <span class="px-2 py-1 rounded text-xs font-medium bg-purple-100 text-purple-800">TensorFlow</span>
                                        <span class="px-2 py-1 rounded text-xs font-medium bg-purple-100 text-purple-800">Paris</span>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="p-2 text-gray-400 hover:text-blue-500 rounded-full hover:bg-blue-50">
                                        <i class="fas fa-pencil-alt text-sm"></i>
                                    </button>
                                    <button class="p-2 text-gray-400 hover:text-red-500 rounded-full hover:bg-red-50">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- New alert form (hidden by default) -->
                        <div id="newAlertForm" class="hidden bg-white p-5 rounded-xl shadow-md border border-blue-200">
                            <h3 class="font-semibold text-lg text-gray-900 mb-4">Créer une nouvelle alerte</h3>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Intitulé du poste</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="ex: Développeur Frontend">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Compétences clés</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Saisissez des mots-clés séparés par des virgules">
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Localisation</label>
                                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <option>Toutes les localisations</option>
                                            <option>Paris</option>
                                            <option>Lyon</option>
                                            <option>Télétravail</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Fréquence d'alerte</label>
                                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <option>Quotidienne</option>
                                            <option>Hebdomadaire</option>
                                            <option>Immédiate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex justify-end space-x-3 pt-2">
                                    <button class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">
                                        Annuler
                                    </button>
                                    <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matched jobs section -->
                    <div class="bg-white p-5 rounded-xl shadow-sm">
                        <div class="flex items-center justify-between mb-5">
                            <h2 class="text-lg font-semibold text-gray-900">Offres correspondantes</h2>
                            <button class="text-sm text-gray-500 hover:text-gray-700">
                                <i class="fas fa-sync-alt mr-1"></i>Actualiser
                            </button>
                        </div>
                        <div class="space-y-4">
                            <!-- Job 1 -->
                            <div class="p-3 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors duration-200">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="font-medium text-gray-900">Développeur Fullstack JavaScript</h3>
                                        <p class="text-sm text-gray-600 mt-1">TechInnov - Paris (Télétravail partiel)</p>
                                        <div class="mt-2">
                                            <span class="inline-block px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded mr-2">CDI</span>
                                            <span class="inline-block px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded">55k-70k €</span>
                                        </div>
                                    </div>
                                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        Voir l'offre <i class="fas fa-chevron-right ml-1"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Job 2 -->
                            <div class="p-3 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors duration-200">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="font-medium text-gray-900">Ingénieur Node.js Senior</h3>
                                        <p class="text-sm text-gray-600 mt-1">DigitalSolutions - 100% Remote</p>
                                        <div class="mt-2">
                                            <span class="inline-block px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded mr-2">CDI</span>
                                            <span class="inline-block px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded">60k-80k €</span>
                                        </div>
                                    </div>
                                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        Voir l'offre <i class="fas fa-chevron-right ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                <i class="fas fa-plus-circle mr-1"></i>Afficher plus d'offres
                            </button>
                        </div>
                    </div>
                </div>
            </main>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6 sm:mb-8 stats-grid">
                        <!-- Applications card -->
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Candidatures</p>
                                    <p class="text-2xl font-semibold text-gray-900 mt-1">24</p>
                                </div>
                                <div class="h-12 w-12 rounded-full bg-blue-50 flex items-center justify-center">
                                    <i class="fas fa-paper-plane text-blue-600 text-lg"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-green-600 font-medium">+3 cette semaine</span>
                                </div>
                            </div>
                        </div>

                        <!-- Interviews card -->
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Entretiens</p>
                                    <p class="text-2xl font-semibold text-gray-900 mt-1">7</p>
                                </div>
                                <div class="h-12 w-12 rounded-full bg-purple-50 flex items-center justify-center">
                                    <i class="fas fa-handshake text-purple-600 text-lg"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-green-600 font-medium">+1 cette semaine</span>
                                </div>
                            </div>
                        </div>

                        <!-- Saved jobs card -->
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Offres sauvegardées</p>
                                    <p class="text-2xl font-semibold text-gray-900 mt-1">15</p>
                                </div>
                                <div class="h-12 w-12 rounded-full bg-red-50 flex items-center justify-center">
                                    <i class="fas fa-heart text-red-600 text-lg"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-green-600 font-medium">+2 cette semaine</span>
                                </div>
                            </div>
                        </div>

                        <!-- Profile completion card -->
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Profil complété</p>
                                    <p class="text-2xl font-semibold text-gray-900 mt-1">85%</p>
                                </div>
                                <div class="relative h-12 w-12">
                                    <svg class="progress-ring" width="48" height="48">
                                        <circle
                                            class="progress-ring__circle"
                                            stroke="#E5E7EB"
                                            stroke-width="4"
                                            fill="transparent"
                                            r="20"
                                            cx="24"
                                            cy="24"
                                        />
                                        <circle
                                            class="progress-ring__circle"
                                            stroke="#10B981"
                                            stroke-width="4"
                                            stroke-linecap="round"
                                            stroke-dasharray="125.6"
                                            stroke-dashoffset="18.84"
                                            fill="transparent"
                                            r="20"
                                            cx="24"
                                            cy="24"
                                        />
                                    </svg>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <i class="fas fa-user-check text-green-600 text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-yellow-600 font-medium">15% à compléter</span>
                                    <button class="text-blue-600 hover:text-blue-800 font-medium">Compléter</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main dashboard content -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8 mb-6 sm:mb-8">
                        <!-- Recent applications -->
                        <div class="lg:col-span-2 bg-white p-4 sm:p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-lg font-semibold text-gray-900">Candidatures récentes</h2>
                                <a href="#" class="text-sm text-blue-600 hover:underline">Voir toutes</a>
                            </div>
                            <div class="space-y-4">
                                <!-- Application 1 -->
                                <div class="flex items-start p-3 rounded-lg hover:bg-gray-50 transition-colors duration-150">
                                    <div class="h-10 w-10 rounded-md bg-blue-100 flex items-center justify-center mr-4 mt-1">
                                        <i class="fas fa-building text-blue-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="font-medium text-gray-900">Développeur Frontend Senior</h3>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">En cours</span>
                                        </div>
                                        <p class="text-sm text-gray-500">TechCorp - Paris, France</p>
                                        <div class="mt-2 flex items-center text-sm text-gray-500">
                                            <span class="mr-3">Envoyée le 12/06/2023</span>
                                            <div class="flex items-center">
                                                <i class="far fa-clock mr-1"></i>
                                                <span>5 jours</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Application 2 -->
                                <div class="flex items-start p-3 rounded-lg hover:bg-gray-50 transition-colors duration-150">
                                    <div class="h-10 w-10 rounded-md bg-purple-100 flex items-center justify-center mr-4 mt-1">
                                        <i class="fas fa-laptop-code text-purple-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="font-medium text-gray-900">Ingénieur Logiciel</h3>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-yellow-100 text-yellow-800">Entretien</span>
                                        </div>
                                        <p class="text-sm text-gray-500">SoftInno - Lyon, France</p>
                                        <div class="mt-2 flex items-center text-sm text-gray-500">
                                            <span class="mr-3">Envoyée le 05/06/2023</span>
                                            <div class="flex items-center">
                                                <i class="far fa-clock mr-1"></i>
                                                <span>12 jours</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Application 3 -->
                                <div class="flex items-start p-3 rounded-lg hover:bg-gray-50 transition-colors duration-150">
                                    <div class="h-10 w-10 rounded-md bg-indigo-100 flex items-center justify-center mr-4 mt-1">
                                        <i class="fas fa-server text-indigo-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="font-medium text-gray-900">Architecte Cloud</h3>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">Nouvelle</span>
                                        </div>
                                        <p class="text-sm text-gray-500">CloudMaster - Remote</p>
                                        <div class="mt-2 flex items-center text-sm text-gray-500">
                                            <span class="mr-3">Envoyée le 15/06/2023</span>
                                            <div class="flex items-center">
                                                <i class="far fa-clock mr-1"></i>
                                                <span>2 jours</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Next steps -->
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-lg font-semibold text-gray-900">Prochaines étapes</h2>
                            </div>
                            <div class="space-y-4">
                                <!-- Step 1 -->
                                <div class="flex items-start p-3 rounded-lg bg-blue-50 transition-colors duration-150">
                                    <div class="h-8 w-8 rounded-md bg-blue-100 flex items-center justify-center mr-3 mt-1">
                                        <i class="fas fa-calendar-check text-blue-600 text-sm"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-medium text-gray-900">Entretien avec TechCorp</h3>
                                        <p class="text-sm text-gray-600">18/06/2023 à 14:30</p>
                                        <div class="mt-2 flex space-x-2">
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">Zoom</span>
                                            <button class="text-xs text-blue-600 hover:underline">Voir détails</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Step 2 -->
                                <div class="flex items-start p-3 rounded-lg bg-gray-50 transition-colors duration-150">
                                    <div class="h-8 w-8 rounded-md bg-purple-100 flex items-center justify-center mr-3 mt-1">
                                        <i class="fas fa-envelope text-purple-600 text-sm"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-medium text-gray-900">Relance SoftInno</h3>
                                        <p class="text-sm text-gray-600">À faire avant le 20/06/2023</p>
                                        <div class="mt-2">
                                            <button class="text-xs text-blue-600 hover:underline">Créer un rappel</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Step 3 -->
                                <div class="flex items-start p-3 rounded-lg bg-gray-50 transition-colors duration-150">
                                    <div class="h-8 w-8 rounded-md bg-green-100 flex items-center justify-center mr-3 mt-1">
                                        <i class="fas fa-user-plus text-green-600 text-sm"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-medium text-gray-900">Compléter votre profil</h3>
                                        <p class="text-sm text-gray-600">15% non complété</p>
                                        <div class="mt-2">
                                            <button class="text-xs text-blue-600 hover:underline">Remplir maintenant</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Step 4 -->
                                <div class="flex items-start p-3 rounded-lg bg-gray-50 transition-colors duration-150">
                                    <div class="h-8 w-8 rounded-md bg-yellow-100 flex items-center justify-center mr-3 mt-1">
                                        <i class="fas fa-bell text-yellow-600 text-sm"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-medium text-gray-900">Nouvelle alerte emploi</h3>
                                        <p class="text-sm text-gray-600">10 emplois correspondants</p>
                                        <div class="mt-2">
                                            <button class="text-xs text-blue-600 hover:underline">Voir les offres</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recommended jobs section -->
                    <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-semibold text-gray-900">Offres recommandées</h2>
                            <a href="#" class="text-sm text-blue-600 hover:underline">Voir plus</a>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                            <!-- Job 1 -->
                            <div class="border border-gray-200 rounded-lg p-4 sm:p-5 hover:border-blue-300 transition-colors duration-200 group">
                                <div class="flex items-start">
                                    <div class="h-12 w-12 rounded-lg bg-blue-100 flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-laptop-code text-blue-600 text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-200">Développeur React</h3>
                                            <button class="text-gray-400 hover:text-red-500 transition-colors duration-200">
                                                <i class="far fa-heart"></i>
                                            </button>
                                        </div>
                                        <p class="text-sm text-gray-600 mt-1">TechStack Inc. - Remote</p>
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            <span class="px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">React</span>
                                            <span class="px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">TypeScript</span>
                                            <span class="px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">Frontend</span>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between">
                                            <span class="text-sm text-gray-500">Publiée il y a 2 jours</span>
                                            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium">Postuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Job 2 -->
                            <div class="border border-gray-200 rounded-lg p-4 sm:p-5 hover:border-blue-300 transition-colors duration-200 group">
                                <div class="flex items-start">
                                    <div class="h-12 w-12 rounded-lg bg-indigo-100 flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-server text-indigo-600 text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-200">Ingénieur DevOps</h3>
                                            <button class="text-red-500">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                        <p class="text-sm text-gray-600 mt-1">CloudSystems - Paris, France</p>
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            <span class="px-2 py-1 rounded text-xs font-medium bg-indigo-100 text-indigo-800">AWS</span>
                                            <span class="px-2 py-1 rounded text-xs font-medium bg-indigo-100 text-indigo-800">Docker</span>
                                            <span class="px-2 py-1 rounded text-xs font-medium bg-indigo-100 text-indigo-800">Kubernetes</span>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between">
                                            <span class="text-sm text-gray-500">Publiée il y a 4 jours</span>
                                            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium">Postuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Toggle new alert form
        const newAlertButton = document.querySelector('button.bg-blue-600');
        const newAlertForm = document.getElementById('newAlertForm');
        
        newAlertButton.addEventListener('click', () => {
            newAlertForm.classList.toggle('hidden');
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileOverlay = document.getElementById('mobileOverlay');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('closed');
            mobileMenu.classList.toggle('open');
            mobileOverlay.classList.toggle('hidden');
        });
        
        mobileOverlay.addEventListener('click', () => {
            mobileMenu.classList.add('closed');
            mobileMenu.classList.remove('open');
            mobileOverlay.classList.add('hidden');
        });
        
        // Profile dropdown toggle
        const profileDropdownButton = document.getElementById('profileDropdownButton');
        const profileDropdown = document.getElementById('profileDropdown');
        
        profileDropdownButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('hidden');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!profileDropdownButton.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
        
        // Update progress ring animation (just for demo)
        const progressRing = document.querySelector('.progress-ring__circle');
        const radius = progressRing.r.baseVal.value;
        const circumference = radius * 2 * Math.PI;
        
        progressRing.style.strokeDasharray = circumference;
        progressRing.style.strokeDashoffset = circumference - (0.85 * circumference);
    </script>
</body>
</html>