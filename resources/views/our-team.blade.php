@extends("layouts.frontend")


@section("title")
 {{ config("app.name") }} | Our team
@endsection

@section("main_content")

 @includeIf("layouts.breadcrumb" , [ "title" => "Team" , "subtitle" => "Our Team" ])

<!-- Section: Team -->
<section id="team">
  <div class="container">
    <div class="row mtli-row-clearfix">
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-theme-colored2 p-20">
            <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Linda Feldman</a></h4>
            <p class="">Root Canals Dentist</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-theme-colored2 p-20">
            <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Jessica Tailor</a></h4>
            <p class="">Implant Surgeon </p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-theme-colored2 p-20">
            <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Nichol Fleming</a></h4>
            <p class="">Cosmetic Dental Surgeon</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-theme-colored2 p-20">
            <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Brian Adam</a></h4>
            <p class="">Restorative Dentist</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-theme-colored2 p-20">
            <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Jessica Tailor</a></h4>
            <p class="">Implant Surgeon </p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-theme-colored2 p-20">
            <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Nichol Fleming</a></h4>
            <p class="">Cosmetic Dental Surgeon</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-theme-colored2 p-20">
            <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Brian Adam</a></h4>
            <p class="">Restorative Dentist</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-theme-colored2 p-20">
            <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Linda Feldman</a></h4>
            <p class="">Root Canals Dentist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection