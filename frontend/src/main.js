import { createApp } from 'vue'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'
import 'bootstrap-icons/font/bootstrap-icons.css'
import 'vue-toastification/dist/index.css'
import './style.css'
import Toast from 'vue-toastification'
import App from './App.vue'
import router from './router'

createApp(App)
    .use(Toast)
    .use(router)
    .mount('#app')
