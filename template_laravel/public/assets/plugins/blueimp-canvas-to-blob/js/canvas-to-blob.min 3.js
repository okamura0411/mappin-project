!function(t){"use strict";var a=t.HTMLCanvasElement&&t.HTMLCanvasElement.prototype,l=t.Blob&&function(){try{return Boolean(new Blob)}catch(t){return!1}}(),u=l&&t.Uint8Array&&function(){try{return 100===new Blob([new Uint8Array(100)]).size}catch(t){return!1}}(),c=t.BlobBuilder||t.WebKitBlobBuilder||t.MozBlobBuilder||t.MSBlobBuilder,b=/^data:((.*?)(;charset=.*?)?)(;base64)?,/,r=(l||c)&&t.atob&&t.ArrayBuffer&&t.Uint8Array&&function(t){var e,o,n,a,r,i=t.match(b);if(!i)throw new Error("invalid data URI");for(e=i[2]?i[1]:"text/plain"+(i[3]||";charset=US-ASCII"),n=!!i[4],i=t.slice(i[0].length),o=(n?atob:decodeURIComponent)(i),n=new ArrayBuffer(o.length),a=new Uint8Array(n),r=0;r<o.length;r+=1)a[r]=o.charCodeAt(r);return l?new Blob([u?a:n],{type:e}):((i=new c).append(n),i.getBlob(e))};t.HTMLCanvasElement&&!a.toBlob&&(a.mozGetAsFile?a.toBlob=function(t,e,o){var n=this;setTimeout(function(){o&&a.toDataURL&&r?t(r(n.toDataURL(e,o))):t(n.mozGetAsFile("blob",e))})}:a.toDataURL&&r&&(a.msToBlob?a.toBlob=function(t,e,o){var n=this;setTimeout(function(){(e&&"image/png"!==e||o)&&a.toDataURL&&r?t(r(n.toDataURL(e,o))):t(n.msToBlob(e))})}:a.toBlob=function(t,e,o){var n=this;setTimeout(function(){t(r(n.toDataURL(e,o)))})})),"function"==typeof define&&define.amd?define(function(){return r}):"object"==typeof module&&module.exports?module.exports=r:t.dataURLtoBlob=r}(window);
//# sourceMappingURL=canvas-to-blob.min.js.map