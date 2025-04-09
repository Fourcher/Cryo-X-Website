{{-- Extend layouts/public --}}
@extends('layouts.public')

{{-- @section('hero-image') --}}

{{-- Define title --}}
@section('content')
	<div class="container m-auto">
		<h1 class="text-center text-white font-bold rethink-700 pt-32 lg:pt-0 text-6xl lg:text-8xl"
			style="word-wrap: break-word;">
			<span
				class="bluegradient">Cooling</span>
			<span id="change_text" class="ms-1 d-inline-block"></span> Outdoors By <br>~15&deg;F Without Power

		</h1>

		<style>
			@keyframes textCycleUp {
				0% {
					opacity: 0;
					transform: translateY(30%);
				}

				50% {
					opacity: 1;
					transform: translateY(0);
				}

				100% {
					opacity: 0;
					transform: translateY(-30%);
				}
			}

			.text-animation {
				display: inline-block;
				animation: textCycleUp 1.5s ease-in-out forwards;
			}
		</style>

		<script>
			document.addEventListener('DOMContentLoaded', function() {
				// Array of Bootstrap icon classes
				const icons = ['bi-truck', 'bi-box', 'bi-car-front', 'bi-ev-station'];
				let index = 0;
				const changeTextElement = document.getElementById('change_text');

				function changeIcon() {
					// Remove the animation class to reset it
					changeTextElement.classList.remove('text-animation');

					// Update the icon by adding the appropriate Bootstrap icon class
					changeTextElement.innerHTML = `<i class="bi ${icons[index]}"></i>`;

					// Trigger reflow to restart the animation
					void changeTextElement.offsetWidth;

					// Add the animation class back
					changeTextElement.classList.add('text-animation');

					// Move to the next icon
					index = (index + 1) % icons.length;
				}

				// Set an interval to change the icon every 2 seconds
				setInterval(changeIcon, 2000);
				changeIcon(); // Initial call to set the first icon
			});
		</script>




		<h2 class="text-center text-white rethink-400 w-2/3 m-auto my-14" style="word-wrap: break-word; font-size: 22px">
			Cool any outdoor surface 15 &deg;F below the air temperature without power, even in direct sunlight. <br><br>Passive Daytime <span class="rethink-800">Radiative Cooling Paint</span> for <span class="rethink-800">anything</span>
			under the sun.</h2>

			

		<div class="flex justify-center mt-2">
			<div
				class="h-full ms-4 pt-4 pb-4 pl-8 pr-7 bg-gradient-to-r from-[#0067FF] to-[#003E99] rounded-xl inline-flex justify-center items-center">
				<a href="/cooling-pdrc-cryocan-spray">
					<div class="w-36 h-7 text-center text-white text-lg font-rethink-sans font-medium leading-7 break-words">
						Buy Now
					</div>
				</a>
			</div>

			<div
				class="h-full pt-4 pb-4 pl-8 pr-7 bg-transparent border-0 border-[#0067FF] rounded-xl inline-flex justify-center items-center">
				<div class="w-36 h-7 text-center text-white text-lg font-rethink-sans font-medium leading-7 break-words">

					<a href="/contact"><span class="bluegradient">Contact Us!</span></a>

				</div>
			</div>
		</div>

		<div class="text-md text-white mt-20 text-center">
			<i class="bi bi-star-fill text-yellow-400"></i>
			<i class="bi bi-star-fill text-yellow-400"></i>
			<i class="bi bi-star-fill text-yellow-400"></i>
			<i class="bi bi-star-fill text-yellow-400"></i>
			<i class="bi bi-star-fill text-yellow-400"></i>

			<br class="lg:hidden">
			<br class="lg:hidden">
			<span class="ms-2 font-bold">5 Stars</span>
			<br class="lg:hidden"><br class="lg:hidden">
			<span class="ms-1">“The obvious cost saving, yet safety increasing choice”</span><br>
			<div class="pt-3">- Michael from CA, USA</div>
		</div>

