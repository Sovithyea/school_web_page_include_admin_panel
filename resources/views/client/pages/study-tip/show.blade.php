@extends('client.layouts.master')

    @section('content')
    
            <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
        <div class="container">
          
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{__('studyTipShow.title')}}</h2>
            <ol>
              <li><a href="/">{{__('studyTipShow.home')}}</a></li>
              <li>{{__('studyTipShow.title')}}</li>
            </ol>
          </div>
          
        </div>
      </section><!-- End Breadcrumbs -->
    
      <section class="inner-page">
        <div class="container mx-auto">
          <h2 class="text-primary text-center col-md-8 mx-auto">{{$study_tip->title}}</h2>
          {{-- <div class="row" style="margin-top: 30px;min-height:100%; text-align:center;"> --}}
            <iframe src="{{$study_tip->link}}" width="267" height="476" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="@@aEBBE"></iframe>
          {{-- </div> --}}
          {{-- <div style="clear: both;"></div> --}}
        </div>
      </section>

    @endsection
    