@extends('layouts.admin')

@section('title', 'Categories')
@section('page_heading', 'Categories Management')

@section('content')
<!-- Nút thêm mới sẽ trỏ tới route create -->
<a href="{{ route('admin.categories.create') }}" class="btn">Thêm mới</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- fake data P07; thay Eloquent P09–11 -->
        <tr>
            <td>1</td>
            <td>Laptop</td>
            <td>Máy tính xách tay</td>
            <td>Sửa | Xóa</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Điện thoại</td>
            <td>Điện thoại thông minh</td>
            <td>Sửa | Xóa</td>
        </tr>
    </tbody>
</table>
@endsection