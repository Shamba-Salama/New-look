<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Salama Farm</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="Assets/CSS/styles.css" />
    <!-- Boostrap CSS -->
    <!-- Stylesheet -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>

  <body class="bg-light">
    <!-- Header -->
    <nav
      class="navbar navbar-expand-lg bg-body-tertiary container-fluid position-fixed top-0"
    >
      <div class="container">
        <a
          class="navbar-brand d-flex align-items-center justify-content-center"
          href="#"
          style="font-size: large; font-weight: 800; font-size: 1.8rem"
        >
          <img
            src="Assets/Img/logo1.png"
            alt=""
            class="img-fluid"
            style="width: 70px; height: auto"
          />Salama Farm</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav me-auto ms-auto my-2 my-lg-0 gap-4 navbar-nav-scroll"
          >
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
          </ul>
          <a
            href="https://tawk.to/chat/67af5ebbfef5f7190eba3bc6/1ik2gk45a"
            class="btn text-white"
            style="background-color: #71c55d"
            >Get Started</a
          >
        </div>
      </div>
    </nav>

    <div
      class="container-fluid hero"
      style="
        background: rgb(255, 255, 255);
        background: linear-gradient(
          73deg,
          rgba(255, 255, 255, 1) 8%,
          rgba(29, 180, 44, 0.253) 87%
        );
      "
    >
      <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-2 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="Assets/Img/heroo.png"
              class="d-block mx-lg-auto img-fluid"
              alt="Bootstrap Themes"
              width="700"
              height="500"
              loading="lazy"
            />
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-2 mb-4">
              Revolutionizing Farming with AI
            </h1>
            <p class="lead">
              Protect your grain farms with Salama Farm intelligent deterrent
              system that effectively scares away pests using advanced AI
              technology.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt4">
              <a
                type="button"
                class="btn text-white btn-lg px-4 me-md-2"
                style="background-color: #71c55d"
                href="form.php"
                >View Demo</a
              >
              <button
                type="button"
                class="btn btn-outline-secondary btn-lg px-4"
              >
                Learn More
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Adaptive learning section -->
    <section class="section my-20">
      <div class="container">
        <div class="flex flex-col lg:flex-row items-center gap-x-20 gap-y-12">
          <!-- Emergency image -->
          <div>
            <img
              class="hidden lg:block"
              src="./Assets/Img/hero4.png"
              style="width: 550px; height: auto"
              alt="emergency-desktop"
            />
            <img
              class="lg:hidden"
              src="./assets/img/side1.png"
              style="width: 550px; height: auto"
              alt="emergency-mobile"
            />
          </div>
          <!-- Emergency Contents -->
          <div class="flex flex-col gap-y-4 text-start lg:text-start">
            <!-- Title -->
            <h4 class="text-sm font-bold" style="color: #71c55d">
              Effortless Farm Protection
            </h4>
            <!-- Subtitle -->
            <p
              class="text-slate-800 text-4xl leading-snug font-bold sm:max-w-screen-sm"
            >
              Protect Your Farm with Salama Farm
            </p>
            <!-- Description -->
            <p class="max-w-lg lg:max-w-md text-start lg:mx-0 font-medium">
              Salama Farma is an AI-powered smart scarecrow designed to
              effectively deter pests during critical harvesting times. Our
              intelligent system adapts to your farm’s needs, ensuring maximum
              crop protection with minimal effort. No matter your experience
              level, we’ll guide you every step of the way!
            </p>
            <!-- Button Call to Action -->
            <a
              class="h-12 w-44 text-white text-sm font-bold text-center leading-[3rem] mt-6 lg:mt-8 lg:mx-0 rounded-xl"
              href="#contact"
              style="background-color: #71c55d; text-decoration: none"
              >Join US</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="section py-16">
      <div class="container">
        <!-- p-8 md:px-20 md:py-16 lg:px-60 lg:py-20 -->
        <!-- Feature Container -->
        <div
          class="p-10 sm:p-12 md:px-16 md:py-[3.5rem] lg:px-32 lg:py-20 xl:py-24 xl:px-60 rounded-3xl"
          style="background-color: #e0fbe0"
        >
          <!-- Feature info -->
          <div
            class="flex flex-col gap-y-4 mb-12 sm:mb-14 md:mb-16 lg:mb-20 text-center lg:text-start"
          >
            <!-- Title -->
            <h4 class="text-sm text-primary font-bold" style="color: #71c55d">
              Features
            </h4>
            <!-- Subtitle -->
            <p class="text-slate-800 text-4xl leading-snug font-bold">
              Adaptive Farm Management Tailored Just for You!
            </p>
            <!-- Description -->
            <p class="text-[15px] font-medium text-slate-800/50">
              At Shamba Salama, our solutions are designed to meet your farm’s
              unique needs. Whether you require pest deterrent systems,
              monitoring, or expert consultation, we ensure your farm remains
              protected and productive.
            </p>
          </div>
          <!-- Features -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-14">
            <!-- Feature item -->
            <div
              class="flex items-center flex-col xs:flex-row sm:flex-col lg:flex-row gap-4"
            >
              <!-- Feature image -->
              <div class="w-16 h-16 shrink-0">
                <img
                  src="./assets/images/Safety-first.png"
                  alt="Safety-first"
                />
              </div>
              <!-- Feature Content -->
              <div
                class="text-center xs:text-start sm:text-center lg:text-start"
              >
                <!-- Feature item title -->
                <p class="text-slate-800 font-bold mb-1">
                  Smart Farm Assessment
                </p>
                <!-- Feature item Description -->
                <p class="text-sm font-medium text-slate-800/50">
                  Our team evaluates your farm’s specific needs to recommend the
                  most effective pest control strategies.
                </p>
              </div>
            </div>
            <!-- Feature item -->
            <div
              class="flex items-center flex-col xs:flex-row sm:flex-col lg:flex-row gap-4"
            >
              <!-- Feature image -->
              <div class="w-16 h-16 shrink-0">
                <img
                  src="./assets/images/Insurance-accepted.png"
                  alt="Insurance-accepted"
                />
              </div>
              <!-- Feature Content -->
              <div
                class="text-center xs:text-start sm:text-center lg:text-start"
              >
                <!-- Feature item title -->
                <p class="text-slate-800 font-bold mb-1">
                  Focus on What Matters
                </p>
                <!-- Feature item Description -->
                <p class="text-sm font-medium text-slate-800/50">
                  Save time and resources with our precise pest deterrent system
                  installation, protecting your crops from locusts and quelea
                  birds during critical harvest periods.
                </p>
              </div>
            </div>
            <!-- Feature item -->
            <div
              class="flex items-center flex-col xs:flex-row sm:flex-col lg:flex-row gap-4"
            >
              <!-- Feature image -->
              <div class="w-16 h-16 shrink-0">
                <img
                  src="./assets/images/Fullservice-dentistry.png"
                  alt="Fullservice-dentistry"
                />
              </div>
              <!-- Feature Content -->
              <div
                class="text-center xs:text-start sm:text-center lg:text-start"
              >
                <!-- Feature item title -->
                <p class="text-slate-800 font-bold mb-1">Seamless Protection</p>
                <!-- Feature item Description -->
                <p class="text-sm font-medium text-slate-800/50">
                  With continuous crop protection monitoring, our system adapts
                  to evolving threats, ensuring maximum efficiency.
                </p>
              </div>
            </div>
            <!-- Feature item -->
            <div
              class="flex items-center flex-col xs:flex-row sm:flex-col lg:flex-row gap-4"
            >
              <!-- Feature image -->
              <div class="w-16 h-16 shrink-0">
                <img
                  src="./assets/images/No-judgment-ever.png"
                  alt="No-judgment-ever"
                />
              </div>
              <!-- Feature Content -->
              <div
                class="text-center xs:text-start sm:text-center lg:text-start"
              >
                <!-- Feature item title -->
                <p class="text-slate-800 font-bold mb-1">Expert Guidance</p>
                <!-- Feature item Description -->
                <p class="text-sm font-medium text-slate-800/50">
                  We provide hands-on training and ongoing support, equipping
                  you with the knowledge to maintain and optimize your pest
                  deterrent systems.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">Features</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">Pricing</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">FAQs</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">About</a>
        </li>
      </ul>
      <p class="text-center text-muted">© 2025 All rights reserved</p>
    </footer>

    <!-- Boostrap Js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script src="dist/js/bootstrap.bundle.min.js"></script>

    <elevenlabs-convai agent-id="8gzWPJa00NCnFiktPOVP"></elevenlabs-convai>
    <script
      src="https://elevenlabs.io/convai-widget/index.js"
      async
      type="text/javascript"
    ></script>
  </body>
</html>
