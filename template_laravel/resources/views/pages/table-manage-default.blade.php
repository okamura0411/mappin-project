@extends('layouts.default')

@section('title', 'Managed Tables')

@push('css')
	<link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<script src="/assets/js/demo/table-manage-default.demo.js"></script>
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
		<li class="breadcrumb-item active">Managed Tables</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Managed Tables <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	<!-- BEGIN panel -->
	<div class="panel panel-inverse">
		<!-- BEGIN panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title">Data Table - Default</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<!-- END panel-heading -->
		<!-- BEGIN panel-body -->
		<div class="panel-body">
			<table id="data-table-default" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="1%"></th>
						<th width="1%" data-orderable="false"></th>
						<th class="text-nowrap">Rendering engine</th>
						<th class="text-nowrap">Browser</th>
						<th class="text-nowrap">Platform(s)</th>
						<th class="text-nowrap">Engine version</th>
						<th class="text-nowrap">CSS grade</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td width="1%" class="fw-bold text-dark">1</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Trident</td>
						<td>Internet Explorer 4.0</td>
						<td>Win 95+</td>
						<td>4</td>
						<td>X</td>
					</tr>
					<tr class="even gradeC">
						<td class="fw-bold text-dark">2</td>
						<td class="with-img"><img src="/assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Trident</td>
						<td>Internet Explorer 5.0</td>
						<td>Win 95+</td>
						<td>5</td>
						<td>C</td>
					</tr>
					<tr class="odd gradeA">
						<td class="fw-bold text-dark">3</td>
						<td class="with-img"><img src="/assets/img/user/user-3.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Trident</td>
						<td>Internet Explorer 5.5</td>
						<td>Win 95+</td>
						<td>5.5</td>
						<td>A</td>
					</tr>
					<tr class="even gradeA">
						<td class="fw-bold text-dark">4</td>
						<td class="with-img"><img src="/assets/img/user/user-4.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Trident</td>
						<td>Internet Explorer 6</td>
						<td>Win 98+</td>
						<td>6</td>
						<td>A</td>
					</tr>
					<tr class="odd gradeA">
						<td class="fw-bold text-dark">5</td>
						<td class="with-img"><img src="/assets/img/user/user-5.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td>7</td>
						<td>A</td>
					</tr>
					<tr class="even gradeA">
						<td class="fw-bold text-dark">6</td>
						<td class="with-img"><img src="/assets/img/user/user-6.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td>6</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">7</td>
						<td class="with-img"><img src="/assets/img/user/user-7.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">8</td>
						<td class="with-img"><img src="/assets/img/user/user-8.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">9</td>
						<td class="with-img"><img src="/assets/img/user/user-9.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">10</td>
						<td class="with-img"><img src="/assets/img/user/user-10.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td>1.9</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">11</td>
						<td class="with-img"><img src="/assets/img/user/user-11.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Camino 1.0</td>
						<td>OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">12</td>
						<td class="with-img"><img src="/assets/img/user/user-12.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">13</td>
						<td class="with-img"><img src="/assets/img/user/user-13.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Netscape 7.2</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">14</td>
						<td class="with-img"><img src="/assets/img/user/user-14.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">15</td>
						<td class="with-img"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Netscape Navigator 9</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">16</td>
						<td class="with-img"><img src="/assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">17</td>
						<td class="with-img"><img src="/assets/img/user/user-3.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.1</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">18</td>
						<td class="with-img"><img src="/assets/img/user/user-4.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.2</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.2</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">19</td>
						<td class="with-img"><img src="/assets/img/user/user-5.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.3</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">20</td>
						<td class="with-img"><img src="/assets/img/user/user-6.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.4</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.4</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">21</td>
						<td class="with-img"><img src="/assets/img/user/user-7.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.5</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">22</td>
						<td class="with-img"><img src="/assets/img/user/user-8.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.6</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.6</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">23</td>
						<td class="with-img"><img src="/assets/img/user/user-9.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">24</td>
						<td class="with-img"><img src="/assets/img/user/user-10.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.8</td>
						<td>Win 98+ / OSX.1+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">25</td>
						<td class="with-img"><img src="/assets/img/user/user-11.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Seamonkey 1.1</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">26</td>
						<td class="with-img"><img src="/assets/img/user/user-12.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Gecko</td>
						<td>Epiphany 2.20</td>
						<td>Gnome</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">27</td>
						<td class="with-img"><img src="/assets/img/user/user-13.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Webkit</td>
						<td>Safari 1.2</td>
						<td>OSX.3</td>
						<td>125.5</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">28</td>
						<td class="with-img"><img src="/assets/img/user/user-14.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td>312.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">29</td>
						<td class="with-img"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Webkit</td>
						<td>Safari 2.0</td>
						<td>OSX.4+</td>
						<td>419.3</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">30</td>
						<td class="with-img"><img src="/assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td>522.1</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">31</td>
						<td class="with-img"><img src="/assets/img/user/user-3.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Webkit</td>
						<td>OmniWeb 5.5</td>
						<td>OSX.4+</td>
						<td>420</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">32</td>
						<td class="with-img"><img src="/assets/img/user/user-4.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Webkit</td>
						<td>iPod Touch / iPhone</td>
						<td>iPod</td>
						<td>420.1</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">33</td>
						<td class="with-img"><img src="/assets/img/user/user-5.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td>413</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">34</td>
						<td class="with-img"><img src="/assets/img/user/user-6.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Opera 7.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">35</td>
						<td class="with-img"><img src="/assets/img/user/user-7.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">36</td>
						<td class="with-img"><img src="/assets/img/user/user-8.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Opera 8.0</td>
						<td>Win 95+ / OSX.2+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">37</td>
						<td class="with-img"><img src="/assets/img/user/user-9.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">38</td>
						<td class="with-img"><img src="/assets/img/user/user-10.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Opera 9.0</td>
						<td>Win 95+ / OSX.3+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">39</td>
						<td class="with-img"><img src="/assets/img/user/user-11.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">40</td>
						<td class="with-img"><img src="/assets/img/user/user-12.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Opera 9.5</td>
						<td>Win 88+ / OSX.3+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">41</td>
						<td class="with-img"><img src="/assets/img/user/user-13.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">42</td>
						<td class="with-img"><img src="/assets/img/user/user-14.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Nokia N800</td>
						<td>N800</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">43</td>
						<td class="with-img"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td>8.5</td>
						<td>C/A<sup>1</sup></td>
					</tr>
					<tr class="gradeC">
						<td class="fw-bold text-dark">44</td>
						<td class="with-img"><img src="/assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>KHTML</td>
						<td>Konqureror 3.1</td>
						<td>KDE 3.1</td>
						<td>3.1</td>
						<td>C</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">45</td>
						<td class="with-img"><img src="/assets/img/user/user-3.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td>3.3</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">46</td>
						<td class="with-img"><img src="/assets/img/user/user-4.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>KHTML</td>
						<td>Konqureror 3.5</td>
						<td>KDE 3.5</td>
						<td>3.5</td>
						<td>A</td>
					</tr>
					<tr class="gradeX">
						<td class="fw-bold text-dark">47</td>
						<td class="with-img"><img src="/assets/img/user/user-5.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr class="gradeC">
						<td class="fw-bold text-dark">48</td>
						<td class="with-img"><img src="/assets/img/user/user-6.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Tasman</td>
						<td>Internet Explorer 5.1</td>
						<td>Mac OS 7.6-9</td>
						<td>1</td>
						<td>C</td>
					</tr>
					<tr class="gradeC">
						<td class="fw-bold text-dark">49</td>
						<td class="with-img"><img src="/assets/img/user/user-7.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td>1</td>
						<td>C</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">50</td>
						<td class="with-img"><img src="/assets/img/user/user-8.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Misc</td>
						<td>NetFront 3.1</td>
						<td>Embedded devices</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr class="gradeA">
						<td class="fw-bold text-dark">51</td>
						<td class="with-img"><img src="/assets/img/user/user-9.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeX">
						<td class="fw-bold text-dark">52</td>
						<td class="with-img"><img src="/assets/img/user/user-10.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Misc</td>
						<td>Dillo 0.8</td>
						<td>Embedded devices</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr class="gradeX">
						<td class="fw-bold text-dark">53</td>
						<td class="with-img"><img src="/assets/img/user/user-11.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr class="gradeX">
						<td class="fw-bold text-dark">54</td>
						<td class="with-img"><img src="/assets/img/user/user-12.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Misc</td>
						<td>Lynx</td>
						<td>Text only</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr class="gradeC">
						<td class="fw-bold text-dark">55</td>
						<td class="with-img"><img src="/assets/img/user/user-13.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr class="gradeC">
						<td class="fw-bold text-dark">57</td>
						<td class="with-img"><img src="/assets/img/user/user-14.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr class="gradeU">
						<td class="fw-bold text-dark">58</td>
						<td class="with-img"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td>-</td>
						<td>U</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- END panel-body -->
		<!-- BEGIN hljs-wrapper -->
		<div class="hljs-wrapper">
			<pre><code class="html">&lt;!-- required files --&gt;
&lt;link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" /&gt;
&lt;link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" /&gt;
&lt;script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;table id="data-table-default" class="table table-striped table-bordered align-middle"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th width="1%"&gt;&lt;/th&gt;
      &lt;th width="1%" data-orderable="false"&gt;&lt;/th&gt;
      ...
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    ...
  &lt;/tbody&gt;
&lt;/table&gt;

&lt;!-- script --&gt;
&lt;script&gt;
  $('#data-table-default').DataTable({
    responsive: true
  });
&lt;/script&gt;</code></pre>
		</div>
		<!-- END hljs-wrapper -->
	</div>
	<!-- END panel -->
@endsection