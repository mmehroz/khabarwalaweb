!function(e){e.fn.autoResize=function(t){var i=e.extend({onResize:function(){},animate:!0,animateDuration:150,animateCallback:function(){},extraSpace:20,limit:1e3},t);return this.filter("textarea").each(function(){var t,n=e(this).css({resize:"none","overflow-y":"hidden"}),a=n.height(),o=(t={},e.each(["height","width","lineHeight","textDecoration","letterSpacing"],function(e,i){t[i]=n.css(i)}),n.clone().removeAttr("id").removeAttr("name").css({position:"absolute",top:0,left:-9999}).css(t).attr("tabIndex","-1").insertBefore(n)),s=null,c=function(){o.height(0).val(e(this).val()).scrollTop(1e4);var t=Math.max(o.scrollTop(),a)+i.extraSpace,c=e(this).add(o);s!==t&&(s=t,t>=i.limit?e(this).css("overflow-y",""):(i.onResize.call(this),i.animate&&"block"===n.css("display")?c.stop().animate({height:t},i.animateDuration,i.animateCallback):c.height(t)))};n.unbind(".dynSiz").bind("keyup.dynSiz",c).bind("keydown.dynSiz",c).bind("change.dynSiz",c)}),this}}(jQuery);