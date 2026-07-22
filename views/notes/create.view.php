<!DOCTYPE html>
<html>
<head>
    <title>New Note</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        h2 { font-family: 'Fraunces', serif; }
    </style>
</head>
<body class="bg-[#FAF7F2] min-h-screen p-8">

    <div class="max-w-2xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <a href="<?= url('notes') ?>" class="text-sm text-[#8A8478] hover:text-[#B5533C]">← Back</a>
            <button type="submit" form="noteForm"
                class="bg-[#22262B] text-white rounded-md px-4 py-2 text-sm font-medium hover:bg-[#3B4046] transition">
                Save
            </button>
        </div>

        <?php if (!empty($_SESSION['errors'])): ?>
            <ul class="text-sm text-[#B5533C] mb-4 space-y-1">
                <?php foreach ($_SESSION['errors'] as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; unset($_SESSION['errors']); ?>
            </ul>
        <?php endif; ?>

        <form id="noteForm" method="post" action="<?= url('notes') ?>"
              class="bg-white border-l-4 border-[#B5533C] rounded-r-lg p-6 shadow-sm space-y-4">
            <input type="text" name="title" placeholder="Title"
                class="w-full text-xl text-[#22262B] font-medium focus:outline-none placeholder:text-[#C4BEB2]">
            <textarea name="content" placeholder="Start writing..." rows="10"
                class="w-full text-sm text-[#22262B] focus:outline-none resize-none placeholder:text-[#C4BEB2]"></textarea>
        </form>
    </div>

</body>
</html>