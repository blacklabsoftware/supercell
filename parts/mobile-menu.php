<div class="fixed z-40 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    x-show="mobileMenuOpen == true"
>
  <div class="flex items-start justify-center min-h-screen text-center">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
    x-show="mobileMenuOpen == true"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 "
    x-transition:enter-end="opacity-100 "
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    ></div>

    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div 
    class="m-4 w-full block align-bottom bg-dark-green-500 rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all"
    x-show="mobileMenuOpen==true"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 "
    x-transition:enter-end="opacity-100 "
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    >
    
    <div class="flex justify-center mb-8">
            <button class="flex space-x-2 items-center text-white active:text-yellow-500" @click.prevent="mobileMenuOpen = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span class="font-medium uppercase">Close</span>
            </button>
    </div>
    
    <?php print wp_nav_menu(['theme_location' => 'main-menu', 'menu_class' => 'mobile-nav', 'depth' => 2]) ?>
    </div>
  </div>
</div>
