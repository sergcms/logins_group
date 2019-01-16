@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="row no-gutters">
        <div class="col-sm-12 p-3">
            <form method="POST" action="{{ isset($id) ? route('seo-update', $id) : route('seo-create')}}">
                @csrf

                <div class="form-group row">
                    <label for="url" class="col-sm-2 col-form-label">Url page</label>
                    <div class="col-sm-10">
                        <input type="text" name="url" id="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="{{ __('Url') }}" value="{{ $seo->url ?? old('url') }}" required autofocus>
                    
                        @if ($errors->has('url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- / form-group  -->

                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title" placeholder="{{ __('Title') }}" value="{{ $seo->title ?? old('title') }}" required>

                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- / form-group  -->

                <div class="form-group row">
                    <label for="keywords" class="col-sm-2 col-form-label">Keywords</label>
                    <div class="col-sm-10">
                        <textarea name="keywords" class="form-control{{ $errors->has('keywords') ? ' is-invalid' : '' }}" id="keywords" rows="7" placeholder="{{ __('Keywords') }}" required>{{ $seo->keywords ?? old('keywords') }}</textarea>
                    
                        @if ($errors->has('keywords'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('keywords') }}</strong>
                            </span>
                        @endif
                    </div>                   
                </div> 					
                <!-- / form-group  -->
                
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="7" placeholder="{{ __('Description') }}" required>{{ $seo->description ?? old('description') }}</textarea>
                    
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>                   
                </div> 					
                <!-- / form-group  -->
               
                <div class="form-group row justify-content-end">
                    <button type="submit" class="btn btn-primary mr-5">{{ isset($id) ? __('Update') : __('Create') }}</button>
                    <a href="{{ route('seo-list') }}" class="btn btn-secondary">Cansel</a> 
                </div>
                <!-- / form-group -->
            </form>
        </div>
        <!-- / col -->
    </div>
    <!-- / row -->
</div>
<!-- / container-fluit -->
@endsection