'use strict';
(function($) {
    !function(a){a.fn.isOnScreen=function(b){var c=this.outerHeight(),d=this.outerWidth();if(!d||!c)return!1;var e=a(window),f={top:e.scrollTop(),left:e.scrollLeft()};f.right=f.left+e.width(),f.bottom=f.top+e.height();var g=this.offset();g.right=g.left+d,g.bottom=g.top+c;var h={top:f.bottom-g.top,left:f.right-g.left,bottom:g.bottom-f.top,right:g.right-f.left};return"function"==typeof b?b.call(this,h):h.top>0&&h.left>0&&h.right>0&&h.bottom>0}}(jQuery);

    function checkDisplay(){
        $('.counter-value').each(function() {
          var $this = $(this);
          if ($this.isOnScreen()) {
            var countTo = $this.attr('data-count');
            $({
              countNum: $this.text()
            }).animate({
              countNum: countTo
            }, {
              duration: 2000,
              easing: 'linear',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }
            });
          }
        });
    }
    checkDisplay();

    $(window).on('resize scroll', function() {
        checkDisplay();
    });
})(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJjb3VudGVyLmpzIl0sInNvdXJjZXNDb250ZW50IjpbIid1c2Ugc3RyaWN0JztccihmdW5jdGlvbigkKSB7XHIgICAgIWZ1bmN0aW9uKGEpe2EuZm4uaXNPblNjcmVlbj1mdW5jdGlvbihiKXt2YXIgYz10aGlzLm91dGVySGVpZ2h0KCksZD10aGlzLm91dGVyV2lkdGgoKTtpZighZHx8IWMpcmV0dXJuITE7dmFyIGU9YSh3aW5kb3cpLGY9e3RvcDplLnNjcm9sbFRvcCgpLGxlZnQ6ZS5zY3JvbGxMZWZ0KCl9O2YucmlnaHQ9Zi5sZWZ0K2Uud2lkdGgoKSxmLmJvdHRvbT1mLnRvcCtlLmhlaWdodCgpO3ZhciBnPXRoaXMub2Zmc2V0KCk7Zy5yaWdodD1nLmxlZnQrZCxnLmJvdHRvbT1nLnRvcCtjO3ZhciBoPXt0b3A6Zi5ib3R0b20tZy50b3AsbGVmdDpmLnJpZ2h0LWcubGVmdCxib3R0b206Zy5ib3R0b20tZi50b3AscmlnaHQ6Zy5yaWdodC1mLmxlZnR9O3JldHVyblwiZnVuY3Rpb25cIj09dHlwZW9mIGI/Yi5jYWxsKHRoaXMsaCk6aC50b3A+MCYmaC5sZWZ0PjAmJmgucmlnaHQ+MCYmaC5ib3R0b20+MH19KGpRdWVyeSk7XHJcciAgICBmdW5jdGlvbiBjaGVja0Rpc3BsYXkoKXtcciAgICAgICAgJCgnLmNvdW50ZXItdmFsdWUnKS5lYWNoKGZ1bmN0aW9uKCkge1xyICAgICAgICAgIHZhciAkdGhpcyA9ICQodGhpcyk7XHIgICAgICAgICAgaWYgKCR0aGlzLmlzT25TY3JlZW4oKSkge1xyICAgICAgICAgICAgdmFyIGNvdW50VG8gPSAkdGhpcy5hdHRyKCdkYXRhLWNvdW50Jyk7XHIgICAgICAgICAgICAkKHtcciAgICAgICAgICAgICAgY291bnROdW06ICR0aGlzLnRleHQoKVxyICAgICAgICAgICAgfSkuYW5pbWF0ZSh7XHIgICAgICAgICAgICAgIGNvdW50TnVtOiBjb3VudFRvXHIgICAgICAgICAgICB9LCB7XHIgICAgICAgICAgICAgIGR1cmF0aW9uOiAyMDAwLFxyICAgICAgICAgICAgICBlYXNpbmc6ICdsaW5lYXInLFxyICAgICAgICAgICAgICBzdGVwOiBmdW5jdGlvbigpIHtcciAgICAgICAgICAgICAgICAkdGhpcy50ZXh0KE1hdGguZmxvb3IodGhpcy5jb3VudE51bSkpO1xyICAgICAgICAgICAgICB9LFxyICAgICAgICAgICAgICBjb21wbGV0ZTogZnVuY3Rpb24oKSB7XHIgICAgICAgICAgICAgICAgJHRoaXMudGV4dCh0aGlzLmNvdW50TnVtKTtcciAgICAgICAgICAgICAgICAvL2FsZXJ0KCdmaW5pc2hlZCcpO1xyICAgICAgICAgICAgICB9XHIgICAgICAgICAgICB9KTtcciAgICAgICAgICB9XHIgICAgICAgIH0pO1xyICAgIH1cciAgICBjaGVja0Rpc3BsYXkoKTtcciAgXHIgICAgJCh3aW5kb3cpLm9uKCdyZXNpemUgc2Nyb2xsJywgZnVuY3Rpb24oKSB7XHIgICAgICAgIGNoZWNrRGlzcGxheSgpO1xyICAgIH0pO1xyfSkoalF1ZXJ5KTtcciJdLCJmaWxlIjoiY291bnRlci5qcyJ9
