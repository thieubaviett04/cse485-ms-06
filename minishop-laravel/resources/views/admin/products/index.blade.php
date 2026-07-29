@extends('layouts.admin')

@section('title', 'Products')
@section('page_heading', 'Products Management')

@section('content')
<a href="{{ route('admin.products.create') }}" class="btn">Thêm mới</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- fake data P07; thay Eloquent P09–11 -->
        <tr>
            <td>1</td>
            <td>MacBook Pro M2</td>
            <td>Laptop</td>
            <td>30000000</td>
            <td>Sửa | Xóa</td>
        </tr>
        <tr>
            <td>2</td>
            <td>iPhone 15</td>
            <td>Điện thoại</td>
            <td>25000000</td>
            <td>Sửa | Xóa</td>
        </tr>
    </tbody>
</table>
@endsection