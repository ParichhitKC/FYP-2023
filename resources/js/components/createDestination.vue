<template>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add destination</h2>
            </div>
        </div>
    </div>



    <div class="row">
        <form @submit.prevent="addDestination" enctype="multipart/form-data">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" v-model="destination.name">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Stories:</strong>
                        <input type="text" name="stories" class="form-control" placeholder="Stories" v-model="destination.stories">
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
                        <input type="file" name="stories_image" placeholder="Choose file" id="destination"  v-on:change="onFileChange">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Title Image:</strong>
                            <input type="file" name="title_image" placeholder="Choose file" id="destination"  v-on:change="onFileChange">

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
            destination: {},
            storiesImage: null,
            titleImage: null,
        }
    },
    methods: {
        addDestination() {
            const formData = new FormData();
            formData.append('stories_image', this.storiesImage);
            formData.append('title_image', this.titleImage);
            axios
                .post('http://127.0.0.1:8000/api/destination', this.destination)
                .then(response => (
                    this.$router.push({name: 'IndexDestination'})
                    // console.log(response.data)
                ))
                .catch(error => console.log(error))
                .finally(() => this.loading = false)
        },
        onFileChange(event) {
            this.storiesImage = event.target.files[0]
            this.titleImage = event.target.files[0]
        }
    }
}
</script>
