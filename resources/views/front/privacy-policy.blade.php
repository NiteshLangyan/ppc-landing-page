@include('front.inc.header') 

    <div class="ob_lay"></div>
    <!----- header -----> 
    @php $data = DB::table('privacypolicy')->first(); @endphp

    <section class="banner" id="about">
      <div class="container-fluid">
         {!! $data->description  !!}
      </div>
    </section>
 
@include('front.inc.footer') 
    
