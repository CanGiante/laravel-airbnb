@extends('layouts.app')
@section('header')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="ms_jumbo">

          {{-- <div class="ms_overlay"></div> --}}

          @include('../partials/input_search')


        </div>
      </div>
    </div>
  </div>
@endsection

@section('main')
  <b>sponsorizzati</b>
@endsection

@section('footer')
  @include('../partials/footer')
@endsection


<script>
  window.onscroll = function(window.scroll(100,0))
  {
    console.log('scrolling...');
  };
</script>
