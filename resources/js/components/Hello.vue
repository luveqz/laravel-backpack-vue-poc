<script setup>
import { ref } from "vue";

const count = ref(0);
</script>

<template>
    <div>
        <h1>Hello Vue 3</h1>
        <p>{{ count }}</p>
        <button @click="count++">Increment</button>
    </div>
</template>
