<template lang="">
    <h2>Product </h2>
    <div class="mt-4 mx-4">
        <Link class="text-dark" :href="route('product.index')">Back </Link>
    </div>
    
    <form @submit.prevent="updateProduct()">
    <div class="col-span-6">
        <label>Product Name</label>
        <input type="text" v-model="form.name" id="name" />
        <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
    </div>
    <div class="col-span-6">
        <label>Product Price</label>
        <input type="text" v-model="form.price" id="price" />
        <div v-if="errors.price" class="text-red-500">{{ errors.price }}</div>
    </div>
    <div class="col-span-6">
    <button type="submit" :disabled="form.processing" class="bg-blue-500 text-white py-2 px-5 rounded mb-4 text-dark">
    Update
    </button>
    </div>
    </form>
</template>

<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({ 
    errors: Object,
    product : Object
 })

const form = useForm({
      name: props.product.name,
      price: props.product.price,
      
    });

const updateProduct =  () => {

    const res = form.put(route('product.update',props.product.id));
    if(res){
        form.reset();
    }
}
</script>

<style lang="">

</style>
