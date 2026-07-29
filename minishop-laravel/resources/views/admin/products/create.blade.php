@extends('layouts.admin')

@section('title', 'Thêm mới Product')
@section('page_heading', 'Thêm mới Product')

@section('content')
<form action="" method="POST">
    @csrf
    <div style="margin-bottom: 15px;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" style="width: 100%; padding: 8px; margin-top: 5px;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id" style="width: 100%; padding: 8px; margin-top: 5px;">
            <option value="1">Laptop</option>
            <option value="2">Điện thoại</option>
        </select>
    </div>
    <div style="margin-bottom: 15px;">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" style="width: 100%; padding: 8px; margin-top: 5px;">
    </div>
    <button type="submit" class="btn">Lưu lại</button>
    <a href="{{ route('admin.products.index') }}" style="margin-left: 10px; text-decoration: none; color: #333;">Hủy</a>
</form>
@endsection
