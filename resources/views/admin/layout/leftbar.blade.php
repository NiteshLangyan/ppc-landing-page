<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo "> <a href="{{ url('adm/dashboard') }}" class="app-brand-link"> <span
                class="app-brand-logo demo">
                
              <a href="{{ url('adm/dashboard') }}"><img src="https://coderzbar.info/dev/punjabi-chap-dev/storage/app/public/admin/1357553694image.png" class="img-fluid" alt="logo"></a>
            
            </span> <span class="app-brand-text demo menu-text fw-bolder ms-2"
                style="text-transform: uppercase;">PCC </span> </a>
        <!--<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto"> <i class="bx bx-chevron-left bx-sm align-middle"> </i> </a>-->
    </div>
    <div class="menu-inner-shadow"> </div>
    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase"> <span class="menu-header-text"> Main </span> </li>
        <li
            class="menu-item @if (url()->current() == url('adm/dashboard')) active @endif @if (url()->current() == url('adm/dashboard')) active @endif ">
            <a href="{{ url('adm/dashboard') }}" class="menu-link"> <i class="menu-icon tf-icons bx bxs-dashboard"> </i>
                <div data-i18n="Authentications">Dashboard </div>
            </a>
        </li> 

        <li class="menu-item @if (url()->current() == url('adm/selectboxsone')) active open @endif
            @if (url()->current() == url('adm/selectboxstwo')) active open @endif "
            @if (url()->current() == url('adm/selectboxsthree')) active open @endif "
            >
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bx-food-menu"></i>
                      <div datn="Users">Masters</div>
                  </a>
                  <ul class="menu-sub">  
                      <li class="menu-item @if (url()->current() == url('adm/allselectboxsone')) active @endif
                        @if (url()->current() == url('adm/allselectboxsone')) active @endif">
                              <a href="{{ url('adm/allselectboxsone') }}" class="menu-link">
                                  <i class="menu-icon tf-icons bx bx-user-circle"></i>
                                  <div datn="Authentications">Liquid capital options</div>
                              </a>
                          </li> 

                          <li class="menu-item @if (url()->current() == url('adm/allselectboxstwo')) active @endif
                            @if (url()->current() == url('adm/allselectboxstwo')) active @endif">
                                  <a href="{{ url('adm/allselectboxstwo') }}" class="menu-link">
                                      <i class="menu-icon tf-icons bx bx-user-circle"></i>
                                      <div datn="Authentications">Franchisee partner option</div>
                                  </a>
                              </li> 
            
                          <li class="menu-item @if (url()->current() == url('adm/allselectboxsthree')) active @endif
                            @if (url()->current() == url('adm/allselectboxsthree')) active @endif">
                                  <a href="{{ url('adm/allselectboxsthree') }}" class="menu-link">
                                      <i class="menu-icon tf-icons bx bx-user-circle"></i>
                                      <div datn="Authentications">Hear about options</div>
                                  </a>
                              </li> 
                  </ul>
              </li>



  <li class="menu-item @if (url()->current() == url('adm/homesectiononeadd')) active @endif    @if (url()->current() == url('adm/homesectiononeadd')) active @endif    ">
  <a href="{{ url('adm/homesectiononeadd') }}" class="menu-link"> <i class="menu-icon tf-icons bx bx-abacus"> </i>
      <div data-i18n="Authentications">Banner</div>
  </a>
</li>

<li
class="menu-item @if (url()->current() == url('adm/homesectiontwoadd')) active @endif    @if (url()->current() == url('adm/homesectiontwoadd')) active @endif    ">
<a href="{{ url('adm/homesectiontwoadd') }}" class="menu-link"> <i class="menu-icon tf-icons bx bx-abacus"> </i>
    <div data-i18n="Authentications">About</div>
</a>
</li>

  <li
      class="menu-item @if (url()->current() == url('adm/allslider')) active @endif    @if (url()->current() == url('adm/slider')) active @endif    ">
      <a href="{{ url('adm/allslider') }}" class="menu-link"> <i class="menu-icon tf-icons bx bx-abacus"> </i>
          <div data-i18n="Authentications">Sliding text</div>
      </a>
  </li>

  
  <li
      class="menu-item @if (url()->current() == url('adm/serviceoffered')) active @endif    @if (url()->current() == url('adm/serviceoffered')) active @endif    ">
      <a href="{{ url('adm/serviceoffered') }}" class="menu-link"> <i class="menu-icon tf-icons bx bx-abacus"> </i>
          <div data-i18n="Authentications">Why us</div>
      </a>
  </li>
       
    
  <li
      class="menu-item @if (url()->current() == url('adm/sectionfive')) active @endif    @if (url()->current() == url('adm/sectionfive')) active @endif    ">
      <a href="{{ url('adm/sectionfive') }}" class="menu-link"> <i class="menu-icon tf-icons bx bx-abacus"> </i>
          <div data-i18n="Authentications">Inquire today</div>
      </a>
  </li>

      
  <li
      class="menu-item @if (url()->current() == url('adm/sectionsix')) active @endif    @if (url()->current() == url('adm/sectionsix')) active @endif    ">
      <a href="{{ url('adm/sectionsix') }}" class="menu-link"> <i class="menu-icon tf-icons bx bx-abacus"> </i>
          <div data-i18n="Authentications">Revenue & brand info</div>
      </a>
  </li>

  <li
  class="menu-item @if (url()->current() == url('adm/initialInvestment')) active @endif    @if (url()->current() == url('adm/initialInvestment')) active @endif    ">
  <a href="{{ url('adm/initialInvestment') }}" class="menu-link"> <i class="menu-icon tf-icons bx bx-abacus"> </i>
      <div data-i18n="Authentications">Initial Investment</div>
  </a>
