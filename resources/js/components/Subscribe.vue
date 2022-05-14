<template>
    <div class="subscribe container-fluid bg-white">
        <div class="container-fluid container-md">
            <h2>Pieteikties konkursam!</h2>
            <form class="row flex-column flex-sm-row align-items-md-end justify-content-center justify-content-md-start">
                <div class="col-12 col-sm-6 col-md-4 position-relative">
                    <label for="name" class="form-label">Vārds, uzvārds</label>
                    <input v-model="form.name" @keyup="resetError('name')" type="text" class="form-control" :class="errors && errors.name ? 'has-error' : null" id="name" placeholder="Jānis Bērziņš">
                    <div v-if="errors">
                        <div v-for="error in errors.name" class="error">
                            {{ error}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 position-relative">
                    <label for="email" class="form-label">E-pasta adrese</label>
                    <input v-model="form.email" @keyup="resetError('email')" type="email" class="form-control" :class="errors && errors.email ? 'has-error' : null" id="email" placeholder="janis.berzins@gmail.com">
                    <div v-if="errors">
                        <div v-for="error in errors.email" class="error">
                            {{ error}}
                        </div>
                    </div>
                </div>
                <div class="cta-container col-12 col-sm-6 col-md-2">
                    <button @click.prevent="subscribe"
                        class="btn btn-primary btn-with-icon w-100 d-flex justify-content-center align-items-center">
                        Nosūtīt
                        <ArrowRight></ArrowRight>
                    </button>
                </div>
            </form>
            <Transition name="fade">
                <h5 v-if="message" class="mt-3 text-success position-absolute">{{ message }} </h5>
            </Transition>
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
            errors: null,
            message: null
        }
    },
    methods: {
        subscribe() {
            let self = this;

            axios.post('/api/subscribe', this.form).then(function (response) {
                self.message = response.data.message;
                self.form.name = '';
                self.form.email = '';
            }).catch(function (error) {
                self.errors = error.response.data.errors;
            });
        },
        resetError(field) {
            if (this.errors) {
                this.errors[field] = null;
            }

            this.message = null;
        }
    }
}
</script>

<style>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
