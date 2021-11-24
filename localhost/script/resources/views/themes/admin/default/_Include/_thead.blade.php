@if(str_contains(url()->current(), '/admin/languages'))
    <th>{{ __('AA.name')}}</th>
    <th>{{ __('AA.rtl')}}</th> 
    <th>{{ __('AA.url')}}</th> 
    <th>{{ __('AA.Admin Theme')}}</th>
    <th>{{ __('AA.User Theme')}}</th>

@elseif(str_contains(url()->current(), '/admin/routes'))
    <th>{{ __('AA.icon')}}</th>
    <th>{{ __('AA.name')}}</th> 
    <th>{{ __('AA.path')}}</th> 
    <th>{{ __('AA.Added')}}</th>
    <th>{{ __('AA.Update')}}</th>
    @if($get->for=="User")    
    <th>{{ __('AA.Routes')}}</th>
    @endif 


@elseif(str_contains(url()->current(), '/admin/to_routes'))
    <th>{{ __('AA.name')}}</th> 
    <th>{{ __('AA.path')}}</th>
    <th>{{ __('AA.Added')}}</th>
    <th>{{ __('AA.Update')}}</th>
    
@elseif(str_contains(url()->current(), '/admin/categorys'))
    <th>{{ __('AA.Name')}}</th>
    <th>{{ __('AA.Adult')}}</th>
    <th>{{ __('AA.iconsvg')}}</th>
    <th>{{ __('AA.icon')}}</th>  
    <th>{{ __('AA.Views')}}</th>
    <th>{{ __('AA.Status')}}</th>

@elseif(str_contains(url()->current(), '/admin/sub_categorys'))
    <th>{{ __('AA.Name')}}</th>
    <th>{{ __('AA.Adult')}}</th>    
    <th>{{ __('AA.iconsvg')}}</th>
    <th>{{ __('AA.icon')}}</th>   
    <th>{{ __('AA.Views')}}</th>
    <th>{{ __('AA.Status')}}</th>


@elseif(str_contains(url()->current(), '/admin/users'))
    <th>{{ __('AA.Name')}}</th>
    <th>{{ __('AA.UserName')}}</th>
    <th>{{ __('AA.Email')}}</th>
    <th>{{ __('AA.Gender')}}</th>
    <th>{{ __('AA.Age')}}</th>
    <th>{{ __('AA.Role')}}</th>
 
@elseif(str_contains(url()->current(), '/admin/designs'))
    <th>{{ __('AA.Design')}}</th>

@elseif(str_contains(url()->current(), '/admin/genders'))
    <th>{{ __('AA.Name')}}</th>

@elseif(str_contains(url()->current(), '/admin/ages'))
    <th>{{ __('AA.Age')}}</th>

@elseif(str_contains(url()->current(), '/admin/faqs'))
    <th>{{ __('AA.Question')}}</th>
    <th>{{ __('AA.Answer')}}</th>


@elseif(str_contains(url()->current(), '/admin/notification'))
    <th>{{ __('AA.Title')}}</th>
    <!--<th>{{ __('AA.Start')}}</th>-->
    <!--<th>{{ __('AA.End')}}</th>-->
    <th>{{ __('AA.seconds')}}</th>
    <th>{{ __('AA.Position')}}</th>


@elseif(str_contains(url()->current(), '/admin/ads'))
    <th>{{ __('AA.Sponsored')}}</th>  


@elseif(str_contains(url()->current(), '/admin/pages'))
    <th>{{ __('AA.Name')}}</th>
    <th>{{ __('AA.Views')}}</th> 

@elseif(str_contains(url()->current(), '/admin/analytics'))
    <th>{{ __('AA.Name')}}</th>
    <th>{{ __('AA.Code')}}</th>


@elseif(str_contains(url()->current(), '/admin/custom_codes'))
    <th>{{ __('AA.Name')}}</th>
    <th>{{ __('AA.Code Type')}}</th>


@elseif(str_contains(url()->current(), '/admin/social_login'))
    <th>{{ __('AA.System')}}</th>

@elseif(str_contains(url()->current(), '/admin/social_link'))
    <th>{{ __('AA.Name')}}</th>
    <th>{{ __('AA.icon')}}</th>

@elseif(str_contains(url()->current(), '/admin/help_page'))
    <th>{{ __('AA.Title')}}</th>
    
@elseif(str_contains(url()->current(), '/admin/latest_updates'))
    <th>{{ __('AA.Content')}}</th>

@else
@endif