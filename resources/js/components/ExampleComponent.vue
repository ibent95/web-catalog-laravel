<script lang="ts">
    export default {
        data() {
            return {
                title: "Coba",
                content: "lorem ipsum.",
                styleData: {
                    backgroundColor: 'red',
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ title }}</div>

                    <div class="card-body">
                        I'm an example component. {{ content }}
                        <span :style="styleData">{{ content }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>