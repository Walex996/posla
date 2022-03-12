{/*<div className="section mb-0 account-sidebar" style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;"> */}
    <div className="section mb-0 account-sidebar">

    <div className="account-sidebar-info text-center">
        <div>
            <img src={user}alt="User name" className="dp-cover" />
        </div>
        <div className="font-bold">
            Olawale Lawal
        </div>
        <div className="text-fade">
            short description short description short description short description
        </div>
        <div>
            <div className="rating-box mt-1.5">
                <div>
                    <div></div>
                    <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                </div>
                <div>
                    <span className="font-bold text-orange">
                        5.0
                    </span>
                    <span className="text-fade">
                        (1809 reviews)
                    </span>
                </div>
            </div>
        </div>
        <div className="text-center mt-1.5">
            <Link to="/account/profile/edit" className="btn btn-transparent-grey btn-sm mt-1.5">
                Edit Profile
            </Link>
            <Link to="" className="btn btn-transparent-grey btn-sm mt-1.5">
                View As Guest
            </Link>
        </div>
    </div>
</div>

{/*if vacation mode is on */}

<div className="section p-0 mt-0 mb-0 bg-red overflow-hidden" style="border-top-left-radius: 0; border-top-right-radius: 0;">
    <Link to="/account/settings/vacation-mode" className="pt-1.5 pb-1.5 pl-2.5 pr-2.5 d-block text-fff text-center">
        Vacation Mode [On]
    </Link>
</div>

{/*end if */}

<div className="section p-0 mt-1.5 account-sidebar-links overflow-hidden">
    <div>
        <Link to="/account/dashboard" className="account-sidebar-dashboard">
            Dashboard
        </Link>
    </div>
    <div>
        <Link to="/account/profile" className="account-sidebar-profile">
            Profile
        </Link>
    </div>
    <div>
        <Link to="/account/orders" className="account-sidebar-orders">
            My Orders
        </Link>
    </div>
    <div>
        <Link to="/account/deals" className="account-sidebar-deals">
            My Deals
        </Link>
    </div>
    <div>
        <Link to="/account/projects" className="account-sidebar-projects">
            My Projects
        </Link>
    </div>
    <div>
        <Link to="/account/project-bids" className="account-sidebar-project-bids">
            My Project Bids
        </Link>
    </div>
    <div>
        <Link to="/account/favourites" className="account-sidebar-favourites">
            Favourites
        </Link>
    </div>
    <div>
        <Link to="/messages" className="account-sidebar-msg">
            Messages
        </Link>
    </div>
    <div>
        <Link to="/account/earnings-withdrawals" className="account-sidebar-earnings-withdrawals">
            Earnings & Withdrawals
        </Link>
    </div>
    <div>
        <Link to="/account/wallet" className="account-sidebar-wallet">
            My Wallet
        </Link>
    </div>
    <div>
        <Link to="/account/reviews" className="account-sidebar-reviews">
            My Reviews
        </Link>
    </div>
    <div>
        <Link to="/account/settings" className="account-sidebar-settings">
            Account Settings
        </Link>
    </div>
    <div>
        <Link to="/">
            Logout
        </Link>
    </div>
</div>




