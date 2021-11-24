@extends('themes.admin.default.index') 
@section('content') 
@Include('themes.admin.default._Include._title')
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<div class="tab">
								<div class="row clearfix">
									<div class="col-md-2 col-sm-12">
										<ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                                        @foreach($documentation_list as $list)
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#{{$list}}" role="tab" aria-selected="false">{{ __('AA.'.$list.'')}}</a>
											</li>
                                        @endforeach
										</ul>
									</div>
									<div class="col-md-10 col-sm-12">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="Important" role="tabpanel">
												<div class="pd-20">
<h1>WOWLARA  V 0.0.1</h1>
<p>{{ __('AA.Thank you for your purchase If like , please leave us a nice rate and comment')}} 🙂</p>
<hr>
<h2>{{ __('AA.You can read documents each page')}}</h2>
<hr>	
<p>{{ __('AA.The following must be observed')}}</p>
<br>
<li>{{ __('AA.When creating a new route please do not use similar words like, site')}}</li>

<li>{{ __('AA.Please do not use or create a variable called $get. This name is reserved for fetching data according to each language')}}</li>

<li>{{ __('AA.When creating a new language, check the code carefully. It will also be used for the time and date. It will automatically translate it according to the country')}}</li>

<li>{{ __('AA.If you are a template designer or want to agree with template designers to create and sell templates, Please contact me via my profile')}}</li>

<li>{{ __('AA.Supports use in subdomain or subfolder')}}</li>
<hr>
<pre class="coder"><?php echo "{{(env('";?>APP_NAME<?php echo "'))}}";?></pre>

<hr>
<pre class="coder"><?php echo "{{(env('";?>APP_URL<?php echo "'))}}";?></pre>



												</div>
											</div>

											<div class="tab-pane fade" id="SEO" role="tabpanel">
												<div class="pd-20">
<h5>{{ __('AA.Installer ready to read the documents, please go to')}}</h5>	
<hr>									
<pre class="coder">
https://packagist.org/packages/artesaos/seotools
</pre>

												</div>
											</div>


											<div class="tab-pane fade" id="Date" role="tabpanel">
												<div class="pd-20">
<h5>{{ __('AA.Installer ready to read the documents, please go to')}}</h5>
<hr>
<pre class="coder">
https://packagist.org/packages/jenssegers/date
</pre>

												</div>
											</div>


											<div class="tab-pane fade" id="Message" role="tabpanel">
												<div class="pd-20">
<h5>{{ __('AA.Installer ready to read the documents, please go to')}}</h5>	
<hr>									
<pre class="coder">
https://packagist.org/packages/yoeunes/toastr
</pre>

												</div>
											</div>


											<div class="tab-pane fade" id="Production" role="tabpanel">
												<div class="pd-20">

<h5>{{ __('AA.In the event that you have completed the construction of the project and would like to hand it over to the client')}}</h5>
<hr>	
<p>{{ __('AA.You should do the following')}}</p>
<br>
<li>{{ __('AA.Transfer from local to production, all visible codes and buttons will be hidden')}}</li>

<li>{{ __('AA.From the routes page delete the page documentation & to_routes & routes | If you want to delete other pages, no problem, it depends on your project')}}</li>
<hr>
<h4>{{ __('AA.Your project is now ready')}}</h4>

												</div>
											</div>

											<div class="tab-pane fade" id="Template" role="tabpanel">
												<div class="pd-20">
<h5>{{ __('AA.Complete support, you can use it in your projects')}}</h5>
<hr>
<pre class="coder">
https://github.com/dropways/deskapp
</pre>

												</div>
											</div>

											<div class="tab-pane fade" id="reCAPTCHA" role="tabpanel">
												<div class="pd-20">
<h5>{{ __('AA.Complete support, you can use it in your projects')}}</h5>
<hr>
<pre class="coder">
https://packagist.org/packages/biscolab/laravel-recaptcha
</pre>

<pre class="coder"><?php echo "{{(env('";?>RECAPTCHA_SITE_KEY<?php echo "'))}}";?></pre>

<pre class="coder"><?php echo "{{(env('";?>RECAPTCHA_SECRET_KEY<?php echo "'))}}";?></pre>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
@endsection