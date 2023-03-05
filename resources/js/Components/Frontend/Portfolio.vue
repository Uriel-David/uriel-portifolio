<script setup>
import Projects from '@/Components/Frontend/Projects.vue'

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <section id="portfolio" class="section bg-gradient-light dark:bg-gradient-dark min-h-[1400px]">
        <div class="container mx-auto" v-motion :initial="{ opacity: 0, y: 100, }" :visible="{ opacity: 1, y: 0, }">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My latest work</h2>
                <p class="subtitle text-gray-900 dark:text-gray-500">
                    These are my main projects and jobs in more recent companies.
                </p>
            </div>
            <Projects :skills="skills" :projects="projects" />
        </div>
    </section>
</template>