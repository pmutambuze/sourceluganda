<!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Journal Editorial Members</h2>
          <p data-aos="fade-up">
            Alone we can do so little; together we can do so much
          </p>
        </div>

        <div class="row">
          @foreach($members as $member)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$member->name}}</h4>
                <span>{{$member->title}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->
