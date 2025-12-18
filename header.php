<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Praktikum 11 - Framework Modular'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .container { margin-top: 30px; }
        header { margin-bottom: 20px; }
        footer { margin-top: 50px; padding: 20px 0; border-top: 1px solid #ddd; }
    </style>
</head>
<body>
    <div class="container bg-white shadow-sm p-4 rounded">
        <header>
            <h1>Portal Artikel Modular</h1>
          <nav class="nav border-bottom pb-2">
    <a class="nav-link" href="/lab11_php_oop/index.php/home">Home</a>
    <a class="nav-link" href="/lab11_php_oop/index.php/artikel">Artikel</a>
    <a class="nav-link" href="/lab11_php_oop/index.php/about">About</a>
</nav>
        </header>