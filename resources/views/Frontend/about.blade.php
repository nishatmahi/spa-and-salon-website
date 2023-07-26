@extends('Frontend.Layouts.main')

@section('main-container')
      <main>
        <section id="profile" class="profile">
          <hgroup class="section-title">
            <h2 class="en">Profile</h2>
            <h4 class="name">Danial Mason</h4>
          </hgroup>
          <p>
            “Our relationship with our guests means everything to us.."<br />
            Daniel Mason-Jones got his start with an apprenticeship in Atlanta and was inspired immediately. It wasn’t long after he started traveling the world to further his education. He has trained closely with renowned stylist Luis Llonguerras in Barcelona, Jacques Dessange in Paris, Charles Worthington in London, Franco Curletto in Rome, and many other industry greats around the world.His vast knowledge and training has earned him a huge following from all over the country including celebrity clients and allowed him numerous opportunities to work on set with television and film stars.
          </p>
          
          <figure>
            <img src="{{url('frontend/Img/artist4.jpg')}}" alt="" />
          </figure>
        </section>
        <hgroup class="section-title">
          <h2 class="en">Gallery</h2>
        </hgroup>
        <!--  -->
        <div class="body-container">
            <div class="slider-container">
              
              <!-- <div class="slider__heading">
                <h1 class="slider__title">GALLERY</h1>
              </div> -->
          
              <div class="slider__cards">
                <div class="slider__card">
                  <article class="card advice-card" data-trigger-wrapper-click="">
                    <div class="card__media">
                      
                        <img src="{{url('frontend/Img/artist1.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
                      
                    </div>
                    
                  </article>
                </div>
                <div class="slider__card">
                  <article class="card advice-card" data-trigger-wrapper-click="">
                    <div class="card__media">
                      <a class="card__link" href="#">
                        <img src="{{url('frontend/Img/middle.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
                      </a>
                    </div>
                   
                  </article>
                </div>
                <div class="slider__card">
                  <article class="card advice-card" data-trigger-wrapper-click="">
                    <div class="card__media">
                      <a class="card__link" href="#">
                        <img src="{{url('frontend/Img/pic1.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
                      </a>
                    </div>
                    
                  </article>
                </div>
                <div class="slider__card">
                  <article class="card advice-card" data-trigger-wrapper-click="">
                    <div class="card__media">
                      <a class="card__link" href="#">
                        <img src="{{url('frontend/Img/pic2.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
                      </a>
                    </div>
                   
                  </article>
                </div>
                <div class="slider__card">
                  <article class="card advice-card" data-trigger-wrapper-click="">
                    <div class="card__media">
                      <a class="card__link" href="#">
                        <img src="{{url('frontend/Img/pic3.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
                      </a>
                    </div>
                    
                  </article>
                </div>
                <div class="slider__card">
                  <article class="card advice-card" data-trigger-wrapper-click="">
                    <div class="card__media">
                      <a class="card__link" href="#">
                        <img src="{{url('frontend/Img/pic4.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
                      </a>
                    </div>
                    
                  </article>
              </div>
              <div class="slider__card">
                <article class="card advice-card" data-trigger-wrapper-click="">
                  <div class="card__media">
                    <a class="card__link" href="#">
                      <img src="{{url('frontend/Img/spa.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
                    </a>
                  </div>
                  
                </article>
            </div>
            <div class="slider__card">
              <article class="card advice-card" data-trigger-wrapper-click="">
                <div class="card__media">
                  <a class="card__link" href="#">
                    <img src="{{url('frontend/Img/shu-umuria.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
                  </a>
                </div>
                
              </article>
          </div>

          <div class="slider__card">
            <article class="card advice-card" data-trigger-wrapper-click="">
              <div class="card__media">
                <a class="card__link" href="#">
                  <img src="{{url('frontend/Img/about2.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
                </a>
              </div>
              
            </article>
        </div>

        <div class="slider__card">
          <article class="card advice-card" data-trigger-wrapper-click="">
            <div class="card__media">
              <a class="card__link" href="#">
                <img src="{{url('frontend/Img/about3.jpg')}}" width="288" height="270px" alt="Cat placeholder image" loading="lazy">
              </a>
            </div>
            
          </article>
      </div>
          
              
            </div>
          </div>
        <!--  -->
        <section id="blog" class="blog">
          <hgroup class="section-title">
            <h4 class="en">More Ethusiasist</h4>
            
          </hgroup>
          <p class="description">
           Here meet some of our experts and estheticians。
          </p>
         
          <ul class="entry-list">
            <li class="entry">
              <img class="thumbnail" src="{{url('frontend/Img/artist5.jpg')}}" width="600" height="400" alt="" />
              <div class="entry-body">
                <h2></h2>
                Caroline
                <p>
                  Daniel has a huge passion for traveling all over the country for L’Oreal Professionnel coaching and mentoring other beauty professionals on how to be successful. He is on a mission to elevate the industry and change the misconception of how rewarding a career in the beauty industry can be when coupled with passion and hard work.。
                </p>
              </div>
            </li>
            <li class="entry">
              <img class="thumbnail" src="{{url('frontend/Img/artist3.jpg')}}" width="600" height="400" alt="" />
              <div class="entry-body">
                <h2>Khalidejih</h2>
                
                <p>
                  Daniel has a huge passion for traveling all over the country for L’Oreal Professionnel coaching and mentoring other beauty professionals on how to be successful. He is on a mission to elevate the industry and change the misconception of how rewarding a career in the beauty industry can be when coupled with passion and hard work.
                </p>
              </div>
            </li>
            <li class="entry">
              <img class="thumbnail" src="{{url('frontend/Img/artist1.jpg')}}" width="600" height="400" alt="" />
              <div class="entry-body">
                <h2>Zenideh</h2>
  
                <p>
                  Daniel has a huge passion for traveling all over the country for L’Oreal Professionnel coaching and mentoring other beauty professionals on how to be successful. He is on a mission to elevate the industry and change the misconception of how rewarding a career in the beauty industry can be when coupled with passion and hard work.。
                </p>
              </div>
            </li>
          </ul>
        </section>
      </main>      
@endsection