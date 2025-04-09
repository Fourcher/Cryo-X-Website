@extends('layouts.public')

@section('hero-image', 'van.png')

@section('content')

	<div class="container mx-auto px-4">

		<div class="text-4xl md:text-6xl lg:text-8xl text-center text-white rethink-700">
			<span class="text-xl md:text-2xl lg:text-4xl">The New & Improved</span><br><span class="bluegradient">Cooling
				PDRC</span> CryoCan Spray
		</div>

		<div class="text-sm md:text-lg text-center text-white rethink-700 mt-4">
			Introducing CryoCan: Precision Cooling, Tailored to Your Needs

			<br><br>
		</div>

		<div class="flex justify-center mt-8 md:mt-12 space-x-4">
			<div
				class="h-full pt-2 md:pt-4 pb-2 md:pb-4 px-4 md:pl-8 md:pr-7 bg-gradient-to-r from-[#0067FF] to-[#003E99] rounded-xl inline-flex justify-center items-center">
				<a href="#buy_now">
					<div class="text-center text-white text-md md:text-lg font-rethink-sans font-medium leading-7 break-words">
						Buy Now
					</div>
				</a>
			</div>

			<div
				class="h-full pt-2 md:pt-4 pb-2 md:pb-4 px-4 md:pl-8 md:pr-7 bg-transparent border border-[#0067FF] rounded-xl inline-flex justify-center items-center">
				<div class="text-center text-white text-md md:text-lg font-rethink-sans font-medium leading-7 break-words">
					<a href="/contact"><span class="bluegradient">Learn More</span></a>
				</div>
			</div>
		</div>

		{{-- big central image --}}
		<div class="text-center w-full md:w-2/3 mx-auto mt-12 md:mt-24">
			<img style="width: 80%; max-width: 600px; margin: auto" src="/spray_clean.png" alt="CryoCan " />
		</div>

		<div class="container w-full md:w-2/3 mx-auto">

			<span class="text-lg text-white">CryoCan brings the groundbreaking radiative cooling technology of CryoPaint into a
				convenient, easy-to-use spray can. Designed for touch-ups and small-scale projects, CryoCan offers flexible coverage
				options depending on your cooling requirements.
				<br><br>

			</span>
			<div class="text-2xl md:text-4xl text-left text-white rethink-700 mt-12 pb-4 border-b border-white">
				Features
			</div>

			<div
				class="text-sm md:text-lg flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
				<div class="ml-4">Advanced Radiative Cooling Technology: Lowers surface temperatures by up to 15℉ below ambient
					air, reducing heat exposure even in direct sunlight.</div>
			</div>
			<div
				class="text-sm md:text-lg flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
				<div class="ml-4">Professional-Grade Spray System: Powered by the high-performance SprayMax® system, ensuring
					smooth, even coverage with every application.</div>
			</div>
			<div
				class="text-sm md:text-lg flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
				<div class="ml-4">Eco-Friendly and Low VOC: Water-based formula with low VOC levels, perfect for environmentally
					conscious projects without compromising on cooling performance.</div>
			</div>
			<div
				class="text-sm md:text-lg flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
				<div class="ml-4">Versatile Applications: Ideal for small projects like IoT equipment, vehicle touch-ups, and
					outdoor gear, providing cooling relief in hard-to-reach places.
				</div>
			</div>
			<div
				class="text-sm md:text-lg flex text-white rethink-600 justify-start items-center mt-6 border-b border-white pb-6">
				<i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
				<div class="ml-4">Quick and Easy Application: Each 3.5 oz can covers up to 3 square feet, with smooth continuous
					spraying and easy nozzle clearing for a hassle-free experience.</div>
			</div>
		</div>

        <div class="container w-full md:w-3/4 lg:w-1/2 mx-auto mt-12">
            <div class="text-2xl md:text-3xl lg:text-4xl text-left text-white rethink-700 pb-4 border-b border-white">
                Technical Fact Sheet
            </div>

            <div class="text-base md:text-lg text-white rethink-600 mt-6">
                Download our technical fact sheet to learn more about CryoCan's features, benefits, and applications.
            </div>

            <div class="text-center mt-6">
                <a href="/cryocan_factsheet.pdf" target="_blank"
                    class="bg-gradient-to-r from-[#0067FF] to-[#003E99] rounded-xl inline-flex justify-center items-center p-4">
                    <div class="text-center text-white text-base md:text-lg font-rethink-sans font-medium leading-7">
                        Download Fact Sheet
                    </div>
                </a>
            </div>
        </div>


		<div class="text-5xl md:text-8xl text-center text-white rethink-700 mt-16 md:mt-20" id="buy_now">
			<span class="bluegradient">Buy</span> Now
		</div>

		<div class="flex flex-col md:flex-row rethink-600 text-white mt-8 md:mt-12 w-full md:w-3/4 mx-auto">
			<div class="w-full md:w-1/2 p-6 md:p-12">
				<span class="text-lg md:text-3xl rethink-700">
					CryoCan brings the groundbreaking radiative cooling technology of CryoPaint into a convenient, easy-to-use spray
					can.
				</span>
				<br>
				<div class="text-sm md:text-md mt-4 md:mt-8 mb-4 md:mb-8">Now Only $50/Can</div>

				<hr class="border-white">

				<div class="text-sm md:text-md mt-4 md:mt-8 mb-2 md:mb-4">
					<i class="bi bi-truck"></i> Delivery Information
				</div>
				<div class="text-xs md:text-sm mt-2 md:mt-4 mb-4 md:mb-6">Nationwide delivery available.</div>

				<hr class="border-white">

				@livewire('basket-button', [$product])
			</div>

			<div class="w-full md:w-1/2 p-6 md:p-8 text-center">
				<div class="w-full">
					<img src="/spray_clean.png" alt="Cryo Can" class="rounded-2xl w-full h-auto mx-auto" draggable="false">
				</div>
			</div>
		</div>
		<!-- New Information Sections -->
		<div class="container w-full md:w-2/3 mx-auto mt-12">

			<!-- Recommended Use Cases -->
			<div class="text-3xl md:text-4xl text-left text-white font-bold pb-4 border-white">
				Recommended <span class="bluegradient">CryoCan</span> Use Cases
			</div>

			<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
				<!-- Use Case 1 -->
				<div class="flex flex-col items-center bg-gray-800 text-white rounded-lg p-6 m-2 w-full">
					<img src="/iot_devices.png" alt="IoT Equipment" class="h-24 w-24 mb-4">
					<h3 class="text-xl font-bold mb-2">IoT Equipment</h3>
					<p class="text-center">Ideal for cooling outdoor electronics and devices, reducing the thermal load on critical
						components.</p>

				</div>
				<!-- Use Case 2 -->
				<div class="flex flex-col items-center bg-blue-950 text-white rounded-lg p-6 m-2 w-full">
					<img src="/helmet.png" alt="Hard Hats and Protective Gear" class="h-24 w-24 mb-4">
					<h3 class="text-xl font-bold mb-2">Hard Hats & Protective Gear</h3>
					<p class="text-center">Provides heat relief for workers in direct sunlight by cooling helmets and other sky-facing
						surfaces.</p>
				</div>
				<!-- Use Case 3 -->
				<div class="flex flex-col items-center bg-green-950 text-white rounded-lg p-6 m-2 w-full">
					<img src="/diy.png" alt="Home Projects" class="h-24 w-24 mb-4">
					<h3 class="text-xl font-bold mb-2">Home Projects</h3>
					<p class="text-center">Useful for miscellaneous household tasks such as cooling garden sheds, small outdoor
						furniture, or patio umbrellas.</p>
				</div>
				<!-- Use Case 4 -->
				<div class="flex flex-col items-center bg-red-950 text-white rounded-lg p-6 m-2 w-full">
					<img src="/fix.png" alt="Touch-Ups" class="h-24 w-24 mb-4">
					<h3 class="text-xl font-bold mb-2">Touch-Ups</h3>
					<p class="text-center">Perfect for maintaining and refreshing existing CryoPaint layers on vehicles, small roofs,
						and more, ensuring continued cooling performance.</p>
				</div>
			</div>

			<!-- Coverage & Application -->
			<div class="text-2xl md:text-4xl text-left text-white font-bold mt-12 pb-4 border-b border-white">
				<span class="bluegradient">CryoCan</span> Coverage & Application
			</div>

			<div class="flex flex-col mt-6 space-y-12 text-white">
				<!-- Coverage -->
				<div class="flex flex-col md:flex-row items-center">
					<div class="w-full md:w-1/2">
						<img src="/scale-screen.png" alt="Coverage" class="w-36 m-auto h-auto rounded-lg">
					</div>
					<div class="w-full md:w-1/2 md:pl-6 mt-6 md:mt-0">
						<h3 class="text-xl md:text-2xl font-bold mb-4 bluegradient">Coverage</h3>
						<p>One 3.5 oz can of CryoCan covers approximately 3 square feet at full cooling efficiency. Apply 1 oz per square
							foot for maximum cooling power. Adjust the amount for partial cooling effects as needed.</p>
					</div>
				</div>
				<!-- Application -->
				<div class="flex flex-col md:flex-row items-center">
					<div class="w-full md:w-1/2 md:order-2">
						<img src="/cleaning-spray.png" alt="Application" class="w-36 m-auto h-auto rounded-lg">
					</div>
					<div class="w-full md:w-1/2 md:pr-6 mt-6 md:mt-0">
						<h3 class="text-xl md:text-2xl font-bold mb-4 bluegradient">Application</h3>
						<ul class="list-disc list-inside space-y-2">
							<li><strong>Spray Rate:</strong> CryoCan sprays at 0.0146 oz per second. It reaches 1 oz at 1 minute 9 seconds, 2
								oz at 2 minutes 17 seconds, and 3 oz at 3 minutes 26 seconds.</li>
							<li><strong>Technique:</strong> Use continuous, smooth movements while spraying. Hold the can 6-8 inches (15-20
								cm) from the surface and spray evenly across the area. Spray for approximately 30 seconds per square foot per
								layer for full coverage. Apply one or two layers, depending on the desired cooling performance, and allow proper
								drying time between coats.</li>
							<li><strong>Clearing the Nozzle:</strong> When finished, turn the can upside down and spray until only air comes
								out to clear the nozzle and prevent clogging for future use.</li>
							<li><strong>Environment:</strong> Apply in well-ventilated, shaded areas during cooler times of day, or indoors
								with proper ventilation for best results.</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Ideal Use -->
			<div class="text-2xl md:text-4xl text-left text-white font-bold mt-12 pb-4 border-b border-white">
				<span class="bluegradient">CryoCan's</span> Ideal Use
			</div>

			<div class="flex flex-col md:flex-row items-center mt-6">
				<div class="w-full md:w-1/2">
					<img src="/swipe-up.png" alt="Ideal Use" class="w-36 m-auto h-auto rounded-lg">
				</div>
				<div class="w-full md:w-1/2 md:pl-6 mt-6 md:mt-0 text-white">
					<p>CryoCan is specifically designed for small-scale cooling needs and touch-ups where larger cooling solutions are
						impractical. It is perfect for quick applications on outdoor gear, IoT devices, and smaller surfaces.</p>
				</div>
			</div>

			<!-- Important Considerations -->
			<div class="text-2xl md:text-4xl text-left text-white font-bold mt-12 pb-4 border-b border-white">
				The Best Of <span class="bluegradient">CryoCan</span>
			</div>

			<div class="text-white mt-6 space-y-6">
				<div class="flex items-start">
					<i class="bi bi-check2-circle text-blue-600 text-xl md:text-3xl me-4"></i>
					<p><strong>Performance:</strong> Full and even coverage is essential for maximum cooling performance. Partial
						coverage reduces efficiency.</p>
				</div>
				<div class="flex items-start">
					<i class="bi bi-check2-circle text-blue-600 text-xl md:text-3xl me-4"></i>
					<p><strong>VOC Level:</strong> Low VOC (15), making it suitable for environmentally conscious projects. PPE should
						still be worn during application, and CryoCan should only be applied in well-ventilated areas.</p>
				</div>
				<div class="flex items-start">
					<i class="bi bi-check2-circle text-blue-600 text-xl md:text-3xl me-4"></i>
					<p><strong>Limitations:</strong> Best used on flat, sky-facing surfaces with a clear view of the sky. Performance
						diminishes on angled surfaces over 30 degrees and in areas with overhead obstructions like trees or buildings. High
						wind speeds can reduce cooling effects, while low humidity enhances performance.</p>
				</div>
				<div class="flex items-start">
					<i class="bi bi-check2-circle text-blue-600 text-xl md:text-3xl me-4"></i>
					<p><strong>Practical Tip:</strong> For optimal performance, ensure that the painted surface has an unobstructed view
						of the sky by using the YMCA 'Y' pose test—if there’s only blue sky between your arms, CryoCan will work
						efficiently.</p>
				</div>
			</div>

			<div class="flex flex-col items-center mt-12 pt-8">
				<div class="bg-gray-800 text-white rounded-lg p-8 w-full md:w-1/2">
					<h3 class="text-3xl font-bold mb-4 text-center">CryoCan</h3>
					<p class="text-center text-2xl mb-4"><strong>$50</strong> per 3.5 oz can</p>
					<p class="text-center mb-6">(Covers approximately 3 square feet at full performance)</p>
					<a href="#buy_now"
						class="block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full text-center">Buy Now</a>
				</div>
			</div>

		</div>





	</div>

@endsection
