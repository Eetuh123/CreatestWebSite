<template>
    <GuestLayout>
        <Head title="Login/Register" />

        <!-- Toggle Button or Links -->
        <div class="text-center">
            <button
                @click="showLoginForm = !showLoginForm"
                class="underline text-sm"
            >
                {{ showLoginForm ? "Register" : "Login" }}
            </button>
        </div>

        <!-- Login Form -->
        <form @submit.prevent="submitLogin" v-if="showLoginForm">
                        <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="loginForm.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="loginForm.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="loginForm.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="loginForm.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="loginForm.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton
                    class="ml-4"
                    :class="{ 'opacity-25': loginForm.processing }"
                    :disabled="loginForm.processing"
                >
                    Log in
                </PrimaryButton>
            </div>
        </form>

        <!-- Registration Form -->
        <form @submit.prevent="submitRegister" v-else>
              <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="registerForm.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="registerForm.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="registerForm.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="registerForm.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="registerForm.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="registerForm.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel
                    for="password_confirmation"
                    value="Confirm Password"
                />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="registerForm.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError
                    class="mt-2"
                    :message="registerForm.errors.password_confirmation"
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton
                    class="ml-4"
                    :class="{ 'opacity-25': registerForm.processing }"
                    :disabled="registerForm.processing"
                >
                    Register
                </PrimaryButton>
        </form>
    </GuestLayout>
</template>

<script setup>
import { reactive, ref } from "vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import Checkbox from "@/Components/Checkbox.vue";

const showLoginForm = ref(true);

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const loginForm = reactive({
    email: "",
    password: "",
    remember: false,
});
const registerForm = reactive({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submitLogin = () => {
    loginForm.post(route("login"), {
        onFinish: () => loginForm.reset("password"),
    });
};

const submitRegister = () => {
        registerForm.post(route("register"), {
        onFinish: () => registerForm.reset("password", "password_confirmation"),
    });
};

</script>
