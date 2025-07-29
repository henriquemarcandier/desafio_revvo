<?php
/**
 * Header Component
 * 
 * Responsive header with navigation, logo, and mobile menu
 */
?>
<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | LEO' : 'LEO | Cursos Online'; ?></title>
    <meta name="description" content="Plataforma de cursos online LEO. Aenean lacinia bibendum nulla sed consectetur.">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?=$url_site?>assets/images/favicon.ico">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb', // blue-600
                        dark: '#1e293b',   // slate-800
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=$url_site?>assets/css/main.css">
</head>
<body class="font-sans bg-gray-50 text-slate-800 antialiased">
    <!-- Skip to Content Link (Accessibility) -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:bg-white focus:px-4 focus:py-2 focus:rounded focus:z-50">
        Pular para conteúdo
    </a>

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="<?=$url_site?>" class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                    </svg>
                    <span class="text-xl font-bold text-dark">LEO</span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="<?=$url_site?>" class="text-sm font-medium hover:text-primary transition-colors <?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'text-primary' : 'text-slate-600' ?>">Início</a>
                    <a href="<?=$url_site?>cursos.php" class="text-sm font-medium hover:text-primary transition-colors <?php echo basename($_SERVER['PHP_SELF']) === 'cursos.php' ? 'text-primary' : 'text-slate-600' ?>">Cursos</a>
                    <a href="<?=$url_site?>sobre.php" class="text-sm font-medium hover:text-primary transition-colors">Sobre</a>
                    <a href="<?=$url_site?>contato.php" class="text-sm font-medium hover:text-primary transition-colors">Contato</a>
                </nav>
                <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_user_id']){?>
                
                <div class="hidden md:flex items-center space-x-4">
                    <?=$_SESSION['admin_user_name']?> 
                    <a href="<?=$url_site?>admin/index.php" class="px-4 py-2 bg-primary text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors shadow-sm">
                        Ver Admin
                    </a>
                </div>
                <?php } 
                else{?><!-- Auth Buttons (Desktop) -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="<?=$url_site?>admin/login.php" class="text-sm font-medium text-slate-600 hover:text-primary transition-colors">Entrar</a>
                    <a href="<?=$url_site?>admin/registrar.php" class="px-4 py-2 bg-primary text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors shadow-sm">
                        Criar conta
                    </a>
                </div>   
                <?php }?>
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-slate-600 hover:text-primary hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <span class="sr-only">Abrir menu</span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="container mx-auto px-4 py-3 space-y-3">
                <a href="" class="block py-2 text-base font-medium <?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'text-primary' : 'text-slate-600' ?>">Início</a>
                <a href="cursos" class="block py-2 text-base font-medium <?php echo basename($_SERVER['PHP_SELF']) === 'cursos.php' ? 'text-primary' : 'text-slate-600' ?>">Cursos</a>
                <a href="sobre" class="block py-2 text-base font-medium text-slate-600">Sobre</a>
                <a href="contato" class="block py-2 text-base font-medium text-slate-600">Contato</a>
                
                <div class="pt-4 border-t border-gray-200 space-y-3">
                    <a href="login" class="block py-2 text-base font-medium text-slate-600">Entrar</a>
                    <a href="registrar" class="block w-full px-4 py-2 bg-primary text-white text-base font-medium rounded-md text-center shadow-sm">
                        Criar conta
                    </a>
                </div>
            </div>
        </div>
    </header>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
            
            // Update aria-expanded attribute
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
                document.getElementById('mobile-menu-button').setAttribute('aria-expanded', 'false');
            });
        });
    </script>