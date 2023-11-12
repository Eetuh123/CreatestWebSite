<template>
    <div><input v-model="name" /></div>
    <input v-model="length" />
    <button @click="submitForm">Submit</button>

    <div class="parent-container">
        <FrontBody />
    </div>
</template>

<script>
import BackBody from "../../Components/BodyParts/BackBody.vue";
import FrontBody from "../../Components/BodyParts/FrontBody.vue";

export default {
    components: {
        FrontBody,
        BackBody,
    },
    data() {
        return {
            input1: "",
            input2: "",
            muscleGroups: {
                chest: { color: "#ccc", activated: false },
                leg: { color: "#ccc", activated: false },
                // more muscle groups
            },
            // other data
        };
    },
    methods: {
        submitForm() {
            const payload = {
                input1: this.input1,
                input2: this.input2,
            };
            axios
                .post("/gymprogram", payload)
                .then((response) => {
                    alert("Form submitted successfully!");
                })
                .catch((error) => {
                    alert("An error occurred while submitting the form.");
                });
        },

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
