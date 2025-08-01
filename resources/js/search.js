// Funcionalidade de busca do site
class SiteSearch {
    constructor() {
        this.searchData = {
            // Seções da página atual
            sections: [
                {
                    id: 'hero',
                    title: 'Início',
                    description: 'Página principal e hero section',
                    keywords: ['inicio', 'home', 'principal', 'hero', 'bitcoin', 'crypto', 'cryptocurrency'],
                    target: '#hero',
                    type: 'section'
                },
                {
                    id: 'about',
                    title: 'Sobre',
                    description: 'Informações sobre a empresa e nossos valores',
                    keywords: ['sobre', 'about', 'empresa', 'valores', 'missao', 'visao', 'quem somos'],
                    target: '#about',
                    type: 'section'
                },
                {
                    id: 'process',
                    title: 'Processo',
                    description: 'Como funciona nosso processo',
                    keywords: ['processo', 'process', 'como funciona', 'etapas', 'passos'],
                    target: '#process',
                    type: 'section'
                },
                {
                    id: 'services',
                    title: 'Serviços',
                    description: 'Nossos serviços e soluções',
                    keywords: ['servicos', 'services', 'solucoes', 'produtos', 'ofertas'],
                    target: '#services',
                    type: 'section'
                },
                {
                    id: 'team',
                    title: 'Equipe',
                    description: 'Conheça nossa equipe profissional',
                    keywords: ['equipe', 'team', 'time', 'profissionais', 'colaboradores'],
                    target: '#team',
                    type: 'section'
                },
                {
                    id: 'timeline',
                    title: 'Timeline',
                    description: 'Linha do tempo e marcos importantes',
                    keywords: ['timeline', 'historia', 'marcos', 'cronologia', 'evolucao'],
                    target: '#timeline',
                    type: 'section'
                },
                {
                    id: 'market',
                    title: 'Market',
                    description: 'Análise de mercado e tendências',
                    keywords: ['market', 'mercado', 'analise', 'tendencias', 'economia'],
                    target: '#market',
                    type: 'section'
                },
                {
                    id: 'blog',
                    title: 'Blog',
                    description: 'Artigos e notícias recentes',
                    keywords: ['blog', 'noticias', 'artigos', 'posts', 'conteudo'],
                    target: '#blog',
                    type: 'section'
                },
                {
                    id: 'clients',
                    title: 'Clientes',
                    description: 'Nossos clientes e parceiros',
                    keywords: ['clientes', 'clients', 'parceiros', 'testimonials', 'depoimentos'],
                    target: '#clients',
                    type: 'section'
                }
            ],
            // Páginas externas
            pages: [
                {
                    id: 'contact',
                    title: 'Contato',
                    description: 'Entre em contato conosco',
                    keywords: ['contato', 'contact', 'fale conosco', 'email', 'telefone'],
                    target: '/contact',
                    type: 'page'
                },
                {
                    id: 'about-page',
                    title: 'Página Sobre',
                    description: 'Página completa sobre a empresa',
                    keywords: ['sobre completa', 'about page', 'institucional'],
                    target: '/about',
                    type: 'page'
                }
            ]
        };

        this.init();
    }

    init() {
        // Adicionar event listeners para os botões de sugestão
        document.addEventListener('DOMContentLoaded', () => {
            this.attachSuggestionListeners();
        });
    }

