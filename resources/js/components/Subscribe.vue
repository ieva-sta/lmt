<template>
    <div class="subscribe container-fluid bg-white">
        <div class="container-fluid container-md">
            <h2>Pieteikties konkursam!</h2>
            <form class="row flex-column flex-md-row align-items-md-end">
                <div class="col-12 col-md-4">
                    <label for="name" class="form-label">Vārds, uzvārds</label>
                    <input v-model="form.name" type="text" class="form-control" :class="errors && errors.name ? 'has-error' : null" id="name" placeholder="Jānis Bērziņš">
                    <div v-if="errors">
                        <div v-for="error in errors.name" class="error">
                            {{ error}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <label for="email" class="form-label">E-pasta adrese</label>
                    <input v-model="form.email" type="email" class="form-control" :class="errors && errors.email ? 'has-error' : null" id="email" placeholder="janis.berzins@gmail.com">
                    <div v-if="errors">
                        <div v-for="error in errors.email" class="error">
                            {{ error}}
                        </div>
                    </div>
                </div>
                <div class="cta-container col-12 col-md-2">
                    <button @click.prevent="subscribe"
                        class="btn btn-primary btn-with-icon w-100 d-flex justify-content-center align-items-center">
                        Nosūtīt
                        <ArrowRight></ArrowRight>
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Subscribe',
    data() {
        return {
            form: {
                name: '',
                email: ''
            },
            errors: null
        }
    },
    methods: {
        subscribe() {
            let self = this;

            axios.post('/api/subscribe', this.form).then(function (response) {
                console.log(response);
            }).catch(function (error) {
                self.errors = error.response.data.errors;
            });
        }
    }
}
</script>
