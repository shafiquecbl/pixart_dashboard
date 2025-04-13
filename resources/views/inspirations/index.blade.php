<x-app-layout>
    <x-page-header
        title="Inspirations"
        subtitle="Jan 1 - Jan 30, 2024"
        :stats="[
            [
                'title' => 'Total Inspirations',
                'value' => '2,456',
                'trend' => 15.8,
                'progress' => 85
            ],
            [
                'title' => 'Unique Views',
                'value' => '12.5k',
                'trend' => 22.4,
                'progress' => 90
            ],
            [
                'title' => 'Avg. Time',
                'value' => '3.2m',
                'trend' => 8.6,
                'progress' => 75
            ],
            [
                'title' => 'Save Rate',
                'value' => '45%',
                'trend' => -2.5,
                'progress' => 45
            ]
        ]"
        createButtonText="Add inspiration" />

    <x-data-table
        :tabs="[
            ['name' => 'All', 'active' => true],
            ['name' => 'Featured', 'active' => false],
            ['name' => 'Popular', 'active' => false],
            ['name' => 'Recent', 'active' => false],
            ['name' => 'Archived', 'active' => false]
        ]"
        :columns="[
            ['name' => 'Title', 'key' => 'title'],
            ['name' => 'Category', 'key' => 'category'],
            ['name' => 'Author', 'key' => 'author', 'class' => 'text-gray-500'],
            ['name' => 'Status', 'key' => 'status'],
            ['name' => 'Views', 'key' => 'views'],
            ['name' => 'Created', 'key' => 'created', 'class' => 'text-gray-500']
        ]"
        :rows="[
            [
                'title' => 'Modern Living Room Design',
                'category' => 'Interior',
                'author' => 'Sarah Johnson',
                'status' => ['type' => 'status', 'value' => 'Featured', 'class' => 'bg-purple-100 text-purple-800'],
                'views' => '1.2k',
                'created' => '2 hours ago'
            ],
            [
                'title' => 'Minimalist Kitchen Setup',
                'category' => 'Interior',
                'author' => 'John Smith',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'views' => '856',
                'created' => '1 day ago'
            ],
            [
                'title' => 'Urban Garden Ideas',
                'category' => 'Outdoor',
                'author' => 'Mike Brown',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'views' => '645',
                'created' => '2 days ago'
            ]
        ]" />
</x-app-layout>