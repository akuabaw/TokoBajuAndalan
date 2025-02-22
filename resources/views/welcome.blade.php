<x-layout></x-layout>
    <!-- Wrapper untuk Carousel & Cards -->
    <div class="container mx-auto px-6 lg:px-10 flex flex-col gap-12 mt-24">
        
        <!-- Carousel -->
        <div class="w-full">
            <div x-data="{            
                autoplayIntervalTime: 8000,
                slides: [                
                    {
                        imgSrc: 'https://i.pinimg.com/736x/c9/72/59/c972591900f81d530b69e51b1034b1f4.jpg',
                        title: 'Casual Man',
                        description: 'Simplicity is the Ultimate Sophistication.',           
                    },                
                    {                    
                        imgSrc: 'https://i.pinimg.com/736x/09/8c/68/098c68ef387f3f3950f5b40183468656.jpg',                    
                        title: 'Shopping Be Easy',
                        description: 'Shopping Made Simple, Life Made Better',            
                    },                
                    {                    
                        imgSrc: 'https://i.pinimg.com/736x/b4/79/d2/b479d2776763619c942fde86ae8e102b.jpg',                    
                        title: 'Find Your Style',
                        description: 'Discover the Style That Defines You',       
                    },            
                ],            
                currentSlideIndex: 1,
                next() {                
                    this.currentSlideIndex = this.currentSlideIndex < this.slides.length ? this.currentSlideIndex + 1 : 1;
                },
                autoplay() {
                    setInterval(() => { this.next(); }, this.autoplayIntervalTime);
                },
            }" x-init="autoplay" class="relative w-full overflow-hidden rounded-lg">
            
                <!-- slides -->
                <div class="relative min-h-[50vh] w-full rounded-lg overflow-hidden p-4 shadow-lg">
                    <template x-for="(slide, index) in slides">
                        <div x-show="currentSlideIndex == index + 1" class="absolute inset-0 rounded-lg overflow-hidden">
                            
                            <div class="absolute inset-0 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-black/85 to-transparent p-12 text-center rounded-lg">
                                <h3 class="text-2xl lg:text-3xl font-bold text-white" x-text="slide.title"></h3>
                                <p class="text-sm text-white" x-text="slide.description"></p>
                            </div>

                            <img class="absolute w-full h-full object-cover rounded-lg" x-bind:src="slide.imgSrc" />
                        </div>
                    </template>
                </div>
        </div>
        
        <!-- Cards -->
        <div class="w-full mt-10">
            <div class="flex items-center gap-4 ml-4 mt-8 mb-2">
                <h2 class="text-xl md:text-2xl font-semibold">Sedang Trending</h2>
                <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Lihat Semua</a>
            </div>                        
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-md overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img class="w-full h-48 object-cover" src="https://i.pinimg.com/736x/e1/4f/85/e14f85f756389912192392f6fdc6a6c0.jpg">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2">Casual Wear</h3>
                        <p class="text-gray-600 text-sm mb-4">Simple yet stylish casual outfits for everyday wear.</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg">$24.99</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-md overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img class="w-full h-48 object-cover" src="https://i.pinimg.com/736x/ec/fe/71/ecfe71797d44be53f46e4dcca4b38efc.jpg">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2">Trendy wear</h3>
                        <p class="text-gray-600 text-sm mb-4">Get the latest trendy shoes for all occasions.</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg">$39.99</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-md overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img class="w-full h-48 object-cover" src="https://i.pinimg.com/736x/6b/43/d9/6b43d981d6d5f7ad31933da4ec12906e.jpg">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2">Luxury wear</h3>
                        <p class="text-gray-600 text-sm mb-4">Enhance your look with premium luxury watches.</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg">$129.99</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="w-full bg-cover bg-center text-white py-6 px-6 md:px-12 flex items-center justify-between rounded-lg" style="background-image: url('https://i.pinimg.com/736x/c3/c4/03/c3c403673f9e4ab5ec3c5b5d6e0a1279.jpg');">
        <div class="p-4 rounded-lg">
            <h2 class="text-xl md:text-2xl font-semibold">Coba Promo Jalan jalan</h2>
            <p class="text-sm md:text-base text-gray-300">Langganan di ShopEase agar perjalananmu banyak promo.</p>
        </div>
        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-5 rounded-full transition">
            Learn More
        </a>
    </section>
    </div>
    <x-footer></x-footer>

    
    
    
    