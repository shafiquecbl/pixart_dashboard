<x-app-layout>
    <x-page-header
        title="Pages"
        subtitle="Jan 1 - Jan 30, 2024"
        :stats="[
            [
                'title' => 'Total Pages',
                'value' => '124',
                'trend' => 8.5,
                'progress' => 75
            ],
            [
                'title' => 'Published',
                'value' => '98',
                'trend' => 12.4,
                'progress' => 85
            ],
            [
                'title' => 'Avg. Load Time',
                'value' => '0.8s',
                'trend' => -15.2,
                'progress' => 90
            ],
            [
                'title' => 'Bounce Rate',
                'value' => '32%',
                'trend' => -8.4,
                'progress' => 65
            ]
        ]"
        createButtonText="Create page" />

    <x-data-table
        :tabs="[
            ['name' => 'All', 'active' => true],
            ['name' => 'Published', 'active' => false],
            ['name' => 'Drafts', 'active' => false],
            ['name' => 'Archived', 'active' => false]
        ]"
        :columns="[
            ['name' => 'Title', 'key' => 'title'],
            ['name' => 'URL', 'key' => 'url', 'class' => 'text-gray-500'],
            ['name' => 'Author', 'key' => 'author', 'class' => 'text-gray-500'],
            ['name' => 'Status', 'key' => 'status'],
            ['name' => 'Views', 'key' => 'views'],
            ['name' => 'Last Updated', 'key' => 'updated', 'class' => 'text-gray-500']
        ]"
        :rows="[
            [
                'title' => 'Homepage',
                'url' => '/home',
                'author' => 'John Smith',
                'status' => ['type' => 'status', 'value' => 'Published', 'class' => 'bg-green-100 text-green-800'],
                'views' => '15.2k',
                'updated' => '2 hours ago'
            ],
            [
                'title' => 'About Us',
                'url' => '/about',
                'author' => 'Sarah Johnson',
                'status' => ['type' => 'status', 'value' => 'Published', 'class' => 'bg-green-100 text-green-800'],
                'views' => '8.5k',
                'updated' => '1 day ago'
            ],
            [
                'title' => 'New Features',
                'url' => '/features',
                'author' => 'Mike Brown',
                'status' => ['type' => 'status', 'value' => 'Draft', 'class' => 'bg-yellow-100 text-yellow-800'],
                'views' => '0',
                'updated' => '5 hours ago'
            ]
        ]" />
</x-app-layout>