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
            <div class="text-lg">{{ gymProgram.name }}</div>
            <div class="text-sm">Length of the program {{ gymProgram.total_length }}</div>
            <!-- Exercise list goes here -->
        </div>
        <div class="w-1/3 bg-gray-100 p-5 space-y-4 m-4">
            <CreateWeek :trainingBlocks="gymProgram.training_blocks" />
        </div>
        <div class="w-1/3 bg-gray-100 p-5 space-y-4 m-4">
            <div class="grid grid-cols-7 gap-2">
                <div class="weekDayName" v-for="weekDayName in weekDays" :key="weekDayName">
                    {{ weekDayName }}
                </div>
                <div class="day" v-for="{ day, month } in daysOfMonth" :key="day">
                    <div :class="getClassForDay(day, month)">
                        {{ day }}
                    </div>
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
const currentDay = ref(new Date().getDate());
const currentMonth = ref(new Date().getMonth());
const currentYear = ref(new Date().getFullYear());

const weekDays = computed(() => {
    return ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
});

const daysOfMonth = computed(() => {
    let dates = [];
    const firstDayOfMonth = new Date(currentYear.value, currentMonth.value, 1).getDay();

    // Add days from the previous month
    const prevMonthYear = currentMonth.value === 0 ? currentYear.value - 1 : currentYear.value;
    const prevMonth = currentMonth.value === 0 ? 11 : currentMonth.value - 1;
    const daysInPrevMonth = new Date(prevMonthYear, prevMonth + 1, 0).getDate();
    for (let i = firstDayOfMonth; i > 0; i--) {
        dates.push({ day: daysInPrevMonth - i + 1, month: 'prev' });
    }

    // Add days of the current month
    const daysInCurrentMonth = new Date(currentYear.value, currentMonth.value + 1, 0).getDate();
    for (let i = 1; i <= daysInCurrentMonth; i++) {
        dates.push({ day: i, month: 'current' });
    }

    // Add days from the next month to complete the week
    const daysLeft = dates.length % 7;
    for (let i = 1; i <= 7 - daysLeft; i++) {
        dates.push({ day: i, month: 'next' });
    }

    return dates;
});

const getClassForDay = (day, month) => {
    if (day === currentDay.value && month === 'current') {
        return 'bg-red-300'; // Current day
    } else if (month === 'prev') {
        return 'bg-gray-300'; // Previous month
    } else if (month === 'next') {
        return 'bg-gray-300'; // Next month
    } else {
        return ''; // Default, no specific background
    }
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
