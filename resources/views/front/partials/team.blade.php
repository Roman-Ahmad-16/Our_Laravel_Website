            <!-- team-area -->
            <section class="team-area-two">
                <div class="team-shape">
                    <img src="assets/img/team/team_shape.png" alt="" data-aos="fade-right" data-aos-delay="200">
                </div>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title-two mb-45 tg-heading-subheading animation-style3">
                                <span class="sub-title">Expert People</span>
                                <h2 class="title tg-element-title">Our Dedicated Team <br> Members</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="section-top-content mb-30">
                                <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                            </div>
                        </div>
                    </div>

<div class="row justify-content-center">
    @foreach($teams as $team)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
            <div class="team-item-two">
                <div class="team-thumb-two">
                    <a href="#">
                        <img src="{{ asset('uploads/teams/' . $team->image) }}" alt="{{ $team->name }}">
                    </a>
                </div>
                <div class="team-content-two">
                    <h2 class="title"><a href="#">{{ $team->name }}</a></h2>
                    <span>{{ $team->designation }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
            </div>
                </div>
            </section>
            <!-- team-area-end -->