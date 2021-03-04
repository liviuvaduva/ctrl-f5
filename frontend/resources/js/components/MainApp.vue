<template>
    <div>
        <app-menu></app-menu>
        <movies></movies>
    </div>
</template>

<script>

import $ from 'jquery';
import Menu from "./Menu";
import Movies from './movies/Movies';

export default {
    name: 'MainApp',
    components: {
        'app-menu': Menu,
        'movies': Movies
    }
}
</script>
