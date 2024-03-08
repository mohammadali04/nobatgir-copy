@extends('front.index')
@section('content')
<section id="about" class="about">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
              <img src="/assets/img/about-img.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-md-6">
            <div class="about-content aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
              <h2>{{$about->title}}</h2>
              <h3>{{$about->sub_title}}.</h3>
              <p>{{$about->description}}</p>
              <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>
              <ul>
                @foreach($options as $option)
                <li><i class="bi bi-check-circle"></i> {{$option->option}}.</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>

<section id="services" class="services section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row g-5">
          @foreach($services as $service)
          <div class="col-md-6 col-lg-4 wow bounceInUp aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">{{$service->worker}}</a></h4>
              <p class="description">{{$service->detail}}</p>
            </div>
          </div>
          @endforeach
          
      </div>

      </div>
    </section>
    <section id="clients" class="clients">
      <div class="container aos-init aos-animate" data-aos="zoom-in">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="clients-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
          <div class="swiper-wrapper align-items-center" id="swiper-wrapper-318e2d8ea241047e2" aria-live="off" style="transform: translate3d(-1652px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 116px; margin-right: 120px;"><img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 116px; margin-right: 120px;"><img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 116px; margin-right: 120px;"><img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 116px; margin-right: 120px;"><img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 116px; margin-right: 120px;"><img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 116px; margin-right: 120px;"><img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 116px; margin-right: 120px;"><img src="{{asset('assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 116px; margin-right: 120px;"><img src="{{asset('assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 116px; margin-right: 120px;"><img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 116px; margin-right: 120px;"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div></div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

      </div>
    </section>
    <section id="why-us" class="why-us">
      <div class="container-fluid aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row">

          <div class="col-lg-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <div class="why-us-img">
              <img src="/assets/img/why-us.jpg" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
              <p>
                Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                et temporibus. Labore est odio.

                Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
              </p>

              <div class="features clearfix aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-bookmarks" style="color: #f058dc;"></i>
                <h4>Corporis dolorem</h4>
                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
              </div>

              <div class="features clearfix aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-box-seam" style="color: #ffb774;"></i>
                <h4>Eum ut aspernatur</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
              </div>

              <div class="features clearfix aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-card-checklist" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row counters aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" class="purecounter">۲۳۲</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="0" class="purecounter">۴۲۱</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="0" class="purecounter">۱٬۴۵۳</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="0" class="purecounter">۴۸</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>
    @endsection