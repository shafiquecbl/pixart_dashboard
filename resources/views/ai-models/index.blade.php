<x-app-layout>
    <x-page-header
        title="AI Models"
        subtitle="Jan 1 - Jan 30, 2024"
        :stats="[
            [
                'title' => 'Total Models',
                'value' => '24',
                'trend' => 8.5,
                'progress' => 75
            ],
            [
                'title' => 'Active Models',
                'value' => '18',
                'trend' => 12.3,
                'progress' => 85
            ],
            [
                'title' => 'Inference Time',
                'value' => '1.2s',
                'trend' => -15.4,
                'progress' => 65
            ],
            [
                'title' => 'Success Rate',
                'value' => '98.5%',
                'trend' => 2.1,
                'progress' => 95
            ]
        ]"
        createButtonText="Add model" />

    <x-data-table
        :tabs="[
            ['name' => 'All', 'active' => true],
            ['name' => 'Active', 'active' => false],
            ['name' => 'Training', 'active' => false],
            ['name' => 'Archived', 'active' => false]
        ]"
        :columns="[
            ['name' => 'Model Name', 'key' => 'name'],
            ['name' => 'Version', 'key' => 'version', 'class' => 'text-gray-500'],
            ['name' => 'Type', 'key' => 'type'],
            ['name' => 'Status', 'key' => 'status'],
            ['name' => 'Last Updated', 'key' => 'updated', 'class' => 'text-gray-500'],
            ['name' => 'Accuracy', 'key' => 'accuracy']
        ]"
        :rows="[
            [
                'name' => 'Image Generator v3',
                'version' => '3.2.1',
                'type' => 'Stable Diffusion',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'updated' => '2 hours ago',
                'accuracy' => '98.5%'
            ],
            [
                'name' => 'Text Classifier',
                'version' => '2.1.0',
                'type' => 'BERT',
                'status' => ['type' => 'status', 'value' => 'Training', 'class' => 'bg-yellow-100 text-yellow-800'],
                'updated' => '1 day ago',
                'accuracy' => '95.2%'
            ],
            [
                'name' => 'Object Detector',
                'version' => '1.5.2',
                'type' => 'YOLO',
                'status' => ['type' => 'status', 'value' => 'Active', 'class' => 'bg-green-100 text-green-800'],
                'updated' => '5 days ago',
                'accuracy' => '94.8%'
            ]
        ]" />
</x-app-layout>