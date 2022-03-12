<ul className="nav nav-tabs posla-tabs posla-tabs-3 nav-tabs-style-1 nav-tabs-style-1-lg-responsive">
    <li className="nav-item">
        <Link @if($active > 1) to="/account/projects/edit/1234/rules" @endif className="nav-link @if($active == 1) active @endif">
            <div className="font-20 font-bold">
                1
            </div>
            <div className="text-fade line-height-mini mb-1.5">
                Rules
            </div>
        </Link>
    </li>
    <li className="nav-item">
        <Link @if($active > 2) to="/account/projects/edit/1234/info" @endif className="nav-link @if($active == 2) active @endif">
            <div className="font-20 font-bold">
                2
            </div>
            <div className="text-fade line-height-mini mb-1.5">
                Info
            </div>
        </Link>
    </li>
    <li className="nav-item">
        <Link @if($active > 3) to="/account/projects/edit/1234/publish" @endif className="nav-link @if($active == 3) active @endif">
            <div className="font-20 font-bold">
                3
            </div>
            <div className="text-fade line-height-mini mb-1.5">
                Publish
            </div>
        </Link>
    </li>
</ul>