<!DOCTYPE html>
<html>
<head>
    <title>Edit Note</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#FAF7F2] min-h-screen p-8">

    <div class="max-w-2xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <a href="<?= url('notes/' . $note['id']) ?>" class="text-sm text-[#8A8478] hover:text-[#B5533C]">← Back</a>
            <button type="submit" form="noteForm"
                class="bg-[#22262B] text-white rounded-md px-4 py-2 text-sm font-medium hover:bg-[#3B4046] transition">
                Update
            </button>
        </div>

        <form id="noteForm" method="post" action="<?= url('notes/' . $note['id']) ?>"
              class="bg-white border-l-4 border-[#B5533C] rounded-r-lg p-6 shadow-sm space-y-4">
            <input type="hidden" name="_method" value="PATCH">
            <input type="text" name="title" value="<?= htmlspecialchars($note['title']) ?>"
                class="w-full text-xl text-[#22262B] font-medium focus:outline-none break-words">
            <textarea name="content" rows="10"
                class="w-full text-sm text-[#22262B] focus:outline-none resize-none break-words"><?= htmlspecialchars($note['content']) ?></textarea>
        </form>
    </div>

</body>
</html>