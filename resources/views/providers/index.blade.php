<x-app-layout>
    <x-page-header
        title="Providers"
        subtitle="Jan 1 - Jan 30, 2024"
        :stats="[
            [
                'title' => 'Total Providers',
                'value' => '45',
                'trend' => 12.5,
                'progress' => 75
            ],
            [
                'title' => 'Active',
                'value' => '38',
                'trend' => 8.4,
                'progress' => 85
            ],
            [
                'title' => 'Response Time',
                'value' => '1.2s',
                'trend' => -5.2,
                'progress' => 90
            ],
            [
                'title' => 'Success Rate',
                'value' => '99.2%',
                'trend' => 2.4,
                'progress' => 95
            ]
        ]"
        createButtonText="Add provider" />

    <x-data-table
        :tabs="[
            ['name' => 'All', 'active' => true],
            ['name' => 'Active', 'active' => false],
            ['name' => 'Maintenance', 'active' => false],
            ['name' => 'Inactive', 'active' => false]
        ]"
        :columns="[
            ['name' => 'Provider', 'key' => 'name'],
            ['name' => 'Type', 'key' => 'type'],
            ['name' => 'Region', 'key' => 'region', 'class' => 'text-gray-500'],
            ['name' => 'Status', 'key' => 'status'],
            ['name' => 'Uptime', 'key' => 'uptime'],
            ['name' => 'Last Check', 'key' => 'last_check', 'class' => 'text-gray-500']
        ]"
        :rows="[
            [
                'name' => 'AWS S3',
                'type' => 'Storage',
                'region' => 'us-east-1',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'uptime' => '99.99%',
                'last_check' => '2 minutes ago'
            ],
            [
                'name' => 'Google Cloud',
                'type' => 'Compute',
                'region' => 'europe-west1',
                'status' => ['type' => 'status', 'value' => 'Maintenance', 'class' => 'bg-yellow-100 text-yellow-800'],
                'uptime' => '99.95%',
                'last_check' => '5 minutes ago'
            ],
            [
                'name' => 'Azure CDN',
                'type' => 'CDN',
                'region' => 'asia-east1',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'uptime' => '99.98%',
                'last_check' => '1 minute ago'
            ]
        ]" />
</x-app-layout>