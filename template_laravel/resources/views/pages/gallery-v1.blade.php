@extends('layouts.default')
@section('title', 'Gallery V1')
@push('css')
	<link href="/assets/plugins/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
@endpush
@push('scripts')
	<script src="/assets/plugins/isotope-layout/dist/isotope.pkgd.min.js"></script>
	<script src="/assets/plugins/lightbox2/dist/js/lightbox.min.js"></script>
	<script src="/assets/js/demo/gallery.demo.js"></script>
@endpush
@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">損傷一覧</a></li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">損傷一覧<small> 報告件数 22 件</small></h1>
	<!-- END page-header -->
	<!-- BEGIN #options -->
	<div id="options" class="mb-3">
		<div class="d-flex flex-wrap text-nowrap mb-n1" id="filter" data-option-key="filter">
			<a href="#show-all" class="btn btn-white btn-sm active border-0 me-1 mb-1" value="*">Show All</a>
			<a href="#gallery-group-1" class="btn btn-white btn-sm border-0 me-1 mb-1" value="Ikebukuro">Ikebukuro</a>
			<a href="#gallery-group-2" class="btn btn-white btn-sm border-0 me-1 mb-1" value="Shinjuku">Shinjuku</a>
			<a href="#gallery-group-3" class="btn btn-white btn-sm border-0 me-1 mb-1" value="Harajuku">Harajuku</a>
			<a href="#gallery-group-4" class="btn btn-white btn-sm border-0 me-1 mb-1" value="Shibuya">Shibuya</a>
			<a href="#gallery-group-1" class="btn btn-white btn-sm border-0 me-1 mb-1" value="Gotanda">Gotanda</a>
			<a href="#gallery-group-2" class="btn btn-white btn-sm border-0 me-1 mb-1" value="Shinagawa">Shinagawa</a>
			<a href="#gallery-group-3" class="btn btn-white btn-sm border-0 me-1 mb-1" value="Hamamatucho">Hamamatucho</a>
			<a href="#gallery-group-4" class="btn btn-white btn-sm border-0 me-1 mb-1" value="Tokyo">Tokyo</a>
			<a href="#gallery-group-4" class="btn btn-white btn-sm border-0 me-1 mb-1" value="Ueno">Ueno</a>
		</div>
	</div>
@php
    $fileContents = file_get_contents(storage_path('app/sample.txt')); // ファイルの内容を文字列で取得
    $lines = explode("\n", $fileContents); // 改行で分割して配列に格納
    $data = array(); // 出力するデータを格納するための配列
    foreach ($lines as $line) {
        // 空行の場合はスキップする
        if (empty($line)) {
            continue;
        }
        $params = array();
        $elements = explode(",", $line); // カンマで区切って各パラメータを取得
        foreach ($elements as $element) {
            $param = explode(":", $element);

            // explode()関数で返された配列の要素が2未満の場合はスキップする
            if (count($param) < 2) {
                continue;
            }

            $key = $param[0];
            $value = $param[1];

            // $params配列のキーが既に存在する場合は、そのキーに配列に要素を追加する
            if (array_key_exists($key, $params)) {
                if (!is_array($params[$key])) {
                    $params[$key] = array($params[$key]);
                }
                $params[$key][] = $value;
            } else {
                $params[$key] = $value;
            }
        }

        $data[] = $params;
    }
@endphp

	<div id="gallery" class="gallery" style="display:flex;">
@foreach($data as $item)
    @php
        $filename = explode(',', $item['filename'])[0];
    @endphp

    <div class="image gallery-group-1">
        <div class="image-inner">
            <a href="/storage/{{ $filename }}" data-lightbox="gallery-group-1">
                <div class="img" style="background-image: url(/storage/{{ $filename }})"></div>
            </a>
            <p class="image-caption">
                No.1166 - {{ $item['station'] }}
            </p>
        </div>
        <div class="image-info">
            <h5 class="title">{{ $item['detail'] }}</h5>
            <div class="d-flex align-items-center mb-2">
                <div class="rating">
                    <span class="star active"></span>
                    <span class="star active"></span>
                    <span class="star"></span>
                    <p>{{ $item['action'] }}</p>
                </div>
                <div class="ms-auto">
                    <small>担当</small> <a href="javascript:;">{{ $item['whose'] }} - 岡村</a>
                </div>
            </div>
            <div class="desc">
                {{ $item['remarks'] }}
            </div>
        </div>
    </div>
@endforeach
</div>


@endsection