<template>
    <div class="counter container-fluid container px-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-between">
                <div class="days">
                    <h3>20</h3>
                    <span>dienas</span>
                </div>
                <div class="hours w-100 d-flex justify-content-around">
                    <div>
                        <h3>14</h3>
                        <span>stundas</span>
                    </div>
                    <div>
                        <h3>:</h3>
                    </div>
                    <div>
                        <h3>02</h3>
                        <span>minūtes</span>
                    </div>
                    <div>
                        <h3>:</h3>
                    </div>
                    <div>
                        <h3>48</h3>
                        <span>sekundes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Counter'
}
</script>
