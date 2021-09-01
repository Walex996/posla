<form action="" method="get">
    <div class="filter-section">
        <div class="filter-title">
            Select Category
        </div>
        <div class="filter-body pr-0 pl-0">
            <div class="mh-150 list-icon-text filter-body-list">
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Main Category
                    </div>
                </a>
                <a href="/category/deals/category1" class="active">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
                <a href="/category/deals/category1">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        Sub Category 1
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="filter-section">
        <div class="filter-title">
            Budget ($)
        </div>
        <div class="filter-body">
        
            <div class="posla-price-slider p-10 pt-20 pb-20">
                <div class="posla-price-slider-slide">
                    <div id="slider-range" class="price-filter-range posla-slider-range" name="rangeInput"></div>
                </div>
                <div class="posla-price-slider-input">
                    <input type="number" min="0" max="9900" oninput="validity.valid||(value='0');" id="min_price" class="posla-slider-min-input price-range-field" />
                    <input type="number" min="0" max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="posla-slider-max-input price-range-field" />
                </div>
                {{-- <button class="price-range-search" id="price-range-submit">Search</button> --}}
                {{-- <div id="searchResults" class="search-results-block"></div> --}}
            </div>

        </div>
    </div>

    <div class="filter-section">
        <div class="filter-title">
            Ratings
        </div>
        <div class="filter-body pt-10 pb-10">
            <label class="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="far fa-star"></span>
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="" id="">
                <span class="fas fa-star"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
            </label>
        </div>
    </div>

    <div>
        <button class="btn btn-orange btn-sm mr-5 mb-5">
            Apply filter
        </button>
        <button class="btn btn-transparent-black btn-sm mb-5">
            Clear filter
        </button>
    </div>
</form>