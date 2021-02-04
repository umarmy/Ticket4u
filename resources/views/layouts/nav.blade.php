<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/dashboard">
                Home
            </a>
            <a class="navbar-brand" href="#band">
                Band
            </a>
            <a class="navbar-brand" href="#ticket">
                Ticket
            </a>
            <a class="navbar-brand" href="{{ route('member') }}">
                Member
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="material-icons">settings</i> Settings
                </a>
                <div class="dropdown-menu dropdown-with-icons">
                    <a href="#" class="dropdown-item">
                    Profile
                    </a>
                    <div class="dropdown-item" id="custom-item">
                        <form method="POST" action="{{ route('logout') }}"   >
                            @csrf

                            <a :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                    </div>
                    {{-- <a  action="{{ action('AuthenticatedSessionController@destroy') }}" class="dropdown-item">
                        Logout
                    </a> --}}
                </div>
            </li>
        </ul>
        </div>
    </div>
</nav>

