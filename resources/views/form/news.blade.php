@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="row no-gutters">
        <div class="col-sm-12 p-3">
            <form method="POST" action="{{ isset($id) ? route('news-update', $id) : route('news-create')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="alias" class="col-sm-2 col-form-label">Alias</label>
                    <div class="col-sm-10">
                        <input type="text" name="alias" id="alias" class="form-control{{ $errors->has('alias') ? ' is-invalid' : '' }}" placeholder="{{ __('Alias') }}" value="{{ $news->alias ?? old('alias') }}" required autofocus>
                    
                        @if ($errors->has('alias'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('alias') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- / form-group  -->

                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title" placeholder="{{ __('Title') }}" value="{{ $news->title ?? old('title') }}" required>

                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- / form-group  -->
             
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file{{ $errors->has('image') ? ' is-invalid' : '' }}" id="image" name="image">
                        
                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- / form-group  -->

                <div class="form-group row">
                    <label for="preview" class="col-sm-2 col-form-label">Preview</label>
                    <div class="col-sm-10">
                        <textarea name="preview" class="form-control{{ $errors->has('preview') ? ' is-invalid' : '' }}" id="preview" rows="7" placeholder="{{ __('Preview') }}" required>{{ $news->preview ?? old('preview') }}</textarea>
                    
                        @if ($errors->has('preview'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('preview') }}</strong>
                            </span>
                        @endif
                    </div>                   
                </div> 					
                <!-- / form-group  -->
                
                <div class="form-group row">
                    <label for="news_content" class="col-sm-2 col-form-label">News content</label>
                    <div class="col-sm-10">
                        <textarea name="news_content" class="form-control{{ $errors->has('news_content') ? ' is-invalid' : '' }}" id="news_content" rows="15">{{ $news->text ?? old('news_content') }}</textarea>	
                    
                        @if ($errors->has('news_content'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('news_content') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- / form-group  -->

                <div class="form-group row align-items-center">
                    <label for="date_publish" class="col-form-label col-sm-2">Date bottom news</label>
                    <div class="col-sm-3">
                        <input type="date" name="date_publish" id="date_publish" class="form-control" value="{{ $news->date_publish ?? old('date_publish') }}" required>
                    </div>

                    <div class="form-check col-sm-7 text-right">                               
                        <input type="checkbox" id="published" name="published" value="1" class="form-check-input" {{ isset($news->published) && ($news->published == 1) ? 'checked' : '' }} >
                        <label class="form-check-label" for="published">Publish</label>
                    </div>
                    <!-- / form-check  -->   
                </div>       
                <!-- / form-group -->

                <div class="form-group row justify-content-end">
                    <button type="submit" class="btn btn-primary mr-5">{{ isset($id) ? __('Update') : __('Create') }}</button>
                    <a href="{{ route('news') }}" class="btn btn-secondary">Cansel</a> 
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