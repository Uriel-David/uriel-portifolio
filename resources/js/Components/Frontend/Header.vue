<script setup>
import { useDark, useToggle } from '@vueuse/core';
import { ref, onMounted } from 'vue';

const scrollBg = ref(false);
const showMobileMenu = ref('false');
const isDark = useDark();
const toggleScreenMode = useToggle(isDark);

const navigations = [
    { name: 'Home', href: '#home' },
    { name: 'About', href: '#about' },
    { name: 'Portfolio', href: '#portfolio' },
    { name: 'Services', href: '#services' },
    { name: 'Contact', href: '#contact' },
]

const setScrollBg = (value) => {
    scrollBg.value = value;
}

onMounted(() => {
    window.addEventListener('scroll', () => {
        return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
    });
});
</script>

<template>
    <nav class="bg-light-primary dark:bg-slate-800 border-gray-200 px-2 sm:px-4 py-2.5 rounded fixed z-20 w-full" :class="{ 'bg-lime-200 dark:bg-gradient-dark-nav': scrollBg, 'bg-light-primary dark:bg-slate-800': !scrollBg }">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="http://localhost:8000" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                </svg>
                &nbsp;&nbsp;
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Uriel David</span>
            </a>

            <button @click="showMobileMenu = !showMobileMenu" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>

            <div class="w-full md:block md:w-auto" :class="{ hidden: showMobileMenu }" id="navbar-default">
                <ul class="flex flex-col p-4 mt-4 border border-light-tail-500 dark:bg-transparent dark:border-dark-navy-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:font-medium md:border-0 ">
                    <li v-for="(navigation, index) in navigations" :key="index">
                        <a :href="navigation.href" class="block py-2 pl-3 pr-4 text-orange-700 dark:text-dark-navy-900 rounded hover:text-orange-900 hover:bg-lime-300 dark:hover:text-white dark:hover:bg-dark-navy-500" aria-current="page">{{ navigation.name }}</a>
                    </li>
                    <button @click="toggleScreenMode()" class="ml-5 mb-1">
                        <svg v-show="isDark" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z"/>
                        </svg>
                        <svg v-show="!isDark" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm0-11a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1Zm0 12a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1ZM4.343 5.757a1 1 0 0 0 1.414-1.414L4.343 2.929a1 1 0 0 0-1.414 1.414l1.414 1.414Zm11.314 8.486a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM4 10a1 1 0 0 0-1-1H1a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1Zm15-1h-2a1 1 0 1 0 0 2h2a1 1 0 0 0 0-2ZM4.343 14.243l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414a1 1 0 0 0-1.414-1.414ZM14.95 6.05a1 1 0 0 0 .707-.293l1.414-1.414a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 .707 1.707Z"/>
                        </svg>
                    </button>
                </ul>
            </div>
        </div>
    </nav>
</template>
