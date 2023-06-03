<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumbs from "@/Components/Breadcrumbs.vue";

let emit = defineEmits([]);
let props = defineProps({role: Object});

let breadcrumbs = [
    { name: 'Dashboard', href: route('dashboard')},
    { name: 'System Settings', href: route('system-settings.index')},
    { name: 'Roles', href: route('roles.index')},
    { name: props.role.name}
];
</script>

<template>
    <AppLayout :title="`Role: ${props.role.name}`">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Role: {{role.name}}
            </h2>
        </template>

        <template #breadcrumbs>
            <Breadcrumbs :items="breadcrumbs"/>
        </template>
    </AppLayout>
</template>
