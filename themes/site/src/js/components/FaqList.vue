<template>
    <ul class="space-y-4">
        <Faq v-for="(question, index) in questions" :question="question" :key="index"/>
    </ul>
</template>

<script setup>
import Faq from "./Faq.vue";

const props = defineProps({
    questions: Array,
});
</script>