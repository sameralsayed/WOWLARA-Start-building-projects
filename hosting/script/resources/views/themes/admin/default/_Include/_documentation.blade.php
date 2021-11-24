<div class="modal fade bs-example-modal-lg" id="documentation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">

            <div class="tab">
                <div class="row clearfix">
                    <div class="col-md-3 col-sm-12">
                        <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                        @foreach($docum as $name) 
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#{{$name}}" role="tab" aria-selected="false">{{__('AA.'.$name.'')}}</a>
                            </li> 
                        @endforeach
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="tab-content">

                            <div class="tab-pane fade" id="Data" role="tabpanel">
							<pre class="coder">
@ foreach(${{$rout}}s as $get)

@ endforeach
						    </pre>
<p>{{ __('AA.Fetch data according to each user If you want your site to have multiple users from this page, you can fetch the data If the logged in user ID matches the user ID in the post, view it') }}</p>

							<pre class="coder">
@ foreach(${{$rout}}s as $get)
  @ if( Auth::user()->id==$get->user_id)

  @ endif
@ endforeach
						    </pre>
<p>{{ __('AA.Also if you want to bring the data according to each language Example: If you create a post and select the English language, this post will be displayed to users who use the English language. It applies to registered users and guests') }}</p>

							<pre class="coder">
@ foreach(${{$rout}}s as $get)
   @ if( Config::get('app.locale')==$get->local)


   @ endif
@ endforeach
						    </pre>

<p>{{ __('AA.what does it mean') }}</p> <?php echo "@";?><?php echo "Include('plus.local')";?>

							<pre class="coder">
@ if(!Auth::guest())
// If user is logged in, find out the language
    {{<?php echo "Auth::user()->local)";?>}} 

   @ else

//If guest, discover the language from the cookies
    {{<?php echo "app()->getLocale()";?>}} 
@ endif
						    </pre>

<p>AJAX Controller</p>           
                            <pre class="coder">
    public function {{$rout}}(Request $request){
        $get_{{$rout}}={{$rout}}::where('views', '>', 50)->paginate(15); // get by views if top 50
        $get_{{$rout}}={{$rout}}::paginate(5)->sortByDesc('views'); // get by views
        $get_{{$rout}}={{$rout}}::paginate(5); // get      
        $html='add strat class'; 
        foreach ($get_{{$rout}} as $get) {

            $html.='start add';

            }
 
        if ($request->ajax()) {
            return $html;
        }
        return view('path/user',compact('get_{{$rout}}'));
    }
                            </pre>
<p>AJAX JS</p> 
                            <pre class="coder">
< script>
   var page = 1; //track user scroll as page number, right now page number is 1
   load_more(page); //initial content load
   $(window).scroll(function() { //detect page scroll
      if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled from top to bottom of the page
      page++; //page number increment
      load_more(page); //load content   
      }
    });     
    function load_more(page){
        $.ajax({
           url: '<?php echo "{{(env('";?>APP_URL<?php echo "'))}}";?>/{{$rout}}/index/< ?php echo app()->getLocale();? >?page=' + page,  // if ad local 
           type: "get",
           datatype: "html",
           beforeSend: function()
           {
              $('.ajax-loading').show();
            }
        })
        .done(function(data)
        {
            if(data.length == 0){
            console.log(data.length);
            //notify user if nothing to load
            $('.ajax-loading').html("No more records!");
            return;
          }
          $('.ajax-loading').hide(); //hide loading animation once data is received
          $("#get{{$rout}}").append(data); //append data into #{{$rout}} element          
           console.log('data.length');
       })
       .fail(function(jqXHR, ajaxOptions, thrownError)
       {
          alert('No response from server');
       });
    }
< /script>
                            </pre>


<p>AJAX JS   on id</p> 
                            <pre class="coder">
