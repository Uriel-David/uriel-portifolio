<script setup>
const date = new Date();
const currentYear = date.getFullYear();
</script>

<template>
    <footer class="bg-light-secondary dark:bg-dark-secondary py-12">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row space-y-6 lg:space-y-0 items-center justify-between">
                <div class="flex space-x-6 items-center justify-center">
                    <img class="h-8 w-auto" src="" alt="uriel-portifolio.eu" />
                </div>
                <p class="text-paragraph opacity-80 text-[15px]">
                    &copy; {{ currentYear }} Uriel David All right reserved
                </p>
            </div>
        </div>
    </footer>
</template>