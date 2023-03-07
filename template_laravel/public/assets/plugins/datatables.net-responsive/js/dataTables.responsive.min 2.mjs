/*! Responsive 2.4.0
 * 2014-2022 SpryMedia Ltd - datatables.net/license
 */
import $ from"jquery";import DataTable from"datatables.net";var Responsive=function(e,t){if(!DataTable.versionCheck||!DataTable.versionCheck("1.10.10"))throw"DataTables Responsive requires DataTables 1.10.10 or newer";this.s={childNodeStore:{},columns:[],current:[],dt:new DataTable.Api(e)},this.s.dt.settings()[0].responsive||(t&&"string"==typeof t.details?t.details={type:t.details}:t&&!1===t.details?t.details={type:!1}:t&&!0===t.details&&(t.details={type:"inline"}),this.c=$.extend(!0,{},Responsive.defaults,DataTable.defaults.responsive,t),(e.responsive=this)._constructor())},Api=($.extend(Responsive.prototype,{_constructor:function(){var r=this,i=this.s.dt,e=i.settings()[0],t=$(window).innerWidth(),e=(i.settings()[0]._responsive=this,$(window).on("resize.dtr orientationchange.dtr",DataTable.util.throttle(function(){var e=$(window).innerWidth();e!==t&&(r._resize(),t=e)})),e.oApi._fnCallbackReg(e,"aoRowCreatedCallback",function(e,t,n){-1!==$.inArray(!1,r.s.current)&&$(">td, >th",e).each(function(e){e=i.column.index("toData",e);!1===r.s.current[e]&&$(this).css("display","none")})}),i.on("destroy.dtr",function(){i.off(".dtr"),$(i.table().body()).off(".dtr"),$(window).off("resize.dtr orientationchange.dtr"),i.cells(".dtr-control").nodes().to$().removeClass("dtr-control"),$.each(r.s.current,function(e,t){!1===t&&r._setColumnVis(e,!0)})}),this.c.breakpoints.sort(function(e,t){return e.width<t.width?1:e.width>t.width?-1:0}),this._classLogic(),this._resizeAuto(),this.c.details);!1!==e.type&&(r._detailsInit(),i.on("column-visibility.dtr",function(){r._timer&&clearTimeout(r._timer),r._timer=setTimeout(function(){r._timer=null,r._classLogic(),r._resizeAuto(),r._resize(!0),r._redrawChildren()},100)}),i.on("draw.dtr",function(){r._redrawChildren()}),$(i.table().node()).addClass("dtr-"+e.type)),i.on("column-reorder.dtr",function(e,t,n){r._classLogic(),r._resizeAuto(),r._resize(!0)}),i.on("column-sizing.dtr",function(){r._resizeAuto(),r._resize()}),i.on("column-calc.dt",function(e,t){for(var n=r.s.current,i=0;i<n.length;i++){var s=t.visible.indexOf(i);!1===n[i]&&0<=s&&t.visible.splice(s,1)}}),i.on("preXhr.dtr",function(){var e=[];i.rows().every(function(){this.child.isShown()&&e.push(this.id(!0))}),i.one("draw.dtr",function(){r._resizeAuto(),r._resize(),i.rows(e).every(function(){r._detailsDisplay(this,!1)})})}),i.on("draw.dtr",function(){r._controlClass()}).on("init.dtr",function(e,t,n){"dt"===e.namespace&&(r._resizeAuto(),r._resize(),$.inArray(!1,r.s.current)&&i.columns.adjust())}),this._resize()},_childNodes:function(e,t,n){var i=t+"-"+n;if(this.s.childNodeStore[i])return this.s.childNodeStore[i];for(var s=[],r=e.cell(t,n).node().childNodes,o=0,d=r.length;o<d;o++)s.push(r[o]);return this.s.childNodeStore[i]=s},_childNodesRestore:function(e,t,n){var i=t+"-"+n;if(this.s.childNodeStore[i]){for(var s=e.cell(t,n).node(),r=this.s.childNodeStore[i][0].parentNode.childNodes,o=[],d=0,a=r.length;d<a;d++)o.push(r[d]);for(var l=0,c=o.length;l<c;l++)s.appendChild(o[l]);this.s.childNodeStore[i]=void 0}},_columnsVisiblity:function(n){for(var i=this.s.dt,e=this.s.columns,t=e.map(function(e,t){return{columnIdx:t,priority:e.priority}}).sort(function(e,t){return e.priority!==t.priority?e.priority-t.priority:e.columnIdx-t.columnIdx}),s=$.map(e,function(e,t){return!1===i.column(t).visible()?"not-visible":(!e.auto||null!==e.minWidth)&&(!0===e.auto?"-":-1!==$.inArray(n,e.includeIn))}),r=0,o=0,d=s.length;o<d;o++)!0===s[o]&&(r+=e[o].minWidth);var a=i.settings()[0].oScroll,a=a.sY||a.sX?a.iBarWidth:0,l=i.table().container().offsetWidth-a-r;for(o=0,d=s.length;o<d;o++)e[o].control&&(l-=e[o].minWidth);var c=!1;for(o=0,d=t.length;o<d;o++){var u=t[o].columnIdx;"-"===s[u]&&!e[u].control&&e[u].minWidth&&(c||l-e[u].minWidth<0?s[u]=!(c=!0):s[u]=!0,l-=e[u].minWidth)}var h=!1;for(o=0,d=e.length;o<d;o++)if(!e[o].control&&!e[o].never&&!1===s[o]){h=!0;break}for(o=0,d=e.length;o<d;o++)e[o].control&&(s[o]=h),"not-visible"===s[o]&&(s[o]=!1);return-1===$.inArray(!0,s)&&(s[0]=!0),s},_classLogic:function(){function d(e,t,n,i){var s,r,o;if(n){if("max-"===n)for(s=a._find(t).width,r=0,o=l.length;r<o;r++)l[r].width<=s&&u(e,l[r].name);else if("min-"===n)for(s=a._find(t).width,r=0,o=l.length;r<o;r++)l[r].width>=s&&u(e,l[r].name);else if("not-"===n)for(r=0,o=l.length;r<o;r++)-1===l[r].name.indexOf(i)&&u(e,l[r].name)}else c[e].includeIn.push(t)}var a=this,l=this.c.breakpoints,i=this.s.dt,c=i.columns().eq(0).map(function(e){var t=this.column(e),n=t.header().className,e=i.settings()[0].aoColumns[e].responsivePriority,t=t.header().getAttribute("data-priority");return void 0===e&&(e=null==t?1e4:+t),{className:n,includeIn:[],auto:!1,control:!1,never:!!n.match(/\b(dtr\-)?never\b/),priority:e}}),u=function(e,t){e=c[e].includeIn;-1===$.inArray(t,e)&&e.push(t)};c.each(function(e,s){for(var t=e.className.split(" "),r=!1,n=0,i=t.length;n<i;n++){var o=t[n].trim();if("all"===o||"dtr-all"===o)return r=!0,void(e.includeIn=$.map(l,function(e){return e.name}));if("none"===o||"dtr-none"===o||e.never)return void(r=!0);if("control"===o||"dtr-control"===o)return r=!0,void(e.control=!0);$.each(l,function(e,t){var n=t.name.split("-"),i=new RegExp("(min\\-|max\\-|not\\-)?("+n[0]+")(\\-[_a-zA-Z0-9])?"),i=o.match(i);i&&(r=!0,i[2]===n[0]&&i[3]==="-"+n[1]?d(s,t.name,i[1],i[2]+i[3]):i[2]!==n[0]||i[3]||d(s,t.name,i[1],i[2]))})}r||(e.auto=!0)}),this.s.columns=c},_controlClass:function(){var e,t,n;"inline"===this.c.details.type&&(e=this.s.dt,t=this.s.current,n=$.inArray(!0,t),e.cells(null,function(e){return e!==n},{page:"current"}).nodes().to$().filter(".dtr-control").removeClass("dtr-control"),e.cells(null,n,{page:"current"}).nodes().to$().addClass("dtr-control"))},_detailsDisplay:function(e,t){var n,i=this,s=this.s.dt,r=this.c.details;r&&!1!==r.type&&(n="string"==typeof r.renderer?Responsive.renderer[r.renderer]():r.renderer,!0!==(r=r.display(e,t,function(){return n.call(i,s,e[0],i._detailsObj(e[0]))}))&&!1!==r||$(s.table().node()).triggerHandler("responsive-display.dt",[s,e,r,t]))},_detailsInit:function(){var n=this,i=this.s.dt,e=this.c.details,s=("inline"===e.type&&(e.target="td.dtr-control, th.dtr-control"),i.on("draw.dtr",function(){n._tabIndexes()}),n._tabIndexes(),$(i.table().body()).on("keyup.dtr","td, th",function(e){13===e.keyCode&&$(this).data("dtr-keyboard")&&$(this).click()}),e.target),e="string"==typeof s?s:"td, th";void 0===s&&null===s||$(i.table().body()).on("click.dtr mousedown.dtr mouseup.dtr",e,function(e){if($(i.table().node()).hasClass("collapsed")&&-1!==$.inArray($(this).closest("tr").get(0),i.rows().nodes().toArray())){if("number"==typeof s){var t=s<0?i.columns().eq(0).length+s:s;if(i.cell(this).index().column!==t)return}t=i.row($(this).closest("tr"));"click"===e.type?n._detailsDisplay(t,!1):"mousedown"===e.type?$(this).css("outline","none"):"mouseup"===e.type&&$(this).trigger("blur").css("outline","")}})},_detailsObj:function(n){var i=this,s=this.s.dt;return $.map(this.s.columns,function(e,t){if(!e.never&&!e.control)return{className:(e=s.settings()[0].aoColumns[t]).sClass,columnIndex:t,data:s.cell(n,t).render(i.c.orthogonal),hidden:s.column(t).visible()&&!i.s.current[t],rowIndex:n,title:null!==e.sTitle?e.sTitle:$(s.column(t).header()).text()}})},_find:function(e){for(var t=this.c.breakpoints,n=0,i=t.length;n<i;n++)if(t[n].name===e)return t[n]},_redrawChildren:function(){var n=this,i=this.s.dt;i.rows({page:"current"}).iterator("row",function(e,t){i.row(t);n._detailsDisplay(i.row(t),!0)})},_resize:function(n){for(var e,i=this,t=this.s.dt,s=$(window).innerWidth(),r=this.c.breakpoints,o=r[0].name,d=this.s.columns,a=this.s.current.slice(),l=r.length-1;0<=l;l--)if(s<=r[l].width){o=r[l].name;break}var c=this._columnsVisiblity(o),u=(this.s.current=c,!1);for(l=0,e=d.length;l<e;l++)if(!1===c[l]&&!d[l].never&&!d[l].control&&!1==!t.column(l).visible()){u=!0;break}$(t.table().node()).toggleClass("collapsed",u);var h=!1,p=0;t.columns().eq(0).each(function(e,t){!0===c[t]&&p++,!n&&c[t]===a[t]||(h=!0,i._setColumnVis(e,c[t]))}),this._redrawChildren(),h&&($(t.table().node()).trigger("responsive-resize.dt",[t,this.s.current]),0===t.page.info().recordsDisplay&&$("td",t.table().body()).eq(0).attr("colspan",p)),i._controlClass()},_resizeAuto:function(){var e,t,n,i,s,r=this.s.dt,o=this.s.columns,d=this;this.c.auto&&-1!==$.inArray(!0,$.map(o,function(e){return e.auto}))&&($.isEmptyObject(this.s.childNodeStore)||$.each(this.s.childNodeStore,function(e){e=e.split("-");d._childNodesRestore(r,+e[0],+e[1])}),r.table().node().offsetWidth,r.columns,e=r.table().node().cloneNode(!1),t=$(r.table().header().cloneNode(!1)).appendTo(e),i=$(r.table().body()).clone(!1,!1).empty().appendTo(e),e.style.width="auto",n=r.columns().header().filter(function(e){return r.column(e).visible()}).to$().clone(!1).css("display","table-cell").css("width","auto").css("min-width",0),$(i).append($(r.rows({page:"current"}).nodes()).clone(!1)).find("th, td").css("display",""),(i=r.table().footer())&&(i=$(i.cloneNode(!1)).appendTo(e),s=r.columns().footer().filter(function(e){return r.column(e).visible()}).to$().clone(!1).css("display","table-cell"),$("<tr/>").append(s).appendTo(i)),$("<tr/>").append(n).appendTo(t),"inline"===this.c.details.type&&$(e).addClass("dtr-inline collapsed"),$(e).find("[name]").removeAttr("name"),$(e).css("position","relative"),(s=$("<div/>").css({width:1,height:1,overflow:"hidden",clear:"both"}).append(e)).insertBefore(r.table().node()),n.each(function(e){e=r.column.index("fromVisible",e);o[e].minWidth=this.offsetWidth||0}),s.remove())},_responsiveOnlyHidden:function(){var n=this.s.dt;return $.map(this.s.current,function(e,t){return!1===n.column(t).visible()||e})},_setColumnVis:function(e,t){var n=this,i=this.s.dt,s=t?"":"none";$(i.column(e).header()).css("display",s).toggleClass("dtr-hidden",!t),$(i.column(e).footer()).css("display",s).toggleClass("dtr-hidden",!t),i.column(e).nodes().to$().css("display",s).toggleClass("dtr-hidden",!t),$.isEmptyObject(this.s.childNodeStore)||i.cells(null,e).indexes().each(function(e){n._childNodesRestore(i,e.row,e.column)})},_tabIndexes:function(){var e=this.s.dt,t=e.cells({page:"current"}).nodes().to$(),n=e.settings()[0],i=this.c.details.target;t.filter("[data-dtr-keyboard]").removeData("[data-dtr-keyboard]"),("number"==typeof i?e.cells(null,i,{page:"current"}).nodes().to$():$(i="td:first-child, th:first-child"===i?">td:first-child, >th:first-child":i,e.rows({page:"current"}).nodes())).attr("tabIndex",n.iTabIndex).data("dtr-keyboard",1)}}),Responsive.breakpoints=[{name:"desktop",width:1/0},{name:"tablet-l",width:1024},{name:"tablet-p",width:768},{name:"mobile-l",width:480},{name:"mobile-p",width:320}],Responsive.display={childRow:function(e,t,n){return t?$(e.node()).hasClass("parent")?(e.child(n(),"child").show(),!0):void 0:e.child.isShown()?(e.child(!1),$(e.node()).removeClass("parent"),!1):(e.child(n(),"child").show(),$(e.node()).addClass("parent"),!0)},childRowImmediate:function(e,t,n){return!t&&e.child.isShown()||!e.responsive.hasHidden()?(e.child(!1),$(e.node()).removeClass("parent"),!1):(e.child(n(),"child").show(),$(e.node()).addClass("parent"),!0)},modal:function(r){return function(e,t,n){var i,s;t?$("div.dtr-modal-content").empty().append(n()):(i=function(){s.remove(),$(document).off("keypress.dtr")},s=$('<div class="dtr-modal"/>').append($('<div class="dtr-modal-display"/>').append($('<div class="dtr-modal-content"/>').append(n())).append($('<div class="dtr-modal-close">&times;</div>').click(function(){i()}))).append($('<div class="dtr-modal-background"/>').click(function(){i()})).appendTo("body"),$(document).on("keyup.dtr",function(e){27===e.keyCode&&(e.stopPropagation(),i())})),r&&r.header&&$("div.dtr-modal-content").prepend("<h2>"+r.header(e)+"</h2>")}}},Responsive.renderer={listHiddenNodes:function(){return function(i,e,t){var s=this,r=$('<ul data-dtr-index="'+e+'" class="dtr-details"/>'),o=!1;$.each(t,function(e,t){var n;t.hidden&&(n=t.className?'class="'+t.className+'"':"",$("<li "+n+' data-dtr-index="'+t.columnIndex+'" data-dt-row="'+t.rowIndex+'" data-dt-column="'+t.columnIndex+'"><span class="dtr-title">'+t.title+"</span> </li>").append($('<span class="dtr-data"/>').append(s._childNodes(i,t.rowIndex,t.columnIndex))).appendTo(r),o=!0)});return!!o&&r}},listHidden:function(){return function(e,t,n){n=$.map(n,function(e){var t=e.className?'class="'+e.className+'"':"";return e.hidden?"<li "+t+' data-dtr-index="'+e.columnIndex+'" data-dt-row="'+e.rowIndex+'" data-dt-column="'+e.columnIndex+'"><span class="dtr-title">'+e.title+'</span> <span class="dtr-data">'+e.data+"</span></li>":""}).join("");return!!n&&$('<ul data-dtr-index="'+t+'" class="dtr-details"/>').append(n)}},tableAll:function(i){return i=$.extend({tableClass:""},i),function(e,t,n){n=$.map(n,function(e){return"<tr "+(e.className?'class="'+e.className+'"':"")+' data-dt-row="'+e.rowIndex+'" data-dt-column="'+e.columnIndex+'"><td>'+e.title+":</td> <td>"+e.data+"</td></tr>"}).join("");return $('<table class="'+i.tableClass+' dtr-details" width="100%"/>').append(n)}}},Responsive.defaults={breakpoints:Responsive.breakpoints,auto:!0,details:{display:Responsive.display.childRow,renderer:Responsive.renderer.listHidden(),target:0,type:"inline"},orthogonal:"display"},$.fn.dataTable.Api);Api.register("responsive()",function(){return this}),Api.register("responsive.index()",function(e){return{column:(e=$(e)).data("dtr-index"),row:e.parent().data("dtr-index")}}),Api.register("responsive.rebuild()",function(){return this.iterator("table",function(e){e._responsive&&e._responsive._classLogic()})}),Api.register("responsive.recalc()",function(){return this.iterator("table",function(e){e._responsive&&(e._responsive._resizeAuto(),e._responsive._resize())})}),Api.register("responsive.hasHidden()",function(){var e=this.context[0];return!!e._responsive&&-1!==$.inArray(!1,e._responsive._responsiveOnlyHidden())}),Api.registerPlural("columns().responsiveHidden()","column().responsiveHidden()",function(){return this.iterator("column",function(e,t){return!!e._responsive&&e._responsive._responsiveOnlyHidden()[t]},1)}),Responsive.version="2.4.0",$.fn.dataTable.Responsive=Responsive,$.fn.DataTable.Responsive=Responsive,$(document).on("preInit.dt.dtr",function(e,t,n){"dt"===e.namespace&&($(t.nTable).hasClass("responsive")||$(t.nTable).hasClass("dt-responsive")||t.oInit.responsive||DataTable.defaults.responsive)&&!1!==(e=t.oInit.responsive)&&new Responsive(t,$.isPlainObject(e)?e:{})});export default DataTable;