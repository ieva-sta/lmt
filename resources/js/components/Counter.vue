<template>
    <div class="counter container-fluid container px-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 d-flex justify-content-between">
                <div class="days">
                    <h3>{{ days }}</h3>
                    <span>dienas</span>
                </div>
                <div class="hours w-100 d-flex justify-content-around">
                    <div>
                        <h3>{{ hours }}</h3>
                        <span>stundas</span>
                    </div>
                    <div>
                        <h3>:</h3>
                    </div>
                    <div>
                        <h3>{{ minutes }}</h3>
                        <span>minūtes</span>
                    </div>
                    <div>
                        <h3>:</h3>
                    </div>
                    <div>
                        <h3>{{ seconds }}</h3>
                        <span>sekundes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Counter',
    data() {
        return {
            timer: null,
            startTime: 0,
        }
    },
    methods: {
        startTimer: function () {
            this.timer = setInterval(() => this.countdown(), 1000);
        },
        padTime: function (time) {
            return (time < 10 ? '0' : '') + time;
        },
        countdown: function () {
            if (this.startTime >= 1) {
                this.startTime--;
            } else {
                this.startTime = 0;
                this.resetTimer()
            }
        },
        resetTimer: function() {
            this.totalTime = (25 * 60);
            clearInterval(this.timer);
            this.timer = null;
        },
    },
    computed: {
        days: function () {
            const days = Math.floor(this.startTime / (3600 * 24));
            return this.padTime(days);
        },
        hours: function () {
            const hours = Math.floor((this.startTime / 3600) - (this.days * 24));
            return this.padTime(hours);
        },
        minutes: function () {
            const minutes = Math.floor(this.startTime / 60) - (this.hours * 60) - (this.days * 24 * 60);
            return this.padTime(minutes);
        },
        seconds: function () {
            const seconds = Math.floor(this.startTime - ((this.minutes * 60) + (this.hours * 3600) + (this.days * 24 * 60 * 60)));
            return this.padTime(seconds);
        }
    },
    mounted() {
        let deadline = new Date(2022, 4, 31);
        let now = new Date();
        this.startTime = (deadline.getTime() - now.getTime()) / 1000;
        this.startTimer();
    }
}
</script>
