<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import Hero from '@/Components/Frontend/Hero.vue';
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';
import Services from '@/Components/Frontend/Services.vue';
import Contact from '@/Components/Frontend/Contact.vue';

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <Head>
        <title>Uriel David - Software Solutions</title>
        <meta name="title" content="Uriel David - Software Solutions" />
        <meta name="description" content="Site for displaying my portfolio and work for others. On this site you will be able to see my work and skills in more detail, and if you wish, you can hire my services through a contact form or by email." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.uriel-portfolio.com/" />
        <meta property="og:title" content="Uriel David - Software Solutions" />
        <meta property="og:description" content="Site for displaying my portfolio and work for others. On this site you will be able to see my work and skills in more detail, and if you wish, you can hire my services through a contact form or by email." />
        <meta property="og:image" content="https://github.com/Uriel-David.png" />
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://www.uriel-portfolio.com/" />
        <meta property="twitter:title" content="Uriel David - Software Solutions" />
        <meta property="twitter:description" content="Site for displaying my portfolio and work for others. On this site you will be able to see my work and skills in more detail, and if you wish, you can hire my services through a contact form or by email." />
        <meta property="twitter:image" content="https://github.com/Uriel-David.png" />
    </Head>
    <FrontendLayout>
        <Hero />
        <Promote />
        <About />
        <Skills :skills="skills" />
        <Portfolio :skills="skills" :projects="projects" />
        <Services />
        <Contact />
    </FrontendLayout>
</template>
