@if(str_contains(url()->current(), '/admin/languages'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$lang->name}}</td>
    <td {!!$tooltip!!}"{{__('AA.RTL')}}">{{$lang->rtl}}</td> 
    <td {!!$tooltip!!}"{{__('AA.end_url_info')}}">{{$lang->language}}</td>
    <td {!!$tooltip!!}"{{__('AA.Admin Theme')}}">{{$lang->theme_admin}}</td>
    <td {!!$tooltip!!}"{{__('AA.User Theme')}}">{{$lang->theme_user}}</td> 
 
@elseif(str_contains(url()->current(), '/admin/routes'))
    <td {!!$tooltip!!}"{{__('AA.icon')}}">{!!$get->icon!!}</td>
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->name}}</td>
    <td {!!$tooltip!!}"{{__('AA.Path for file')}}">{{$get->path}}</td>

@elseif(str_contains(url()->current(), '/admin/to_routes'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->name}}</td>
    <td {!!$tooltip!!}"{{__('AA.Path for file')}}">{{$get->path}}</td>


@elseif(str_contains(url()->current(), '/admin/categorys'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->name}}</td>
    <td {!!$tooltip!!}"{{__('AA.Adult')}}">{{$get->adult}}</td>
    <td {!!$tooltip!!}"{{__('AA.iconsvg')}}"><img width="25" height="25" src="{{(env('APP_URL'))}}/icons/categorys/{{$get->iconsvg}}" alt="{{ __('AA.Language') }}"></td>
    <td {!!$tooltip!!}"{{__('AA.icon')}}">{!!$get->icon!!}</td> 
    <td {!!$tooltip!!}"{{__('AA.Views')}}">{{$get->views}}</td>
    <td>
      @if($get->status=='Active')
        <span {!!$tooltip!!}"{{__('AA.Now Active')}}" class="badge badge-pill" data-bgcolor="#28a745" data-color="#fff">{{ __('AA.'.$get->status.'')}}</span>
      @else
        <span {!!$tooltip!!}"{{__('AA.Now inActive')}}" class="badge badge-pill" data-bgcolor="#ff2237" data-color="#fff">{{ __('AA.'.$get->status.'')}}</span>
      @endif
    </td>

@elseif(str_contains(url()->current(), '/admin/sub_categorys'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->name}}</td>
    <td {!!$tooltip!!}"{{__('AA.Adult')}}">{{$get->adult}}</td>
    <td {!!$tooltip!!}"{{__('AA.iconsvg')}}"><img width="25" height="25" src="{{(env('APP_URL'))}}/icons/categorys/{{$get->iconsvg}}" alt="{{ __('AA.Language') }}"></td>
    <td {!!$tooltip!!}"{{__('AA.icon')}}">{!!$get->icon!!}</td>   
    <td {!!$tooltip!!}"{{__('AA.Views')}}">{{$get->views}}</td>
    <td>
      @if($get->status=='Active')
        <span {!!$tooltip!!}"{{__('AA.Now Active')}}" class="badge badge-pill" data-bgcolor="#28a745" data-color="#fff">{{ __('AA.'.$get->status.'')}}</span>
      @else
        <span {!!$tooltip!!}"{{__('AA.Now inActive')}}" class="badge badge-pill" data-bgcolor="#ff2237" data-color="#fff">{{ __('AA.'.$get->status.'')}}</span>
      @endif
    </td>


@elseif(str_contains(url()->current(), '/admin/users'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->name}}</td>
    <td {!!$tooltip!!}"{{__('AA.UserName')}}">{{$get->username}}</td>
    <td {!!$tooltip!!}"{{__('AA.Email')}}">{{$get->email}}</td>
    <td {!!$tooltip!!}"{{__('AA.Gender')}}">{{$get->gender}}</td>
    <td {!!$tooltip!!}"{{__('AA.Age')}}">{{$get->age}}</td>
    <td {!!$tooltip!!}"{{__('AA.Change via Edit')}}">{{$get->role}}</td>

@elseif(str_contains(url()->current(), '/admin/designs'))
    <td {!!$tooltip!!}"{{__('AA.Design')}}"><div style="background:{{$get->design_color}};width:100%;height:30px"></div></td>
 
@elseif(str_contains(url()->current(), '/admin/genders'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->user_gender}}</td>

@elseif(str_contains(url()->current(), '/admin/ages'))
    <td {!!$tooltip!!}"{{__('AA.Age')}}">{{$get->user_age}}</td>

@elseif(str_contains(url()->current(), '/admin/faqs'))
    <td {!!$tooltip!!}"{{__('AA.Question')}}">{{$get->faq_question}}</td>
    <td {!!$tooltip!!}"{{__('AA.Answer')}}">{!!$get->faq_answer!!}</td>


@elseif(str_contains(url()->current(), '/admin/notification'))
    <td {!!$tooltip!!}"{{__('AA.Title')}}">{{$get->noti_title}}</td>
    <!--<td {!!$tooltip!!}"{{__('AA.Start')}}">{{$get->noti_start_date}}</td>--> 
    <!--<td {!!$tooltip!!}"{{__('AA.End')}}">{{$get->noti_end_date}}</td>-->
    <td {!!$tooltip!!}"{{__('AA.Start')}}">{{$get->noti_seconds}}</td>
    <td {!!$tooltip!!}"{{__('AA.Position')}}">{{$get->noti_position}}</td>


@elseif(str_contains(url()->current(), '/admin/ads'))
    <td {!!$tooltip!!}"{{__('AA.Sponsored')}}">{{$get->ads_sponsored}}</td> 



@elseif(str_contains(url()->current(), '/admin/pages'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->page_name}}</td>
    <td {!!$tooltip!!}"{{__('AA.Views')}}">{{$get->views}}</td>


@elseif(str_contains(url()->current(), '/admin/analytics'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->analytic_name}}</td>
    <td {!!$tooltip!!}"{{__('AA.Code')}}">{{$get->analytic_code}}</td>


@elseif(str_contains(url()->current(), '/admin/custom_codes'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->code_name}}</td>
    <td {!!$tooltip!!}"{{__('AA.Code Type')}}">{{$get->code_type}}</td> 


@elseif(str_contains(url()->current(), '/admin/social_login'))
    <td {!!$tooltip!!}"{{__('AA.for')}}">{{$get->login_name}}</td>

@elseif(str_contains(url()->current(), '/admin/social_link'))
    <td {!!$tooltip!!}"{{__('AA.Name')}}">{{$get->social_link_name}}</td>
    <td {!!$tooltip!!}"{{__('AA.icon')}}">{!!$get->social_link_icon!!}</td>

@elseif(str_contains(url()->current(), '/admin/help_page'))
    <td {!!$tooltip!!}"{{__('AA.Title')}}">{{$get->help_title}}</td>


@elseif(str_contains(url()->current(), '/admin/latest_updates'))
    <td {!!$tooltip!!}"{{__('AA.Content')}}">{{$get->help_content}}</td>

@else
@endif