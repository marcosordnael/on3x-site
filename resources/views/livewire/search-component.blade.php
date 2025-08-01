<div class="relative">
    <!-- Search Input -->
    <div class="relative">
        <flux:input 
            kbd="⌘K" 
            icon="magnifying-glass" 
            placeholder="Buscar..."
            class="min-w-[200px]"
            id="search-input"
        />
    </div>

    <!-- Search Results Dropdown -->
    <div id="search-results" class="absolute top-full left-0 right-0 mt-1 bg-white dark:bg-gray-900 rounded-lg shadow-2xl border border-gray-200 dark:border-gray-700 overflow-hidden z-50 max-h-96 overflow-y-auto hidden">
        <!-- Results will be populated by JavaScript -->
    </div>

    <!-- Search Functionality Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search-input');
            const searchResults = document.getElementById('search-results');
            
            // Search data with FluxUI icons
            const searchData = [
                {
                    id: 'hero',
                    title: 'Início',
                    description: 'Página principal e hero section',
                    keywords: ['inicio', 'home', 'principal', 'hero', 'bitcoin', 'crypto', 'cryptocurrency'],
                    target: '#hero',
                    type: 'section',
                    icon: 'home',
                    color: 'text-blue-500'
                },
                {
                    id: 'about',
                    title: 'Sobre',
                    description: 'Informações sobre nossa empresa',
                    keywords: ['sobre', 'about', 'empresa', 'quem somos', 'historia'],
                    target: '#about',
                    type: 'section',
                    icon: 'information-circle',
                    color: 'text-green-500'
                },
                {
                    id: 'process',
                    title: 'Processo',
                    description: 'Como funciona nosso processo',
                    keywords: ['processo', 'process', 'como funciona', 'etapas'],
                    target: '#process',
                    type: 'section',
                    icon: 'clipboard-document-check',
                    color: 'text-purple-500'
                },
                {
                    id: 'services',
                    title: 'Serviços',
                    description: 'Nossos serviços e soluções',
                    keywords: ['servicos', 'services', 'solucoes', 'ofertas'],
                    target: '#services',
                    type: 'section',
                    icon: 'briefcase',
                    color: 'text-indigo-500'
                },
                {
                    id: 'team',
                    title: 'Equipe',
                    description: 'Nossa equipe de especialistas',
                    keywords: ['equipe', 'team', 'pessoas', 'especialistas'],
                    target: '#team',
                    type: 'section',
                    icon: 'users',
                    color: 'text-orange-500'
                },
                {
                    id: 'timeline',
                    title: 'Timeline',
                    description: 'Cronograma e marcos importantes',
                    keywords: ['timeline', 'cronograma', 'marcos', 'roadmap'],
                    target: '#timeline',
                    type: 'section',
                    icon: 'clock',
                    color: 'text-red-500'
                },
                {
                    id: 'market',
                    title: 'Mercado',
                    description: 'Análise de mercado e dados',
                    keywords: ['mercado', 'market', 'dados', 'analise'],
                    target: '#market',
                    type: 'section',
                    icon: 'chart-bar',
                    color: 'text-yellow-500'
                },
                {
                    id: 'blog',
                    title: 'Blog',
                    description: 'Últimas notícias e artigos',
                    keywords: ['blog', 'noticias', 'artigos', 'posts'],
                    target: '#blog',
                    type: 'section',
                    icon: 'newspaper',
                    color: 'text-pink-500'
                },
                {
                    id: 'clients',
                    title: 'Clientes',
                    description: 'Nossos clientes e parceiros',
                    keywords: ['clientes', 'clients', 'parceiros', 'empresas'],
                    target: '#clients',
                    type: 'section',
                    icon: 'building-office',
                    color: 'text-teal-500'
                }
            ];

            let searchTimeout;

            // Function to render FluxUI icons
            function renderFluxIcon(iconName, colorClass = 'text-gray-500') {
                // Using pre-defined SVG icons from FluxUI/Heroicons
                const iconMap = {
                    'home': `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>`,
                    'information-circle': `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"/></svg>`,
                    'clipboard-document-check': `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75"/></svg>`,
                    'briefcase': `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z"/></svg>`,
                    'users': `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/></svg>`,
                    'clock': `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>`,
                    'chart-bar': `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/></svg>`,
                    'newspaper': `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z"/></svg>`,
                    'building-office': `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 21h16.5M4.5 3h15l-.75 18h-13.5L4.5 3ZM9 8.25h1.5M9 11.25h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/></svg>`
                };
                
                return iconMap[iconName] || `<svg class="w-4 h-4 ${colorClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.691 1.576 3.107 3.546 3.107 1.97 0 3.546-1.416 3.546-3.107s-1.576-3.108-3.546-3.108-3.546 1.417-3.546 3.108Z"/></svg>`;
            }

            function performSearch(query) {
                if (!query.trim()) {
                    searchResults.classList.add('hidden');
                    return;
                }

                const results = searchData.filter(item => {
                    const searchTerm = query.toLowerCase();
                    return item.title.toLowerCase().includes(searchTerm) ||
                           item.description.toLowerCase().includes(searchTerm) ||
                           item.keywords.some(keyword => keyword.toLowerCase().includes(searchTerm));
                });

                displayResults(results);
            }

            function displayResults(results) {
                if (results.length === 0) {
                    searchResults.innerHTML = `
                        <div class="p-4 text-center">
                            <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Nenhum resultado encontrado</p>
                        </div>
                    `;
                } else {
                    searchResults.innerHTML = results.map(result => `
                        <button 
                            onclick="selectResult('${result.target}', '${result.type}')"
                            class="w-full text-left p-3 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors duration-200 flex items-center gap-3 group border-b border-gray-100 dark:border-gray-700 last:border-b-0"
                        >
                            <div class="flex-shrink-0">
                                ${renderFluxIcon(result.icon, result.color)}
                            </div>
                            <div class="flex-grow min-w-0">
                                <div class="font-medium text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors text-sm">
                                    ${result.title}
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400 truncate">
                                    ${result.description}
                                </div>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center px-1.5 py-0.5 rounded-full text-xs font-medium ${result.type === 'section' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300' : 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300'}">
                                    ${result.type === 'section' ? 'Seção' : 'Página'}
                                </span>
                            </div>
                        </button>
                    `).join('');
                }
                
                searchResults.classList.remove('hidden');
            }

            // Event listeners
            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(() => {
                        performSearch(e.target.value);
                    }, 300);
                });

                searchInput.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        const firstResult = searchResults.querySelector('button');
                        if (firstResult) {
                            firstResult.click();
                        }
                    }
                    
                    if (e.key === 'Escape') {
                        searchInput.value = '';
                        searchResults.classList.add('hidden');
                    }
                });
            }

            // Global function for result selection
            window.selectResult = function(target, type) {
                if (type === 'section') {
                    // Try different selectors to find the section
                    let element = document.querySelector(target);
                    
                    // If not found by ID, try by section with id attribute
                    if (!element && target.startsWith('#')) {
                        const id = target.substring(1);
                        element = document.querySelector(`section[id="${id}"]`) || 
                                 document.querySelector(`div[id="${id}"]`) ||
                                 document.querySelector(`[id="${id}"]`);
                    }
                    
                    if (element) {
                        // Get the actual element position
                        const elementRect = element.getBoundingClientRect();
                        const bodyRect = document.body.getBoundingClientRect();
                        const elementTop = elementRect.top - bodyRect.top;
                        
                        // Calculate offset considering the fixed header
                        const headerHeight = 120; // Increased header height for better positioning
                        const offsetTop = elementTop - headerHeight;
                        
                        // Smooth scroll to the element
                        window.scrollTo({
                            top: Math.max(0, offsetTop),
                            behavior: 'smooth'
                        });
                        
                        console.log(`✅ Scrolling to ${target}:`, {
                            element: element,
                            elementTop: elementTop,
                            offsetTop: offsetTop,
                            finalScrollPosition: Math.max(0, offsetTop)
                        });
                    } else {
                        console.log(`❌ Element not found for target: ${target}`);
                        
                        // Debug: Show all elements with IDs
                        const allIDs = Array.from(document.querySelectorAll('[id]')).map(el => el.id);
                        console.log('Available IDs on page:', allIDs);
                        
                        // Fallback: try to scroll to top if hero section
                        if (target === '#hero') {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            console.log('🏠 Fallback: Scrolled to top for hero section');
                        }
                    }
                } else {
                    // For pages, navigate to the URL
                    window.location.href = target;
                }
                
                // Clear search and hide results
                if (searchInput) {
                    searchInput.value = '';
                }
                searchResults.classList.add('hidden');
            };

            // Click outside to close
            document.addEventListener('click', function(e) {
                if (!e.target.closest('#search-input') && !e.target.closest('#search-results')) {
                    searchResults.classList.add('hidden');
                }
            });

            // Keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                    e.preventDefault();
                    if (searchInput) {
                        searchInput.focus();
                    }
                }
            });
        });
    </script>
</div>
