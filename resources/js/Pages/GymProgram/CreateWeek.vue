<template>
    <div>
        <form @submit.prevent="submitWeek">
            <div>
                <InputLabel for="weekName">Name</InputLabel>
                <TextInput id="weekName" type="text" v-model="weeklyForm.week_name" placeholder="Enter name" />
                <InputError v-if="weeklyForm.errors.week_name" :message="weeklyForm.errors.week_name" />

                <InputLabel for="occurrenceWeeks">Occurrence Weeks</InputLabel>
                <TextInput id="occurrenceWeeks" type="number" v-model.number="weeklyForm.occurrence_weeks" placeholder="Enter length" />
                <InputError v-if="weeklyForm.errors.occurrence_weeks" :message="weeklyForm.errors.occurrence_weeks" />

                <!-- Dropdown to select a training block -->
                <select id="trainingBlock" v-model="weeklyForm.training_block_id">
                <option disabled value="">Please select a training block</option>
                <option v-for="block in trainingBlocks" :key="block.id" :value="block.id">
                {{ block.name }}
                </option>
                </select>

                <PrimaryButton type="submit">Submit All</PrimaryButton>
            </div>
        </form>
    </div>
</template>

<script setup>
import { ref, reactive } from "vue";
import axios from "axios";
import { usePage } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import { defineProps } from 'vue';
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

const props = defineProps({
  trainingBlocks: {
    type: Array,
    default: () => []
  },
  gymProgram: Object,
});

const weeklyForm = Inertia.form({
        week_name: "",
        occurrence_weeks: "",
        training_block_id: null,

});

const submitWeek = () => {
    weeklyForm.post("/weeklyroutine/store", {
        onSuccess: () => {
            // Do something on success, like redirecting or showing a success message
        },
        onError: () => {
            // Handle errors, like showing an error message
        }
    });
};
</script>
<style>
</style>
