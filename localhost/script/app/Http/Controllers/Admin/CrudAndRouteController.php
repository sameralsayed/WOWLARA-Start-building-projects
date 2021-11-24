<?php
namespace App\Http\Controllers\Admin;
use App\Models\Route;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\PageRoute;
use App\Models\Crud;
use App\Helpers;

class CrudAndRouteController extends Controller
{ 

// find admin
    function __construct(){$this->middleware('admin');}
    
//------------------------------------pages route
    function pages_route(){ 
        $data['pages'] = PageRoute::all();
        $data['route'] = Route::find($id); 
        return view('path/admin',$data);
    }
//------------------------------------end pages route
 
//------------------------------------add routes page
    function page_route_add(Request $req)
    {
        $data = new PageRoute;
        $data->name = $req->name;
        $data->path = $req->path;
        $data->route = $req->route;
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end add routes page


//------------------------------------edit routes page
    function page_route_edit(Request $req)
    {
        $data = PageRoute::find($req->id);
        $data->name = $req->name;
        $data->path = $req->path;
        $data->route = $req->route;
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end edit routes page

//------------------------------------delete routes page
    function page_route_delete($id)
    {
        $data=PageRoute::find($id);
        $data->delete();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
    }
//------------------------------------end delete routes page

//------------------------------------new crud
    function crud_add(Request $req)
    {
        $data = new Crud;
        $data->route = $req->route;
        $data->name = $req->name;
        $data->type = $req->type;
        $data->file = $req->file;
        $data->user_id = $req->user_id;
        $data->default = $req->default;        
        $default = $req->default;
        $name = $req->route;
        $Forname = $req->name;
        $newColumnType = $req->type;

        Schema::table(''.$name.'', function (Blueprint $table) use ($newColumnType, $Forname, $name, $default)         {
            $table->$newColumnType($Forname)->nullable()->default(''.$default.'');
        });

        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end new crud

//------------------------------------new route
   //-----------------------------------------Do not modify or remove spaces, stay as it is
    function route_add(Request $req)
    {
        $data = new Route;
        $data->name = $req->name;
        $data->User = $req->user;
        $data->Admin = $req->admin;    
        $data->icon = $req->icon;     
        $name = $req->name;
        $themeUser = $req->user;
        $themeAdmin = $req->admin;    
        $newColumnType = 'longText';
        $Adsdesktop = ''.$name.'ADdesktop';
        $Adstablet = ''.$name.'ADtablet';
        $Adsmobile = ''.$name.'ADmobile';
        $Forname = $req->name;
        $data->for = 'User';
        $data->path = 'features/'.$name.'';
        $data->routes = '

use App\Http\Controllers\Features\\'.$name.'Controller;

// For Pages --------- admin & user & view & add & edit & manage
Route::middleware(\'page-cache\')->get(\'admin/'.$name.'\', ['.$name.'Controller::class, \'index_admin\'])->middleware(\'admin\');
Route::middleware(\'page-cache\')->get(\''.$name.'/index/{lang}\', ['.$name.'Controller::class, \'index_user\']);    
Route::middleware(\'page-cache\')->get(\''.$name.'/view/{id}/{lang}\', ['.$name.'Controller::class, \'view\']);   
Route::middleware(\'page-cache\')->get(\''.$name.'/add/{lang}\', ['.$name.'Controller::class, \'add\']);   
Route::middleware(\'page-cache\')->get(\''.$name.'/edit/{id}/{lang}\', ['.$name.'Controller::class, \'edit\']);
Route::middleware(\'page-cache\')->get(\''.$name.'/manage/{lang}\', ['.$name.'Controller::class, \'manage\']);

// For Data --------- add & update & delete & status
Route::post(\'/add/'.$name.'\', ['.$name.'Controller::class, \''.$name.'_add\'])->name(\''.$name.'-add\');
Route::post(\'/update/'.$name.'/{id}\', ['.$name.'Controller::class, \''.$name.'_update\']);
Route::get(\'/'.$name.'/delete/{id}\', ['.$name.'Controller::class, \''.$name.'_delete\']);
Route::post(\'/change/status/'.$name.'/{id}\', ['.$name.'Controller::class, \''.$name.'_status\']);

//Other --------- share & save & like & comment & download & report
Route::post(\'/'.$name.'/share\', ['.$name.'Controller::class, \''.$name.'_share\']);
Route::post(\'/'.$name.'/save\', ['.$name.'Controller::class, \''.$name.'_save\']);
Route::post(\'/'.$name.'/like\', ['.$name.'Controller::class, \''.$name.'_like\']);
Route::post(\'/'.$name.'/comment\', ['.$name.'Controller::class, \''.$name.'_comment\']);
Route::post(\'/'.$name.'/download\', ['.$name.'Controller::class, \''.$name.'_download\']);
Route::post(\'/'.$name.'/report\', ['.$name.'Controller::class, \''.$name.'_report\']);
';

        Schema::create(''.$name.'', function ($table){
            $table->increments('id');
            $table->text('status')->default('Active');
            $table->text('local')->default('en');
            $table->timestamps();
             
        });


        Schema::table('general', function (Blueprint $table) use ($newColumnType, $Forname)         {
            $table->$newColumnType($Forname)->nullable()->default('Active');
        });


       $pages = [
        ['name'=>'add', 'path'=>''.$name.'/add', 'route'=>''.$name.'', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],
        ['name'=>'edit', 'path'=>''.$name.'/edit', 'route'=>''.$name.'', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],
        ['name'=>'manage', 'path'=>''.$name.'/manage', 'route'=>''.$name.'', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],
        ['name'=>'view', 'path'=>''.$name.'/view', 'route'=>''.$name.'', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],
        ['name'=>'index', 'path'=>''.$name.'/index', 'route'=>''.$name.'', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],
    ];

       PageRoute::insert($pages); 

        Schema::table('languages', function (Blueprint $table) use ($newColumnType, $Adsdesktop, $Adstablet, $Adsmobile)         {
            $table->$newColumnType($Adsdesktop)->nullable()->default('<div class="ads">Advertise</div>'); 
            $table->$newColumnType($Adstablet)->nullable()->default('<div class="ads">Advertise</div>'); 
            $table->$newColumnType($Adsmobile)->nullable()->default('<div class="ads">Advertise</div>');                  
        });

        if($req->has('for')) {$data->for = $req->for;} 

        Storage::disk('admin')->put('/'.$themeAdmin.'/features/'.$name.'.blade.php', '@extends(\'themes.admin.default.index\') 
@section(\'content\') 
<!--add-->
@Include(\'themes.admin.default._Include._add\')
<!--title - head-->
@Include(\'themes.admin.default._Include._title\')
@if (env(\'APP_ENV\')=="local")
  @Include(\'themes.admin.default._Include._add-new\')
  @Include(\'themes.admin.default._Include._codes\')
  @Include(\'themes.admin.default._Include._documentation\')
@endif
<div class="card-box mb-30"><br>
    <div class="pb-20">
        <div class="tab">
            <div class="row clearfix">

                <div class="col-md-2 col-sm-12">
                    <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                        @foreach($langs as $lang) <!--languages-->
                        <li class="nav-item">
                            <a class="nav-link b-up" data-toggle="tab" href="#to-{{$lang->id}}" role="tab" aria-selected="false"><i class="icon-copy fa fa-language" aria-hidden="true"></i> {{$lang->name}}</a>
                        </li>
                        @endforeach <!--end languages-->
                    </ul> 
                </div>

                <div class="col-md-10 col-sm-12">
                    <div class="tab-content">
                        @foreach($langs as $lang) <!--languages-->
                            <div class="tab-pane fade" id="to-{{$lang->id}}" role="tabpanel">
                                <div class="pd-20">

                                  <table class="table hover multiple-select-row data-table-export nowrap"> <!--table-->
                                        <thead>
                                          <tr>
                                            <th>{{ __(\'AA.ID\')}}</th> <!--id -->

                                            @foreach($cruds as $route) <!--cards - form -->
                                              @if($route->route==$rout)
                                                  <th>{{$route->name}}</th>
                                              @endif
                                            @endforeach <!--end cards - form -->

                                            <th>{{ __(\'AA.Added\')}}</th> <!--Added -->
                                            <th>{{ __(\'AA.Update\')}}</th> <!--Update -->
                                            <th class="datatable-nosort">{{ __(\'AA.Actions\')}}</th> <!--Actions -->
                                          </tr>
                                        </thead>

                                        <tbody>
      
                                          @foreach($'.$name.'s as $get) <!--'.$name.'-->
                                            @if($get->local==$lang->language)
                                              <tr>          
                                                  <td {!!$tooltip!!}"{{__(\'AA.ID\')}}">{{$get->id}}</td>  <!--id -->

                                                  @foreach($cruds as $data) <!--cards - form -->
                                                    @if($data->route==$rout)
                                                        <?php $fdata=$data->name; ?>
                                                        <td {!!$tooltip!!}"{{$data->name}}">
                                                          @if($data->file=="Yes")
                                                           <img src="{{(env(\'APP_URL\'))}}/upload/'.$name.'/{{$get->$fdata}}" border=3 height=100 width=100></img>
                                                          @elseif($data->user_id=="Yes")
                                                            @if($get->user) {{$get->user->username}} @endif
                                                          @else
                                                            {{$get->$fdata}}
                                                          @endif
                                                        </td>   
                                                    @endif
                                                  @endforeach <!--end cards - form -->
                                                  
                                                  <!--created at -->
                                                  <td {!!$tooltip!!}"{{__(\'AA.Added date\')}}">{{$get->created_at->ago()}}</td>

                                                  <!--updated at -->
                                                  <td {!!$tooltip!!}"{{__(\'AA.Date of last update\')}}">{{$get->updated_at->ago()}}</td>
                                                  @if(Auth::user()->role=="Admin")
                                                  <!--Delete -->
                                                  <td {!!$tooltip!!}"{{__(\'AA.Delete\')}}"><button type="button" class="btn btn-danger b-up b-3donclick b-3d=" onclick="location.href=\'{{(env(\'APP_URL\'))}}/'.$name.'/delete/{{$get->id}}\';"><i class="icon-copy fa fa-trash" aria-hidden="true"></i></button></td>
                                                  @endif
                                                  
                                              </tr>
                                            @endif
                                          @endforeach <!--end '.$name.'-->

                                       </tbody>
                                  </table> <!--end table-->
                       
                                </div>
                            </div>
                        @endforeach <!--end languages-->
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection');

        Storage::disk('user')->put('/'.$themeUser.'/'.$name.'/index.blade.php', '@extends(\'themes.user.default.layouts.app\') 
@section(\'content\')
<div class="main-container">
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{(env(\'APP_URL\'))}}/themes/user/default/images/banner-img.png" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
            {{ __(\'AA.Nice !\') }} 👏 <div class="weight-600 font-30 text-blue">{{$titles}} {{ __(\'AA.Ready\') }}</div>
            </h4> 
            <p class="font-18 max-width-600">
            </p> 
        </div>
    </div>
</div>
    <div class="col-lg-12 col-md-12 mb-20">
        <div class="card-box height-100-p pd-20 min-height-200px">
            <div class="text-center">
                <div class="h1 mb-1">{{ __(\'AA.Start creating something beautiful\') }} 👌</div>
                <div class="font-14 weight-500 max-width-200 mx-auto pb-20" data-color="#a6a6a7">
                                {{ __(\'AA.I suggest you documentation ?\') }}
                </div>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.documentation\')}}</a>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.CRUD\')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection');

        Storage::disk('user')->put('/'.$themeUser.'/'.$name.'/manage.blade.php', '@extends(\'themes.user.default.layouts.app\') 
@section(\'content\')
<div class="main-container">
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{(env(\'APP_URL\'))}}/themes/user/default/images/banner-img.png" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
            {{ __(\'AA.Nice !\') }} 👏 <div class="weight-600 font-30 text-blue">{{$titles}} {{ __(\'AA.Ready\') }}</div>
            </h4> 
            <p class="font-18 max-width-600">
            </p> 
        </div>
    </div>
</div>
    <div class="col-lg-12 col-md-12 mb-20">
        <div class="card-box height-100-p pd-20 min-height-200px">
            <div class="text-center">
                <div class="h1 mb-1">{{ __(\'AA.Start creating something beautiful\') }} 👌</div>
                <div class="font-14 weight-500 max-width-200 mx-auto pb-20" data-color="#a6a6a7">
                                {{ __(\'AA.I suggest you documentation ?\') }}
                </div>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.documentation\')}}</a>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.CRUD\')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection');


        Storage::disk('user')->put('/'.$themeUser.'/'.$name.'/view.blade.php', '@extends(\'themes.user.default.layouts.app\') 
@section(\'content\')
<div class="main-container">
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{(env(\'APP_URL\'))}}/themes/user/default/images/banner-img.png" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
            {{ __(\'AA.Nice !\') }} 👏 <div class="weight-600 font-30 text-blue">{{$titles}} {{ __(\'AA.Ready\') }}</div>
            </h4> 
            <p class="font-18 max-width-600">
            </p> 
        </div>
    </div>
</div>
    <div class="col-lg-12 col-md-12 mb-20">
        <div class="card-box height-100-p pd-20 min-height-200px">
            <div class="text-center">
                <div class="h1 mb-1">{{ __(\'AA.Start creating something beautiful\') }} 👌</div>
                <div class="font-14 weight-500 max-width-200 mx-auto pb-20" data-color="#a6a6a7">
                                {{ __(\'AA.I suggest you documentation ?\') }}
                </div>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.documentation\')}}</a>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.CRUD\')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection');

        Storage::disk('user')->put('/'.$themeUser.'/'.$name.'/add.blade.php', '@extends(\'themes.user.default.layouts.app\') 
@section(\'content\')
<div class="main-container">
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{(env(\'APP_URL\'))}}/themes/user/default/images/banner-img.png" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
            {{ __(\'AA.Nice !\') }} 👏 <div class="weight-600 font-30 text-blue">{{$titles}} {{ __(\'AA.Ready\') }}</div>
            </h4> 
            <p class="font-18 max-width-600">
            </p> 
        </div>
    </div>
</div>
    <div class="col-lg-12 col-md-12 mb-20">
        <div class="card-box height-100-p pd-20 min-height-200px">
            <div class="text-center">
                <div class="h1 mb-1">{{ __(\'AA.Start creating something beautiful\') }} 👌</div>
                <div class="font-14 weight-500 max-width-200 mx-auto pb-20" data-color="#a6a6a7">
                                {{ __(\'AA.I suggest you documentation ?\') }}
                </div>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.documentation\')}}</a>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.CRUD\')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection');

        Storage::disk('user')->put('/'.$themeUser.'/'.$name.'/edit.blade.php', '@extends(\'themes.user.default.layouts.app\') 
@section(\'content\')
<div class="main-container">
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{(env(\'APP_URL\'))}}/themes/user/default/images/banner-img.png" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
            {{ __(\'AA.Nice !\') }} 👏 <div class="weight-600 font-30 text-blue">{{$titles}} {{ __(\'AA.Ready\') }}</div>
            </h4> 
            <p class="font-18 max-width-600">
            </p> 
        </div>
    </div>
</div>
    <div class="col-lg-12 col-md-12 mb-20">
        <div class="card-box height-100-p pd-20 min-height-200px">
            <div class="text-center">
                <div class="h1 mb-1">{{ __(\'AA.Start creating something beautiful\') }} 👌</div>
                <div class="font-14 weight-500 max-width-200 mx-auto pb-20" data-color="#a6a6a7">
                                {{ __(\'AA.I suggest you documentation ?\') }}
                </div>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.documentation\')}}</a>
                <a href="{{(env(\'APP_URL\'))}}/admin/'.$name.'" class="btn btn-primary btn-lg">{{ __(\'AA.CRUD\')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection');


        Storage::disk('database')->put('create_'.$name.'_table.php', '<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create'.$name.'Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(\''.$name.'\', function (Blueprint $table) {
            $table->id();
            $table->text(\'status\');
            $table->text(\'local\');

            //here codes

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(\''.$name.'\');
    }
}');


        Storage::disk('controller')->put(''.$name.'Controller.php', '<?php
namespace App\Http\Controllers\Features;
use App\Models\\'.$name.';
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\Models\Share;
use App\Models\Save;
use App\Models\Report;
use App\Models\Like;
use App\Models\Download;
use App\Models\Comment;

class '.$name.'Controller extends Controller
{ 

    //----------------------For index admin
    function index_admin(){ 
        $data[\''.$name.'s\'] = '.$name.'::all();
        return view(\'path/admin\',$data);
    }
    //----------------------End For index admin



    //----------------------For index user
    function index_user(){ 
        $data[\''.$name.'s\'] = '.$name.'::all();
        return view(\'path/user\',$data);
    }
    //----------------------End For index user



    //----------------------For view page
     function view($id) {
        $data = '.$name.'::find($id); 
        

        return view(\'path/user\',$data);
    }
    //----------------------End For view page



    //----------------------For add page
     function add() {
        return view(\'path/user\');
    }
    //----------------------End For add page



    //----------------------For edit page
     function edit($id) {
        $data = '.$name.'::find($id); 
        

        return view(\'path/user\',$data);
    }
    //----------------------End For edit page



    //----------------------For manage page
    function manage(){ 
        $data[\''.$name.'s\'] = '.$name.'::all();
        return view(\'path/user\',$data);
    }
    //----------------------End For manage page



    //----------------------For add new
    function '.$name.'_add(Request $req)
    {
        $data = new '.$name.';
         $data->local = $req->local;
        //here codes

        $data->save();
        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
        return back(); 
    } 
    //----------------------End For add new



    //----------------------For edit
    function '.$name.'_update(Request $req)
    {
        $data = '.$name.'::find($req->id);
         $data->local = $req->local;
        
        //here codes

        $data->save();
        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
        return back(); 
    } 
    //----------------------End For edit



    //----------------------For delete
    function '.$name.'_delete($id)
    {
        $data='.$name.'::find($id);
        $data->delete();
        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
        return back();
    }
    //----------------------End For delete



    //----------------------For change status
    public function '.$name.'_status(Request $request)
        {
        $item_id = '.$name.'::findOrFail($request->item_id);
        $item_id->status = $request->status;
        $item_id->save();

        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
    }
    //----------------------End For change status



    //----------------------For Share
    public function '.$name.'_share(Request $req)
    {
        $data = new Share;
        $data->'.$name.'_id = $req->'.$name.'_id;
        $data->user_id = Auth::id();
        $data->save();
        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
        return back();
    }
    //----------------------End For Share



    //----------------------For Save
    public function '.$name.'_save(Request $req)
    {
        $data = new Save;
        $data->'.$name.'_id = $req->'.$name.'_id;
        $data->user_id = Auth::id();
        $data->save();
        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
        return back();
    }
    //----------------------End For Save



    //----------------------For Like
    public function '.$name.'_like(Request $req)
    {
        $data = new Like;
        $data->'.$name.'_id = $req->'.$name.'_id;
        $data->user_id = Auth::id();
        $data->save();
        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
        return back();
    }
    //----------------------End For Like


    //----------------------For Download
    public function '.$name.'_download(Request $req)
    {
        $data = new Download;
        $data->'.$name.'_id = $req->'.$name.'_id;
        $data->user_id = Auth::id();
        $data->save();
        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
        return back();
    }
    //----------------------End For Download


    //----------------------For Report
    public function '.$name.'_report(Request $req)
    {
        $data = new Report;
        $data->'.$name.'_id = $req->'.$name.'_id;
        $data->user_id = Auth::id();
        $data->save();
        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
        return back();
    }
    //----------------------End For Report 



    //----------------------For Comment
    public function '.$name.'_comment(Request $req)
    {
        $data = new Comment;
        $data->comment = $req->comment;        
        $data->'.$name.'_id = $req->'.$name.'_id;
        $data->user_id = Auth::id();
        $data->save();
        toastr()->success(\'\', \'\'. __(\'AA.successful\') .\'\', [\'timeOut\' => 3000]);
        return back();
    }
    //----------------------End For Comment 


}');



        Storage::disk('model')->put(''.$name.'.php', '<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class '.$name.' extends Eloquent  {

    protected $table = \''.$name.'\';
    

    protected $fillable = [
        \'local\',
        //here codes                         
    ];
    

    //----------- For user 
    public function user()
    {
        return $this->belongsTo(\'App\Models\User\');
    }
    //----------- End For user 


    //----------- For likes 
    public function likes()
    {
        return $this->hasMany(\'App\Models\Like\');
    }
    //----------- End For likes


    //----------- For shares 
    public function shares()
    {
        return $this->hasMany(\'App\Models\Share\');
    }
    //----------- End For shares


    //----------- For comments 
    public function comments()
    {
        return $this->hasMany(\'App\Models\Comment\');
    }
    //----------- End For comments 


    //----------- For downloads 
    public function downloads()
    {
        return $this->hasMany(\'App\Models\Download\');
    }
    //----------- End For downloads 


    //----------- For reports 
    public function reports()
    {
        return $this->hasMany(\'App\Models\Report\');
    }
    //----------- End For reports


    //----------- For saves 
    public function saves()
    {
        return $this->hasMany(\'App\Models\Save\');
    }  
    //----------- End For saves


}');


        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();

     }
    // for delete 



   //delete route
    function route_delete($id)
    {
        $data=Route::find($id);
        $data->delete();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
    }

}