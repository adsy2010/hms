<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Card from "@/Components/Card.vue";
import Button from "@/Components/Button.vue";

let emit = defineEmits([]);
let props = defineProps({});

</script>

<template>
    <AppLayout title="System Settings">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                System Settings
            </h2>
        </template>

        <Card class="py-12">
            <div class="grid grid-cols-4 gap-4">
                <Button :href="route('roles.index')">Roles</Button>
                <Button :href="route('hotels.index')">Hotels</Button>
            </div>
        </Card>
    </AppLayout>
</template>
