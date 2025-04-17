<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Login</title>

  <!-- Preline CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/preline@latest/dist/preline.min.css" />
  <!-- Tailwind browser plugin -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-tr from-indigo-100 via-white to-indigo-200">
  
  <div class="min-h-screen flex items-center justify-center px-4">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl p-8 space-y-6 border border-gray-100">
      
      <!-- Logo -->
      <div class="text-center">
        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Logo" class="w-12 h-12 mx-auto mb-2">
        <h1 class="text-2xl font-bold text-gray-800">Selamat Datang!</h1>
        <p class="text-sm text-gray-500">Silakan login menggunakan akun Google Anda</p>
      </div>

      <!-- Login Button -->
      <form action="{{ route('auth.redirect') }}" method="GET" class="flex justify-center">
        <button
          type="submit"
          class="hs-btn w-full inline-flex items-center justify-center gap-3 px-5 py-3 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-100 transition-all duration-200"
        >
          <img
            src="https://www.svgrepo.com/show/475656/google-color.svg"
            alt="Google"
            class="w-5 h-5"
          />
          Login dengan Google
        </button>
      </form>

      <!-- Footer Note -->
      <div class="text-center text-xs text-gray-400 pt-4 border-t">
        &copy; {{ date('Y') }} UTS Web Services App | Muhammad Haviv.
      </div>

    </div>
  </div>

  <!-- Alpine.js -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <!-- Preline JS -->
  <script src="https://cdn.jsdelivr.net/npm/preline@latest/dist/preline.min.js"></script>
</body>
</html>
