@include('layouts.header')
    <nav class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/" title="home">Home</a></li>
        <li><a href="/" title="about">About</a></li>
        <li class="current"><a href="#portfolio" title="portofolio">Projects</a></li>
        <li><a href="/" title="locations">Locations</a></li>
        <li><a href="/" title="jobs">Clients</a></li>
      </ul>
      <!-- /.navbar-nav --> 
    </nav>
    <!-- /.navbar-collapse -->
    <div class="social-wrapper">
      <ul class="social naked" style="margin-right: 2%">
        <li><a href="#"><i class="icon-s-facebook"></i></a></li>
        <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
        <li><a href="#"><i class="icon-s-instagram"></i></a></li>
      </ul>
      <!-- /.social --> 
    </div>
    <!-- /.social-wrapper --> 
  </div>
  <!-- /.navbar -->

  <div class="post-parallax parallax inverse-wrapper parallax2" style="background-image: url(style/images/art/parallax2.jpg);">
    <div class="container inner text-center">
      <div class="headline text-right">
        <h2>Projects <img src="style/images/element.png" style="margin-bottom: 2%"></h2>
      </div>
      <!-- /.headline --> 
    </div>
  </div>
  <!-- /filter -->
  <div class="dark-wrapper">
    <div class="container inner" style="padding-top: 50px">
      <div class="thin">
        <h3 class="section-title text-center">Latest Projects</h3>
        <p class="text-center">Categories</p>
      </div>
      <!-- /.thin -->
      <div class="divide10"></div>
      <div class="cbp-panel">
        <div id="js-filters-mosaic" class="cbp-filter-container text-center">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
          <div data-filter=".hospitality" class="cbp-filter-item"> Hospitality </div>
          <div data-filter=".industrial" class="cbp-filter-item"> Industrial </div>
          <div data-filter=".institutional" class="cbp-filter-item"> Institutional </div>
          <div data-filter=".masterplanning" class="cbp-filter-item"> Masterplanning + Landscape </div>
          <div data-filter=".residential" class="cbp-filter-item"> Residential + Commercial </div>
        </div>
        <div id="js-grid-mosaic" class="cbp">
          @foreach($listprojects as $projectdetails)
          <div class="cbp-item {{$projectdetails->categories->name}}"> <a class="cbp-caption" href="{{url('/projectdetail/' . $projectdetails->id . '/' . $projectdetails->title)}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{$projectdetails->avatar}}" alt="" /> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">{{$projectdetails->title}}</div>
                </div>
              </div>
            </div>
            <li class="item">
              <div class="slide-portfolio-item-info box">
                <h4 class="post-title" style="text-align: center">{{$projectdetails->title}}</h4>
              </div>
            </li>
            <!--/.cbp-caption-activeWrap --> 
            </a> 
          </div>
          <!--/.cbp-item -->
          @endforeach
        </div>
        <!--/.cbp --> 
      </div>
      <!--/.cbp-panel -->
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.dark-wrapper -->
@include('layouts.footer')