<header class="fixed left-0 top-0 z-[1000000000] p-2 transition-all w-full bg-transparent"
  id="mainnavigationBar">
  <nav class="container flex relative items-center">
    <div class="nav-logo">
      <a href="#hero" onclick="scrollToTop(event)">
        <img src="/images/logo-dark.png" alt="logo" class="dark:hidden h-7 w-auto" style="width: auto; height: 29px;" />
        <img src="/images/logo-dark.png" alt="logo dark version" class="hidden dark:inline-block h-7 w-auto" style="width: auto; height: 29px;" />
      </a>
    </div>
    <ul class="nav-list hidden lg:flex lg:ml-7 xl:ml-15  [&>*:not(:last-child)]:me-1">
      <li class="relative group" data-aos="fade-down" data-aos-delay="100" data-aos-duration="800">
        <a href="javascript:void(0)"
          class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
          dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors  @@if(nav == 'home'){active}">
          Home
          <i
            class="fa-solid fa-angle-down text-paragraph dark:text-white ml-1 group-hover:rotate-180 duration-500 mt-1"></i>
        </a>
        <ul
          class="absolute min-w-[250px] left-0 top-12  p-5   opacity-0 scale-y-0 origin-top duration-500 group-hover:scale-y-100 bg-white dark:bg-dark-200  group-hover:opacity-100 rounded-md [&>*:not(:last-child)]:border-b [&>*:not(:last-child)]:border-dashed [&>*:not(:last-child)]:border-borderColour dark:[&>*:not(:last-child)]:border-borderColour-dark [&>*:not(:first-child)]:mt-2.5 z-10">
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="index.html" class="flex">
              Home 1
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="payment.html" class="flex">
              Home 2
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="banking.html" class="flex">
              Home 3
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="analytics.html" class="flex">
              Home 4
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="hosting.html" class="flex">
              Home 5
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="chatbot.html" class="flex">
              Home 6
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="crypto.html" class="flex">
              Home 7
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="ai.html" class="flex">
              Home 8
            </a>
          </li>
        </ul>
      </li>
      <li data-aos="fade-down" data-aos-delay="200" data-aos-duration="800">
        <a href="about.html"
          class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
          dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors @@if(nav == 'about'){active}">
          About
        </a>
      </li>
      <li class="relative group" data-aos="fade-down" data-aos-delay="300" data-aos-duration="800">
        <a href="javascript:void(0)"
          class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
          dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors @@if(nav == 'services'){active}">
          Sections
          <i
            class="fa-solid fa-angle-down text-paragraph dark:text-white ml-1 group-hover:rotate-180 duration-500 mt-1"></i>
        </a>
        <ul
          class="absolute min-w-[250px] left-0 top-12  p-5   opacity-0 scale-y-0 origin-top duration-500 group-hover:scale-y-100 bg-white dark:bg-dark-200  group-hover:opacity-100 rounded-md [&>*:not(:last-child)]:border-b [&>*:not(:last-child)]:border-dashed [&>*:not(:last-child)]:border-borderColour dark:[&>*:not(:last-child)]:border-borderColour-dark [&>*:not(:first-child)]:mt-2.5 z-10">
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="#hero" class="flex">
              Hero
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="#about" class="flex">
              About
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="#process" class="flex">
              Process
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="#services" class="flex">
              Services
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="#team" class="flex">
              Team
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="#timeline" class="flex">
              Timeline
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="#market" class="flex">
              Market
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="#blog" class="flex">
              Blog
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="#clients" class="flex">
              Clients
            </a>
          </li>
        </ul>
      </li>
      <!-- <li class="group" >
        <a
          href="javascript:void(0)"
          class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
          dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors group"
        >
          Pages
          <i
            class="fa-solid fa-angle-down text-paragraph dark:text-white ml-1 group-hover:rotate-180 duration-500 mt-1"
          ></i>
        </a>
        <div
          class="absolute grid gap-15 text-gray-900 dark:text-white md:grid-cols-12 w-full left-0 top-12 p-2.5  opacity-0 scale-y-0 origin-top duration-500 group-hover:scale-y-100 bg-white dark:bg-dark-200  group-hover:opacity-100 rounded-medium shadow-lg z-10 items-center"
        >
          <ul class="col-span-8 columns-3 gap-10 px-15">
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="team.html"
                class="flex"
              >
                team
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="team-single.html"
                class="flex"
              >
                Team Details
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="testimonial.html"
                class="flex"
              >
                Testimonial
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="price.html"
                class="flex"
              >
                Price
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="career.html"
                class="flex"
              >
                Career
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="career-single.html"
                class="flex"
              >
                Career Single
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="faq.html"
                class="flex"
              >
                FAQ
              </a>
            </li>

            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="integration.html"
                class="flex"
              >
                Integration
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="login.html"
                class="flex"
              >
                Log In
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="signup.html"
                class="flex"
              >
                Sign Up
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              <a
                href="404.html"
                class="flex"
              >
                404
              </a>
            </li>
          </ul>
          <div class="col-span-4">
            <img
              src="images/navbar.png"
              alt="navbar"
              class="w-full dark:hidden rounded-2xl"
            />
            <img
              src="images/navbar-dark.png"
              alt="navbar"
              class="w-full hidden dark:block  rounded-2xl"
            />
          </div>
        </div>
      </li> -->
      <li class="relative group" data-aos="fade-down" data-aos-delay="500" data-aos-duration="800">
        <a href="javascript:void(0)"
          class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
          dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors   @@if(nav == 'blog'){active}">
          News
          <i
            class="fa-solid fa-angle-down text-paragraph dark:text-white ml-1 group-hover:rotate-180 duration-500 mt-1"></i>
        </a>
        <ul
          class="absolute min-w-[250px] left-0 top-12  p-5   opacity-0 scale-y-0 origin-top duration-500 group-hover:scale-y-100 bg-white dark:bg-dark-200  group-hover:opacity-100 rounded-md [&>*:not(:last-child)]:border-b [&>*:not(:last-child)]:border-dashed [&>*:not(:last-child)]:border-borderColour dark:[&>*:not(:last-child)]:border-borderColour-dark [&>*:not(:first-child)]:mt-2.5 z-10">
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="blog.html" class="flex">
              Blog Grid
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="blog-list.html" class="flex">
              Blog List
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="categories.html" class="flex">
              Blog Categories
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="tags.html" class="flex">
              Blog Tags
            </a>
          </li>
          <li
            class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            <a href="blog-details.html" class="flex">
              Blog Details
            </a>
          </li>
        </ul>
      </li>
      <li data-aos="fade-down" data-aos-delay="600" data-aos-duration="800">
        <a href="contact.html"
          class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
          dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors  @@if(nav == 'contact'){active}">
          Contact Us
        </a>
      </li>
    </ul>
    <ul class="flex items-center ml-auto  [&>*:not(:last-child)]:me-2.5">
      <li>
        @include('livewire.search-component')
      </li>
      <li class="max-lg:hidden">
        <a href="{{ route('login') }}" class="btn btn-navbar btn-sm">
          Login
        </a>
      </li>
      <li class="max-lg:hidden">
        <a href="{{ route('register') }}" class="btn btn-navbar btn-sm">
          Register
        </a>
      </li>
      <li class="max-lg:inline-block lg:hidden ">
        <button class="outline-none mobile-menu-button w-10 h-10 rounded-full bg-white dark:bg-dark-200 relative ">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 22 14" fill="none"
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <path
              d="M0 1C0 0.447715 0.447715 0 1 0H21C21.5523 0 22 0.447715 22 1C22 1.55228 21.5523 2 21 2H1C0.447716 2 0 1.55228 0 1Z"
              fill="" class="fill-paragraph dark:fill-white" />
            <path
              d="M8 7C8 6.44772 8.44772 6 9 6H21C21.5523 6 22 6.44772 22 7C22 7.55228 21.5523 8 21 8H9C8.44772 8 8 7.55228 8 7Z"
              fill="" class="fill-paragraph dark:fill-white" />
            <path
              d="M4 13C4 12.4477 4.44772 12 5 12H21C21.5523 12 22 12.4477 22 13C22 13.5523 21.5523 14 21 14H5C4.44772 14 4 13.5523 4 13Z"
              fill="" class="fill-paragraph dark:fill-white" />
          </svg>
        </button>
      </li>
    </ul>
    <div class="mobile-menu max-lg:overflow-y-auto">
      <button
        class=" outline-none navbar-toggle-close  w-10 h-10 rounded-full bg-white dark:bg-dark-200 absolute right-6 top-5 ">
        <i class="fa-solid fa-times"></i>
      </button>
      <ul class="nav-list flex flex-col gap-5 w-full max-w-[500px] landscape:h-full relative">
        <li class="relative group faq-item" data-aos="fade-down" data-aos-delay="100" data-aos-duration="800">
          <p
            class="faq-header font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
            dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors group @@if(nav == 'home'){active}">
            Home
            <i
              class="fa-solid fa-angle-down text-paragraph dark:text-white ml-auto group-[.open]:rotate-180 duration-500 mt-1"></i>
          </p>
          <ul class="faq-body close">
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="index.html" class="flex">
                Home 1
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="payment.html" class="flex">
                Home 2
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="banking.html" class="flex">
                Home 3
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="analytics.html" class="flex">
                Home 4
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="hosting.html" class="flex">
                Home 5
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="chatbot.html" class="flex">
                Home 6
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="crypto.html" class="flex">
                Home 7
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="ai.html" class="flex">
                Home 8
              </a>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="about.html"
            class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
            dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors @@if(nav == 'about'){active}">
            About
          </a>
        </li>
        <li class="relative group faq-item" data-aos="fade-down" data-aos-delay="200" data-aos-duration="800">
          <p href="javascript:void(0)"
            class="faq-header font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
            dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors group @@if(nav == 'services'){active}">
            Sections
            <i
              class="fa-solid fa-angle-down text-paragraph dark:text-white ml-auto group-[.open]:rotate-180 duration-500 mt-1"></i>
          </p>
          <ul
            class="absolute w-full min-w-[250px] left-0 top-12  p-5   opacity-0 scale-y-0 origin-top duration-500 group-hover:scale-y-100 bg-white dark:bg-dark-200  group-hover:opacity-100 rounded-md [&>*:not(:last-child)]:border-b [&>*:not(:last-child)]:border-dashed [&>*:not(:last-child)]:border-borderColour dark:[&>*:not(:last-child)]:border-borderColour-dark [&>*:not(:first-child)]:mt-2.5 z-10 faq-body close">
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="#hero" class="flex">
                Hero
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="#about" class="flex">
                About
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="#services" class="flex">
                Services
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="#features" class="flex">
                Features
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="#pricing" class="flex">
                Pricing
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="#testimonials" class="flex">
                Testimonials
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="#contact" class="flex">
                Contact
              </a>
            </li>
          </ul>
        </li>
        <li class="relative group faq-item" data-aos="fade-down" data-aos-delay="300" data-aos-duration="800">
          <p href="javascript:void(0)" class="faq-header font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
            dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors group">
            Pages
            <i
              class="fa-solid fa-angle-down text-paragraph dark:text-white ml-auto group-[.open]:rotate-180 duration-500 mt-1"></i>
          </p>
          <div
            class="absolute text-gray-900 dark:text-white w-full left-0 top-12 p-5  opacity-0 scale-y-0 origin-top duration-500 group-hover:scale-y-100 bg-white dark:bg-dark-200  group-hover:opacity-100 rounded-medium shadow-lg z-10 items-center faq-body close">
            <ul class="columns-2 gap-10 mb-15">
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="team.html" class="flex">
                  team
                </a>
              </li>
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="team-single.html" class="flex">
                  Team Details
                </a>
              </li>
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="testimonial.html" class="flex">
                  Testimonial
                </a>
              </li>
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="price.html" class="flex">
                  Price
                </a>
              </li>
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="career.html" class="flex">
                  Career
                </a>
              </li>
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="career-single.html" class="flex">
                  Career Single
                </a>
              </li>
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="faq.html" class="flex">
                  FAQ
                </a>
              </li>

              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="integration.html" class="flex">
                  Integration
                </a>
              </li>
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="login.html" class="flex">
                  Log In
                </a>
              </li>
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="signup.html" class="flex">
                  Sign Up
                </a>
              </li>
              <li
                class="relative overflow-hidden text-base capitalize text-paragraph py-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
                <a href="404.html" class="flex">
                  404
                </a>
              </li>
            </ul>
            <div class="max-w-full">
              <img src="images/navbar.png" alt="navbar" class="w-full dark:hidden rounded-2xl" />
              <img src="images/navbar-dark.png" alt="navbar" class="w-full hidden dark:block  rounded-2xl" />
            </div>
          </div>
        </li>
        <li class="relative group faq-item" data-aos="fade-down" data-aos-delay="400" data-aos-duration="800">
          <p href="javascript:void(0)"
            class="faq-header font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors group @@if(nav == 'blog'){active}">
            News
            <i
              class="fa-solid fa-angle-down text-paragraph dark:text-white ml-auto group-[.open]:rotate-180 duration-500 mt-1"></i>
          </p>
          <ul
            class="absolute w-full min-w-[250px] left-0 top-12  p-5   opacity-0 scale-y-0 origin-top duration-500 group-hover:scale-y-100 bg-white dark:bg-dark-200  group-hover:opacity-100 rounded-md [&>*:not(:last-child)]:border-b [&>*:not(:last-child)]:border-dashed [&>*:not(:last-child)]:border-borderColour dark:[&>*:not(:last-child)]:border-borderColour-dark [&>*:not(:first-child)]:mt-2.5 z-10 faq-body close">
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="blog.html" class="flex">
                Blog Grid
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="blog-list.html" class="flex">
                Blog List
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="categories.html" class="flex">
                Blog Categories
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="tags.html" class="flex">
                Blog Tags
              </a>
            </li>
            <li
              class="relative overflow-hidden text-base capitalize text-paragraph pb-2.5 before:absolute before:bottom-0 before:left-0 before:h-[2px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              <a href="blog-details.html" class="flex">
                Blog Details
              </a>
            </li>
          </ul>
        </li>
        <li data-aos="fade-down" data-aos-delay="500" data-aos-duration="800">
          <a href="contact.html"
            class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 
            dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors  @@if(nav == 'contact'){active}">
            Contact Us
          </a>
        </li>

        <li data-aos="fade-down" data-aos-delay="600" data-aos-duration="800">
          <a href="request-demo.html" class="btn btn-navbar btn-sm">
            Request Demo
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<script>
function scrollToTop(event) {
  event.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}
</script>