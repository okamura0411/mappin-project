@extends('layouts.default')

@section('title', 'Dashboard V1')

@push('css')
	<link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
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
					<div id="interactive-chart" class="h-500px">
						{{-- ここに直接入れればいいのか？？ --}}
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

					{{-- DropBoxを挿入する。 --}}
					
					<table class="table table-panel align-middle mb-0">
						<form action="">
							<thead>
								<tr>
									<th style="width:110px;">損傷入力項目</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td nowrap><label class="badge bg-default text-gray-900">路線名</label></td>
									<td>
										<select name="line" id='line'>
												<option value="YM">山手線</option>
												<option value="TY">中央線</option>
										</select>
									</td>
								</tr>
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
										<input type="text" name="place" placeholder='例）上りホーム4号車1番ドア前天井' style="width:230px;">
									</td>
								</tr>
								<tr>
									<td nowrap><label class="badge bg-default text-gray-900">位置情報</label></td>
									<td>X軸<input type="number" id="Xnum" name="Xnum"min="10" max="100" step="0.5" style="margin-left:10px;"></td>
								</tr>
								<tr>
									<td nowrap></td>
									<td>Y軸<input type="number" id="Ynum" name="Ynum"min="10" max="100" step="0.5" style="margin-left:10px;"></td>
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
										<textArea name="remarks" rows="3" cols="35" placeholder='天井から2秒毎滴下・お客様への影響がないため通常対応とする'></textArea>
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
@endsection
