<script setup>
const date = new Date();
const currentYear = date.getFullYear();
</script>

<template>
    <footer class="bg-light-secondary dark:bg-dark-secondary py-12">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row space-y-6 lg:space-y-0 items-center justify-between">
                <div class="flex space-x-6 items-center justify-center">
                    <a href="http://localhost:8000" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
                        &nbsp;&nbsp;
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Uriel David - Software Solutions</span>
                    </a>
                </div>
                <p class="text-gray-900 dark:text-gray-500 opacity-80 text-[15px] md:pb-6 lg:pb-0">
                    &copy; {{ currentYear }} Uriel David All right reserved
                </p>
            </div>
        </div>
    </footer>
</template>
