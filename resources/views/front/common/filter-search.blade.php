<form action="" method="get">

    <div className="filter-section">
        <div className="filter-title">
            Currently Showing
        </div>
        <div className="filter-body pr-0 pl-0">
            <div className="mh-150 list-icon-text filter-body-list">
                <Link to="/search" className="active">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        All search results (30)
                    </div>
                </Link>
                <Link to="/search/deals">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Deals only (10)
                    </div>
                </Link>
                <Link to="/search/projects">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Projects only (10)
                    </div>
                </Link>
                <Link to="/search/freelancers">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Freelancers only (10)
                    </div>
                </Link>
            </div>
        </div>
    </div>

</form>