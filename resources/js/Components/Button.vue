<script setup>
let emit = defineEmits([]);
let props = defineProps({href: String,});

</script>

<template>
    <div class="px-4 py-3 bg-indigo-600 hover:bg-indigo-800 text-white rounded-md cursor-pointer">
        <Link :href="href" class="block"><slot/></Link>
    </div>
</template>
