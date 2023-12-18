@extends('layouts/master')
@section('title')
    Meem Seen Studio
@endsection
@section('content')
<!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about" style="margin-top: -25px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">Welcome to <span class="mobile-block">my portfolio website!</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hey folks, I'm</span>
                                <div class="animated-info">
                                    <span class="animated-item">{{$user['name']}}</span>
                                    <span class="animated-item">Back-End Developer</span>
                                    <span class="animated-item">Data Analyst</span>
                                </div>
                        </h1>
                        <p>{{$user['bio']}}</p>
                        <div class="custom-btn-group mt-4">
                          <a href="{{ asset('import/assets/Resume.pdf') }}" class="btn mr-lg-2 custom-btn" download="Mohamed's_CV.pdf"><i class='uil uil-file-alt'></i> Download The Resume</a>
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Contact with me</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="{{ asset('import/assets/images/bobby-fischer.jpg') }}" class="img-fluid" alt="svg image">
                    </div>
                </div>
            </div>
        </div>
    </section>


{{--      Resume Section      --}}
    <section class="section" id="resume">
      <div class="container">
          <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
          <div class="row">
{{--      Skills Section      --}}
              <div class="col-lg-4">
                  <div class="card">
                     <div class="card-header" style="background: #eeeeee">
                          <div class="pull-left">
                              <h4 class="mt-2" style="color: #0b0b0b">Skills</h4>
                              <span class="line"></span>
                          </div>
                      </div>
                      <div class="card-body pb-2">
                          @foreach($skills as $skill)
                          <span style="font-size: 18px; font-style: normal; color: #0b0b0b">{{$skill['skill']}}</span>
                          <div class="progress mb-3">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: {{$skill['rate']}}%; opacity:{{$skill['rate']}}% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          @endforeach
                      </div>
                  </div>
              </div>
{{--      Expertise Section      --}}
              <div class="col-lg-4">
                  <div class="card" >
                      <div class="card-header" style="background: #eeeeee">
                              <div class="mt-2"><h4 class="mt-2" style="color: #0b0b0b">Expertise</h4>
                                  <span class="line"></span>
                              </div>
                      </div>
                          <div class="card-body pb-2">
                              @foreach($exps as $exp)
                                  <h6 class="title text-danger" style="font-style: normal">{{$exp['period']}}</h6>
                                  <span style="font-style: normal; color: #0b0b0b;font-size: 18px">{{$exp['title']}} @ {{$exp['company']}}</span>
                                  <!-- <P class="subtitle"></P> -->
                                  @if(!$loop->last)
                                    <hr>
                                  @endif
                              @endforeach
                          </div>
                  </div>
{{--      Education Section      --}}
                  <div class="card">
                      <div class="card-header" style="background: #eeeeee">
                          <div class="mt-2">
                              <h4 style="color: #0b0b0b">Education</h4>
                              <span class="line"></span>
                          </div>
                      </div>
                      @foreach($education as $edu)
                      <div class="card-body pb-2">
                          <h6 class="title text-danger">{{$edu['period']}}</h6>
                          <P>{{$edu['organization']}}</P>
                          <!-- <P class="subtitle"></P> -->
                      </div>
                      @endforeach
                  </div>
              </div>
{{--      Certifications Section      --}}
              <div class="col-lg-4 ">
                  <div class="card">
                      <div class="card-header" style="background: #eeeeee">
                              <div class="mt-2">
                                  <h4 style="color: #0b0b0b">Certifications</h4>
                                  <span class="line"></span>
                              </div>
                      </div>
                          <div class="card-body pb-2">
                              @foreach($certifications as $certification)
                                  <h6 class="title text-danger" style="font-size: 18px; font-style: normal"> <a target="_blank" href="{{$certification['link']}}">{{$certification['course']}}</a></h6>
                                  <P style="font-style: normal">From <a  target="_blank" href="{{$certification['link']}}" style="color: rgb(0, 149, 255); font-style: normal">{{$certification['company']}}</a></P>
                                  <!-- <P class="subtitle"></P> -->
                                  @if(!$loop->last)
                                      <hr>
                                  @endif
                              @endforeach
                          </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
<!--         Project Section         -->
    <section class="section bg-custom-gray" id="project" >
      <div class="container">
          <h1 class="mb-5"><span class="text-danger">My</span> Projects</h1>
          <div class="portfolio">
              <div class="filters">
                  <a href="#" data-filter=".new" class="active">All</a>
                  <a href="#" data-filter=".advertising">Analytics</a>
                  <a href="#" data-filter=".web">Web</a>
                  <a href="#" data-filter=".web">Other</a>
              </div>
                  <div class="portfolio-container">
                  @foreach($projects as $project)
                      <div class="col-md-6 col-lg-4 web new">
                          <div class="portfolio-item">
                              <img src="{{ asset('import/assets/images/branding-2.jpg') }}" class="img-fluid" alt="">
                              <div class="content-holder">
    {{--                              <a class="img-popup" href="{{ asset('import/assets/images/branding-2.jpg') }}"></a>--}}

                                  <div class="text-holder">
                                      <a href="/project/{{$project['id']}}" ><h6 class="title">{{$project['name']}}</h6></a>
                                      <p class="subtitle">{{$project['bio']}}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
        <br><br><br>
        <hr style="width: 50%">
    </section>
<!-- End of Project section -->
<!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55285.829931722146!2d31.17243166508601!3d29.99769222098761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145837fef7982ee7%3A0xf2f2a3778fac5385!2sGiza%20District%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1700782338394!5m2!1sen!2seg" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6903.458848861325!2d31.204932196145652!3d30.10193458148753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145841ca201b2ebb%3A0xad434cadaf022996!2sWarraq%20Al%20Arab%2C%20El%20Warraq%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1700782490870!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55285.829931722146!2d31.17243166508601!3d29.99769222098761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145837fef7982ee7%3A0xf2f2a3778fac5385!2sGiza%20District%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1700782535802!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Contact With Me</h3>
                  <p class="footer-text mb-0">{{$user['phone']}}</p>
                  <p><a href="mailto:{{$user['gmail']}}">{{$user['gmail']}}</a></p>
                </div>

                <ul class="social-links">

                     <li><a href="https://wa.me/+2{{$user['phone']}}" class="uil uil-phone" data-toggle="tooltip" data-placement="left" title="whatsapp"></a></li>
                </ul>
            </div>
          </div>

<!-- Messages section -->
          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Interested to work together? Let's talk</h2>
              <form action="{{'/add_message'}}" method="post">
                  @csrf
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" id="phone ">
                  </div>

                  <div class="col-lg-8 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send Message">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
@endsection
