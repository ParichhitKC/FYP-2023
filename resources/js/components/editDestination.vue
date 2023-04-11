<style>
.table-img{
    width: 250px;
    height: 250px;
}
</style>
<template>

<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit destination</h2>
    </div>
</div>
</div>

<div class="row">
    <form @submit.prevent="updateDestination" enctype="multipart/form-data">
    <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Name" v-model="destination.name">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Stories:</strong>
            <textarea type="text" name="stories" class="form-control" placeholder="Stories" v-model="destination.stories"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>District:</strong>
            <input type="text" name="district" class="form-control" placeholder="District" v-model="destination.district">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Zone:</strong>
            <input type="text" name="zone" class="form-control" placeholder="Zone" v-model="destination.zone">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Stories Image:</strong>
            <img class="table-img" id="stories_image" v-bind:src="'/images/' + destination.stories_image" />
            <input type="file" name="stories_image" placeholder="Choose file" id="destination" onc >
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Title Image:</strong>
            <img class="table-img" v-bind:src="'/images/' + destination.title_image" />
            <input type="file" name="title_image" placeholder="Choose file" id="destination" v-on:change="onImageChange">

        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
    </form>
</div>
</template>

<script>
export default {
    data() {
        return {
            destination: {}
        }
    },
    created() {
        axios
            .get(`/api/destination/${this.$route.params.id}`)
            .then((response) => {
                this.destination = response.data.data;
                console.log(response.data);
            });
    },
    methods: {
        updateDestination() {
            axios
                .put(`/api/destination/${this.$route.params.id}`, this.destination)
                .then((response) => {
                    this.$router.push({ name: "indexDestination" });
                });
        },
    }
}
</script>
