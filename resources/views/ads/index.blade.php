<x-app-layout>
    <x-page-header
        title="Ads"
        subtitle="Jan 1 - Jan 30, 2024"
        :stats="[
            [
                'title' => 'Total Ads',
                'value' => '156',
                'trend' => 15.4,
                'progress' => 75
            ],
            [
                'title' => 'Active Campaigns',
                'value' => '24',
                'trend' => 8.2,
                'progress' => 85
            ],
            [
                'title' => 'CTR',
                'value' => '3.2%',
                'trend' => 12.5,
                'progress' => 65
            ],
            [
                'title' => 'Revenue',
                'value' => '$12.5k',
                'trend' => 18.4,
                'progress' => 90
            ]
        ]"
        createButtonText="Create ad"
        createButtonModal="create-ad" />

    <x-data-table
        :tabs="[
            ['name' => 'All', 'active' => true],
            ['name' => 'Active', 'active' => false],
            ['name' => 'Paused', 'active' => false],
            ['name' => 'Completed', 'active' => false],
            ['name' => 'Draft', 'active' => false]
        ]"
        :columns="[
            ['name' => 'Campaign', 'key' => 'campaign'],
            ['name' => 'Type', 'key' => 'type'],
            ['name' => 'Status', 'key' => 'status'],
            ['name' => 'Impressions', 'key' => 'impressions'],
            ['name' => 'Clicks', 'key' => 'clicks'],
            ['name' => 'Budget', 'key' => 'budget', 'class' => 'text-gray-500']
        ]"
        :rows="[
            [
                'campaign' => 'Summer Sale 2024',
                'type' => 'Display',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'impressions' => '45.2k',
                'clicks' => '1,234',
                'budget' => '$5,000'
            ],
            [
                'campaign' => 'New Product Launch',
                'type' => 'Video',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'impressions' => '28.5k',
                'clicks' => '856',
                'budget' => '$3,500'
            ],
            [
                'campaign' => 'Holiday Special',
                'type' => 'Display',
                'status' => ['type' => 'status', 'value' => 'Draft', 'class' => 'bg-gray-100 text-gray-800'],
                'impressions' => '0',
                'clicks' => '0',
                'budget' => '$2,500'
            ]
        ]" />

    <x-create-ad-form />

    @push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('adForm', () => ({
                show: false,
                init() {
                    this.$watch('show', value => {
                        if (value) {
                            document.body.classList.add('overflow-y-hidden');
                        } else {
                            document.body.classList.remove('overflow-y-hidden');
                        }
                    });
                }
            }));
        });

        // Handle create button click
        document.addEventListener('DOMContentLoaded', () => {
            const createButton = document.querySelector('button:contains("Create ad")');
            if (createButton) {
                createButton.addEventListener('click', () => {
                    window.dispatchEvent(new CustomEvent('open-modal', {
                        detail: 'create-ad'
                    }));
                });
            }
        });
    </script>
    @endpush
</x-app-layout>