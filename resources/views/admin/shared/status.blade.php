@if($status == 1)
        <span style="display: none; visibility: hidden">1</span>
        <label for="" class="label label-success label-sm">
            <i class="fa fa-check icon-fff"></i>
        </label>
@elseif($status == 0)
    <span style="display: none; visibility: hidden">0</span>
    <label for="" class="label label-danger label-sm">
        <i class="fa fa-times icon-fff"></i>
    </label>
    {{-- <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button> --}}
@endif