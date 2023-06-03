<script setup>
import Card from "@/Components/Card.vue"
import Form from "@/Pages/Settings/Hotels/Partials/Form.vue"
import AppLayout from "@/Layouts/AppLayout.vue";
import {useForm} from "@inertiajs/vue3";

let emit = defineEmits([]);
let props = defineProps({hotel: Object});
let form = useForm({...props.hotel});

let submitForm = () => {
    form.submit('patch', route('hotels.update', props.hotel));
}
</script>

<template>
    <AppLayout :title="`Edit Hotel: ${hotel.name}`">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Hotel: {{hotel.name}}
            </h2>
        </template>

        <Card class="py-12">
            <Form :form="form" :submit-form="submitForm"/>
        </Card>
    </AppLayout>
</template>
