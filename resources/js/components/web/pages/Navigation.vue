<template>
    <div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary vollkorn-font">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item mx-2">
                        <a class="nav-link font-18" href="#pre"><strong>
                            Preise
                        </strong></a>
                    </li>
                    <li class="nav-item mx-2">
                        <label class="nav-link font-18"><strong>
                            |
                        </strong></label>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link font-18" href="#kon"><strong>
                            Kontakt / Öffnungszeiten
                        </strong></a>
                    </li>
                    <li class="nav-item mx-2">
                        <label class="nav-link font-18"><strong>
                            |
                        </strong></label>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link font-18" href="#anf"><strong>
                            Anfahrt
                        </strong></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        name: "Navigation",
    }

</script>

<style scoped>
    .navbar{
        box-shadow: 0 5px 10px 0 #a0a0a0;
    }
    .nav-link{
        color: #ddd !important;
    }
    .nav-link:hover{
        color: #fff !important;
    }

</style>
