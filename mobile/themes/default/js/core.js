(function(e){var t=window,i=document;t.LIST=t.LIST||{};function n(){}e.augment(n,e.Base);LIST.msg=new n;LIST.util=LIST.util||{};LIST.support=LIST.support||{};LIST.data=LIST.data||{};var o=e.use,s=e.Loader.Utils.isAttached;e.use=function(t,i,n){return o.call(e,t,i,n===undefined?true:n)};e.Loader.Utils.isAttached=function(t,i){e.Loader.Utils.attachModsRecursively(i,t);return s.call(e.Loader.Utils,t,i)};e.config({combine:true,tag:t.g_config.t||Date.now()+""});LIST.util.initMods=function(i,n,o,s){var r=t.g_config.poc,l=(r?r.mods:0)&&t.TMPoc;if(!i||!e.isArray(i))return;if(n&&!e.isObject(n)&&!e.isArray(n)){o=n;n={}}n=n||{};function a(t){for(var o=0,r=t.length,a,d,m,u,c;o<r;o++){a=t[o];d=i[o];m={};u=(new Date).getTime();l&&TMPoc.add(d+"_start");try{var g=n[d]||n[o];if(typeof a==="function"){m=new a(g)}else if(typeof a==="object"){m=a}m.init&&m.init(g)}catch(p){e.log(p,"error");if(!s)continue}l&&TMPoc.add(d+"_end");e.log(">>>> "+d+" inited | duration:"+(c=(new Date).getTime()-u)+"ms | on "+c)}}o?e.each(i,function(t){e.use(t,function(e,t){a([t])})}):e.use(i,function(e){var t=[].slice.call(arguments,1);a(t)})};LIST.util.exposureFn=function(e){var i=new Image,n="_img_"+Math.random();t[n]=i;i.onload=i.onerror=function(){t[n]=null};i.src=e;i=null};LIST.util.stripParams=function(e,t){t=t||[];var i=new RegExp("\\b("+t.join("|")+")=[^&#]+&?","gi");return e&&t.length?e.replace(i,"").replace(/[?&]$/,""):e};LIST.util.extractParams=function(t,i){if(!t)return null;i=i||[];var n=new RegExp("\\b("+i.join("|")+")=([^&#]+)?","gi"),o="{"+(t.match(n)||[]).join(",").replace(/(\w+)=(\w*)/gi,function(e,t,i){return'"'+t+'":"'+(i||"")+'"'})+"}";if(!e.JSON)throw new Error("KISSY.JSON is undefined");return e.JSON.parse(o)};LIST.util.installConsole=function(){t.console={log:function(e,i){var n=t["__console"],o=t["__console_document"];if(!n){var s=t.open("about:blank","console","height=400, width=500, top="+(screen.height-500)+",left="+(screen.width-600)+",toolbar=no,menubar=no,scrollbars=yes,resizable=yes,location=no,status=no");if(!s)return;o=t["__console_document"]=s.document;var r=o.body,l=o.createElement("div"),a=o.createElement("style"),d="#console p.error{color:red;}#console span{display:inline-block;width:40px;text-align:right;margin-right:5px;}";a.type="text/css";if(a.styleSheet){a.styleSheet.cssText=d}else{a.appendChild(o.createTextNode(d))}r.appendChild(a);r.appendChild(l);l.id="console";n=t["__console"]=l;n._count=1;t.onunload=function(e){s&&s.close()}}var m=o.createElement("p");i&&i.toLowerCase()==="error"&&(m.className="error");m.innerHTML="<span>"+n._count++ +".</span>["+Date.now()+"] "+e;n.appendChild(m);o.body.scrollTop=o.body.scrollHeight-o.body.clientHeight},error:function(e){this.log(e,"error")}}}})(KISSY);