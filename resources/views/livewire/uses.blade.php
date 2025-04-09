<div class="px-4">

	<div class="flex flex-col md:flex-row justify-between mt-10 text-white font-bold w-full gap-4 ">
		<div wire:click="select_use_tab('electric_vehicles')"
			class="border-b  w-full md:w-1/3 p-2 text-center cursor-pointer hover:text-blue-300 @if ($use_tab == 'electric_vehicles') border-b-2 border-blue-500 @else border-gray-700 @endif">
            EV Fleet</div>
		<div wire:click="select_use_tab('iot')"
			class="border-b w-full md:w-1/3 p-2 text-center cursor-pointer hover:text-blue-300 @if ($use_tab == 'iot') border-b-2 border-blue-500 @else border-gray-700 @endif">
			IoT</div>
		<div wire:click="select_use_tab('fleet')"
			class="border-b w-full md:w-1/3 p-2 text-center cursor-pointer hover:text-blue-300 @if ($use_tab == 'fleet') border-b-2 border-blue-500 @else border-gray-700 @endif">
			Fleet and Commercial Vehicles</div>
	</div>

	<div class="flex flex-col md:flex-row justify-center mt-10 md:mt-20">
		<div class="w-full md:w-1/2 md:pe-8 text-white">
			@if ($use_tab == 'electric_vehicles')
				<h2 class="text-2xl font-bold mb-2">EV Fleet</h2>
				<p>Maximize your EV fleet's efficiency and reduce costs on electricity, fuel, and maintenance with CryoPaint. In peak summer conditions, air conditioning
					can reduce an electric vehicle's range by up to 40%, a significant concern for 70% of potential EV buyers. For
					example, the Rivian Amazon delivery van, with a rated range of 150 miles, drops to 90 miles when the AC is in use.
					By applying CryoPaint, you can reclaim 30% of that lost range—restoring approximately 18 miles—bringing the total
					back up to 108 miles. This recovery means more deliveries per charge, fewer stops for recharging, and lower
					electricity costs, saving your company both time and money while enhancing operational efficiency
				</p>
			@elseif ($use_tab == 'iot')
				<h2 class="text-2xl font-bold mb-2">IoT</h2>
				<p>Optimize your IoT devices with CryoPaint, the ultimate solution for engineers facing cooling challenges due to
					space, budget, or energy constraints. Traditional AC units are bulky, expensive, and consume significant power, but
					CryoPaint provides an efficient alternative at a fraction of the cost—without using any electricity.<br><br>Our
					technology
					can remove up to 15&deg;F of heat from the device, ensuring it stays within safe operating temperatures. Whether you
					need added reliability or primary cooling, CryoPaint ensures your IoT devices run efficiently and reliably,
					enhancing performance without adding complexity.
				</p>
			@elseif ($use_tab == 'fleet')
				<h2 class="text-2xl font-bold mb-2">Fleet and Commercial Vehicles</h2>
				<p>Save Money, Keep Cool with CryoPaint. Tired of costly AC repairs and replacements? A new AC unit for a commercial
					van can cost thousands, but CryoPaint offers a cooling solution for under $1000. CryoPaint keeps your drivers,
					passengers, and cargo cooler without using gas or electricity.
					<br><br>Imagine running the AC all day without burning extra
					fuel or draining the battery. With CryoPaint, that’s possible. When your drivers crank up the AC, it cuts into your
					bottom line. But now, there’s a solution that will save you money and keep everyone comfortable. In an era where
					customer satisfaction is more critical than ever, especially in hot temperatures, CryoPaint gives you a competitive
					edge by ensuring comfort and reliability. And the best part? It pays for itself in just 5 years.
				</p>
			@endif
		</div>
		<div class="w-full md:w-1/2 mt-8 md:mt-0 md:ps-8">
			<img
				src="
                @if ($use_tab == 'electric_vehicles') electric_vehicle.png
                @elseif($use_tab == 'iot')
                    updraft.png
                @elseif($use_tab == 'fleet')
                    fleet.png @endif
            "
				alt="{{ $use_tab }}" class="w-full">
		</div>
	</div>
</div>
