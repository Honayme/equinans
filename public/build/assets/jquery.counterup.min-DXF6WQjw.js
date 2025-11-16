/*!
* jquery.counterup.js 1.0
*
* Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
* Released under the GPL v2 License
*
* Date: Nov 26, 2013
*/(function(r){r.fn.counterUp=function(i){var f=r.extend({time:400,delay:10},i);return this.each(function(){var t=r(this),u=f;t.waypoint({handler:function(){(function(){var c=[],o=u.time/u.delay,n=t.text(),s=/[0-9]+,[0-9]+/.test(n);n=n.replace(/,/g,"");for(var d=/^[0-9]+\.[0-9]+$/.test(n),p=d?(n.split(".")[1]||[]).length:0,a=o;a>=1;a--){var e=parseInt(n/o*a);if(d&&(e=parseFloat(n/o*a).toFixed(p)),s)for(;/(\d+)(\d{3})/.test(e.toString());)e=e.toString().replace(/(\d+)(\d{3})/,"$1,$2");c.unshift(e)}t.data("counterup-nums",c),t.text("0"),t.data("counterup-func",function(){t.text(t.data("counterup-nums").shift()),t.data("counterup-nums").length?setTimeout(t.data("counterup-func"),u.delay):(t.data("counterup-nums"),t.data("counterup-nums",null),t.data("counterup-func",null))}),setTimeout(t.data("counterup-func"),u.delay)})(),this.destroy()},offset:"100%"})})}})(window.jQuery||window.$);