< script>
   var page = 1; //track user scroll as page number, right now page number is 1
   load_more(page); //initial content load
   $(window).scroll(function() { //detect page scroll
      if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled from top to bottom of the page
      page++; //page number increment
      load_more(page); //load content   
      }
    });     
    function load_more(page){
        $.ajax({
           url: '<?php echo "{{(env('";?>APP_URL<?php echo "'))}}";?>/{{$rout}}/< ?php echo $this->id;?>/< ?php echo app()->getLocale();? >?page=' + page,  
           type: "get",
           datatype: "html",
           beforeSend: function()
           {
              $('.ajax-loading').show();
            }
        })
        .done(function(data)
        {
            if(data.length == 0){
            console.log(data.length);
            //notify user if nothing to load
            $('.ajax-loading').html("No more records!");
            return;
          }
          $('.ajax-loading').hide(); //hide loading animation once data is received
          $("#get{{$rout}}").append(data); //append data into #{{$rout}} element          
           console.log('data.length');
       })
       .fail(function(jqXHR, ajaxOptions, thrownError)
       {
          alert('No response from server');
       });
    }
< /script>
                            </pre>


<p>AJAX view data</p>                          
                             <pre class="coder">
   < ul id="get{{$rout}}">< /ul> <!-- results appear here or div -->
   <?php echo "{!!\$";?><?php echo "Touser[\"\$get->loading\"]";?><?php echo "!!}";?> <!-- loading -->

                            </pre>


                            </div>

                            <div class="tab-pane fade" id="Add" role="tabpanel">
<p>{{ __('AA.Add Page') }}</p>
							<pre class="coder">
< a href="/{{$rout}}/add/<?php echo "@";?><?php echo "Include('plus.local')";?>">< /a>

//FORM

< form role="form" method="post" action="/add/{{$rout}}/" enctype="multipart/form-data">
    @ csrf
    //Codes

< /form>

---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
//codes


< button class="btn btn-primary {{$rout}}-add">{{ __('AA.Add')}}< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-add")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/add/{{$rout}}/"
,type:"POST"
,data:form_data})})
}),
</ script>
</pre>
                            </div>

                            <div class="tab-pane fade" id="Edit" role="tabpanel">
<p>{{ __('AA.Edit Page') }}</p>
							<pre class="coder">
< a href="/{{$rout}}/edit/<?php echo "{{\$";?><?php echo "get->id";?><?php echo "}}";?>/<?php echo "@";?><?php echo "Include('plus.local')";?>"></a>

//FORM

< form role="form" method="post" action="/update/{{$rout}}/<?php echo "{{\$";?><?php echo "get->id";?><?php echo "}}";?>" enctype="multipart/form-data">
    @ csrf
    //Codes
< /form>


---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
//codes


< button class="btn btn-primary {{$rout}}-update">{{ __('AA.update')}}< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-update")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/update/{{$rout}}/<?php echo "{{\$";?><?php echo "get->id";?><?php echo "}}";?>"
,type:"POST"
,data:form_data})})
}),
</ script>
						    </pre>

                            </div>

                            <div class="tab-pane fade" id="Delete" role="tabpanel">

<p>{{ __('AA.Delete Link') }}</p>
							<pre class="coder">
< a href="/{{$rout}}/delete/<?php echo "{{\$";?><?php echo "get->id";?><?php echo "}}";?>">< /a>

//FORM	

< form role="form" method="post" action="/{{$rout}}/delete/<?php echo "{{\$";?><?php echo "get->id";?><?php echo "}}";?>">
    @ csrf
    //Codes
< /form>


---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
//codes


< button class="btn btn-primary {{$rout}}-delete">{{ __('AA.delete')}}< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-delete")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/delete/{{$rout}}/<?php echo "{{\$";?><?php echo "get->id";?><?php echo "}}";?>"
,type:"POST"
,data:form_data})})
}),
</ script>
						    </pre>

                            </div>

                            <div class="tab-pane fade" id="status" role="tabpanel">
<p>{{ __('AA.Change Status') }}</p>
							<pre class="coder">
< a href="/change/status/{{$rout}}/<?php echo "{{\$";?><?php echo "get->id";?><?php echo "}}";?>">< /a>

//FORM	

< form role="form" method="post" action="/change/status/{{$rout}}/<?php echo "{{\$";?><?php echo "get->id";?><?php echo "}}";?>">
    @ csrf
    //Codes
< /form>


---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
//codes


< button class="btn btn-primary {{$rout}}-status">{{ __('AA.change status')}}< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-status")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/change/status/{{$rout}}/<?php echo "{{\$";?><?php echo "get->id";?><?php echo "}}";?>"
,type:"POST"
,data:form_data})})
}),
</ script>
						    </pre>
                            </div>

                            <div class="tab-pane fade" id="Category" role="tabpanel">

							<pre class="coder">
