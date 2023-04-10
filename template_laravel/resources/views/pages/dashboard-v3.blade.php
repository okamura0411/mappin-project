@extends('layouts.default')

@section('title', 'Dashboard V1')

@push('css')
	<link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="/assets/plugins/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />
	<link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="/assets/plugins/datepickk/dist/datepickk.min.css" rel="stylesheet" />
	<link href="/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
@endpush

@push('scripts')
	<script src="/assets/plugins/flot/source/jquery.canvaswrapper.js"></script>
	<script src="/assets/plugins/flot/source/jquery.colorhelpers.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.saturated.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.browser.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.drawSeries.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.uiConstants.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.time.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.resize.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.pie.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.crosshair.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.categories.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.navigate.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.touchNavigate.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.hover.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.touch.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.selection.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.symbol.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.legend.js"></script>
	<script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="/assets/plugins/jvectormap-content/world-mill.js"></script>
	<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>

@endpush

@section('content')
	<!-- BEGIN row -->
		<div class="row">
			<!-- BEGIN col-8 -->
			<div class="col-xl-8">
				<!-- BEGIN panel -->
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">地図で見る</h4>
					</div>
					{{-- この中にデータが表示されている --}}
					<div id="map-contents">
						<div id="subway" class="h-430px">
								<div class="subway-map" data-columns="20" data-rows="12" data-cellSize="33" data-legendId="legend" data-textClass="text" data-gridNumbers="false" data-grid="ture" data-lineWidth="10">
									<ul data-color="#B0CB02" data-label="山手線">
										<li data-coords="8,1"></li>
										<li class='test' data-coords="9,1"data-labelPos="N">Ikebukuro</li>
										<li data-coords="10,1"></li>
										<li data-coords="11,1"></li>
										<li data-coords="13,1"></li>
										<li data-coords="14,2"data-dir="E"data-labelPos="E"></li>
										<li data-coords="14,3"></li>
										<li data-coords="14,4"></li>
										<li data-coords="14,5"data-labelPos="E">Ueno</li>
										<li data-coords="14,6"></li>
										<li data-coords="14,7"></li>
										<li data-coords="14,8"></li>
										<li data-coords="14,9"data-labelPos="E">Tokyo</li>
										<li data-coords="14,10"></li>
										<li data-coords="13,11"data-dir="S"></li>
										<li data-coords="12,11"data-labelPos="S">Hamamatucho</li>
										<li data-coords="11,11"></li>
										<li data-coords="10,11"></li>
										<li data-coords="9,11">Shinagawa</li>
										<li data-coords="8,11"></li>
										<li data-coords="7,10"data-dir="W" data-labelPos="W">Gotanda</li>
										<li data-coords="7,9"></li>
										<li data-coords="7,8"></li>
										<li data-coords="7,7"data-labelPos="W">Shibuya</li>
										<li data-coords="7,6"data-labelPos="W">Harajuku</li>
										<li data-coords="7,5"></li>
										<li data-coords="7,4"data-labelPos="W">Shinjuku</li>
										<li data-coords="7,3"></li>
										<li data-coords="7,2"></li>
										<li data-coords="8,1"></li>
									</ul>
								</div>
								<div id="legend"></div>
								<script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
								<script src="{{ asset('assets/js/jquery.subwayMap-v3.js') }}"></script>
								<script type="text/javascript">
									$(".subway-map").subwayMap({ debug: true });
								</script>
						</div>
						{{-- 新しく表示させるcanvas --}}
						<div id="canvasContainer" class="panel panel-inverse stationCanvas hide" data-sortable-id="index-1">
								<canvas id="stationViewCanvas"></canvas>
								<!-- ここにピンを追加する -->
						<div class="returnSubway">路線図に戻る。</div>
		

						</div>

							<style>
								#stationViewCanvas {
									height: 390px;
									width: 600px;
									margin-top: 20px;
								}
								#canvasContainer{
									display: flex;
									justify-content: center;
									align-items: center;
								}
							</style>
					</div>
				</div>
			</div>
			<div class="col-xl-4">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">詳細情報</h4>
					</div>
					<div class="table-responsive">
						<table class="table table-panel align-middle mb-0">
								<tbody>
									<tr>
										<td nowrap><label class="badge bg-default text-gray-900">駅名</label></td>
										<td>
											{{-- 駅名記載 --}}
											<select name="station" id='station'>
												<optgroup label="YM" id="YM">
													<option value="Blanck"></option>
													<option value="Tokyo">Tokyo</option>
													<option value="Hamamatucho">Hamamatucho</option>
													<option value="Shinagawa">Shinagawa</option>			
													<option value="Gotanda">Gotanda</option>			
													<option value="Shibuya">Shibuya</option>
													<option value="Harajuku">Harajuku</option>			
													<option value="Shinjuku">Shinjuku</option>			
													<option value="Ikebukuro">Ikebukuro</option>			
													<option value="Ueno">Ueno</option>			
												</optgroup>
											</select>
										</td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-default text-gray-900">詳細な場所</label></td>
										<td>
											<input type="text" name="place" placeholder='例）上りホーム4号車1番ドア前' style="width:200px;">
										</td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-default text-gray-900">位置情報</label></td>
										<td>X軸<input type="number" id="Xnum" name="Xnum"min="0" max="1000" step="1" style="margin-left:10px;">
											Y軸<input type="number" id="Ynum" name="Ynum"min="0" max="1000" step="1" style="margin-left:10px;">
										</td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-default text-gray-900">損傷内容</label></td>
										<td>
											<input type="text" name="detail" placeholder='例）漏水'>
										</td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-default text-gray-900">数量</label></td>
										<td><input type="text" name="quantity" placeholder='例）1・複数'></td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-default text-gray-900">管理者</label></td>
										<td>
											<select name="whose">
													<option value="土木">土木</option>
													<option value="建築">建築</option>
													<option value="その他">その他</option>
											</select>
										</td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-default text-gray-900">今後の対応</label></td>

										<td>
										<select name="action">
										<!-- <option value="" selected disabled>選択してください</option> -->
											<option value="経過観察">経過観察</option>			
											<option value="通常補修">通常補修</option>
											<option value="緊急対応">緊急対応</option>
										</select>
										</td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-default text-gray-900">備考欄・進捗</label></td>
										<td>
											<textArea name="remarks" rows="3" cols="30" placeholder='天井から2秒毎滴下・お客様への影響がないため通常対応とする' style="white-space: nowrap;"></textArea>
										</td>
									</tr>
									<tr class="hide">
										<td><button id="edit">修正</button></td>
										<td><button id="delete">削除</button></td>
									</tr>
								</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	<!-- END row -->
		<div id="preview">
		ここに画像が表示される。
		</div>
		{{-- ここの修正から移行 --}}
	<script src="/assets/js/demo/dashboard-v3.js"></script>
@endsection
