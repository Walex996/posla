{{-- <a href="/user/abcde12345" class="freelancer">
    <div>
        <img src="{{asset('img/app/samples/user.png')}}" alt="Olawale Lawal" class="dp-contain" />
    </div>
    <div>
        <div class="font-bold">
        </div>
        <div class="text-fade font-normal ellipsis-2-lines">
            Frontend Developer, UIUX Designer, Graphics Designer
        </div>
    </div>    
</a> --}}



<a href="/user/abcde12345" class="freelancer">
    <div>
        <img src="{{asset($user->getFirstMediaUrl('profile') ? $user->getFirstMediaUrl('profile') : 'img/app/samples/user.png')}}" alt="{{$user->name}}" class="dp-contain" />
    </div>
    <div>
        <div class="font-bold">
            {{$user->name}}
        </div>
        <div class="text-fade font-normal ellipsis-2-lines">
            {{-- this is supposed to be short description, not skillsets --}}
            @foreach ($user->skillset as $skill)
                {{$skill}}
            @endforeach
            {{-- Frontend Developer, UIUX Designer, Graphics Designer --}}
        </div>
    </div>    
</a>