@ foreach($get_categorys as $get)
    @ if($get->to=="{{$rout}}")

    @ endif
@ endforeach 
						    </pre>

<p>{{ __('AA.Also if you want to bring the data according to each language Example: If you create a Category and select the English language, this Category will be displayed to users who use the English language. It applies to registered users and guests') }}</p>
							<pre class="coder">

@ foreach($get_categorys as $get)
  @ if($get->local==$lang->language)
    @ if($get->to=="{{$rout}}")

    @ endif
  @ endif
@ endforeach 
						    </pre>	
                            </div>

                            <div class="tab-pane fade" id="Sub_Category" role="tabpanel">
							<pre class="coder">
@ foreach($get_sub_categorys as $get)
    @ if($get->to=="{{$rout}}")

    @ endif
@ endforeach 
						    </pre>	


<p>{{ __('AA.Also if you want to bring the data according to each language Example: If you create a Sub Category and select the English language, this Sub Category will be displayed to users who use the English language. It applies to registered users and guests') }}</p>
							<pre class="coder">
@ foreach($get_sub_categorys as $get)
  @ if($get->local==$lang->language)
    @ if($get->to=="{{$rout}}")

    @ endif
  @ endif
@ endforeach 
						    </pre>	
                            </div>

                            <div class="tab-pane fade" id="ads" role="tabpanel">
  
<p>{{ __('AA.Desktop') }}</p>
							<pre class="coder">
<?php echo "{!!\$";?><?php echo "get";?>->{{$rout}}ADdesktop<?php echo "!!}";?>
						    </pre>	

<p>{{ __('AA.Mobile') }}</p>
							<pre class="coder">
<?php echo "{!!\$";?><?php echo "get";?>->{{$rout}}ADmobile<?php echo "!!}";?>
						    </pre>	

<p>{{ __('AA.Tablet') }}</p>
							<pre class="coder">
<?php echo "{!!\$";?><?php echo "get";?>->{{$rout}}ADtablet<?php echo "!!}";?>
						    </pre>		
                            </div>

                            <div class="tab-pane fade" id="Permissions" role="tabpanel">
<p>{{ __('AA.Admin') }}</p>
							<pre class="coder">							
@ if(Auth::user()->role=='Admin')

@ endif
						    </pre>	
<p>{{ __('AA.User') }}</p>
							<pre class="coder">
@ if(Auth::user()->role=='User')

@ endif	
						    </pre>	
<p>{{ __('AA.Editor') }}</p>
							<pre class="coder">
@ if(Auth::user()->role=='Editor')

@ endif			
						    </pre>	
<p>{{ __('AA.Writer') }}</p>		    
							<pre class="coder">
@ if(Auth::user()->role=='Writer')

@ endif			
						    </pre>	
<p>{{ __('AA.Author') }}</p>
							<pre class="coder">
@ if(Auth::user()->role=='Author')

@ endif			
						    </pre>	
                            </div>

                            <div class="tab-pane fade" id="Share" role="tabpanel">
<p>app/Models/Share.php</p>                  	
<pre class="coder">
'{{$rout}}_id',  


public function {{$rout}}()
{
    return $this->belongsTo('App\Models\{{$rout}}');
}		</pre>

<p>Form</p>
<pre class="coder">
< form role="form" method="post" action="/{{$rout}}/share">
    @ csrf

< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


    //Codes
< /form>


---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


< button class="btn btn-primary {{$rout}}-share"
    onclick="clicshare();
    Alert.success();
    Hdshare()">
    {{ __('AA.share')}}
< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-share")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/{{$rout}}/share"
,type:"POST"
,data:form_data})})
}),

//Real-time counter
var shares = <?php echo "{{\$";?>{{$rout}}->shares->count()<?php echo "}}";?>;function clicshare() {shares += 1;document.getElementById("sharescount").innerHTML = shares;}

//hide
function Hdshare(){var e=document.getElementById("Hideshare");e.innerHTML,e.innerHTML=""}

</ script></pre>

<p>database/migrations/ Share Table</p>
<pre class="coder">
$table->integer('{{$rout}}_id')->nullable();</pre>						    

