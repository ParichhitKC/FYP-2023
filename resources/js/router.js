import {createRouter, createWebHistory} from "vue-router";

import indexDestination from './components/indexDestination.vue';
import createDestination from './components/createDestination.vue';
import editDestination from './components/editDestination.vue';


const routes = [
    {
        path : '/indexDestination',
        component : indexDestination,
        name : 'indexDestination',
    },
    {
        path : '/createDestination',
        name : 'createDestination',
        component : createDestination
    },
    {
        path : '/:id/edit',
        name : 'editDestination',
        component : editDestination
    },
];
    const router = createRouter({
        history: createWebHistory(),
        routes
    })

export default router;

