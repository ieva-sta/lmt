<template>
    <div class="offer container-fluid container">
        <div class="row">
            <div class="col">
                <h2 class="text-center text-md-start">Īpašs piedāvājums tikai piektdien!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="offer-banner d-flex flex-column flex-md-row">
                    <div class="offer-info">
                        <h3 class="text-center">LMT Viedtelevīzija + HBO filmas un seriāli</h3>
                        <div class="d-flex justify-content-center">
                            <img src="images/viedtelevizija.png" alt="LMT viedtelevīzija">
                        </div>
                        <div class="px-2">
                            <p>Iepriekš 24,99€/mēn</p>
                            <div class="price-container d-flex justify-content-between align-items-center">
                                <div class="price d-flex">
                                    <h2>19</h2>
                                    <div>
                                        <h4>98</h4>
                                        <p>€/mēn.*</p>
                                    </div>
                                </div>
                                <div>
                                    <button class="cta btn btn-outline-primary d-flex align-items-center">
                                        Vairāk
                                        <img src="images/icons/arrow-right-red.svg" class="ms-2" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="movies d-flex w-100 align-items-center justify-content-md-end">
                        <img src="images/movies/1.png" class="movie-poster img-fluid" alt="">
                        <img src="images/movies/2.png" class="movie-poster img-fluid" alt="">
                        <img src="images/movies/3.png" class="movie-poster img-fluid" alt="">
                        <img src="images/movies/4.png" class="movie-poster img-fluid d-none d-md-block" alt="">
                    </div>
                </div>
                <h4 class="terms d-none d-md-block">Akcija 29.11.2019. Piedāvājums attiecas uz noteiktām preču kategorijām. Piedāvājums neattiecas uz citu akciju precēm.</h4>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Offer'
}
</script>
