@extends('layouts.default')

@section('title', 'Dashboard V1')

@push('css')
	<link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="/assets/plugins/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />
	<link href="/assets/plugins/dropzone/dist/min/style.css" rel="stylesheet" />
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
	<script src="/assets/js/demo/dashboard.js"></script>
	<script src="/assets/plugins/dropzone/dist/min/dropzone.min.js"></script>
@endpush

@section('content')
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-8 -->
		<div class="col-xl-8">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">新規登録</h4>
				</div>
				{{-- この中にデータが表示されている --}}
				<div class="panel-body pe-1">
					<div id="subway" class="h-400px">
						    <div class="subway-map" data-columns="20" data-rows="12" data-cellSize="34" data-legendId="legend" data-textClass="text" data-gridNumbers="false" data-grid="ture" data-lineWidth="10">
								<ul data-color="#B0CB02" data-label="山手線">
									<li data-coords="8,1"data-labelPos="N">目白</li>
									<li data-coords="9,1"data-labelPos="N">池袋</li>
									<li data-coords="10,1"data-labelPos="N">大塚</li>
									<li data-coords="11,1"data-labelPos="N">巣鴨</li>
									<li data-coords="12,1"data-labelPos="N">駒込</li>
									<li data-coords="13,1"data-labelPos="N">田端</li>
									<li data-coords="14,2"data-dir="E"data-labelPos="E">西日暮里</li>
									<li data-coords="14,3"data-labelPos="E">日暮里</li>
									<li data-coords="14,4"data-labelPos="E">鶯谷</li>
									<li data-coords="14,5"data-labelPos="E">上野</li>
									<li data-coords="14,6"data-labelPos="E">御徒町</li>
									<li data-coords="14,7"data-labelPos="E">秋葉原</li>
									<li data-coords="14,8"data-labelPos="E">神田</li>
									<li data-coords="14,9"data-labelPos="E">東京</li>
									<li data-coords="14,10"data-labelPos="E">有楽町</li>
									<li data-coords="13,11"data-dir="S">新橋</li>
									<li data-coords="12,11">浜松町</li>
									<li data-coords="11,11">田町</li>
									<li data-coords="10,11"data-labelPos="S">TGW</li>
									<li data-coords="9,11">品川</li>
									<li data-coords="8,11">大崎</li>
									<li data-coords="7,10"data-dir="W" data-labelPos="W">五反田</li>
									<li data-coords="7,9"data-labelPos="W">目黒</li>
									<li data-coords="7,8"data-labelPos="W">恵比寿</li>
									<li data-coords="7,7"data-labelPos="W">渋谷</li>
									<li data-coords="7,6"data-labelPos="W">原宿</li>
									<li data-coords="7,5"data-labelPos="W">代々木</li>
									<li data-coords="7,4"data-labelPos="W">新宿</li>
									<li data-coords="7,3"data-labelPos="W">新大久保</li>
									<li data-coords="7,2"data-dir="E"data-labelPos="W">高田馬場</li>
									<li data-coords="8,1"></li>
								</ul>
							</div>
							<div id="legend"></div>
							<script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
							<script src="{{ asset('assets/js/jquery.subwayMap-0.5.3.js') }}"></script>
							<script type="text/javascript">
								$(".subway-map").subwayMap({ debug: true });
							</script>
					</div>
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
						<form action="">
							<tbody>
								<tr>
									<td nowrap><label class="badge bg-default text-gray-900">駅名</label></td>
									<td>
										{{-- 駅名記載 --}}
										<select name="station" id='station'>
											<optgroup label="山手線" id="YM">
												<option value="東京">東京</option>
												<option value="有楽町">有楽町</option>
												<option value="新橋">新橋</option>			
												<option value="浜松町">浜松町</option>
												<option value="田町">田町</option>			
												<option value="高輪ゲートウェイ">高輪ゲートウェイ</option>
												<option value="品川">品川</option>			
												<option value="大崎">大崎</option>
												<option value="五反田">五反田</option>			
												<option value="目黒">目黒</option>
												<option value="恵比寿">恵比寿</option>
												<option value="渋谷">渋谷</option>
												<option value="原宿">原宿</option>			
												<option value="代々木">代々木</option>
												<option value="新宿">新宿</option>			
												<option value="新大久保">新大久保</option>
												<option value="高田馬場">高田馬場</option>			
												<option value="目白">目白</option>
												<option value="池袋">池袋</option>			
												<option value="大塚">大塚</option>
												<option value="巣鴨">巣鴨</option>
												<option value="駒込">駒込</option>
												<option value="田端">田端</option>			
												<option value="西日暮里">西日暮里</option>
												<option value="日暮里">日暮里</option>			
												<option value="鶯谷">鶯谷</option>
												<option value="上野">上野</option>			
												<option value="御徒町">御徒町</option>
												<option value="秋葉原">秋葉原</option>			
												<option value="神田">神田</option>
											</optgroup>
											<optgroup label="東横線" id="TY">
												<option value="渋谷">渋谷</option>
												<option value="代官山">代官山</option>
												<option value="中目黒">中目黒</option>			
												<option value="祐天寺">祐天寺</option>
												<option value="学芸大学">学芸大学</option>			
												<option value="都立大学">都立大学</option>
												<option value="自由が丘">自由が丘</option>			
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
									<td>X軸<input type="number" id="Xnum" name="Xnum"min="10" max="100" step="0.5" style="margin-left:10px;">
										Y軸<input type="number" id="Ynum" name="Ynum"min="10" max="100" step="0.5" style="margin-left:10px;">
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
										<textArea name="remarks" rows="3" cols="30" placeholder='天井から2秒毎滴下・お客様への影響がないため通常対応とする'></textArea>
									</td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" value="登録" class='touroku'></td>
									<td></td>
								</tr>
							</tbody>
						</form>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- END row -->
	<div id="dropzone">
  <form action="/upload" class="dropzone needsclick" id="demo-upload">
    <div class="dz-message needsclick">
      Drop files <b>here</b> or <b>click</b> to upload.<br />
    </div>
  </form>
</div>
@endsection
