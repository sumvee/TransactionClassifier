<script setup>
import { ref } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import axios from 'axios';

const file = ref(null);
const message = ref('');

const handleFileUpload = (event) => {
    file.value = event.target.files[0];
};

const uploadCsv = async () => {
    if (!file.value) {
        message.value = 'Please select a file.';
        return;
    }

    const formData = new FormData();
    formData.append('csv_file', file.value);

    try {
        const response = await axios.post('/upload-csv', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        message.value = response.data.message;
    } catch (error) {
        message.value = 'Failed to upload the file.';
    }
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Upload CSV
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div>
                            <form @submit.prevent="uploadCsv">
                                <input type="file" @change="handleFileUpload" accept=".csv" />
                                <button type="submit">Upload</button>
                            </form>
                            <p v-if="message">{{ message }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
