<script setup>
defineProps({
    project: Object,
});
</script>

<template>
    <a :href="project.project_url" target="_blank" class="group flex flex-col items-center text-center cursor-pointer" v-motion :initial="{ opacity: 0, y: 100, }" :enter="{ opacity: 1, y: 0, }">
        <div class="mb-6">
            <img class="rounded-2xl h-56" :src="project.image" :alt="project.name" />
        </div>
        <span class="group-hover:text-light-tail-500 capitalize text-orange-700 dark:text-accent text-sm mb-3">
            Principal Skill: {{ project.skill.name }} | Backend Skill: {{ project.skill_backend }}
        </span>
        <span class="group-hover:text-light-tail-500 capitalize text-orange-700 dark:text-accent text-sm mb-3">
            Frontend Skill: {{ project.skill_frontend }} | DevOps: {{ project.skill_devops }}
        </span>
        <span v-if="project.skill_extra !== 'n/a'" class="group-hover:text-light-tail-500 capitalize text-orange-700 dark:text-accent text-sm mb-3">
            Other Skill: {{ project.skill_extra }}
        </span>
        <h3 class="group-hover:text-light-tail-500 text-2xl font-semibold capitalize mb-3">
            Project Name: {{ project.name }}
        </h3>
        <p class="group-hover:text-light-tail-500 text-lg font-semibold capitalize text-dark-primary dark:text-light-primary mb-3">
            Description: {{ project.description }}
        </p>
    </a>
</template>
