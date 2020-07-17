@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }}  | Page not found

@endsection



@section("main_content")

@includeIf("layouts.breadcrumb" , [ "title" => "Page not found" ,"subtitle" => "Page not found" ])

  <!-- Section: home -->
  <section id="home" class="fullscreen bg-lightest">
      <div class="display-table text-center">
        <div class="display-table-cell">
          <div class="container pt-0 pb-0">
            <div class="row">
              <div class="col-md-7">
                <h1 class="font-200 line-height-1em mt-0 mb-0 text-theme-colored">404!</h1>
                <h2 class="mt-0">Oops! Page Not Found</h2>
                <p>The page you were looking for could not be found.</p>
                <a class="btn btn-border btn-gray btn-transparent btn-circled" href="/">Return Home
                </a>
              </div>
              <div class="col-md-4">
                <h3>Some Useful Links</h3>
                <div class="widget">
                  <ul class="list-border">
                    <li><a  href="/">Home</a></li>
                    <li><a href="/about-us">About us</a></li>
                    <li><a href="/faq">Faq's</a></li>
                    <li><a href="/contact-us">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

@endsection