N2Require("SmartSliderWidgetArrowImage",[],[],function(i,e,t){function s(e,t,s,h){this.slider=window[e],this.slider.started(i.proxy(this.start,this,e,t,s,h))}return s.prototype.start=function(e,t,s,h){return this.slider.sliderElement.data("arrow")?!1:(this.slider.sliderElement.data("arrow",this),this.deferred=i.Deferred(),this.slider.sliderElement.on("SliderDevice",i.proxy(this.onDevice,this)).trigger("addWidget",this.deferred),this.previous=i("#"+e+"-arrow-previous").on("click",i.proxy(function(i){i.stopPropagation(),this.slider[nextend.rtl.previous]()},this)),this.previousResize=this.previous.find(".n2-resize"),0==this.previousResize.length&&(this.previousResize=this.previous),this.next=i("#"+e+"-arrow-next").on("click",i.proxy(function(i){i.stopPropagation(),this.slider[nextend.rtl.next]()},this)),this.nextResize=this.next.find(".n2-resize"),0==this.nextResize.length&&(this.nextResize=this.next),this.desktopRatio=t,this.tabletRatio=s,this.mobileRatio=h,void i.when(this.previous.n2imagesLoaded(),this.next.n2imagesLoaded()).always(i.proxy(this.loaded,this)))},s.prototype.loaded=function(){this.previousResize.css("display","inline-block"),this.previousWidth=this.previousResize.width(),this.previousHeight=this.previousResize.height(),this.previousResize.css("display",""),this.nextResize.css("display","inline-block"),this.nextWidth=this.nextResize.width(),this.nextHeight=this.nextResize.height(),this.nextResize.css("display",""),this.previousResize.find("img").css("width","100%"),this.nextResize.find("img").css("width","100%"),this.onDevice(null,{device:this.slider.responsive.getDeviceMode()}),this.deferred.resolve()},s.prototype.onDevice=function(i,e){var t=1;switch(e.device){case"tablet":t=this.tabletRatio;break;case"mobile":t=this.mobileRatio;break;default:t=this.desktopRatio}this.previousResize.width(this.previousWidth*t),this.previousResize.height(this.previousHeight*t),this.nextResize.width(this.nextWidth*t),this.nextResize.height(this.nextHeight*t)},s});
N2Require("SmartSliderWidgetAutoplayImage",[],[],function(t,e,i){"use strict";function s(e,i,s,a){this.slider=window[e],this.slider.started(t.proxy(this.start,this,e,i,s,a))}return s.prototype.start=function(e,i,s,a){return this.slider.sliderElement.data("autoplay")?!1:(this.slider.sliderElement.data("autoplay",this),this.paused=!1,this.button=this.slider.sliderElement.find(".nextend-autoplay"),this.slider.controls.autoplay.hasButton=!!this.button.length,void(this.slider.controls.autoplay._disabled?this.destroy():(this.slider.controls.autoplay.parameters.start||(this.paused=!0,this.setPaused()),this.deferred=t.Deferred(),this.slider.sliderElement.on({"SliderDevice.n2-widget-autoplay":t.proxy(this.onDevice,this),"autoplayStarted.n2-widget-autoplay":t.proxy(this.setPlaying,this),"autoplayPaused.n2-widget-autoplay":t.proxy(this.setPaused,this),"autoplayDisabled.n2-widget-autoplay":t.proxy(this.destroy,this)}).trigger("addWidget",this.deferred),this.button.on("universalclick",t.proxy(this.switchState,this)),this.desktopRatio=i,this.tabletRatio=s,this.mobileRatio=a,this.button.n2imagesLoaded().always(t.proxy(this.loaded,this)))))},s.prototype.loaded=function(){this.button.css("display","inline-block"),this.width=this.button.width(),this.height=this.button.height(),this.button.css("display",""),this.onDevice(null,{device:this.slider.responsive.getDeviceMode()}),this.deferred.resolve()},s.prototype.onDevice=function(t,e){var i=1;switch(e.device){case"tablet":i=this.tabletRatio;break;case"mobile":i=this.mobileRatio;break;default:i=this.desktopRatio}this.button.width(this.width*i),this.button.height(this.height*i)},s.prototype.switchState=function(t){t.preventDefault(),t.stopImmediatePropagation(),this.paused?(this.setPlaying(),this.slider.sliderElement.triggerHandler("autoplayExtraContinue","autoplayButton"),this.slider.next()):(this.setPaused(),this.slider.sliderElement.triggerHandler("autoplayExtraWait","autoplayButton"))},s.prototype.setPaused=function(){this.paused=!0,this.button.addClass("n2-autoplay-paused")},s.prototype.setPlaying=function(){this.paused=!1,this.button.removeClass("n2-autoplay-paused")},s.prototype.destroy=function(){this.slider.sliderElement.off(".n2-widget-autoplay"),this.button.remove()},s});
N2Require("SmartSliderWidgetBarHorizontal",[],[],function(i,t,e){"use strict";function s(t,e,s){this.slider=window[t],this.slider.started(i.proxy(this.start,this,t,e,s))}return s.prototype.start=function(t,e,s){if(this.slider.sliderElement.data("bar"))return!1;if(this.slider.sliderElement.data("bar",this),this.offset=0,this.tween=null,this.slider.isShuffled){for(var r=[],n=0;n<this.slider.realSlides.length;n++){var o=this.slider.realSlides[n];r.push(e[o.originalIndex])}e=r}if(this.originalBars=this.bars=e,this.bar=this.slider.sliderElement.find(".nextend-bar"),this.innerBar=this.bar.find("> div"),this.slider.sliderElement.on({slideCountChanged:i.proxy(this.onSlideCountChanged,this)}),this.slider.firstSlideReady.done(i.proxy(this.onFirstSlideSet,this)),s.animate?this.slider.sliderElement.on("mainAnimationStart",i.proxy(this.onSliderSwitchToAnimateStart,this)):this.slider.sliderElement.on("sliderSwitchTo",i.proxy(this.onSliderSwitchTo,this)),0==s.overlay){var a=!1;switch(s.area){case 1:a="Top";break;case 12:a="Bottom"}a&&(this.offset=parseFloat(this.bar.data("offset")),this.slider.responsive.addStaticMargin(a,this))}var h="click";this.slider.hasTouch()&&(h="n2click"),this.bar.on("click",i.proxy(function(i){this.slider.sliderElement.find(".n2-ss-slide-active .n2-ss-layers-container").trigger(h)},this))},s.prototype.onFirstSlideSet=function(i){this.onSliderSwitchTo(null,i.index)},s.prototype.onSliderSwitchTo=function(i,t){this.innerBar.html(this.bars[t].html),this.setCursor(this.bars[t].hasLink)},s.prototype.onSliderSwitchToAnimateStart=function(){var t=i.Deferred();this.slider.sliderElement.on("mainAnimationComplete.n2Bar",i.proxy(this.onSliderSwitchToAnimateEnd,this,t)),this.tween&&this.tween.pause(),NextendTween.to(this.innerBar,.3,{opacity:0,onComplete:function(){t.resolve()}}).play()},s.prototype.onSliderSwitchToAnimateEnd=function(t,e,s,r,n){this.slider.sliderElement.off(".n2Bar"),t.done(i.proxy(function(){var i=this.innerBar.clone();this.innerBar.remove(),this.innerBar=i.css("opacity",0).html(this.bars[n].html).appendTo(this.bar),this.setCursor(this.bars[n].hasLink),this.tween=NextendTween.to(this.innerBar,.3,{opacity:1}).play()},this))},s.prototype.setCursor=function(i){i?this.innerBar.css("cursor","pointer"):this.innerBar.css("cursor","inherit")},s.prototype.isVisible=function(){return this.bar.is(":visible")},s.prototype.getSize=function(){return this.bar.height()+this.offset},s.prototype.onSlideCountChanged=function(i,t,e){this.bars=[];for(var s=0;s<this.originalBars.length;s++)s%e==0&&this.bars.push(this.originalBars[s])},s});
N2Require("SmartSliderWidgetBulletTransition",[],[],function(t,i,e){function s(i,e){this.slider=window[i],this.slider.started(t.proxy(this.start,this,i,e))}return s.prototype.start=function(i,e){if(this.slider.sliderElement.data("bullet"))return!1;this.slider.sliderElement.data("bullet",this),this.axis="horizontal",this.offset=0,this.parameters=e,this.bar=this.slider.sliderElement.find(".nextend-bullet-bar");var s="universalclick";if("mouseenter"==e.action&&(s="mouseenter"),this.originalDots=this.dots=this.bar.find("div").on(s,t.proxy(this.onDotClick,this)),this.slider.isShuffled){for(var o=[],a=[],r=0;r<this.slider.realSlides.length;r++){var n=this.slider.realSlides[r];o.push(this.dots.get(n.originalIndex)),a.push(this.parameters.thumbnails[n.originalIndex]),e.numeric&&this.dots.eq(n.originalIndex).html(r+1)}this.originalDots=this.dots=t(o).appendTo(this.dots.parent()),this.parameters.thumbnails=a}if(this.slider.sliderElement.on({slideCountChanged:t.proxy(this.onSlideCountChanged,this),sliderSwitchTo:t.proxy(this.onSlideSwitch,this)}),this.slider.firstSlideReady.done(t.proxy(this.onFirstSlideSet,this)),0==e.overlay){var h=!1;switch(e.area){case 1:h="Top";break;case 12:h="Bottom";break;case 5:h="Left",this.axis="vertical";break;case 8:h="Right",this.axis="vertical"}h&&(this.offset=parseFloat(this.bar.data("offset")),this.slider.responsive.addStaticMargin(h,this))}this.initThumbnails()},s.prototype.onFirstSlideSet=function(t){this.dots.eq(t.index).addClass("n2-active")},s.prototype.onDotClick=function(i){this.slider.directionalChangeToReal(this.originalDots.index(i.currentTarget)),t(i.target).blur()},s.prototype.onSlideSwitch=function(t,i){this.dots.filter(".n2-active").removeClass("n2-active"),this.dots.eq(i).addClass("n2-active")},s.prototype.isVisible=function(){return this.bar.is(":visible")},s.prototype.getSize=function(){return"horizontal"==this.axis?this.bar.height()+this.offset:this.bar.width()+this.offset},s.prototype.initThumbnails=function(){this.parameters.thumbnails.length>0&&this.dots.each(t.proxy(function(i,e){""!=this.parameters.thumbnails[i]&&t(e).on({universalenter:t.proxy(this.showThumbnail,this,i)},{leaveOnSecond:!0})},this))},s.prototype.showThumbnail=function(i,e){var s=this.getThumbnail(i);NextendTween.to(s,.3,{opacity:1}).play(),this.originalDots.eq(i).on("universalleave",t.proxy(this.hideThumbnail,this,s))},s.prototype.hideThumbnail=function(t,i){i.stopPropagation(),NextendTween.to(t,.3,{opacity:0,onComplete:function(){t.remove()}}).play()},s.prototype.getThumbnail=function(i){var e=this.originalDots.eq(i),s=e.offset(),o=e.outerWidth(),a=e.outerHeight(),r=t("<div/>").append(t("<div/>").css({width:this.parameters.thumbnailWidth,height:this.parameters.thumbnailHeight,backgroundImage:'url("'+this.parameters.thumbnails[i]+'")',backgroundSize:"cover",backgroundRepeat:"no-repeat",backgroundPosition:"center"}).addClass("n2-bullet-thumbnail")).addClass(this.parameters.thumbnailStyle).addClass("n2-bullet-thumbnail-container").css({position:"absolute",opacity:0,zIndex:1e7}).appendTo("body");switch(this.parameters.thumbnailPosition){case"right":r.css({left:s.left+o,top:s.top+a/2-r.outerHeight(!0)/2});break;case"left":r.css({left:s.left-r.outerWidth(!0),top:s.top+a/2-r.outerHeight(!0)/2});break;case"top":r.css({left:s.left+o/2-r.outerWidth(!0)/2,top:s.top-r.outerHeight(!0)});break;case"bottom":r.css({left:s.left+o/2-r.outerWidth(!0)/2,top:s.top+a})}return e.data("thumbnail",r),r},s.prototype.onSlideCountChanged=function(i,e,s){this.dots=t();for(var o=0;o<this.originalDots.length;o++)o%s==0?this.dots=this.dots.add(this.originalDots.eq(o).css("display","")):this.originalDots.eq(o).css("display","none");this.parameters.numeric&&this.dots.each(function(t,i){i.innerHTML=t+1})},s});
