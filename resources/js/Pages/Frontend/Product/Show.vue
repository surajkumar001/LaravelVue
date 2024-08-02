<template lang="">
    <FrontendLayout>
    <div class="mt-4 mx-4">
        <Link class="bg-blue-500 text-white py-2 px-5 rounded mb-4 text-dark" :href="route('product.index')">Back </Link>
    </div>
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">

    <div class="col-span-6">
        <img :src="`/storage/${product.image}`" alt="Uploaded Image">
    </div>
    <div class="col-span-6">
        <label><b>Product Name</b></label><br>
        {{product.name}}
    </div>
    <div class="col-span-6">
        <label><b>Product Price</b></label><br>
       {{product.price}}
    </div>
    </div>
    
</FrontendLayout>
</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';

import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({ 
errors: Object,
product: Object 

});



</script>

<style lang="">

</style>
