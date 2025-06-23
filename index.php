<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAE Real Estate Wealth Blueprint</title>
    <!-- CDNs -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <style>
        body {
            overflow: hidden;
        }
        .bg-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.3;
            pointer-events: none;
        }


            overflow: hidden;
        }
        .slides-container {
            display: flex;
            transition: transform 0.7s ease;
            width: 100%;


            overflow-x: hidden;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;


        }
        .slide {
            width: 100vw;
            height: 100vh;
            flex-shrink: 0;


            scroll-snap-align: start;

            overflow-y: auto;
        }
        .progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: rgba(255,255,255,0.1);
            z-index: 100;
        }
        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #f59e0b, #ef4444);
            width: 0%;
            transition: width 0.1s ease;
        }
        .stat-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .highlight-text {
            background: linear-gradient(90deg, #f59e0b, #ef4444);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .nav-dot {
            width: 12px;
            height: 12px;
            border: 2px solid white;
            transition: all 0.3s ease;
        }
        .nav-dot.active {
            background: white;
            transform: scale(1.2);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-900 to-indigo-900 text-white font-sans relative overflow-hidden">
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <video class="bg-video" autoplay loop muted playsinline>
            <source src="https://investwithbimal.com/assets/images/Pro.mp4" type="video/mp4">
        </video>
    </div>
    <!-- Progress bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>
    <!-- Navigation dots -->
    <div class="fixed right-8 top-1/2 transform -translate-y-1/2 z-50 hidden md:flex flex-col space-y-4">
        <div class="nav-dot rounded-full cursor-pointer active" data-slide="0"></div>
        <div class="nav-dot rounded-full cursor-pointer" data-slide="1"></div>
        <div class="nav-dot rounded-full cursor-pointer" data-slide="2"></div>
        <div class="nav-dot rounded-full cursor-pointer" data-slide="3"></div>
        <div class="nav-dot rounded-full cursor-pointer" data-slide="4"></div>
        <div class="nav-dot rounded-full cursor-pointer" data-slide="5"></div>
        <div class="nav-dot rounded-full cursor-pointer" data-slide="6"></div>
        <div class="nav-dot rounded-full cursor-pointer" data-slide="7"></div>
    </div>
    <div id="slidesContainer" class="slides-container">
    <!-- Slide 1: Title Slide -->
    <div class="slide flex-shrink-0 p-8 md:p-12 flex flex-col items-center justify-center text-center" data-index="0">
        <div data-aos="zoom-in">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 highlight-text">The UAE Real Estate Wealth Blueprint</h1>
            <h2 class="text-2xl md:text-3xl font-semibold text-amber-300 mb-8">Why Dubai, Abu Dhabi &amp; Ras Al Khaimah Are Global Investor Magnets</h2>
            <div class="flex justify-center mb-8">
                <span class="w-32 h-1 bg-amber-400 rounded-full"></span>
            </div>
            <p class="text-xl mb-2">Presentation by <span class="font-bold">Bimal Lulla</span></p>
            <p class="text-lg">CEO, Blue Collection Real Estate</p>
            <p class="text-gray-300 mt-4">Geneva, June 2025</p>
        </div>
    </div>
    <!-- Slide 2: Introduction -->
    <div class="slide flex-shrink-0 p-8 md:p-12" data-index="1">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Introduction: A New Era of UAE Property Wealth</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-amber-400 mr-2 text-3xl">trending_up</i>
                        <h3 class="text-xl font-bold">Record Transactions</h3>
                    </div>
                    <p class="mb-4">The United Arab Emirates is experiencing an unprecedented real estate boom focused on its residential sector.</p>
                    <div class="pulse-animation bg-blue-800 bg-opacity-50 p-4 rounded-lg">
                        <p class="text-4xl font-bold text-center text-white mb-2">226,000</p>
                        <p class="text-center">Dubai real estate transactions in 2024</p>
                        <p class="text-center text-sm text-green-300">(+36% YoY)</p>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-purple-300 mr-2 text-3xl">group_add</i>
                        <h3 class="text-xl font-bold">Investor Influx</h3>
                    </div>
                    <p class="mb-4">Key emirates – Dubai, Abu Dhabi, and Ras Al Khaimah (RAK) – have become global investor magnets.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-indigo-800 p-4 rounded-lg text-center">
                            <p class="text-2xl font-bold">110k+</p>
                            <p class="text-sm">New investors entered Dubai in 2024</p>
                        </div>
                        <div class="bg-indigo-800 p-4 rounded-lg text-center">
                            <p class="text-2xl font-bold">55%</p>
                            <p class="text-sm">Increase in new investors</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-green-300 mr-2 text-3xl">emoji_events</i>
                    <h3 class="text-xl font-bold">Growth Drivers</h3>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                        <span>Favorable government policies and 4% GDP growth</span>
                    </li>
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                        <span>Safe-haven status amidst global uncertainty</span>
                    </li>
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                        <span>Zero property taxes and high returns</span>
                    </li>
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                        <span>Residency benefits through Golden Visa</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Slide 3: Global Appeal -->
    <div class="slide flex-shrink-0 p-8 md:p-12" data-index="2">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Global Appeal: Tax Advantages &amp; Investor Trends</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-red-300 mr-2 text-3xl">savings</i>
                        <h3 class="text-xl font-bold">Tax-Free Income</h3>
                    </div>
                    <p>No personal income tax on rental yields and no capital gains tax on property sales.</p>
                    <div class="mt-4 p-3 bg-red-900 bg-opacity-30 rounded-lg">
                        <p class="text-center font-bold text-lg">5-9%</p>
                        <p class="text-center text-sm">Gross rental yields in Dubai</p>
                        <p class="text-center text-xs text-gray-300">(vs 2-4% in London/NYC)</p>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-blue-300 mr-2 text-3xl">badge</i>
                        <h3 class="text-xl font-bold">Golden Visa</h3>
                    </div>
                    <p>10-year renewable residency for property investors meeting minimum investment.</p>
                    <div class="mt-4 p-3 bg-blue-900 bg-opacity-30 rounded-lg">
                        <p class="text-center font-bold text-lg">AED 2M</p>
                        <p class="text-center text-sm">(~$545,000) investment threshold</p>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-green-300 mr-2 text-3xl">shield</i>
                        <h3 class="text-xl font-bold">Safe Haven</h3>
                    </div>
                    <p>Currency pegged to USD, politically stable with world-class property rights enforcement.</p>
                    <div class="mt-4 p-3 bg-green-900 bg-opacity-30 rounded-lg">
                        <p class="text-center font-bold text-lg">48%</p>
                        <p class="text-center text-sm">FDI growth in 2024</p>
                        <p class="text-center text-xs text-gray-300">($45 billion total)</p>
                    </div>
                </div>
            </div>
            <div class="mt-8 stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-purple-300 mr-2 text-3xl">public</i>
                    <h3 class="text-xl font-bold">Investor Diversity</h3>
                </div>
                <p>Dubai reported investors from almost 180 nationalities in recent transactions:</p>
                <div class="mt-4 grid grid-cols-3 gap-2 text-center">
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">India</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">UK</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">Russia</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">China</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">GCC</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">Europe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slide 4: Market Performance -->
    <div class="slide flex-shrink-0 p-8 md:p-12" data-index="3">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Market Performance: Record Growth 2024-2025</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-amber-400 mr-2 text-3xl">show_chart</i>
                        <h3 class="text-xl font-bold">Surging Prices</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                            <span>Dubai: <span class="font-bold">20%</span> price rise in 2024</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                            <span>Villas: <span class="font-bold">31.6%</span> YoY growth</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                            <span>Abu Dhabi: <span class="font-bold">10%</span> YoY growth</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                            <span>RAK: <span class="font-bold">20%+</span> in prime areas</span>
                        </li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-blue-300 mr-2 text-3xl">receipt</i>
                        <h3 class="text-xl font-bold">Transaction Volumes</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="pulse-animation">
                            <p class="text-3xl font-bold text-center text-white mb-1">180,987</p>
                            <p class="text-center text-sm">Dubai deals in 2024</p>
                            <p class="text-center text-xs text-green-300">(+36.5% YoY)</p>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="bg-blue-800 p-2 rounded text-center">
                                <p class="font-bold">42,422</p>
                                <p class="text-xs">Q1 2025 sales</p>
                            </div>
                            <div class="bg-blue-800 p-2 rounded text-center">
                                <p class="font-bold">59%</p>
                                <p class="text-xs">Off-plan share</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-green-300 mr-2 text-3xl">paid</i>
                        <h3 class="text-xl font-bold">Rental Yields</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span>Dubai</span>
                            <span class="font-bold text-green-300">~7%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Abu Dhabi</span>
                            <span class="font-bold text-green-300">~6.75%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>RAK</span>
                            <span class="font-bold text-green-300">8-9%</span>
                        </div>
                        <div class="mt-4 p-2 bg-green-900 bg-opacity-30 rounded text-center">
                            <p class="text-xs">Global benchmarks: London/Hong Kong &lt;3%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-purple-300 mr-2 text-3xl">star</i>
                    <h3 class="text-xl font-bold">Luxury Segment Growth</h3>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-2xl font-bold text-purple-300">44%</p>
                        <p class="text-sm">Increase in prime sales (&gt;AED 15M)</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-purple-300">29</p>
                        <p class="text-sm">Villas &gt;AED 30M sold in Dec 2024</p>
                    </div>
                </div>
                <p class="mt-4 text-sm">50% of Q1 2025 buyers were end-users (not investors/flippers)</p>
            </div>
        </div>
    </div>
    <!-- Slide 5: Dubai -->
    <div class="slide flex-shrink-0 p-8 md:p-12" data-index="4">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Dubai: The Crown Jewel</h1>
            <div class="stat-card p-6 rounded-xl mb-6" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-amber-400 mr-2 text-3xl">emoji_events</i>
                    <h3 class="text-xl font-bold">2024 Performance</h3>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <p class="text-2xl font-bold text-amber-400">20%</p>
                        <p class="text-sm">Price rise</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-amber-400">181k</p>
                        <p class="text-sm">Transactions</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-amber-400">19%</p>
                        <p class="text-sm">Rent increase</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-blue-300 mr-2 text-3xl">villa</i>
                        <h3 class="text-xl font-bold">Top Projects</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Palm Jebel Ali Villas</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>The Oasis by Emaar</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Damac Lagoons</span>
                        </li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-green-300 mr-2 text-3xl">groups</i>
                        <h3 class="text-xl font-bold">Investor Profile</h3>
                    </div>
                    <p class="mb-2">50% end-users in Q1 2025</p>
                    <p>57% mortgage-backed deals</p>
                    <div class="mt-4 p-2 bg-green-900 bg-opacity-30 rounded text-center">
                        <p class="text-xs">More long-term focused than ever</p>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-red-300 mr-2 text-3xl">warning</i>
                        <h3 class="text-xl font-bold">Supply Constraints</h3>
                    </div>
                    <p class="mb-2">Limited new supply in prime locations:</p>
                    <ul class="list-disc list-inside text-sm">
                        <li>Palm Jumeirah</li>
                        <li>Emirates Hills</li>
                        <li>Downtown</li>
                    </ul>
                </div>
            </div>
            <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-purple-300 mr-2 text-3xl">visibility</i>
                    <h3 class="text-xl font-bold">Market Outlook</h3>
                </div>
                <p>Knight Frank forecasts another <span class="font-bold text-purple-300">5-8%</span> price rise in 2025</p>
                <p class="mt-2">Dubai Strategic Plan 2033 aims to double real estate's GDP contribution</p>
            </div>
        </div>
    </div>
    <!-- Slide 6: Abu Dhabi -->
    <div class="slide flex-shrink-0 p-8 md:p-12" data-index="5">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Abu Dhabi: Stability &amp; Growth</h1>
            <div class="stat-card p-6 rounded-xl mb-6" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-blue-300 mr-2 text-3xl">assessment</i>
                    <h3 class="text-xl font-bold">Market at a Glance</h3>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <p class="text-2xl font-bold text-blue-300">8-11%</p>
                        <p class="text-sm">Price growth 2024</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-blue-300">28k</p>
                        <p class="text-sm">Transactions</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-blue-300">6-7%</p>
                        <p class="text-sm">Rental yields</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-amber-400 mr-2 text-3xl">villa</i>
                        <h3 class="text-xl font-bold">Top Projects</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="material-icons text-amber-400 mr-2 text-sm">star</i>
                            <span>Saadiyat Lagoons</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-amber-400 mr-2 text-sm">star</i>
                            <span>Yas Golf Collection</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-amber-400 mr-2 text-sm">star</i>
                            <span>Jubail Island</span>
                        </li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-green-300 mr-2 text-3xl">landscape</i>
                        <h3 class="text-xl font-bold">Unique Strengths</h3>
                    </div>
                    <ul class="list-disc list-inside text-sm space-y-1">
                        <li>Cultural institutions (Louvre, Guggenheim)</li>
                        <li>Natural coastlines &amp; islands</li>
                        <li>Family-friendly environment</li>
                        <li>Lower price volatility</li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-purple-300 mr-2 text-3xl">trending_up</i>
                        <h3 class="text-xl font-bold">Luxury Growth</h3>
                    </div>
                    <p>Branded residences launches quadrupled amid unprecedented demand</p>
                    <div class="mt-4 p-2 bg-purple-900 bg-opacity-30 rounded text-center">
                        <p class="text-xs">New rental index introduced in 2024</p>
                    </div>
                </div>
            </div>
            <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-red-300 mr-2 text-3xl">visibility</i>
                    <h3 class="text-xl font-bold">Market Outlook</h3>
                </div>
                <p>Mid-single-digit growth expected in 2025</p>
                <p class="mt-2">Upcoming landmarks (Guggenheim, Hudayriat Island) to uplift demand</p>
            </div>
        </div>
    </div>
    <!-- Slide 7: Ras Al Khaimah -->
    <div class="slide flex-shrink-0 p-8 md:p-12" data-index="6">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">RAK: The Emerging Gem</h1>
            <div class="stat-card p-6 rounded-xl mb-6" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-green-300 mr-2 text-3xl">explore</i>
                    <h3 class="text-xl font-bold">Why RAK Now?</h3>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <p class="text-2xl font-bold text-green-300">$3.9B</p>
                        <p class="text-sm">Wynn Resort</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-green-300">8-9%</p>
                        <p class="text-sm">Rental yields</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-green-300">20%+</p>
                        <p class="text-sm">Price jumps</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-blue-300 mr-2 text-3xl">villa</i>
                        <h3 class="text-xl font-bold">Top Projects</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Fairmont Residences</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Danah Bay</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Marbella Villas</span>
                        </li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-amber-400 mr-2 text-3xl">attach_money</i>
                        <h3 class="text-xl font-bold">Affordability</h3>
                    </div>
                    <p>Beachfront apartments from <span class="font-bold text-amber-400">AED 585,000</span> ($160k)</p>
                    <p class="mt-2">Ultra-luxury villas above <span class="font-bold text-amber-400">AED 30M</span></p>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-purple-300 mr-2 text-3xl">directions_boat</i>
                        <h3 class="text-xl font-bold">Waterfront Advantage</h3>
                    </div>
                    <p>Al Marjan Island transforming into world-class leisure hub</p>
                    <div class="mt-4 p-2 bg-purple-900 bg-opacity-30 rounded text-center">
                        <p class="text-xs">Limited supply vs growing demand</p>
                    </div>
                </div>
            </div>
            <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-red-300 mr-2 text-3xl">bolt</i>
                    <h3 class="text-xl font-bold">High ROI Potential</h3>
                </div>
                <p>Mild cost of entry means even moderate price increases translate to high percentage gains</p>
            </div>
        </div>
    </div>
    <!-- Slide 8: Conclusion -->
    <div class="slide flex-shrink-0 p-8 md:p-12 flex flex-col items-center justify-center text-center" data-index="7">


<body class="bg-gradient-to-br from-blue-900 to-indigo-900 text-white font-sans relative overflow-hidden">

<body class="bg-gradient-to-br from-blue-900 to-indigo-900 text-white font-sans flex overflow-x-auto">

    <!-- Progress bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>
    <!-- Navigation dots -->
    <div class="fixed right-8 top-1/2 transform -translate-y-1/2 z-50 hidden md:flex flex-col space-y-4">
        <div class="nav-dot rounded-full cursor-pointer active" data-slide="0"></div>
        <div class="nav-dot rounded-full cursor-pointer" data-slide="1"></div>
        (() => {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: false
            });
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'blue-900': '#0f172a',
                            'indigo-900': '#1e1b4b'
                        }
            };

            const progressBar = document.getElementById('progressBar');
            const slidesContainer = document.getElementById('slidesContainer');
            const slides = document.querySelectorAll('.slide');
            slidesContainer.style.width = `${slides.length * 100}vw`;
            const navDots = document.querySelectorAll('.nav-dot');
            let currentSlide = 0;
            <p class="text-lg">CEO, Blue Collection Real Estate</p>
            <p class="text-gray-300 mt-4">Geneva, June 2025</p>
        </div>
    </div>
    <!-- Slide 2: Introduction -->
    <div class="slide flex-shrink-0 p-8 md:p-12">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Introduction: A New Era of UAE Property Wealth</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-amber-400 mr-2 text-3xl">trending_up</i>
                        <h3 class="text-xl font-bold">Record Transactions</h3>
                    </div>
                    <p class="mb-4">The United Arab Emirates is experiencing an unprecedented real estate boom focused on its residential sector.</p>
                    <div class="pulse-animation bg-blue-800 bg-opacity-50 p-4 rounded-lg">
                        <p class="text-4xl font-bold text-center text-white mb-2">226,000</p>
                        <p class="text-center">Dubai real estate transactions in 2024</p>
                        <p class="text-center text-sm text-green-300">(+36% YoY)</p>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-purple-300 mr-2 text-3xl">group_add</i>
                        <h3 class="text-xl font-bold">Investor Influx</h3>
                    </div>
                    <p class="mb-4">Key emirates – Dubai, Abu Dhabi, and Ras Al Khaimah (RAK) – have become global investor magnets.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-indigo-800 p-4 rounded-lg text-center">
                            <p class="text-2xl font-bold">110k+</p>
                            <p class="text-sm">New investors entered Dubai in 2024</p>
                        </div>
                        <div class="bg-indigo-800 p-4 rounded-lg text-center">
                            <p class="text-2xl font-bold">55%</p>
                            <p class="text-sm">Increase in new investors</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-green-300 mr-2 text-3xl">emoji_events</i>
                    <h3 class="text-xl font-bold">Growth Drivers</h3>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                        <span>Favorable government policies and 4% GDP growth</span>
                    </li>
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                        <span>Safe-haven status amidst global uncertainty</span>
                    </li>
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                        <span>Zero property taxes and high returns</span>
                    </li>
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                        <span>Residency benefits through Golden Visa</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Slide 3: Global Appeal -->
    <div class="slide flex-shrink-0 p-8 md:p-12">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Global Appeal: Tax Advantages &amp; Investor Trends</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-red-300 mr-2 text-3xl">savings</i>
                        <h3 class="text-xl font-bold">Tax-Free Income</h3>
        })();
                    </div>
                    <p>No personal income tax on rental yields and no capital gains tax on property sales.</p>
                    <div class="mt-4 p-3 bg-red-900 bg-opacity-30 rounded-lg">
                        <p class="text-center font-bold text-lg">5-9%</p>
                        <p class="text-center text-sm">Gross rental yields in Dubai</p>
                        <p class="text-center text-xs text-gray-300">(vs 2-4% in London/NYC)</p>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-blue-300 mr-2 text-3xl">badge</i>
                        <h3 class="text-xl font-bold">Golden Visa</h3>
                    </div>
                    <p>10-year renewable residency for property investors meeting minimum investment.</p>
                    <div class="mt-4 p-3 bg-blue-900 bg-opacity-30 rounded-lg">
                        <p class="text-center font-bold text-lg">AED 2M</p>
                        <p class="text-center text-sm">(~$545,000) investment threshold</p>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-green-300 mr-2 text-3xl">shield</i>
                        <h3 class="text-xl font-bold">Safe Haven</h3>
                    </div>
                    <p>Currency pegged to USD, politically stable with world-class property rights enforcement.</p>
                    <div class="mt-4 p-3 bg-green-900 bg-opacity-30 rounded-lg">
                        <p class="text-center font-bold text-lg">48%</p>
                        <p class="text-center text-sm">FDI growth in 2024</p>
                        <p class="text-center text-xs text-gray-300">($45 billion total)</p>
                    </div>
                </div>
            </div>
            <div class="mt-8 stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-purple-300 mr-2 text-3xl">public</i>
                    <h3 class="text-xl font-bold">Investor Diversity</h3>
                </div>
                <p>Dubai reported investors from almost 180 nationalities in recent transactions:</p>
                <div class="mt-4 grid grid-cols-3 gap-2 text-center">
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">India</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">UK</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">Russia</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">China</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">GCC</p>
                    </div>
                    <div class="p-2 bg-purple-900 bg-opacity-30 rounded">
                        <p class="font-bold">Europe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slide 4: Market Performance -->
    <div class="slide flex-shrink-0 p-8 md:p-12">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Market Performance: Record Growth 2024-2025</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-amber-400 mr-2 text-3xl">show_chart</i>
                        <h3 class="text-xl font-bold">Surging Prices</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                            <span>Dubai: <span class="font-bold">20%</span> price rise in 2024</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                            <span>Villas: <span class="font-bold">31.6%</span> YoY growth</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                            <span>Abu Dhabi: <span class="font-bold">10%</span> YoY growth</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-green-300 mr-2 text-sm">check_circle</i>
                            <span>RAK: <span class="font-bold">20%+</span> in prime areas</span>
                        </li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-blue-300 mr-2 text-3xl">receipt</i>
                        <h3 class="text-xl font-bold">Transaction Volumes</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="pulse-animation">
                            <p class="text-3xl font-bold text-center text-white mb-1">180,987</p>
                            <p class="text-center text-sm">Dubai deals in 2024</p>
                            <p class="text-center text-xs text-green-300">(+36.5% YoY)</p>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="bg-blue-800 p-2 rounded text-center">
                                <p class="font-bold">42,422</p>
                                <p class="text-xs">Q1 2025 sales</p>
                            </div>
                            <div class="bg-blue-800 p-2 rounded text-center">
                                <p class="font-bold">59%</p>
                                <p class="text-xs">Off-plan share</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-green-300 mr-2 text-3xl">paid</i>
                        <h3 class="text-xl font-bold">Rental Yields</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span>Dubai</span>
                            <span class="font-bold text-green-300">~7%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Abu Dhabi</span>
                            <span class="font-bold text-green-300">~6.75%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>RAK</span>
                            <span class="font-bold text-green-300">8-9%</span>
                        </div>
                        <div class="mt-4 p-2 bg-green-900 bg-opacity-30 rounded text-center">
                            <p class="text-xs">Global benchmarks: London/Hong Kong &lt;3%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-purple-300 mr-2 text-3xl">star</i>
                    <h3 class="text-xl font-bold">Luxury Segment Growth</h3>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-2xl font-bold text-purple-300">44%</p>
                        <p class="text-sm">Increase in prime sales (&gt;AED 15M)</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-purple-300">29</p>
                        <p class="text-sm">Villas &gt;AED 30M sold in Dec 2024</p>
                    </div>
                </div>
                <p class="mt-4 text-sm">50% of Q1 2025 buyers were end-users (not investors/flippers)</p>
            </div>
        </div>
    </div>
    <!-- Slide 5: Dubai -->
    <div class="slide flex-shrink-0 p-8 md:p-12">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Dubai: The Crown Jewel</h1>
            <div class="stat-card p-6 rounded-xl mb-6" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-amber-400 mr-2 text-3xl">emoji_events</i>
                    <h3 class="text-xl font-bold">2024 Performance</h3>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <p class="text-2xl font-bold text-amber-400">20%</p>
                        <p class="text-sm">Price rise</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-amber-400">181k</p>
                        <p class="text-sm">Transactions</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-amber-400">19%</p>
                        <p class="text-sm">Rent increase</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-blue-300 mr-2 text-3xl">villa</i>
                        <h3 class="text-xl font-bold">Top Projects</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Palm Jebel Ali Villas</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>The Oasis by Emaar</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Damac Lagoons</span>
                        </li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-green-300 mr-2 text-3xl">groups</i>
                        <h3 class="text-xl font-bold">Investor Profile</h3>
                    </div>
                    <p class="mb-2">50% end-users in Q1 2025</p>
                    <p>57% mortgage-backed deals</p>
                    <div class="mt-4 p-2 bg-green-900 bg-opacity-30 rounded text-center">
                        <p class="text-xs">More long-term focused than ever</p>
                    </div>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-red-300 mr-2 text-3xl">warning</i>
                        <h3 class="text-xl font-bold">Supply Constraints</h3>
                    </div>
                    <p class="mb-2">Limited new supply in prime locations:</p>
                    <ul class="list-disc list-inside text-sm">
                        <li>Palm Jumeirah</li>
                        <li>Emirates Hills</li>
                        <li>Downtown</li>
                    </ul>
                </div>
            </div>
            <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-purple-300 mr-2 text-3xl">visibility</i>
                    <h3 class="text-xl font-bold">Market Outlook</h3>
                </div>
                <p>Knight Frank forecasts another <span class="font-bold text-purple-300">5-8%</span> price rise in 2025</p>
                <p class="mt-2">Dubai Strategic Plan 2033 aims to double real estate's GDP contribution</p>
            </div>
        </div>
    </div>
    <!-- Slide 6: Abu Dhabi -->
    <div class="slide flex-shrink-0 p-8 md:p-12">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">Abu Dhabi: Stability &amp; Growth</h1>
            <div class="stat-card p-6 rounded-xl mb-6" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-blue-300 mr-2 text-3xl">assessment</i>
                    <h3 class="text-xl font-bold">Market at a Glance</h3>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <p class="text-2xl font-bold text-blue-300">8-11%</p>
                        <p class="text-sm">Price growth 2024</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-blue-300">28k</p>
                        <p class="text-sm">Transactions</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-blue-300">6-7%</p>
                        <p class="text-sm">Rental yields</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-amber-400 mr-2 text-3xl">villa</i>
                        <h3 class="text-xl font-bold">Top Projects</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="material-icons text-amber-400 mr-2 text-sm">star</i>
                            <span>Saadiyat Lagoons</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-amber-400 mr-2 text-sm">star</i>
                            <span>Yas Golf Collection</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-amber-400 mr-2 text-sm">star</i>
                            <span>Jubail Island</span>
                        </li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-green-300 mr-2 text-3xl">landscape</i>
                        <h3 class="text-xl font-bold">Unique Strengths</h3>
                    </div>
                    <ul class="list-disc list-inside text-sm space-y-1">
                        <li>Cultural institutions (Louvre, Guggenheim)</li>
                        <li>Natural coastlines &amp; islands</li>
                        <li>Family-friendly environment</li>
                        <li>Lower price volatility</li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-purple-300 mr-2 text-3xl">trending_up</i>
                        <h3 class="text-xl font-bold">Luxury Growth</h3>
                    </div>
                    <p>Branded residences launches quadrupled amid unprecedented demand</p>
                    <div class="mt-4 p-2 bg-purple-900 bg-opacity-30 rounded text-center">
                        <p class="text-xs">New rental index introduced in 2024</p>
                    </div>
                </div>
            </div>
            <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-red-300 mr-2 text-3xl">visibility</i>
                    <h3 class="text-xl font-bold">Market Outlook</h3>
                </div>
                <p>Mid-single-digit growth expected in 2025</p>
                <p class="mt-2">Upcoming landmarks (Guggenheim, Hudayriat Island) to uplift demand</p>
            </div>
        </div>
    </div>
    <!-- Slide 7: Ras Al Khaimah -->
    <div class="slide flex-shrink-0 p-8 md:p-12">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 highlight-text" data-aos="fade-down">RAK: The Emerging Gem</h1>
            <div class="stat-card p-6 rounded-xl mb-6" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-green-300 mr-2 text-3xl">explore</i>
                    <h3 class="text-xl font-bold">Why RAK Now?</h3>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <p class="text-2xl font-bold text-green-300">$3.9B</p>
                        <p class="text-sm">Wynn Resort</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-green-300">8-9%</p>
                        <p class="text-sm">Rental yields</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-green-300">20%+</p>
                        <p class="text-sm">Price jumps</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="stat-card p-6 rounded-xl" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-blue-300 mr-2 text-3xl">villa</i>
                        <h3 class="text-xl font-bold">Top Projects</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Fairmont Residences</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Danah Bay</span>
                        </li>
                        <li class="flex items-start">
                            <i class="material-icons text-blue-300 mr-2 text-sm">star</i>
                            <span>Marbella Villas</span>
                        </li>
                    </ul>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-amber-400 mr-2 text-3xl">attach_money</i>
                        <h3 class="text-xl font-bold">Affordability</h3>
                    </div>
                    <p>Beachfront apartments from <span class="font-bold text-amber-400">AED 585,000</span> ($160k)</p>
                    <p class="mt-2">Ultra-luxury villas above <span class="font-bold text-amber-400">AED 30M</span></p>
                </div>
                <div class="stat-card p-6 rounded-xl" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="material-icons text-purple-300 mr-2 text-3xl">directions_boat</i>
                        <h3 class="text-xl font-bold">Waterfront Advantage</h3>
                    </div>
                    <p>Al Marjan Island transforming into world-class leisure hub</p>
                    <div class="mt-4 p-2 bg-purple-900 bg-opacity-30 rounded text-center">
                        <p class="text-xs">Limited supply vs growing demand</p>
                    </div>
                </div>
            </div>
            <div class="stat-card p-6 rounded-xl" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <i class="material-icons text-red-300 mr-2 text-3xl">bolt</i>
                    <h3 class="text-xl font-bold">High ROI Potential</h3>
                </div>
                <p>Mild cost of entry means even moderate price increases translate to high percentage gains</p>
            </div>
        </div>
    </div>
    <!-- Slide 8: Conclusion -->
    <div class="slide flex-shrink-0 p-8 md:p-12 flex flex-col items-center justify-center text-center">

        <div data-aos="zoom-in">
            <h1 class="text-3xl md:text-5xl font-bold mb-6 highlight-text">The UAE Wealth Blueprint</h1>
            <div class="stat-card p-6 rounded-xl mb-8 max-w-2xl" data-aos="fade-up">
                <div class="flex items-center justify-center mb-4">
                    <i class="material-icons text-green-300 mr-2 text-3xl">check_circle</i>
                    <h3 class="text-xl font-bold">Key Takeaways</h3>
                </div>
                <ul class="space-y-3 text-left">
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check</i>
                        <span>Double-digit price appreciation and ~7% rental yields</span>
                    </li>
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check</i>
                        <span>Diverse opportunities from luxury to mid-market</span>
                    </li>
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check</i>
                        <span>Strategic timing before next growth phase</span>
                    </li>
                    <li class="flex items-start">
                        <i class="material-icons text-green-300 mr-2 text-sm">check</i>
                        <span>Waterfront properties offer premium returns</span>
                    </li>
                </ul>
            </div>
            <div class="mb-8" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-semibold mb-4">Why Blue Collection Real Estate?</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="p-3 bg-blue-800 bg-opacity-50 rounded">
                        <i class="material-icons text-amber-400">insights</i>
                        <p class="text-sm mt-1">Expertise</p>
                    </div>
                    <div class="p-3 bg-blue-800 bg-opacity-50 rounded">
                        <i class="material-icons text-purple-300">bar_chart</i>
                        <p class="text-sm mt-1">Data-Driven</p>
                    </div>
                    <div class="p-3 bg-blue-800 bg-opacity-50 rounded">
                        <i class="material-icons text-green-300">handshake</i>
                        <p class="text-sm mt-1">Full Service</p>
                    </div>
                    <div class="p-3 bg-blue-800 bg-opacity-50 rounded">
                        <i class="material-icons text-red-300">savings</i>
                        <p class="text-sm mt-1">Negotiation</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="400">
                <p class="text-xl font-bold mb-4">Act Now to Seize the Opportunity</p>
                <div class="flex justify-center"></div>
            </div>
        </div>
    </div>

    </div>


    </div>

    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false
        });
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-900': '#0f172a',
                        'indigo-900': '#1e1b4b'
                    }
                }
            }
        }
        const progressBar = document.getElementById('progressBar');
        const slidesContainer = document.getElementById('slidesContainer');
        const slides = document.querySelectorAll('.slide');
        slidesContainer.style.width = `${slides.length * 100}vw`;
        const navDots = document.querySelectorAll('.nav-dot');
        let currentSlide = 0;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const index = parseInt(entry.target.getAttribute('data-index'));
                    if (!isNaN(index)) {
                        currentSlide = index;
                        updateUI();
                    }
                }
            });
        }, { threshold: 0.6 });
        slides.forEach(slide => observer.observe(slide));

        let scrolling = false;

        function goToSlide(index) {
            const clamped = Math.max(0, Math.min(slides.length - 1, index));
            currentSlide = clamped;
            slidesContainer.style.transform = `translateX(-${clamped * 100}vw)`;
            updateUI();
        }

        function updateUI() {
            const progress = (currentSlide / (slides.length - 1)) * 100;
            progressBar.style.width = progress + '%';
            navDots.forEach((dot, i) => dot.classList.toggle('active', i === currentSlide));
        }

        navDots.forEach(dot => {
            dot.addEventListener('click', () => {
                const i = parseInt(dot.getAttribute('data-slide'));
                goToSlide(i);
            });
        });

        document.addEventListener('keydown', e => {
            if (e.key === 'Enter') {
                goToSlide(currentSlide + 1);
            }
        });

        document.addEventListener('wheel', e => {
            if (scrolling) return;
            scrolling = true;
            if (e.deltaY > 0) {
                goToSlide(currentSlide + 1);
            } else if (e.deltaY < 0) {
                goToSlide(currentSlide - 1);
            }
            setTimeout(() => { scrolling = false; }, 600);
            e.preventDefault();
        }, { passive: false });

        let touchStartY = null;
        document.addEventListener('touchstart', e => {
            touchStartY = e.touches[0].clientY;
        }, { passive: true });

        document.addEventListener('touchend', e => {
            if (touchStartY === null) return;
            const deltaY = e.changedTouches[0].clientY - touchStartY;
            if (Math.abs(deltaY) > 50) {
                if (deltaY < 0) {
                    goToSlide(currentSlide + 1);
                } else {
                    goToSlide(currentSlide - 1);
                }
            }
            touchStartY = null;
        }, { passive: true });

        window.addEventListener('resize', () => goToSlide(currentSlide));
        goToSlide(0);


        const slides = document.querySelectorAll('.slide');
        const navDots = document.querySelectorAll('.nav-dot');
        function updateUI() {
            const maxScroll = document.body.scrollWidth - window.innerWidth;
            const progress = (window.scrollX / maxScroll) * 100;
            progressBar.style.width = progress + '%';
            const index = Math.round(window.scrollX / window.innerWidth);
            navDots.forEach((dot, i) => dot.classList.toggle('active', i === index));
        }
        window.addEventListener('scroll', updateUI);
        navDots.forEach(dot => {
            dot.addEventListener('click', () => {
                const i = parseInt(dot.getAttribute('data-slide'));
                window.scrollTo({left: i * window.innerWidth, behavior: 'smooth'});
            });
        });
        window.addEventListener('resize', updateUI);
        updateUI();

    </script>
</body>
</html>
