<x-admin-layout>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Setting</div>
                            <div class="card-body">
                            

                                @if (count($errors) > 0)
                                    <div class = "alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('setting') }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="appName" class="control-label mb-1">App Name </label>
                                        <input id="appName" name="AppName" value="{{$setting->AppName ?? ''}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="control-label mb-1">Logo</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                        <img src=" @if(isset($setting->image)){{asset('logo').'/'.$setting->image ?? ''}}@endif " alt="logo" class=" border m-2" style="
                                            height: 35px">
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook" class="control-label mb-1">FaceBook Link </label>
                                        <input id="facebook" name="facebook" value="{{$setting->facebook ?? ''}}" type="url" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter" class="control-label mb-1"> Twitter</label>
                                        <input id="twitter" name="twitter" value="{{$setting->twitter ?? ''}}" type="url" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="googleplus" class="control-label mb-1"> Googleplus</label>
                                        <input id="googleplus" name="googleplus" value="{{$setting->googleplus ?? ''}}" type="url" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram" class="control-label mb-1"> Instagram</label>
                                        <input id="instagram" name="instagram" value="{{$setting->instagram ?? ''}}"  type="url" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="linkedin" class="control-label mb-1"> Iinkedin</label>
                                        <input id="linkedin" name="linkedin"  value="{{$setting->linkedin ?? ''}}"  type="url" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="control-label mb-1"> Mobile </label>
                                        <input id="mobile" name="mobile"  value="{{$setting->mobile ?? ''}}"  type="number" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label mb-1"> Email </label>
                                        <input id="email" name="email"  value="{{$setting->email ?? ''}}"  type="email" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="control-label mb-1"> address </label>
                                        <input id="address" name="address"  value="{{$setting->address ?? ''}}"  type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="control-label mb-1"> CopyRight </label>
                                        <input id="address" name="copyright"  value="{{$setting->copyright ?? ''}}"  type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="about_us" class="control-label mb-1">About Us </label>
                                        <textarea class="ckeditor form-control" id="about_us" name="about_us" required>{{$setting->about_us ?? ''}}</textarea>
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                    </div>

                                    <button type="submit"  class="btn btn-primary " name="submit">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
    

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    </x-slot>
   
</x-admin-layout>
