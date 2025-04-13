<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <!-- Mobile sidebar backdrop -->
        <div x-show="sidebarOpen" class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 lg:hidden"
            x-cloak
            @click="sidebarOpen = false"></div>

        <!-- Sidebar -->
        <aside class="fixed inset-y-0 left-0 z-50 flex w-64 flex-col bg-white shadow-sm"
            x-data="{ sidebarOpen: false }"
            @keydown.window.escape="sidebarOpen = false">
            <!-- Sidebar header -->
            <div class="flex h-16 flex-shrink-0 items-center border-b border-gray-200 px-6">
                <img class="h-8 w-auto" src="{{ asset('images/logo.svg') }}" alt="Logo">
                <span class="ml-3 text-xl font-semibold text-gray-900">Dashboard</span>
            </div>

            <!-- Sidebar content -->
            <nav class="flex flex-1 flex-col overflow-y-auto">
                <div class="flex-1 space-y-1 px-3 py-4">
                    <!-- Dashboard -->
                    <a href="{{ route('dashboard') }}"
                        class="group flex items-center rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900' }}">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 {{ request()->routeIs('dashboard') ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        Dashboard
                    </a>

                    <!-- Projects -->
                    <a href="{{ route('projects.index') }}"
                        class="group flex items-center rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('projects.*') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900' }}">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 {{ request()->routeIs('projects.*') ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        Projects
                    </a>

                    <!-- Settings -->
                    <a href="{{ route('settings') }}"
                        class="group flex items-center rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('settings') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900' }}">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 {{ request()->routeIs('settings') ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Settings
                    </a>
                </div>

                <!-- User menu -->
                <div class="border-t border-gray-200 p-4">
                    <div class="flex items-center gap-3">
                        <img class="h-8 w-8 rounded-full bg-gray-50"
                            src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}">
                        <div class="min-w-0 flex-1">
                            <p class="truncate text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="truncate text-sm text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="rounded-lg p-1 text-gray-400 hover:bg-gray-50 hover:text-gray-500">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="lg:pl-64">
            <div class="min-h-screen bg-gray-50 px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>