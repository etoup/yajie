<script type="text/javascript">
    $(document).ready(function () {
        $(window).load(function () {
            function notify(message, type) {
                $.growl({
                    message: message
                }, {
                    type: type,
                    allow_dismiss: false,
                    label: 'Cancel',
                    className: 'btn-xs btn-inverse',
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    delay: 3200,
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                    },
                    offset: {
                        x: 20,
                        y: 85
                    }
                });
            }

            setTimeout(function () {
                var message1 = '<strong>提示!</strong> 使用 &#8984;+s or CTL+s 作为键盘快捷键来保存窗体.';
                var message2 = '<strong>提示!</strong> 使用 &#8984;+\' 在markdown编辑器切换引用.';
                var message3 = '<strong>提示!</strong> 使用 &#8984;+b 在markdown编辑器切换粗体文本.';
                var message4 = '<strong>提示!</strong> 使用 &#8984;+h 在markdown编辑器切换标题.';
                var message5 = '<strong>提示!</strong> 使用 &#8984;+i 在markdown编辑器切换斜体文本.';
                var message6 = '<strong>提示!</strong> 使用 &#8984;+k 在markdown编辑器绘制链接.';
                var message7 = '<strong>提示!</strong> 使用 &#8984;+l 在markdown编辑器绘制一个无序列表.';
                var message8 = '<strong>提示!</strong> 使用 &#8984;+Alt+c 在markdown编辑器切换代码块.';
                var message9 = '<strong>提示!</strong> 使用 &#8984;+Alt+i 在markdown编辑器绘制图像.';
                var message10 = '<strong>提示!</strong> 使用 &#8984;+Alt-l 在markdown编辑器切换有序列表.';
                var message11 = '<strong>提示!</strong> 使用 F9 在markdown编辑器切换侧视图.';
                var message12 = '<strong>提示!</strong> 使用 F11 在markdown编辑器切换全屏视图.';
                var options = [
                    message1,
                    message2,
                    message3,
                    message4,
                    message5,
                    message6,
                    message7,
                    message8,
                    message9,
                    message10,
                    message11,
                    message12
                ];
                notify(options[Math.floor(Math.random() * options.length)], 'inverse');
            }, 300)
        });
    });
</script>