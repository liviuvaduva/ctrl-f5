<template>
    <nav class="navbar imdb navbar-expand-md navbar-dark mb-3">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <img class="imdb-logo" src="images/logo-imdb.png">
                <i class="fas fa-user"></i>
            </div>
            <div>
                <img class="user-icon" src="images/icons-svg/user-solid.svg"/>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Menu"
}
</script>

<style scoped>
    .imdb-logo {
        width: 67px;
        height: 67px;
    }

    .navbar.imdb {
        background-color: #f5c518;
    }
</style>
