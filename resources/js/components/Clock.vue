<template>
    <div :class="{
        'w-full h-screen flex justify-center items-center bg-black': true,
    }">
        <div :class="{
            'w-full h-screen absolute opacity-0 transition-opacity duration-1000 delay-0 bg-center bg-no-repeat bg-gradient-radial from-yellow-50 via-yellow-900 to-black': true,
            'opacity-70 delay-700': sunIsUp,
        }"></div>
        <a :class="{
            'w-full max-w-2xl p-6 cursor-pointer relative z-10': true,
        }" @click="toggle">
            <transition mode="out-in"
                duration="1000"
                enter-active-class="transition-all transform duration-1000"
                enter-class="opacity-0 translate-y-full "
                enter-to-class="opacity-100 translate-x-0"
                leave-active-class="transition-all transform duration-1000"
                leave-class="opacity-100 translate-x-0"
                leave-to-class="opacity-0 translate-y-full"
            >
                <v-sun v-if="sunIsUp" class="w-full" />
                <v-sleeping-sun v-else class="w-full opacity-20" />
            </transition>

            <a href='https://www.freepik.com/vectors/sun' class="fixed bottom-0 right-0 text-black">Sun vector created by freepik - www.freepik.com</a>
        </a>
    </div>
</template>
<script>
export default {
    data() {
        return {
            sunIsUp: false,
        }
    },
    methods: {
        toggle() {
            this.sunIsUp = !this.sunIsUp;
        }
    },
}
</script>
