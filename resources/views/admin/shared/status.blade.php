@if($status == 1)
        <span style="display: none; visibility: hidden">1</span>
        <label for="" className="label label-success label-sm">
            <i className="fa fa-check icon-fff"></i>
        </label>
@elseif($status == 0)
    <span style="display: none; visibility: hidden">0</span>
    <label for="" className="label label-danger label-sm">
        <i className="fa fa-times icon-fff"></i>
    </label>
    {/*<button type="button" className="btn btn-danger btn-sm"><i className="fa fa-times"></i></button> */}
@endif