require('./bootstrap');

import { createApp } from 'vue';
import Dropdown from './components/Dropdown';

window.axios = require('axios');

window.axios.default.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const app = createApp({});
app.component('dropdown'. Dropdown)
    .mount('#app');
