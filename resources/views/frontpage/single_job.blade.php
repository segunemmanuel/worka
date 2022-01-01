@extends('frontpage.index')


@section('home')
 <!-- Hero Area Start-->
 <div class="slider-area ">
         <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('files/img/hero/about.jpg')}}" >
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center hero-cap">
                        <h2>{{$jobs->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{asset('files/img/icon/job-list1.png') }}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$jobs->title}}</h4>
                                </a>
                                <ul>
                                    <li>{{$jobs->company_id}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$jobs->location}}</li>
                                    <li>{{ $jobs->salary}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{!! $jobs->description !!}</p>
                        </div>
                        <div class="post-details2 mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                           <ul>
                               <li>{!! $jobs->requirements !!}</li>

                           </ul>
                        </div>
                        <div class="post-details2 mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Education + Experience</h4>
                            </div>
                           <ul>
                               <li>{{$jobs->degree}}</li>
                           </ul>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3 mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Job Overview</h4>
                       </div>
                      <ul>
                          <li>Posted date : <span>{{$jobs->created_at}}</span></li>
                          <li>Location : <span>{{$jobs->location}}</span></li>
                          <li>Vacancy : <span>02</span></li>
                          <li>Job nature : <span>{{$jobs->type}}</span></li>
                          <li>Salary :  <span>{{$jobs->salary}} yearly</span></li>
                          <li>Application date : <span>12 Sep 2020</span></li>
                      </ul>
                     <div class="apply-btn2">
                        <a href="#" class="btn">Apply Now</a>
                     </div>
                   </div>
                    <div class="post-details4 mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Company Information</h4>
                       </div>
                          <span>{{$jobs->company_id}}</span>
                          {{-- <p>{{$company->description}}</p> --}}
                        <ul>
                            <li>Name: <span>{!! $company->description !!}</span></li>
                            <li>Web : <span>{{$company->url}}</span></li>
                            <li>Email: <span>{{$company->email}}</span></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

        @endsection
