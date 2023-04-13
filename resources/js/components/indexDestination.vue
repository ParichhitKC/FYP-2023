<style>
.table-img{
    width: 250px;
    height: 250px;
}
.table-story{
    width: 1500px;
    height:300px;
}
</style>
<template>
    <router-link :to='{name:"createDestination"}' class="btn btn-primary">Create New Destination</router-link>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Destination</h2>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="zero-config">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Stories</th>
                <th>District</th>
                <th>Zone</th>
                <th>Title Image</th>
                <th>Stories Image</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="destination in destinations" :key="destination.id">
                <td>{{ destination.id }}</td>
                <td>{{ destination.name }}</td>
                <td class="table-story">{{ destination.stories }}</td>
                <td>{{ destination.district }}</td>
                <td>{{ destination.zone }}</td>
                <td><img class="table-img" :src="`/images/${destination.title_image}`"></td>
                <td><img class="table-img" :src="`/images/${destination.stories_image}`"></td>
                <td>
                    <div class="btn-group" role="group">
                         <router-link :to="{name: 'editDestination', params:{id: destination.id}}" class="btn btn-primary">Edit
                         </router-link>
                        <button class="btn btn-danger" @click="deleteDestination(destination.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>


export default {
    data() {
        return {
            destinations: [],

        };
    },
     created() {
        axios.get('/api/destination').then(response => {
            // debugger;
            this.destinations = response.data.data.data;
        });
    },
    methods: {

        deleteDestination(id) {
            axios.delete(`/api/destination/${id}`).then(response => {
                // debugger;
                let i = this.destinations.map(item => item.id).indexOf(id); // find index of object
                this.destinations.splice(i, 1);
            });
        }
    }
};
</script>
