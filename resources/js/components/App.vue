<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                <li class="navbar-brand">
                <router-link to="/indexDestination">Destination</router-link>
                </li>

                </ul>
        </div>
        </div>
    </nav>
    <div class="container mt-5">
    <router-view></router-view>
    </div>
</template>
