# ON3X Bank - Crypto Banking Platform

Plataforma moderna de banco digital com foco em criptomoedas, desenvolvida com Laravel 12, Livewire e FluxUI Pro.

## 🚀 Tecnologias & Stack

### Backend
- **Laravel 12** - Framework PHP moderno
- **Livewire 3.6** - Componentes dinâmicos full-stack
- **Livewire Volt** - Componentes de página única
- **PostgreSQL** - Banco de dados relacional robusto

### Frontend & UI
- **Tailwind CSS 4** - Framework CSS utility-first
- **FluxUI Pro** - Biblioteca de componentes premium
- **Alpine.js** - Framework JavaScript reativo
- **Vite** - Build tool e bundler moderno

### Funcionalidades Especiais
- **GSAP** - Animações avançadas
- **AOS (Animate On Scroll)** - Animações ao rolar a página  
- **Swiper** - Carrosséis e sliders responsivos
- **FontAwesome** - Ícones profissionais

### Ferramentas de Desenvolvimento
- **Pest** - Framework de testes moderno
- **Laravel Pint** - Code formatter
- **Laravel Breeze** - Sistema de autenticação
- **Composer** - Gerenciador de dependências PHP
- **NPM** - Gerenciador de dependências JavaScript

## 📦 Componentes e Recursos

### 🔐 Sistema de Autenticação
- Login/Register com Livewire
- Reset de senha
- Verificação de email
- Confirmação de senha
- Perfil de usuário completo

### 🎨 Interface Profissional
- **Header responsivo** com navegação suave
- **Footer completo** com links e informações
- **Seções modulares**: Hero, About, Services, Team, Timeline, Market, Blog, Clients
- **Tema escuro/claro** automático
- **Animações GSAP** para interações fluidas

### 📱 Seções da Landing Page
- **Hero**: Apresentação principal com animações
- **About**: Sobre a empresa e missão
- **Process**: Processo de trabalho visual
- **Services**: Serviços oferecidos
- **Timeline**: Marcos e cronograma
- **Team**: Equipe profissional
- **Market**: Análise de mercado crypto
- **Clients**: Clientes e parceiros
- **Blog**: Artigos e novidades

## 📋 Pré-requisitos

- **PHP** >= 8.2
- **Composer** 2.x
- **Node.js** >= 18
- **NPM** ou **Yarn**
- **PostgreSQL** >= 13

## 🔧 Instalação

1. **Clone o repositório:**
```bash
git clone https://github.com/marcosordnael/on3x-site.git
cd on3x-site
```

2. **Instale dependências PHP:**
```bash
composer install
```

3. **Instale dependências JavaScript:**
```bash
npm install
```

4. **Configure ambiente:**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure banco de dados:**
```bash
# Configure PostgreSQL no arquivo .env
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=sua_senha

# Execute as migrações
php artisan migrate
```

6. **Configure FluxUI Pro:**
```bash
# Adicione sua licença FluxUI Pro no auth.json
php artisan flux:install
```

7. **Compile assets:**
```bash
# Para desenvolvimento
npm run dev

# Para produção  
npm run build
```

8. **Inicie servidor:**
```bash
php artisan serve
```

## 🎯 Scripts Disponíveis

### Desenvolvimento
```bash
# Servidor completo com hot reload
composer dev

# Apenas frontend
npm run dev

# Apenas backend
php artisan serve
```

### Produção
```bash
# Build completo
npm run build

# Testes
composer test
# ou
php artisan test
```

### Limpeza
```bash
# Limpar dependências
npm run clean-deps

# Limpar cache Laravel
php artisan optimize:clear
```

## 📝 Estrutura do Projeto

