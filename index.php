<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>UAE Real Estate Wealth Blueprint Presentation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- TailwindCSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- AOS for animations -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<!-- GSAP + ScrollTrigger + ScrollToPlugin CDN -->

<!-- Material Icons CDN -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body, html {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}
section {
  flex: none;
  min-width: 100vw;
  height: 100vh;
}
.horizontal-wrapper {
  display: flex;
}
.gradient-bg {
  background: linear-gradient(135deg, #0072ff, #00c6ff);
}
.progress-bar {
  position: absolute;
  top: 1rem;
  left: 2rem;
  right: 2rem;
}
.progress-line {
  flex: 1;
  height: 4px;
  background: #555;
}
.progress-line .bar {
  height: 100%;
  background: #facc15;
  width: 0;
}
.next, .prev {
  position: fixed;
  top: 50%;
  z-index: 50;
  font-size: 2rem;
  cursor: pointer;
}
.next { right: 1rem; }
.prev { left: 1rem; }
</style>
</head>
<body class="bg-gray-100 text-white">

<!-- NEXT/PREV Buttons -->
<div class="next text-yellow-300 material-icons">chevron_right</div>
<div class="prev text-yellow-300 material-icons">chevron_left</div>

<div class="progress-bar flex items-center justify-between text-gray-300">
  <span class="slide-label">Slide 1 of 4</span>
  <div class="progress-line rounded-full">
    <div class="bar rounded-full"></div>
  </div>
  <span class="slide-number">01/04</span>
</div>

<div class="horizontal-wrapper">

<!-- SLIDE 1 -->
<section class="relative flex flex-col justify-center items-center text-white gradient-bg">
  <h1 data-aos="fade-down" class="text-5xl font-bold">The UAE Real Estate Wealth Blueprint</h1>
  <p data-aos="fade-up" data-aos-delay="300" class="text-xl mt-4 max-w-3xl text-center">
    Why Dubai, Abu Dhabi & Ras Al Khaimah are reshaping global real estate for long‑term growth and ROI.
  </p>
</section>

<!-- SLIDE 2 -->
<section class="bg-gray-800 flex flex-col justify-center items-center p-12">
  <h2 data-aos="fade-down" class="text-3xl font-bold">Why Invest in the UAE?</h2>
  <div class="grid md:grid-cols-4 gap-8 mt-8 max-w-5xl">
    <div data-aos="fade-up" class="bg-gray-700 p-6 rounded-xl shadow text-center">
      <span class="material-icons text-5xl text-blue-500">account_balance</span>
      <h3 class="text-xl font-bold mt-3">Zero Tax</h3>
      <p>No income, capital gains, or inheritance tax</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="100" class="bg-gray-700 p-6 rounded-xl shadow text-center">
      <span class="material-icons text-5xl text-blue-500">verified_user</span>
      <h3 class="text-xl font-bold mt-3">Golden Visa</h3>
      <p>10‑year residency for AED 2M+</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="200" class="bg-gray-700 p-6 rounded-xl shadow text-center">
      <span class="material-icons text-5xl text-blue-500">attach_money</span>
      <h3 class="text-xl font-bold mt-3">USD Pegged</h3>
      <p>Dirham maintains stability with the USD</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="300" class="bg-gray-700 p-6 rounded-xl shadow text-center">
      <span class="material-icons text-5xl text-blue-500">business_center</span>
      <h3 class="text-xl font-bold mt-3">Best Infrastructure</h3>
      <p>Ranked #1 globally for infrastructure & safety</p>
    </div>
  </div>
</section>

<!-- SLIDE 3 -->
<section class="bg-gray-100 flex flex-col justify-center items-center p-12 text-gray-800">
  <h2 data-aos="fade-down" class="text-3xl font-bold">2025 Market Snapshot</h2>
  <div class="overflow-x-auto mt-8 rounded-xl shadow">
    <table data-aos="fade-up" class="min-w-full bg-white text-gray-600 rounded">
      <thead class="bg-gray-200 text-gray-800">
        <tr><th class="p-4">Market</th><th>Price Growth</th><th>Rental Yield</th><th>Q1'25 Transactions</th></tr>
      </thead>
      <tbody>
        <tr><td class="p-4">Dubai</td><td>19.6%</td><td>7.5%</td><td>$38.5B</td></tr>
        <tr><td class="p-4">Abu Dhabi</td><td>16%</td><td>6.8%</td><td>$12.1B</td></tr>
        <tr><td class="p-4">Ras Al Khaimah</td><td>35%</td><td>9.2%</td><td>$2.8B</td></tr>
      </tbody>
    </table>
  </div>
</section>

<!-- SLIDE 4 -->
<section class="bg-gradient-to-r from-blue-500 to-cyan-500 flex flex-col justify-center items-center text-white p-12">
  <h2 data-aos="fade-down" class="text-3xl font-bold">Are You Ready to Invest?</h2>
  <a data-aos="fade-up" href="#contact" class="mt-6 inline-block rounded-full bg-white text-blue-600 font-bold px-8 py-3 hover:scale-105 transition">Book Private Session</a>
</section>

</div><!-- END HORIZONTAL WRAPPER -->

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/ScrollToPlugin.min.js"></script>
<!-- Scripts -->
<script>

AOS.init({ once: true, duration: 1000 });
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// HORIZONTAL SCROLL + PROGRESS BAR
const sections = gsap.utils.toArray("section");
const totalSections = sections.length;

gsap.to(".horizontal-wrapper", {
  xPercent: -100 * (sections.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: "body",
    pin: true,
    scrub: 1,
    snap: 1 / (sections.length - 1),
    end: "+=400%",
    onUpdate: (self) => {
      const index = Math.round(self.progress * (sections.length - 1));
      updateProgress(index);
    }
  }
});

// UPDATE PROGRESS BAR FUNCTION
function updateProgress(index) {
  const label = document.querySelector('.slide-label');
  const number = document.querySelector('.slide-number');
  const bar = document.querySelector('.bar');
  label.textContent = `Slide ${index + 1} of ${totalSections}`;
  number.textContent = `0${index + 1}/0${totalSections}`;
  bar.style.width = `${((index + 1) / totalSections) * 100}%`;
}

// NEXT/PREV BUTTONS
let slideIndex = 0;

function scrollToSlide(index) {
  slideIndex = Math.max(0, Math.min(index, sections.length - 1));
  gsap.to(window, {
    scrollTo: {
      y: sections[slideIndex]
    },
    duration: 1
  });
}

document.querySelector('.next').addEventListener('click', () => scrollToSlide(slideIndex + 1));
document.querySelector('.prev').addEventListener('click', () => scrollToSlide(slideIndex - 1));

// DRAG TO SCROLL
let isDown = false, startX, scrollLeft;

const wrapper = document.querySelector('.horizontal-wrapper');
wrapper.addEventListener('mousedown', e => {
  isDown = true;
  startX = e.pageX - wrapper.offsetLeft;
  scrollLeft = wrapper.scrollLeft;
});
wrapper.addEventListener('mouseleave', () => isDown = false);
wrapper.addEventListener('mouseup', () => isDown = false);
wrapper.addEventListener('mousemove', e => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - wrapper.offsetLeft;
  const walk = (x - startX) * 1.5;
  wrapper.scrollLeft = scrollLeft - walk;
});
</script>
</body>
</html>
