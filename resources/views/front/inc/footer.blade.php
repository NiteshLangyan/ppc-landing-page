
    <!----- footer ----->
    <footer>
        <div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-3">
      <img src="{{url('/storage/app/')}}/{{$Footeradd->footerLogo}}" class="img-fluid" alt="log" />
      <ul class="mail-s">
        <li class="CONT-sACTs">
          <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
        </li>
        <li class="CONT-sACTs">
          <a href="{{ url('/term-conditions') }}">Terms & Conditions</a>
        </li>
      </ul>
    </div>
    <div class="col-12 col-md-9">
      <div class="pxxx">
        <h6>{{$Footeradd->heading }}</h6>
        <div class="row">
          <div class="col-12 col-sm-4 col-md-4">
            {!! $Footeradd->description !!}
          </div>
          <div class="col-12 col-sm-4 col-md-4">
            {!! $Footeradd->description2 !!}
          </div>
          <div class="col-12 col-sm-4 col-md-4">
            {!! $Footeradd->description3 !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

        <div class="Copyright">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-12 col-sm-12 col-md-12">
                <p>{{date('Y')}} © All rights reserved</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!----- footer ----->
  
<script src="{{ url('public/front')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('public/front')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{ url('public/front')}}/js/jquery.sticky.js"></script>
<script src="{{ url('public/front')}}/js/main.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function(event) { 
      var scrollpos = localStorage.getItem('scrollpos');
      if (scrollpos) window.scrollTo(0, scrollpos);
  });

  window.onbeforeunload = function(e) {
      localStorage.setItem('scrollpos', window.scrollY);
  };
</script>

@if(Session::has('succ'))
  <script>
    alert('{{ Session::get("succ") }}');
  </script>
@endif



      <script type="text/javascript"> 
        (function ($, window, document) {
          $("[data-toggle]").on("click", function (event) {
            event.preventDefault();
            var target = $(this.hash);
            target.toggle();
          });
  
          // Cache selectors
          var lastId,
            topMenu = $("#top-menu"),
            topMenuHeight = topMenu.outerHeight() + 15,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function () {
              var item = $(this).attr("href");
              if (item != "#") {
                return $(item);
              }
            });
  
          // console.log(scrollItems);
  
          // Bind click handler to menu items
          // so we can get a fancy scroll animation
          menuItems.click(function (e) {
            var href = $(this).attr("href"),
              offsetTop =
                href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
            $("html, body").stop().animate(
              {
                scrollTop: offsetTop,
              },
              300
            );
            e.preventDefault();
          });
  
          // Bind to scroll
          $(window).scroll(function () {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;
  
            // Get id of current scroll item
            var cur = scrollItems.map(function () {
              // if ($(this).offset().top < fromTop)
              //   // console.log(this)
              //   return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";
  
            if (lastId !== id) {
              lastId = id;
              // Set/remove active class
              menuItems
                .parent()
                .removeClass("active")
                .end()
                .filter("[href='#" + id + "']")
                .parent()
                .addClass("active");
            }
          });
        })(jQuery, window, document);
      </script>
      <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
          var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("scroll-header").style.top = "0";
          } else {
            document.getElementById("scroll-header").style.top = "-140px";
          }
          prevScrollpos = currentScrollPos;
        };
  
        $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
            $("#scroll-header").addClass("sticky-header");
          } else {
            $("#scroll-header").removeClass("sticky-header");
          }
        });
      </script>
      <script src="{{ url('public/front')}}/js/aos.js"></script>
      <script>
        AOS.init();
      </script>
  
      <script src="{{ url('public/front')}}/js/owl.carousel.js"></script>
      <script>
        $(".owl-carousel").owlCarousel({
          stagePadding: 50,
          loop: true,
          margin: 10,
          nav: true,
          responsive: {
            0: {
              items: 1.5,
            },
            600: {
              items: 1.5,
            },
            1000: {
              items: 2.5,
            },
          },
        });
      </script>
    </body>
  </html>
  