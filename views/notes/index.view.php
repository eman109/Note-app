<!DOCTYPE html>
<html>
<head>
    <title>Notes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        h2 { font-family: 'Fraunces', serif; }
    </style>
</head>
<body class="bg-[#FAF7F2] min-h-screen p-8">

    <div class="max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl text-[#22262B]">Notes</h2>
            <div class="flex items-center gap-4">
                <a href="<?= url('notes/create') ?>" class="text-sm text-[#B5533C] hover:underline">+ New</a>
                <form method="post" action="<?= url('logout') ?>">
                    <button class="text-sm text-[#8A8478] hover:text-[#B5533C]">Logout</button>
                </form>
            </div>
        </div>

        <?php if (empty($notes)): ?>
            <p class="text-sm text-[#8A8478]">No notes yet.</p>
        <?php endif; ?>

        <div class="grid gap-3">
            <?php foreach ($notes as $note): ?>
                <a href="<?= url('notes/' . $note['id']) ?>" class="block bg-white border-l-4 border-[#B5533C] rounded-r-lg p-5 shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg text-[#22262B] mb-1"><?= htmlspecialchars($note['title']) ?></h3>
                    <p class="text-sm text-[#8A8478]"><?= htmlspecialchars(substr($note['content'], 0, 80)) ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>