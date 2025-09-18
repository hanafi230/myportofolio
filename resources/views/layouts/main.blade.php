<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        @keyframes turun {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                transform: translateY(100vh);
                opacity: 0;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-turun {
            animation: turun 5s linear infinite;
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 1.5s ease-out forwards;
        }

        .active-icon i {
            transform: scale(1.3);
            transition: transform 0.3s, color 0.3s;
        }

        #btn-instagram.active-icon {
            color: #ec4899;
        }

        /* pink-500 */
        #btn-linkedin.active-icon {
            color: #60a5fa;
        }

        /* blue-400 */
        #btn-email.active-icon {
            color: #22c55e;
        }

        /* green-400 */
        #btn-youtube.active-icon {
            color: #ef4444;
        }
    </style>
</head>

<body class="m-0 p-0 bg-cover bg-center bg-fixed overflow-x-hidden"
    style="background-image: url('{{ asset('assets/img/background.jpg') }}')">

    <div class="relative h-screen w-screen">
        <!-- Overlay hujan -->
        <div class="fixed inset-0 overflow-hidden">
            @for ($i = 0; $i < 10; $i++)
                <div class="absolute top-0 bg-white rounded-sm animate-turun w-[1px] sm:h-12"
                    style="left: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 5) }}s;">
                </div>
            @endfor
        </div>

        <div
            class="absolute inset-0 flex flex-col md:flex-row items-center justify-center text-center md:text-left space-y-6 md:space-y-0 md:space-x-10 px-4">
            <div class="max-w-xl fade-in order-2 md:order-1" style="animation-delay: 1s;">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4">Turning Ideas into Code — I'm
                    Hanafi </h1>
                <p class="text-sm sm:text-lg md:text-2xl text-gray-200 leading-relaxed">
                    As a Fullstack Developer with strong experience in PHP and Laravel, I design and implement dynamic
                    web
                    applications that bridge functionality and user-friendly design. I enjoy working with modern
                    frameworks,
                    optimizing system workflows, and delivering solutions that support business growth.
                </p>

            </div>

            <div class="fade-in order-1 md:order-2 w-full md:w-auto flex justify-center" style="animation-delay: 0.5s;">
                <img src="{{ asset('assets/img/avatar.png') }}" alt="avatar"
                    class="w-40 sm:w-56 md:w-72 lg:w-80 h-auto object-contain">
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-700/50 text-sm sm:text-2xl flex flex-col items-center">
        <h1 class="text-center mb-6 text-2xl sm:text-3xl md:text-4xl font-bold text-white">Technical Skills</h1>
        <div class="flex flex-wrap justify-center gap-4 mt-4 text-white max-w-[900px]">
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fab fa-html5 text-orange-500"></i><span>HTML</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fab fa-css3-alt text-blue-500"></i><span>CSS</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fas fa-paint-brush text-cyan-400"></i><span>Tailwind</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fab fa-php text-indigo-400"></i><span>PHP</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fab fa-laravel text-red-500"></i><span>Laravel</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fab fa-js text-yellow-400"></i><span>JavaScript</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fas fa-database text-blue-400"></i><span>MySQL</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fas fa-database text-green-400"></i><span>PostgreSQL</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fas fa-server text-gray-300"></i><span>MS Server</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fas fa-video text-pink-400"></i><span>Adobe Premiere Pro</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fas fa-image text-blue-300"></i><span>Adobe Photoshop</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fas fa-pen-nib text-purple-400"></i><span>Canva</span>
            </div>
            <div class="flex items-center gap-2 border border-white/20 px-4 py-2 rounded-full bg-gray-800/60">
                <i class="fas fa-scissors text-red-400"></i><span>Capcut</span>
            </div>
        </div>
    </div>

    <div class="px-4 py-8">
        <h1 class="text-center mb-6 text-2xl sm:text-3xl md:text-4xl font-bold text-white">Last Projects</h1>

        @php
            $projects = [
                [
                    '01',
                    'JWALBLI',
                    'Jwalbli is a webcommerce platform for your various types of business, which aims to build and strengthen your brand.',
                    'https://jwalbli.com',
                ],
                [
                    '02',
                    'SEGARSEGAR',
                    'SegarSegar is an ecommerce platform for selling fresh products such as fruit, vegetables, meat and others.',
                    'https://segarsegar.com',
                ],
                [
                    '03',
                    'CUCICUCIAN',
                    'Cucicucian is the best platform for creating sophisticated on-demand laundry services.',
                    'https://cucicucian.com',
                ],
                [
                    '04',
                    'DAYCAREPLATFORM',
                    'DaycarePlatform is an all-in-one platform that simplifies daycare management.',
                    'https://daycareplatform.com',
                ],
                [
                    '05',
                    'LANVEKSI',
                    'Lanveksi is a platform where you can find and purchase items from the apparel and garment industry that are auctioned directly for sale.',
                    'https://lanveksi.com',
                ],
                [
                    '06',
                    'NEWS PT SCI',
                    "This newsletter serves as an internal communication platform designed to keep everyone informed, aligned, and engaged. Here, you'll find company updates, departmental highlights, key initiatives, upcoming events, and insights that support our shared goals and values.",
                    'https://news.ptsci.id/',
                ],
            ];
        @endphp

        @foreach ($projects as $p)
            <div class="space-y-4 relative text-white/70 hover:text-white">
                <div
                    class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-start sm:items-center text-sm sm:text-lg md:text-xl leading-relaxed">
                    <div class="sm:col-span-1 font-semibold">{{ $p[0] }}</div>
                    <div class="sm:col-span-3 font-semibold">{{ $p[1] }}</div>
                    <div class="sm:col-span-7">
                        <p>{{ $p[2] }}</p>
                    </div>
                    <div class="sm:col-span-1 flex sm:justify-center sm:items-center">
                        <a href="{{ $p[3] }}">
                            <i
                                class="fa-solid fa-arrow-up-right-from-square text-lg sm:text-xl md:text-2xl hover:scale-125 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>
                <hr class="border-gray-600">
            </div>
        @endforeach
    </div>

    <div class="p-6 bg-gray-900 text-white">
        <h1 class="text-center mb-6 text-2xl sm:text-3xl md:text-4xl font-bold text-white">Social Accounts</h1>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="text-center md:text-left">
                <h2 class="text-2xl sm:text-3xl font-bold mb-4">Connect with me on my social accounts</h2>
                <p class="text-gray-400 text-sm sm:text-base">
                    Follow my journey, projects, and updates directly my social accounts.
                    Click the links or check out my feed on the right.
                </p>

                <div class="flex gap-6 text-2xl items-center relative z-50">
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                    <button id="btn-instagram" onclick="showTab('instagram')" class="hover:text-pink-500">
                        <i class="fab fa-instagram"></i>
                    </button>
                    <button id="btn-linkedin" onclick="showTab('linkedin')" class="hover:text-blue-400">
                        <i class="fab fa-linkedin"></i>
                    </button>
                    <button id="btn-email" onclick="showTab('email')" class="hover:text-green-400">
                        <i class="fas fa-envelope"></i>
                    </button>
                    <button id="btn-youtube" onclick="showTab('youtube')" class="hover:text-red-500">
                        <i class="fab fa-youtube"></i>
                    </button>
                </div>
            </div>
            <div class="w-full sm:max-w-[500px] mx-auto">
                <div id="tab-instagram" class="tab-content">
                    <iframe class="w-full h-[600px] rounded-lg border border-gray-300 shadow-sm"
                        src="https://www.instagram.com/mashnfi_/embed/" frameborder="0" scrolling="no"></iframe>
                </div>
                <div id="tab-linkedin" class="tab-content hidden">
                    <div class="w-full rounded-lg border border-gray-300 shadow-sm bg-gray-100 font-sans h-[600px]">
                        <div class="bg-white shadow-md rounded-lg max-w-4xl mx-auto">
                            <div class="relative">
                                <div class="h-32 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-t-lg"></div>
                                <div class="absolute left-6 -bottom-12">
                                    <img src="{{ asset('assets/img/hanafi.png') }}" alt="Profile"
                                        class="w-32 h-32 rounded-full border-4 border-white shadow-md">
                                </div>
                            </div>
                            <div class="pt-16 px-6 pb-6">
                                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
                                    <div>
                                        <h1 class="text-2xl font-bold text-gray-800">Hanafi Abdullah</h1>
                                        <p class="text-gray-600">Software Engineer | Web Developer | Problem Solver</p>
                                        <p class="text-sm text-gray-500 mt-1"><i
                                                class="fa-solid fa-location-dot mr-1"></i>
                                            Jakarta, Indonesia ·
                                            <a href="https://www.linkedin.com/in/hanafi-abdullah-247113269/"
                                                target="_blank" class="text-blue-600 hover:underline">View on
                                                LinkedIn</a>
                                        </p>
                                    </div>
                                    <div class="mt-4 sm:mt-0 flex gap-3 relative z-50">
                                        <a href="https://www.linkedin.com/in/hanafi-abdullah-247113269/"
                                            target="_blank"
                                            class="bg-blue-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-700 transition">Connect</a>
                                        <button
                                            class="border px-4 py-2 rounded-full font-semibold hover:bg-gray-100 transition">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow-md rounded-lg max-w-4xl mx-auto mt-6 p-6">
                            <h2 class="text-xl font-bold text-gray-800 mb-4">Experience</h2>

                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <img src="https://via.placeholder.com/50" alt="Company Logo"
                                        class="w-12 h-12 rounded">
                                    <div>
                                        <h3 class="text-lg font-semibold">Frontend Developer</h3>
                                        <p class="text-gray-600">PT Teknologi Indonesia · Full-time</p>
                                        <p class="text-sm text-gray-500">Jan 2023 – Present · 1 yr 9 mos</p>
                                        <p class="text-sm text-gray-500">Jakarta, Indonesia · On-site</p>
                                        <ul class="list-disc ml-5 text-sm text-gray-700 mt-2 space-y-1">
                                            <li>Membangun antarmuka web dengan React & Tailwind CSS</li>
                                            <li>Berkolaborasi dengan tim backend untuk integrasi API</li>
                                            <li>Optimasi performa dan aksesibilitas website</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="tab-email" class="tab-content hidden relative z-50">
                    <div class="w-full h-[600px] overflow-y-auto bg-white rounded-xl shadow-lg p-8">
                        <div class="flex flex-col items-center text-center">
                            <img src="{{ asset('assets/img/hanafi.png') }}" alt="Profile"
                                class="w-24 h-24 rounded-full shadow-md border-2 border-gray-200" />
                            <h3 class="text-2xl font-bold mt-4">Hanafi Abdullah</h3>
                            <p class="text-gray-500 text-sm">Let’s connect via email</p>
                        </div>
                        <form class="mt-6 space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Your Name</label>
                                <input type="text" placeholder="Enter your name"
                                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Your Email</label>
                                <input type="email" placeholder="example@gmail.com"
                                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Message</label>
                                <textarea rows="4" placeholder="Write your message..."
                                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                            </div>

                            <button
                                class="w-full bg-blue-600 text-white font-semibold px-4 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                                Send Message
                            </button>
                        </form>
                        <p class="text-xs text-gray-400 text-center mt-6">Or email me directly at
                            <a href="mailto:yourmail@example.com"
                                class="text-blue-600 hover:underline">yourmail@example.com</a>
                        </p>
                    </div>
                </div>
                <div id="tab-youtube" class="tab-content hidden">
                    <div class="bg-white shadow-md rounded-lg w-full h-[600px] overflow-y-auto relative z-50">
                        <div class="h-40 bg-gradient-to-r from-red-600 to-pink-600 rounded-t-lg relative">
                            <img src="{{ asset('assets/img/mzhans.jpg') }}" alt="Profile" alt="Profile"
                                class="absolute left-6 -bottom-12 w-24 h-24 rounded-full border-4 border-white shadow-md">
                        </div>
                        <div class="pt-16 px-6">
                            <h1 class="text-2xl font-bold text-gray-800">Mzhans</h1>
                            <p class="text-gray-600">@mzhans · YouTube Channel</p>
                            <p class="text-sm text-gray-500 mt-1">Journey through the vast wilderness
                            </p>

                            <div class="mt-4 flex gap-3 relative z-50">
                                <a href="https://www.youtube.com/@mzhans" target="_blank"
                                    class="bg-red-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-red-700 transition">
                                    Subscribe
                                </a>
                            </div>
                        </div>

                        <div class="px-6 mt-6">
                            <h2 class="text-lg font-bold text-gray-800 mb-4">Latest Videos</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="bg-gray-100 rounded-lg overflow-hidden shadow">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/qwZE3YooVRQ?si=7EF8vXqXVCZI-e7Y"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <div class="p-2">
                                        <p class="font-semibold text-sm text-gray-800">Judul Video 1</p>
                                    </div>
                                </div>

                                <div class="bg-gray-100 rounded-lg overflow-hidden shadow">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/wM95kKbpwbU?si=u0pqWlnt-f9TYjAF"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <div class="p-2">
                                        <p class="font-semibold text-sm text-gray-800">Judul Video 2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="bg-black text-white py-6 mt-10 relative z-50">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4 px-4">
            <p class="text-sm text-gray-400">&copy; 2025 Hanafi Abdullah. All rights reserved.</p>
            <div class="flex gap-6 text-2xl">
                <a href="https://www.instagram.com/mashnfi_" target="_blank" class="hover:text-pink-500"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/username" target="_blank" class="hover:text-blue-400"><i
                        class="fab fa-linkedin"></i></a>
                <a href="mailto:yourmail@example.com" class="hover:text-green-400"><i
                        class="fas fa-envelope"></i></a>
                <a href="https://www.youtube.com/@mzhans" target="_blank" class="hover:text-red-500"><i
                        class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>
<script>
    function showTab(tab) {
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        document.getElementById(`tab-${tab}`).classList.remove('hidden');
    }
    const tabs = ["instagram", "linkedin", "email", "youtube"];
    let currentIndex = 0;

    function showTab(tab) {
        document.querySelectorAll(".tab-content").forEach(el => el.classList.add("hidden"));
        document.getElementById("tab-" + tab).classList.remove("hidden");
        document.querySelectorAll(".flex button").forEach(el => el.classList.remove("active-icon"));
        document.getElementById("btn-" + tab).classList.add("active-icon");
    }
    setInterval(() => {
        currentIndex = (currentIndex + 1) % tabs.length;
        showTab(tabs[currentIndex]);
    }, 3000);
    showTab(tabs[0]);
</script>
