@extends('layouts.public')

@section('hero-image', 'van.png')

@section('content')

    <div class="container mx-auto">

        <div class="text-4xl md:text-6xl lg:text-8xl text-center text-white rethink-700">
            <span class="bluegradient">Active-Cooling</span> CryoSample
        </div>

        <div class="text-base md:text-lg text-center text-white rethink-700 mt-4">
            CryoPaint 2 Oz Sample with Brush Cap Applicator. Try it out before you buy even more!
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
            <b class="bluegradient text-lg md:text-xl">Introducing CryoSample.</b><br>
            Experience the revolutionary cooling power of CryoPaint with this convenient 2 oz sample. Designed for small-scale testing and touch-ups, the built-in brush cap applicator ensures precision application for up to 2 sq ft of coverage. Perfect for evaluating the transformative effects of our eco-friendly, radiative cooling technology without committing to a larger quantity. Ideal for DIY enthusiasts, professionals, and innovators exploring new applications.
            </div>
            <div>
            <b class="bluegradient text-lg md:text-xl">Something Important.</b><br>
            - Covers up to 2 sq ft <br>
            - Compact and easy to use  <br>
            - $20 + shipping<br>
            - Designed for flat, sky-facing surfaces.<br>
            - <i>Not for indoor use or application on vertical surfaces.</i><br>
            
            </div>
        </div>

        {{-- big central image --}}
        <div class="text-center w-full md:w-1/3 mx-auto mt-24">
            <img class="w-full h-auto" src="/sample_brush.jpg" alt="CryoPaint Can" />
            

        </div>

        <div class="container w-full md:w-3/4 lg:w-1/2 mx-auto">

            <div class="text-2xl md:text-3xl lg:text-4xl text-left text-white rethink-700 mt-12 pb-4 border-b border-white">
                Perfect Use-Cases
            </div>

            <div
                class="text-base md:text-lg flex text-white rethink-600 items-center mt-6 border-b border-white pb-6">
                <i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
                <div class="ml-4"><b>Testing Surface Cooling</b>: Ideal for personal trials to measure the cooling performance on materials like metal, wood, or plastic.
                </div>
            </div>
            <div
                class="text-base md:text-lg flex text-white rethink-600 items-center mt-6 border-b border-white pb-6">
                <i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
                <div class="ml-4"><b>Small Touch-Ups</b>: Repair minor damage on existing CryoPaint applications.  </div>
            </div>

            <div
                class="text-base md:text-lg flex text-white rethink-600 items-center mt-6 border-b border-white pb-6">
                <i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
                <div class="ml-4"><b>Prototype Development</b>: Perfect for evaluating CryoPaint's effects on experimental or small-scale projects.</div>
                
            </div>

            <div
                class="text-base md:text-lg flex text-white rethink-600 items-center mt-6 border-b border-white pb-6">
                <i class="bi bi-check2-circle text-blue-600 text-2xl md:text-3xl"></i>
                <div class="ml-4"><b>Education & Demonstrations</b>: Showcase the potential of PDRC technology in presentations or teaching settings.  </div>
            </div>

        </div>


        {{-- Download link for technical fact sheet --}}
        <div class="container w-full md:w-3/4 lg:w-1/2 mx-auto mt-12">
            <div class="text-2xl md:text-3xl lg:text-4xl text-left text-white rethink-700 pb-4 border-b border-white">
                Technical Fact Sheet
            </div>

            <div class="text-base md:text-lg text-white rethink-600 mt-6">
                Download our technical fact sheet to learn more about CryoSample's features, benefits, and applications.
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
                    <span class="bluegradient">CryoPaint</span> sample now available in 2 oz container with included applicator brush
                </span>
                <br>
                <div class="text-md mt-8 mb-8">This sample covers Aprx 2 sqft</div>

                <hr>

                <div class="text-md rethink-600 mt-8 mb-4">Color - <span class="rethink-700">White</span></div>

                <div class="rounded-full bg-white w-6 h-6 border border-blue-600 m-1 inline-block mb-8"></div>
                <hr>
                @livewire('basket-button', [$product])

            </div>

            <div class="w-full lg:w-1/2 p-4 md:p-8 text-center">
                <div class="w-full mx-auto">
                    <img src="/sample_bg.jpg" alt="CryoPaint Can" class="rounded-2xl w-full h-auto" draggable="false">
                    {{-- <video controls class="w-full h-auto" src="/sample_1.jpg" autoplay alt="Cryo Sample Video"></video> --}}
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
