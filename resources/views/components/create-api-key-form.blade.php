@props(['show' => false])

<x-modal name="create-api-key" :show="$show" maxWidth="2xl">
    <div class="py-6">
        <div class="px-3">
            <h2 class="text-lg font-medium text-gray-900">Create New API Key</h2>
            <p class="mt-1 text-sm text-gray-500">Fill in the details below to create a new API key.</p>
        </div>

        <form
            x-data="{
                submitting: false,
                submitForm() {
                    this.submitting = true;
                    const form = this.$el;
                    const formData = new FormData(form);

                    // Here you would typically make an AJAX request to your backend
                    console.log('Form submitted with data:', Object.fromEntries(formData));

                    // Simulate API call
                    setTimeout(() => {
                        this.submitting = false;
                        this.$dispatch('close-modal', 'create-api-key');
                    }, 1000);
                }
            }"
            @submit.prevent="submitForm"
            class="mt-6">
            <div class="space-y-6 px-3">
                <div>
                    <x-input-label for="name" value="Name" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="api_key" value="API Key" />
                    <x-text-input id="api_key" name="api_key" type="text" class="mt-1 block w-full" required />
                    <x-input-error :messages="$errors->get('api_key')" class="mt-2" />
                </div>


                <div>
                    <x-input-label for="status" value="Status" />
                    <select id="status" name="status" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div>



                <div class="mt-8 flex items-center justify-end space-x-3 px-3 pt-6 pb-2">
                    <x-secondary-button
                        type="button"
                        x-on:click="$dispatch('close-modal', 'create-api-key')">
                        Cancel
                    </x-secondary-button>
                    <x-primary-button
                        type="submit"
                        x-bind:disabled="submitting">
                        <span x-show="!submitting">Create API Key</span>
                        <span x-show="submitting" class="inline-flex items-center">
                            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Creating...
                        </span>
                    </x-primary-button>
                </div>
        </form>
    </div>
</x-modal>