<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-br from-slate-100 via-white to-blue-50">

    <div class="flex min-h-screen items-center justify-center px-4 py-10">

        <div class="w-full max-w-md">

            <!-- Card -->
            <div class="overflow-hidden rounded-3xl bg-white shadow-2xl border border-gray-100">

                <!-- Header -->
                <div class="bg-blue-600 px-8 py-10 text-center">

                    <a href="{{ route('home') }}"
                       class="text-3xl font-extrabold tracking-tight text-white">
                        {{ config('app.name') }}
                    </a>

                    <h1 class="mt-4 text-2xl font-bold text-white">
                        Welcome Back
                    </h1>

                    <p class="mt-2 text-sm text-blue-100">
                        Sign in to continue your account
                    </p>
                </div>

                <!-- Body -->
                <div class="px-8 py-8">

                    @if (session('status'))
                        <div class="mb-5 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                        @csrf

                        <!-- Email -->
                        <div>
                            <label for="email"
                                   class="mb-2 block text-sm font-semibold text-gray-700">
                                Email Address
                            </label>

                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                placeholder="you@example.com"
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm shadow-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                            >

                            @error('email')
                                <p class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password"
                                   class="mb-2 block text-sm font-semibold text-gray-700">
                                Password
                            </label>

                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                placeholder="••••••••"
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm shadow-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                            >

                            @error('password')
                                <p class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Remember -->
                        <div class="flex items-center justify-between">

                            <label class="flex items-center gap-2">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                >

                                <span class="text-sm text-gray-600">
                                    Remember me
                                </span>
                            </label>

                            <a href="{{ route('password.request') }}"
                               class="text-sm font-medium text-blue-600 hover:text-blue-700">
                                Forgot Password?
                            </a>

                        </div>

                        <!-- Button -->
                        <button
                            type="submit"
                            class="w-full rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-blue-700 focus:ring-4 focus:ring-blue-200"
                        >
                            Sign In
                        </button>

                    </form>

                    <!-- Divider -->
                    <div class="my-6 flex items-center">
                        <div class="h-px flex-1 bg-gray-200"></div>

                        <span class="px-4 text-sm text-gray-400">
                            OR
                        </span>

                        <div class="h-px flex-1 bg-gray-200"></div>
                    </div>

                    <!-- Social -->
                    <div class="grid grid-cols-2 gap-4">

                        <button
                            class="rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-50"
                        >
                            Google
                        </button>

                        <button
                            class="rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-50"
                        >
                            Facebook
                        </button>

                    </div>

                </div>
            </div>

            <!-- Footer -->
            <div class="mt-6 text-center text-sm text-gray-600">

                Don't have an account?

                <a href="{{ route('register') }}"
                   class="font-semibold text-blue-600 hover:text-blue-700">
                    Sign Up
                </a>

            </div>

        </div>

    </div>

</body>
</html>