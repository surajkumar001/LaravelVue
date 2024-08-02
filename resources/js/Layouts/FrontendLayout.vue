<!-- resources/js/Layouts/FrontendLayout.vue -->
<script setup>
import Navbar from '@/Components/Navbar.vue'; // Import Navbar component
</script>

<template>
        <Navbar /> <!-- Use Navbar component -->
        <slot />   <!-- Slot for content -->
</template>

<style scoped>
/* Add component-specific styles here if needed */
</style>
