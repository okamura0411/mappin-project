/*! `taggerscript` grammar compiled for Highlight.js 11.7.0 */
var hljsGrammar=(()=>{"use strict";return e=>({name:"Tagger Script",contains:[{
className:"comment",begin:/\$noop\(/,end:/\)/,contains:[{begin:/\\[()]/},{
begin:/\(/,end:/\)/,contains:[{begin:/\\[()]/},"self"]}],relevance:10},{
className:"keyword",begin:/\$[_a-zA-Z0-9]+(?=\()/},{className:"variable",
begin:/%[_a-zA-Z0-9:]+%/},{className:"symbol",begin:/\\[\\nt$%,()]/},{
className:"symbol",begin:/\\u[a-fA-F0-9]{4}/}]})})();export default hljsGrammar;