```
on3x-bank/
├── app/
│   ├── Http/Controllers/        # Controllers HTTP
│   ├── Livewire/               # Componentes Livewire
│   │   ├── Auth/              # Autenticação
│   │   ├── Forms/             # Formulários
│   │   ├── Settings/          # Configurações
│   │   └── Actions/           # Ações do usuário
│   ├── Models/                # Models Eloquent
│   ├── Providers/             # Service Providers
│   └── View/Components/       # View Components
├── resources/
│   ├── css/                   # Estilos CSS
│   │   └── app.css            # CSS principal
│   ├── js/                    # JavaScript
│   │   └── app.js             # JS principal
│   └── views/                 # Templates Blade
│       ├── components/        # Componentes reutilizáveis
│       │   ├── header/       # Cabeçalho
│       │   ├── footer/       # Rodapé
│       │   ├── sections/     # Seções da página
│       │   ├── layouts/      # Layouts base
│       │   └── settings/     # Componentes de configurações
│       ├── flux/             # Componentes FluxUI customizados
│       ├── livewire/         # Views Livewire
│       │   ├── auth/        # Autenticação
│       │   ├── profile/     # Perfil do usuário
│       │   ├── settings/    # Configurações
│       │   ├── pages/       # Páginas do sistema
│       │   └── welcome/     # Página inicial
│       ├── pages/            # Páginas principais
│       └── partials/         # Partials reutilizáveis
├── public/
│   ├── images/               # Imagens do projeto
│   │   ├── about/           # Imagens da seção sobre
│   │   ├── ai/              # Imagens de inteligência artificial
│   │   ├── analytics/       # Imagens de analytics
│   │   ├── banking/         # Imagens bancárias
│   │   ├── blog/            # Imagens do blog
│   │   ├── chatbot/         # Imagens do chatbot
│   │   ├── clients/         # Logos dos clientes
│   │   ├── crypto/          # Imagens relacionadas a crypto
│   │   ├── hero/            # Imagens hero
│   │   ├── hosting/         # Imagens de hosting
│   │   ├── marketing/       # Imagens de marketing
│   │   ├── payment/         # Imagens de pagamento
│   │   ├── services/        # Imagens dos serviços
│   │   ├── solution/        # Imagens de soluções
│   │   ├── team/            # Fotos da equipe
│   │   ├── testimonial/     # Imagens de depoimentos
│   │   └── vision/          # Imagens de visão
│   └── build/               # Assets compilados
├── database/
│   ├── migrations/          # Migrações do banco
│   ├── factories/           # Factories para testes
│   └── seeders/            # Seeders de dados
├── tests/                   # Testes automatizados
│   ├── Feature/            # Testes de funcionalidades
│   └── Unit/               # Testes unitários
└── routes/                  # Definições de rotas
    ├── web.php             # Rotas web
    ├── auth.php            # Rotas de autenticação
    └── console.php         # Comandos Artisan
```

## 🌐 Funcionalidades Principais

### 💼 Para Desenvolvedores
- **Arquitetura modular** com componentes reutilizáveis
- **Sistema de componentes Livewire** para interatividade
- **FluxUI Pro** para interface profissional
- **Testes automatizados** com Pest
- **Hot reload** para desenvolvimento ágil

### 🎨 Para Designers
- **Tailwind CSS 4** com utilities avançadas
- **Tema escuro/claro** configurável
- **Animações GSAP** suaves e profissionais
- **Design responsivo** mobile-first
- **Ícones FontAwesome** consistentes

### 👥 Para Usuários
- **Interface intuitiva** e moderna
- **Navegação suave** entre seções
- **Performance otimizada** com Vite
- **Experiência mobile** otimizada

## 🚀 Deploy & CI/CD

O projeto inclui workflows GitHub Actions para:
- **Testes automatizados** em cada push
- **Linting** e formatação de código
- **Build** automático dos assets

### Deploy Manual
```bash
# Build para produção
npm run build

# Otimizar Laravel
php artisan optimize

# Upload dos arquivos para servidor
```

## 🤝 Contribuição

1. **Fork** o projeto
2. **Crie** uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. **Commit** suas mudanças (`git commit -m 'Adiciona nova feature'`)
4. **Push** para a branch (`git push origin feature/nova-feature`)
5. **Abra** um Pull Request

### Padrões de Código
- **PSR-12** para PHP
- **ESLint** para JavaScript
- **Prettier** para formatação
- **Conventional Commits** para mensagens

## 📄 Licença

Este projeto está sob a licença **MIT**. Veja o arquivo `LICENSE` para mais detalhes.

## 🔗 Links Importantes

- **Repositório**: https://github.com/marcosordnael/on3x-site
- **Laravel**: https://laravel.com
- **Livewire**: https://livewire.laravel.com  
- **FluxUI**: https://fluxui.dev
- **Tailwind CSS**: https://tailwindcss.com

## 📞 Suporte

Para dúvidas ou suporte:
- **Issues**: https://github.com/marcosordnael/on3x-site/issues
- **Discussões**: https://github.com/marcosordnael/on3x-site/discussions

---

**ON3X Bank** - Desenvolvido usando Laravel & Livewire
