<script lang="ts">
    export default {
        data() {
            return {
                title: "Special title treatment",
                content: "With supporting text below as a natural lead-in to additional content.",
                buttonLabel: "Go somewhere",
                styleData: {
                    //backgroundColor: 'red',
                    fontSize: '20px',
                },
            };
        },
        mounted() {
            console.log('ExampleComponent mounted.')
        }
    }
</script>

<template>

    <!-- Start search and filter input -->
    <div class="container gap-3" id="container-filter">
        <div class="flex gap-3">
            <input class="form-control flex-auto" type="search" placeholder="Search" aria-label="Search">

            <button type="button" class="btn btn-outline-success flex-none" data-bs-toggle="collapse"
                data-bs-target="#search-filter-inputs-collapse" aria-expanded="false"
                aria-controls="search-filter-inputs-collapse">
                <i class="fa-solid fa-sliders rotate-90"></i>
            </button>
        </div>

        <div class="collapse gap-3" id="search-filter-inputs-collapse">
            <div id="search-filter-inputs-container">

                <content class="" id="search-filter-inputs-group-1">
                    <!-- Example single primary button -->
                    <div class="btn-group">
                        <a type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </content>

                <content class="" id="search-filter-inputs-group-2">
                    <!-- Example single success button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </content>

                <content class="" id="search-filter-inputs-group-3">
                    <!-- Example single warning button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </content>

                <content class="" id="search-filter-inputs-group-4">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </content>

            </div>
        </div>
    </div>
    <!-- End search and filter input -->

    <!-- Start products list -->
    <div class="container" id="container-products-list">

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">{{ title }}</h5>

                <p class="card-text">I'm an example component. {{ content }}</p>

                <a href="#" class="btn btn-primary">
                    <span :style="styleData">{{ buttonLabel }}</span>
                </a>
            </div>

        </div>

    </div>
    <!-- End products list -->

</template>