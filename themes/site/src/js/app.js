import { createApp } from "vue";

import Faq from './components/Faq.vue'
import FaqList from './components/FaqList.vue'

createApp({
    components: {
        Faq,
        FaqList
    }
}).mount('#app');
