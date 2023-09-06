<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagoscart - Online shopping mall | Subscription plans</title>
    <link rel="icon" type="image/x-icon" href="./assets/icons/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./stylesheets/main.css">
    <!-- tailwind compiled css -->
    <link rel="stylesheet" href="./stylesheets/tailwind.css">
    <!-- animate.style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="subscription-plans">
        <header class="my-4">
            <div class="wrapper">
                <a href="https://lagoscart.com/">
                    <div class="logo-wrapper mx-auto">
                        <img src="./assets/images/brand-logo.svg" alt="">
                    </div>
                </a>
            </div>
        </header>

        <main>
            <section class="hero mt-4">
                <div class="wrapper">
                    <h1 class="fs-hero-title fw-semi-bold animate__animated animate__fadeInUp">Elevate your <span class="text-primary">shopping experience</span> with our exclusive <span class="text-primary">Prime Subscription!</span> </h1>
                </div>
            </section>


            <section>
                <div class="wrapper">

                    <!-- <ul class="plan-options grid grid-cols-3 gap-4 mx-8"> -->
                    <ul class="plan-options">
                        <li class="plan card monthly animate__animated animate__fadeInUp animate__fast">
                            <div class="icon">
                                <img src="./assets/icons/icon-monthly.svg" alt="Monthly Plan">
                            </div>
                            <h2 class="fs-plan-card-title fw-regular">Monthly Plan</h2>
                            <p class="fs-plan-card-tagline fw-bold text-secondary my-4">&#x20A6;20,000</p>
                            <ul class="services">
                                <li>Unlock endless possibilities with unlimited deliveries</li>
                                <li>Complimentary health check-up at Mainland Clinics</li>
                            </ul>
                            <button class="w-full py-2 md:py-4 px-4 btn bg-primary text-white rounded-lg hover:shadow-md" data-bs-target="#monthlyPlanModal" aria-controls="monthlyPlanModal">Buy Plan</button>
                        </li>
                        <li class="plan card quarterly animate__animated animate__fadeInUp animate__slow">
                            <div class="icon">
                                <img src="./assets/icons/icon-quarterly.svg" alt="Quarterly Plan">
                            </div>
                            <h2 class="fs-plan-card-title fw-regular">Quarterly Plan</h2>
                            <p class="fs-plan-card-tagline fw-bold text-secondary my-4">&#x20A6;45,000</p>
                            <ul class="services">
                                <li>Unlock endless possibilities with unlimited deliveries</li>
                                <li>Complimentary health check-up at Mainland Clinics</li>
                                <li>Solar audit for your home or office by Mainland Solar</li>
                            </ul>
                            <button class="w-full py-2 md:py-4 px-4 btn bg-primary text-white rounded-lg hover:shadow-md" data-bs-target="#quarterlyPlanModal" aria-controls="yearlyPlanModal">Buy Plan</button>
                            <!-- <button class="py-2 px-4 bg-primary text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                Buy Plan
                            </button> -->
                        </li>
                        <li class="plan card yearly animate__animated animate__fadeInUp animate__slower">
                            <div class="icon">
                                <img src="./assets/icons/icon-yearly.svg" alt="Yearly Plan">
                            </div>
                            <h2 class="fs-plan-card-title fw-regular">Yearly Plan</h2>
                            <p class="fs-plan-card-tagline fw-bold text-secondary my-4">&#x20A6;120,000</p>
                            <ul class="services">
                                <li>Unlock endless possibilities with unlimited deliveries</li>
                                <li>Complimentary health check-up at Mainland Clinics</li>
                                <li>Solar audit for your home or office by Mainland Solar</li>
                                <li>3 hour use of a VanLagos cargo or passenger can (within Lagos only)</li>
                            </ul>
                            <button class="w-full py-2 md:py-4 px-4 btn bg-primary text-white rounded-lg hover:shadow-md" data-bs-target="#yearlyPlanModal" aria-controls="yearlyPlanModal">Buy Plan</button>
                        </li>
                    </ul>
                </div>
            </section>

            <section>
                <!-- Monthly Plan Modal Dialog -->
                <?php include_once("./components/monthly-plan-modal-dialog.php") ?>

                <!-- Quarterly Plan Modal Dialog -->
                <?php include_once("./components/quarterly-plan-modal-dialog.php") ?>

                <!-- Yearly Plan Modal Dialog -->
                <?php include_once("./components/yearly-plan-modal-dialog.php") ?>

                <!-- Overlay -->
                <div class="overlay"></div>
            </section>

            <aside class="px-4 sm:px-0">Don't miss out on these extraordinary benefits. Join Prime today and redefine your shopping journey!</aside>
            <div class="vertical-spacer"></div>
        </main>
    </div>


    <script src="./scripts/main.js"></script>
</body>

</html>