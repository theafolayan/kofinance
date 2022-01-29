{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 col-xxl-12">
      <div class="row">
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-success mr-md-4 mr-3">
                  <img src="https://img.icons8.com/external-bearicons-detailed-outline-bearicons/64/000000/external-unlock-call-to-action-bearicons-detailed-outline-bearicons-1.png"/>
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Open Wallet Balance</p>
                  <span class="title text-black font-w600">₦{{auth()->user()->getWallet('open-wallet')->balance}}</span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-success" style="width: 42%; height:5px;" role="progressbar">
                  <span class="sr-only">42% Complete</span>
                </div>
              </div>
            </div>
            <div class="effect bg-success"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-secondary  mr-md-4 mr-3">
                  <img src="https://img.icons8.com/dotty/80/000000/lock-2.png"/>
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Locked Wallet Balance</p>
                  <span class="title text-black font-w600">₦{{auth()->user()->getWallet('locked-wallet')->balance}}</span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-secondary" style="width: 82%; height:5px;" role="progressbar">
                  <span class="sr-only">42% Complete</span>
                </div>
              </div>
            </div>
            <div class="effect bg-secondary"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-danger mr-md-4 mr-3">
                  <img src="https://img.icons8.com/external-tal-revivo-shadow-tal-revivo/24/000000/external-symbol-sigma-a-greek-alphabet-used-as-sum-of-series-text-shadow-tal-revivo.png"/>
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Total Wallet Balance</p>
                  <span class="title text-black font-w600">₦ {{array_sum([auth()->user()->getWallet('open-wallet'), auth()->user()->getWallet('locked-wallet') ])}}</span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-danger" style="width: 90%; height:5px;" role="progressbar">
                  <span class="sr-only">42% Complete</span>
                </div>
              </div>
            </div>
            <div class="effect bg-danger"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-warning  mr-md-4 mr-3">
                  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.9996 10.0001C22.7611 10.0001 24.9997 7.76148 24.9997 5.00004C24.9997 2.23859 22.7611 0 19.9996 0C17.2382 0 14.9996 2.23859 14.9996 5.00004C14.9996 7.76148 17.2382 10.0001 19.9996 10.0001Z" fill="#FFBC11"/>
                    <path d="M29.7178 36.3838L23.5603 38.6931L26.6224 39.8414C27.9402 40.3307 29.3621 39.6527 29.8413 38.3778C30.0964 37.6976 30.021 36.9851 29.7178 36.3838Z" fill="#FFBC11"/>
                    <path d="M8.37771 27.6588C7.08745 27.1803 5.64452 27.8298 5.15873 29.1224C4.67411 30.4151 5.32967 31.8555 6.62228 32.3413L9.31945 33.3527L16.4402 30.6821L8.37771 27.6588Z" fill="#FFBC11"/>
                    <path d="M34.8413 29.1225C34.3554 27.8297 32.9126 27.1803 31.6223 27.6589L11.6223 35.1589C10.3295 35.6448 9.67401 37.0852 10.1586 38.3779C10.6378 39.6524 12.0594 40.3309 13.3776 39.8415L33.3777 32.3414C34.6705 31.8556 35.326 30.4152 34.8413 29.1225Z" fill="#FFBC11"/>
                    <path d="M37.5001 20.0001H31.5455L27.2364 11.3819C26.7886 10.4871 25.8776 9.97737 24.9388 10.0001L19.9996 10.0001L15.061 10.0001C14.1223 9.97737 13.2125 10.4872 12.7637 11.3819L8.45457 20.0001H2.49998C1.1194 20.0001 0 21.1195 0 22.5001C0 23.8807 1.1194 25.0001 2.49998 25.0001H10C10.9473 25.0001 11.8128 24.4654 12.2363 23.6183L15 18.0909V27.4724L19.9998 29.3472L25 27.4719V18.0909L27.7637 23.6183C28.1873 24.4655 29.0528 25.0001 30 25.0001H37.5C38.8806 25.0001 40 23.8807 40 22.5001C40 21.1195 38.8807 20.0001 37.5001 20.0001Z" fill="#FFBC11"/>
                  </svg>
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Amount Invested till date</p>
                  <span class="title text-black font-w600">12,750,000</span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-warning" style="width: 42%; height:5px;" role="progressbar">
                  <span class="sr-only">42% Completed</span>
                </div>
              </div>
            </div>
            <div class="effect bg-warning"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-sm-flex d-block pb-0 border-0">
          <div class="mr-auto pr-3 mb-sm-0 mb-3">
            <h4 class="text-black fs-20">Plan List</h4>
            <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
          </div>
          <div class="dropdown mb-3 show">
            <button type="button" class="btn rounded btn-light" data-toggle="dropdown" aria-expanded="true">
              <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip5)">
                  <path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="#A02CFA"/>
                  <path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="#A02CFA"/>
                  <path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="#A02CFA"/>
                </g>
                <defs>
                  <clipPath id="clip5">
                    <rect width="24" height="24" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
              Running
              <svg class="ml-2" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 0.999999L7 7L13 1" stroke="#0B2A97" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <div class="card-body pt-0 pb-0">
          <div id="chartBar"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-9 col-xxl-8">
      <div class="row">
        <div class="col-xl-12">	
          <div class="card">
            <div class="card-header d-sm-flex d-block pb-0 border-0">
              <div class="mr-auto pr-3">
                <h4 class="text-black font-w600 fs-20">Team Members</h4>
                <p class="fs-13 mb-0 text-black">List of every user registered on this platform</p>
              </div>
              <a href="{!! url('/food-menu'); !!}" class="btn btn-primary rounded d-none d-md-block">View More</a>
            </div>
            <div class="card-body pt-2">
              <div class="testimonial-one owl-carousel">
                @foreach ($users as $user )
                <div class="items">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="{{ $user->getAvatarUrl() }}" alt="">
                      <h5 class="fs-16 font-w500 mb-1"><a href="{!! url('/app-profile'); !!}" class="text-black">{{$user->name}}</a></h5>
                      <p class="fs-14">Team Member</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <a href="{!! url('/app-profile'); !!}" class="btn-link fs-14">View Account</a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                @endforeach

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12">	
          <div class="card">
            <div class="card-header d-sm-flex d-block pb-0 border-0">
              <div class="mr-auto pr-3">
                <h4 class="text-black fs-20 font-w600">Calories Chart</h4>
                <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
              </div>
              <div class="dropdown mt-sm-0 mt-3">
                <button type="button" class="btn rounded btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  Weekly
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                  <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                  <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="chartTimeline"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-xxl-4">
      <div class="row">
        <div class="col-xl-12">
          <div class="card featuredMenu">
            <div class="card-header border-0">
              <h4 class="text-black font-w600 fs-20 mb-0">Recent Messages</h4>
            </div>
         
         <div class="card-body loadmore-content height750 dz-scroll pt-0" id="FeaturedMenusContent">
          @foreach ($users as $user )
          <div class="media mb-4">
            <img src="{{ $user->getAvatarUrl() }}" width="85" alt="" class="rounded mr-3">
            <div class="media-body">
              <h5><a href="{!! url('/food-menu'); !!}" class="text-black fs-16">Chinese Orange Fruit With Avocado Salad</a></h5>
              <span class="fs-14 text-primary font-w500">{{$user->name}}</span>
            </div>
          </div>
          
          <ul class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
            <li class="mr-3 mb-2"><i class="las la-clock scale5 mr-3"></i><span class="fs-14 text-black">Sent 6 minutes ago </span></li>
            <li class="mb-2"><i class="fa fa-star-o mr-3 scale5 text-warning" aria-hidden="true"></i><span class="fs-14 text-black font-w500">Unread</span></li>
          </ul>
          @endforeach
        </div>
           
       
            <div class="card-footer style-1 text-center border-0 pt-0 pb-4">
              <a class="text-primary dz-load-more fa fa-chevron-down" id="FeaturedMenus" href="javascript:void(0);" rel="featured-menu-list">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection			