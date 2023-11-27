<template>

</template>

<script setup>
import { ref, reactive, onMounted, computed } from "vue";
import axios from "axios";
import CreateProgram from "./CreateProgram.vue";
import { usePage } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

 const week = Inertia.form({
        name: "",
        occurrence_weeks: "",
        });
</script>
<style>
</style>
