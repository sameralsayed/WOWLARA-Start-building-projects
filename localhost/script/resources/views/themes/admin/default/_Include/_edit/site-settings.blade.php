<div class="tab">
    <div class="row clearfix">
        <div class="col-md-3 col-sm-12">
            <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
            @foreach($inc_form_site as $name=>$title) 
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settingsto-{{$lang->id}}-{{$name}}" role="tab" aria-selected="false">{{__('AA.'.$title.'')}}</a>
                </li> 
            @endforeach
            </ul>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="tab-content">
            @if(Auth::user()->role=="Admin")
            @foreach($inc_form_site as $name=>$title) 
                <div class="tab-pane fade" id="settingsto-{{$lang->id}}-{{$name}}" role="tabpanel">
                     @Include('themes.admin.default._Include._edit.site-settings._'.$name.'')
                </div>
            @endforeach
            @endif
             </div>
        </div>
    </div>
</div>