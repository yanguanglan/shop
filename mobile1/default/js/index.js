seajs.config({
  alias: {
    'zepto': 'http://a.tbcdn.cn/mw/base/libs/zepto/1.0.0/zepto'
  },
  debug: 1
});

define(function(require,exports,module) {

		setTimeout(function(){ window.scrollTo(0, 1); }, 100);//hide the address bar
		var $ = require("zepto");

		require("./search");
		require("./slider");

		require("./lazy");
		if($("header .gift").length == 1) {//if gift activity enabled
		 	seajs.use("http://a.tbcdn.cn/mw/s/hi/tmall/h5/script/gift");
		}
})