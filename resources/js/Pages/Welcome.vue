<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import Hero from '@/Components/Frontend/Hero.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome to Portifolio" />
    <FrontendLayout>
        <!-- Hero primary -->
        <Hero />
        <!-- promote tail-100 -->
        <!--- About secondary -->
        <!-- Skills tail-100 -->
        <!-- Portifolio primary -->
        <!-- Services secondary -->
        <!-- Contact primary -->
    </FrontendLayout>
</template>
