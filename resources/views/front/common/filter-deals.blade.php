<form action="" method="get">
    <div className="filter-section">
        <div className="filter-title">
            Select Category
        </div>
        <div className="filter-body pr-0 pl-0">
            <div className="mh-150 list-icon-text filter-body-list">
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Main Category
                    </div>
                </Link>
                <Link to="/category/deals/category1" className="active">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
                <Link to="/category/deals/category1">
                    <div>
                        <span className="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </Link>
            </div>
        </div>
    </div>

    <div className="filter-section">
        <div className="filter-title">
            Budget ($)
        </div>
        <div className="filter-body">
        
            <div className="posla-price-slider p-2.5 pt-5 pb-5">
                <div className="posla-price-slider-slide">
                    <div id="slider-range" className="price-filter-range posla-slider-range" name="rangeInput"></div>
                </div>
                <div className="posla-price-slider-input">
                    <input type="number" min="0" max="9900" oninput="validity.valid||(value='0');" id="min_price" className="posla-slider-min-input price-range-field" />
                    <input type="number" min="0" max="10000" oninput="validity.valid||(value='10000');" id="max_price" className="posla-slider-max-input price-range-field" />
                </div>
                {{-- <button className="price-range-search" id="price-range-submit">Search</button> --}}
                {{-- <div id="searchResults" className="search-results-block"></div> --}}
            </div>

        </div>
    </div>

    <div className="filter-section">
        <div className="filter-title">
            Ratings
        </div>
        <div className="filter-body pt-2.5 pb-10">
            <label className="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
            </label>
            <label className="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
                <span className="far fa-star"></span>
            </label>
            <label className="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
                <span className="far fa-star"></span>
                <span className="far fa-star"></span>
            </label>
            <label className="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span className="fas fa-star"></span>
                <span className="fas fa-star"></span>
                <span className="far fa-star"></span>
                <span className="far fa-star"></span>
                <span className="far fa-star"></span>
            </label>
            <label className="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span className="fas fa-star"></span>
                <span className="far fa-star"></span>
                <span className="far fa-star"></span>
                <span className="far fa-star"></span>
                <span className="far fa-star"></span>
            </label>
        </div>
    </div>

    <div>
        <button className="btn btn-orange btn-sm mr-1.5 mb-1.5">
            Apply filter
        </button>
        <button className="btn btn-transparent-black btn-sm mb-1.5">
            Clear filter
        </button>
    </div>
</form>