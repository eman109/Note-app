<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        h2 { font-family: 'Fraunces', serif; }
    </style>
</head>
<body class="bg-[#FAF7F2] min-h-screen flex items-center justify-center">

    <div class="bg-white border-l-4 border-[#B5533C] shadow-sm rounded-r-lg p-10 w-full max-w-sm">
        <h2 class="text-3xl text-[#22262B] mb-1">Login</h2>
        <p class="text-sm text-[#8A8478] mb-6">Welcome back</p>

        <?php if (!empty($_SESSION['errors'])): ?>
            <ul class="text-sm text-[#B5533C] mb-4 space-y-1">
                <?php foreach ($_SESSION['errors'] as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; unset($_SESSION['errors']); ?>
            </ul>
        <?php endif; ?>

        <form method="post" action="<?= url('login') ?>" class="space-y-4">
            <div>
                <label class="block text-sm text-[#22262B] mb-1">Email</label>
                <input type="email" name="email" required
                    class="w-full border border-[#E4DFD5] rounded-md px-3 py-2 text-sm focus:outline-none focus:border-[#B5533C]">
            </div>
            <div>
                <label class="block text-sm text-[#22262B] mb-1">Password</label>
                <input type="password" name="password" required
                    class="w-full border border-[#E4DFD5] rounded-md px-3 py-2 text-sm focus:outline-none focus:border-[#B5533C]">
            </div>
            <button type="submit"
                class="w-full bg-[#22262B] text-white rounded-md py-2 text-sm font-medium hover:bg-[#3B4046] transition">
                Login
            </button>
        </form>

        <p class="text-sm text-[#8A8478] mt-6">
            No account?
            <a href="<?= url('register') ?>" class="text-[#B5533C] hover:underline">Register</a>
        </p>
    </div>

</body>
</html>