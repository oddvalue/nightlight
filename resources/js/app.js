import Alpine from 'alpinejs'
import { createApp } from 'vue'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'

Alpine.plugin(FormsAlpinePlugin)

window.Alpine = Alpine

Alpine.start()

import Clock from './components/Clock.vue';
import Sun from './components/Sun.vue';
import SunSleeping from './components/SleepingSun.vue';

const app = createApp({});

// registers our Clock component globally
app.component('v-clock', Clock);
app.component('v-sun', Sun);
app.component('v-sleeping-sun', SunSleeping);

// mount the app to the DOM
app.mount('#app');
