<template>
    <div class="device-list container-fluid container">
        <div class="row">
            <div v-for="device in devices" class="device-container col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="device d-flex align-items-center">
                    <div class="w-25 d-flex justify-content-center">
                        <img :src="`images/icons/devices/${device.icon}.svg`" :alt="device.title">
                    </div>
                    <div class="w-75 d-flex justify-content-end">
                        <div class="w-75">
                            <h4>{{ device.title }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="device see-more btn-with-icon d-flex justify-content-center align-items-center">
                    <h4>Visas iekārtas</h4>
                    <ArrowRight></ArrowRight>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'DeviceList',
    data() {
        return {
            devices: [
                {
                    title: 'Telefoni',
                    icon: 'phone'
                },
                {
                    title: 'Planšetes',
                    icon: 'tablet'
                },
                {
                    title: 'Datori',
                    icon: 'computer'
                },
                {
                    title: 'Televizori',
                    icon: 'tv'
                },
                {
                    title: 'Viedpalīgi',
                    icon: 'watch'
                },
                {
                    title: 'Droni',
                    icon: 'drone'
                },
                {
                    title: 'Aksesuāri',
                    icon: 'headphones'
                }
            ]
        }
    }
}
</script>
