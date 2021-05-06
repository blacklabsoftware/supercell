<?php require(__DIR__.'/parts/page-head.php'); ?>

<header id="main-header" class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-2">
    <div class="flex flex-col space-y-8 md:flex-row justify-between items-center">
        <a href="<?php print bloginfo('home') ?>" class="block opacity-100 focus:opacity-50 transition-opacity">
        <img src="<?php print asset('images/logo.svg') ?>" alt="Logo">
        </a>
        <div class="hidden lg:block">
            <?php print wp_nav_menu(['theme_location' => 'main-menu', 'menu_class' => 'desktop-nav', 'depth' => 2]) ?>
        </div>

        <div class="md:block lg:hidden" x-data="{mobileMenuOpen: false}">
            <button class="flex space-x-2 text-white items-center" @click.prevent="mobileMenuOpen = true">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <span class="font-medium uppercase">Menu</span>
            </button>
            <?php require('parts/mobile-menu.php') ?>
        </div>

        <div>
            <a href="<?php print get_field('lets_talk_link','options') ?>" target="_blank" class="inline-flex items-center px-6 py-2 border border-transparent text-base font-medium rounded-full shadow-sm text-dark-green-500 bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                Let's Chat
            </a>
        </div>
    </div>
    </div>
</header>
