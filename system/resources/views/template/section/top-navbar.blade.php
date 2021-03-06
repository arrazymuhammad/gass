<div class="iq-top-navbar">
   <div class="iq-navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
         <div class="iq-navbar-logo d-flex justify-content-between">
            <div class="iq-menu-bt align-self-center">
               <div class="wrapper-menu">
                  <div class="main-circle"><i class="ri-menu-line"></i></div>
               </div>
            </div>
            <a href="{{url('newsfeed')}}">
            <img src="{{url('assets')}}/images/gass.png" class="img-fluid" alt="">
            <span>Garuda Asisten Sehat</span>
            </a>
            
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
         <i class="ri-menu-3-line"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-list">
               <li>
                  <a href="profile.html" class="iq-waves-effect d-flex align-items-center">
                     <img src="{{url(Auth::user()->photo)}}" class="img-fluid rounded-circle mr-3" alt="user">
                     <div class="caption">
                        <h6 class="mb-0 line-height">{{Auth::user()->fullname ?? "User"}}</h6>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                  <i class="ri-arrow-down-s-fill"></i>
                  </a>
                  <div class="iq-sub-dropdown iq-user-dropdown">
                     <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">
                           <div class="bg-primary p-3 line-height">
                              <h5 class="mb-0 text-white line-height">{{Auth::user()->fullname ?? "User"}}</h5>
                              <span class="text-white font-size-12">Available</span>
                           </div>
                           <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-file-user-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">My Profile</h6>
                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                 </div>
                              </div>
                           </a>
                           <a href="profile-edit.html" class="iq-sub-card iq-bg-warning-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-warning">
                                    <i class="ri-profile-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Edit Profile</h6>
                                    <p class="mb-0 font-size-12">Modify your personal details.</p>
                                 </div>
                              </div>
                           </a>
                           <a href="account-setting.html" class="iq-sub-card iq-bg-info-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-info">
                                    <i class="ri-account-box-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Account settings</h6>
                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                 </div>
                              </div>
                           </a>
                           <a href="privacy-setting.html" class="iq-sub-card iq-bg-danger-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-danger">
                                    <i class="ri-lock-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Privacy Settings</h6>
                                    <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                 </div>
                              </div>
                           </a>
                           <div class="d-inline-block w-100 text-center p-3">
                              <a class="bg-primary iq-sign-btn" href="{{url('logout')}}" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</div>