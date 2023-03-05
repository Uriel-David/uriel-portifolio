<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    skills: Array,
    project: Object,
});

const form = useForm({
    name: props.project?.name,
    description: props.project?.description,
    image: null,
    skill_id: props.project?.skill_id,
    skill_backend: props.project?.skill_backend,
    skill_frontend: props.project?.skill_frontend,
    skill_devops: props.project?.skill_devops,
    skill_extra: props.project?.skill_extra,
    project_url: props.project?.project_url,
});

const submit = () => {
    Inertia.post(`/projects/${props.project.id}`, {
        _method: "put",
        name: form.name,
        description: form.description,
        image: form.image,
        skill_id: form.skill_id,
        skill_backend: form.skill_backend,
        skill_frontend: form.skill_frontend,
        skill_devops: form.skill_devops,
        skill_extra: form.skill_extra,
        project_url: form.project_url
    });
};
</script>

<template>
    <Head title="Edit Project" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Project</h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="skill_id" value="Skill" />

                        <select
                            v-model="form.skill_id"
                            id="skill_id"
                            name="skill_id"
                            class="
                                mt-1
                                block
                                w-full
                                pl-3
                                pr-10
                                py-2
                                text-base
                                border-gray-300
                                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
                                sm:text-sm
                                rounded-md
                            ">
                            <option v-for="skill in skills" :key="skill.id" :value="skill.id">{{ skill.name }}</option>
                        </select>

                        <InputError class="mt-2" :message="$page.props.errors.skill_id" />
                    </div>

                    <div>
                        <InputLabel for="skill_backend" value="Skill - Backend" />

                        <select
                            v-model="form.skill_backend"
                            id="skill_backend"
                            name="skill_backend"
                            class="
                                mt-1
                                block
                                w-full
                                pl-3
                                pr-10
                                py-2
                                text-base
                                border-gray-300
                                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
                                sm:text-sm
                                rounded-md
                            ">
                            <option key="n/a" value="n/a">n/a</option>
                            <option v-for="skill in skills" :key="skill.id" :value="skill.name">{{ skill.name }}</option>
                        </select>
                    </div>

                    <div>
                        <InputLabel for="skill_frontend" value="Skill - Frontend" />

                        <select
                            v-model="form.skill_frontend"
                            id="skill_frontend"
                            name="skill_frontend"
                            class="
                                mt-1
                                block
                                w-full
                                pl-3
                                pr-10
                                py-2
                                text-base
                                border-gray-300
                                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
                                sm:text-sm
                                rounded-md
                            ">
                            <option key="n/a" value="n/a">n/a</option>
                            <option v-for="skill in skills" :key="skill.id" :value="skill.name">{{ skill.name }}</option>
                        </select>
                    </div>

                    <div>
                        <InputLabel for="skill_devops" value="Skill - DevOps" />

                        <select
                            v-model="form.skill_devops"
                            id="skill_devops"
                            name="skill_devops"
                            class="
                                mt-1
                                block
                                w-full
                                pl-3
                                pr-10
                                py-2
                                text-base
                                border-gray-300
                                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
                                sm:text-sm
                                rounded-md
                            ">
                            <option key="n/a" value="n/a">n/a</option>
                            <option v-for="skill in skills" :key="skill.id" :value="skill.name">{{ skill.name }}</option>
                        </select>
                    </div>

                    <div>
                        <InputLabel for="skill_extra" value="Skill - Extra" />

                        <select
                            v-model="form.skill_extra"
                            id="skill_extra"
                            name="skill_extra"
                            class="
                                mt-1
                                block
                                w-full
                                pl-3
                                pr-10
                                py-2
                                text-base
                                border-gray-300
                                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
                                sm:text-sm
                                rounded-md
                            ">
                            <option key="n/a" value="n/a">n/a</option>
                            <option v-for="skill in skills" :key="skill.id" :value="skill.name">{{ skill.name }}</option>
                        </select>
                    </div>

                    <div class="mt-2">
                        <InputLabel for="name" value="Name" />

                        <TextInput
                            id="name"
                            type="name"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            autofocus
                            autocomplete="name"
                        />

                        <InputError class="mt-2" :message="$page.props.errors.name" />
                    </div>

                    <div class="mt-2">
                        <InputLabel for="description" value="description" />

                        <textarea
                            id="description"
                            type="textarea"
                            class="mt-1 block w-full"
                            v-model="form.description"
                        ></textarea>

                        <InputError class="mt-2" :message="$page.props.errors.description" />
                    </div>

                    <div class="mt-2">
                        <InputLabel for="project_url" value="URL" />

                        <TextInput
                            id="project_url"
                            type="project_url"
                            class="mt-1 block w-full"
                            v-model="form.project_url"
                            autocomplete="projecturl"
                        />

                        <InputError class="mt-2" :message="$page.props.errors.project_url" />
                    </div>

                    <div class="mt-2">
                        <InputLabel for="image" value="Image" />

                        <TextInput
                            id="image"
                            type="file"
                            class="mt-1 block w-full"
                            @input="form.image = $event.target.files[0]"
                        />

                        <InputError class="mt-2" :message="$page.props.errors.image" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Update
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>