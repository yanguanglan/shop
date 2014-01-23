KISSY.use(["base", "node", "sizzle", "detail/model", "detail/ui-msg", "ajax", "detail/juicer", "detail/flipsnap", "detail/ui-slider", "detail/ui-gallery", "detail/ui-follow", "detail/ui-sku", "detail/ui-number", "detail/ui-suggest", "detail/ui-more", "detail/server", "detail/s-slider", "detail/s-header", "detail/s-summary", "detail/s-buy", "detail/s-shop", "detail/m-desc", "detail/m-attr", "detail/m-review", "detail/m-recommend", "detail/s-detail", "detail/s-footer", "datalazyload"], function(e, t, i, a, n, o) {
    function r(e) {
        this.init(e)
    }
    e.extend(r, e.Base, {msg: {requestError: "\u8bf7\u6c42\u5931\u8d25\uff0c\u8bf7\u7a0d\u540e\u518d\u8bd5"}, tpl: {error: document.getElementById("tpl-error").innerHTML}, init: function() {
            this.initEvn();
            this.initModel();
            this.initSectionHeader();
            this.initSectionSlider();
            this.initSectionSummary();
            this.initSectionBuy();
            this.initSectionShop();
            this.initTaoPlus();
            this.initSectionDetail();
            this.initSectionFooter();
            this.initSmartBanner();
            this.initTBKStat()
        }, toast: function(e) {
            o.getInstance().show(e)
        }, login: function(e) {
            window.location.href = this.model.get("config.api.loginUrl")
        }, getResponseSize: function() {
            var e = window.innerWidth;
            var t = {450: "450x10000", 570: "570x10000", 580: "580x10000", 620: "620x10000", 790: "790x10000"};
            var i = [450, 570, 580, 620, 790];
            i.sort(function(t, i) {
                return Math.abs(t - e) - Math.abs(i - e)
            });
            return t[i[0]] + "q75"
        }, getResponseSrc: function(e) {
            var t = this.getResponseSize();
            return e.replace(/_\d+x\d+\.jpg$/, "_" + t + "x" + t + ".jpg")
        }, initEvn: function() {
            var e = window.location.href;
            var t = {iphoneApp: e.indexOf("@taobao_iphone") !== -1, ipadApp: e.indexOf("@taobao_ipad") !== -1, androidApp: e.indexOf("@taobao_android") !== -1, androidPadApp: e.indexOf("@taobao_apad") !== -1};
            t.padApp = t.ipadApp || t.androidPadApp;
            t.phoneApp = t.iphoneApp || t.androidApp;
            this.set("evn", t)
        }, initModel: function() {
            var e = n.getInstance();
            this.model = e;
            e.set("config", window.TDetail);
            if (window.TSkip) {
                e.set("mdskip", window.TSkip.defaultModel)
            } else {
                if (!window.TSkip) {
                    e.set("async", true);
                    KISSY.use("detail/server", function(t, i) {
                        var a = new i({action: e.get("config.initApi"), server: {type: "GET", dataType: "jsonp"}});
                        a.on("request", function(t) {
                            if (!t.err) {
                                e.set("mdskip", t.data.defaultModel)
                            } else {
                                e.set("mdskip", {})
                            }
                        });
                        a.request()
                    })
                }
            }
        }, initSectionHeader: function() {
            var e = this;
            KISSY.use("detail/s-header", function(t, i) {
                new i({app: e})
            })
        }, initSectionSlider: function() {
            var e = this;
            KISSY.use("detail/s-slider", function(t, i) {
                new i({app: e})
            })
        }, initSectionSummary: function() {
            var e = this;
            KISSY.use("detail/s-summary", function(t, i) {
                new i({app: e})
            })
        }, initSectionBuy: function() {
            var e = this;
            KISSY.use("detail/s-buy", function(t, i) {
                new i({app: e})
            })
        }, initSectionShop: function() {
            var e = this;
            KISSY.use("detail/s-shop", function(t, i) {
                new i({app: e})
            })
        }, initSectionDetail: function() {
            var e = this;
            KISSY.use("detail/s-detail", function(t, i) {
                new i({app: e})
            })
        }, initSectionFooter: function() {
            var e = this;
            KISSY.use("detail/s-footer", function(t, i) {
                new i({app: e})
            })
        }, initTaoPlus: function() {
            var e = this;
            if (this.get("evn.padApp") || this.get("evn.phoneApp")) {
                return
            }
            KISSY.use("detail/zepto, detail/taoplus2, detail/../css/taoplus2.css", function(t, i, a) {
                a.initialize();
                e.TaoPlus = a;
                e.fire("TaoPlusReady", a)
            })
        }, onTaoPlusReady: function(e) {
            if (this.TaoPlus) {
                e.call(this, this.TaoPlus)
            } else {
                this.on("TaoPlusReady", function(t) {
                    e.call(this, t)
                })
            }
        }, initSmartBanner: function() {
            if (this.get("evn.padApp") || this.get("evn.phoneApp")) {
                return
            }
            var e = this.model.safeGet("config.switch.showSB") == 1;
            if (!e) {
                return
            }
            var t = this;
            var i = {title: "\u624b\u673a\u6dd8\u5b9d\u2014\u7528\u4e86\u5c31\u77e5\u9053\u591a\u65b9\u4fbf", text: "\u7acb\u5373\u6253\u5f00", color: "", bgcolor: "", dpr: 1};
            if (this.model.safeGet("config.detail.isPreorder")) {
                i.title = "\u9650\u65f6\u4eca\u5929\uff0c\u5ba2\u6237\u7aef\u63d0\u524d\u4eab\u7528\u53cc11\u4ef7\u683c\u62a2\u8d2d\u8be5\u5546\u54c1\uff01"
            }
            var a = this.model.safeGet("config.itemDO.itemId");
            var n = document.getElementById("redirectClientFlag").value;
            var o = t.model.safeGet("config.switch.redirectSB") == 1;
            return t.smartbanner(a, n, t.getParam(), i, o);
            try {
                t.smartbanner(a, n, t.getParam(), i, o)
            } catch (r) {
            }
        }, smartbanner: function(e, t, i, a, n) {
            var o = this.getCookie;
            var r = this.getParam;
            var l = this.sendPoint;
            var s = navigator.userAgent, c = i["ali_trackid"], d = Boolean(c), u = o("tkmb"), f = u ? u.split("&") : null, m = /400000_.*@\w+_(iphone|android)_.*/i, p = /.+@taobao_(iphone|android|apad|ipad)_.+/i, h = i["ttid"], v = h ? decodeURIComponent(h) : "", g = v != "", b = i["ut_sk"], y = b ? decodeURIComponent(b) : "", S = y != "", k = y.match(/.+_(\d+)_.+/), _ = /UC/i, w = /QQ/i, T = i["iv"], C = function(e) {
                var t = r(), i = Boolean(t["ali_trackid"]), a = location.search.slice(1), n = a != "" ? a.split("&") : [];
                for (var l = 0, s = n.length; l < s; l++) {
                    if (n[l].indexOf("ttid=") > -1) {
                        n[l] = "ttid=" + encodeURIComponent(decodeURIComponent(n[l].replace("ttid=", "")))
                    }
                }
                n.push("cna=" + o("cna"));
                var c = o("tkmb"), d = c ? c.split("&") : null;
                if (d) {
                    n.push(d[0]);
                    n.push("type=2")
                }
                var u = ["taobao://a.m.taobao.com/i", e, ".htm?", n.join("&")];
                if (i || d)
                    u.unshift("i");
                if (navigator.userAgent.match(/iPhone|iPod/i)) {
                    u = ["taobao://go/item_detail?itemId=", e, "&", n.join("&")]
                }
                u = u.join("");
                return u
            }(e);
            if (window.SmartbannerJSON) {
                a = SmartbannerJSON["mainDetail"]
            }
            a.href = C;
            a.isInstance = function() {
                return false
            };
            var I = m.test(v), x = T && T == 1 || f && f[1] == "iv=1", L = s.match(_) == null && s.match(w) == null, D = d && c.match(/^1{1}_.+/i) != null && (typeof t == "undefined" || t == 1), P = true;
            if (g && p.test(v)) {
                P = false;
                if (S && k != null && (k[1] == 12278902 || k[1] == 21380790)) {
                    P = true
                }
            }
            if (P) {
                KISSY.use("detail/zepto, detail/smartbanner", function(e, t, i) {
                    if ((I || x || D) && L && n) {
                        l("site_downbanner_auto_2101");
                        var o = i(a);
                        o && o.redirect()
                    } else {
                        i(a)
                    }
                })
            }
        }, getCookie: function(e) {
            var t = document.cookie;
            var i = e + "=", a = t.indexOf(i);
            if (a < 0)
                return null;
            a += i.length;
            var n = t.indexOf(";", a);
            n = n == -1 ? t.length : n;
            return t.substring(a, n)
        }, getParam: function() {
            var e = {};
            var t = location.search.slice(1).split("&");
            if (t[0].length) {
                for (var i = 0; i < t.length; i++) {
                    var a = t[i].split("=");
                    e[a[0]] = a[1]
                }
            }
            return e
        }, initTBKStat: function() {
            if (!/tk_trace/.test(document.cookie)) {
                return
            }
            var t = this;
            e.getScript("http://a.tbcdn.cn/cps/trace.js", {success: function() {
                    try {
                        CPS.trace({type: 2, subtype: 2, itemid: t.model.safeGet("config.itemDO.itemId"), sellerid: t.model.safeGet("config.itemDO.sellerId")})
                    } catch (e) {
                    }
                }})
        }, sendPoint: function(e) {
            var t = document.cookie.match(/cna=([^;]+)/);
            t = t ? t[1] : "";
            var i = encodeURIComponent(window.location.href);
            var a = new Image;
            a.src = "http://log.m.taobao.com/js.do?ap_ref=" + i + "&ap_cna=" + t + "&ap_uri=" + e
        }});
    window.app = new r
});