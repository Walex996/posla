@if (isset($project))
    <a href="{{route('front.project.detail', $project->id)}}" class="project">
        
        <div>
            <div>
                <span class="fa fa-angle-right icon-50"></span>
            </div>
            <div class="">
                <div class="font-bold">
                    {{$project->title}}
                </div>

                <div class="text-fade ellipsis-2-lines mt-5">
                    {{$project->description}}
                </div>
            </div>
        </div>

        <div class="mt-5 ellipsis">
            <div class="project-price">
                ${{$project->budget}}
            </div>
            <div class="item-labels">
                <div class="item-labels-new">
                    New
                </div>
                <div class="item-labels-featured">
                    Featured
                </div>
                <div class="item-labels-proposals">
                    18 proposals
                </div>
            </div>
        </div>

        <div class="item-labels item-labels-tags-all ellipsis">
            <div class="item-labels-prefix">
                Tags & Skills:
            </div>
            @foreach ($project->tags as $tag)
                <div class="item-labels-tags">
                    {{$tag}}
                </div>
            @endforeach
        </div>

    </a>
@else 
    <a href="#" class="project">
        
        <div>
            <div>
                <span class="fa fa-angle-right icon-50"></span>
            </div>
            <div class="">
                <div class="font-bold">
                    $project->title
                </div>

                <div class="text-fade ellipsis-2-lines mt-5">
                    $project->description
                </div>
            </div>
        </div>

        <div class="mt-5 ellipsis">
            <div class="project-price">
                $$project->budget
            </div>
            <div class="item-labels">
                <div class="item-labels-new">
                    New
                </div>
                <div class="item-labels-featured">
                    Featured
                </div>
                <div class="item-labels-proposals">
                    18 proposals
                </div>
            </div>
        </div>

        <div class="item-labels item-labels-tags-all ellipsis">
            <div class="item-labels-prefix">
                Tags & Skills:
            </div>
            {{-- @foreach ($project->tags as $tag) --}}
                <div class="item-labels-tags">
                    $tag
                </div>
            {{-- @endforeach --}}
        </div>

    </a>
@endif

