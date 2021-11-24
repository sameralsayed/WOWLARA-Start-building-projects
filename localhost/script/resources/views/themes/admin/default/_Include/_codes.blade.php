<div class="modal fade bs-example-modal-lg" id="Codes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">

				     	<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
							<div class="tab">
								<ul class="nav nav-tabs customtab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#Models" role="tab" aria-selected="true">Model</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#Controllers" role="tab" aria-selected="false">Controller</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#migrations" role="tab" aria-selected="false">migration</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#sitemap" role="tab" aria-selected="false">sitemap</a>
									</li>		
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#charts" role="tab" aria-selected="false">charts</a>
									</li>						
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="Models" role="tabpanel">
										<div class="pd-20">
											{{ __('AA.Put this code in')}} [ /Models/{{$rout}}.php ] {{ __('AA.instead')}}  [ //here codes ] 
											<hr>
											<h6><pre class="coder">
@foreach($cruds as $get)@if($get->route==$rout)'{{$get->name}}',<br> 
@endif @if($get->user_id=="Yes")
public function user()
{
    return $this->belongsTo('App\Models\User');
}
@endif @endforeach</pre></h6>
										</div>
									</div>
									<div class="tab-pane fade" id="Controllers" role="tabpanel">
										<div class="pd-20">
											{{ __('AA.Put this code in')}} [ /app/Http/Controllers/Features/{{$rout}}Controller.php ] {{ __('AA.instead')}}  [ //here codes ] 
											<hr>
<iframe width="100%" height="315" src="https://www.youtube.com/embed/skijffunLrE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>											
											<h6><pre class="coder">

// codes 



//--------------------------normal
@foreach($cruds as $get)@if($get->route==$rout)@if($get->file=="No")
$data->{{$get->name}} = $req->{{$get->name}};
@endif @endif 
@endforeach
//--------------------------end normal

@foreach($cruds as $get)@if($get->route==$rout)@if($get->file=="Yes")

 

if($req->has('{{$get->name}}')) {<br>${{$get->name}} = $req->file('{{$get->name}}');<br>$filename = ${{$get->name}}->getClientOriginalName();<br>${{$get->name}}->move(public_path('upload/{{$rout}}'), $filename);<br>$data->{{$get->name}} = $req->file('{{$get->name}}')->getClientOriginalName();<br>}@else <br>

 
@endif @endif 
@endforeach


@foreach($cruds as $get)@if($get->route==$rout)@if($get->file=="Yes")

//----------------------------- upload or amazon s3

if($req->has('{{$get->name}}'))
$filename = time().'.'.$request->{{$get->name}}->getClientOriginalExtension();
${{$get->name}} = $request->file('{{$get->name}}');
$t = Storage::disk('s3')->put($filename, file_get_contents(${{$get->name}}), 'public');
$filename = Storage::disk('s3')->url($filename);
}
 
@endif @endif 
@endforeach




</pre></h6>
										</div>
									</div>
									<div class="tab-pane fade" id="migrations" role="tabpanel">
										<div class="pd-20">
											{{ __('AA.Put this code in')}} [ /database/migrations/create_{{$rout}}_table.php ] {{ __('AA.instead')}}  [ //here codes ] 
											<hr>
											<h6><pre class="coder">
@foreach($cruds as $get)@if($get->route==$rout)$table->{{$get->type}}('{{$get->name}}')->nullable()->default('{{$get->default}}');<br> @endif @endforeach</pre></h6>
										</div>
									</div>

									<div class="tab-pane fade" id="sitemap" role="tabpanel">
										<div class="pd-20">
											/app/Providers/system/sitemap.php
											<hr>
<iframe width="100%" height="315" src="https://www.youtube.com/embed/zl0IBUg9FWU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>											
<h6><pre class="coder">
use App\Models\{{$rout}};




//--------------------------{{$rout}}
${{$rout}}s = DB::table('{{$rout}}')->orderBy('created_at', 'desc')->get();

//--------------------------{{$rout}}
    foreach (${{$rout}}s as $get) {
        if ($counter == env('SITEMAP_MAX')) {
            // generate new sitemap file
            $sitemap->store('xml', 'sitemap-' . $sitemapCounter);
            // add the file to the sitemaps array
            $sitemap->addSitemap(secure_url('sitemap-' . $sitemapCounter . '.xml'));
            // reset items array (clear memory)
            $sitemap->model->resetItems();
            // reset the counter
            $counter = 0;
            // count generated sitemap
            $sitemapCounter++;
        }

          $sitemap->add(URL::to('/{{$rout}}/view/'.$get->id.'/'.$lang->language.''), ''.$get->created_at.'',
            ''.env('SITEMAP_priority').'',
            ''.env('SITEMAP_changefreq').'');

        $counter++;
    }
//--------------------------end {{$rout}}
</pre></h6>

										</div>
									</div>



									<div class="tab-pane fade" id="charts" role="tabpanel">
										<div class="pd-20">
											{{ __('AA.Put this code in')}} [ /Http/Admin/PanelController.php ] {{ __('AA.instead')}}  [ //codes ]  function adminPanel
											<hr>
<iframe width="100%" height="315" src="https://www.youtube.com/embed/csEDuP7hKqA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>										
											<h6><pre class="coder">

use App\Models\{{$rout}};	


${{$rout}} = {{$rout}}::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
</pre></h6>
										</div>
									</div>

								</div>
							</div>
					    </div>

            </div>
        </div>
    </div>
</div>