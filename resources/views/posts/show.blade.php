@extends('layouts.app')

@section('content')
<div class="fn kd" data-example-id=""> <!-- class="bv" data-example-id=""> -->
<ul class="bow box afh">
  <li class="rv b agz">
    <img class="bos aff yb" src="../assets/img/avatar-mdo.png" />
    <div class="rw">
      <div class="bpb">
        <small class="acx axc">34 min</small>
        <h6>Mark Otto</h6>
      </div>
      <p>
        {{ $post->caption }}
      </p>
      <!-- <img class="boz" src="../assets/img/instagram_17.jpg" /> -->
      <img class="boz" src=../storage/{{ $post->media }}>
      <ul class="bow">
        <li class="rv">
          <img class="bos aff yb" src="../assets/img/avatar-dhg.png" />
          <div class="rw">
            <strong>Dave Gamache: </strong>
            Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
          </div>
        </li>
        <li class="rv afd">
          <img class="bos aff yb" src="../assets/img/avatar-fat.jpg" />
          <div class="rw">
            <strong>Jacob Thornton: </strong>
            Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
          </div>
        </li>
      </ul>
    </div>
  </li>
</ul>
</div>
@endsection