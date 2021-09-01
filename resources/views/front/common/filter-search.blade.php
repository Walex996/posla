<form action="" method="get">
    <div class="filter-section">
        <div class="filter-title">
            Currently Showing
        </div>
        <div class="filter-body pr-0 pl-0">
            <div class="mh-150 list-icon-text filter-body-list">
                <a href="/search" class="active">
                    <div>
                        <span class="fa fa-angle-right"></span>
                    </div>
                    <div>
                        @php 
                            $total = 0;
                            if(isset($deals_total)){
                                $total = $total + $deals_total;
                            }
                            if(isset($projects_total)){
                                $total = $total + $projects_total;
                            }
                            if(isset($users_total)){
                                $total = $total + $users_total;
                            }
                        @endphp
                        ({{$total}} results found)
                    </div>
                </a>
                @if(isset($deals_total) && $deals->isNotEmpty())
                    <a href="{{ route('search.deals')}}?q={{request('q')}}">
                        <div>
                            <span class="fa fa-angle-right"></span>
                        </div>
                        <div>
                            Deals only ({{$deals_total}})
                        </div>
                    </a>
                @endif
                @if(isset($projects_total) && $projects->isNotEmpty())
                    <a href="{{ route('search.projects')}}?q={{request('q')}}">
                        <div>
                            <span class="fa fa-angle-right"></span>
                        </div>
                        <div>
                            Projects only ({{$projects_total}})
                        </div>
                    </a>
                @endif
                @if(isset($users_total) && $users->isNotEmpty())
                    <a href="/search/freelancers">
                        <div>
                            <span class="fa fa-angle-right"></span>
                        </div>
                        <div>
                            Freelancers only ({{$users_total}})
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>

</form>