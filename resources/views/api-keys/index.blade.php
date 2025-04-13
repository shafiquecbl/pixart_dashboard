<x-app-layout>
    <x-page-header
        title="API Keys"
        subtitle="Jan 1 - Jan 30, 2024"
        :stats="[
            [
                'title' => 'Total API Keys',
                'value' => '45',
                'trend' => 15.2,
                'progress' => 75
            ],
            [
                'title' => 'Active Keys',
                'value' => '38',
                'trend' => 10.5,
                'progress' => 65
            ],
            [
                'title' => 'API Calls Today',
                'value' => '2,845',
                'trend' => 18.4,
                'progress' => 85
            ],
            [
                'title' => 'Failed Calls',
                'value' => '12',
                'trend' => -5.2,
                'progress' => 15
            ]
        ]"
        createButtonText="Generate key" />

    <x-data-table
        :tabs="[
            ['name' => 'All', 'active' => true],
            ['name' => 'Active', 'active' => false],
            ['name' => 'Expired', 'active' => false],
            ['name' => 'Revoked', 'active' => false]
        ]"
        :columns="[
            ['name' => 'Name', 'key' => 'name'],
            ['name' => 'Key', 'key' => 'key', 'class' => 'text-gray-500'],
            ['name' => 'Status', 'key' => 'status'],
            ['name' => 'Created', 'key' => 'created', 'class' => 'text-gray-500'],
            ['name' => 'Last Used', 'key' => 'last_used', 'class' => 'text-gray-500'],
            ['name' => 'Calls', 'key' => 'calls']
        ]"
        :rows="[
            [
                'name' => 'Production API Key',
                'key' => 'sk_prod_...3fa8',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'created' => 'Jan 15, 2024',
                'last_used' => '2 minutes ago',
                'calls' => '1,234'
            ],
            [
                'name' => 'Development API Key',
                'key' => 'sk_dev_...9b2c',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'created' => 'Jan 12, 2024',
                'last_used' => '5 minutes ago',
                'calls' => '856'
            ],
            [
                'name' => 'Test API Key',
                'key' => 'sk_test_...7d4e',
                'status' => ['type' => 'status', 'value' => 'Expired', 'class' => 'bg-red-100 text-red-800'],
                'created' => 'Jan 10, 2024',
                'last_used' => '5 days ago',
                'calls' => '234'
            ]
        ]" />
</x-app-layout>