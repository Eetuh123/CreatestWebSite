<template>
    <div class="exercise-modal">
        <button @click="closeModal">Close</button>
        <h2>Create Exercise</h2>
        <form @submit.prevent="submitExercise">
            <div>
                <label for="name">Name</label>
                <input
                    id="name"
                    type="text"
                    v-model="exerciseForm.name"
                    placeholder="Enter name"
                />
                <span v-if="exerciseForm.errors.name" role="alert">
                    <strong>{{ exerciseForm.errors.name }}</strong>
                </span>
            </div>
            <div>
                <label for="sets">Sets</label>
                <input
                    id="sets"
                    type="number"
                    v-model.number="exerciseForm.sets"
                    placeholder="Enter sets"
                />
                <span v-if="exerciseForm.errors.sets" role="alert">
                    <strong>{{ exerciseForm.errors.sets }}</strong>
                </span>
            </div>
            <div>
                <label for="reps">Reps</label>
                <input
                    id="reps"
                    type="number"
                    v-model.number="exerciseForm.reps"
                    placeholder="Enter reps"
                />
                <span v-if="exerciseForm.errors.reps" role="alert">
                    <strong>{{ exerciseForm.errors.reps }}</strong>
                </span>
            </div>
            <div>
                <label for="weight">Weight</label>
                <input
                    id="weight"
                    type="number"
                    v-model.number="exerciseForm.weight"
                    placeholder="Enter weight"
                />
                <span v-if="exerciseForm.errors.weight" role="alert">
                    <strong>{{ exerciseForm.errors.weight }}</strong>
                </span>
            </div>
            <div>
                <label for="rest">Rest</label>
                <input
                    id="rest"
                    type="number"
                    v-model.number="exerciseForm.rest"
                    placeholder="Enter rest"
                />
                <span v-if="exerciseForm.errors.rest" role="alert">
                    <strong>{{ exerciseForm.errors.rest }}</strong>
                </span>
            </div>
            <div>
                <label for="notes">Notes</label>
                <input
                    id="notes"
                    type="text"
                    v-model="exerciseForm.notes"
                    placeholder="Enter notes"
                />
                <span v-if="exerciseForm.errors.notes" role="alert">
                    <strong>{{ exerciseForm.errors.notes }}</strong>
                </span>
            </div>
            <PrimaryButton type="submit">Submit All</PrimaryButton>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { defineEmits } from 'vue';
import PrimaryButton from "@/Components/PrimaryButton.vue";


const emits = defineEmits(['close']);

const exerciseForm = Inertia.form({
    name: '',
    sets: '',
    reps: '',
    weight: '',
    rest: '',
    notes: '',
});

const submitExercise = () => {
    exerciseForm.post("/exercise/store", {
        onSuccsess: () => {
            // dosomething
        },
    });
};

const closeModal = () => {
    emits('close');
};

</script>

<style scoped>
</style>
