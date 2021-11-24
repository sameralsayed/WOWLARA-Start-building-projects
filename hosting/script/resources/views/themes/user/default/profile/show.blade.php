<x-app-layout>
    <x-slot name="header">
        <h2 style="margin-top:60px" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-30" style="margin-bottom:30px">
                        <div class="pd-20 card-box">
                            <h3 class="h4 text-blue">{{ __('AA.Hi') }} {{ Auth::user()->name }}</h3>
                            <div class="tab">
                                <div class="row clearfix">
                                    <div class="col-md-3 col-sm-12">
                                        <ul class="nav flex-column nav-pills vtabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active user-l" style="display: inline-flex;" data-toggle="tab" href="#updates" role="tab" aria-selected="true"><i class="icon-copy dw dw-bolt user-prof"></i> <p class="user-t">{{ __('AA.Latest Updates') }}</p></a>
                                            </li>
                                            @foreach($prof_list as $title=>$icon)
                                            @if ($get->$title=="Active")
                                            <li class="nav-item">
                                                <a class="nav-link user-l" style="display: inline-flex;" data-toggle="tab" href="#{{$icon}}" role="tab" aria-selected="true"><i class="icon-copy dw dw-{{$icon}} user-prof"></i> <p class="user-t">{{ __('AA.'.$title.'') }}</p></a>
                                            </li>
                                            @endif
                                            @endforeach
                                            <li class="nav-item">
                                                <a class="nav-link user-l" style="display: inline-flex;" data-toggle="tab" href="#design" role="tab" aria-selected="true"><i class="icon-copy dw dw-slideshow user-prof"></i> <p class="user-t">{{ __('AA.design') }}</p></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link user-l" style="display: inline-flex;" href="{{(env('APP_URL'))}}/help/{{ Auth::user()->local }}"> <p class="user-t">{{ __('AA.Help Page') }}</p></a>
                                            </li> 
                                        </ul>
                                    </div>
                                    <div class="col-md-9 col-sm-12">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="icon_latest_updates" role="tabpanel">
                                                @Include('themes.user.default.profile.updates')
                                            </div>
                                            <div class="tab-pane fade" id="search" role="tabpanel">
                                                @Include('themes.user.default.profile.feedbacks')
                                            </div>
                                            <div class="tab-pane fade" id="calendar-2" role="tabpanel">
                                                @Include('themes.user.default.profile.verification')
                                            </div>
                                            <div class="tab-pane fade" id="information" role="tabpanel">
                                                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                                    @livewire('profile.update-profile-information-form')
                                                @endif
                                            </div>
                                            <div class="tab-pane fade" id="key3" role="tabpanel">
                                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                                    @livewire('profile.update-password-form')
                                                @endif
                                            </div>
                                            <div class="tab-pane fade" id="lock" role="tabpanel">
                                                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                                    @livewire('profile.two-factor-authentication-form')
                                                @endif
                                            </div>
                                            <div class="tab-pane fade" id="ecology" role="tabpanel">
                                                    @livewire('profile.logout-other-browser-sessions-form')
                                            </div>
                                            <div class="tab-pane fade" id="trash" role="tabpanel">
                                                 @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                                                    @livewire('profile.delete-user-form')
                                                 @endif
                                            </div>
                                            <div class="tab-pane fade" id="design" role="tabpanel">
                                                @Include('themes.user.default.profile.design')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
            </div>
        </div>
</x-app-layout>
