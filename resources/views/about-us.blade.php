{{-- Extend layouts/public --}}
@extends('layouts.public')

{{-- Define content --}}
@section('content')

<!-- Hero Section -->
<section class="py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold text-white">About Cryo X Co</h1>
        <p class="mt-4 text-lg text-gray-300">At Cryo X Co, we’re transforming how the world stays cool. Inspired by the groundbreaking potential of radiative cooling—and driven by the challenge of its inaccessibility—our mission is clear and ambitious: to make this innovative technology simple, affordable, and within everyone’s reach.</p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-white text-center">Our Mission</h2>
        <p class="mt-6 text-lg text-gray-300 text-center">
            We envision a future where every outdoor surface under the sun benefits from our technology, helping people save money, improve their quality of life, and reduce reliance on traditional cooling methods.
        </p>
    </div>
</section>

<!-- Company Overview Section -->
<section class=" py-16">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2">
            <img class="w-full h-auto rounded-lg" src="/carpromo.jpg" alt="Cryo X Co Company Overview">
        </div>
        <div class="md:w-1/2 md:ml-8 mt-8 md:mt-0">
            <h2 class="text-4xl font-bold text-white">Who We Are</h2>
            <p class="mt-6 text-lg text-white">
                <b>What Drives Us</n>
                <br>
                We’re tackling three key challenges in the market:
                <ul class="list-disc list-inside text-white">
                    <li>Radiative cooling materials are hard to find.</li>
                    <li>They’re difficult to use.</li>
                    <li>They’re prohibitively expensive.</li>
                </ul>
                <span class="text-white">
                <br>
                Cryo X Co is changing that. By offering intuitive application methods, competitive pricing, and advanced support, we’re making it possible for anyone—businesses or individuals—to harness the power of radiative cooling.
                <br><br>
                <b>Our Edge</b><br>
                Unlike others in the market, our products stand out through simplicity and affordability. You don’t need specialized training or certifications to use CryoPaint. It’s easy to apply, requires minimal labor, and delivers results that rival—and often surpass—far costlier solutions.
                <br><br>
                We’re also committed to quality and transparency. Every bucket undergoes rigorous testing, and our advanced documentation ensures clients feel supported every step of the way.
                <br><br>
                </span>
            </p>
        </div>
    </div>
</section>

<!-- CEO Section -->
<section class="py-16">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 md:mr-8 mt-8 md:mt-0">
            <h2 class="text-4xl font-bold text-white">Why Choose Cryo X Co?</h2>
            <p class="mt-6 text-lg text-gray-300">
                We know innovation doesn’t stop at product launch. That’s why our R&D never rests, constantly improving our offerings and exploring new possibilities for radiative cooling. We’ve already helped multiple companies re-engineer their products with our technology, proving its value across diverse applications.
                <br><br>
                
                When faced with challenges—like early product recalls—we didn’t back down. Instead, we went above and beyond to refund, replace, and rebuild trust with our customers, turning setbacks into opportunities to prove our commitment.
                <br><br>
                <b>Our Vision</b><br>
                At Cryo X Co, we don’t just sell cooling paint—we’re creating a movement. Cooling everything down, one surface at a time. Whether you’re a business leader looking for a better way to protect your products or an individual seeking innovative solutions, we’re here to help.
                <br><br>
                Let’s make the impossible possible—together.
            </p>
        </div>
        <div class="md:w-1/2">
            <img class="w-full h-auto rounded-lg" src="/mix.jpg" alt="Cryo X Co Company Overview">
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-white text-center">Our Team</h2>
        <p class="mt-6 text-lg text-gray-300 text-center">
            A dedicated team of professionals committed to excellence.
        </p>
        <!-- Team Members Grid -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="text-center">
                <img class="w-40 h-40 object-cover rounded-full mx-auto" src="/jordan.jpg" alt="Jordan Fourcher ">
                <h3 class="mt-4 text-xl font-bold text-white">Jordan Fourcher </h3>
                <p class="mt-2 text-gray-300">Chief Executive Officer</p>
            </div>
            <!-- Team Member 2 -->
            <div class="text-center">
                <img class="w-40 h-40 object-cover rounded-full mx-auto" src="/jay.jpg" alt="Jayrajsinh Parihar">
                <h3 class="mt-4 text-xl font-bold text-white">Jayrajsinh Parihar</h3>
                <p class="mt-2 text-gray-300">Research And Development Engineer</p>
            </div>
            <!-- Team Member 3 -->
            <div class="text-center">
                <img class="w-40 h-40 object-cover rounded-full mx-auto" src="/marcus.jpg" alt="Marcus Taylor">
                <h3 class="mt-4 text-xl font-bold text-white">Marcus Taylor </h3>
                <p class="mt-2 text-gray-300">
                    Business Development Manager</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class=" py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-white text-center">Our Values</h2>
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="text-center">
                <i class="bi bi-lightbulb text-blue-500 text-5xl"></i>
                <h3 class="mt-4 text-2xl font-bold text-white">Innovation</h3>
                <p class="mt-2 text-gray-300">
                    We continuously seek new ways to improve our products and services.
                </p>
            </div>
            <!-- Value 2 -->
            <div class="text-center">
                <i class="bi bi-people text-blue-500 text-5xl"></i>
                <h3 class="mt-4 text-2xl font-bold text-white">Integrity</h3>
                <p class="mt-2 text-gray-300">
                    Honesty and transparency are at the core of everything we do.
                </p>
            </div>
            <!-- Value 3 -->
            <div class="text-center">
                <i class="bi bi-globe text-blue-500 text-5xl"></i>
                <h3 class="mt-4 text-2xl font-bold text-white">Sustainability</h3>
                <p class="mt-2 text-gray-300">
                    We are committed to environmentally friendly practices.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-gray-900 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-white">Get in Touch</h2>
        <p class="mt-6 text-lg text-gray-300">
            Have questions? We'd love to hear from you.
        </p>
        <a href="{{ route('contact-us') }}" class="mt-8 inline-block px-6 py-3 bg-blue-500 text-white font-bold rounded-full hover:bg-blue-600">
            Contact Us
        </a>
    </div>
</section>

@endsection
