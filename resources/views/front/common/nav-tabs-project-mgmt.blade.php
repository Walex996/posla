<ul class="nav nav-tabs posla-tabs posla-tabs-3 nav-tabs-style-1 nav-tabs-style-1-lg-responsive">
    <li class="nav-item">
        <a @if($active > 1) href="/account/projects/edit/1234/rules" @endif class="nav-link @if($active == 1) active @endif">
            <div class="font-20 font-bold">
                1
            </div>
            <div class="text-fade line-height-mini mb-5">
                Rules
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a @if($active > 2) href="/account/projects/edit/1234/info" @endif class="nav-link @if($active == 2) active @endif">
            <div class="font-20 font-bold">
                2
            </div>
            <div class="text-fade line-height-mini mb-5">
                Info
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a @if($active > 3) href="/account/projects/edit/1234/publish" @endif class="nav-link @if($active == 3) active @endif">
            <div class="font-20 font-bold">
                3
            </div>
            <div class="text-fade line-height-mini mb-5">
                Publish
            </div>
        </a>
    </li>
</ul>