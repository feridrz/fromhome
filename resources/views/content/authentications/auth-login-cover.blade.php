@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Login Cover - Pages')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth.js')}}"></script>

<script>
  $(document).ready(function() {
    function checkWidth() {
      var windowSize = $(window).width();
      if (windowSize < 576) {
        $('.card').removeClass('card');
      } else {
        $('.card-wrapper').addClass('card');
      }
    }

    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
  });
</script>

@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="{{url('/')}}" class="auth-cover-brand d-flex align-items-center gap-2">
    <span class="app-brand-logo demo"><img width="150px" src="{{ asset('assets/img/company/logo_az_wide.png') }}" alt="Website Logo"></span>
{{--    <span class="app-brand-text demo text-heading fw-bold">{{config('variables.companyName')}}</span>--}}
  </a>
  <!-- /Logo -->
  <div class="authentication-inner row m-0">
    <!-- /Left Section -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-5 align-items-center justify-content-center p-5 pb-2">
      <img style="object-fit: contain" src="{{asset('assets/img/illustrations/auth_cover1.jpg') }}" class="authentication-image" alt="mask" />
    </div>
    <!-- /Left Section -->

    <!-- Login -->
    <div class="card-wrapper d-flex justify-content-center col-12 col-lg-5 col-xl-7 align-items-center authentication-bg position-relative py-sm-5 px-4 py-4">

      <div class="card p-2 col-7">

        <!-- Logo -->
        <div class="app-brand justify-content-center mt-5">
          <a href="{{url('/')}}" class="app-brand-link gap-2">
            <span class="app-brand-logo demo"><img width="150px" src="{{ asset('assets/img/company/logo.png') }}" alt="Website Logo">
            </span>
          </a>
        </div>
        <!-- /Logo -->

        <div class="card-body mt-2">
          <h4 class="mb-2">Xoş gəlmisiniz!</h4>
          <br>
          <form id="formAuthentication" class="mb-3" action="{{url('/')}}" method="GET">
            <div class="form-floating form-floating-outline mb-3">
              <input type="text" class="form-control" id="email" name="email" placeholder="Mail ünvanınızı daxil edin" autofocus>
              <label for="email">Email adresiniz</label>
            </div>
            <div class="mb-3">
              <div class="form-password-toggle">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <label for="password">Şifrə</label>
                  </div>
                  <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                </div>
              </div>
            </div>
            <div class="mb-3 d-flex justify-content-between">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Yadda saxla
                </label>
              </div>
              <a href="javascript:void(0);" class="float-end mb-1">
                <span>Şifrəni unutmusuz?</span>
              </a>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Daxil ol</button>
            </div>
          </form>

          <p class="text-center">
            <span>Hesabınız yoxdur?</span>
            <a href="{{url('auth/register-basic')}}">
              <span>Qeydiyyatdan keçin</span>
            </a>
          </p>

          <div class="">
          </div>


        </div>
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>
@endsection