<P>Real-time counter if click  function clicshare</P>
<pre class="coder">
< a id="sharescount"><?php echo "{{\$";?>{{$rout}}->shares->count()<?php echo "}}";?>< /a>
</pre>
<P>hide Share if click  function Hdshare</P>
<pre class="coder">
< div id="Hideshare"> codes hide < /div>
</pre>
                            </div>

                            <div class="tab-pane fade" id="Save" role="tabpanel">
<p>app/Models/save.php</p>                  	
<pre class="coder">
'{{$rout}}_id',  


public function {{$rout}}()
{
    return $this->belongsTo('App\Models\{{$rout}}');
}		</pre>

<p>Form</p>
<pre class="coder">
< form role="form" method="post" action="/{{$rout}}/save">
    @ csrf

< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


    //Codes
< /form>


---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


< button class="btn btn-primary {{$rout}}-save"
    onclick="clicsave();
    Alert.success();
    Hdsave()">
    {{ __('AA.save')}}
< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-save")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/{{$rout}}/save"
,type:"POST"
,data:form_data})})
}),

//Real-time counter
var saves = <?php echo "{{\$";?>{{$rout}}->saves->count()<?php echo "}}";?>;function clicsave() {saves += 1;document.getElementById("savescount").innerHTML = saves;}

//hide
function Hdsave(){var e=document.getElementById("Hidesave");e.innerHTML,e.innerHTML=""}

</ script></pre>

<p>database/migrations/ save Table</p>
<pre class="coder">
$table->integer('{{$rout}}_id')->nullable();</pre>						    

<P>Real-time counter if click  function clicsave</P>
<pre class="coder">
< a id="savescount"><?php echo "{{\$";?>{{$rout}}->saves->count()<?php echo "}}";?>< /a>
</pre>
<P>hide save if click  function Hdsave</P>
<pre class="coder">
< div id="Hidesave"> codes hide < /div>
</pre>
                            </div>

                            <div class="tab-pane fade" id="Like" role="tabpanel">
<p>app/Models/like.php</p>                  	
<pre class="coder">
'{{$rout}}_id',  


public function {{$rout}}()
{
    return $this->belongsTo('App\Models\{{$rout}}');
}		</pre>

<p>Form</p>
<pre class="coder">
< form role="form" method="post" action="/{{$rout}}/like">
    @ csrf

< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


    //Codes
< /form>


---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


< button class="btn btn-primary {{$rout}}-like"
    onclick="cliclike();
    Alert.success();
    Hdlike()">
    {{ __('AA.like')}}
< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-like")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/{{$rout}}/like"
,type:"POST"
,data:form_data})})
}),

//Real-time counter
var likes = <?php echo "{{\$";?>{{$rout}}->likes->count()<?php echo "}}";?>;function cliclike() {likes += 1;document.getElementById("likescount").innerHTML = likes;}

//hide
function Hdlike(){var e=document.getElementById("Hidelike");e.innerHTML,e.innerHTML=""}

</ script></pre>

<p>database/migrations/ like Table</p>
<pre class="coder">
$table->integer('{{$rout}}_id')->nullable();</pre>						    

<P>Real-time counter if click  function cliclike</P>
<pre class="coder">
< a id="likescount"><?php echo "{{\$";?>{{$rout}}->likes->count()<?php echo "}}";?>< /a>
</pre>
<P>hide like if click  function Hdlike</P>
<pre class="coder">
< div id="Hidelike"> codes hide < /div>
</pre>
                            </div>

                            <div class="tab-pane fade" id="Report" role="tabpanel">
<p>app/Models/report.php</p>                  	
<pre class="coder">
'{{$rout}}_id',  


public function {{$rout}}()
{
    return $this->belongsTo('App\Models\{{$rout}}');
}		</pre>

<p>Form</p>
<pre class="coder">
< form role="form" method="post" action="/{{$rout}}/report">
    @ csrf

< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


    //Codes
< /form>


---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


< button class="btn btn-primary {{$rout}}-report"
    onclick="clicreport();
    Alert.success();
    Hdreport()">
    {{ __('AA.report')}}
< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-report")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/{{$rout}}/report"
,type:"POST"
,data:form_data})})
}),

//Real-time counter
var reports = <?php echo "{{\$";?>{{$rout}}->reports->count()<?php echo "}}";?>;function clicreport() {reports += 1;document.getElementById("reportscount").innerHTML = reports;}

