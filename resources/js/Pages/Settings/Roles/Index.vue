<script setup>
import {ref} from 'vue';
import {router} from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import Table from "@/Components/TableComponent.vue";
import Card from "@/Components/Card.vue";
import Breadcrumbs from "@/Components/Breadcrumbs.vue";
import Pagination from "@/Pages/Settings/Roles/Pagination.vue";
// import {} from '@heroicons/vue';

let emit = defineEmits([]);
let props = defineProps({roles: Object});
let columnData = ref(
    [
        { name: 'Role' },
        { name: 'Associated', classes: 'text-right' },
        { classes: 'text-right' }
    ]
);
let msg = (item) => {
    router.visit(route('roles.show', item));
}
let breadcrumbs = [
    { name: 'Dashboard', href: route('dashboard')},
    { name: 'System Settings', href: route('system-settings.index')},
    { name: 'Roles'}
];
</script>

<template>
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Roles
            </h2>
        </template>

        <template #breadcrumbs>
            <Breadcrumbs :items="breadcrumbs"/>
        </template>

        <template #default>
            <Card class="py-12">
                <Table
                    :cols="columnData"
                    :items="roles"
                >
                    <template #buttons>

                    </template>
                    <template #filters>
                        <div class="flex justify-between pb-6">
                            <div>
                                Show
                                <select name="" id="" class="border-gray-200 bg-indigo-50 rounded-lg py-1">
                                    <option value="5">5</option>
                                    <option value="10" selected>10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="200">200</option>
                                </select>
                                entries
                            </div>
                            <div class="">
                                <input type="text" class="bg-indigo-50 border-gray-200 rounded-lg px-3 py-1 mx-2" placeholder="Search...">
                            </div>
                        </div>
                    </template>

                    <tr v-for="role in roles.data" @click="msg(role.id)" class="cursor-pointer even:bg-gray-100 hover:bg-gray-200">
                        <td class="px-3">
                            <div class="py-2">
                                <div class="text-gray-800">{{ role.name }}</div>
                                <div class="text-gray-600 text-sm flex-wrap max-w-sm">{{ role.description }}</div>
                            </div>

                        </td>
                        <td class="text-right px-3">{{role.users_count}}</td>
                        <td class="text-center px-3"> > </td>
                    </tr>
                </Table>
            </Card>
        </template>
    </AppLayout>
</template>
