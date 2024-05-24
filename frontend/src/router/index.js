import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../components/Home.vue'
import Product from '../components/products/Product.vue'

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home 
        },
        {
            path: '/product/:id',
            name: 'product',
            component: Product 
        }
    ]
})

export default router