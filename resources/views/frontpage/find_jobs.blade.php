@extends('frontpage.index')


@section('home')

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg" style="background-image: url(&quot;assets/img/hero/about.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center hero-cap">
                            <h2>Get your job</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                                <div class="small-section-tittle2 mb-45">
                                <div class="ion"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                <path fill-rule="evenodd" fill="rgb(27, 207, 107)" d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"></path>
                                </svg>
                                </div>
                                <h4>Filter Jobs</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                           <div class="small-section-tittle2">
                                 <h4>Job Category</h4>
                           </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="select" style="display: none;">
                                    <option value="">All Category</option>
                                    <option value="">Category 1</option>
                                    <option value="">Category 2</option>
                                    <option value="">Category 3</option>
                                    <option value="">Category 4</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">All Category</span><ul class="list"><li data-value="" class="option selected">All Category</li><li data-value="" class="option">Category 1</li><li data-value="" class="option">Category 2</li><li data-value="" class="option">Category 3</li><li data-value="" class="option">Category 4</li></ul></div>
                            </div>
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Job Type</h4>
                                </div>
                                <label class="container">Full Time
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Part Time
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Remote
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Freelance
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <!-- single two -->
                        <div class="single-listing">
                           <div class="small-section-tittle2">
                                 <h4>Job Location</h4>
                           </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="select" style="display: none;">
                                    <option value="">Anywhere</option>
                                    <option value="">Category 1</option>
                                    <option value="">Category 2</option>
                                    <option value="">Category 3</option>
                                    <option value="">Category 4</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Anywhere</span><ul class="list"><li data-value="" class="option selected">Anywhere</li><li data-value="" class="option">Category 1</li><li data-value="" class="option">Category 2</li><li data-value="" class="option">Category 3</li><li data-value="" class="option">Category 4</li></ul></div>
                            </div>
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Experience</h4>
                                </div>
                                <label class="container">1-2 Years
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">2-3 Years
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">3-6 Years
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">6-more..
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <!-- single three -->
                        <div class="single-listing">
                            <!-- select-Categories start -->
                            <div class="select-Categories pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Posted Within</h4>
                                </div>
                                <label class="container">Any
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Today
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 2 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 3 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 5 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 10 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <div class="single-listing">
                            <!-- Range Slider Start -->
                            <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                <div class="small-section-tittle2">
                                    <h4>Filter Jobs</h4>
                                </div>
                                <div class="widgets_inner">
                                    <div class="range_item">
                                        <!-- <div id="slider-range"></div> -->
                                        <span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">tk. 0</span><span class="irs-max" style="visibility: visible;">tk. 1.000</span><span class="irs-from" style="visibility: visible; left: 0%;">tk. 0</span><span class="irs-to" style="visibility: visible; left: 39.0411%;">tk. 500</span><span class="irs-single" style="visibility: hidden; left: 9.47489%;">tk. 0 - tk. 500</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 3.42466%; width: 46.5753%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 0%;"></span><span class="irs-slider to type_last" style="left: 46.5753%;"></span></span><input type="text" class="js-range-slider irs-hidden-input" value="" readonly="">
                                        <div class="d-flex align-items-center">
                                            <div class="price_text">
                                                <p>Price :</p>
                                            </div>
                                            <div class="price_value d-flex justify-content-center">
                                                <input type="text" class="js-input-from" id="amount" readonly="">
                                                <span>to</span>
                                                <input type="text" class="js-input-to" id="amount" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                          <!-- Range Slider End -->
                        </div>
                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35">
                                        <span>39, 782 Jobs found</span>
                                        <!-- Select job items start -->
                                        <div class="select-job-items">
                                            <span>Sort by</span>
                                            <select name="select" style="display: none;">
                                                <option value="">None</option>
                                                <option value="">job list</option>
                                                <option value="">job list</option>
                                                <option value="">job list</option>
                                            </select><div class="nice-select" tabindex="0"><span class="current">None</span><ul class="list"><li data-value="" class="option selected">None</li><li data-value="" class="option">job list</li><li data-value="" class="option">job list</li><li data-value="" class="option">job list</li></ul></div>
                                        </div>
                                        <!--  Select job items End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="assets/img/icon/job-list2.png" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="assets/img/icon/job-list3.png" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="assets/img/icon/job-list4.png" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="assets/img/icon/job-list3.png" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="assets/img/icon/job-list4.png" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
    <!--Pagination Start  -->
    <div class="text-center pagination-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Pagination End  --


        @endsection