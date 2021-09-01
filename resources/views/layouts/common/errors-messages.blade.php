@if($errors->all())
    <div class="errors-messages">
        <ul>
            @foreach($errors->all() as $message)
                <li class="alert alert-danger alert-dismissible">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </li>
            @endforeach
        </ul>
    </div>
@elseif(session()->has('message'))
    <div class="errors-messages">
        <ul>
            <li class="alert alert-success alert-dismissible">
                {!! session()->get('message') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </li>
        </ul>
    </div>
@elseif(session()->has('success'))
    <div class="errors-messages">
        <ul>
            <li class="alert alert-success alert-dismissible">
                {!! session()->get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </li>
        </ul>
    </div>
@elseif(session()->has('error'))
    <div class="errors-messages">
        <ul>
            <li class="alert alert-danger alert-dismissible">
                {!! session()->get('error') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </li>
        </ul>
    </div>
@elseif(session()->has('resent'))
    <div class="errors-messages">
        <ul>
            <li class="alert alert-success alert-dismissible">
                {{ __('A fresh verification link has been sent to your email address.') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </li>
        </ul>
    </div>

@endif