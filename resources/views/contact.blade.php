@extends('layout.app')

@section('title', 'Contact')

@section('content')
      <main class="main-content site-wrapper-reveal">

    <!--== Start Contact Area ==-->
    <div class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 m-auto text-center" data-aos="fade-up">
            <h2 class="title">Contact us for any further questions, projects & business partnerships</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-xl-10 m-auto">
            <div class="contact-info-content">
              <div class="info-item info-item2" data-aos="fade-up" data-aos-delay="300">
                <div class="info-title">
                  <h4>Contact Directly</h4>
                  <div class="icon">
                    <i class="icon_mail_alt"></i>
                  </div>
                </div>
                <div class="info-content">
                  <a href="mailto://info@graphics2print.com.ng">info@graphics2prints.com.ng</a>
                  <br>
                  <a href="tel:08023026735">08023026735</a><br/>
                  <a href="tel:08099202255">08099202255</a>
                </div>
              </div>
              <div class="info-item" data-aos="fade-up" data-aos-delay="600">
                <div class="info-title">
                  <h4>Visit our office</h4>
                  <div class="icon">
                    <i class="icon_pin_alt"></i>
                  </div>
                </div>
                <div class="info-content">
                  <p>51 Isaac John Street Fadeyi lagos, Lagos.</p>
                </div>
              </div>
              <div class="info-item" data-aos="fade-up" data-aos-delay="900">
                <div class="info-title">
                  <h4>Work with us</h4>
                  <div class="icon">
                    <i class="icon_briefcase"></i>
                  </div>
                </div>
                <div class="info-content">
                  <p>Send your CV to our email: <a href="mailto://career@graphics2prints.com.ng">career@graphics2prints.com.ng</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-xl-10 m-auto">            
            <div class="contacts-form contact-form">
              <div class="text-center" data-aos="fade-up">

                    @if(session('success'))
                      <div class="alert alert-success">
                      {{ session('success') }}
                      </div>
                    @endif

                  @if(session('error'))
                    <div class="alert alert-danger">
                    {{ session('error') }}
                    </div>
                  @endif

                <h2 class="title">Get In Touch</h2>
              </div>
              <form class="contact-form-wrapper" id="contact-form" action="{{route('contact.submit')}}" method="post">
              @csrf
                <div class="row">
                  <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="form-group">
                      <input class="form-control" type="text" name="name" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="form-group">
                      <input class="form-control" type="email" name="email" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-md-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="form-group">
                      <input class="form-control" type="text" name="subject" placeholder="Subject (optional)">
                    </div>
                  </div>
                  <div class="col-md-12" data-aos="fade-up">
                    <div class="form-group mb-0">
                      <textarea name="message" rows="5" placeholder="Your message here..."></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="form-group mb-0">
                      <button class="btn-submit" type="submit">Submit Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- Message Notification -->
            <div class="form-message"></div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Contact Area ==-->

    <!--== Start Map Area Wrapper ==-->
    <div class="contact-map-area" data-aos="fade-up">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4907144108383!2d3.3513633862709464!3d6.585759376410481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93c5c51470cd%3A0x7bd90c6d974257c2!2sGraphics2Prints!5e0!3m2!1sen!2sng!4v1709377104778!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!--== End Map Area Wrapper ==-->
  </main>
@endsection
