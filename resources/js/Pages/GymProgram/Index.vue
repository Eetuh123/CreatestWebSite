<template>
    <div>
        <CreateProgram />
    </div>
    <div class="bg-rose-500 h-16 w-32 m-4">
        <p v-if="user">User Name: {{ user.name }}</p>
        <button @click="logout">Logout</button>
    </div>
    <div
        v-for="program in gymPrograms"
        :key="program.id"
        @click="openProgramPage(program.id)"
    >
        <div class="bg-sky-500 h-32 w-32 m-4">
            {{ program.name }}
        </div>
    </div>
</template>

<script setup>
import { toRefs, ref, reactive, onMounted, computed } from "vue";
import { usePage } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";
import BackBody from "../../Components/BodyParts/BackBody.vue";
import FrontBody from "../../Components/BodyParts/FrontBody.vue";
import CreateProgram from "./CreateProgram.vue";

const { props } = usePage();
const { user, gymPrograms } = toRefs(props.value);
const creationButtonPosition = ref(0);

const handleProgramClick = (index) => {
    creationButtonPosition.value = (index + 1) % gymPrograms.value.length;
};

const openProgramPage = (programId) => {
    Inertia.visit(route("program.show", { id: programId }));
};

const logout = () => {
    Inertia.post("/logout");
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
