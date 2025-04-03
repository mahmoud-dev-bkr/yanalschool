
    {!! Form::label('file', __('image')) !!} <br>
    @if ($resource->image)
        <img src="{{ asset($resource->image) }}" width="20%" alt="">
    @endif
    <input type="file" name="image" id="file" class="form-control">
    <div class="form-group pt-3">
        <div class="progress" id="progress" style="display: none">
            <div class="progress-bar  progress-bar-striped " role="progressbar"></div>
        </div>
    </div>

