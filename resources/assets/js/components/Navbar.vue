<template>
    <div class="bg-inverse fixed-top">
        <div class="container">
            <nav class="navbar navbar-toggleable-md navbar-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">DET'S</a>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/lectures" :class="{ active: isActive('lecture-list') }">강좌 목록</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/lectures/me" :class="{ active: isActive('lecture-applies') }">신청한 강좌</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</template>

<style lang="scss">
    nav * {
        font-family: 'NanumSquare', sans-serif !important;
    }

    .navbar {
        padding-left: 8px;
        padding-right: 8px;
    }
</style>

<script>
    export default {
        props: ['currentPage'],

        methods: {
            isActive (page) {
                return (this.currentPage || '') === page
            }
        }
    }
</script>