<template>
    <nav class ="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="collapse navbar-collapse">
        <div class="navbar-nav>">
                <router-link to="/indexDestination">Index</router-link>
                <router-link to="/createDestination">Create</router-link>
        </div>
        </div>
    </nav>
    <router-view></router-view>
</template>
