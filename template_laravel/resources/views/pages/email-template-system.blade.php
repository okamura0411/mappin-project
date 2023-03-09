<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Subway Map</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.subwayMap-0.5.3.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
    <div class="subway-map" data-columns="20" data-rows="13" data-cellSize="50" data-legendId="legend" data-textClass="text" data-gridNumbers="false" data-grid="false" data-lineWidth="10">
        <ul data-color="#B0CB02" data-label="山手線">
            <li data-coords="8,2"data-labelPos="N">目白</li>
            <li data-coords="9,2"data-labelPos="N">池袋</li>
            <li data-coords="10,2"data-labelPos="N">大塚</li>
            <li data-coords="11,2"data-labelPos="N">巣鴨</li>
            <li data-coords="12,2"data-labelPos="N">駒込</li>
            <li data-coords="13,2"data-labelPos="N">田端</li>
            <li data-coords="14,3"data-dir="E"data-labelPos="E">西日暮里</li>
            <li data-coords="14,4"data-labelPos="E">日暮里</li>
            <li data-coords="14,5"data-labelPos="E">鶯谷</li>
            <li data-coords="14,6"data-labelPos="E">上野</li>
            <li data-coords="14,7"data-labelPos="E">御徒町</li>
            <li data-coords="14,8"data-labelPos="E">秋葉原</li>
            <li data-coords="14,9"data-labelPos="E">神田</li>
            <li data-coords="14,10"data-labelPos="E">東京</li>
            <li data-coords="14,11"data-labelPos="E">有楽町</li>
            <li data-coords="13,12"data-dir="S">新橋</li>
            <li data-coords="12,12">浜松町</li>
            <li data-coords="11,12">田町</li>
            <li data-coords="10,12">高輪\nゲートウェイ</li>
            <li data-coords="9,12">品川</li>
            <li data-coords="8,12">大崎</li>
            <li data-coords="7,11"data-dir="W" data-labelPos="W">五反田</li>
            <li data-coords="7,10"data-labelPos="W">目黒</li>
            <li data-coords="7,9"data-labelPos="W">恵比寿</li>
            <li data-coords="7,8"data-labelPos="W">渋谷</li>
            <li data-coords="7,7"data-labelPos="W">原宿</li>
            <li data-coords="7,6"data-labelPos="W">代々木</li>
            <li data-coords="7,5"data-labelPos="W">新宿</li>
            <li data-coords="7,4"data-labelPos="W">新大久保</li>
            <li data-coords="7,3"data-dir="E"data-labelPos="W">高田馬場</li>
            <li data-coords="8,2"></li>
        </ul>
    </div>
    <div id="legend"></div>
    <script type="text/javascript">
        $(".subway-map").subwayMap({ debug: true });
    </script>
</body>
</html>

