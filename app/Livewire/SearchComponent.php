<?php

namespace App\Livewire;

use Livewire\Component;

class SearchComponent extends Component
{
    public $search = '';
    public $results = [];

    protected $searchData = [
        [
            'id' => 'hero',
            'title' => 'Início',
            'description' => 'Página principal e hero section',
            'keywords' => ['inicio', 'home', 'principal', 'hero', 'bitcoin', 'crypto', 'cryptocurrency'],
            'target' => '#hero',
            'type' => 'section'
        ],
        [
            'id' => 'about',
            'title' => 'Sobre',
            'description' => 'Informações sobre a empresa e nossos valores',
            'keywords' => ['sobre', 'about', 'empresa', 'valores', 'missao', 'visao', 'quem somos'],
            'target' => '#about',
            'type' => 'section'
        ],
        [
            'id' => 'process',
            'title' => 'Processo',
            'description' => 'Como funciona nosso processo',
            'keywords' => ['processo', 'process', 'como funciona', 'etapas', 'passos'],
            'target' => '#process',
            'type' => 'section'
        ],
        [
            'id' => 'services',
            'title' => 'Serviços',
            'description' => 'Nossos serviços e soluções',
            'keywords' => ['servicos', 'services', 'solucoes', 'produtos', 'ofertas'],
            'target' => '#services',
            'type' => 'section'
        ],
        [
            'id' => 'team',
            'title' => 'Equipe',
            'description' => 'Conheça nossa equipe profissional',
            'keywords' => ['equipe', 'team', 'time', 'profissionais', 'colaboradores'],
            'target' => '#team',
            'type' => 'section'
        ],
        [
            'id' => 'timeline',
            'title' => 'Timeline',
            'description' => 'Linha do tempo e marcos importantes',
            'keywords' => ['timeline', 'historia', 'marcos', 'cronologia', 'evolucao'],
            'target' => '#timeline',
            'type' => 'section'
        ],
        [
            'id' => 'market',
            'title' => 'Market',
            'description' => 'Análise de mercado e tendências',
            'keywords' => ['market', 'mercado', 'analise', 'tendencias', 'economia'],
            'target' => '#market',
            'type' => 'section'
        ],
        [
            'id' => 'blog',
            'title' => 'Blog',
            'description' => 'Artigos e notícias recentes',
            'keywords' => ['blog', 'noticias', 'artigos', 'posts', 'conteudo'],
            'target' => '#blog',
            'type' => 'section'
        ],
        [
            'id' => 'clients',
            'title' => 'Clientes',
            'description' => 'Nossos clientes e parceiros',
            'keywords' => ['clientes', 'clients', 'parceiros', 'testimonials', 'depoimentos'],
            'target' => '#clients',
            'type' => 'section'
        ],
        [
            'id' => 'contact',
            'title' => 'Contato',
            'description' => 'Entre em contato conosco',
            'keywords' => ['contato', 'contact', 'fale conosco', 'email', 'telefone'],
            'target' => 'contact.html',
            'type' => 'page'
        ]
    ];

    public function updatedSearch()
    {
        if (empty($this->search)) {
            $this->results = [];
            return;
        }

        $query = $this->normalizeString($this->search);
        $results = collect($this->searchData)->map(function ($item) use ($query) {
            $score = $this->calculateRelevanceScore($query, $item);
            return $score > 0 ? array_merge($item, ['score' => $score]) : null;
        })->filter()->sortByDesc('score')->take(6);

        $this->results = $results->toArray();
    }

    public function selectResult($target, $type)
    {
        $this->search = '';
        $this->results = [];
        
        // Debug log
        \Log::info('Search result selected', ['target' => $target, 'type' => $type]);
        
        if ($type === 'section') {
            $this->dispatch('scroll-to-section', target: $target);
        } else {
            $this->dispatch('navigate-to-page', url: $target);
        }
    }

    public function selectFirstResult()
    {
        if (!empty($this->results)) {
            $firstResult = $this->results[0];
            $this->selectResult($firstResult['target'], $firstResult['type']);
        }
    }

    private function calculateRelevanceScore($query, $item)
    {
        $score = 0;
        $normalizedTitle = $this->normalizeString($item['title']);
        $normalizedDescription = $this->normalizeString($item['description']);

        // Pontuação por correspondência no título
        if (str_contains($normalizedTitle, $query)) {
            $score += 100;
        }

        // Pontuação por correspondência na descrição
        if (str_contains($normalizedDescription, $query)) {
            $score += 50;
        }

        // Pontuação por correspondência em keywords
        foreach ($item['keywords'] as $keyword) {
            $normalizedKeyword = $this->normalizeString($keyword);
            if (str_contains($normalizedKeyword, $query) || str_contains($query, $normalizedKeyword)) {
                $score += 75;
            }
        }

        return $score;
    }

    private function normalizeString($str)
    {
        return strtolower(trim(preg_replace('/[^\w\s]/', '', 
            iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $str)
        )));
    }

    public function render()
    {
        return view('livewire.search-component');
    }
}
