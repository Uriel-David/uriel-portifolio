<script setup>
import Projects from '@/Components/Frontend/Projects.vue'

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My latest work</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, saepe, praesentium, aspernatur dolor temporibus facilis ad cum veritatis itaque quaerat ullam? Beatae voluptates, architecto repellat pariatur dolores enim maxime veniam?
                </p>
            </div>
            <Projects :skills="skills" :projects="projects" />
        </div>
    </section>
</template>