<template>
    <div>
        <div v-bind:key="movie.id" v-for="movie in movies">
            <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <div class="row">
                    <div class="col-md-6">
                        <img class="card-img img-fluid img-max-width" :src="movie.image"/>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="card-title"><h5>{{ movie.name }}</h5></div>
                            <div class="card-text">
                                <div><span class="font-weight-bold">Director:</span><span></span></div>
                                <div><span class="font-weight-bold">Writers:</span><span></span></div>
                                <div><span class="font-weight-bold">Stars:</span><span></span></div>
                            </div>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import $ from "jquery";

export default {
    name: "Movies",
    data() {
        return {movies: []};
    },
    created() {
        $.ajax('http://localhost:8080/api/movies', {
            method: 'GET',
            success: (e) => {
                this.movies = e;
            }, error: (e) => {
                console.log('fail', e)
            }
        });
    }
}
</script>

<style scoped>

.img-max-width {
    width: 100%;
}

.card-title h5 {
    font-size: 15px;
}

.card-text {
    font-size: 12px;
}

</style>
