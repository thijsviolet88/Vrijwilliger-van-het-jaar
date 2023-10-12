<template>
    <div class="pt-4">
        <h5 class="text-[18px] font-bold">{{ question.question }}</h5>
        <p>
            {{ question.answer }}
        </p>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
    question: Object,
});

const answerVisible = ref(false)
</script>