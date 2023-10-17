<template>
    <div>
        <button @click="startSort">Start Sorting</button>
        <input type="number" v-model="numPillars" @input="generatePillars" />
        <div class="pillar-container">
            <div
                v-for="(height, index) in pillars"
                :key="index"
                class="pillar"
                :style="{
                    height: height + 'px',
                    backgroundColor: colors[index],
                }"
            ></div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pillars: [],
            colors: [],
            numPillars: 10,
        };
    },
    mounted() {
        this.generatePillars();
    },
    methods: {
        generatePillars() {
            this.pillars = Array.from({ length: this.numPillars }, () =>
                Math.floor(Math.random() * 100 + 50)
            );
            this.colors = Array(this.numPillars).fill("green");
        },
        async startSort() {
            for (let i = 0; i < this.pillars.length; i++) {
                for (let j = 0; j < this.pillars.length - i - 1; j++) {
                    this.colors[j] = "red";
                    this.colors[j + 1] = "red";

                    await this.sleep(300); // Pause for animation

                    if (this.pillars[j] > this.pillars[j + 1]) {
                        [this.pillars[j], this.pillars[j + 1]] = [
                            this.pillars[j + 1],
                            this.pillars[j],
                        ];
                    }

                    this.colors[j] = "green";
                    this.colors[j + 1] = "green";
                }
            }
        },
        sleep(ms) {
            return new Promise((resolve) => setTimeout(resolve, ms));
        },
    },
};
</script>

<style>
.pillar-container {
    display: flex;
}

.pillar {
    width: 20px;
    margin-right: 5px;
    transition: height 0.3s ease, background-color 0.3s ease;
}
</style>
