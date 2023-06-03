<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Card from "@/Components/Card.vue";
import Form from "@/Pages/Settings/Hotels/Partials/Form.vue";
import {useForm} from "@inertiajs/vue3";

let emit = defineEmits([]);
let props = defineProps({});
let form = useForm({
    name: '',
    address: '',
    postcode: '',
    country: '',
    contact_number: '',
    rating: '',
});
let submitForm = () => {
    form.submit('post', route('hotels.store'));
}
</script>

<template>
    <AppLayout title="Add a Hotel">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add a Hotel
            </h2>
        </template>

        <Card class="py-12">
            <Form :form="form" :submit-form="submitForm"/>
        </Card>

    </AppLayout>
</template>
