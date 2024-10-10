<x-guest-layout>

    {{-- Hero Section --}}
    <main>
        <div id="hero" class="min-h-screen bg-gradient-to-br from-purple-50 via-blue-50 to-transparent">
            <div id="hero-container" class="max-w-4xl mx-auto px-6 pb-32 flex flex-col sm:items-center sm:text-center">
                <div id="version-text" class="flex items-center my-6 gap-2 border border-blue-300 bg-blue-50 rounded-lg px-3 py-1 w-fit shadow-md hover:shadow-lg hover:-translate-y-1 transition group">
                    <div class="w-2 h-2 bg-blue-400 rounded-full border border-blue-600"></div>
                    <p class="font-display text-blue-600">v0.21.1: <span>Find-in-page bug fixes</span></p>
                    <x-zondicon-arrow-thin-right class="h-4 text-blue-600 group-hover:translate-x-2 transition duration-300" />
                </div>
                <h1 class="text-4xl font-semibold leading-snug mt-4 sm:text-6xl sm:leading-normal">Web app to desktop app in minutes</h1>
                <p class="text-xl mt-4 sm:text-2xl sm:mt-8 text-gray-800">Take your web app codebase and transform it into a cross platform desktop app with naitve functionality.</p>
                <div id="buttons-container" class="mt-12 flex gap-4 flex-col sm:flex-row">
                    <button class="px-8 py-3 font-semibold rounded-lg text-white bg-blue-900 shadow-sm hover:bg-opacity-90">Donwload now</button>
                    <button class="px-8 py-3 font-semibold rounded-lg bg-white border border-gray-400 hover:border-gray-900">Read Docs</button>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
