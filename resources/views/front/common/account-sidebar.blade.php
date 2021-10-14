{{-- <div class="section mb-0 account-sidebar" style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;"> --}}
    <div class="section mb-0 account-sidebar">

    <div class="account-sidebar-info text-center">
        <div>
            <img src="{{asset('img/app/samples/user.png')}}"alt="User name" class="dp-cover" />
        </div>
        <div class="font-bold">
            Olawale Laeal
        </div>
        <div class="text-fade">
            short description short description short description short description
        </div>
        <div>
            <div class="rating-box mt-5">
                <div>
                    <div></div>
                    <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                </div>
                <div>
                    <span class="font-bold text-orange">
                        5.0
                    </span>
                    <span class="text-fade">
                        (1809 reviews)
                    </span>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="/account/profile/edit" class="btn btn-transparent-grey btn-sm mt-5">
                Edit Profile
            </a>
            <a href="" class="btn btn-transparent-grey btn-sm mt-5">
                View As Guest
            </a>
        </div>
    </div>
</div>

{{-- if vacation mode is on --}}
{{-- 
<div class="section p-0 mt-0 mb-0 bg-red overflow-hidden" style="border-top-left-radius: 0; border-top-right-radius: 0;">
    <a href="/account/settings/vacation-mode" class="pt-5 pb-5 pl-10 pr-10 d-block text-fff text-center">
        Vacation Mode [On]
    </a>
</div>
--}}
{{-- end if --}}

<div class="section p-0 mt-5 account-sidebar-links overflow-hidden">
    <div>
        <a href="/account/dashboard" class="account-sidebar-dashboard">
            Dashboard
        </a>
    </div>
    <div>
        <a href="/account/profile" class="account-sidebar-profile">
            Profile
        </a>
    </div>
    <div>
        <a href="/account/orders" class="account-sidebar-orders">
            My Orders
        </a>
    </div>
    <div>
        <a href="/account/deals" class="account-sidebar-deals">
            My Deals
        </a>
    </div>
    <div>
        <a href="/account/projects" class="account-sidebar-projects">
            My Projects
        </a>
    </div>
    <div>
        <a href="/account/project-bids" class="account-sidebar-project-bids">
            My Project Bids
        </a>
    </div>
    <div>
        <a href="/account/favourites" class="account-sidebar-favourites">
            Favourites
        </a>
    </div>
    <div>
        <a href="/messages" class="account-sidebar-msg">
            Messages
        </a>
    </div>
    <div>
        <a href="/account/earnings-withdrawals" class="account-sidebar-earnings-withdrawals">
            Earnings & Withdrawals
        </a>
    </div>
    <div>
        <a href="/account/wallet" class="account-sidebar-wallet">
            My Wallet
        </a>
    </div>
    <div>
        <a href="/account/reviews" class="account-sidebar-reviews">
            My Reviews
        </a>
    </div>
    <div>
        <a href="/account/settings" class="account-sidebar-settings">
            Account Settings
        </a>
    </div>
    <div>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>