</li>
 
<li
class="menu-item @if (url()->current() == url('adm/contactuscontent')) active @endif    @if (url()->current() == url('adm/contactuscontent')) active @endif    ">
<a href="{{ url('adm/contactuscontent') }}" class="menu-link"> <i class="menu-icon tf-icons bx bx-abacus"> </i>
    <div data-i18n="Authentications">contact-us content</div>
</a>
</li>
 



<li class="menu-item @if (url()->current() == url('adm/faqfeatured')) active open @endif
  @if (url()->current() == url('adm/allfaqs')) active open @endif ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-food-menu"></i>
            <div datn="Users">FAQ’S</div>
        </a>
        <ul class="menu-sub">  
            <li class="menu-item @if (url()->current() == url('adm/faqfeatured')) active @endif
              @if (url()->current() == url('adm/faqfeatured')) active @endif">
                    <a href="{{ url('adm/faqfeatured') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user-circle"></i>
                        <div datn="Authentications">FAQ Featured</div>
                    </a>
                </li> 
  
                <li class="menu-item @if (url()->current() == url('adm/allfaqs')) active @endif
                  @if (url()->current() == url('adm/allfaqs')) active @endif">
                        <a href="{{ url('adm/allfaqs') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-circle"></i>
                            <div datn="Authentications">FAQ’S</div>
                        </a>
                    </li> 
        </ul>
    </li>


 
        <li class="menu-header small text-uppercase"> <span class="menu-header-text"> Setting </span> </li>
        <li class="menu-item @if(url()->current()==url('adm/termconditions')) active @endif">
            <a href="{{ url('adm/termconditions') }}" class="menu-link">
                <i class='menu-icon bx bx-spreadsheet'></i>
                <div data-i18n="speed">Term & conditions</div>
            </a>
        </li>
        
          <li class="menu-item @if(url()->current()==url('adm/privacypolicy')) active @endif">
            <a href="{{ url('adm/privacypolicy') }}" class="menu-link">
                <i class='menu-icon bx bxs-lock-alt'></i>
                <div data-i18n="speed">Privacypolicy</div>
            </a>
        </li>

        <li class="menu-item @if (url()->current() == url('adm/contact')) active @endif">
             <a href="{{ url('adm/contact') }}"  class="menu-link"> 
                <i class='menu-icon bx bxs-lock-alt'></i>
                <div data-i18n="Authentications">Queries contact us</div>
            </a> 
        </li>
            
        <li class="menu-item @if (url()->current() == url('adm/headercontent')) active @endif"> <a href="{{ url('adm/headercontent') }}"
            class="menu-link">                 <i class='menu-icon bx bx-cog'></i> 
            <div data-i18n="Authentications">Change Header content </div>
        </a> 
        </li>
          <li class="menu-item @if (url()->current() == url('adm/setting')) active @endif"> <a href="{{ url('adm/setting') }}"
                class="menu-link">
                <i class='menu-icon bx bx-cog'></i> 
                <div data-i18n="Authentications">Setting  </div>
            </a> </li> 
        <li class="menu-item @if (url()->current() == url('adm/footercontent')) active @endif"> <a
                href="{{ url('adm/footercontent') }}" class="menu-link"> 
                <i class='menu-icon bx bx-cog'></i> 
                <div data-i18n="Authentications">Footer Content </div>
            </a> </li>
        <li class="menu-item @if (url()->current() == url('adm/changepassword')) active @endif"> <a
                href="{{ url('adm/changepassword') }}" class="menu-link">
                <i class='menu-icon bx bx-cog'></i> 
                <div data-i18n="Authentications">Change Password </div>
            </a> </li>
        <li class="menu-item"> <a href="{{ url('/adm/logout') }}" class="menu-link"> <i
                    class="bx bx-power-off me-2"> </i>
                <div data-i18n="Authentications">Logout </div>
            </a> </li>
    </ul>
</aside>
<div class="content-wrapper">
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-1"> <span style="cursor: pointer" class="text-muted fw-light"
                onClick="window.location.href='{{ url('adm/dashboard') }}'">Dashboard / </span> <span
                style="cursor: pointer"
                onclick="window.location.href='{{ url()->current() }}'">{{ $title }}</span>
            @if (!empty($addnewtext))
                <button style="float: right;" type="button" onClick="window.location.href='{{ $addnewurl }}'"
                    class="btn btn-primary">Add {{ $addnewtext }}</button>
            @endif
        </h4>
