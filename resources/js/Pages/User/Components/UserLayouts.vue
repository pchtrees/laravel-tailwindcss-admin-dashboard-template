<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Header from './Header.vue';


onMounted(() => {
    initFlowbite();
})

</script>

<template>
<Header></Header>

<slot />
</template>
