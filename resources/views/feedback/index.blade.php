<x-app-layout>
    <x-page-header
        title="Feedback"
        subtitle="Jan 1 - Jan 30, 2024"
        :stats="[
            [
                'title' => 'Total Feedback',
                'value' => '856',
                'trend' => 12.8,
                'progress' => 75
            ],
            [
                'title' => 'Average Rating',
                'value' => '4.8',
                'trend' => 5.2,
                'progress' => 90
            ],
            [
                'title' => 'Response Rate',
                'value' => '92%',
                'trend' => 8.4,
                'progress' => 85
            ],
            [
                'title' => 'Resolution Time',
                'value' => '4.2h',
                'trend' => -12.5,
                'progress' => 65
            ]
        ]"
        createButtonText="Add feedback" />

    <x-data-table
        :tabs="[
            ['name' => 'All', 'active' => true],
            ['name' => 'New', 'active' => false],
            ['name' => 'In Progress', 'active' => false],
            ['name' => 'Resolved', 'active' => false],
            ['name' => 'Archived', 'active' => false]
        ]"
        :columns="[
            ['name' => 'Subject', 'key' => 'subject'],
            ['name' => 'User', 'key' => 'user', 'class' => 'text-gray-500'],
            ['name' => 'Category', 'key' => 'category'],
            ['name' => 'Status', 'key' => 'status'],
            ['name' => 'Rating', 'key' => 'rating'],
            ['name' => 'Submitted', 'key' => 'submitted', 'class' => 'text-gray-500']
        ]"
        :rows="[
            [
                'subject' => 'Image quality feedback',
                'user' => 'john@example.com',
                'category' => 'Quality',
                'status' => ['type' => 'status', 'value' => 'New', 'class' => 'bg-blue-100 text-blue-800'],
                'rating' => '5/5',
                'submitted' => '2 hours ago'
            ],
            [
                'subject' => 'UI improvement suggestion',
                'user' => 'sarah@example.com',
                'category' => 'UI/UX',
                'status' => ['type' => 'status', 'value' => 'In Progress', 'class' => 'bg-yellow-100 text-yellow-800'],
                'rating' => '4/5',
                'submitted' => '1 day ago'
            ],
            [
                'subject' => 'Performance issue',
                'user' => 'mike@example.com',
                'category' => 'Performance',
                'status' => ['type' => 'status', 'value' => 'Resolved', 'class' => 'bg-green-100 text-green-800'],
                'rating' => '3/5',
                'submitted' => '2 days ago'
            ]
        ]" />
</x-app-layout>