<script setup>
let emit = defineEmits([]);
let props = defineProps({});

</script>

<template>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-8 bg-white overflow-hidden shadow-xl">
            <slot/>
        </div>
    </div>
</template>
