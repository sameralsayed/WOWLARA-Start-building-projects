<div class="modal fade bs-example-modal-lg" id="docum" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">

@if(str_contains(url()->current(), '/admin/languages'))
<pre style="text-align: left;" class="coder">
@ foreach($langs as $lang)
    // code
@ endforeach
</pre>

@foreach($documentation_langs as $doc)
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$doc}}<?php echo "}}";?></pre> 
@endforeach
@endif


@if(str_contains(url()->current(), '/admin/users'))
<p style="text-align: left;" >Form </p>
                            <pre style="text-align: left;" class="coder">
< form role="form" method="post" 
action="<?php echo "{{(env('";?>APP_URL<?php echo "'))}}";?>/user/edit/<?php echo "{{\$";?><?php echo "user";?>->id<?php echo "}}";?>" 
enctype="multipart/form-data">
@ csrf 
< /form>
                            </pre>


							<pre style="text-align: left;" class="coder">
@ foreach($table_users as $user)
    // code
@ endforeach
						    </pre>

@foreach($documentation_user as $doc)
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "user";?>->{{$doc}}<?php echo "}}";?></pre> 
@endforeach
@endif


@if(str_contains(url()->current(), '/admin/genders'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $gender)
        @ if($gender->group=="genders")
            @ if($gender->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $gender)
        @ if($gender->group=="genders")
            @ if($gender->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "gender";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "gender";?>->user_gender<?php echo "}}";?></pre> 
@endif


@if(str_contains(url()->current(), '/admin/designs'))

<pre style="text-align: left;" class="coder">@ if($get->design=='Active')  @ endif</pre> 

<pre style="text-align: left;" class="coder">
   @ foreach($generals as $design)
        @ if($design->group=="designs")
            @ if($design->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $design)
        @ if($design->group=="designs")
            @ if($design->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "design";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "design";?>->design_color<?php echo "}}";?></pre> 
@endif


@if(str_contains(url()->current(), '/admin/ages'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $age)
        @ if($age->group=="ages")
            @ if($age->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $age)
        @ if($age->group=="ages")
            @ if($age->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "age";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "age";?>->user_age<?php echo "}}";?></pre> 
@endif

@if(str_contains(url()->current(), '/admin/faqs'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $faq)
        @ if($faq->group=="faqs")
            @ if($faq->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $faq)
        @ if($faq->group=="faqs")
            @ if($faq->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "faq";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "faq";?>->faq_question<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "faq";?>->faq_answer<?php echo "}}";?></pre> 
@endif


@if(str_contains(url()->current(), '/admin/pages'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $page)
        @ if($page->group=="pages")
            @ if($page->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $page)
        @ if($page->group=="pages")
            @ if($page->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "page";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "page";?>->page_name<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "page";?>->page_content<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "page";?>->page_seo_title<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "page";?>->page_seo_keywords<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "page";?>->page_seo_description<?php echo "}}";?></pre> 
@endif


@if(str_contains(url()->current(), '/admin/analytics'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $analytic)
        @ if($analytic->group=="analytics")
            @ if($analytic->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $analytic)
        @ if($analytic->group=="analytics")
            @ if($analytic->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "analytic";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "analytic";?>->analytic_code<?php echo "}}";?></pre> 
@endif

@if(str_contains(url()->current(), '/admin/custom_codes'))
<h4>JS</h4>									
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $js)
        @ if($js->group=="custom_codes")
            @ if($js->status=="Active")
                @ if($code->code_type=="js")
                    // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $js)
        @ if($js->group=="custom_codes")
            @ if($js->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "js";?>->local<?php echo "";?>)
                    @ if($code->code_type=="js")
                     // code
                    @ endif
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "js";?>->code_code<?php echo "}}";?></pre> 
<hr>
<h4>CSS</h4>									
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $css)
        @ if($css->group=="custom_codes")
            @ if($css->status=="Active")
                @ if($code->code_type=="css")
                    // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $css)
        @ if($css->group=="custom_codes")
            @ if($css->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "css";?>->local<?php echo "";?>)
                    @ if($code->code_type=="css")
                     // code
                    @ endif
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "css";?>->code_code<?php echo "}}";?></pre>

<hr>
<h4>META TAGS</h4>									
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $mt)
        @ if($mt->group=="custom_codes")
            @ if($mt->status=="Active")
                @ if($code->code_type=="mt")
                    // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $mt)
        @ if($mt->group=="custom_codes")
            @ if($mt->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "mt";?>->local<?php echo "";?>)
                    @ if($code->code_type=="mt")
                     // code
                    @ endif
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "mt";?>->code_code<?php echo "}}";?></pre>
@endif



@if(str_contains(url()->current(), '/admin/social_links'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $link)
        @ if($link->group=="social_links")
            @ if($link->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $link)
        @ if($link->group=="social_links")
            @ if($link->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "link";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "link";?>->social_link_name<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "link";?>->social_link_icon<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "link";?>->social_link_link<?php echo "}}";?></pre> 
@endif


@if(str_contains(url()->current(), '/admin/ads'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $ad)
        @ if($ad->group=="ads")
            @ if($ad->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $ad)
        @ if($ad->group=="ads")
            @ if($ad->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "ad";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

@foreach($documentation_ads as $doc)
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "ad";?>->{{$doc}}<?php echo "}}";?></pre> 
@endforeach
@endif


@if(str_contains(url()->current(), '/admin/help_page'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $help)
        @ if($help->group=="help_page")
            @ if($help->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $help)
        @ if($help->group=="help_page")
            @ if($help->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "help";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

@foreach($documentation_help as $doc)
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "help";?>->{{$doc}}<?php echo "}}";?></pre> 
@endforeach
@endif

@if(str_contains(url()->current(), '/admin/payments'))
<pre style="text-align: left;" class="coder">
   @ foreach($get_pays as $pay)

        // code

    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "pay";?>->user_id<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "pay";?>->plan_id<?php echo "}}";?></pre> 

<h4>Plans</h4>

<pre style="text-align: left;" class="coder">
   @ foreach($get_plans as $plan)

        // code

    @ endforeach
</pre>

<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "plan";?>->name<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "plan";?>->month<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "plan";?>->year<?php echo "}}";?></pre> 
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "plan";?>->limit<?php echo "}}";?></pre> 
@endif



@if(str_contains(url()->current(), '/admin/notifications'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $noti)
        @ if($noti->group=="notifications")
            @ if($noti->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $noti)
        @ if($noti->group=="notifications")
            @ if($noti->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "noti";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

@foreach($documentation_notifications as $doc)
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "noti";?>->{{$doc}}<?php echo "}}";?></pre> 
@endforeach
@endif


@if(str_contains(url()->current(), '/admin/themes'))
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $theme)
        @ if($theme->group=="themes")
            @ if($theme->status=="Active")
                // code
            @ endif
        @ endif
    @ endforeach
</pre>


<p style="text-align: left;">{{ __('AA.if you want to bring the data according to each language') }}</p>													
<pre style="text-align: left;" class="coder">
   @ foreach($generals as $theme)
        @ if($theme->group=="themes")
            @ if($theme->status=="Active")
                @ if( Config::get('app.locale')==<?php echo "\$";?><?php echo "theme";?>->local<?php echo "";?>)
                     // code
                @ endif
            @ endif
        @ endif
    @ endforeach
</pre>

@foreach($documentation_themes as $doc)
<pre style="text-align: left;" class="coder"><?php echo "{{\$";?><?php echo "theme";?>->{{$doc}}<?php echo "}}";?></pre> 
@endforeach
<p style="text-align: left;">image path</p>
<pre style="text-align: left;" class="coder">/uploads/themes/</pre> 
@endif



@if(str_contains(url()->current(), '/admin/routes'))
<h2 style="text-align: left;">{{ __('AA.When creating a new route please do not use similar words like, site')}}</h2>
<li>Don't forget when construction is finished, add Routes to /routes/web.php from Routes button</li>
<iframe width="560" height="315" src="https://www.youtube.com/embed/upM7V1O0-RU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endif


@if(str_contains(url()->current(), '/admin/categorys'))
<h2 style="text-align: left;">{{ __('AA.Documents on pages created from routes')}}</h2>

@foreach($get_routes as $route)
    @if($route->for=="User")
        <h4><li style="text-align: left;"><a href="{{(env('APP_URL'))}}/admin/{{$route->name}}">{{$route->name}}</a></li></h4>
    @endif
@endforeach

@endif

@if(str_contains(url()->current(), '/admin/sub_categorys'))
<h2 style="text-align: left;">{{ __('AA.Documents on pages created from routes')}}</h2>

@foreach($get_routes as $route)
    @if($route->for=="User")
        <h4><li style="text-align: left;"><a href="{{(env('APP_URL'))}}/admin/{{$route->name}}">{{$route->name}}</a></li></h4>
    @endif
@endforeach
@endif

@if(str_contains(url()->current(), '/admin/latest_updates'))
<h2 style="text-align: left;">{{ __('AA.It will be displayed in')}}  user profile page</h2>
@endif

@if(str_contains(url()->current(), '/admin/siteicons'))
<h2 style="text-align: left;">{{ __('AA.A new column will be created in Languages each time a new icon is created')}} </h2>
@endif
            </div>
        </div>
    </div>
</div>      	