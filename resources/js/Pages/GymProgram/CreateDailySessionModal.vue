<template>
    <div>
        <form @submit.prevent="addDailySession">
            <input type="text" v-model="dailySessionForm.dailySession_name" placeholder="Session Name" />
            <select v-model="dailySessionForm.day">
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
            <button type="submit">Add Session</button>
        </form>


    </div>
</template>

<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    currentWeek: Object,
});

const dailySessionForm = Inertia.form({
    dailySession_name: "",
    day: "",
    weekly_routine_id: props.currentWeek.id,
});

const submitProgram = () => {
    dailySessionForm.post("/dailysession/store", {
        onSuccsess: () => {
            // dosomething
        },
    });
};

</script>
