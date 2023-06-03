<script setup>
import Breadcrumb from "@/Components/Breadcrumb.vue";

let emit = defineEmits([]);
let props = defineProps({
    items: Array,
});

</script>

<template>
    <div class="flex">
        <div v-for="(item, index) in items">
            <Breadcrumb :item="item"/>
            <span v-if="index !== items.length - 1">&nbsp;>&nbsp;</span>
        </div>
    </div>
</template>
