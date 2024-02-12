<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <!DOCTYPE html>
        <html>
            <head>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css" rel="stylesheet">
            </head>
            <body class="bg-white">    
                <div class="container flex flex-col mx-auto bg-white">
                    <aside class="group/sidebar flex flex-col shrink-0 lg:w-[300px] w-[250px] transition-all duration-300 ease-in-out m-0 fixed z-40 inset-y-0 left-0 bg-white border-r border-r-dashed border-r-neutral-200 sidenav fixed-start loopple-fixed-start" id="sidenav-main"><div class="flex shrink-0 px-8 items-center justify-between h-[96px]">
                    <a class="transition-colors duration-200 ease-in-out" href="https://www.loopple.com">
                        <P>MEDICONNECT</P>
                    </a>
                </div>
        
                <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div>
        
                <div class="flex items-center justify-between px-8 py-5">
                    <div class="flex items-center mr-5">
             
                    <div class="mr-2 ">
                        <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">Robert Jason</a>
                        <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">SEO Manager</span>
                    </div>
                    </div>
                    
                </div>
        
                <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div>
        
                <div class="relative pl-3 my-5 overflow-y-scroll">
                    <div class="flex flex-col w-full font-medium">
        
                    <!-- menu item -->
                    <div>
                        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                        <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Statistiques</a>
                        </span>
                    </div>
        
        
                    <!-- menu item -->
                    <div>
                        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                            <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                                <a href="{{ route('medicaments.index') }}" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Gestions des medicaments</a>
                            </span>
                    </div>
        
                    <!-- menu item -->
                    <div>
                        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                        <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Gestion des specialites</a>
                        </span>
                    </div>
        
        
                    </div>
                    </div>
                </aside>
                </div>
                <div class="flex flex-wrap ml-9 my-5">
                    <div class="w-full max-w-full sm:w-1/4 mx-auto text-center">
                        <section class="text-gray-700 body-font">
                            <div class="container px-5 py-24 mx-auto">
                             
                              <div class="flex flex-wrap -m-4 text-center">
                                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                  <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                      <path d="M8 17l4 4 4-4m-4-5v9"></path>
                                      <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                                    </svg>
                                    <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
                                    <p class="leading-relaxed">Consultations</p>
                                  </div>
                                </div>
                                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                  <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                      <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                      <circle cx="9" cy="7" r="4"></circle>
                                      <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                                    </svg>
                                    <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
                                    <p class="leading-relaxed">Patients</p>
                                  </div>
                                </div>
                                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                  <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                      <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                      <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                                    </svg>
                                    <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
                                    <p class="leading-relaxed">Doctor</p>
                                  </div>
                                </div>
                                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                  <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                      <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg>
                                    <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
                                    <p class="leading-relaxed">Specialites</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>    
                    </div>
                </div>
            </body>
        <html>
        </div>
    </div>
</x-app-layout>
