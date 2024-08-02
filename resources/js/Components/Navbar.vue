<template>
    <nav class="flex justify-between p-4 bg-gray-200">
    <div class="text-lg">
    Laravel Vue
    </div>
    <ul>
    <li class="nav-item">
    <Link class="text-dark" :href="route('product.index')">Home </Link>
    </li>
    <li class="nav-item">
    <Link class="text-dark" :href="route('about')">About </Link>
    </li>
    </ul>
    </nav>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>