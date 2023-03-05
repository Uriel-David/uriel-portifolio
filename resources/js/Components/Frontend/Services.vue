<script setup>

</script>

<template>
    <section id="services" class="section bg-gradient-light dark:bg-gradient-dark">
        <div class="container mx-auto" v-motion :initial="{ opacity: 0, y: 100, }" :visible="{ opacity: 1, y: 0, }">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My main area of ​​expertise</h2>
                <p class="subtitle text-gray-900 dark:text-gray-400">
                    These are my areas of activity currently and that I have mastery and more expertise including technologies.
                </p>
            </div>
            <div class="grid lg:grid-cols-4 gap-8">
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"
                            />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">Web Design</h4>
                    <p class="dark:text-white">
                        I have skills in the area of ​​UX / UI and screen planning and creation of institutional websites. With experience in projects, using tools like Figma, Storybook, among other web technologies.
                    </p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-24 h-24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">Web Development</h4>
                    <p class="dark:text-white">
                        I have experience using web technologies with PHP, Java, Javascript/Typescript and Go, using the most diverse and current web frameworks, in several projects and companies.
                    </p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-24 h-24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">Mobile Development</h4>
                    <p class="dark:text-white">
                        I have experience in mobile hybrid development, in technologies such as Flutter, React Native and Ionic, although I am not very practical, I also know a little about native development with Kotlin for Android.
                    </p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-24 h-24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">DevOps</h4>
                    <p class="dark:text-white">
                        I have some experience with Cloud technologies such as AWS and GCP, I also deal with server administration and container technologies such as Docker e Ansible, I have little experience but I have solid basic knowledge.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>