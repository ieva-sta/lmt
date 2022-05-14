<template>
    <div class="subscribe container-fluid bg-white">
        <div class="container-fluid container-md">
            <h2>Pieteikties konkursam!</h2>
            <form class="row flex-column flex-md-row align-items-md-end">
                <div class="col-12 col-md-4">
                    <label for="name" class="form-label">Vārds, uzvārds</label>
                    <input type="text" class="form-control" id="name" placeholder="Jānis Bērziņš">
                </div>
                <div class="col-12 col-md-4">
                    <label for="email" class="form-label">E-pasta adrese</label>
                    <input type="email" class="form-control" id="email" placeholder="janis.berzins@gmail.com">
                </div>
                <div class="cta-container col-12 col-md-2">
                    <button class="btn btn-primary btn-with-icon w-100 d-flex justify-content-center align-items-center">
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
    name: 'Subscribe'
}
</script>

<style scoped>

</style>
