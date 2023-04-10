import {createRouter, createWebHistory} from "vue-router";

import IndexDestination from './components/indexDestination.vue';
import createDestination from './components/createDestination.vue';
import editDestination from './components/editDestination.vue';


const routes = [
    {
        path : '/indexDestination',
        name : IndexDestination,
        component : IndexDestination
    },
    {
        path : '/createDestination',
        name : createDestination,
        component : createDestination
    },
    {
        path : '/editDestination',
        name : editDestination,
        component : editDestination
    },
];
    const router = createRouter({
        history: createWebHistory(),
        routes
    })

export default router;

