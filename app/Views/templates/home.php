<?= $this->extend('templates/base') ?>
<?= $this->section('content') ?>
    
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4">We are a web Development Company</h1>
                    <h5 class="text-uppercase text-primary mb-3">That Cares for Your Success</h5>
                    <p class="mb-4">Your company’s growth matters to us, as we are not here to just build you a website, but we are here to build a strong brand and online presence for your business. We take care of all your technology needs by providing you with a range of web application development services..</p>
                    <a href="" class="btn btn-primary text-uppercase py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Creative Services</h1>
            <div class="row">
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">Web <span class="d-block text-body">Design</span></h4>
                        <p class="m-0">Start-off your new venture with a great online presence.</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">Web <span class="d-block text-body">Development</span></h4>
                        <p class="m-0">Web For Growing Business with world class design patterns</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-envelope-open-text text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">Digital <span class="d-block text-body">Marketing</span></h4>
                        <p class="m-0">Top of the class digital marketing solutions</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">Content <span class="d-block text-body">Writing</span></h4>
                        <p class="m-0">Engaging content for passionate readers to hook up to your business</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Visit Our Projects</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star text-primary mr-2"></i>All
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".first">
                            <i class="fa fa-laptop-code text-primary mr-2"></i>Design
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".second">
                            <i class="fa fa-mobile-alt text-primary mr-2"></i>Development
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Meet Our Team</h1>
            <div class="owl-carousel team-carousel position-relative" style="padding-left: 30px;">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">John Doe</h4>
                        <p class="m-0">CEO, Founder</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">Kate Wilson</h4>
                        <p class="m-0">Designer</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">John Brown</h4>
                        <p class="m-0">Developer</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">Paul Watson</h4>
                        <p class="m-0">Marketer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/testimonial-1.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/testimonial-2.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/testimonial-3.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/testimonial-4.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 px-0">
        <div class="row mt-5 mx-0">
            <div class="col-12 px-0" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=bidar&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form bg-white rounded p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="text" class="form-control bg-light border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="email" class="form-control bg-light border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-light border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary text-uppercase py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<?= $this->endSection() ?>