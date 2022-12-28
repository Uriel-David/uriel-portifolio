<script setup>
</script>

<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
        <div class="container mx-auto" v-motion :initial="{ opacity: 0, y: 100, }" :visible="{ opacity: 1, y: 0, }">
            <div class="flex flex-col xl:flex-row gap-24">
                <img class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl" src="/img/about.jpg" alt="about" />

                <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
                    <div class="flex flex-col">
                        <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                            About Me
                        </h2>
                        <p class="mb-4 text-accent">
                            Software Engineer and Web Developer
                        </p>
                        <hr class="mb-8 opacity-90 dark:opacity-5" />
                        <p class="mb-8">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum debitis, tempore nobis enim eaque odit quisquam ad quos, non officiis, dolore quaerat quae facere ipsam delectus excepturi veniam iste obcaecati? <br />
                            <br />
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic provident, nulla veniam fugiat ea beatae sed reprehenderit harum animi corrupti nostrum eius. Libero quasi ducimus incidunt ipsum laborum, molestias architecto?
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