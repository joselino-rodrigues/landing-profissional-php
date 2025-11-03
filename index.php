<?php
// index.php
// Landing Page Simples e Profissional para Qualquer Profissional
// PHP 8.3 | Tailwind CSS (CDN) | Apenas 2 arquivos

$config = require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($config['titulo_site']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($config['descricao']) ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-700"><?= htmlspecialchars($config['nome']) ?></h1>
            <a href="#contato" class="bg-indigo-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                Fale Comigo
            </a>
        </div>
    </header>

    <!-- Hero -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <?= htmlspecialchars($config['profissao']) ?>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                <?= htmlspecialchars($config['descricao']) ?>
            </p>
            <div class="flex justify-center space-x-6 text-gray-600">
                <a href="tel:<?= htmlspecialchars($config['telefone']) ?>" class="hover:text-indigo-600">
                    <?= htmlspecialchars($config['telefone']) ?>
                </a>
                <a href="mailto:<?= htmlspecialchars($config['email']) ?>" class="hover:text-indigo-600">
                    <?= htmlspecialchars($config['email']) ?>
                </a>
                <?php if ($config['site']): ?>
                    <a href="https://<?= htmlspecialchars($config['site']) ?>" target="_blank" class="hover:text-indigo-600">
                        <?= htmlspecialchars($config['site']) ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">Serviços Oferecidos</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($config['servicos'] as $servico): ?>
                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full mx-auto mb-4"></div>
                        <h4 class="font-semibold text-lg"><?= htmlspecialchars($servico) ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-8">Entre em Contato</h3>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Estou disponível para novos projetos e parcerias. Envie uma mensagem ou me encontre nas redes.
            </p>
            <div class="flex justify-center space-x-6 text-2xl">
                <?php if ($config['linkedin']): ?>
                    <a href="<?= htmlspecialchars($config['linkedin']) ?>" target="_blank" class="text-indigo-600 hover:text-indigo-800">
                        <i class="fab fa-linkedin"></i>
                    </a>
                <?php endif; ?>
                <?php if ($config['github']): ?>
                    <a href="<?= htmlspecialchars($config['github']) ?>" target="_blank" class="text-gray-700 hover:text-gray-900">
                        <i class="fab fa-github"></i>
                    </a>
                <?php endif; ?>
            </div>
            <p class="mt-8 text-sm text-gray-500">
                <?= htmlspecialchars($config['endereco']) ?>
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 text-center">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($config['nome']) ?>. Todos os direitos reservados.</p>
    </footer>

    <script src="https://kit.fontawesome.com/5f4b2a6e8d.js" crossorigin="anonymous"></script>
</body>
</html>
