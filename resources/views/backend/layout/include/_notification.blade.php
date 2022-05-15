@switch(true)
    @case(session()->has('notification_success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('notification_success') }}</strong>
            <button type="button" class="btn-close h-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @break

    @case(session()->has('notification_warning'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('notification_warning') }}</strong>
            <button type="button" class="btn-close h-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @break

    @case(session()->has('notification_error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('notification_error') }}</strong>
            <button type="button" class="btn-close h-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @break

    @case(session()->has('notification_warning_login_multi_device'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('notification_warning_login_multi_device') }}</strong>
            <button type="button" class="btn-close h-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @break
@endswitch
