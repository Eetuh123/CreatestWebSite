<template>
    <div class="parent-container">
        <div class="glutes">
            <GluteL />
            <GluteR />
        </div>

        <div class="hamstrings">
            <HamstringL />
            <HamstringR />
        </div>
    </div>
</template>

<script>
import GluteL from "../../Components/BodyParts/Back/GluteL.vue";
import GluteR from "../../Components/BodyParts/Back/GluteR.vue";
import HamstringL from "../../Components/BodyParts/Back/HamstringL.vue";
import HamstringR from "../../Components/BodyParts/Back/HamstringR.vue";

export default {
    name: "MuscleFront",
    components: {
        GluteL,
        GluteR,
        HamstringL,
        HamstringR,
    },
    data() {
        return {
            muscleGroups: {
                chest: { color: "#ccc", activated: false },
                leg: { color: "#ccc", activated: false },
                // more muscle groups
            },
            // other data
        };
    },
    methods: {
        hoverMuscle(muscle) {
            // Fetch more info or perform other actions
        },
        updateMuscleColor() {
            // Make API calls to get the current state of each muscle group in the program
            // Update the color based on the fetched data
        },
    },
    mounted() {
        this.updateMuscleColor();
    },
};
</script>
<style>
.parent-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.glutes,
.hamstrings {
    display: flex;
    justify-content: flex-start;
}

.glutes > * {
    margin-right: -5px;
}
.hamstrings > * {
    margin-right: +20px;
}
.glutes {
    margin-bottom: -10;
}

.hamstrings {
    margin-top: 0;
}
</style>
