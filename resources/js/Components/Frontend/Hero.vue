<script setup>
</script>

<template>
    <section id="home" class="lg:h-[85vh] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden">
        <div class="container mx-auto h-full" v-motion :initial="{ opacity: 0, y: 100, }" :enter="{ opacity: 1, y: 0, }">
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">Hey, I'm Uriel! 👋</p>
                    <h1 class="text-4xl leading-[44px] md:text-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]">
                        I Build & Design <br /> Web Apps.
                    </h1>
                    <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui ab dolore non consequuntur neque culpa labore id ullam quidem dolorum aliquid repudiandae dolor doloribus numquam, illo sapiente, sequi maiores voluptates.
                    </p>
                    <button class="btn btn-md bg-accent hover:bg-light-secondary hover:text-light-tail-500 dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100 md:btn-lg transition-all">
                        Work with me
                    </button>
                    <h5 class="text-lg flex justify-center lg:justify-start items-center text-black dark:text-white mb-2">Follow me on</h5>
                    <div class="flex ml-4 md:ml-0 items-center mb-6">
                        <a
                            class="
                            w-12
                            h-12
                            rounded-full
                            flex
                            items-center
                            justify-center
                            border border-white
                            text-black
                            dark:text-white
                            hover:bg-light-secondary hover:border-light-secondary
                            dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                            mr-3
                            sm:mr-4
                            "
                            href="https://twitter.com/UriZinrax"
                        >
                            <svg
                            width="16"
                            height="12"
                            viewBox="0 0 16 12"
                            class="fill-current"
                            >
                            <path
                                d="M14.2194 2.06654L15.2 0.939335C15.4839 0.634051 15.5613 0.399217 15.5871 0.2818C14.8129 0.704501 14.0903 0.845401 13.6258 0.845401H13.4452L13.3419 0.751468C12.7226 0.258317 11.9484 0 11.1226 0C9.31613 0 7.89677 1.36204 7.89677 2.93542C7.89677 3.02935 7.89677 3.17025 7.92258 3.26419L8 3.73386L7.45806 3.71037C4.15484 3.61644 1.44516 1.03327 1.00645 0.587084C0.283871 1.76125 0.696774 2.88845 1.13548 3.59296L2.0129 4.90802L0.619355 4.20352C0.645161 5.18982 1.05806 5.96477 1.85806 6.52838L2.55484 6.99804L1.85806 7.25636C2.29677 8.45401 3.27742 8.94716 4 9.13503L4.95484 9.36986L4.05161 9.93346C2.60645 10.8728 0.8 10.8024 0 10.7319C1.62581 11.7652 3.56129 12 4.90323 12C5.90968 12 6.65806 11.9061 6.83871 11.8356C14.0645 10.2857 14.4 4.41487 14.4 3.2407V3.07632L14.5548 2.98239C15.4323 2.23092 15.7935 1.8317 16 1.59687C15.9226 1.62035 15.8194 1.66732 15.7161 1.6908L14.2194 2.06654Z"
                            />
                            </svg>
                        </a>
                        <a
                            class="
                            w-12
                            h-12
                            rounded-full
                            flex
                            items-center
                            justify-center
                            border border-white
                            text-black
                            dark:text-white
                            hover:bg-light-secondary hover:border-light-secondary
                            dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                            mr-3
                            sm:mr-4
                            "
                            href="https://www.linkedin.com/in/uriel-david/"
                        >
                            <svg
                            width="14"
                            height="14"
                            viewBox="0 0 14 14"
                            class="fill-current"
                            >
                            <path
                                d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z"
                            />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="lg:flex flex-1 justify-end items-center h-full mt-8 md:mt-0">
                    <img src="/img/hero.jpg" alt="Hero" class="rounded-lg" />
                </div>
            </div>
        </div>
    </section>
</template>