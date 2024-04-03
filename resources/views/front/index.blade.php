@include('front.inc.header') 

    <div class="ob_lay"></div>
    <!----- header ----->
    <!----- banner ----->
    <section class="banner" id="about">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
            <div class="Crypto">
              <div class="up-cdd drop-in-2">
                <h1>{{ $banner->heading }}</h1>
                <img src="{{ url('public/front')}}/images/full.png" class="img-fluid" alt="" />
              </div>
              <div class="of-s">
                <div class="mixs-x drop-in-2">
                  <img src="{{ url('/storage/app/')}}/{{$about->firstImage}}" class="img-fluid" />
                </div>
                <div class="texcp animate-reveal animate-second">
                  <h2>{{ $banner->subheading }} </h2>
                  <p>
                    {{ $banner->description }} 
                  </p>
                  <a href="{{$about->btnLink}}" class="animate-reveal animate-second qzxsss"
                    ><strong>{{$about->btnText}}</strong>
                    <img src="{{ url('public/front')}}/images/wwxxx.png" class="img-fluid" alt="" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mx-j animate-reveal animate-second">
        <img src="{{ url('/storage/app')}}/{{$banner->image}}" class="img-fluid" alt="" />
      </div>
    </section>
    <!----- banner ----->

    <!----- about ----->
    <section class="about" id="WHY">
      <div class="container-fluid">
        <div class="row">
          <div
            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6"
          ></div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div
              class="withinsd"
              data-aos="fade-left"
              data-aos-easing="ease-in-sine"
            >
              <h2>
                {{-- {{ $about->firstDescription }} --}}
                {!! $about->firstDescription !!}
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div
            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 friessas"
          >
            <div
              class="withinsd qzzz"
              data-aos="fade-left"
              data-aos-easing="ease-in-sine"
            >
            {!! $about->secondDescription !!}
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="b_xMx">
              <img
                src="{{ url('/storage/app')}}/{{$about->secondImage}}"
                class="img-fluid"
                data-aos="fade-right"
                data-aos-easing="ease-in-sine"
              />
              <div
                class="nx-px"
                data-aos="fade-right"
                data-aos-easing="ease-in-sine"
              >
                <img src="{{ url('/storage/app')}}/{{$about->thirdImage}}" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="scrollc text3">
        @foreach ($slider as $item) 
        <div><span>{{ $item->firstText }}</span> {{ $item->secondText }}</div>
        @endforeach
{{--         
        <div><span>Hear From Our Chef Founder,</span> Stephane Lemagnen</div>
        <div><span>Hear From Our Chef Founder,</span> Stephane Lemagnen</div> --}}
      </div>
    </section>

    <!----- about ----->

    <!----- Services Offered ----->
    <section class="Services" id="services">
      <div class="container-fluid qza">
        <div
          class="row align-items-center"
          data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500"
        >
          <div class="col-12 col-sm-12 col-md-12">
            <div class="u_xs">
              <img src="{{ url('/storage/app')}}/{{ $serviceoffered->firstImage }}" class="img-fluid asxxz" alt="" />
              <a href="{{ $serviceoffered->videoLink }}"
                ><img src="{{ url('public/front')}}/images/ced.png" class="img-fluid wsss" alt=""
              /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div
          class="row align-items-center"
          data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500"
        >
          <div class="col-12 col-sm-12 col-md-6">
            <h3>
             {!! $serviceoffered->heading !!}
             {{-- Today, <span>Punjabi Chaap Corner</span> attracts customers from
             all five boroughs and beyond. --}}
            </h3>
            <p>
              {!! $serviceoffered->description !!}
            </p>
            
            <a href="#contact-us" class="INQUIRE-s"
              >INQUIRE TODAY
              <img src="{{ url('public/front')}}/images/ewx.png" class="img-fluid wsss" alt=""
            /></a>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="nPsxs">
              <img src="{{ url('/storage/app')}}/{{ $serviceoffered->secondImage }}" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----- Services Offered ----->



    <!----- Let’s Contact Us ----->
    <section class="Let" id="inquire">
      <div class="container-fluid dsd">
        <div
          class="row align-items-end"
          data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1000"
        >
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="ux">
              <a href="{{ $sectionfive->firstVideoLink }}">
                <img src="{{ url('/storage/app')}}/{{ $sectionfive->secondImage }}" class="img-fluid qqqxxx" alt="" />
                <img src="{{ url('public/front')}}/images/Subtract.svg" class="img-fluid qzx" alt="" />
              </a>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="let-contact">
              <h5>
                {!! $sectionfive->heading  !!}
                {{-- Beyond “Chicken ‘n Fries”: <span>Building a vibe</span> that’s
                truly customer-inspired --}}
              </h5>
              <p>
                {{ $sectionfive->firstDescription }}
                {{-- Our chicken and fries are the best in the biz, but we want our
                restaurant to stand for something more than just, well…chicken
                and fries. --}}
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid xcxc">
        <div
          class="row"
          data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1000"
        >
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="let-contact">
              <p>
                {{ $sectionfive->secondDescription }}
              </p>
              <a href="#contact-us" class="INQUIRE-s xdsss"
                >INQUIRE TODAY
                <img src="{{ url('public/front')}}/images/sadsa.svg" class="img-fluid wsss" alt=""
              /></a>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="ux">
              <a href="{{ $sectionfive->secondVideoLink }}">
                <img src="{{ url('/storage/app')}}/{{ $sectionfive->secondImage }}" class="img-fluid qqqxxx" alt="" />
                <img src="{{ url('public/front')}}/images/Subtract.svg" class="img-fluid qzx" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----- Let’s Contact Us ----->

    <!----- OUR VISION/MISSION ----->
   <!-- <section class="Organization" id="Expertise">
      <div class="container-fluid">
        <div class="row align-items-center ces-d">
          <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 col-xxl-5">
            <div class="b_xMx dsdasa">
              <img
                src="{{ url('public/front')}}/images/ssw.png"
                class="img-fluid"
                data-aos="fade-right"
                data-aos-easing="ease-in-sine"
              />
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 col-xxl-7">
            <div class="cybersecurity">
              <div class="owl-carousel owl-theme">
                <div class="item">
                  <img src="{{ url('public/front')}}/images/ddd.jpg" class="img-fluid" alt="" />
                </div>
                <div class="item">
                  <img src="{{ url('public/front')}}/images/ddd2.jpg" class="img-fluid" alt="" />
                </div>
                <div class="item">
                  <img src="{{ url('public/front')}}/images/ddd3.jpg" class="img-fluid" alt="" />
                </div>
              </div>
              <div
                class="withinsd yourss"
                data-aos="fade-left"
                data-aos-easing="ease-in-sine"
              >
                <h4>Drag</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --!>
    <!----- OUR VISION/MISSION ----->
    <!----- if you want the bird, just say the word ----->
    <section class="Services if-you-want" id="revenue">
      <div class="container-fluid">
        <div
          class="row"
          data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500"
        >
          <div class="col-12 col-sm-12 col-md-6">
            <div class="nPsd">
              <h5>{{ $sectionsix->heading }}</h5>
              <img src="{{ url('/storage/app')}}/{{ $sectionsix->image }}" class="img-fluid adsa" alt="" />
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="xeveryone">
              <h3>
                {!! $sectionsix->firstHeading !!}
{{--  Products that are <span>revolutionary as cluck</span> (and easy
                to make!) --}}
              </h3>
              {!! $sectionsix->firstDescription !!}
            </div>
            <div class="xeveryone">
              <h3>
                {!! $sectionsix->secondHeading !!}
                {{-- <span>Tried-and-true operations</span>, fine-tuned for a
                flexible footprint --}}
              </h3>
              {!! $sectionsix->secondDescription !!}
               
            </div>
            <div class="xeveryone">
              <h3>
                {!! $sectionsix->thirdHeading !!}
                {{-- <span>A well-managed brand</span>, supported by an ever-growing
                flock of followers --}}
              </h3>

              {!! $sectionsix->thirdDescription !!}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----- if you want the bird, just say the word ----->

    <!----- Initial Investment ----->
    <section class="Initial-Investment" id="initial">
      <div class="container-fluid qza">
        <div class="row align-items-center">
          <div class="col-12 col-sm-12 col-md-12">
            <div class="cceexx" style="background: url('{{url('/storage/app/')}}/{{$initialInvestment->image}}')">
              <div class="row">
                <div
                  class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-self-end"
                >
                  <div
                    class="nkux"
                    data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1000"
                  >
                    <h4>{!! $initialInvestment->heading !!}</h4>
                    <a href="#contact-us" class="INQUIRE-s"
                      >INQUIRE TODAY
                      <img src="{{ url('public/front')}}/images/ewx.png" class="img-fluid wsss" alt=""
                    /></a>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <div
                    data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500"
                  >
                    <div class="m-Initial">
                      <h5>{{ $initialInvestment->priceOne }}</h5>
                      <p>{{ $initialInvestment->descriptionOne }}</p>
                    </div>
                    <div class="m-Initial">
                      <h5>{{ $initialInvestment->priceTwo }}</h5>
                      <p>{{ $initialInvestment->descriptionTwo }}</p>
                    </div>
                    <div class="m-Initial">
                      <h5>{{ $initialInvestment->priceThree }}</h5>
                      <p>{{ $initialInvestment->descriptionThree }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----- Initial Investment ----->

    <!----- Auditing ----->
    <section class="contact-us" id="contact-us">
      <div class="container-fluid">
        <div
          class="row"
          data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1000"
        >
          <div class="col-12 col-sm-12 col-md-6">
            <div class="main-form">
              <form method="post" action="{{ url('contact') }}">  @csrf

                <small style="font-size: 70%; color: #ff0505; text-transform: capitalize;"> @error('name') {{$message}} @enderror </small>
                <input type="text" name="name" placeholder="First Name"  value="{{ old('name') }}"  />

                <small style="font-size: 70%; color: #ff0505; text-transform: capitalize;"> @error('phone') {{$message}} @enderror </small>
                <input type="text" name="phone" placeholder="Phone No."  value="{{ old('phone') }}"  />

                <small style="font-size: 70%; color: #ff0505; text-transform: capitalize;"> @error('email') {{$message}} @enderror </small>
                <input type="text" name="email" placeholder="Email Address"  value="{{ old('email') }}" />

                <textarea name="interestedinchicken"
                  placeholder="Why are you interested in owning a Punjabi Chaap Corner? "
                ></textarea>
                <textarea name="qualifiedtofranchisee"
                  placeholder="What makes you qualified to be a franchisee? "
                ></textarea>
                <textarea name="areaofinterest"
                  placeholder="What area(s) are you interested in? "
                ></textarea>
              
                  <select name="selectboxone">
                    @foreach ($selectboxsone as $item)
                    <option value="{{$item->id}}">{{ $item->heading }}</option> 
                    @endforeach
                  </select>

            
                <select name="selectboxtwo">
                  @foreach ($selectboxstwo as $item)
                    <option value="{{$item->id}}">
                      {{ $item->heading }}
                    </option>  
                  @endforeach
                </select>

 
              <select name="selectboxthree">
                @foreach ($selectboxsthree as $item)
                <option value="{{$item->id}}">{{ $item->heading }}</option>  
            @endforeach
              </select>
              

              
              
                <button class="INQUIRE-s" type="submit">
                  SUBMIT <i class="bi bi-arrow-right"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="main-form pcsb">
              <form>
                <h5>
                 {{ $contactuscontent->heading }}
                  <span
                    ><img src="{{ url('public/front')}}/images/sd20.png" class="img-fluid" alt=""
                  /></span>
                </h5>
                {!!$contactuscontent->description !!}
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----- Auditing ----->

    <!----- Faq ----->
    <section class="journey get Asked" id="Faq">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div
            class="col-12 col-sm-12 col-md-6 col-lg-6 align-self-end editorsa"
          >
            <img
              src="{{url('/storage/app/')}}/{{$faqfeatured->image}}"
              class="img-fluid"
              data-aos="fade-up"
              data-aos-easing="linear"
              data-aos-duration="1000"
            />
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <h6>{{ $faqfeatured->heading  }}</h6>
            <div class="accordion" id="accordionExample">

              @foreach ($faqs as $key =>  $item)
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne{{$key}}">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne{{ $key }}"
                    aria-expanded="true"
                    aria-controls="collapseOne{{ $key }}"
                  >
                    <span class="readables"
                      >{{ $item->question }}</span
                    >
                  </button>
                </h2>
                <div
                  id="collapseOne{{ $key }}"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingOne{{$key}}"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      {{$item->answer }}
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
               
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----- Faq ----->

    @include('front.inc.footer')
    