@extends('layout.app')

@section('content')
<div id="content">
        <div class="container">
      <section class="bar">
        <h4>
        @include('layout.notif')
        </h4>
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h3>Pendaftaran Training Nextbit</h3>
                </div>
              </div>
            </div>
            <div class="row packages justify-content-center">
              <div class="col-md-4">
                <div class="package">
                  <div class="package-header light-gray">
                    <h5>Analyst Class</h5>
                  </div>
                  <ul class="list-unstyled">
                  </ul><a href="#" class="btn btn-template-outlined" >Coming Soon</a>
                </div>
              </div>

              <div class="col-md-4">
                <div class="best-value">
                  <div class="package">
                    <div class="package-header bg-primary color-white">
                      <div class="content">
                        <h4>CODING CLASS</h4>
                        <div class="meta-text">Open Now</div>
                      </div>
                    </div>
                    <div class="price-container d-flex align-items-end justify-content-center">
                      <h4 class="h1"><span class="currency">Free</span>
                    </div>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-check"></i>Basic of Python</li>
                      <li><i class="fa fa-check"></i>Basic of PHP</li>
                      <li><i class="fa fa-check"></i>Basic of Javascript</li>
                    </ul><a href="{!! route('daftar') !!}" class="btn btn-template-outlined">Daftar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="package">
                  <div class="package-header light-gray">
                    <h5>Design Class</h5>
                  </div>
                  <ul class="list-unstyled">
                  </ul><a href="#" class="btn btn-template-outlined">Coming Soon</a>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
@endsection