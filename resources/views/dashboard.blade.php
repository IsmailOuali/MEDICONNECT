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
                      <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ Auth::user()->name }}</a>
                      <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]"> {{ Auth::user()->role }} </span>
                  </div>
                  </div>
                  
              </div>
      
              <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div>
      
              <div class="relative pl-3 my-5 overflow-y-scroll">
                  <div class="flex flex-col w-full font-medium">
      
                  <!-- menu item -->
                  <div>
                      <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                      <a href="#statistiques" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Statistiques</a>
                      </span>
                  </div>
      
      
                  <!-- menu item -->
                  <div>
                      <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                      <a href="#AddMedicament" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Gestions des medicaments</a>
                      </span>
                  </div>
                  
                  <!-- menu item -->
                  <div>
                      <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                      <a href="#Addspeciality" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-stone-500 hover:text-dark">Gestion des specialites</a>
                      </span>
                  </div>
      
      
                  </div>
                  </div>
              </aside>
              </div>
              <div class="flex flex-wrap ml-9 my-5">
                  <div class="w-full max-w-full sm:w-1/4 mx-auto text-center">
                      <section id="statistiques" class="text-gray-700 body-font">
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
                        
                        <section id="AddMedicament" class="text-gray-700 body-font">
                          <div class="bg-gray-100">
                              <div class="w-full min-h-screen flex items-center justify-center">
                                <div class="bg-blue-600 p-8 rounded-lg shadow-lg max-w-md w-full">
                                  <h1 class="text-xl font-semibold mb-4">Veuillez entrer le nom du médicament</h1>
                                  <form method="POST" action="{{ route('medicaments.store') }}">
                                      @csrf
                                      <div class="mb-4">
                                          <input type="text" name="medicament" placeholder="Médicament" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:border-blue-500" />
                                      </div>
                                      <button type="submit" class="w-full bg-white text-black px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">Ajouter</button>
                                  </form>
                              </div>
                              <table class="w-full text-md bg-blue-300 shadow-md rounded mb-4">
                                <thead>
                                    <tr class="border-b">
                                        <th class="text-left p-3 px-5">Nom</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medicaments as $medicament)
                                    <tr class="border-b hover:bg-orange-100">
                                        <td class="p-3 px-5"><p>{{ $medicament->name }}</p></td>
                                        <td class="p-3 px-5 flex justify-end">
                                            <button type="button" onclick="fillUpdateForm('{{ $medicament->name }}')" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Update</button>
                                            <form method="POST" action="{{ route('medicaments.destroy', $medicament->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                              
                              <div class="bg-blue-600 p-8 rounded-lg shadow-lg max-w-md w-full" id="updateFormContainer" style="display: none;">
                                  <h1 class="text-xl font-semibold mb-4">Modifier le médicament</h1>
                                  <form method="POST" id="updateForm" action="{{ route('medicaments.update', ['name' => $medicament->name]) }}">
                                    @csrf
                                      @method('put')
                                      <div class="mb-4">
                                          <input type="text" name="medicament" id="updateMedicament" placeholder="Médicament" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:border-blue-500" />
                                      </div>
                                      <button type="submit" class="w-full bg-white text-black px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">Modifier</button>
                                  </form>
                              </div>
                      </section>
                      <section id="Addspeciality"  class="text-gray-700 body-font">
                        <div  class="flex flex-wrap ml-9 my-5">
                            <section class="text-gray-700 body-font">
                                <div class="bg-gray-100">
                                    <div class="mt-3 w-full min-h-screen flex flex-col	items-center justify-center">
                                        <div class="bg-blue-600 p-8 rounded-lg shadow-lg max-w-md w-full ">
                                            <h1 class="text-xl font-semibold mb-4">Veuillez entrer le nom du Specialie</h1>
                                            <p class="text-gray-600 mb-6">Soyez precis en entrant cet information</p>
                                            <form method="POST" action="{{ route('Specialities.store') }}">
                                                @csrf
                                                <div class="mb-4">
                                                  <input type="text" name="speciality" placeholder="Speciality" class=" w-full px-4 py-2 border rounded-lg text-gray-700 focus:border-blue-500" />
                                                </div>
                                                <button type="submit" class="w-full bg-white text-black px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">Ajouter</button>
                                            </form>
                                        </div>
                                        <div class="text-gray-900 bg-gray-200">
                                          <div class="p-4 flex">
                                              <h1 class="text-3xl">
                                                  Specialités
                                              </h1>
                                          </div>
                                          <div class="px-3 flex justify-center">
                                              <table class="w-full text-md bg-blue-300 shadow-md rounded mb-4">
                                                  <tbody>
                                                      <tr class="border-b">
                                                          <th class="text-left p-3 px-5">Name</th>
                                                          <th>Actions</th>
                                                      </tr>
                                                      @csrf
                                                      @foreach ($specialities as $speciality)
                                                      <tr class="border-b hover:bg-orange-100">
                                                          <td class="p-3 px-5"><p>{{ $speciality->name }}</p></td>
                                                          <td class="p-3 px-5 flex justify-end">
                                                              <button type="button" onclick="fillUpdateSpecialityForm('{{ $speciality->name }}')" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Update</button>
                                                              <form method="POST" action="{{ route('Specialities.destroy', $speciality->id) }}">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                                            </form>
                                                            
                                                          </td>
                                                      </tr>
                                                      @endforeach
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="bg-blue-600 p-8 rounded-lg shadow-lg max-w-md w-full" id="updateSpecialityFormContainer" style="display: none;">
                                          <h1 class="text-xl font-semibold mb-4">Modifier la spécialité</h1>
                                          <form method="POST" id="updateSpecialityForm" action="{{ route('Specialities.update', ['name' => $speciality->name]) }}">
                                              @csrf
                                              @method('put')
                                              <div class="mb-4">
                                                  <input type="text" name="speciality" id="updateSpeciality" placeholder="Spécialité" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:border-blue-500" />
                                              </div>
                                              <button type="submit" class="w-full bg-white text-black px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">Modifier</button>
                                          </form>
                                      </div>
                                      
                                      </div>
                                    </div>
                                    
                                  </section>
                                </div>
                      
                          </div>
                      </div>
                </div>


      </div>
  </div>
                    
  <script>
     function fillUpdateForm(name) {
      document.getElementById('updateMedicament').value = name;
    document.getElementById('updateForm').action = 'http://127.0.0.1:8000/medicaments/' + name;
    document.getElementById('updateFormContainer').style.display = 'block';
    }

    function fillUpdateSpecialityForm(name) {
    document.getElementById('updateSpeciality').value = name;
    document.getElementById('updateSpecialityForm').action = 'http://127.0.0.1:8000/specialities/' + name;
    document.getElementById('updateSpecialityFormContainer').style.display = 'block';
}
  </script>
</x-app-layout>
