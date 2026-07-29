@extends('layouts.admin')

@section('title', 'Thêm mới Category')
@section('page_heading', 'Thêm mới Category')

@section('content')
<form action="" method="POST">
    @csrf
    <div style="margin-bottom: 15px;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" style="width: 100%; padding: 8px; margin-top: 5px;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" style="width: 100%; padding: 8px; margin-top: 5px;"></textarea>
    </div>
    <button type="submit" class="btn">Lưu lại</button>
    <a href="{{ route('admin.categories.index') }}" style="margin-left: 10px; text-decoration: none; color: #333;">Hủy</a>
</form>
@endsection