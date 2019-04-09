import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
// lazy load the components
const ListLinks = (resolve) => require(['../components/Links/List.vue'], resolve)

const routes = [
    { 
        path: '/links', component: ListLinks 
    },
]

const router = new VueRouter({
    routes // short for `routes: routes`
})



export default router