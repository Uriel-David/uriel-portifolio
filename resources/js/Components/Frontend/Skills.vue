<script setup>
defineProps({
    skills: Object,
});
</script>

<template>
    <section class="bg-light-tail-100 dark:bg-dark-navy-500 py-16">
        <div class="container mx-auto">
            <div class="grid grid-col-8 grid-flow-col ml-2 mr-2">
                <div class="flex items-center justify-center" v-for="skill in skills.data" :key="skill.id">
                    <img :src="skill.image" :alt="skill.name" class="lg:h-20 sm:h-16 h-12" />
                </div>
            </div>
        </div>
    </section>
</template>