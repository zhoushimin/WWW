// $("#thisdiv").niceScroll({
//     cursorcolor: "#424242", // 改变滚动条颜色，使用16进制颜色值
//     cursoropacitymin: 0, // 当滚动条是隐藏状态时改变透明度, 值范围 1 到 0
//     cursoropacitymax: 1, // 当滚动条是显示状态时改变透明度, 值范围 1 到 0
//     cursorwidth: "5px", // 滚动条的宽度，单位：便素
//     cursorborder: "1px solid #fff", // CSS方式定义滚动条边框
//     cursorborderradius: "5px", // 滚动条圆角（像素）
//     zindex: "auto" | <number>, // 改变滚动条的DIV的z-index值
//     scrollspeed: 60, // 滚动速度
//     mousescrollstep: 40, // 鼠标滚轮的滚动速度 (像素)
//     touchbehavior: false, // 激活拖拽滚动
//     hwacceleration: true, // 激活硬件加速
//     boxzoom: false, // 激活放大box的内容
//     dblclickzoom: true, // (仅当 boxzoom=true时有效)双击box时放大
//     gesturezoom: true, // (仅 boxzoom=true 和触屏设备时有效) 激活变焦当out/in（两个手指外张或收缩）
//     grabcursorenabled: true // (仅当 touchbehavior=true) 显示“抓住”图标display "grab" icon
//     autohidemode: true, // 隐藏滚动条的方式, 可用的值: 
//       true | // 无滚动时隐藏
//       "cursor" | // 隐藏
//       false | // 不隐藏,
//       "leave" | // 仅在指针离开内容时隐藏
//       "hidden" | // 一直隐藏
//       "scroll", // 仅在滚动时显示        
//     background: "", // 轨道的背景颜色
//     iframeautoresize: true, // 在加载事件时自动重置iframe大小
//     cursorminheight: 32, // 设置滚动条的最小高度 (像素)
//     preservenativescrolling: true, // 你可以用鼠标滚动可滚动区域的滚动条和增加鼠标滚轮事件
//     railoffset: false, // 可以使用top/left来修正位置
//     bouncescroll: false, // (only hw accell) 启用滚动跳跃的内容移动
//     spacebarenabled: true, // 当按下空格时使页面向下滚动
//     railpadding: { top: 0, right: 0, left: 0, bottom: 0 }, // 设置轨道的内间距
//     disableoutline: true, // 当选中一个使用nicescroll的div时，chrome浏览器中禁用outline
//     horizrailenabled: true, // nicescroll可以管理水平滚动
//     railalign: right, // 对齐垂直轨道
//     railvalign: bottom, // 对齐水平轨道
//     enabletranslate3d: true, // nicescroll 可以使用CSS变型来滚动内容
//     enablemousewheel: true, // nicescroll可以管理鼠标滚轮事件
//     enablekeyboard: true, // nicescroll可以管理键盘事件
//     smoothscroll: true, // ease动画滚动
//     sensitiverail: true, // 单击轨道产生滚动
//     enablemouselockapi: true, // 可以用鼠标锁定API标题 (类似对象拖动)
//     cursorfixedheight: false, // 修正光标的高度（像素）
//     hidecursordelay: 400, // 设置滚动条淡出的延迟时间（毫秒）
//     directionlockdeadzone: 6, // 设定死区，为激活方向锁定（像素）
//     nativeparentscrolling: true, // 检测内容底部便于让父级滚动
//     enablescrollonselection: true, // 当选择文本时激活内容自动滚动
//     cursordragspeed: 0.3, // 设置拖拽的速度
//     rtlmode: "auto", // DIV的水平滚动从左边开始
//     cursordragontouch: false, // 使用触屏模式来实现拖拽
//     oneaxismousemode: "auto", // 当只有水平滚动时可以用鼠标滚轮来滚动，如果设为false则不支持水平滚动，如果设为auto支持双轴滚动
//     scriptpath: "" // 为boxmode图片自定义路径 ("" => same script path)
//     preventmultitouchscrolling: true // 防止多触点事件引发滚动
// });
$(document).ready(function () {
    // console.log(jQuery.fn.jquery);
    // console.log($.fn.jquery);
    // console.log($.prototype.jquery);
    "use strict"; //严格模式
    var body = $('body');
    body.niceScroll({
        cursorcolor: "#000",//#CC0071 光标颜色
        cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
        touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
        cursorwidth: "8px", //像素光标的宽度
        cursorborder: "0", // 游标边框css定义
        cursorborderradius: "0",//以像素为光标边界半径
        autohidemode: false, //是否隐藏滚动条
        zindex: 200,
        enablekeyboard: true,
        nablekeyboard: true,
        scrollspeed:60,
        mousescrollstep:120,
        hwacceleration:true, 
        cursorborderradius: "0",
        background: "#fff", // 轨道的背景颜色
    });
}); 




