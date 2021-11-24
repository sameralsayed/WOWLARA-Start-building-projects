<div class="container pd-0">
  <h4>{!!$Touser["notio"]!!} {{ __('AA.We will send you the latest updates here') }}</h4>
  <div class="timeline mb-30">
    <ul>
      @foreach($generals as $get) 
        @if($get->group=="latest_updates")
          @if($get->status=="Active")
          <li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">
              {{$get->created_at->ago()}}
            </div>
            <div class="timeline-desc card-box">
              <div class="pd-20">
                <h5 class="mb-10 h4">{!!$get->help_content!!}</h5>
              </div>
            </div>
          </li>
          @endif
        @endif
      @endforeach 
    </ul>
  </div>
</div>