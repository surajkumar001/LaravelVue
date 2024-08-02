<template lang="">
    <FrontendLayout>
    <div class="mt-4 mx-4">
        <Link class="bg-blue-500 text-white py-2 px-5 rounded mb-4 text-dark" :href="route('product.index')">Back </Link>
    </div>
    
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
    
    <form @submit.prevent="saveProduct()">
    <div class="col-span-6">
        <label>Product Name :</label><br>
        <input type="text" v-model="form.name" id="name" />
        <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
    </div>
    <div class="col-span-6">
        <label>Price :</label><br>
        <input type="text" v-model="form.price" id="price" />
        <div v-if="errors.price" class="text-red-500">{{ errors.price }}</div>
    </div>
    <div class="col-span-6">
                <label for="image">Image:</label><br>
                <input type="file" @change="handleFileUpload" id="image" required>
            </div>
    <div class="col-span-6">
    <button type="submit" :disabled="form.processing" class="bg-blue-500 text-white py-2 px-5 rounded mb-4 text-dark">
    Save
    </button>
    </div>
    </form>
    </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';

import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({ errors: Object })

const form = useForm({
      name: '',
      price: '',
      image: null,
    });

const saveProduct =  () => {

    const res = form.post(route('product.store'));
    if(res){
        form.reset();
    }
}
const handleFileUpload = (event) => {
    form.image = event.target.files[0];
}
</script>

<style lang="">

</style>
