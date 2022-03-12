@if($errors->all())
    <div className="errors-messages">
        <ul>
            @foreach($errors->all() as $message)
                <li className="alert alert-danger alert-dismissible">
                    {{ $message }}
                    <button type="button" className="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </li>
            @endforeach
        </ul>
    </div>
@elseif(session()->has('message'))
    <div className="errors-messages">
        <ul>
            <li className="alert alert-success alert-dismissible">
                {!! session()->get('message') !!}
                <button type="button" className="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </li>
        </ul>
    </div>
@elseif(session()->has('success'))
    <div className="errors-messages">
        <ul>
            <li className="alert alert-success alert-dismissible">
                {!! session()->get('success') !!}
                <button type="button" className="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </li>
        </ul>
    </div>
@elseif(session()->has('error'))
    <div className="errors-messages">
        <ul>
            <li className="alert alert-danger alert-dismissible">
                {!! session()->get('error') !!}
                <button type="button" className="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </li>
        </ul>
    </div>
@elseif(session()->has('resent'))
    <div className="errors-messages">
        <ul>
            <li className="alert alert-success alert-dismissible">
                {{ __('A fresh verification link has been sent to your email address.') }}
                <button type="button" className="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </li>
        </ul>
    </div>

@endif