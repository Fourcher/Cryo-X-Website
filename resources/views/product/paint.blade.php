@extends('layouts.public')

@section('hero-image', 'van.png')

@section('content')

    <div class="container mx-auto">

        <div class="text-4xl md:text-6xl lg:text-8xl text-center text-white rethink-700">
            <span class="bluegradient">Active-Cooling</span> CryoPaint
        </div>

        <div class="text-base md:text-lg text-center text-white rethink-700 mt-4">
            Easy-to-use, water-based, Active-Cooling paint for any outdoor application
            <br><br>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center mt-12 space-y-4 md:space-y-0 md:space-x-4">
            <div
                class="h-full pt-4 pb-4 px-8 bg-gradient-to-r from-[#0067FF] to-[#003E99] rounded-xl inline-flex justify-center items-center">
                <a href="#buy_now">
                    <div class="text-center text-white text-base md:text-lg font-rethink-sans font-medium leading-7">
                        Buy Now
                    </div>
                </a>
            </div>

            <div
                class="h-full pt-4 pb-4 px-8 bg-transparent border border-[#0067FF] rounded-xl inline-flex justify-center items-center">
                <div class="text-center text-white text-base md:text-lg font-rethink-sans font-medium leading-7">
                    <a href="/contact"><span class="bluegradient">Learn More</span></a>
                </div>
            </div>
        </div>

        <div class="container w-full md:w-3/4 mx-auto p-12 text-white rethink-700 text-base md:text-lg text-center mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="border-0 border-gray-500 md:border-e-2 md:pe-6">
            <b class="bluegradient text-lg md:text-xl">Introducing CryoPaint.</b><br>
            A water-based, versatile cooling solution that maximizes safety, comfort, and efficiency. Using cutting-edge
            PDRC (Passive Daytime Radiative Cooling) technology, CryoPaint reflects sunlight and actively removes heat,
            cooling surfaces up to 15&deg;F below ambient temperature by radiating heat into space. This not only reduces heat
            buildup but also cuts air conditioning demands, improving overall efficiency and comfort.
            </div>
            <div>
            <b class="bluegradient text-lg md:text-xl">Flexible Application</b><br>
            CryoPaint is available in sprayable, rollable, and hand-paintable formats, making it easy to apply across various
            surfaces—from vehicle roofs to building rooftops, or any flat surface exposed to the sun.
            </div>
        </div>

        {{-- big central image --}}
        <div class="text-center w-full md:w-2/3 mx-auto mt-24">
            <img class="w-full h-auto" src="/225.png" alt="CryoPaint Can" />
        </div>

        <div class="container w-full md:w-3/4 lg:w-1/2 mx-auto">

            <div class="text-2xl md:text-3xl lg:text-4xl text-left text-white rethink-700 mt-12 pb-4 border-b border-white">
                Features
            </div>

            <div
                class="text-base md:text-lg flex text-white rethink-600 items-center mt-6 border-b border-white pb-6">
                <i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
                <div class="ml-4">Eco-Friendly Radiative Cooling Paint: Utilizes cutting-edge PDRC technology to lower surface temperatures by up to 15℉ below ambient air, delivering cooling effects without electricity or typical harmful chemicals found in other solvent paints.
                </div>
            </div>

            <div
                class="text-base md:text-lg flex text-white rethink-600 items-center mt-6 border-b border-white pb-6">
                <i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
                <div class="ml-4">Low VOC, High Performance: Eco-friendly with an ultra-low VOC content (15), making it ideal for environmentally strict regions without compromising on cooling efficiency.</div>
            </div>

            <div
                class="text-base md:text-lg flex text-white rethink-600 items-center mt-6 border-b border-white pb-6">
                <i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
                <div class="ml-4">Versatile Application Options: Easily applied with standard paint sprayers, rollers, or CryoCan spray cans, making it perfect for a variety of surfaces and projects.
                </div>
            </div>

            <div
                class="text-base md:text-lg flex text-white rethink-600 items-center mt-6 border-b border-white pb-6">
                <i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
                <div class="ml-4">Industrial-Grade Coverage: One gallon covers up to 120 sq ft, providing large-scale cooling solutions for commercial buildings, vehicle roofs, and outdoor installations.</div>
            </div>
            <div
            class="text-base md:text-lg flex text-white rethink-600 items-center mt-6 border-b border-white pb-6">
            <i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
            <div class="ml-4">Safe and Easy Maintenance: Self-cleaning, no routine upkeep required, and pressure washable for long-lasting performance in various environments.</div>
        </div>

        </div>


        {{-- Download link for technical fact sheet --}}
        <div class="container w-full md:w-3/4 lg:w-1/2 mx-auto mt-12">
            <div class="text-2xl md:text-3xl lg:text-4xl text-left text-white rethink-700 pb-4 border-b border-white">
                Technical Fact Sheet
            </div>

            <div class="text-base md:text-lg text-white rethink-600 mt-6">
                Download our technical fact sheet to learn more about CryoPaint's features, benefits, and applications.
            </div>

            <div class="text-center mt-6">
                <a href="/cryopaint_factsheet.pdf" target="_blank"
                    class="bg-gradient-to-r from-[#0067FF] to-[#003E99] rounded-xl inline-flex justify-center items-center p-4">
                    <div class="text-center text-white text-base md:text-lg font-rethink-sans font-medium leading-7">
                        Download Fact Sheet
                    </div>
                </a>
            </div>
        </div>

        <div class="text-4xl md:text-6xl lg:text-8xl text-center text-white rethink-700 mt-20" id="buy_now">
            <span class="bluegradient">Buy</span> Now
        </div>

        <div class="flex flex-col lg:flex-row rethink-600 text-white mt-12 w-full md:w-3/4 mx-auto">
            <div class="w-full lg:w-1/2 p-4 md:p-8 lg:p-12">

                <span class="text-xl md:text-2xl lg:text-3xl rethink-700">
                    Introducing <span class="bluegradient">CryoPaint</span>, a water-based, versatile cooling solution that
                    maximizes safety, comfort, and efficiency.
                </span>
                <br>
                <div class="text-md mt-8 mb-8">Now Only $750/Gallon</div>

                <hr>

                <div class="text-md rethink-600 mt-8 mb-4">Color - <span class="rethink-700">White</span></div>

                <div class="rounded-full bg-white w-6 h-6 border border-blue-600 m-1 inline-block mb-8"></div>
                <hr>
                <div class="text-md mt-8 mb-4"><i class="bi bi-dollar"></i> Bulk Pricing</div>

                <div class="text-sm mt-4 mb-6">Contact us for bulk pricing. Save up to $250/g on large orders!</div>
                <hr>
                @livewire('basket-button', [$product])

            </div>

            <div class="w-full lg:w-1/2 p-4 md:p-8 text-center">
                <div class="w-full mx-auto">
                    <img src="/225.png" alt="CryoPaint Can" class="rounded-2xl w-full h-auto" draggable="false">
                </div>
                {{-- <div class="w-full md:w-2/3 mx-auto flex flex-wrap justify-center mt-2">
                    <img src="/preview_vinyl.png" alt="Preview" class="rounded-xl w-16 md:w-24 m-2 h-auto"
                        draggable="false">
                    <img src="/preview_vinyl.png" alt="Preview" class="rounded-xl w-16 md:w-24 m-2 h-auto"
                        draggable="false">
                    <img src="/preview_vinyl.png" alt="Preview" class="rounded-xl w-16 md:w-24 m-2 h-auto"
                        draggable="false">
                </div> --}}
            </div>
        </div>

    </div>

@endsection
