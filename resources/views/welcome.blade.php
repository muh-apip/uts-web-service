<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Dashboard</title>

    <!-- Tailwind via Preline CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/preline@latest/dist/preline.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 via-white to-indigo-100 px-4">

    <div class="max-w-lg w-full bg-white rounded-3xl shadow-xl p-8 flex flex-col items-center space-y-6 text-center">
        
        <!-- Profile Picture -->
        <img 
            src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&background=random' }}" 
            alt="Profile" 
            class="w-24 h-24 rounded-full border-4 border-indigo-200 shadow-md object-cover"
        />

        <!-- Greeting -->
        <h1 class="text-3xl font-bold text-gray-800">
            Selamat Datang, {{ Auth::user()->name }}!
        </h1>
        <p class="text-base text-gray-600">
            Kamu berhasil login ke Web Services App.
        </p>

        <!-- Logout Button -->
        <form method="GET" action="{{ route('logout') }}">
            @csrf
            <button
                class="hs-btn px-6 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-xl shadow transition duration-200"
            >
                Logout
            </button>
        </form>
    </div>

    <!-- Alpine & Preline JS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/preline@latest/dist/preline.min.js"></script>
</body>
</html>
