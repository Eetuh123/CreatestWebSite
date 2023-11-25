<template>
  <div>
    <form @submit.prevent="submitProgram">
      <div v-if="!showTrainingBlockForm">
        <InputLabel for="name">Name</InputLabel>
        <TextInput id="name" type="text" v-model="programForm.program_name" placeholder="Enter name" />
        <InputError v-if="programForm.errors.program_name" :message="programForm.errors.program_name" />

        <InputLabel for="length">Length</InputLabel>
        <TextInput id="length" type="number" v-model.number="programForm.total_length" placeholder="Enter length" />
        <InputError v-if="programForm.errors.total_length" :message="programForm.errors.total_length" />

        <PrimaryButton type="button" @click="showTrainingBlockSection">Next</PrimaryButton>
      </div>

      <div v-if="showTrainingBlockForm">
        <InputLabel for="blockName">Training Block Name</InputLabel>
        <TextInput id="blockName" type="text" v-model="programForm.block_name" placeholder="Enter training block name" />
        <InputError v-if="programForm.errors.block_name" :message="programForm.errors.block_name" />

        <InputLabel for="blockLength">Training Block Length</InputLabel>
        <TextInput id="blockLength" type="number" v-model.number="programForm.block_length" placeholder="Enter training block length" />
        <InputError v-if="programForm.errors.block_length" :message="programForm.errors.block_length" />

        <PrimaryButton type="submit">Submit All</PrimaryButton>
      </div>
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
import { ref } from 'vue';

const showTrainingBlockForm = ref(false);

const programForm = Inertia.form({
    program_name: "",
    total_length: 12,
    block_name: "block",
    block_length: 4,
});

const submitProgram = () => {
    programForm.post("/gymprogram/store", {
        onSuccsess: () => {
            // dosomething
        }
    });
};

const showTrainingBlockSection = () => {
    showTrainingBlockForm.value = true;
};

</script>
<style scoped></style>
