<script setup>
</script>

<template>
    <section id="about" class="section bg-gradient-light dark:bg-gradient-dark">
        <div class="container mx-auto" v-motion :initial="{ opacity: 0, y: 100, }" :visible="{ opacity: 1, y: 0, }">
            <div class="flex flex-col xl:flex-row gap-24">
                <img class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl" src="/img/about.jpg" alt="about" />

                <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
                    <div class="flex flex-col">
                        <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                            About Me
                        </h2>
                        <p class="mb-4 text-orange-700 dark:text-accent">
                            Software Engineer and Web Developer
                        </p>
                        <hr class="mb-8 opacity-90 dark:opacity-5" />
                        <p class="mb-8 dark:text-white">
                            I have 5 years of experience in IT, specifically just over 3 years as a developer. I have already worked on projects in several areas, such as Education, Health, Retail, among others. I have partial training in Computer Science and Mathematics, in addition to specific courses in the area of ​​professional training, as a developer and systems/network administrator.<br />
                            <br />
                            Currently living in Europe, I'm working on international projects focusing mainly on web/mobile development, but always looking for new challenges and knowledge.
                        </p>
                    </div>

                    <a href="#contact" class="btn btn-md bg-accent text-light-tail-100">
                        Contact me
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>