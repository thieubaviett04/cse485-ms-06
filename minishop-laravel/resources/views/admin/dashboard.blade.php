@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_heading', 'Dashboard')

@section('content')
<p>Chào mừng bạn đến với Admin MiniShop Dashboard.</p>

<hr>
<h2>Thống kê (Stats giả)</h2>
<ul>
    <li>Số danh mục (Categories): {{ $stats['categories'] }}</li>
    <li>Số sản phẩm (Products): {{ $stats['products'] }}</li>
    <li>Tổng giá trị tồn kho (Inventory Value): {{ $stats['inventory_value'] }}</li>
</ul>
@endsection