<x-app-layout>
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
            <p class="text-sm text-gray-500 mt-1">Overview of your system statistics</p>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-4 gap-6 mb-8">
        <!-- Total AI Models -->
        <div class="p-6 border border-gray-200 rounded-lg">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Total AI Models</h3>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <p class="mt-4 text-2xl font-semibold text-gray-900">18</p>
            <p class="mt-1 text-sm font-medium text-green-600">↑ 12% from last month</p>
        </div>

        <!-- Active Providers -->
        <div class="p-6 border border-gray-200 rounded-lg">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Active Providers</h3>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <p class="mt-4 text-2xl font-semibold text-gray-900">5</p>
            <p class="mt-1 text-sm font-medium text-green-600">↑ 2 new this month</p>
        </div>

        <!-- Feedback Rating -->
        <div class="p-6 border border-gray-200 rounded-lg">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Feedback Rating</h3>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
            </div>
            <p class="mt-4 text-2xl font-semibold text-gray-900">4.8</p>
            <p class="mt-1 text-sm font-medium text-green-600">↑ 0.3 from last month</p>
        </div>

        <!-- Active Ads -->
        <div class="p-6 border border-gray-200 rounded-lg">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Active Ads</h3>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2z M15 13l-3 3m0 0l-3-3m3 3V8" />
                </svg>
            </div>
            <p class="mt-4 text-2xl font-semibold text-gray-900">8</p>
            <p class="mt-1 text-sm font-medium text-red-600">↓ 2 fewer than last month</p>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6">
        <!-- Recent Activity -->
        <div class="border border-gray-200 rounded-lg p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-6">Recent Activity</h2>
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="p-2 bg-indigo-50 rounded-lg">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">New AI Model Added</h3>
                        <p class="text-sm text-gray-500">GPT-5 Turbo has been added to the list of available models</p>
                        <p class="mt-1 text-xs text-gray-400">2 hours ago</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="p-2 bg-blue-50 rounded-lg">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">New Provider</h3>
                        <p class="text-sm text-gray-500">Anthropic has been added as a new provider</p>
                        <p class="mt-1 text-xs text-gray-400">1 day ago</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="p-2 bg-yellow-50 rounded-lg">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">New Feedback</h3>
                        <p class="text-sm text-gray-500">5 new feedback entries were received</p>
                        <p class="mt-1 text-xs text-gray-400">2 days ago</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="p-2 bg-pink-50 rounded-lg">
                            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2z M15 13l-3 3m0 0l-3-3m3 3V8" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">Ad Campaign Updated</h3>
                        <p class="text-sm text-gray-500">Summer campaign has been updated with new creatives</p>
                        <p class="mt-1 text-xs text-gray-400">1 week ago</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top AI Models -->
        <div class="border border-gray-200 rounded-lg p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-6">Top AI Models</h2>
            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center text-sm font-medium text-yellow-900">1</div>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">GPT-4 Turbo</h3>
                            <p class="text-xs text-gray-500">Text Generation</p>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-gray-900">4.9</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-sm font-medium text-gray-900">2</div>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">DALL-E 3</h3>
                            <p class="text-xs text-gray-500">Image Generation</p>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-gray-900">4.7</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center text-sm font-medium text-yellow-900">3</div>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Claude 3</h3>
                            <p class="text-xs text-gray-500">Text & Code</p>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-gray-900">4.6</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center text-sm font-medium text-yellow-900">4</div>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Midjourney V6</h3>
                            <p class="text-xs text-gray-500">Image Generation</p>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-gray-900">4.5</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>