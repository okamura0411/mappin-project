/**
 * State-based routing for AngularJS 1.x
 * @version v1.0.30
 * @link https://ui-router.github.io
 * @license MIT License, http://www.opensource.org/licenses/MIT
 */
!function(e,r){"object"==typeof exports&&"undefined"!=typeof module?r(exports,require("@uirouter/core"),require("angular")):"function"==typeof define&&define.amd?define(["exports","@uirouter/core","angular"],r):r((e=e||self)["@uirouter/angularjs-resolve-service"]={},e["@uirouter/core"],e.angular)}(this,(function(e,r,t){"use strict";var o={resolve:function(e,t,o){void 0===t&&(t={});var n=new r.PathNode(new r.StateObject({params:{},resolvables:[]})),u=new r.PathNode(new r.StateObject({params:{},resolvables:[]})),a=new r.ResolveContext([n,u]);a.addResolvables(r.resolvablesBuilder({resolve:e}),u.state);var s=function(e){var o=function(e){return r.resolvablesBuilder({resolve:r.mapObj(e,(function(e){return function(){return e}}))})};a.addResolvables(o(e),n.state),a.addResolvables(o(t),u.state);var s=function(e,r){return e[r.token]=r.value,e};return a.resolvePath().then((function(e){return e.reduce(s,{})}))};return o?o.then(s):s({})}},n=function(){return o};t.module("ui.router").factory("$resolve",n),e.resolveFactory=n,Object.defineProperty(e,"__esModule",{value:!0})}));
//# sourceMappingURL=resolveService.min.js.map