<section>
  <div
    class="border-2 border-blue-600 m-auto w-full md:w-1/2 mt-24 h-auto relative"
    style="border-radius: 40px;"
  >
    <div class="relative w-full h-full">
      <!-- Image 1 -->
      <img
        src="Before.png"
        alt="Image 1"
        class="w-full h-auto"
        style="border-radius: 40px;"
        draggable="false"
      />

      <!-- Image 2 -->
      <div
        class="absolute inset-0 overflow-hidden"
        style="border-radius: 40px;"
        id="imageContainer"
      >
        <img
          src="cryox.jpeg"
          alt="Image 2"
          class="w-full h-auto slider-image"
          draggable="false"
        />
        <!-- Handle -->
        <div
          class="handle absolute h-full w-1 bg-blue-600 cursor-ew-resize"
        ></div>
      </div>
    </div>
  </div>

  <style>
    .slider-image,
    .handle,
    #imageContainer {
      user-select: none;
      /* Prevent text/image selection */
    }

    /* Initial styles for the slider image */
    .slider-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: auto;
      clip-path: inset(0 0% 0 100%);
      animation: revealAnimation 5s forwards;
    }

    /* Initial styles for the handle */
    .handle {
      top: 0;
      width: 8px;
      background-color: #0041ce;
      border-left: 1px solid #0041ce;
      height: 100%;
      position: absolute;
      left: 0%;
      animation: handleAnimation 5s forwards;
    }

    /* Animation for the slider image */
    @keyframes revealAnimation {
      from {
        clip-path: inset(0 100% 0 0%);
      }
      to {
        clip-path: inset(0 0% 0 0%);
      }
    }

    /* Animation for the handle */
    @keyframes handleAnimation {
      from {
        left: 0%;
      }
      to {
        left: 100%;
      }
    }

    /* Adjust cursor and handle display on touch devices */
    @media (hover: none) and (pointer: coarse) {
      #imageContainer {
        cursor: default;
      }
      .handle {
        display: none;
      }
    }

    /* Set the cursor for desktop devices */
    @media (hover: hover) and (pointer: fine) {
      #imageContainer {
        cursor: ew-resize;
      }
    }
  </style>

  <script>
    const imageContainer = document.getElementById("imageContainer");
    const handle = document.querySelector(".handle");
    const image2 = document.querySelector(".slider-image");
    let isDragging = false;

    const isTouchDevice =
      "ontouchstart" in window || navigator.maxTouchPoints > 0;

    if (!isTouchDevice) {
      imageContainer.addEventListener("mousedown", () => {
        isDragging = true;
        // Stop the animation when user starts dragging
        image2.style.animation = "none";
        handle.style.animation = "none";
      });

      document.addEventListener("mouseup", () => {
        isDragging = false;
      });

	  document.addEventListener("mousemove", (e) => {
        if (isDragging) {
          const containerRect = imageContainer.getBoundingClientRect();
          let offsetX = e.clientX - containerRect.left;
          if (offsetX < 0) offsetX = 0;
          if (offsetX > containerRect.width) offsetX = containerRect.width;

          const percentage = (offsetX / containerRect.width) * 100;
          image2.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
          handle.style.left = `${percentage}%`;
        }
      });
    }
  </script>
</section>


		<section>

			<div class="grid grid-cols-2 lg:grid-cols-3 m-auto  text-center mt-40">
				<img src="hextronics_white.png" alt="Logo 1" class="w-36 h-36 m-auto object-contain">
				<img src="bibw.png" alt="Logo 1" class="w-36 h-36 m-auto object-contain">
				<img src="fleetw.png" alt="Logo 1" class="w-36 h-36 m-auto object-contain">
			</div>
		</section>

		<section>

			{{-- 3 Big Stats --}}
			<div class="lg:flex text-center m-auto justify-center mt-20 ">
				<div class="flex flex-col items-center lg:me-20 text-center">
					<div class="bluegradient text-white font-bold rethink-700" style="font-size: 140px">25%</div>
					<div class="text-white text-md font-bold w-2/3">Range increase for Electric Vehicles in the summer</div>
				</div>
				<div class="flex flex-col items-center lg:me-20 text-center">
					<div class="bluegradient text-white font-bold rethink-700" style="font-size: 140px">3 YR</div>
					<div class="text-white text-md font-bold ">ROI in equivalent gas savings from AC offset</div>
				</div>
				<div class="flex flex-col items-center lg:me-20 text-center">
					<div class="bluegradient text-white font-bold rethink-700" style="font-size: 140px">15&deg;F</div>
					<div class="text-white text-md font-bold w-2/3">Cool any outdoor surface 15 &deg;F below the air temperature without power, even in direct sunlight.</div>
				</div>
			</div>

			



		</section>

		<section>

			<div class="text-6xl lg:text-8xl text-center mt-48 text-white rethink-700">Passive <span
					class="bluegradient">Cooling</span>.
				Active Performance.</div>
			<div class="text-center text-white text-lg mt-12">The <span class="rethink-800">simplest</span> and <span
					class="rethink-800">cheapest</span> solution to stay cool</div>

		</section>

		<section>

			<img src="updraft.png" class="h-96 m-auto mt-24 rounded-3xl" alt="Heat" draggable="false">

		</section>


		<section>
			<div class="text-3xl lg:text-5xl text-center mt-12 lg:mt-24 text-white rethink-600  w-2/3 lg:w-full m-auto">

				<span class="bluegradient">CryoPaint</span> reflects the sun’s energy away, <span class="rethink-800">preventing it from being absorbed</span>. At the same time, it <span class="text-red-500">emits heat out into space</span>, past our atmosphere.<br><Br>
				
				
				By absorbing
				nothing, and <span class="rethink-800">releasing everything</span>, <span class="bluegradient">CryoPaint</span> keeps your van, EV, and building as cool as possible -without expensive
				AC

			</div>
		</section>

		<section>

			<div class="text-6xl lg:text-8xl text-center mt-24 lg:mt-48 text-white rethink-700"><span
					class="bluegradient">Cooling</span>
				Use Cases &<br> Solutions.</div>
		</section>



		@livewire('uses')








	</div>
@endsection
