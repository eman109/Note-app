<!DOCTYPE html>
<html>
<head>
    <title>Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1 { font-family: 'Fraunces', serif; }
    </style>
</head>
<body class="bg-[#FAF7F2] min-h-screen flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-3xl text-[#22262B] mb-2">Page not found</h1>
        <p class="text-sm text-[#8A8478] mb-6">That note or page doesn't exist.</p>
        <a href="<?= url('notes') ?>" class="text-sm text-[#B5533C] hover:underline">← Back to notes</a>
    </div>
</body>
</html>