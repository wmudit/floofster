@extends('layouts.app')

@section('content')
<div class="boq" style="background-image: url(../assets/img/iceland.jpg);">
  <div class="by">
    <div class="bor">
      <img class="us bos" src="{{ $user->profile->image_url }}"> <!--../assets/img/avatar-dhg.png">-->
      <h3 class="bou">{{ $user->username }}</h3>
      <p class="bot">
        {{ $user->profile->description }}
      </p>
    </div>
  </div>

  <nav class="bov">
    <ul class="nav ph xm">
      <li class="pi">
        <a class="pg active" href="javascript:void(0)">{{ $user->posts->count() }} Posts</a>
      </li>
      <!-- <li class="pi">
        <a class="pg" href="#">Others</a>
      </li>
      <li class="pi">
        <a class="pg" href="#">Anothers</a>
      </li> -->
    </ul>
  </nav>
</div>

<div class="by aha ahl afl">
  <div class="dp"> <!-- grid" data-isotope='{ "itemSelector": ".grid-item"}'> -->
  @foreach($user->posts_desc as $post)
    <div class="fk ek ey ">
      <div class="pz afo vy">
        <div class="qa">
          <!-- <div class="bpb">
              <small class="acx axc">4 min</small>
              <h6>Dave Gamache</h6>
          </div> -->

          <div data-grid="images" data-target-height="150">
            <img class="bos" data-width="640" data-height="640" data-action="zoom" src="../storage/{{ $post->media }}">
          </div>
          <p>
            {{ $post->caption }}
          </p>
          <button class="cg nz ok"><span class="h bmc"></span></button>
          <button class="cg nz ok"><span class="h bhu"></span></button>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

</div>


<!-- <div class="by afl" data-grid="images">
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
</div> -->
@endsection