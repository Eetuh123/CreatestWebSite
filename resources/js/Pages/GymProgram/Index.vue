<template>
    <div>
        <CreateProgram />
    </div>
    <p v-if="user">User Name: {{ user.name }}</p>
    <div class="parent-container">
        <FrontBody />
    </div>
</template>

<script setup>
import { ref, reactive, onMounted, computed } from "vue";
import axios from "axios";
import BackBody from "../../Components/BodyParts/BackBody.vue";
import FrontBody from "../../Components/BodyParts/FrontBody.vue";
import CreateProgram from "./CreateProgram.vue";
import { usePage } from "@inertiajs/inertia-vue3";

const { props } = usePage();
console.log("Full Props Value:", props.value);

const user = computed(() => props.value.user); // Directly access the user data
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
