<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <img src="/assets/images/banner.jpg" alt="Banner" class="w-full h-auto">
                <div class="p-8">
                    <span class="font-black text-2xl text-gray-500 font-mono mb-4 dark:text-neutral-400">Redes Sociales</span>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-youtube" :url="'https://www.youtube.com/@elrincondeisma?sub_confirmation=1'" :title="'Canal Principal El Rincón de Isma'" />
                    </ul>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-youtube" :url="'https://www.youtube.com/@elrincondeismalive?sub_confirmation=1'" :title="'Canal Secundario El Rincón de Isma - Live'" />
                    </ul>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-twitch" :url="'https://www.twitch.tv/elrincondeismaoficial'" :title="'Canal de Twitch El Rincón de Isma'" />
                    </ul>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-github" :url="'https://github.com/elrincondeisma'" :title="'Github'" />
                    </ul>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-discord" :url="'https://discord.com/invite/meZU65c67e'" :title="'Únete a nuestro Discord'" />
                    </ul>
                </div>
                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-basic-modal" data-hs-overlay="#hs-basic-modal">
  Open modal
</button>

<div id="hs-basic-modal" class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-basic-modal-label">
  <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
      <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
        <h3 id="hs-basic-modal-label" class="font-bold text-gray-800 dark:text-white">
          Modal title
        </h3>
        <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-basic-modal">
          <span class="sr-only">Close</span>
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
      <div class="p-4 overflow-y-auto">
        <p class="mt-1 text-gray-800 dark:text-neutral-400">
          This is a wider card with supporting text below as a natural lead-in to additional content.
        </p>
      </div>
      <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-basic-modal">
          Close
        </button>
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
          Save changes
        </button>
      </div>
    </div>
  </div>
</div>

            </div>
        </div>
    </div>
</x-app-layout>
