<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Login - {{ config('app.name') }} </title>
  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div class="relative flex items-center min-h-screen p-6">

    <div class="flex-1 h-full max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
      <div class="flex flex-col pt-4 space-y-4 overflow-y-auto">

        <div class="pt-4">
          <p class="text-center py-2 text-lg">Course Allocation System</p>
          <img aria-hidden="true" class="object-cover w-24 mx-auto" src="/img/uniabuja.png" alt="Office" />
        </div>
        <div class="flex items-center justify-center px-6 pt-0 pb-6 sm:p-12 sm:pt-0">
          <div class="w-full">

            <form action="{{ route('login') }}" method="post">
              @csrf
              <label class="block text-sm">
                <span class="text-gray-600">Username/Email</span>
                <input name="username" type="text" value="{{ old('username') }}" class="block w-full mt-1 text-sm form-input focus:border-primary focus:outline-none" placeholder="janedoe" />
                @error('username')
                <span class="text-sm font-normal text-red-600">{{ $message }}</span>
                @enderror
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-600">Password</span>
                <input name="password" value="{{ old('password') }}" class="block w-full mt-1 text-sm form-input focus:border-primary focus:outline-none" placeholder="***************" type="password" />
                @error('password')
                <span class="text-sm font-normal text-red-600">{{ $message }}</span>
                @enderror
              </label>
              <p class="text-right">
                <a class="text-sm font-medium text-right text-secondary hover:underline" href="{{ route('password.request') }}">
                  Forgot your password?
                </a>
              </p>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg bg-primary focus:shadow-outline-green hover:bg-primary focus:outline-none active:bg-primary" href="/index.html">
                Log in
              </button>
            </form>

            <hr class="my-8" />
            <p class="text-center p-2 shadow-sm rounded border">Designed and Developed by <a href="https://bowofade.com" class="text-secondary">Networker</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>
