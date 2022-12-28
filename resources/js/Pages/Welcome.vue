<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import Hero from '@/Components/Frontend/Hero.vue';
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <Head title="Welcome to Portifolio" />
    <FrontendLayout>
        <!-- Hero primary -->
        <Hero />
        <!-- promote tail-100 -->
        <Promote />
        <!--- About secondary -->
        <About />
        <!-- Skills tail-100 -->
        <Skills :skills="skills" />
        <!-- Portifolio primary -->
        <Portfolio :skills="skills" :projects="projects" />
        <!-- Services secondary -->
        <!-- Contact primary -->
    </FrontendLayout>
</template>
