<template>
<div>
    <h1>Add New User</h1>
    <form @submit.prevent="submit">
        <div>
            <label for="name">Name</label>
            <input type="text" v-model="form.name" id="name" />
            <div v-if="errors.name">{{ errors.name }}</div>
        </div>

        <button type="submit">Add User</button>
    </form>
</div>
</template>

<script>

import Inertia from '@inertiajs/inertia';
export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: ''
            },
            errors: {}
        };
    },
    methods: {
        submit() {
            Inertia.post('/users', this.form, {
                onError: (errors) => {
                    this.errors = errors;
                }
            });
        }
    },
};
</script>

<style lang="">
    
</style>
