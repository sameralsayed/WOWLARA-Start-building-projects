@extends('themes.admin.default.index') 
@section('content') 
@Include('themes.admin.default._Include._add')
@Include('themes.admin.default._Include._title')
<div class="card-box mb-30"><br>
    <div class="pb-20">
        <div class="tab">
            <div class="row clearfix">

                <div class="col-md-2 col-sm-12">
                    <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                        @foreach($langs as $lang)
                        <li class="nav-item">
                            <a class="nav-link b-up" data-toggle="tab" href="#to-{{$lang->id}}" role="tab" aria-selected="false"><i class="icon-copy fa fa-language" aria-hidden="true"></i> {{$lang->name}}</a>
                        </li>
                        @endforeach
                    </ul> 
                </div>

                <div class="col-md-10 col-sm-12">
                    <div class="tab-content">
                        @foreach($langs as $lang)
                            <div class="tab-pane fade" id="to-{{$lang->id}}" role="tabpanel">
                                <div class="pd-20">
                                @if(str_contains(url()->current(), '/admin/siteicons'))
                                @else

                                @foreach($add_admin as $names=>$name)
                                    @if(str_contains(url()->current(), '/admin/'.$names.''))
                                        @Include('themes.admin.default._Include._table')
                                    @endif
                                @endforeach

                                @endif
                                      
                                @foreach($edit_by_lang_admin as $names=>$name)
                                  @if(str_contains(url()->current(), '/admin/'.$names.''))
                                      @Include('themes.admin.default._Include._edit-by-lang')
                                  @endif
                                @endforeach
                                  
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>   
</div>
@endsection