<script setup>
import FormInput from "@/Components/Form/FormInput.vue";

let emit = defineEmits([]);
let props = defineProps({form: Object});

</script>

<template>
    <form>
        <div class="space-y-2">
            <FormInput v-model="form.name">
                <template #label>Name</template>
            </FormInput>
            <FormInput v-model="form.address.address_1">
                <template #label>Address</template>
            </FormInput>

            <FormInput v-model="form.address.address_2"/>
            <FormInput v-model="form.address.town"/>

            <FormInput v-model="form.postcode">
                <template #label>Postcode</template>
            </FormInput>
            <FormInput v-model="form.country">
                <template #label>Country</template>
            </FormInput>
            <FormInput v-model="form.contact_number">
                <template #label>Contact number</template>
            </FormInput>
            <FormInput v-model="form.rating">
                <template #label>Rating</template>
            </FormInput>
        </div>
    </form>
</template>
