<script setup>
import {Head, Link} from '@inertiajs/vue3';
import Register from "@/Pages/Auth/Register.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
</script>

<template>

    <div class="h-screen bg-image ">
        <Head title="Welcome"/>

        <div class=" mx-auto text-2xl text-center content-center border-2 rounded-full w-32 h-12">
            <Link :href="route('auth')" class=""> Posts</Link>
        </div>
    </div>
</template>

<style scoped>
</style>