    attachSuggestionListeners() {
        document.querySelectorAll('.search-suggestion').forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-target');
                const url = button.getAttribute('data-url');
                
                if (target) {
                    this.scrollToSection(target);
                } else if (url) {
                    this.navigateToPage(url);
                }
                
                closeSearchModal();
            });
        });
    }

    search(query) {
        if (!query || query.length < 2) {
            return [];
        }

        const normalizedQuery = this.normalizeString(query);
        const results = [];

        // Buscar em seções
        this.searchData.sections.forEach(section => {
            const score = this.calculateRelevanceScore(normalizedQuery, section);
            if (score > 0) {
                results.push({ ...section, score });
            }
        });

        // Buscar em páginas
        this.searchData.pages.forEach(page => {
            const score = this.calculateRelevanceScore(normalizedQuery, page);
            if (score > 0) {
                results.push({ ...page, score });
            }
        });

        // Ordenar por relevância
        return results.sort((a, b) => b.score - a.score);
    }

    calculateRelevanceScore(query, item) {
        let score = 0;
        const normalizedTitle = this.normalizeString(item.title);
        const normalizedDescription = this.normalizeString(item.description);

        // Pontuação por correspondência no título
        if (normalizedTitle.includes(query)) {
            score += 100;
        }

        // Pontuação por correspondência na descrição
        if (normalizedDescription.includes(query)) {
            score += 50;
        }

        // Pontuação por correspondência em keywords
        item.keywords.forEach(keyword => {
            const normalizedKeyword = this.normalizeString(keyword);
            if (normalizedKeyword.includes(query) || query.includes(normalizedKeyword)) {
                score += 75;
            }
        });

        return score;
    }

    normalizeString(str) {
        return str.toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '') // Remove acentos
            .replace(/[^\w\s]/g, '') // Remove pontuação
            .trim();
    }

    scrollToSection(target) {
        const element = document.querySelector(target);
        if (element) {
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    navigateToPage(url) {
        window.location.href = url;
    }

    renderResults(results) {
        const resultsContainer = document.getElementById('search-results');
        
        if (results.length === 0) {
            resultsContainer.innerHTML = `
                <div class="text-center py-8">
                    <i class="fas fa-search text-4xl text-paragraph/30 dark:text-white/30 mb-4"></i>
                    <p class="text-paragraph/60 dark:text-white/60">Nenhum resultado encontrado</p>
                </div>
            `;
            return;
        }

        const resultsHTML = results.map(result => `
            <button class="search-result w-full p-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-dark-300 transition-colors" 
                    data-target="${result.target}" 
                    data-type="${result.type}">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="font-medium text-paragraph dark:text-white">${result.title}</div>
                        <div class="text-sm text-paragraph/60 dark:text-white/60">${result.description}</div>
                    </div>
                    <div class="text-xs text-primary bg-primary/10 px-2 py-1 rounded-full">
                        ${result.type === 'section' ? 'Seção' : 'Página'}
                    </div>
                </div>
            </button>
        `).join('');

        resultsContainer.innerHTML = resultsHTML;

        // Adicionar event listeners aos resultados
        document.querySelectorAll('.search-result').forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-target');
                const type = button.getAttribute('data-type');
                
                if (type === 'section') {
                    this.scrollToSection(target);
                } else {
                    this.navigateToPage(target);
                }
                
                closeSearchModal();
            });
        });
    }
}

// Instanciar a busca
const siteSearch = new SiteSearch();

// Funções globais para o modal
function openSearchModal() {
    const modal = document.getElementById('search-modal');
    const input = document.getElementById('search-input');
    
    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.classList.remove('opacity-0');
        modal.querySelector('.transform').classList.remove('scale-95');
        modal.querySelector('.transform').classList.add('scale-100');
        input.focus();
    }, 10);
}

function closeSearchModal(event) {
    if (event && event.target !== event.currentTarget) return;
    
    const modal = document.getElementById('search-modal');
    const searchInput = document.getElementById('search-input');
    
    modal.classList.add('opacity-0');
    modal.querySelector('.transform').classList.remove('scale-100');
    modal.querySelector('.transform').classList.add('scale-95');
    
    setTimeout(() => {
        modal.classList.add('hidden');
        searchInput.value = '';
        showDefaultSuggestions();
    }, 300);
}

function performSearch() {
    const query = document.getElementById('search-input').value.trim();
    
    if (query.length < 2) {
        showDefaultSuggestions();
        return;
    }

    const results = siteSearch.search(query);
    siteSearch.renderResults(results);
}

function showDefaultSuggestions() {
    const resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = `
        <div class="text-sm text-paragraph/60 dark:text-white/60 mb-3">Sugestões populares:</div>
        <div class="grid grid-cols-1 gap-2">
            <button class="search-suggestion p-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-dark-300 transition-colors" data-target="#hero">
                <div class="font-medium text-paragraph dark:text-white">Início</div>
                <div class="text-sm text-paragraph/60 dark:text-white/60">Página principal e hero section</div>
            </button>
            <button class="search-suggestion p-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-dark-300 transition-colors" data-target="#about">
                <div class="font-medium text-paragraph dark:text-white">Sobre</div>
                <div class="text-sm text-paragraph/60 dark:text-white/60">Informações sobre a empresa</div>
            </button>
            <button class="search-suggestion p-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-dark-300 transition-colors" data-target="#services">
                <div class="font-medium text-paragraph dark:text-white">Serviços</div>
                <div class="text-sm text-paragraph/60 dark:text-white/60">Nossos serviços e soluções</div>
            </button>
            <button class="search-suggestion p-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-dark-300 transition-colors" data-target="#team">
                <div class="font-medium text-paragraph dark:text-white">Equipe</div>
                <div class="text-sm text-paragraph/60 dark:text-white/60">Conheça nossa equipe</div>
            </button>
            <button class="search-suggestion p-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-dark-300 transition-colors" data-url="/contact">
                <div class="font-medium text-paragraph dark:text-white">Contato</div>
                <div class="text-sm text-paragraph/60 dark:text-white/60">Entre em contato conosco</div>
            </button>
        </div>
    `;
    
    siteSearch.attachSuggestionListeners();
}

function handleSearchKeydown(event) {
    if (event.key === 'Escape') {
        closeSearchModal();
    } else if (event.key === 'Enter') {
        const firstResult = document.querySelector('.search-result');
        if (firstResult) {
            firstResult.click();
        }
    }
}

// Fechar modal com ESC
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const modal = document.getElementById('search-modal');
        if (modal && !modal.classList.contains('hidden')) {
            closeSearchModal();
        }
    }
});
