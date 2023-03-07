<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Subway Map</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.subwayMap-0.5.3.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
    <div class="subway-map" data-columns="12" data-rows="10" data-cellSize="40" data-legendId="legend" data-textClass="text" data-gridNumbers="true" data-grid="false" data-lineWidth="8">
        <ul data-color="#36AEFF" data-label="jQuery Widgets">          
            <li data-coords="2,2" style="list-style:none;" data-marker="interchange"><a href="http://jqueryui.com/demos/accordion/">Accordion</a></li>  
            <li data-coords="4,2"><a href="http://jqueryui.com/demos/autocomplete/"><a href="http://jqueryui.com/demos/autocomplete/">Auto\ncomplete</a></li>  
            <li data-coords="5,3" data-dir="E"></li>  
            <li data-coords="5,7" data-marker="@station" data-labelPos="W"><a href="http://jqueryui.com/demos/slider/">Slider</a></li> <!-- marker-only node -->  
            <li data-coords="6,4" data-dir="S" data-marker="interchange" data-markerInfo="h5"><a href="http://jqueryui.com/demos/datepicker/">Date\npicker</a></li>  
            <li data-coords="7,4"></li>  
            <li data-coords="7.15,8" data-marker="@station" data-labelPos="E"><a href="http://jqueryui.com/demos/dialog/">Dialog</a></li>  <!-- marker-only node, moved to the right by 0.15 -->
            <li data-coords="8,3" data-dir="E"></li>  
            <li data-coords="8,2"></li>  
            <li data-coords="9,1" data-dir="N"></li>  
            <li data-coords="10,2" data-dir="E" data-marker="interchange" data-labelPos="E"><a href="http://jqueryui.com/demos/button/">Button</a></li>  
            <li data-coords="10,5"></li>  
            <li data-coords="9,6" data-dir="S" data-marker="station"><a href="http://jqueryui.com/demos/progressbar/">Progress\nbar</a></li>  
            <li data-coords="6,9"></li>  
            <li data-coords="5,8" data-dir="W"></li>  
            <li data-coords="5,7"></li>  
            <li data-coords="4,6" data-dir="N"></li>  
            <li data-coords="2,6"><a href="http://jqueryui.com/demos/tabs/">Tabs</a></li>  
        </ul>
        <ul data-color="#FF7936 " data-label="jQuery Interactions" data-shiftCoords="0,-1" data-outline="true" data-dotted="true">      
            <li data-coords="2,6"></li> 
            <li data-coords="2,5.9" data-marker="@interchange"> </li> <!-- marker-only node, moved up by 0.10 -->
            <li data-coords="5,6" data-marker="@station" data-labelPos="N"><a href="http://jqueryui.com/demos/selectable/">Selectable</a></li>  
            <li data-coords="6,6"></li>  
            <li data-coords="7,3" data-marker="@station" data-labelPos="W"><a href="http://jqueryui.com/demos/resizeable/">Resizeable</a></li>  
            <li data-coords="7,5" data-dir="E" data-marker="station" data-labelPos="E"><a href="http://jqueryui.com/demos/droppable/">Droppable</a></li>  
            <li data-coords="7,1" data-marker="interchange" data-labelPos="W"><a href="http://jqueryui.com/demos/draggable/">Draggable</a></li>  
        </ul>
    </div>
    <div id="legend"></div>
    <script type="text/javascript">
        $(".subway-map").subwayMap({ debug: true });
    </script>
</body>
</html>

