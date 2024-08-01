<template lang="">
    <Navbar />
    <div>
        <table>
            <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            </tr>
            <tr v-for="user in users" ::key="user.id" >
            <td>{{user.id}}</td>
            <td>{{user.name}}</td>
            <td>{{user.email}}</td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import Navbar from '@/Components/Navbar.vue';
</script>
<script>
export default {
    props : {
        'users' : Array
    }
}
</script>