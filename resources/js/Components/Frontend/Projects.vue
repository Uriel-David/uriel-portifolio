<script setup>
import Project from '@/Components/Frontend/Project.vue'
import { ref } from 'vue';

const props = defineProps({
    skills: Object,
    projects: Object,
});

const filteredProjects = ref(props.projects.data);
const selectedSkill = ref('all');

const filterProjects = (id) => {
    if (id === 'all') {
        filteredProjects.value = props.projects.data;
        selectedSkill.value = id;
    } else {
        filteredProjects.value = props.projects.data.filter(project => {
            return project.skill.id === id;
        });
        selectedSkill.value = id;
    }
};
</script>

<template>
    <div class="container mx-auto">
        <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100 max-w-full">
            <ul class="flex flex-wrap lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize mt-4 mb-4">
                    <button @click="filterProjects('all')" class="flex text-center px-4 py-2 hover:bg-accent text-white rounded-md" :class="[selectedSkill === 'all' ? 'bg-accent': 'bg-light-tail-500 dark:bg-dark-navy-100',]">
                        All
                    </button>
                </li>
                <li class="cursor-pointer capitalize mt-4 mb-4" v-for="projectSkill in skills.data" :class="[!projectSkill.hide ? 'hidden' : '']" :key="projectSkill.id">
                    <button @click="filterProjects(projectSkill.id)" class="flex text-center px-4 py-2 hover:bg-accent text-white rounded-md" :class="[selectedSkill == projectSkill.id ? 'bg-accent': 'bg-light-tail-500 dark:bg-dark-navy-100',]">
                        {{ projectSkill.name }}
                    </button>
                </li>
            </ul>
        </nav>
        <section class="lg:grid lg:gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project v-for="project in filteredProjects" :key="project.id" :project="project" />
        </section>
    </div>
</template>
