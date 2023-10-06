<template>
    <div>
        <MuscleFront />
        <MuscleBack />
    </div>
</template>

<script>
import MuscleMap from "../../Components/MuscleMap.vue";
import MuscleBack from "../../Components/MuscleBack.vue";
import MuscleFront from "@/Components/MuscleFront.vue";

export default {
    components: {
        MuscleBack,
        MuscleMap,
        MuscleFront,
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
