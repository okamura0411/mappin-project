/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 5
Version: 5.1.5
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
*/

var handleVectorMap = function () {
  "use strict";
  if ($("#world-map").length !== 0) {
    var fillColor =
      $("#world-map").attr("data-theme") == "transparent"
        ? "rgba(" + app.color.whiteRgb + ", .25)"
        : app.color.gray600;
    $("#world-map").vectorMap({
      map: "world_mill",
      scaleColors: [app.color.gray300, app.color.gray600],
      normalizeFunction: "polynomial",
      hoverOpacity: 0.5,
      hoverColor: false,
      zoomOnScroll: false,
      markerStyle: {
        initial: {
          fill: app.color.teal,
          stroke: "transparent",
          r: 3,
        },
      },
      regionStyle: {
        initial: {
          fill: fillColor,
          "fill-opacity": 1,
          stroke: "none",
          "stroke-width": 0.4,
          "stroke-opacity": 1,
        },
        hover: {
          "fill-opacity": 0.8,
        },
        selected: {
          fill: "yellow",
        },
        selectedHover: {},
      },
      focusOn: {
        x: 0.5,
        y: 0.5,
        scale: 0,
      },
      backgroundColor: "transparent",
      markers: [
        { latLng: [41.9, 12.45], name: "Vatican City" },
        { latLng: [43.73, 7.41], name: "Monaco" },
        { latLng: [-0.52, 166.93], name: "Nauru" },
        { latLng: [-8.51, 179.21], name: "Tuvalu" },
        { latLng: [43.93, 12.46], name: "San Marino" },
        { latLng: [47.14, 9.52], name: "Liechtenstein" },
        { latLng: [7.11, 171.06], name: "Marshall Islands" },
        { latLng: [17.3, -62.73], name: "Saint Kitts and Nevis" },
        { latLng: [3.2, 73.22], name: "Maldives" },
        { latLng: [35.88, 14.5], name: "Malta" },
        { latLng: [12.05, -61.75], name: "Grenada" },
        { latLng: [13.16, -61.23], name: "Saint Vincent and the Grenadines" },
        { latLng: [13.16, -59.55], name: "Barbados" },
        { latLng: [17.11, -61.85], name: "Antigua and Barbuda" },
        { latLng: [-4.61, 55.45], name: "Seychelles" },
        { latLng: [7.35, 134.46], name: "Palau" },
        { latLng: [42.5, 1.51], name: "Andorra" },
        { latLng: [14.01, -60.98], name: "Saint Lucia" },
        { latLng: [6.91, 158.18], name: "Federated States of Micronesia" },
        { latLng: [1.3, 103.8], name: "Singapore" },
        { latLng: [1.46, 173.03], name: "Kiribati" },
        { latLng: [-21.13, -175.2], name: "Tonga" },
        { latLng: [15.3, -61.38], name: "Dominica" },
        { latLng: [-20.2, 57.5], name: "Mauritius" },
        { latLng: [26.02, 50.55], name: "Bahrain" },
        { latLng: [0.33, 6.73], name: "S�o Tom� and Pr�ncipe" },
      ],
    });
  }
};

