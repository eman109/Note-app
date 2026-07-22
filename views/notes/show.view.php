<!DOCTYPE html>
<html>
<head>
    <title>Note</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1 { font-family: 'Fraunces', serif; }
    </style>
</head>
<body class="bg-[#FAF7F2] min-h-screen p-8">

    <div class="max-w-2xl mx-auto">
        <div class="flex items-center justify-between mb-4">
            <a href="<?= url('notes') ?>" class="text-sm text-[#8A8478] hover:text-[#B5533C]">← Back</a>
            <a href="<?= url('notes/' . $note['id'] . '/edit') ?>" class="text-sm text-[#B5533C] hover:underline">Edit</a>
        </div>

        <div class="bg-white border-l-4 border-[#B5533C] rounded-r-lg p-6 shadow-sm">
            <h1 class="text-2xl text-[#22262B] mb-3 break-words"><?= htmlspecialchars($note['title']) ?></h1>
            <p class="text-sm text-[#22262B] leading-relaxed whitespace-pre-line break-words"><?= htmlspecialchars($note['content']) ?></p>

            <form method="post" action="<?= url('notes/' . $note['id']) ?>" onsubmit="return confirm('Delete this note?')" class="mt-4">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="text-sm text-[#B5533C] hover:underline">Delete</button>
            </form>
        </div>
    </div>

</body>
</html>