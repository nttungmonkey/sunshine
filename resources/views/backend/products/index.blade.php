@extends('backend.layouts.master')

@section('title')
Products
@endsection

@section('content-header')
Products
@endsection

@section('content-header-menu')
Products
@endsection

@section('content')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
</div>
<a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <td>Ma</th>
            <td>Ten</th>
            <td>Loai san pham</th>
            <th>Edit-Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product -> sp_ma}}</td>
                <td>{{ $product -> sp_ten}}</td> 
                <td>{{ $product -> loaisanpham -> l_ten}}</td> 
                <td>
                    <a href="{{ route('products.edit', [$product->sp_ma]) }}" class="btn btn-primary pull-left">Sửa</a>
                    <form method="post" action="{{ route('products.destroy', [$product->sp_ma]) }}" class="pull-left">    
                        <input type="hidden" name="_method" value="DELETE" />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection