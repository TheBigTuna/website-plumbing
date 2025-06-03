
<?php include('navbar.php'); ?>
<link href="style/index.css" rel="stylesheet">

<div id="homeContainer">
    <div id="videoBG" class="d-none d-xl-block">
        <!-- <video preload autoplay loop muted class="wrapper__video"><source src="video/concrete-video.mp4"></video> -->
        <img src="images/plumbing-2.jpg" style="object-fit: cover;" width="100%;"/>
        <div id="headWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="mt-5">
                            <h1 id="headText"><?= $_SESSION['website_name']; ?></h1>
                            <h2 id="subText">Emergency Plumbing Services When You Need Them The Most</h2>
                        </div>
                    </div>
                    <div class="col-4 d-none d-xl-block">
                       <?php include('resources/contact.php'); ?>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    
    <section class="mobile-contact d-xl-none mt-5">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <?php include('resources/contact-mobile.php'); ?>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-0 col-xl-1"></div>
        <div class="col-12 col-xl-10">
            <section class="siteInfo py-5">
                <div class="container">
                    <h1 class="font-weight-bold text-center">Welcome to <?= $_SESSION['website_name']; ?></h1>
                    <h3 class="mt-4 text-center">Looking for Affordable and reliable Plumbing contractors? You’ve come to the right place!</h3>
                    <p class="pageText">
                        Looking for experienced plumbers in Detroit? As a leading local provider of plumbing, drain cleaning, and sewer services in Detroit, we’re recognized for our expertise, reliability, and professional service on both residential and commercial plumbing jobs.
                    </p>
                    <p class="pageText">
                        If you’re looking for a reliable and experienced plumber in Detroit, you’ve come to the right place. 
                        We are proud to be one of the leading providers of residential and commercial plumbing services in the Detroit area, known for our fast response times, expert workmanship, and commitment to customer satisfaction. 
                        Whether you’re dealing with a clogged drain, a leaking pipe, or a major sewer line issue, our licensed plumbers have the tools, training, and experience to handle it all.
                    </p>
                    <p class="pageText">
                        Our plumbing services cover everything from routine maintenance to complex repairs. 
                        We specialize in drain cleaning, sewer line repair, water heater installation (both tank and tankless), sump pump services, leak detection, and complete bathroom and kitchen plumbing solutions. 
                        Our fully stocked service vans allow us to diagnose and resolve most plumbing problems in a single visit, minimizing disruption to your home or business.
                        Every member of our team is fully licensed, insured, and trained to work efficiently and professionally, ensuring your plumbing system is restored quickly and correctly.
                    </p>
                    <p class="pageText">
                        Plumbing emergencies can happen at any time, which is why we offer 24/7 emergency plumbing services throughout Detroit. 
                        Whether you’re facing a burst pipe in the middle of the night, an overflowing toilet on the weekend, or a sewage backup during a holiday, our emergency plumbers are always ready to respond. 
                        We know how stressful unexpected plumbing issues can be, so we work quickly to assess the situation, explain your options, and deliver a long-lasting solution.
                    </p>
                    <p class="pageText">
                        We also understand that plumbing repairs can come at inconvenient times financially, which is why we offer flexible financing options to fit any budget. 
                        Our goal is to make high-quality plumbing services accessible to every homeowner and business owner in Detroit without compromising on quality or safety.
                    </p>
                    <p class="pageText">
                        With years of proven experience, a strong reputation in the local community, and a dedication to honest service, we’ve become a trusted name for plumbing in Metro Detroit. 
                        When you choose us, you can expect transparent pricing, no hidden fees, and a 100% satisfaction guarantee on all work performed. 
                        <br>
                        Contact us today to schedule service or speak with a local Detroit plumber, we're here to help <b>24 hours a day, 7 days a week.</b>
                    </p>
                </div>
            </section>
            <section class="siteInfo2 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card mt-5 mb-lg-0">
                                <div class="card-body">
                                    <img src="images/concrete-img-4.jpg" width="100%;"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <ul class="mt-5" style="list-style-type: none;">
                                <li><h5>Drain Cleaning</h5></li>
                                <li><h5>Pipe Repair & Replacement</h5></li>
                                <li><h5>Kitchen & Bathroom Remodeling</h5></li>
                                <li><h5>Backflow Services</h5></li>
                                <li><h5>Commercial Plumbing Services</h5></li>
                                <li><h5>Re-piping</h5></li>
                                <li><h5>New Construction Plumbing Installation</h5></li>
                                <li><h5>Sewer Repair</h5></li>
                                <li><h5>Leak Detection</h5></li>
                                <li><h5>Tankless Water Heater</h5></li>
                                <li><h5>Water Heaters</h5></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="siteInfo2 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                        <h3 class="font-weight-bold text-center"><?= $_SESSION['website_name']; ?> Your Reliable Plumbing & Construction Specialists</h3>
                            <p class="pageText">
                                We offer comprehensive plumbing services designed to meet the needs of both residential and commercial clients in Detroit and the surrounding areas. 
                                Our expert plumbers are skilled in a wide range of solutions, starting with thorough drain cleaning to eliminate blockages and restore proper flow. 
                                We also specialize in accurate leak detection using advanced technology to locate hidden leaks before they cause serious damage. 
                            </p>
                            <p class="pageText">
                                Whether you need traditional or tankless water heater services, we provide installation, repair, and maintenance to keep your hot water flowing efficiently year-round.
                                For damaged or aging plumbing systems, we offer expert pipe repair and replacement, as well as full re-piping services for older properties or homes with persistent plumbing issues. If you’re planning a home renovation, our team can assist with kitchen and bathroom remodeling, ensuring all plumbing installations are done right and up to code.
                                We also provide professional sewer repair services, from trenchless repairs to full replacements, ensuring your sewer system functions reliably.
                            <p class="pageText">
                            </p>
                                Our certified plumbers are equipped to handle backflow prevention and testing, keeping your water supply clean and compliant with safety standards.
                                In addition to residential services, we offer a full suite of commercial plumbing solutions, tailored for businesses, retail spaces, restaurants, and industrial properties. 
                                For builders and contractors, we specialize in new construction plumbing installation, working from the ground up to design and install systems that are efficient, code-compliant, and built to last.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card mt-5 mb-lg-0">
                                <div class="card-body">
                                    <img src="images/concrete-img-10.jpg" width="100%;"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pricing py-5">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">Always transparent</h5>
                                <hr>
                                <p>
                                    We provide upfront pricing, so you know what you will pay.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">Locally Owned Business</h5>
                                <hr>
                                <p>
                                    We're locally owned and stay very involved in our community.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">Always Available</h5>
                                <hr>
                                <p>
                                    We offer emergency appointments and are available 24/7.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="siteInfo2 py-5">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="text-center">
                                <h3 class="font-weight-bold">Pricing & Financing Options</h3>
                                <p class="pageText">
                                    We take pride in offering upfront, transparent pricing so our customers can make informed decisions before any work starts. 
                                    When one of our licensed technicians arrive, they will provide a clear, <b>NO OBLIGATION</b> quote for the necessary repair or diagnostic service. 
                                    If you choose not to proceed with the service, you'll only be responsible for a small service fee. 
                                    However, if you approve the work, that fee is completely waived. It’s a simple, honest approach no surprises, no hidden charges. 
                                    We believe in keeping our customers informed every step of the way, starting with a fair and straightforward price for the proposed plumbing repair or service.  
                                </p>
                            </div>
                        </div>
                    </div>
                    <section class="pricing py-5">
                        <div class="row">
                            <div class="col-12 col-xl-3">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <img src="images/concrete-img-8.jpg" width="100%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <img src="images/concrete-img-9.jpg" width="100%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <img src="images/concrete-img-10.jpg" width="100%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <img src="images/concrete-img-4.jpg" width="100%;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
        <div class="col-0 col-xl-1"></div>
    </div>
</div>

<?php // include('resources/footer.php'); ?>