//hide
function Hdreport(){var e=document.getElementById("Hidereport");e.innerHTML,e.innerHTML=""}

</ script></pre>

<p>database/migrations/ report Table</p>
<pre class="coder">
$table->integer('{{$rout}}_id')->nullable();</pre>						    

<P>Real-time counter if click  function clicreport</P>
<pre class="coder">
< a id="reportscount"><?php echo "{{\$";?>{{$rout}}->reports->count()<?php echo "}}";?>< /a>
</pre>
<P>hide report if click  function Hdreport</P>
<pre class="coder">
< div id="Hidereport"> codes hide < /div>
</pre>
                            </div>

                            <div class="tab-pane fade" id="Download" role="tabpanel">
<p>app/Models/download.php</p>                  	
<pre class="coder">
'{{$rout}}_id',  


public function {{$rout}}()
{
    return $this->belongsTo('App\Models\{{$rout}}');
}		</pre>

<p>Form</p>
<pre class="coder">
< form role="form" method="post" action="/{{$rout}}/download">
    @ csrf

< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


    //Codes
< /form>


---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


< button class="btn btn-primary {{$rout}}-download"
    onclick="clicdownload();
    Alert.success();
    Hddownload()">
    {{ __('AA.download')}}
< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-download")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/{{$rout}}/download"
,type:"POST"
,data:form_data})})
}),

//Real-time counter
var downloads = <?php echo "{{\$";?>{{$rout}}->downloads->count()<?php echo "}}";?>;function clicdownload() {downloads += 1;document.getElementById("downloadscount").innerHTML = downloads;}

//hide
function Hddownload(){var e=document.getElementById("Hidedownload");e.innerHTML,e.innerHTML=""}

</ script></pre>

<p>database/migrations/ download Table</p>
<pre class="coder">
$table->integer('{{$rout}}_id')->nullable();</pre>						    

<P>Real-time counter if click  function clicdownload</P>
<pre class="coder">
< a id="downloadscount"><?php echo "{{\$";?>{{$rout}}->downloads->count()<?php echo "}}";?>< /a>
</pre>
<P>hide download if click  function Hddownload</P>
<pre class="coder">
< div id="Hidedownload"> codes hide < /div>
</pre>
 
                            <div class="tab-pane fade" id="Comment" role="tabpanel">
<p>app/Models/comment.php</p>                  	
<pre class="coder">
'{{$rout}}_id',  


public function {{$rout}}()
{
    return $this->belongsTo('App\Models\{{$rout}}');
}		</pre>

<p>Form</p>
<pre class="coder">
< form role="form" method="post" action="/{{$rout}}/comment">
    @ csrf

< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


    //Codes
< /form>


---------------------------//ajax  Without Reloading The Page

< form enctype="multipart/form-data">
< input type="hidden" value="<?php echo "{{\$";?>data->id<?php echo "}}";?>" name="{{$rout}}_id"/>


< button class="btn btn-primary {{$rout}}-comment"
    onclick="cliccomment();
    Alert.success();
    Hdcomment()">
    {{ __('AA.comment')}}
< /button>
< /form>

< script>
$(document)
.ready(function(){$(".{{$rout}}-comment")
.click(function(o){form_data=$("form")
.serialize(),$
.ajax({url:"/{{$rout}}/comment"
,type:"POST"
,data:form_data})})
}),

//Real-time counter
var comments = <?php echo "{{\$";?>{{$rout}}->comments->count()<?php echo "}}";?>;function cliccomment() {comments += 1;document.getElementById("commentscount").innerHTML = comments;}

//hide
function Hdcomment(){var e=document.getElementById("Hidecomment");e.innerHTML,e.innerHTML=""}

</ script></pre>

<p>database/migrations/ comment Table</p>
<pre class="coder">
$table->integer('{{$rout}}_id')->nullable();</pre>						    

<P>Real-time counter if click  function cliccomment</P>
<pre class="coder">
< a id="commentscount"><?php echo "{{\$";?>{{$rout}}->comments->count()<?php echo "}}";?>< /a>
</pre>
<P>hide comment if click  function Hdcomment</P>
<pre class="coder">
< div id="Hidecomment"> codes hide < /div>
</pre>
                            </div>    
                            </div>                            
                         </div>
                    </div>
                </div>
            </div>















					    



            </div>
        </div>
    </div>
</div>