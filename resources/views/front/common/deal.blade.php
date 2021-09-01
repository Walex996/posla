@if(isset($deal))
    <a href="{{route('front.deal.detail', $deal->id)}}" class="deal">
        
        <div class="deal-info-top">
            <div>
                <img 
                    src="{{asset($deal->getFirstMediaUrl() ? $deal->getFirstMediaUrl() : 'img/app/samples/deal-1.png')}}"
                alt="Olawale Lawal" class="dp-cover" />
            </div>
            <div class="">
                <div>
                    <img src="{{asset($deal->owner->getFirstMediaUrl('profile') ? $deal->owner->getFirstMediaUrl('profile') : 'img/app/samples/user.png')}}" alt="Olawale Lawal" class="dp-contain" />
                </div>
                <div class="text-fade font-13 ellipsis">
                    {{$deal->owner->name}}
                </div>
            </div>
            <div class="font-bold ellipsis-2-lines mt-5 pr-10 pl-10" style="min-height: 38px;">
                {{$deal->title}}
            </div>
        </div>
        <div class="mt-10 mr-10 ml-10 ellipsis">
            <div class="project-price">
                <span class="font-size-10 text-fade">Starting At</span>
                ${{$deal->minimumPrice()}}
            </div>
            <div class="item-labels">
                @if($deal->is_new)
                    <div class="item-labels-new">
                        New
                    </div>
                @endif
                @if($deal->boosted)
                    <div class="item-labels-featured">
                        Featured
                    </div>
                @endif
            </div>
        </div>
        <div class="pt-5 bt-1-ddd" style="margin-top: -3px;">
            <div class="mt-0 pl-10 item-labels item-labels-tags-all ellipsis">
                <div class="item-labels-prefix">
                    Tags & Skills:
                </div>
                @foreach ($deal->tags as $tag)
                    <div class="item-labels-tags">
                        {{$tag}}
                    </div>
                @endforeach
            </div>
        </div>
        
    </a>
@else
    <a href="/deal/12345678" class="deal">
        
        <div class="deal-info-top">
            <div>
                <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
            </div>
            <div class="">
                <div>
                    <img src="{{asset('img/app/samples/user.png')}}" alt="Olawale Lawal" class="dp-contain" />
                </div>
                <div class="text-fade font-13 ellipsis">
                    Olawale Lawal
                </div>
            </div>
            <div class="font-bold ellipsis-2-lines mt-5 pr-10 pl-10" style="min-height: 38px;">
                I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
            </div>
        </div>

        <div class="mt-10 mr-10 ml-10 ellipsis">
            <div class="project-price">
                <span class="font-size-10 text-fade">Starting At</span>
                $400
            </div>
            <div class="item-labels">
                <div class="item-labels-new">
                    New
                </div>
                <div class="item-labels-featured">
                    Featured
                </div>
            </div>
        </div>

        <div class="pt-5 bt-1-ddd" style="margin-top: -3px;">
            <div class="mt-0 pl-10 item-labels item-labels-tags-all ellipsis">
                <div class="item-labels-prefix">
                    Tags & Skills:
                </div>
                <div class="item-labels-tags">
                    Mobile App
                </div>
                <div class="item-labels-tags">
                    iOS App
                </div>
                <div class="item-labels-tags">
                    App Store
                </div>
                <div class="item-labels-tags">
                    Swift Language
                </div>
                <div class="item-labels-tags">
                    Objective C
                </div>
            </div>
        </div>
        
    </a>
@endif



