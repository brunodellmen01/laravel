<div class="profile-header">
    <div class="row align-items-center">
        <div class="col-auto profile-image">
            <a href="#">
                <img class="rounded-circle" alt="{{Auth::user()->name}}" src="{{ asset('admin/assets/img/user.jpg') }}">
            </a>
        </div>
        <div class="col ml-md-n2 profile-user-info">
            <h4 class="user-name mb-0">{{Auth::user()->name}}</h4>
            <h6 class="text-muted">Administrador</h6>
            <div class="user-Location"><i class="fas fa-map-marker-alt"></i> {{ trans('head.address') }}</div>
            <div class="about-text">
                <p>{{ trans('head.example') }} </p>
            </div>
        </div>
        <div class="col-auto profile-btn">
            <a href="#" class="btn btn-outline-success">
            {{ trans('head.status') }}
            </a>
        </div>
    </div>
</div>
