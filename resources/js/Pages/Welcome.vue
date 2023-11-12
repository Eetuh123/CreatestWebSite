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
                <p class="text-center break-words font-bold text-black">
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
                    lorem. Praesent iaculis accumsan dolor vel consequat.
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
            >
                <div class="flex flex-col items-center">
                    <h1 class="text-center">Skills</h1>
                    <div class="px-4 text-left font-bold">
                        <p>Web Development: PHP, JavaScript, CSS, HTML</p>
                        <p>Frameworks/Libraries: Laravel, Vue.js</p>
                        <p>Version Control: Git</p>
                        <p>
                            Virtualization & Environment: Vagrant, Virtual
                            Machine (VM), Docker (Beginner)
                        </p>
                        <p>
                            Design & Planning: Wireframing (Beginner), Ink
                            Studio (Beginner)
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="w-96 h-72 bg-white rounded-3xl mb-8 shadow deep-box-shadow-left"
            >
                <div class="flex flex-col items-center">
                    <h1>Jobs</h1>
                </div>
                <div class="flex flex-col items-center">
                    <div class="px-4 text-left font-bold">
                        <p>Intern to Junior Dev in Moder</p>
                    </div>
                </div>
            </div>
            <div
                class="flex justify-center w-60 h-32 bg-white rounded-3xl shadow deep-box-shadow-left-up"
            >
                <div>
                    <h1>Contact Me</h1>
                    <div class="flex items-center">
                        <font-awesome-icon icon="fa-solid fa-phone" />
                        <p class="pl-1">+358440742509</p>
                    </div>
                    <div class="flex items-center">
                        <font-awesome-icon icon="fa-solid fa-envelope" />
                        <p class="pl-1">Eetu@moder.fi</p>
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
    box-shadow: 0 0px 2px rgba(255, 255, 255, 0.7),
        -1px 0px 1px rgba(230, 230, 230, 0.5),
        -2px 0px 2px rgba(210, 210, 210, 0.5),
        -3px 0px 3px rgba(190, 190, 190, 0.5),
        -4px 0px 4px rgba(170, 170, 170, 0.5),
        -5px 0px 5px rgba(150, 150, 150, 0.5),
        -6px 0px 6px rgba(130, 130, 130, 0.5),
        -7px 0px 7px rgba(110, 110, 110, 0.5),
        -8px 0px 8px rgba(90, 90, 90, 0.5), -9px 0px 9px rgba(70, 70, 70, 0.5),
        -10px 0px 10px rgba(50, 50, 50, 0.5),
        -20px -0px 20px rgba(0, 0, 0, 0.15), 1px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
    background: #fff;
    transition: box-shadow 0.8s ease, transform 0.8s ease;
}
.deep-box-shadow-left:hover {
    box-shadow: 0 0px 3px rgba(255, 255, 255, 0.7),
        -2px 0px 1px rgba(230, 230, 230, 0.5),
        -4px 0px 2px rgba(210, 210, 210, 0.5),
        -6px 0px 3px rgba(190, 190, 190, 0.5),
        -8px 0px 4px rgba(170, 170, 170, 0.5),
        -10px 0px 5px rgba(150, 150, 150, 0.5),
        -12px 0px 6px rgba(130, 130, 130, 0.5),
        -14px 0px 7px rgba(110, 110, 110, 0.5),
        -16px 0px 8px rgba(90, 90, 90, 0.5), -18px 0px 9px rgba(70, 70, 70, 0.5),
        -20px 0px 10px rgba(50, 50, 50, 0.5), -25px 0 25px rgba(0, 0, 0, 0.2),
        1px 0px 10px rgba(0, 0, 0, 0.1);
    transform: translate(6px);
}
.deep-box-shadow-left-up {
    box-shadow: 0 -1px 2px rgba(255, 255, 255, 0.7),
        -1px -1px 1px rgba(230, 230, 230, 0.5),
        -2px -2px 2px rgba(210, 210, 210, 0.5),
        -3px -3px 3px rgba(190, 190, 190, 0.5),
        -4px -4px 4px rgba(170, 170, 170, 0.5),
        -5px -5px 5px rgba(150, 150, 150, 0.5),
        -6px -6px 6px rgba(130, 130, 130, 0.5),
        -7px -7px 7px rgba(110, 110, 110, 0.5),
        -8px -8px 8px rgba(90, 90, 90, 0.5), -9px -9px 9px rgba(70, 70, 70, 0.5),
        -10px -10px 10px rgba(50, 50, 50, 0.5), 0 -20px 20px rgba(0, 0, 0, 0.15),
        1px 1px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
    background: #fff;
    transition: box-shadow 0.8s ease, transform 0.8s ease;
}
.deep-box-shadow-left-up:hover {
    box-shadow: 0 -2px 3px rgba(255, 255, 255, 0.7),
        -2px -2px 1px rgba(230, 230, 230, 0.5),
        -4px -4px 2px rgba(210, 210, 210, 0.5),
        -6px -6px 3px rgba(190, 190, 190, 0.5),
        -8px -8px 4px rgba(170, 170, 170, 0.5),
        -10px -10px 5px rgba(150, 150, 150, 0.5),
        -12px -12px 6px rgba(130, 130, 130, 0.5),
        -14px -14px 7px rgba(110, 110, 110, 0.5),
        -16px -16px 8px rgba(90, 90, 90, 0.5),
        -18px -18px 9px rgba(70, 70, 70, 0.5),
        -20px -20px 10px rgba(50, 50, 50, 0.5), 0 -25px 25px rgba(0, 0, 0, 0.2),
        1px 1px 10px rgba(0, 0, 0, 0.1);
    transform: translate(6px, 6px);
}
.deep-box-shadow-left-down {
    box-shadow: 0 1px 2px rgba(255, 255, 255, 0.7),
        -1px 1px 1px rgba(230, 230, 230, 0.5),
        -2px 2px 2px rgba(210, 210, 210, 0.5),
        -3px 3px 3px rgba(190, 190, 190, 0.5),
        -4px 4px 4px rgba(170, 170, 170, 0.5),
        -5px 5px 5px rgba(150, 150, 150, 0.5),
        -6px 6px 6px rgba(130, 130, 130, 0.5),
        -7px 7px 7px rgba(110, 110, 110, 0.5),
        -8px 8px 8px rgba(90, 90, 90, 0.5), -9px 9px 9px rgba(70, 70, 70, 0.5),
        -10px 10px 10px rgba(50, 50, 50, 0.5), 0 20px 20px rgba(0, 0, 0, 0.15),
        1px -1px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
    background: #fff;
    transition: box-shadow 0.8s ease, transform 0.8s ease;
}
.deep-box-shadow-left-down:hover {
    box-shadow: 0 2px 3px rgba(255, 255, 255, 0.7),
        -2px 2px 1px rgba(230, 230, 230, 0.5),
        -4px 4px 2px rgba(210, 210, 210, 0.5),
        -6px 6px 3px rgba(190, 190, 190, 0.5),
        -8px 8px 4px rgba(170, 170, 170, 0.5),
        -10px 10px 5px rgba(150, 150, 150, 0.5),
        -12px 12px 6px rgba(130, 130, 130, 0.5),
        -14px 14px 7px rgba(110, 110, 110, 0.5),
        -16px 16px 8px rgba(90, 90, 90, 0.5),
        -18px 18px 9px rgba(70, 70, 70, 0.5),
        -20px 20px 10px rgba(50, 50, 50, 0.5), 0 25px 25px rgba(0, 0, 0, 0.2),
        1px -1px 10px rgba(0, 0, 0, 0.1);
    transform: translate(6px, -6px);
}
.deep-box-shadow-right {
    box-shadow: 0 0px 2px rgba(255, 255, 255, 0.7),
        1px 0px 1px rgba(230, 230, 230, 0.5),
        2px 0px 2px rgba(210, 210, 210, 0.5),
        3px 0px 3px rgba(190, 190, 190, 0.5),
        4px 0px 4px rgba(170, 170, 170, 0.5),
        5px 0px 5px rgba(150, 150, 150, 0.5),
        6px 0px 6px rgba(130, 130, 130, 0.5),
        7px 0px 7px rgba(110, 110, 110, 0.5), 8px 0px 8px rgba(90, 90, 90, 0.5),
        9px 0px 9px rgba(70, 70, 70, 0.5), 10px 0px 10px rgba(50, 50, 50, 0.5),
        20px 0px 20px rgba(0, 0, 0, 0.15), -1px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    background: #fff;
    transition: box-shadow 0.8s ease, transform 0.8s ease;
}
.deep-box-shadow-right:hover {
    box-shadow: 0 0px 3px rgba(255, 255, 255, 0.7),
        2px 0px 1px rgba(230, 230, 230, 0.5),
        4px 0px 2px rgba(210, 210, 210, 0.5),
        6px 0px 3px rgba(190, 190, 190, 0.5),
        8px 0px 4px rgba(170, 170, 170, 0.5),
        10px 0px 5px rgba(150, 150, 150, 0.5),
        12px 0px 6px rgba(130, 130, 130, 0.5),
        14px 0px 7px rgba(110, 110, 110, 0.5),
        16px 0px 8px rgba(90, 90, 90, 0.5), 18px 0px 9px rgba(70, 70, 70, 0.5),
        20px 0px 10px rgba(50, 50, 50, 0.5), 25px 0 25px rgba(0, 0, 0, 0.2),
        -1px 0px 10px rgba(0, 0, 0, 0.1);
    transform: translate(-6px);
}
.deep-box-shadow-right-up {
    box-shadow: 0 -1px 2px rgba(255, 255, 255, 0.7),
        1px -1px 1px rgba(230, 230, 230, 0.5),
        2px -2px 2px rgba(210, 210, 210, 0.5),
        3px -3px 3px rgba(190, 190, 190, 0.5),
        4px -4px 4px rgba(170, 170, 170, 0.5),
        5px -5px 5px rgba(150, 150, 150, 0.5),
        6px -6px 6px rgba(130, 130, 130, 0.5),
        7px -7px 7px rgba(110, 110, 110, 0.5),
        8px -8px 8px rgba(90, 90, 90, 0.5), 9px -9px 9px rgba(70, 70, 70, 0.5),
        10px -10px 10px rgba(50, 50, 50, 0.5), 0 -20px 20px rgba(0, 0, 0, 0.15),
        -1px 1px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 0 20px;
    background: #fff;
    transition: box-shadow 0.8s ease, transform 0.8s ease;
}
.deep-box-shadow-right-up:hover {
    box-shadow: 0 -2px 3px rgba(255, 255, 255, 0.7),
        2px -2px 1px rgba(230, 230, 230, 0.5),
        4px -4px 2px rgba(210, 210, 210, 0.5),
        6px -6px 3px rgba(190, 190, 190, 0.5),
        8px -8px 4px rgba(170, 170, 170, 0.5),
        10px -10px 5px rgba(150, 150, 150, 0.5),
        12px -12px 6px rgba(130, 130, 130, 0.5),
        14px -14px 7px rgba(110, 110, 110, 0.5),
        16px -16px 8px rgba(90, 90, 90, 0.5),
        18px -16px 9px rgba(70, 70, 70, 0.5),
        20px -20px 10px rgba(50, 50, 50, 0.5), 0 -25px 25px rgba(0, 0, 0, 0.2),
        -1px 1px 10px rgba(0, 0, 0, 0.1);
    transform: translate(-6px, 6px);
}
.deep-box-shadow-right-down {
    box-shadow: 0 1px 2px rgba(255, 255, 255, 0.7),
        1px 1px 1px rgba(230, 230, 230, 0.5),
        2px 2px 2px rgba(210, 210, 210, 0.5),
        3px 3px 3px rgba(190, 190, 190, 0.5),
        4px 4px 4px rgba(170, 170, 170, 0.5),
        5px 5px 5px rgba(150, 150, 150, 0.5),
        6px 6px 6px rgba(130, 130, 130, 0.5),
        7px 7px 7px rgba(110, 110, 110, 0.5), 8px 8px 8px rgba(90, 90, 90, 0.5),
        9px 9px 9px rgba(70, 70, 70, 0.5), 10px 10px 10px rgba(50, 50, 50, 0.5),
        0 20px 20px rgba(0, 0, 0, 0.15), -1px -1px 10px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.8s ease, transform 0.8s ease;
}
.deep-box-shadow-right-down:hover {
    box-shadow: 0 2px 3px rgba(255, 255, 255, 0.7),
        2px 2px 1px rgba(230, 230, 230, 0.5),
        4px 4px 2px rgba(210, 210, 210, 0.5),
        6px 6px 3px rgba(190, 190, 190, 0.5),
        8px 8px 4px rgba(170, 170, 170, 0.5),
        10px 10px 5px rgba(150, 150, 150, 0.5),
        12px 12px 6px rgba(130, 130, 130, 0.5),
        14px 14px 7px rgba(110, 110, 110, 0.5),
        16px 16px 8px rgba(90, 90, 90, 0.5), 18px 18px 9px rgba(70, 70, 70, 0.5),
        20px 20px 10px rgba(50, 50, 50, 0.5), 0 25px 25px rgba(0, 0, 0, 0.2),
        -1px -1px 10px rgba(0, 0, 0, 0.1);
    transform: translate(-6px, -6px);
}
.shadow-middle {
    transition: box-shadow 0.7s ease, transform 0.5s ease;
    box-shadow: 0px 0px 2px rgba(230, 230, 230, 0.7),
        0px 0px 4px rgba(210, 210, 210, 0.7),
        0px 0px 6px rgba(190, 190, 190, 0.7),
        0px 0px 8px rgba(170, 170, 170, 0.7),
        0px 0px 10px rgba(150, 150, 150, 0.7),
        0px 0px 12px rgba(130, 130, 130, 0.7),
        0px 0px 14px rgba(110, 110, 110, 0.7),
        0px 0px 16px rgba(90, 90, 90, 0.7), 0px 0px 18px rgba(70, 70, 70, 0.7),
        0px 0px 20px rgba(50, 50, 50, 0.7), 0px 0px 22px rgba(30, 30, 30, 0.7);
    padding: 20px;
    background: #fff;
    border-radius: 10px;
}

.shadow-middle:hover {
    transform: translateY(3px);
    box-shadow: 0px 0px 3px rgba(230, 230, 230, 0.8),
        0px 0px 6px rgba(210, 210, 210, 0.8),
        0px 0px 9px rgba(190, 190, 190, 0.8),
        0px 0px 12px rgba(170, 170, 170, 0.8),
        0px 0px 15px rgba(150, 150, 150, 0.8),
        0px 0px 18px rgba(130, 130, 130, 0.8),
        0px 0px 21px rgba(110, 110, 110, 0.8),
        0px 0px 24px rgba(90, 90, 90, 0.8), 0px 0px 27px rgba(70, 70, 70, 0.8);
    padding: 20px;
}
h1 {
    @apply text-4xl font-bold text-charcoal font-mukta !important;
}
h2 {
    @apply text-lg font-semibold text-charcoal font-mukta !important;
}
p {
    @apply text-base text-charcoal font-mukta !important;
}
</style>
