<?php
$pageTitle = $pageTitle ?? 'Admin';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> | LEO Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-xl font-bold text-blue-600">LEO Admin</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <a href="logout.php" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-sign-out-alt mr-1"></i> Sair
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-sm min-h-screen">
            <div class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="<?=$url_site?>admin/index.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?=$url_site?>admin/cursos/index.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                            <i class="fas fa-book mr-2"></i> Cursos
                        </a>
                    </li>
                    <li>
                        <a href="<?=$url_site?>admin/slideshow/index.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                            <i class="fas fa-images mr-2"></i> Slideshow
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">