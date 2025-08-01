# ON3X Bank

Projeto de website para banco digital com foco em criptomoedas, desenvolvido com Laravel e Livewire.

## 🚀 Tecnologias

- **Laravel** - Framework PHP
- **Livewire** - Componentes dinâmicos
- **Tailwind CSS** - Framework CSS
- **Vite** - Build tool
- **Blade** - Template engine

## 📋 Pré-requisitos

- PHP >= 8.1
- Composer
- Node.js >= 16
- npm ou yarn

## 🔧 Instalação

1. **Clone o repositório:**
```bash
git clone https://github.com/marcosordnael/on3x-site.git
cd on3x-site
```

2. **Instale as dependências do PHP:**
```bash
composer install
```

3. **Instale as dependências do Node.js:**
```bash
npm install
```

4. **Configure o ambiente:**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Execute as migrações:**
```bash
php artisan migrate
```

6. **Compile os assets:**
```bash
npm run build
# ou para desenvolvimento
npm run dev
```

7. **Inicie o servidor:**
```bash
php artisan serve
```

## 📦 Comandos Git para Deploy

### Primeiro deploy (já realizado):
```bash
# Inicializar repositório Git
git init

# Adicionar todos os arquivos
git add .

# Primeiro commit
git commit -m "Initial commit - ON3X Bank project"

# Adicionar repositório remoto
git remote add origin https://github.com/marcosordnael/on3x-site.git

# Enviar para GitHub
git push -u origin main
```

### Para futuras atualizações:
```bash
# Adicionar mudanças
git add .

# Fazer commit com mensagem descritiva
git commit -m "Descrição das mudanças"

# Enviar para GitHub
git push origin main
```

### Comandos úteis:
```bash
# Ver status dos arquivos
git status

# Ver histórico de commits
git log --oneline

# Criar nova branch
git checkout -b nome-da-branch

# Voltar para branch main
git checkout main

# Mergear branch
git merge nome-da-branch
```

## 🌐 Deploy

O projeto está hospedado no GitHub em: https://github.com/marcosordnael/on3x-site

## 📝 Estrutura do Projeto

```
on3x-bank/
├── app/
│   ├── Http/Controllers/
│   ├── Livewire/
│   └── Models/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── components/
│       └── pages/
├── public/
│   └── images/
├── routes/
└── database/
```

## 🤝 Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova feature'`)
4. Push para a branch (`git push origin feature/nova-feature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT.

---

Desenvolvido com ❤️ para ON3X Bank
