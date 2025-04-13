<x-app-layout>
    <x-page-header
        title="Users"
        subtitle="Jan 1 - Jan 30, 2024"
        :stats="[
            [
                'title' => 'Total Users',
                'value' => '1,234',
                'trend' => 12.5,
                'progress' => 75
            ],
            [
                'title' => 'Active Users',
                'value' => '892',
                'trend' => 8.2,
                'progress' => 65
            ],
            [
                'title' => 'New Signups',
                'value' => '48',
                'trend' => -2.4,
                'progress' => 15
            ],
            [
                'title' => 'Premium Users',
                'value' => '156',
                'trend' => 5.6,
                'progress' => 45
            ]
        ]"
        createButtonText="Add user" />

    <x-data-table
        :tabs="[
            ['name' => 'All', 'active' => true],
            ['name' => 'Active', 'active' => false],
            ['name' => 'Inactive', 'active' => false],
            ['name' => 'Pending', 'active' => false],
            ['name' => 'Blocked', 'active' => false]
        ]"
        :columns="[
            ['name' => 'Name', 'key' => 'name'],
            ['name' => 'Email', 'key' => 'email', 'class' => 'text-gray-500'],
            ['name' => 'Role', 'key' => 'role'],
            ['name' => 'Status', 'key' => 'status'],
            ['name' => 'Last Active', 'key' => 'last_active', 'class' => 'text-gray-500'],
            ['name' => 'Joined', 'key' => 'joined', 'class' => 'text-gray-500']
        ]"
        :rows="[
            [
                'name' => 'John Smith',
                'email' => 'john@example.com',
                'role' => 'Admin',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'last_active' => '2 minutes ago',
                'joined' => 'Jan 15, 2024'
            ],
            [
                'name' => 'Sarah Johnson',
                'email' => 'sarah@example.com',
                'role' => 'Editor',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'last_active' => '5 minutes ago',
                'joined' => 'Jan 12, 2024'
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael@example.com',
                'role' => 'User',
                'status' => ['type' => 'status', 'value' => 'Inactive', 'class' => 'bg-gray-100 text-gray-800'],
                'last_active' => '2 days ago',
                'joined' => 'Jan 10, 2024'
            ]
        ]" />
</x-app-layout>