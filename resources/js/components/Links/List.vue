<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List of Links</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="link in links"> <a :href="link"> {{ link }} </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log(process.env.APP_ENV)
            console.log('Component mounted.')
            this.fetchLinks()
        },
        methods: {
            fetchLinks () {
                this.$store.dispatch('FetchLinks').then(() => {
                    this.loading = false
                }).catch((err) => {
                    this.loading = false
                    console.log(err)
                })
            }
        },
        computed: {
            links () {
                return this.$store.getters.links
            }
        }
    }
</script>
