<template>
    <div :class="{
        'w-full h-screen flex justify-center items-center': true,
        'bg-gradient-radial from-yellow-500 via-red-900 to-blue-900': sunIsUp,
    }">
        <a :class="{
            'w-full max-w-2xl p-6 cursor-pointer': true,
        }" @click="toggle">
            <v-sun v-if="sunIsUp" class="w-full" />
            <v-sleeping-sun v-else class="w-full opacity-20" />

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
