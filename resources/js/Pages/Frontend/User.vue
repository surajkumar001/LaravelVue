<template lang="">
    <Navbar />
    <div>
      <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import  Navbar from '@/Components/Navbar.vue';

</script>

<script>
export default {
    props: {
        users: Array // Define the prop to receive the data
    }
}
</script>
