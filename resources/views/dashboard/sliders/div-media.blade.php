<div class="row">



    <div class="col-md-4 pt-3">
        <div class="form-group">
            <label for="image_1">{{ __('image_1') }}</label> 
            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                <img class=" image-preview-image_1" width="100%"
                    src="{{ asset($resource->image_1 ?? 'assets/img/default.jpg') }}">
            </div>
            <br>
            <label for="image_1"class="btn btn-primary text-white mt-2">
                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
            </label>

            <input type="file" onchange="changeImage(this, 'image_1')" id="image_1"
                class="d-none form-control mt-3" name="image_1">


        </div>

    </div>
    <div class="col-md-4 pt-3">
        <div class="form-group">
            <label for="image_2">{{ __('image_2') }}</label> 
            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                <img class=" image-preview-image_2" width="100%"
                    src="{{ asset($resource->image_2 ?? 'assets/img/default.jpg') }}">
            </div>
            <br>
            <label for="image_2"class="btn btn-primary text-white mt-2">
                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
            </label>

            <input type="file" onchange="changeImage(this, 'image_2')" id="image_2"
                class="d-none form-control mt-3" name="image_2">


        </div>

    </div>
    <div class="col-md-4 pt-3">
        <div class="form-group">
            <label for="image_3">{{ __('image_3') }}</label> 
            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                <img class=" image-preview-image_3" width="100%"
                    src="{{ asset($resource->image_3 ?? 'assets/img/default.jpg') }}">
            </div>
            <br>
            <label for="image_3"class="btn btn-primary text-white mt-2">
                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
            </label>

            <input type="file" onchange="changeImage(this, 'image_3')" id="image_3"
                class="d-none form-control mt-3" name="image_3">


        </div>

    </div>



</div>