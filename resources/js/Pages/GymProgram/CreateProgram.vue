<template></template>

<script>
export default {
    components: {
        FrontBody,
        BackBody,
    },
    data() {
        return {
            muscleGroups: {
                chest: { color: "#ccc", activated: false },
                leg: { color: "#ccc", activated: false },
                // more muscle groups
            },
        };
    },
    methods: {
        hoverMuscle(muscle) {
            // Fetch more info or perform other actions
        },
        mounted() {},
    },
};
</script>
<style></style>
