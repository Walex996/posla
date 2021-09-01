<ul class="nav nav-tabs posla-tabs posla-tabs-5 nav-tabs-style-1 nav-tabs-style-1-lg-responsive">
    
    <li class="nav-item">
        @if(!isset($deal))
            <a @if($active > 1) href="{{route('deals.create.rule')}}" @endif class="nav-link @if($active == 1) active @endif">
        @else
            <a @if($active > 1) href="{{route('deal.edit.rule', $deal->id)}}" @endif class="nav-link @if($active == 1) active @endif">
        @endif
            <div class="font-20 font-bold">
                1
            </div>
            <div class="text-fade line-height-mini mb-5">
                Rules
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a @if($active > 2) href="{{route('deal.edit.info', $deal->id)}}" @endif class="nav-link @if($active == 2) active @endif">
            <div class="font-20 font-bold">
                2
            </div>
            <div class="text-fade line-height-mini mb-5">
                Info
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a @if($active > 3) href="{{route('deal.edit.pricing', $deal->id)}}" @endif class="nav-link @if($active == 3) active @endif">
            <div class="font-20 font-bold">
                3
            </div>
            <div class="text-fade line-height-mini mb-5">
                Pricing
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a @if($active > 4) href="{{route('deal.edit.requirement', $deal->id)}}" @endif class="nav-link @if($active == 4) active @endif">
            <div class="font-20 font-bold">
                4
            </div>
            <div class="text-fade line-height-mini mb-5">
                Requirements
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a @if($active > 5) href="/account/deals/edit/1234/publish" @endif class="nav-link @if($active == 5) active @endif">
            <div class="font-20 font-bold">
                5
            </div>
            <div class="text-fade line-height-mini mb-5">
                Publish
            </div>
        </a>
    </li>
</ul>