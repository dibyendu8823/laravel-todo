var baguetteBox=function(){function t(t,n){P.transforms=f(),P.svg=p(),e(),D=document.querySelectorAll(t),[].forEach.call(D,function(t){var e=t.getElementsByTagName("a");e=[].filter.call(e,function(t){return j.test(t.href)});var o=S.length;S.push(e),S[o].options=n,[].forEach.call(S[o],function(t,e){h(t,"click",function(t){t.preventDefault?t.preventDefault():t.returnValue=!1,i(o),a(e)})})})}function e(){return(b=v("baguetteBox-overlay"))?(k=v("baguetteBox-slider"),w=v("previous-button"),C=v("next-button"),void(T=v("close-button"))):(b=y("div"),b.id="baguetteBox-overlay",document.getElementsByTagName("body")[0].appendChild(b),k=y("div"),k.id="baguetteBox-slider",b.appendChild(k),w=y("button"),w.id="previous-button",w.innerHTML=P.svg?N:"&lt;",b.appendChild(w),C=y("button"),C.id="next-button",C.innerHTML=P.svg?x:"&gt;",b.appendChild(C),T=y("button"),T.id="close-button",T.innerHTML=P.svg?B:"X",b.appendChild(T),w.className=C.className=T.className="baguetteBox-button",void n())}function n(){h(b,"click",function(t){t.target&&"IMG"!==t.target.nodeName&&s()}),h(w,"click",function(t){t.stopPropagation?t.stopPropagation():t.cancelBubble=!0,c()}),h(C,"click",function(t){t.stopPropagation?t.stopPropagation():t.cancelBubble=!0,u()}),h(T,"click",function(t){t.stopPropagation?t.stopPropagation():t.cancelBubble=!0,s()}),h(b,"touchstart",function(t){E=t.changedTouches[0].pageX}),h(b,"touchmove",function(t){A||(t.preventDefault?t.preventDefault():t.returnValue=!1,touch=t.touches[0]||t.changedTouches[0],touch.pageX-E>40?(A=!0,c()):touch.pageX-E<-40&&(A=!0,u()))}),h(b,"touchend",function(){A=!1}),h(document,"keydown",function(t){switch(t.keyCode){case 37:c();break;case 39:u();break;case 27:s()}})}function i(t){if(H!==t){for(H=t,o(S[t].options);k.firstChild;)k.removeChild(k.firstChild);X.length=0;for(var e,n=0;n<S[t].length;n++)e=y("div"),e.className="full-image",e.id="baguette-img-"+n,X.push(e),k.appendChild(X[n])}}function o(t){t||(t={});for(var e in L)I[e]=L[e],"undefined"!=typeof t[e]&&(I[e]=t[e]);k.style.transition=k.style.webkitTransition="fadeIn"===I.animation?"opacity .4s ease":"slideIn"===I.animation?"":"none","auto"===I.buttons&&("ontouchstart"in window||1===S[H].length)&&(I.buttons=!1),w.style.display=C.style.display=I.buttons?"":"none"}function a(t){"block"!==b.style.display&&(M=t,r(M,function(){g(M),m(M)}),d(),b.style.display="block",setTimeout(function(){b.className="visible"},50))}function s(){"none"!==b.style.display&&(b.className="",setTimeout(function(){b.style.display="none"},500))}function r(t,e){var n=X[t];if("undefined"!=typeof n){if(n.getElementsByTagName("img")[0])return void(e&&e());imageElement=S[H][t],imageCaption=imageElement.getAttribute("data-caption")||imageElement.title,imageSrc=l(imageElement);var i=y("figure"),o=y("img"),a=y("figcaption");n.appendChild(i),i.innerHTML='<div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>',o.onload=function(){var n=document.querySelector("#baguette-img-"+t+" .spinner");i.removeChild(n),!I.async&&e&&e()},o.setAttribute("src",imageSrc),i.appendChild(o),I.captions&&imageCaption&&(a.innerHTML=imageCaption,i.appendChild(a)),I.async&&e&&e()}}function l(t){var e=imageElement.href;if(t.dataset){var n=[];for(var i in t.dataset)"at-"!==i.substring(0,3)||isNaN(i.substring(3))||(n[i.replace("at-","")]=t.dataset[i]);keys=Object.keys(n).sort(function(t,e){return parseInt(t)<parseInt(e)?-1:1});for(var o=window.innerWidth*window.devicePixelRatio,a=0;a<keys.length-1&&keys[a]<o;)a++;e=n[keys[a]]||e}return e}function u(){M<=X.length-2?(M++,d(),g(M)):I.animation&&(k.className="bounce-from-right",setTimeout(function(){k.className=""},400))}function c(){M>=1?(M--,d(),m(M)):I.animation&&(k.className="bounce-from-left",setTimeout(function(){k.className=""},400))}function d(){var t=100*-M+"%";"fadeIn"===I.animation?(k.style.opacity=0,setTimeout(function(){P.transforms?k.style.transform=k.style.webkitTransform="translate3d("+t+",0,0)":k.style.left=t,k.style.opacity=1},400)):P.transforms?k.style.transform=k.style.webkitTransform="translate3d("+t+",0,0)":k.style.left=t}function f(){var t=y("div");return"undefined"!=typeof t.style.perspective||"undefined"!=typeof t.style.webkitPerspective}function p(){var t=y("div");return t.innerHTML="<svg/>","http://www.w3.org/2000/svg"==(t.firstChild&&t.firstChild.namespaceURI)}function g(t){t-M>=I.preload||r(t+1,function(){g(t+1)})}function m(t){M-t>=I.preload||r(t-1,function(){m(t-1)})}function h(t,e,n){t.addEventListener?t.addEventListener(e,n,!1):t.attachEvent("on"+e,n)}function v(t){return document.getElementById(t)}function y(t){return document.createElement(t)}var b,k,w,C,T,E,N='<svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',x='<svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',B='<svg width="30" height="30"><g stroke="rgb(160, 160, 160)" stroke-width="4"><line x1="5" y1="5" x2="25" y2="25"/><line x1="5" y1="25" x2="25" y2="5"/></g></svg>',I={},L={captions:!0,buttons:"auto",async:!1,preload:2,animation:"slideIn"},P={},M=0,H=-1,A=!1,j=/.+\.(gif|jpe?g|png|webp)/i,D=[],S=[],X=[];return[].forEach||(Array.prototype.forEach=function(t,e){for(var n=0;n<this.length;n++)t.call(e,this[n],n,this)}),[].filter||(Array.prototype.filter=function(t,e,n,i,o){for(n=this,i=[],o=0;o<n.length;o++)t.call(e,n[o],o,n)&&i.push(n[o]);return i}),{run:t}}();