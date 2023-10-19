<template>
    <Head title="Welcome" />
    <div class="flex flex-row h-screen bg-#E0E0E0">
        <div
            class="flex flex-col flex-1 my-14 ml-56 row-1 justify-start items-center"
        >
            <div
                class="relative w-64 h-64 my-8 bg-white rounded-full mb-2 shadow deep-box-shadow-right-down"
            >
                <div
                    class="flex justify-center font-awesome-icon items-center bottom- left- absolute w-32 h-32 bg-white rounded-full shadow deep-box-shadow-right-down"
                ></div>
                <div
                    class="flex justify-center font-awesome-icon items-center h-14 w-14 bottom-10 -left-12 bg-white rounded-full shadow absolute hover:bg-black"
                >
                    <font-awesome-icon icon="fa-brands fa-github" size="2x" />
                </div>
                <div
                    class="flex justify-center font-awesome-icon items-center h-14 w-14 -bottom-4 -left-4 bg-white rounded-full shadow absolute hover:bg-blue-600"
                >
                    <font-awesome-icon
                        icon="fa-brands fa-linkedin-in"
                        size="2x"
                    />
                </div>
            </div>
            <div
                class="w-96 h-16 my-10 bg-white rounded-3xl shadow deep-box-shadow-right"
            >
                <h1 class="text-center text-4xl font-bold text-black">
                    Eetu Huotari
                </h1>
                <h2 class="text-center text-4xl font-bold text-black">
                    Software Developer
                </h2>
            </div>
            <div
                class="w-96 h-96 bg-white rounded-3xl shadow deep-box-shadow-right-up"
            >
                <h1 class="text-center text-4xl font-bold text-black">
                    About me
                </h1>
                <p
                    class="text-center break-words text-2xl font-bold text-black"
                >
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Duis sed velit vel libero congue venenatis a quis orci.
                    Phasellus tristique nisl a nisi maximus suscipit. Nam mattis
                    quis sapien at cursus. Vestibulum luctus turpis a mollis
                    iaculis. Vestibulum fringilla urna et bibendum dapibus. Sed
                    efficitur dolor ornare molestie sodales. Sed et risus diam.
                    Aenean semper nisi ac laoreet accumsan. Nulla tincidunt
                    vehicula dui, sit amet ullamcorper velit pharetra ut. Nunc
                    placerat, tortor eget semper scelerisque, libero mi tempor
                    elit, eget dapibus metus tellus vitae mauris. In id quam
                    lorem. Praesent iaculis accumsan dolor vel consequat. In non
                    elit velit. Nulla auctor eget lorem sit amet accumsan. Sed
                    accumsan purus sit amet risus congue.
                </p>
            </div>
        </div>
        <div
            class="flex flex-col flex-1 my-14 row-2 justify-start rounded-3xl items-center"
        >
            <div
                class="flex flex-col items-center w-96 my-16 h-5/6 bg-white rounded-3xl shadow shadow-middle"
            >
                <h1 class="text-center text-4xl font-bold text-black">
                    Project Name
                </h1>
                <div class="flex h-44">
                    <p
                        class="text-center break-words text-2xl font-bold text-black"
                    >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis sed velit vel libero congue venenatis a quis orci.
                        Phasellus tristique nisl a nisi maximus suscipit.Lorem
                        ipsum dolor sit amet, consectetur adipiscing elit. Duis
                        sed velit vel libero congue venenatis a quis orci.
                        Phasellus tristique nisl a nisi maximus suscipit.
                    </p>
                </div>
                <div
                    class="flex justify-center bg-black h-2/6 w-5/6 mb-2"
                ></div>
                <h1 class="text-center text-4xl font-bold text-black">
                    Technologies used
                </h1>
                <div class="h-32 mb-2">
                    <p
                        class="text-center break-words text-2xl font-bold text-black"
                    ></p>
                </div>
            </div>
        </div>
        <div
            class="flex flex-col flex-1 my-14 mr-56 row-3 justify-start items-center"
        >
            <div
                class="w-96 h-72 mt-14 bg-white rounded-3xl mb-8 shadow deep-box-shadow-left-down"
            ></div>
            <div
                class="w-96 h-72 bg-white rounded-3xl mb-8 shadow deep-box-shadow-left"
            ></div>
            <div
                class="flex justify-center w-60 h-32 bg-white rounded-3xl shadow deep-box-shadow-left-up"
            >
                <div>
                    <h1>Contact Me</h1>
                    <div class="flex items-center">
                        <font-awesome-icon icon="fa-solid fa-phone" />
                        <span>&nbsp; Your phone number here</span>
                    </div>
                    <div class="flex items-center">
                        <font-awesome-icon icon="fa-solid fa-envelope" />
                        <span>&nbsp; Your email address here</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { Head, Link } from "@inertiajs/vue3";
</script>

<style>
.font-awesome-icon svg {
    color: #000; /* Initial color */
    transition: color 0.3s ease; /* Optional: Smooth transition */
}