var handleInteractiveChart = function () {
  "use strict";
  $("#interactive-chart").empty();

  function showTooltip(x, y, contents) {
    $('<div id="tooltip" class="flot-tooltip">' + contents + "</div>")
      .css({
        top: y - 45,
        left: x - 55,
      })
      .appendTo("body")
      .fadeIn(200);
  }
  if ($("#interactive-chart").length !== 0) {
    var data1 = [
      [1, 40],
      [2, 50],
      [3, 60],
      [4, 60],
      [5, 60],
      [6, 65],
      [7, 75],
      [8, 90],
      [9, 100],
      [10, 105],
      [11, 110],
      [12, 110],
      [13, 120],
      [14, 130],
      [15, 135],
      [16, 145],
      [17, 132],
      [18, 123],
      [19, 135],
      [20, 150],
    ];
    var data2 = [
      [1, 10],
      [2, 6],
      [3, 10],
      [4, 12],
      [5, 18],
      [6, 20],
      [7, 25],
      [8, 23],
      [9, 24],
      [10, 25],
      [11, 18],
      [12, 30],
      [13, 25],
      [14, 25],
      [15, 30],
      [16, 27],
      [17, 20],
      [18, 18],
      [19, 31],
      [20, 23],
    ];
    var xLabel = [
      [1, ""],
      [2, ""],
      [3, "May "],
      [4, ""],
      [5, ""],
      [6, "May 19"],
      [7, ""],
      [8, ""],
      [9, "May 22"],
      [10, ""],
      [11, ""],
      [12, "May 25"],
      [13, ""],
      [14, ""],
      [15, "May 28"],
      [16, ""],
      [17, ""],
      [18, "May 31"],
      [19, ""],
      [20, ""],
    ];

    $.plot(
      $("#interactive-chart"),
      [
        {
          data: data1,
          label: "Page Views",
          color: app.color.blue,
          lines: { show: true, fill: false, lineWidth: 2 },
          points: { show: true, radius: 3, fillColor: app.color.componentBg },
          shadowSize: 0,
        },
        {
          data: data2,
          label: "Visitors",
          color: app.color.green,
          lines: { show: true, fill: false, lineWidth: 2 },
          points: { show: true, radius: 3, fillColor: app.color.componentBg },
          shadowSize: 0,
        },
      ],
      {
        xaxis: {
          ticks: xLabel,
          tickDecimals: 0,
          tickColor: "rgba(" + app.color.darkRgb + ", .2)",
        },
        yaxis: {
          ticks: 10,
          tickColor: "rgba(" + app.color.darkRgb + ", .2)",
          min: 0,
          max: 200,
        },
        grid: {
          hoverable: true,
          clickable: true,
          tickColor: "rgba(" + app.color.darkRgb + ", .2)",
          borderWidth: 1,
          backgroundColor: "transparent",
          borderColor: "rgba(" + app.color.darkRgb + ", .2)",
        },
        legend: {
          labelBoxBorderColor: "rgba(" + app.color.darkRgb + ", .2)",
          margin: 10,
          noColumns: 1,
          show: true,
        },
      }
    );
    var previousPoint = null;
    $("#interactive-chart").bind("plothover", function (event, pos, item) {
      $("#x").text(pos.x.toFixed(2));
      $("#y").text(pos.y.toFixed(2));
      if (item) {
        if (previousPoint !== item.dataIndex) {
          previousPoint = item.dataIndex;
          $("#tooltip").remove();
          var y = item.datapoint[1].toFixed(2);

          var content = item.series.label + " " + y;
          showTooltip(item.pageX, item.pageY, content);
        }
      } else {
        $("#tooltip").remove();
        previousPoint = null;
      }
      event.preventDefault();
    });
  }
};

var handleDonutChart = function () {
  "use strict";
  $("#donut-chart").empty();
  if ($("#donut-chart").length !== 0) {
    var donutData = [
      {
        label: "Chrome",
        data: 35,
        color: "rgba(" + app.color.purpleRgb + ", .75)",
      },
      {
        label: "Firefox",
        data: 30,
        color: "rgba(" + app.color.purpleRgb + ", 1)",
      },
      {
        label: "Safari",
        data: 15,
        color: "rgba(" + app.color.purpleRgb + ", .5)",
      },
      { label: "Opera", data: 10, color: app.color.blue },
      { label: "IE", data: 5, color: "rgba(" + app.color.blueRgb + ", .75)" },
    ];
    $.plot("#donut-chart", donutData, {
      series: {
        pie: {
          innerRadius: 0.5,
          show: true,
          label: {
            show: true,
          },
          stroke: {
            color: app.color.componentBg,
          },
        },
      },
      legend: {
        show: true,
      },
    });
  }
};

var handleDashboardSparkline = function () {
  "use strict";
  var options = {
    height: "50px",
    width: "100%",
    fillColor: "transparent",
    lineWidth: 2,
    spotRadius: "4",
    highlightLineColor: app.color.blue,
    highlightSpotColor: app.color.blue,
    spotColor: false,
    minSpotColor: false,
    maxSpotColor: false,
  };
  function renderDashboardSparkline() {
    $("#sparkline-unique-visitor").empty();
    $("#sparkline-bounce-rate").empty();
    $("#sparkline-total-page-views").empty();
    $("#sparkline-avg-time-on-site").empty();
    $("#sparkline-new-visits").empty();
    $("#sparkline-return-visitors").empty();

    var value = [50, 30, 45, 40, 50, 20, 35, 40, 50, 70, 90, 40];
    options.type = "line";
    options.height = "23px";
    options.lineColor = app.color.red;
    options.highlightLineColor = app.color.red;
    options.highlightSpotColor = app.color.red;

    var countWidth = $("#sparkline-unique-visitor").width();
    if (countWidth >= 200) {
      options.width = "200px";
    } else {
      options.width = "100%";
    }

    $("#sparkline-unique-visitor").sparkline(value, options);
    options.lineColor = app.color.orange;
    options.highlightLineColor = app.color.orange;
    options.highlightSpotColor = app.color.orange;
    $("#sparkline-bounce-rate").sparkline(value, options);
    options.lineColor = app.color.green;
    options.highlightLineColor = app.color.green;
    options.highlightSpotColor = app.color.green;
    $("#sparkline-total-page-views").sparkline(value, options);
    options.lineColor = app.color.blue;
    options.highlightLineColor = app.color.blue;
    options.highlightSpotColor = app.color.blue;
    $("#sparkline-avg-time-on-site").sparkline(value, options);
    options.lineColor = app.color.gray;
    options.highlightLineColor = app.color.gray;
    options.highlightSpotColor = app.color.gray;
    $("#sparkline-new-visits").sparkline(value, options);
    options.lineColor = app.color.black;
    options.highlightLineColor = app.color.black;
    options.highlightSpotColor = app.color.black;
    $("#sparkline-return-visitors").sparkline(value, options);
  }

  renderDashboardSparkline();

  $(window).on("resize", function () {
    renderDashboardSparkline();
  });
};

