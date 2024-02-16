<script src="https://cdn.tailwindcss.com"></script>

<div class="w-screen">
    <div class="relative mx-auto mt-20 mb-20 max-w-screen-lg overflow-hidden rounded-t-xl bg-teal-400/60 py-32 text-center shadow-xl shadow-gray-300">
      <h1 class="mt-2 px-8 text-3xl font-bold text-white md:text-5xl">Prendre un rendez-vous</h1>
      <p class="mt-6 text-lg text-white">Profiter d'une consultation avec des medecins experts</p>
      <img class="absolute top-0 left-0 -z-10 h-full w-full object-cover" src="https://images.unsplash.com/photo-1504672281656-e4981d70414b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
    </div>
  
    <div class="mx-auto grid max-w-screen-lg px-6 pb-20">
      <div class="">

      </div>
  
      
  
      <div class="">
        <p class="mt-8 font-serif text-xl font-bold text-blue-900">Choisir l'horraire</p>
        <div class="mt-4 grid grid-cols-4 gap-2 lg:max-w-xl" id="timeButtons">
          <button class="rounded-lg bg-teal-100 px-4 py-2 font-medium text-teal-900 active:scale-95">9:00 - 10:00</button>
          <button class="rounded-lg bg-teal-100 px-4 py-2 font-medium text-teal-900 active:scale-95">10:00 - 11:00</button>
          <button class="rounded-lg bg-teal-100 px-4 py-2 font-medium text-teal-900 active:scale-95">11:00 - 12:00</button>
          <button class="rounded-lg bg-teal-100 px-4 py-2 font-medium text-teal-900 active:scale-95">12:00 - 13:00</button>
          <button class="rounded-lg bg-teal-100 px-4 py-2 font-medium text-teal-900 active:scale-95">15:00 - 16:00</button>
          <button class="rounded-lg bg-teal-100 px-4 py-2 font-medium text-teal-900 active:scale-95">16:00 - 17:00</button>
          <button class="rounded-lg bg-teal-100 px-4 py-2 font-medium text-teal-900 active:scale-95">17:00 - 18:00</button>
          <button class="rounded-lg bg-teal-100 px-4 py-2 font-medium text-teal-900 active:scale-95">18:00 - 19:00</button>
        </div>
      </div>
  
      <button class="mt-8 w-56 rounded-full border-8 border-emerald-500 bg-teal-600 px-10 py-4 text-lg font-bold text-white transition hover:translate-y-1">Reserver maintenant</button>
    </div>
  </div>
  <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
            var timeButtons = document.getElementById("timeButtons");

            timeButtons.addEventListener("click", function (event) {
                var clickedButton = event.target;

                // Check if the clicked element is a button
                if (clickedButton.tagName === "BUTTON") {
                    // Remove the 'bg-teal-700' class from all buttons
                    var allButtons = timeButtons.getElementsByTagName("button");
                    for (var i = 0; i < allButtons.length; i++) {
                        allButtons[i].classList.remove("bg-teal-700");
                    }

                    // Add the 'bg-teal-700' class to the clicked button
                    clickedButton.classList.add("bg-teal-700");
                }
            });
        });
  </script>
  