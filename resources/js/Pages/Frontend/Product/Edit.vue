<template>
    <FrontendLayout>
        <div class="mt-4 mx-4">
            <Link class="bg-blue-500 text-white py-2 px-5 rounded mb-4 text-dark" :href="route('product.index')">Back</Link>
        </div>
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
            <form @submit.prevent="updateProduct">
                <div class="col-span-6">
                    <label>Product Name</label><br>
                    <input type="text" v-model="form.name" id="name" />
                    <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                </div>
                <div class="col-span-6">
                    <label>Price</label><br>
                    <input type="text" v-model="form.price" id="price" />
                    <div v-if="errors.price" class="text-red-500">{{ errors.price }}</div>
                </div>
                <div class="col-span-6">
                    <label for="image">Image:</label><br>
                    <input type="file" @change="handleFileUpload" id="image">
                </div>
                <div class="col-span-6">
                    <button type="submit" :disabled="form.processing" class="bg-blue-500 text-white py-2 px-5 rounded mb-4 text-dark">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Link, useForm } from '@inertiajs/vue3';

const props = defineProps({ 
    errors: Object,
    product: Object
});

const form = useForm({
    name: props.product.name,
    price: props.product.price,
    image: null,      
});

const handleFileUpload = (event) => {
    form.image = event.target.files[0];
};

const updateProduct = () => {
    const formData = new FormData();
    formData.append('name', form.name);
    formData.append('price', form.price);
    if (form.image) {
        formData.append('image', form.image);
    }
    formData.append('_method', 'PUT');

    form.post(route('product.update', props.product.id), {
        data: formData,
        headers: {
            'Content-Type': 'multipart/form-data'
        },
        onSuccess: () => form.reset(),
        onError: errors => console.log(errors)
    });
};
</script>

<style scoped>
/* Add any styles you need for your component here */
</style>