var handleDashboardDatepicker = function () {
  "use strict";
  $("#datepicker-inline").datepicker({
    todayHighlight: true,
  });
};

var handleDashboardTodolist = function () {
  "use strict";
  $("[data-change=todolist]").click(function () {
    if ($(this).is(":checked")) {
      $(this).closest(".todolist-item").addClass("active");
    } else {
      $(this).closest(".todolist-item").removeClass("active");
    }
  });
};

var Dashboard = (function () {
  "use strict";
  return {
    //main function
    init: function () {
      handleDashboardGritterNotification();
      handleDashboardSparkline();
      handleInteractiveChart();
      handleDonutChart();
      handleDashboardTodolist();
      handleVectorMap();
      handleDashboardDatepicker();

      $(document).on("theme-change", function () {
        handleInteractiveChart();
        handleDonutChart();
      });
    },
  };
})();

$(document).ready(function () {
  Dashboard.init();
});

// Maincontrollerから情報を取ってくる。→web.phpへ飛ぶ
async function fetchSampleData() {
  const response = await fetch("/sample-data");
  const data = await response.json();
  return data;
}

// 取得した情報からピンを表示する関数
function placePins(filteredData) {
  const stationViewCanvas = document.getElementById("stationViewCanvas");
  const viewContainer = document.getElementById("viewContainer");

  // 既存のピンを削除
  viewContainer.querySelectorAll(".pin").forEach((pin) => pin.remove());

  // 新しいピンを配置
  filteredData.forEach((item) => {
    const pin = document.createElement("div");
    const x = item.xnum;
    const y = item.ynum;
    pin.style.left = `${x/1.08}px`; // viewContainer要素の左端からの距離
    pin.style.top = `${y/1.08}px`; // viewContainer要素の上端からの距離
    pin.classList.add("pin");
    viewContainer.appendChild(pin);
  });
}




$(document).ready(function () {
  $("span").click(async function () {
    let stationName = $(this).text();
    $("#station").val(stationName);
    $("#subway").addClass("hide");
    $("#canvasContainer").removeClass("hide");

    const data = await fetchSampleData(); // 関数を呼び出し、データを取得
    console.log(data);
    // ここで選択された駅名のデータだけをフィルタリングする
    const filteredData = data.filter((item) => {
      const stationValue = item.station.split(":")[1]; // 'station:' 以降の文字列を取得
      return stationValue === stationName;
    });
    console.log(filteredData); // フィルタリングされたデータを表示
    placePins(filteredData); // 取得したデータを使ってピンを配置

    const canvas = document.getElementById("stationViewCanvas");
    const ctx = canvas.getContext("2d");
    const img = new Image();
    img.src = "../../images/station/" + stationName + ".png";
    img.onload = function () {
      const aspectRatio = img.width / img.height;
      const maxWidth = $(canvas).parent().width();
      const maxHeight = $(canvas).parent().height();
      let width, height;
      if (maxWidth / maxHeight > aspectRatio) {
        width = maxHeight * aspectRatio;
        height = maxHeight;
      } else {
        width = maxWidth;
        height = maxWidth / aspectRatio;
      }
      canvas.width = width;
      canvas.height = height;
      canvas.style.width = width + "px";
      canvas.style.height = height + "px";
      ctx.drawImage(img, 0, 0, width, height);
    };

    // .pinをクリックした時の処理
    $(document).on("click", ".pin", function () {
      alert("aaa");
    });
    // .pin 要素を取得
    const pinElements = document.querySelectorAll(".pin");
    // それぞれの .pin 要素に対して処理を行う
    pinElements.forEach((pinElement) => {
      // ページロード時に .pin-init クラスを追加
      pinElement.classList.add("pin-init");

      // Pin 要素にマウスオーバーイベントリスナーを追加
      pinElement.addEventListener("mouseover", () => {
        // .pin-hover クラスを追加し、.pin-init クラスを削除
        pinElement.classList.add("pin-hover");
        pinElement.classList.remove("pin-init");

        // ホバーしているピン以外のピンの透過度を0.5にする
        pinElements.forEach((otherPinElement) => {
          if (otherPinElement !== pinElement) {
            otherPinElement.style.opacity = 0.5;
          }
        });
      });

      // Pin 要素にマウスアウトイベントリスナーを追加
      pinElement.addEventListener("mouseout", () => {
        // .pin-hover クラスを削除
        pinElement.classList.remove("pin-hover");

        // すべてのピンの透過度を1に戻す
        pinElements.forEach((otherPinElement) => {
          otherPinElement.style.opacity = 1;
        });
      });
    });
  });

  $(document).on("click", ".returnSubway", function () {
    location.reload();
  });
});
