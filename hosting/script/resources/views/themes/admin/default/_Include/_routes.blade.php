<div class="modal fade bs-example-modal-lg" id="Routes-{{$get->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
            <h6><pre class="coder">{{$get->routes}}</pre></h6>
            <a class="btn btn-success b-up b-3d" href="{{(env('APP_URL'))}}/admin/to_routes" role="button">{{ __('AA.Pages')}}</a>
            </div>
        </div>
    </div>
</div>