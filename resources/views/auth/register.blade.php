<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Register - E-Library</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="/assets/css/tailwind.output.css" />

	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="/assets/js/init-alpine.js"></script>
</head>

<body>
	<div class="flex min-h-screen items-center bg-gray-50 p-6">
		<div class="mx-auto h-full max-w-md flex-1 overflow-hidden rounded-lg bg-white shadow-xl">
			<div class="flex flex-col overflow-y-auto">
				<div class="-mb-6 h-32 pt-6 md:h-auto">
					<h2 class="overflow-hidden text-center font-mono font-black uppercase">MVP Online Library system</h2>
					<img aria-hidden="true" class="mx-auto h-20 w-20 rounded-full object-cover" src="/img/bowofade.jpg"
						alt="Office" />
				</div>
				<div class="flex items-center justify-center p-6 sm:p-12">
					<div class="w-full">
						<h1 class="mb-4 text-xl font-semibold text-gray-700">
							Register
						</h1>
						<form action="{{ route('register') }}" method="post">
							@csrf
							<label class="block text-sm">
								<span class="text-gray-700">Name</span>
								<input name="name" value="{{ old('name') }}"
									class="@error('name')
                  border-red-500
                @enderror focus:shadow-outline-green form-input mt-1 block w-full text-sm focus:border-green-400 focus:outline-none"
									placeholder="Jane Doe" />
								@error('name')
									<span class="text-sm font-normal text-red-600">{{ $message }}</span>
								@enderror
							</label>

							<label class="mt-4 block text-sm">
								<span class="text-gray-700">Email</span>
								<input name="email" value="{{ old('email') }}"
									class="@error('email')
                  border-red-500
                @enderror focus:shadow-outline-green form-input mt-1 block w-full text-sm focus:border-green-400 focus:outline-none"
									placeholder="Jane.doe@library.com" />
								@error('email')
									<span class="text-sm font-normal text-red-600">{{ $message }}</span>
								@enderror
							</label>
							<label class="mt-4 block text-sm">
								<span class="text-gray-700">Password</span>
								<input name="password" value="{{ old('password') }}"
									class="@error('password')
                  border-red-500
                @enderror focus:shadow-outline-green form-input mt-1 block w-full text-sm focus:border-green-400 focus:outline-none"
									placeholder="***************" type="password" />
								@error('password')
									<span class="text-sm font-normal text-red-600">{{ $message }}</span>
								@enderror
							</label>
							<label class="mt-4 block text-sm">
								<span class="text-gray-700">Confirm Password</span>
								<input name="password_confirmation" value="{{ old('password_confirmation') }}"
									class="@error('field')
                  border-red-500
                @enderror focus:shadow-outline-green form-input mt-1 block w-full text-sm focus:border-green-400 focus:outline-none"
									placeholder="***************" type="password" />
								@error('password_confirmation')
									<span class="text-sm font-normal text-red-600">{{ $message }}</span>
								@enderror
							</label>
							<div class="mt-6 flex text-sm">
								<label class="flex items-center">
									<input type="checkbox"
										class="form-checkbox focus:shadow-outline-green text-green-600 focus:border-green-400 focus:outline-none" />
									<span class="ml-2">
										I agree to the
										<span class="underline">privacy policy</span>
									</span>
								</label>
							</div>

							<!-- You should use a button here, as the anchor is only used for the example  -->
							<button type="submit"
								class="focus:shadow-outline-green mt-4 block w-full rounded-lg border border-transparent bg-green-600 px-4 py-2 text-center text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-green-700 focus:outline-none active:bg-green-600">
								Create account
							</button>
						</form>

						<hr class="my-4" />

						{{-- <button class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
              <svg class="w-4 h-4 mr-2" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
              </svg>
              Github
            </button>
            <button class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
              <svg class="w-4 h-4 mr-2" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
              </svg>
              Twitter
            </button> --}}
						<p class="m-0 text-center">
							<span>Already a user</span>
							<a class="text-sm font-medium text-green-600 hover:underline" href="{{ route('login') }}">
								Login
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
