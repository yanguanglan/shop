/*pub-1|2013-11-19 10:19:12*/(function(){var ax=window,P=document,Z=(new Date()).getTime(),T="_ap",a="g_tb_aplus_loaded";if(!ax[T]){ax[T]=[]}if(!P.getElementsByTagName("body").length){setTimeout(arguments.callee,50);return}if(ax[a]){return}ax[a]=1;var R="http://a.tbcdn.cn/s/fdc/lsproxy.js?v=20130106";var av="7",j=location,m=j.protocol,H="https:"==m,J=parent!==self,aW=H?m:"http:",z="0.0",i=j.pathname,h=j.hostname,a2=aW+"//log.mmstat.com/",aP=H?a2:(aW+"//gm.mmstat.com/"),aN=a2+ab(j.hostname)+".gif",M=[["logtype",J?0:1]],aG=j.href,ay=j.hash,aw=P.referrer,aM=H&&(aG.indexOf("login.taobao.com")>=0||aG.indexOf("login.tmall.com")>=0),an=!!P.attachEvent,at="attachEvent",p="addEventListener",aI=an?at:p,g=false,a1=true,af="::-plain-::",aA="data-spm",aO="data-spm-protocol",aJ="goldlog_queue",O,az=y(),o,q,aD=A("cna"),ac={},D,aC={},W,L,l,aB,aS,ar,ae,x=g,aY=ax._SPM_a,aX=ax._SPM_b,ah,ad,aR,u,G=g,B;aw=(function(){var a8,a7="wm_referrer",a6="refer_pv_id",a5=ax.name||"",a3=U(a5),a9=a3[a7],a4=a3.wm_old_value;a8=P.referrer||d(a9);O=a3[a6];if(!aM){if(!I(a4)){ax.name=d(a4)}else{if(!I(a9)){ax.name=a5.replace(/&?\bwm_referrer=[^&]*/g,"")}}}return a8})();function ab(a7){if(J){return"y"}var a3="o",a8=[["ju.taobao.com","4"],["juhuasuan.com","4"],["alipay.com","f"],["china.alibaba.com","6"],["1688.com","6"],["alibaba.com","7"],["aliloan.com","8"],["cnzz.com","9"],["net.cn","a"],["hichina.com","a"],["phpwind.com","b"],["aliyun.com","c"],["tao123.com","d"],["alimama.com","e"],["taobao.com","1"],["tmall.com","2"],["tmall.hk","2"],["etao.com","3"],["*",a3]],a5=a8.length,a4,a6;for(a4=0;a4<a5;a4++){a6=a8[a4];if(aT(a7,a6[0])){return a6[1]}}return a3}function aT(a4,a3){return a4.indexOf(a3)>-1}function aj(a4,a3){return a4.indexOf(a3)==0}function al(a6,a5){var a4=a6.length,a3=a5.length;return a4>=a3&&a6.indexOf(a5)==(a4-a3)}function aU(a3){return aZ(a3)?a3.replace(/^\s+|\s+$/g,""):""}function d(a6,a4){var a3=a4||"";if(a6){try{a3=decodeURIComponent(a6)}catch(a5){}}return a3}function E(a6){var a3=[],a5,a4;for(a5 in a6){if(a6.hasOwnProperty(a5)){a4=""+a6[a5];a3.push(aj(a5,af)?a4:(a5+"="+encodeURIComponent(a4)))}}return a3.join("&")}function aE(a4){var a5=[],a7,a6,a8,a3=a4.length;for(a8=0;a8<a3;a8++){a7=a4[a8][0];a6=a4[a8][1];a5.push(aj(a7,af)?a6:(a7+"="+encodeURIComponent(a6)))}return a5.join("&")}function aK(a4){var a5={},a3;for(a3 in a4){if(a4.hasOwnProperty(a3)){a5[a3]=a4[a3]}}return a5}function v(a5,a4){for(var a3 in a4){if(a4.hasOwnProperty(a3)){a5[a3]=a4[a3]}}return a5}function U(a8){var a4=a8.split("&"),a5=0,a3=a4.length,a6,a7={};for(;a5<a3;a5++){a6=a4[a5].split("=");a7[a6[0]]=d(a6[1])}return a7}function X(a3){return typeof a3=="number"}function I(a3){return typeof a3=="undefined"}function aZ(a3){return typeof a3=="string"}function b(a3){return Object.prototype.toString.call(a3)==="[object Array]"}function N(a3,a4){return a3&&a3.getAttribute?(a3.getAttribute(a4)||""):""}function ai(a4){var a3;try{a3=aU(a4.getAttribute("href",2))}catch(a5){}return a3||""}function n(){var a7=P.getElementById("tb-beacon-aplus");var a5=N(a7,"exparams");if(!a5){return a5}var a4=["taobao.com","tmall.com","etao.com","hitao.com","taohua.com","juhuasuan.com","alimama.com"];var a6;var a3;if(J){a3=a4.length;for(a6=0;a6<a3;a6++){if(aT(h,a4[a6])){return a5}}a5=a5.replace(/\buserid=\w*&?/,"")}a5=a5.replace(/\buserid=/,"uidaplus=");return a5}function c(){o=o||P.getElementsByTagName("head")[0];return q||(o?(q=o.getElementsByTagName("meta")):[])}function a0(a7,a8){var a5=a7.split(";"),a6,a4=a5.length,a3;for(a6=0;a6<a4;a6++){a3=a5[a6].split("=");a8[aU(a3[0])||af]=d(aU(a3.slice(1).join("=")))}}function A(a3){var a4=P.cookie.match(new RegExp("(?:^|;)\\s*"+a3+"=([^;]+)"));return a4?a4[1]:""}function aF(){return Math.floor(Math.random()*268435456).toString(16)}function aa(){var a4,a7,a5=c(),a3=a5.length,a6;for(a4=0;a4<a3;a4++){a7=a5[a4];if(N(a7,"name")=="microscope-data"){a6=N(a7,"content");a0(a6,ac);G=a1}}D=E(ac);aS=ac.pageId;l=ac.shopId;aB=ac.siteInstanceId;ar=ac.siteCategory;ae=ac.prototypeId;L=aB||l}function am(){var a4,a7,a5=c(),a3=a5.length,a6;for(a4=0;a4<a3;a4++){a7=a5[a4];if(N(a7,"name")=="atp-beacon"){a6=N(a7,"content");a0(a6,aC)}}W=E(aC)}function aL(){var a7=c(),a5,a4,a6,a3;for(a5=0,a4=a7.length;a5<a4;a5++){a6=a7[a5];a3=N(a6,"name");if(a3==aA){ah=N(a6,aO)}}}function Q(a8){var ba=c(),a7,a5,a4,a9,a3,a6;if(ba){for(a7=0,a5=ba.length;a7<a5;a7++){a9=ba[a7];a3=N(a9,"name");if(a3==a8){aR=N(a9,"content");if(aR.indexOf(":")>=0){a4=aR.split(":");ah=a4[0]=="i"?"i":"u";aR=a4[1]}a6=N(a9,aO);if(a6){ah=(a6=="i"?"i":"u")}u=aj(aR,"110");ad=(u?z:aR);return a1}}}return g}function aV(){if(!I(ad)){return ad}if(aY&&aX){aY=aY.replace(/^{(\w+)}$/g,"$1");aX=aX.replace(/^{(\w+)}$/g,"$1");x=a1;ad=aY+"."+aX;aL();B.spm_ab=[aY,aX];return ad}var a5=P.getElementsByTagName("head")[0],a4;Q(aA)||Q("spm-id");ad=ad||z;if(!ad){return ad}var a3=P.getElementsByTagName("body");var a6;a4=ad.split(".");B.spm_ab=a4;a3=a3&&a3.length?a3[0]:null;if(a3){a6=N(a3,aA);if(a6){ad=a4[0]+"."+a6;B.spm_ab=[a4[0],a6]}else{if(a4.length==1){ad=z}}}return ad}function y(){var a3="g_aplus_pv_id",a5="",a4="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";if(!ax[a3]){while(a5.length<6){a5+=a4.substr(Math.floor(Math.random()*62),1)}ax[a3]=a5}return ax[a3]}function ap(a4){a4=(a4||"").split("#")[0].split("?")[0];var a3=a4.length,a5=function(a9){var a8,a6=a9.length,a7=0;for(a8=0;a8<a6;a8++){a7=a7*31+a9.charCodeAt(a8)}return a7};return a3?a5(a3+"#"+a4.charCodeAt(a3-1)):-1}function w(){var a3=ax[T];var a4;a3.push=a4=function(){for(var a7=0,a6=arguments.length,a8,a9;a7<a6;a7++){a8=arguments[a7];if(aZ(a8)){B.send(aP+a8)}else{if(b(a8)&&(a9=a8[0])!="push"){(a3[a9]=a3[a9]||[]).push(a8.slice(1))}}}};var a5;while(a5=a3.shift()){a4(a5)}}function t(a3){var a4=ax.KISSY;if(a4){a4.ready(a3)}else{if(ax.jQuery){jQuery(P).ready(a3)}else{if(P.readyState==="complete"){a3()}else{Y(ax,"load",a3)}}}}function r(){if(J){return}var a4=ax.name||"",a5=aM?(P.referrer||aG):aG,a3={refer_pv_id:az};if(H){a3.wm_referrer=a5}if(a4.indexOf("=")==-1){a3.wm_old_value=a4;ax.name=E(a3)}else{if(aM&&a4.match(/&?\bwm_referrer=[^&]+/)){delete a3.wm_referrer}a4=U(a4);v(a4,a3);ax.name=E(a4)}}function Y(a4,a5,a3){a4[aI]((an?"on":"")+a5,function(a7){a7=a7||ax.event;var a6=a7.target||a7.srcElement;a3(a7,a6)},g)}function aQ(){var a4,a3,a6=["/theme/info/info","/promo/co_header.php","fast_buy.htm","/add_collection.htm","/taobao_digital_iframe","/promo/co_header_taoinfo.php","/list_forum","/theme/info/info"];for(a4=0,a3=a6.length;a4<a3;a4++){if(i.indexOf(a6[a4])!=-1){return a1}}var a5=/^https?:\/\/[\w\.]+\.taobao\.com/i;return !a5.test(aw)}function f(){function a3(){var a9=ax[aJ],a6,a8,a5;if(!a9||!b(a9)||!a9.length){return}while(a6=a9.shift()){if(!a6||!a6.action||!aZ(a6.action)||!a6.arguments||!b(a6.arguments)){continue}a5=a6.action.split(".");a8=ax;while(a5.length){a8=a8[a5.shift()];if(!a8){return}}if(typeof a8=="function"){try{a8.apply(a8,a6.arguments)}catch(a7){}}}}try{a3()}catch(a4){}}function au(){var a3=function(){try{f();setTimeout(a3,200)}catch(a4){}};a3();Y(ax,"beforeunload",f)}function K(a3,a4){if(!a4){return}if(!s()){return B.send(a3,a4)}else{return ao({url:S(a3,a4),js:R})}}function aH(){return af+Math.random()}function ag(a5,a3){var a6=2146271213;var a4;for(a4=0;a4<a5.length;a4++){a6=((a6<<5)+a6)+a5.charCodeAt(a4)}return(a6&65535)%a3}function V(a4){var a3=a4.match(new RegExp("\\?.*spm=([\\w\\.\\-\\*]+)")),a5;return(a3&&(a5=a3[1])&&a5.split(".").length==5)?a5:null}function k(a9,a8){var a6,a3=a8.length,a7,a5,a4;for(a6=0;a6<a3;a6++){a7=a8[a6];a5=a7[0];a4=a7[1];if(a4){a9.push([a5,a4])}}}function C(){if(Math.random()<0.0001){e("sample.js?v=131028")}var a3=".tbcdn.cn/s/fdc/??spm.js,spmact.js?v=131014b";ak("http://a"+a3,"https://s"+a3);if(aB&&ae&&ae.match(/^[124]$/)&&l){e("wp-beacon.js?v=131014")}}function ak(a5,a3){var a4=P.createElement("script");a4.type="text/javascript";a4.async=true;a4.src=H?a3:a5;P.getElementsByTagName("head")[0].appendChild(a4)}function e(a5){var a4="http://a.tbcdn.cn/s/fdc/",a3="https://s.tbcdn.cn/s/fdc/";ak(a4+a5,a3+a5)}function aq(a6,a4){var a5=document.createElement("iframe");a5.style.width="1px";a5.style.height="1px";a5.style.position="absolute";a5.style.display="none";a5.src=a6;if(a4){a5.name=a4}var a3=document.getElementsByTagName("body")[0];a3.appendChild(a5);return a5}function s(){if(H){return false}var a4=navigator.userAgent;var a3=a4.split(" Safari/");if(a3.length!=2){return false}return ax.localStorage&&ax.postMessage&&a3[1].match(/[\d\.]+/)&&a4.indexOf("AppleWebKit")>-1&&a4.match(/\bVersion\/\d+/)&&!a4.match(/\bChrome\/\d+/)}function ao(a3){var a4="http://cdn.mmstat.com/aplus-proxy.html?v=20130115";aq(a4,JSON.stringify(a3));if(ax.addEventListener&&ax.JSON){ax.addEventListener("message",function(a5){var a9=a5.data;function bc(){var bf=h.split(".");var be=bf.length;if(be>1){return bf[be-2]+"."+bf[be-1]}else{return h}}try{a9=JSON.parse(a9)}catch(bb){return}var bd,a6,a8;for(var ba=0,a7=a9.length;ba<a7;ba++){bd=a9[ba];a8=bd.k;a6=encodeURIComponent(a8)+"="+(a8=="cna"?bd.v:encodeURIComponent(bd.v))+"; domain=."+bc()+"; path=/; expires="+(new Date(bd.t)).toGMTString();P.cookie=a6}})}}function S(a4,a6){var a5=a4.indexOf("?")==-1?"?":"&",a3=a6?(b(a6)?aE(a6):E(a6)):"";return a3?(a4+a5+a3):a4}B={version:av,pvid:az,referrer:aw,_d:{},_microscope_data:ac,on:Y,DOMReady:t,getCookie:A,tryToGetAttribute:N,tryToGetHref:ai,isNumber:X,send:function(a4,a5){var a3=new Image(),a7="_img_"+Math.random(),a6=S(a4,a5);ax[a7]=a3;a3.onload=a3.onerror=function(){ax[a7]=null};a3.src=a6;a3=null;return a6},emit:function(a6,a5){var a3,a4="ued.1.1.2?type=9";if(b(a5)){a3=([["_gm:id",a6]]).concat(a5)}else{a3=aK(a5);a3["_gm:id"]=a6}return B.send(aP+a4,a3)},record:function(a7,a6,ba,bb){bb=arguments[3]||"";var a3,a5="?",a4=g,a8;var a9="http://ac.mmstat.com/";if(a7=="ac"){a3=a9+"1.gif";a4=aj(bb,"A")&&(bb.substr(1)==ap(a7))}else{if(aj(a7,"ac-")){a3=a9+a7.substr(3);a4=aj(bb,"A")&&(bb.substr(1)==ap(a7))}else{if(aj(a7,"/")){a4=aj(bb,"H")&&(bb.substr(1)==ap(a7));a3=aP+a7.substr(1);a8=a1}else{if(al(a7,".gif")){a3=a2+a7}else{return g}}}}if(!a4&&bb!="%"&&ap(aG)!=bb){return g}a3+=a5+"cache="+aF()+"&gmkey="+encodeURIComponent(a6)+"&gokey="+encodeURIComponent(ba)+"&cna="+aD+"&isbeta="+av;if(a8){a3+="&logtype=2"}if(!s()){return B.send(a3)}else{return ao({url:a3,js:R})}}};ax.goldlog=B;ax.goldminer={record:B.emit};if(!ax[aJ]||!b(ax[aJ])){ax[aJ]=[]}au();aa();aV();w();C();(function(){var a4,a5=A("tracknick"),a9,a7,a6=/\btanx\.com$/.test(h)?A("cnaui"):"",ba=V(aG),bb=V(aw);if(ay&&ay.indexOf("#")==0){ay=ay.substr(1)}if(!J||aQ()){if(ae=="3"||ae=="5"){a9=A("t");a7=a9?ag(a9,20):""}a4=[[aH(),"title="+escape(P.title)],["pre",aw],["cache",aF()],["scr",screen.width+"x"+screen.height],["isbeta",av]];if(aD){a4.push([aH(),"cna="+aD])}if(a5){a4.push([aH(),"nick="+a5])}k(a4,[["wm_pageid",aS],["wm_prototypeid",ae],["wm_sid",l],["spm-url",ba],["spm-pre",bb],["cnaui",a6]]);a4.push(["spm-cnt",(ad||"0.0")+".0.0."+az]);M=M.concat(a4);M.push([aH(),n()]);k(M,[["bucket_id",a7],["urlokey",ay],["wm_instanceid",aB]]);ax.g_aplus_pv_req=K(aN,M)}if(J){am();var bc,a8=aC.on,a3=(a8=="1"?"http://ac.mmstat.com/y.gif":aN);if((a8=="1"||a8=="2")&&(bc=aC.chksum)&&bc===ap(aG).toString()){K(a3,M)}}if(aM){r()}else{Y(ax,"beforeunload",function(){r()})}})();var F=(new Date()).getTime();setTimeout(function(){if(Math.random()>0.0001){return}B.emit("global_sample",{type:"timer",t:F-Z})},1)})();