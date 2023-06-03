<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumbs from "@/Components/Breadcrumbs.vue";
import Card from "@/Components/Card.vue";

let emit = defineEmits([]);
let props = defineProps({hotel: Object});
let breadcrumbs = [
    { name: 'Dashboard', href: route('dashboard') },
    { name: 'System Settings', href: route('system-settings.index') },
    { name: 'Hotels', href: route('hotels.index') },
    { name: props.hotel.name }
];

</script>

<template>
    <AppLayout :title="`Hotel: ${hotel.name}`">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Hotel: {{hotel.name}}
            </h2>
        </template>

        <template #breadcrumbs>
            <Breadcrumbs :items="breadcrumbs"/>
        </template>

        <template #default>
            <Card class="py-12">
                <div v-for="value in Object.keys(hotel)" class="grid grid-cols-4 py-1.5 odd:bg-gray-50 px-4">
                    <div class="capitalize text-gray-500 text-sm">{{ value.replaceAll('_', ' ') }}</div>
                    <template v-if="typeof hotel[value] === 'object'">
                        <div>
                            <div v-if="hotel[value]['address_1']">{{hotel[value]['address_1']}}</div>
                            <div v-if="hotel[value]['address_2']">{{hotel[value]['address_2']}}</div>
                            <div v-if="hotel[value]['town']">{{hotel[value]['town']}}</div>
                            <div v-if="hotel[value]['county']">{{hotel[value]['county']}}</div>
                            <div v-if="hotel[value]['country']">{{hotel[value]['country']}}</div>
                            <div v-if="hotel[value]['postcode']">{{hotel[value]['postcode']}}</div>
                        </div>
                    </template>
                    <div v-else>
                        {{ hotel[value] }}
                    </div>
                </div>
            </Card>
        </template>
    </AppLayout>
</template>
