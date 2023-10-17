<template>
    <div class="body">
        <div class="scale-50 bodyPart translate-y-full">
            <div class="ml-[15px]">
                <BackHead />
                <div class="bodyPartL mt-[-47px]">
                    <SomethingL />
                </div>
                <div class="bodyPartR mt-[-47px] ml-[76px]">
                    <SomethingR />
                </div>
            </div>
            <div class="ml-[-13px] mt-[-6px]">
                <Traps />
                <div class="bodyPartL mt-[-200px] ml-[-100px]">
                    <BackDeltoidL />
                    <div class="bodyPartL mt-[-34px] ml-[-27px]">
                        <TricepL />
                        <div class="bodyPartL mt-[-68px] ml-[-80px]">
                            <ForeArmL />
                            <div class="bodyPartL mt-[-12px] ml-[-55px]">
                                <BackArmL />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bodyPartL mt-[-90px] ml-[-38px]">
                    <LatL />
                    <div class="bodyPartL mt-[-105px] ml-[10px]">
                        <BackObligueL />
                        <div class="bodyPartL mt-[-314px] ml-[-19px]">
                            <TeresL />
                        </div>
                    </div>
                </div>
                <div class="bodyPartR mt-[-200px] ml-[151px]">
                    <BackDeltoidR />
                    <div class="bodyPartR mt-[-34px] ml-[49px]">
                        <TricepR />
                        <div class="bodyPartR mt-[-68px] ml-[45px]">
                            <ForeArmR />
                            <div class="bodyPartR mt-[-12px] ml-[71px]">
                                <BackArmR />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bodyPartR mt-[-90px] ml-[80px]">
                    <LatR />
                    <div class="bodyPartR mt-[-105px] ml-[56px]">
                        <BackObligueR />
                        <div class="bodyPartR mt-[-314px] ml-[-9px]">
                            <TeresR />
                        </div>
                    </div>
                </div>
            </div>
            <div class="bodyPartM">
                <SpinalErector />
                <div class="bodyPartL mt-[-52px] ml-[-51px]">
                    <GluteL />
                    <div class="bodyPartL mt-[-12px] ml-[56px]">
                        <BackAdductorL />
                    </div>
                    <div class="bodyPartR mt-[-174px] ml-[-13px]">
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
                <div class="bodyPartR mt-[-52px] ml-[70px]">
                    <GluteR />
                    <div class="bodyPartR mt-[-12px] ml-[10px]">
                        <BackAdductorR />
                    </div>
                    <div class="bodyPartR mt-[-174px] ml-[55px]">
                        <GluteMediusR />
                    </div>
                    <div class="bodyPartR mt-[-82px] ml-[43px]">
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
import BackHead from "./Back/BackHead.vue";
import SomethingL from "./Back/SomethingL.vue";
import SomethingR from "./Back/SomethingR.vue";
import Traps from "./Back/Traps.vue";
import BackDeltoidL from "./Back/BackDeltoidL.vue";
import BackDeltoidR from "./Back/BackDeltoidR.vue";
import TricepL from "./Back/TricepL.vue";
import TricepR from "./Back/TricepR.vue";
import ForeArmL from "./Back/ForeArmL.vue";
import ForeArmR from "./Back/ForeArmR.vue";
import BackArmL from "./Back/BackArmL.vue";
import BackArmR from "./Back/BackArmR.vue";
import TeresL from "./Back/TeresL.vue";
import TeresR from "./Back/TeresR.vue";
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
        BackHead,
        BackDeltoidL,
        BackDeltoidR,
        TricepL,
        TricepR,
        ForeArmL,
        ForeArmR,
        BackArmL,
        BackArmR,
        TeresL,
        TeresR,
        SomethingL,
        SomethingR,
        Traps,
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
