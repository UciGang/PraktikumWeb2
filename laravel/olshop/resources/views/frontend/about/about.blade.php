@extends('frontend.layout.app')
@section('isi')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>About</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ url('frontend/dashboard') }}">Home</a></li>
            <li>About</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
            Hii my name is Muhammad Rifky Syahputra im student at STT Nurul Fikri i was making this website just for "fun"
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Voluptatem et qui exercitationem</h5>
                  <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Team</span>
          <h2>Our Team</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->
  </main><!-- End #main -->

@endsection