<div class="h-16 flex justify-between items-center px-6">
    <div class="flex items-center gap-2">
        <img src="{{ asset('images/logo.png') }}" class="rounded-full object-cover w-10 h-10 ring-1 ring-white"
            alt="">
        <span class="text-white text-sm font-semibold">Ali Hasnain</span>
    </div>
    <div class="hidden md:block">
        <div class="flex gap-4 justify-center items-center">
            <a href='{{ route('home') }}' class="text-white">Home</a>
            <a href="#about-me" class="text-white">About </a>
            <a class="text-white">Home</a>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <button class="bg-gray-900 text-white px-4 py-2 rounded-xl">Download CV</button>
    </div>
</div>
