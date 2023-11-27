<template>
  <div class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-1/3 bg-gray-100 p-5 space-y-4 m-4">
      <p v-if="user">{{ user.name }}</p>
        <button class="mb-4 text-blue-600 hover:text-blue-700 focus:outline-none" @click="logout">Logout</button>
      <div class="text-lg">Gym Program name</div>
      <div class="text-sm">Days name + automatic/hardcoded day</div>
      <!-- Exercise list goes here -->
    </div>

  </div>
</template>


<script setup>
import { toRefs, ref, reactive, onMounted, computed } from "vue";
import axios from "axios";
import CreateProgram from "./CreateProgram.vue";
import { usePage } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const { props } = usePage();
const { user, gymPrograms } = toRefs(props.value);

console.log("Full Props Value:", props.value);

const logout = () => {
    Inertia.post('/logout'
    );
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
