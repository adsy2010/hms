<script setup>
let emit = defineEmits([]);
let props = defineProps({
    item: Object
});

</script>

<template>
    <Link v-if="item.href" :href="item.href" class="text-blue-400 underline hover:text-blue-600">{{ item.name }}</Link>
    <span v-else class="text-gray-600" v-text="item.name"/>
</template>
