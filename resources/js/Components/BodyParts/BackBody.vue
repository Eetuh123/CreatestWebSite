<template>
    <div class="body">
        <div class="bodyPart">
            <div class="bodyPartM scale-50">
                <SpinalErector />
                <div class="bodyPartL mt-[-52px] ml-[-100px]">
                    <LatL />
                </div>
                <div class="bodyPartL mt-[-52px] ml-[-50px]">
                    <GluteL />
                    <div class="bodyPartL mt-[-12px] ml-[56px]">
                        <BackAdductorL />
                    </div>
                    <div class="bodyPartR mt-[-12px] ml-[56px]">
                        <GluteMediusL />
                    </div>
                    <div class="bodyPartL mt-[-82px] ml-[-23px]">
                        <HamstringL />
                        <div class="bodyPartL mt-[-68px] ml-[-33px]">
                            <BackCalvesL />
                            <div class="bodyPartL mt-[-50px] ml-[-8px]">
                                <BackLegL />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bodyPartR mt-[-52px] ml-[100px]">
                    <LatR />
                </div>
                <div class="bodyPartR mt-[-52px] ml-[70px]">
                    <GluteR />
                    <div class="bodyPartR mt-[-12px] ml-[9px]">
                        <BackAdductorR />
                    </div>
                    <div class="bodyPartR mt-[-12px] ml-[9px]">
                        <GluteMediusR />
                    </div>
                    <div class="bodyPartR mt-[-82px] ml-[42px]">
                        <HamstringR />
                        <div class="bodyPartR mt-[-68px] ml-[36px]">
                            <BackCalvesR />
                            <div class="bodyPartR mt-[-50px] ml-[21px]">
                                <BackLegR />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import LatL from "./Back/LatL.vue";
import LatR from "./Back/LatR.vue";
import BackObligueL from "./Back/BackObligueL.vue";
import BackObligueR from "./Back/BackObligueR.vue";
import SpinalErector from "./Back/SpinalErector.vue";
import GluteMediusL from "./Back/GluteMediusL.vue";
import GluteMediusR from "./Back/GluteMediusR.vue";
import GluteL from "./Back/GluteL.vue";
import GluteR from "./Back/GluteR.vue";
import HamstringL from "./Back/HamstringL.vue";
import HamstringR from "./Back/HamstringR.vue";
import BackCalvesL from "./Back/BackCalvesL.vue";
import BackCalvesR from "./Back/BackCalvesR.vue";
import BackLegL from "./Back/BackLegL.vue";
import BackLegR from "./Back/BackLegR.vue";
import BackAdductorL from "./Back/BackAdductorL.vue";
import BackAdductorR from "./Back/BackAdductorR.vue";

export default {
    name: "BackBody",
    components: {
        LatL,
        LatR,
        BackObligueL,
        BackObligueR,
        SpinalErector,
        GluteMediusL,
        GluteMediusR,
        GluteL,
        GluteR,
        BackAdductorL,
        BackAdductorR,
        HamstringL,
        HamstringR,
        BackCalvesL,
        BackCalvesR,
        BackLegL,
        BackLegR,
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
.body {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.bodyPartM,
.bodyPartL,
.bodyPartR {
    position: absolute;
}
.bodyPartL,
.bodyPartR {
}
.bodyPartR {
}
.bodyPartL {
}
</style>
