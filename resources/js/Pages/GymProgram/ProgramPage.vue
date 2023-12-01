<template>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-1/3 bg-gray-100 p-5 space-y-4 m-4">
            <div>
                <p v-if="user">{{ user.name }}</p>
                <button
                    class="mb-4 text-blue-600 hover:text-blue-700 focus:outline-none"
                    @click="logout"
                >
                    Logout
                </button>
            </div>
            <div class="text-lg">Gym Program name</div>
            <div class="text-sm">Days name + automatic/hardcoded day</div>
            <!-- Exercise list goes here -->
        </div>
        <div class="w-1/3 bg-gray-100 p-5 space-y-4 m-4">
            <CreateWeek :trainingBlocks="gymProgram.training_blocks" />
        </div>
        <div class="w-1/3 bg-gray-100 p-5 space-y-4 m-4">
            <div class="grid grid-cols-7 gap-2">
                <div class="day" v-for="day in daysOfMonth" :key="day">
                    {{ day }}
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { toRefs, ref, reactive, onMounted, computed } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { usePage } from "@inertiajs/inertia-vue3";
import axios from "axios";
import CreateProgram from "./CreateProgram.vue";
import CreateWeek from "./CreateWeek.vue";

const { props } = usePage();
const { user, gymProgram } = toRefs(props.value);
const currentMonth = ref(new Date().getMonth());
const currentYear = ref(new Date().getFullYear());

const daysOfMonth = computed(() => {
    const daysInMonth = new Date(
        currentYear.value,
        currentMonth.value + 1,
        0
    ).getDate();
    return Array.from({ length: daysInMonth }, (_, i) => i + 1);
});

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
