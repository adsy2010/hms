<script setup>
import {useModelWrapper} from '@/Utility/Utility.vue';

let props = defineProps({
    id: String,
    placeholder: String,
    type: {type: String, default: 'text'},
    modelValue: String,
});
let emit = defineEmits();

let value = useModelWrapper(props, emit);

</script>

<template>
    <div class="grid grid-cols-12">
        <label class="col-span-2" :for="id">
            <slot name="label" />
        </label>
        <div class="col-span-10">
            <input :id="id" :type="type" v-model="value" :placeholder="placeholder" class="w-full">
        </div>
    </div>
</template>
