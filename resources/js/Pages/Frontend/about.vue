<template lang="">
    <Navbar />
    <div>
        {{title}}
    </div>
</template>

<script setup>
import  Navbar from '@/Components/Navbar.vue';

defineProps({
    title: {
            type: String
        }
});
</script>

<script>
export default {
    props: {
        title: {
            type: String
        }
    }
}
</script>