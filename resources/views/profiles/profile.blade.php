@extends('layouts.app')

@section('content')
<div class="boq" style="background-image: url(../assets/img/iceland.jpg);">
  <div class="by">
    <div class="bor">
      <img class="us bos" src="{{ $user->profile->image_url }}"> <!--../assets/img/avatar-dhg.png">-->
      <h3 class="bou">{{ $user->name }}</h3>
      <p class="bot">
        {{ $user->profile->description }}
      </p>
    </div>
  </div>

  <nav class="bov">
    <ul class="nav ph xm">
      <li class="pi">
        <a class="pg active" href="#">Photos</a>
      </li>
      <li class="pi">
        <a class="pg" href="#">Others</a>
      </li>
      <li class="pi">
        <a class="pg" href="#">Anothers</a>
      </li>
    </ul>
  </nav>
</div>

<div class="by afl" data-grid="images">
  <div>
    <img data-width="640" data-height="400" data-action="zoom" src="../assets/img/instagram_5.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_6.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_7.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_8.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_9.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_10.jpg">
  </div>

  <div>
    <img data-width="640" data-height="400" data-action="zoom" src="../assets/img/instagram_11.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_12.jpg">
  </div>

  <div>
    <img data-width="640" data-height="400" data-action="zoom" src="../assets/img/instagram_13.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_14.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_15.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_16.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_17.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_18.jpg">
  </div>

  <div>
    <img data-width="640" data-height="400" data-action="zoom" src="../assets/img/instagram_1.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_2.jpg">
  </div>
</div>
@endsection