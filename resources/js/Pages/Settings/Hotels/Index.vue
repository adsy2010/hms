<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Table from "@/Components/TableComponent.vue";
import Card from "@/Components/Card.vue";

import {ref} from "vue";
import {router} from "@inertiajs/vue3";
import Breadcrumbs from "@/Components/Breadcrumbs.vue";

let emit = defineEmits([]);
let props = defineProps({hotels: Object});
let columnData = ref(
    [
        { name: 'Hotel' },
        { name: 'Rooms', classes: 'text-right' },
        { classes: 'text-right' }
    ]
);
let msg = (clicked) => {
    console.log('clicked');
    router.visit(route('hotels.show', clicked));
}

let breadcrumbs = [
    { name: 'Dashboard', href: route('dashboard')},
    { name: 'System Settings', href: route('system-settings.index')},
    { name: 'Hotels'}
];
</script>

<template>
    <AppLayout title="Hotels">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Hotels
            </h2>
        </template>

        <template #breadcrumbs>
            <Breadcrumbs :items="breadcrumbs"/>
        </template>

        <Card class="py-12">
            <Table
                :cols="columnData"
                :items="hotels"
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

                <tr v-for="hotel in hotels.data" @click="msg(hotel.id)" class="cursor-pointer even:bg-gray-100 hover:bg-gray-200">
                    <td class="px-3">
                        <div class="py-2">
                            <div class="text-gray-800">{{ hotel.name }}</div>
<!--                            <div class="text-gray-600 text-sm flex-wrap max-w-sm">{{ hotel.description }}</div>-->
                        </div>

                    </td>
                    <td class="text-right px-3">{{hotel.rooms_count}}</td>
                    <td class="text-center px-3"> > </td>
                </tr>
            </Table>
        </Card>
    </AppLayout>
</template>
