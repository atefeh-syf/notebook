
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group row mb-0 justify-content-center ">
                <a type="button" href="/m/create" class="btn btn-insertmem center-block">{{ __('+ ثبت خاطره جدید ') }} </a>
            </div>
        </div>
    </div> 
    
    
    <div class="row memry-container pt-4 justify-content-center ">  
    @foreach ($memories as $memory) 
        <div class="col-5 pt-4">
                <div class="card">
                    <div class="row justify-content-center ">
                        
                        <div class="col-md-6"><div class="card-header">{{ $memory->title }}</div></div>
                        <div class="col-md-6"><div class="card-header">{{ $memory->jalali}}</div></div>
                    </div>
                        <div class="row justify-content-center">
                            <a type="submit" href="/m/{{$memory->id}}" class="btn btn-reg center-block"> {{ __(' مشاهده ') }} </a>
                            <a type="submit" href="/m/{{$memory->id}}/edit" class="btn btn-edit center-block">{{ __(' ویرایش ') }}</a>
                            
                            <form action="/m/{{$memory->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-del center-block">
                                    {{ __(' حذف ') }}
                                </button>
                            </form>
                        </div>
                </div>
         </div>
    @endforeach
    </div>  
</div>
@endsection
