<template lang="">
    <div class="mt-4 mx-4">
        <Link class="text-dark" :href="route('product.index')">Back </Link>
    </div>
    
    <form @submit.prevent="saveProduct()">
    <div class="col-span-6">
        <label>Product Name</label>
        {{product.name}}
    </div>
    <div class="col-span-6">
        <label>Product Price</label>
       {{product.price}}
    </div>
   
    </form>
</template>

<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({ 
errors: Object,
product: Object 

})

const form = useForm({
      name: '',
      price: '',
      
    });

</script>

<style lang="">

</style>
