<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Dream Pulse</title>
<!--
DREAM PULSE
https://templatemo.com/tm-536-dream-pulse
-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="{{asset('temp/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('temp/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('temp/slick/slick.css')}}"/>    
    <link rel="stylesheet" href="{{asset('temp/slick/slick-theme.css')}}"/>    
    <link rel="stylesheet" href="{{asset('temp/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('temp/css/templatemo-dream-pulse.css')}}" />
  </head>
  <body>
    <main class="container-fluid">
      <div class="row">        
          <nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
              <div class="tm-brand-box">
                <div class="tm-double-border-1">
                  <div class="tm-double-border-2">
                    <h1 class="tm-brand text-uppercase">Dream Pulse</h1>
                  </div>
                </div>
              </div>

              <ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
                <li class="nav-item">
                  <a href="#intro" class="nav-link active">
                    <span class="d-inline-block mr-3">Intro</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link">
                    <span class="d-inline-block mr-3">About</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#work" class="nav-link">
                    <span class="d-inline-block mr-3">Work</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#clients" class="nav-link">
                    <span class="d-inline-block mr-3">Clients</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#talk" class="nav-link">
                    <span class="d-inline-block mr-3">Let's Talk</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
              </ul>
              <ul class="nav flex-row tm-social-links">
                <li class="nav-item">
                  <a href="https://facebook.com" class="nav-link tm-social-link">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://twitter.com" class="nav-link tm-social-link">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://dribbble.com" class="nav-link tm-social-link">
                    <i class="fab fa-dribbble"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://linkedin.com" class="nav-link tm-social-link">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
              <footer class="text-center text-white small">
                <p class="mb--0 mb-2">Copyright 2020 Dream Pulse</p>
                <p class="mb-0">Design:
                  <a rel="nofollow" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
                </p>
              </footer>
            </div>
          </nav>
          
          <main role="main" class="ml-sm-auto col-12">
            <div
              class="parallax-window"
              data-parallax="scroll"
              data-image-src="{{asset('temp/img/dream-pulse-header.jpg')}}">
              <div class="tm-section-wrap">
                <section id="intro" class="tm-section">
                    <div class="tm-bg-white-transparent tm-intro">
                        <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary">Introducing Dream Pulse</h2>
                        <p class="tm-color-gray">
                          This box alpha 30 percent. Left sidebar is a sticky element.
                          Right side Contents are scrolling up and down. This background has a
                          parallax effect.
                        </p>
                        <p class="mb-0 tm-color-gray">
                          Dream Pulse is a Bootstrap 4.3.1 template designed for your websites. You can modify this layout as you like.
                        </p>
                    </div>              
                </section>
            </div>            
          </div>

          <div class="tm-section-wrap bg-white">
            <section id="about" class="row tm-section">
              
                @foreach ($posts as $post) 

                <div class="col-xl-6">
                <div class="tm-section-half">   
                    <div><i class="{{$post->icon}} mb-5 tm-section-icon"></i></div>                        
                    <h2 class="tm-section-title tm-color-primary mb-5">{{$post->title}}</h2>
                    <p class="mb-5">
                      {{$post->content}}
                    </p>
                </div>
              </div>
              
              @endforeach
              
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="work" class="row tm-section">
              <div class="col-12">
                <div class="w-100 tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                      <div class="tm-gallery-wrap">
                          <h2 class="tm-color-primary tm-section-title mb-4 ml-2">Our Work</h2>
                          <div class="tm-gallery">
                            <div class="tm-gallery-item">                        
                              <figure class="effect-bubba">
                                <img src="{{asset('temp/img/gallery/01.jpg')}}" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="{{asset('temp/img/gallery/large/01.jpg')}}">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="{{asset('temp/img/gallery/02.jpg')}}" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="{{asset('temp/img/gallery/large/02.jpg')}}">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="{{asset('temp/img/gallery/03.jpg')}}" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="{{asset('temp/img/gallery/large/03.jpg')}}">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="{{asset('temp/img/gallery/04.jpg')}}" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="{{asset('temp/img/gallery/large/04.jpg')}}">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="{{asset('temp/img/gallery/05.jpg')}}" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="{{asset('temp/img/gallery/large/05.jpg')}}">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="{{asset('temp/img/gallery/06.jpg')}}" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="{{asset('temp/img/gallery/large/06.jpg')}}">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="{{asset('temp/img/gallery/07.jpg')}}" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="{{asset('temp/img/gallery/large/07.jpg')}}">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="{{asset('temp/img/gallery/08.jpg')}}" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="{{asset('temp/img/gallery/large/08.jpg')}}">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                          </div>
                      </div>                        
                    </div>                  
                  </div>     
              </div>         
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="clients" class="row tm-section">
              <div class="col-12 tm-section-pad">
                  <div class="tm-flex-item-left">
                      <div class="tm-w-80">
                          <h2 class="tm-color-primary tm-section-title mb-4">Our Clients</h2>
                          <p class="mb-5">
                            Aenean est augue, iaculis ut arcu a, cursus tempus eros.
                            Maecenas ut efficitur lectus, vel commodo nibh. Vivamus
                            consequat massa non euismod facilisis. Morbi assumsan non libero
                            a vehicula. Donec blandit suscipit magna sit amet elementum.
                          </p>
                      </div>
                      
                      <div class="row tm-clients-images">
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://google.com">
                            <img src="{{asset('temp/img/client-1.png')}}" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://facebook.com">
                            <img src="{{asset('temp/img/client-2.png')}}" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://twitter.com">
                            <img src="{{asset('temp/img/client-3.png')}}" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://instagram.com">
                            <img src="{{asset('temp/img/client-4.png')}}" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://google.com">
                              <img src="{{asset('temp/img/client-5.png')}}" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://facebook.com">
                              <img src="{{asset('temp/img/client-6.png')}}" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://twitter.com">
                              <img src="{{asset('temp/img/client-7.png')}}" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://instagram.com">
                              <img src="{{asset('temp/img/client-8.png')}}" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                      </div>
                  </div> 
              </div>                             
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="talk" class="row tm-section">
                <div class="col-xl-6 mb-5">
                  <div class="tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <h2 class="tm-color-primary tm-section-title mb-4">Talk to Us</h2>
                        <p class="mb-4">
                          Sed aliquet, nibh ac hendrerit faucibus, tellus metus viverra
                          tellus, vel volutpat purus orci ac ex.
                        </p>
                        <p class="mb-3">
                          120-240 Orci varius natoque penatibus, <br>
                          parturient montes, 10660 <br>
                          nasvetur ridiculus mus
                        </p>
                    </div>                    
                  </div>                  
                </div>
                <div class="col-xl-6 mb-5">
                  <div class="tm-contact-form-wrap">
                    <form action="" method="POST" class="tm-contact-form">
                        <div class="form-group">
                          <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Name" required="" />
                        </div>
                        <div class="form-group">
                          <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Email" required="" />
                        </div>
                
                        <div class="form-group">
                          <textarea rows="4" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message..." required=""></textarea>
                        </div>
                
                        <div class="form-group mb-0">
                          <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary">
                            SEND
                          </button>
                        </div>
                      </form>
                  </div>                    
                </div>
              </section>
          </div>
        </main>        
      </div>
    </div>
    <script src="{{asset('temp/js/jquery.min.js')}}"></script>
    <script src="{{asset('temp/js/jquery.singlePageNav.min.js')}}"></script>
    <script src="{{asset('temp/js/parallax.min.js')}}"></script>
    <script src="{{asset('temp/slick/slick.min.js')}}"></script>
    <script src="{{asset('temp/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('temp/js/templatemo-scripts.js')}}"></script>
  </body>
</html>