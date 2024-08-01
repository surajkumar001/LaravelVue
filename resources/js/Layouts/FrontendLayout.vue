<!-- resources/js/Layouts/FrontendLayout.vue -->
<script setup>
import Navbar from '@/Components/Navbar.vue'; // Import Navbar component
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <Navbar /> <!-- Use Navbar component -->
        <slot />   <!-- Slot for content -->
    </div>
</template>

<style scoped>
/* Add component-specific styles here if needed */
</style>
