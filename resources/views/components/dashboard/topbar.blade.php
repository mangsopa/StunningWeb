<nav class="navbar header-navbar pcoded-header">
      <div class="navbar-wrapper">

          <div class="navbar-logo">
              <a class="mobile-menu" id="mobile-collapse" href="#!">
                  <i class="feather icon-menu"></i>
              </a>
              <a href="index-1.htm">
                  <img class="img-fluid" src="libraries\assets\images\logo.png" alt="Theme-Logo">
              </a>
              <a class="mobile-options">
                  <i class="feather icon-more-horizontal"></i>
              </a>
          </div>

          <div class="navbar-container container-fluid">
              <ul class="nav-left">
                  <li class="header-search">
                      <div class="main-search morphsearch-search">
                          <div class="input-group">
                              <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                              <input type="text" class="form-control">
                              <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <a href="#!" onclick="javascript:toggleFullScreen()">
                          <i class="feather icon-maximize full-screen"></i>
                      </a>
                  </li>
              </ul>
              <ul class="nav-right">
                    <x-dropdown align="right" width="48">
                          <x-slot name="trigger">
                              <button
                                  class="inline-flex items-center py-2 px-2 text-sm font-medium  text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">

                                  <div class="px-2">
                                      <img src=" {{ asset('libraries/assets/images/avatar-4.jpg') }}"
                                          class="img-radius w-10" alt="User-Profile-Image">
                                  </div>
                                  <div>{{ Auth::user()->name }}</div>
                                  <div class="ms-1">
                                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                          viewBox="0 0 20 20">
                                          <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                      </svg>
                                  </div>
                              </button>
                          </x-slot>

                          <x-slot name="content">
                              <x-dropdown-link :href="route('profile.edit')">
                                  {{ __('Profile') }}
                              </x-dropdown-link>

                              <!-- Authentication -->
                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <x-dropdown-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                                      this.closest('form').submit();">
                                      {{ __('Log Out') }}
                                  </x-dropdown-link>
                              </form>
                          </x-slot>
                      </x-dropdown>
              </ul>
          </div>
      </div>
  </nav>