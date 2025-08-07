<!-- testimonial-area -->
<section class="testimonial-area-two testimonial-bg-two" data-background="assets/img/bg/h2_testimonial_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title-two white-title text-center mb-50 tg-heading-subheading animation-style3">
                    <span class="sub-title">Our Testimonials</span>
                    <h2 class="title tg-element-title">What Customers Say’s About Our Services</h2>
                </div>
            </div>
        </div>

        <div class="testimonial-item-wrap-two">
            <div class="row testimonial-active-two">
                @foreach($testimonials as $testimonial)
                    <div class="col-lg-6">
                        <div class="testimonial-item-two">
                            <div class="testimonial-content-two">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“ {{ $testimonial->feedback }}</p>
                                <div class="testimonial-avatar">
                                    <div class="avatar-thumb">
                                        <img src="{{ asset('assets/front/img/icons/quote03.svg') }}" alt="">
                                    </div>
                                    <div class="avatar-thumb">
                                        <img src="{{ asset($testimonial->image) }}" alt="">
                                    </div>
                                    <div class="avatar-info">
                                        <h2 class="title">{{ $testimonial->name }}</h2>
                                        <span>{{ $testimonial->designation }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- .row end -->

            <div class="testimonial-nav-two"></div>
            <div class="testimonial-shape-two">
                <img src="{{ asset('assets/front/img/images/h6_testimonial_shape01.png') }}" alt="img">
                <img src="{{ asset('assets/front/img/images/h6_testimonial_shape02.png') }}" alt="img" data-parallax='{"x": -100}'>
            </div>
        </div> <!-- .testimonial-item-wrap-two end -->
    </div>
</section>
<!-- testimonial-area-end -->
