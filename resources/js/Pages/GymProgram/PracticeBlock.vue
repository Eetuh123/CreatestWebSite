<template>
    <div>
        <form @submit.prevent="submitProgram">
            <!-- Name Field -->
            <InputLabel for="name">Name</InputLabel>
            <TextInput
                id="name"
                type="text"
                v-model="ProgramForm.name"
                placeholder="Enter name"
            />
            <InputError
                v-if="ProgramForm.errors.name"
                :message="ProgramForm.errors.name"
            />

            <!-- Length Field -->
            <InputLabel for="length">Length</InputLabel>
            <TextInput
                id="length"
                type="number"
                v-model.number="ProgramForm.length"
                placeholder="Enter length"
            />
            <InputError
                v-if="ProgramForm.errors.length"
                :message="ProgramForm.errors.length"
            />

            <PrimaryButton type="submit">Submit</PrimaryButton>
        </form>
    </div>
</template>

<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Inertia } from "@inertiajs/inertia";
import Checkbox from "@/Components/Checkbox.vue";

const ProgramForm = Inertia.form({
    name: "",
    length: "",
});

const submitProgram = () => {
    ProgramForm.post("/gymprogram/store", {});
};
</script>
<style scoped></style>
