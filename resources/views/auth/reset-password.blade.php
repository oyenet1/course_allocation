<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Reset password - 3cyberpractitioners</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="/assets/css/tailwind.output.css" />

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="/assets/js/init-alpine.js"></script>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="../assets/img/forgot-password-office.jpeg" alt="Office" />
          <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="../assets/img/forgot-password-office-dark.jpeg" alt="Office" />
        </div>
        <div class="flex items-center justify-center p-4 sm:p-8 md:w-1/2">
          <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
              Reset password
            </h1>
            
            <form action="{{ route('password.update') }}" method="post">
              @csrf
              <input type="hidden" name="token" value="{{ $request->route('token') }}">
              <label class="block mt-4 text-sm" >
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input type="email" name="email" value="{{ $request->email }}" class="cursor-not-allowed  block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
                @error('email')
                <span class="text-sm text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input name="password" value="{{ old('password') }}" class="block w-full @error('password')
                  border-red-500
                @enderror mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="password" type="password" />
                @error('password')
                <span class="text-sm text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Confirm Password</span>
                <input name="password_confirmation" value="{{ old('password_confirmation') }}" class="block w-full @error('field')
                  border-red-500
                @enderror mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Confirm Password" type="password" />
                @error('password_confirmation')
                <span class="text-sm text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Update password
              </button>
            </form>

            <hr class="my-4" />

            <p class="mt-1 text-center">
              <span>New user</span>
              <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('register') }}">
                Create account
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- jquery --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $(".alert-hide").click(function() {
        $(".alert").hide();
      });
    });
  </script>
</body>
</html>
