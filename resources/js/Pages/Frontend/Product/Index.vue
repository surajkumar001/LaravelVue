<template lang="">
    
    <div class="mt-4 mx-4">
        <Link class="px-2 oy-1 text-sm bg-blue-300 text-dark me-2 mb-10 rounded inline-block" :href="route('product.create')">Product Create </Link>
    </div>

    <table class="w-full bg-white border border-gray-200 shadow">
        <thead>
            <tr>
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">Name</th>
                <th class="py-2 px-4 border">Price</th>
                <th class="py-2 px-4 border">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="product in products" :key="product.id">
                <td class="py-2 px-4 border">{{ product.id }}</td>
                <td class="py-2 px-4 border">{{ product.name }}</td>
                <td class="py-2 px-4 border">{{ product.price }}</td>
                <td class="py-2 px-4 border">
                <Link class="px-2 oy-1 text-sm bg-blue-300 text-dark me-2 rounded inline-block" :href="route('product.show',product.id)">Show </Link>
                <Link class="px-2 oy-1 text-sm bg-green-300 text-dark me-2 rounded inline-block" :href="route('product.edit',product.id)">Edit </Link>

                
                <button type="submit" class="bg-red-500 text-white py-2 px-5 rounded mb-4 text-dark"
                @click="deleteProduct(product.id)">
                Delete
                </button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>

import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    products : Array,
});

const form = useForm({});

const deleteProduct = (productId) => {

    if(confirm ('Are you sure ?')){
        form.delete(route('product.destroy',productId));
    }

};

</script>
<style lang="">
    
</style>