/* Style for hover state */
.font-awesome-icon:hover svg {
    color: #fff; /* Color on hover */
}
.deep-box-shadow-left {
    box-shadow: 0 1px 0 #fff, -1px 0 0 #2e2e2e, -2px 0 0 #2c2c2c,
        -3px 0 0 #2a2a2a, -4px 0 0 #282828, -5px 0 0 #262626, -6px 0 0 #242424,
        -7px 0 0 #222, -8px 0 0 #202020, -9px 0 0 #1e1e1e, -10px 0 0 #1c1c1c,
        -11px 0 0 #1a1a1a, -12px 0 0 #181818, -13px 0 0 #161616,
        -14px 0 0 #141414, -15px 0 0 #121212, 22px 0px 30px rgba(0, 0, 0, 0.9);
}
.deep-box-shadow-left-up {
    box-shadow: 0 1px 0 #fff, -1px -1px 0 #2e2e2e, -2px -2px 0 #2c2c2c,
        -3px -3px 0 #2a2a2a, -4px -4px 0 #282828, -5px -5px 0 #262626,
        -6px -6px 0 #242424, -7px -7px 0 #222, -8px -8px 0 #202020,
        -9px -9px 0 #1e1e1e, -10px -10px 0 #1c1c1c, -11px -11px 0 #1a1a1a,
        -12px -12px 0 #181818, -13px -13px 0 #161616, -14px -14px 0 #141414,
        -15px -15px 0 #121212, 22px 22px 30px rgba(0, 0, 0, 0.9);
}
.deep-box-shadow-left-down {
    box-shadow: 0 1px 0 #fff, -1px 1px 0 #2e2e2e, -2px 2px 0 #2c2c2c,
        -3px 3px 0 #2a2a2a, -4px 4px 0 #282828, -5px 5px 0 #262626,
        -6px 6px 0 #242424, -7px 7px 0 #222, -8px 8px 0 #202020,
        -9px 9px 0 #1e1e1e, -10px 10px 0 #1c1c1c, -11px 11px 0 #1a1a1a,
        -12px 12px 0 #181818, -13px 13px 0 #161616, -14px 14px 0 #141414,
        -15px 15px 0 #121212, 22px -22px 30px rgba(0, 0, 0, 0.9);
}
.deep-box-shadow-right {
    box-shadow: 0 1px 0 #fff, 1px 0 0 #2e2e2e, 2px 0 0 #2c2c2c, 3px 0 0 #2a2a2a,
        4px 0 0 #282828, 5px 0 0 #262626, 6px 0 0 #242424, 7px 0 0 #222,
        8px 0 0 #202020, 9px 0 0 #1e1e1e, 10px 0 0 #1c1c1c, 11px 0 0 #1a1a1a,
        12px 0 0 #181818, 13px 0 0 #161616, 14px 0 0 #141414, 15px 0 0 #121212,
        -22px 0px 30px rgba(0, 0, 0, 0.9);
}

.deep-box-shadow-right-up {
    box-shadow: 0 1px 0 #fff, 1px -1px 0 #2e2e2e, 2px -2px 0 #2c2c2c,
        3px -3px 0 #2a2a2a, 4px -4px 0 #282828, 5px -5px 0 #262626,
        6px -6px 0 #242424, 7px -7px 0 #222, 8px -8px 0 #202020,
        9px -9px 0 #1e1e1e, 10px -10px 0 #1c1c1c, 11px -11px 0 #1a1a1a,
        12px -12px 0 #181818, 13px -13px 0 #161616, 14px -14px 0 #141414,
        15px -15px 0 #121212, -22px 22px 30px rgba(0, 0, 0, 0.9);
}

.deep-box-shadow-right-down {
    box-shadow: 0 1px 0 #fff, 1px 1px 0 #2e2e2e, 2px 2px 0 #2c2c2c,
        3px 3px 0 #2a2a2a, 4px 4px 0 #282828, 5px 5px 0 #262626,
        6px 6px 0 #242424, 7px 7px 0 #222, 8px 8px 0 #202020, 9px 9px 0 #1e1e1e,
        10px 10px 0 #1c1c1c, 11px 11px 0 #1a1a1a, 12px 12px 0 #181818,
        13px 13px 0 #161616, 14px 14px 0 #141414, 15px 15px 0 #121212,
        -22px -22px 30px rgba(0, 0, 0, 0.9);
}
.shadow-middle {
    box-shadow: 0 1px 0 #fff, -10px -10px 30px rgba(0, 0, 0, 0.9),
        10px 10px 30px rgba(0, 0, 0, 0.9);
}
h1 {
    @apply text-4xl font-bold text-gray-900 font-mukta !important;
}
h2 {
    @apply text-lg font-semibold text-gray-800 font-mukta !important;
}
p {
    @apply text-base text-gray-600 font-mukta !important;
}
</style>
