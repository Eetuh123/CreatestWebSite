<template>
    <div class="body">
        <div class="scale-50 bodyPart translate-y-full">
            <div class="">
                <FrontHead />
                <div class="bodyPartL mt-[-11px] ml-[-44px]">
                    <FrontTrapL />
                </div>
                <div class="bodyPartR mt-[-11px] ml-[65px]">
                    <FrontTrapR />
                </div>
            </div>
            <div class="ml-[-42px] mt-[-25px]">
                <MidleChest />
                <div class="bodyPartM mt-[-4px] ml-[29px]">
                    <Abdominal />
                    <div class="bodyPartL mt-[-309px] ml-[-52px]">
                        <ObligueL />
                        <div class="bodyPartL mt-[-378px] ml-[-18px]">
                            <ChestL />
                            <div class="bodyPartL mt-[-123px] ml-[-40px]">
                                <FrontDeltoidL />
                                <div class="bodyPartL mt-[-25px] ml-[-18px]">
                                    <BicepL />
                                    <div
                                        class="bodyPartL mt-[-43px] ml-[-83px]"
                                    >
                                        <ForeArmL />
                                        <div
                                            class="bodyPartL mt-[-27px] ml-[-68px]"
                                        >
                                            <FrontHandL />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bodyPartR mt-[-309px] ml-[90px]">
                        <ObligueR />
                        <div class="bodyPartR mt-[-378px] ml-[-18px]">
                            <ChestR />
                            <div class="bodyPartR mt-[-123px] ml-[46px]">
                                <FrontDeltoidR />
                                <div class="bodyPartR mt-[-25px] ml-[55px]">
                                    <BicepR />
                                    <div class="bodyPartR mt-[-43px] ml-[30px]">
                                        <ForeArmR />
                                        <div
                                            class="bodyPartR mt-[-27px] ml-[102px]"
                                        >
                                            <FrontHandR />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bodyPartL ml-[4px] mt-[204px]">
                    <FrontAdductorL />
                    <div class="bodyPartL mt-[-297px] ml-[-44px]">
                        <AbductorL />
                    </div>
                    <div class="bodyPartL ml-[-47px] mt-[-248px]">
                        <QuadsL />
                        <div class="bodyPartL mt-[-104px]">
                            <KneeL />
                            <div class="bodyPartL mt-[-33px] ml-[-10px]">
                                <FrontCalvesL />
                                <div class="bodyPartL mt-[-62px] ml-[-23px]">
                                    <FrontLegL />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bodyPartR ml-[98px] mt-[204px]">
                    <FrontAdductorR />
                    <div class="bodyPartR mt-[-297px] ml-[82px]">
                        <AbductorR />
                    </div>
                    <div class="bodyPartR ml-[32px] mt-[-248px]">
                        <QuadsR />
                        <div class="bodyPartR mt-[-104px]">
                            <KneeR />
                            <div class="bodyPartR mt-[-33px] ml-[15px]">
                                <FrontCalvesR />
                                <div class="bodyPartR mt-[-62px] ml-[26px]">
                                    <FrontLegR />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FrontHead from "./Front/FrontHead.vue";
import FrontTrapL from "./Front/FrontTrapL.vue";
import FrontTrapR from "./Front/FrontTrapR.vue";
import MidleChest from "./Front/MidleChest.vue";
import FrontDeltoidL from "./Front/FrontDeltoidL.vue";
import FrontDeltoidR from "./Front/FrontDeltoidR.vue";
import BicepL from "./Front/BicepL.vue";
import BicepR from "./Front/BicepR.vue";
import ForeArmL from "./Front/ForeArmL.vue";
import ForeArmR from "./Front/ForeArmR.vue";
import FrontHandL from "./Front/FrontHandL.vue";
import FrontHandR from "./Front/FrontHandR.vue";
import ChestL from "./Front/ChestL.vue";
import ChestR from "./Front/ChestR.vue";
import ObligueL from "./Front/ObligueL.vue";
import ObligueR from "./Front/ObligueR.vue";
import Abdominal from "./Front/Abdominal.vue";
import AbductorL from "./Front/AbductorL.vue";
import AbductorR from "./Front/AbductorR.vue";
import FrontAdductorL from "./Front/FrontAdductorL.vue";
import FrontAdductorR from "./Front/FrontAdductorR.vue";
import QuadsL from "./Front/QuadsL.vue";
import QuadsR from "./Front/QuadsR.vue";
import KneeL from "./Front/KneeL.vue";
import KneeR from "./Front/KneeR.vue";
import FrontCalvesL from "./Front/FrontCalvesL.vue";
import FrontCalvesR from "./Front/FrontCalvesR.vue";
import FrontLegL from "./Front/FrontLegL.vue";
import FrontLegR from "./Front/FrontLegR.vue";

export default {
    name: "FrontBody",
    components: {
        FrontHead,
        FrontDeltoidL,
        FrontDeltoidR,
        BicepL,
        BicepR,
        ForeArmL,
        ForeArmR,
        FrontHandL,
        FrontHandR,
        ChestL,
        ChestR,
        FrontTrapL,
        FrontTrapR,
        MidleChest,
        ObligueL,
        ObligueR,
        Abdominal,
        AbductorL,
        AbductorR,
        QuadsL,
        QuadsR,
        FrontAdductorL,
        FrontAdductorR,
        KneeL,
        KneeR,
        FrontCalvesL,
        FrontCalvesR,
        FrontLegL,
        FrontLegR,
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
