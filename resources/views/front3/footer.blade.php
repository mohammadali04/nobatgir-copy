<footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>آسان رزرو</h3>
                  <p>ما به شما کمک میکنیم تا بهترین سرویس ها و خدمات اجتماعی را شناسایی کرده و برای آن ها نو بت رزرو کنید.</p>
                </div>

                <!-- <div class="footer-newsletter">
                  <h4>خبرنامه ما</h4>
                  <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                  </form>
                </div> -->

              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>لینک های مفید</h4>
                  <ul>
                    <li><a href="#">خانه</a></li>
                    <li><a href="#about">سرویس ها</a></li>
                    <li><a href="#services">سرویس ها</a></li>
                    <li><a href="#">شرایط استفاده از خدمات</a></li>
                    <li><a href="#">سیاست های محرمانه</a></li>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4>با ما در ارتباط باشید</h4>
                  <p>
                    اصفهان - رهنان -خ درخشان <br>
                    <br>
                  کوچه بهار<br>
                    <strong>تلفن:</strong> +98 913 082 99 27<br>
                    <strong>ایمیل:</strong> mohammadsalimi04@gmail.com<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>پیغام های خود را به ما ارسال کنید</h4>
              <p>هر گونه اتقاد یا پیشنهاد و یا شکایات دارید میتوانید آن ها را با ایمیل یا تلفن با ما در میان بگذارید.</p>

              <form action="{{Route('add.client.message')}}" method="post" role="form" class="">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="نام شما" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل شما" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="موضوع" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="متن پیام" required></textarea>
                </div>

               @include('layouts.messages')

                <button type="submit" title="" class="btn btn-primary">ارسال پیام</button>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; کپی رایت <strong>آسان رزرو </strong>تمامی حقوق محفوظ است
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
        طراحی شده توسط <a href="https://bootstrapmade.com/">محمد علی سلیمی</a>
      </div>
    </div>
  </footer>

       