@extends('backend.layouts.master')

@section('title')
Categorys
@endsection

@section('content-header')
Categorys
@endsection

@section('content-header-menu')
Categorys / Create
@endsection

@section('content')
@include('backend.layouts.partials.error-message')
<form method="post" action="{{ route('categorys.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="l_ten">Ten loai</label>
        <input type="text" class="form-control" id="l_ten" name="l_ten" value="{{ old('l_ten') }}">
    </div>
    <select name="l_trangThai" class="form-control">
        <option value="1" {{ old('l_trangThai') == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('l_trangThai') == 2 ? "selected" : "" }}>Khả dụng</option>
    </select>

    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection