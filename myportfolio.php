<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <link rel='stylesheet' href='https://cdn.rawgit.com/filipelinhares/ress/master/dist/ress.min.css'>



    <style>
        @import url('https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500,500i,600,600i,700,700i |Cormorant+SC:400,500,600,700');

/* ====================================
General Styles
==================================== */

body {
  background-color: #fff;
}

.page-wrap {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(to right bottom, #2a1f30 50%, #383d44 50%);
}

/* ====================================
Home Slider
==================================== */

#home-slider {
  height: 80vh;
  width: 90vw;
  position: relative;

}
.swiper-container {
  height: 100%;
  width: 100%;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}

.swiper-image-one {
  background-image: url(https://source.unsplash.com/GXOGGENgHnQ/1600x900);
}

.swiper-image-two {
  background-image: url(https://source.unsplash.com/Jy6luiLBsrk/1600x900);
}

.swiper-image-three {
  background-image: url(https://source.unsplash.com/sFLVTqNzG2I/1600x900);
}

.swiper-image-four {
  background-image: url(https://source.unsplash.com/pj1jt4vBGZY/1600x900);
}

.swiper-image-five {
  background-image: url(https://source.unsplash.com/Jy6luiLBsrk/1600x900);
}

.swiper-image-six {
  background-image: url(https://source.unsplash.com/bxCgan0J1Sg/1600x900);
}

.swiper-image {
  width: 50%;
  height: 100%;
}
.swiper-image-inner {
  background-size: cover;
  background-position: center center;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  background-color: hsla(0, 0%, 0%, 0.2);
  background-blend-mode: overlay;
}
.swiper-image-inner.swiper-image-left {
  padding: 4rem;
}
.swiper-image-left {
  filter: sepia(100%);
  transition: all 1s linear;
  transition-delay: 1s;
}
.swiper-slide.swiper-slide-active .swiper-image-left {
  filter: sepia(0%);
}
.swiper-image-inner.swiper-image-right {
  filter: hue-rotate(-60deg);
  transition: all 1s linear;
  transition-delay: 1s;
  background-color: hsla(0, 0%, 0%, 0.5);
  background-blend-mode: multiply;
}
h1 {
  font-family: 'Cormorant Garamond', serif;
  font-weight: 500;
  color: #fff;
  align-self: flex-start;
  margin: 0 0 auto 0;
  font-size: 4.5rem;
  line-height: 1;
  transition: all .8s cubic-bezier(0.215, 0.61, 0.355, 1) 1.1s;
  transform: translate3d(-20%, 0, 0);
  opacity: 0;
}
h1 span.emphasis {
  font-weight: 700;
  font-style: italic;
  opacity: 0;
  transition: all .8s cubic-bezier(0.215, 0.61, 0.355, 1) 1.2s;
  transform: translate3d(-20%, 0, 0);
  display: inline-block;
}
h1 span:not(.emphasis) {
  font-size: 3.5rem;
}
h1 + p {
  font-family: 'Cormorand SC';
  font-size: 14px;
  letter-spacing: 2px;
  margin: 0;
  line-height: 1;
  margin-bottom: auto;
  align-self: flex-end;
  text-transform: uppercase;
  transition: all .8s cubic-bezier(0.215, 0.61, 0.355, 1) 1.3s;
  transform: translate3d(-20%, 0, 0);
  opacity: 0;
  font-weight: 500;
  color: #fff;
  padding-right: 8rem;
}
p.paragraph {
  margin: 0;
  font-family: 'Cormorant Garamond', serif;
  color: #fff;
  width: 100%;
  max-width: 350px;
  text-align: justify;
  font-size: 1.2rem;
  font-weight: 500;
  opacity: 0;
  transition: all .6s cubic-bezier(0.215, 0.61, 0.355, 1) 1.4s;
  transform: translate3d(-20%, 0, 0);
}
.swiper-slide.swiper-slide-active .swiper-image-right {
  filter: hue-rotate(90deg);
}

.swiper-slide.swiper-slide-active h1,
.swiper-slide.swiper-slide-active p.paragraph,
.swiper-slide.swiper-slide-active h1 span.emphasis,
.swiper-slide.swiper-slide-active h1 + p {
  transform: translate3d(0, 0, 0);
  opacity: 1;
}

@media screen and (max-width: 1280px) {
  h1 {
    font-size: 3.9rem;
  }
  h1 span:not(.emphasis) {
    font-size: 2.9rem;
  }
  h1 + p {
    font-size: 13px;
  }
  p.paragraph {
    font-size: 1rem;
    line-height: 1.3;
  }
}
@media screen and (max-width: 960px) {
  h1 {
    font-size: 3.5rem;
  }
  h1 span:not(.emphasis) {
    font-size: 2.5rem;
  }
  p.paragraph {
    max-width: 90%;
  }
}
@media screen and (max-width: 640px) {
  #home-slider{
    height: 86vh;
    width: 96vw;
  }
  h1 {
    font-size: 3.2rem;
    align-self: center;
  }
  h1 span:not(.emphasis) {
    font-size: 2.1rem;
  }
  p.paragraph {
    max-width: 94%;
  }
}

/* Swiper css file. Only thing changed down here is the pagination styling */
/**
 * Swiper 3.4.1
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * 
 * http://www.idangero.us/swiper/
 * 
 * Copyright 2016, Vladimir Kharlampidi
 * The iDangero.us
 * http://www.idangero.us/
 * 
 * Licensed under MIT
 * 
 * Released on: December 13, 2016
 */
.swiper-container {
  margin-left: auto;
  margin-right: auto;
  position: relative;
  overflow: hidden;
  /* Fix of Webkit flickering */
  z-index: 1;
}
.swiper-container-no-flexbox .swiper-slide {
  float: left;
}
.swiper-container-vertical > .swiper-wrapper {
  -webkit-box-orient: vertical;
  -moz-box-orient: vertical;
  -ms-flex-direction: column;
  -webkit-flex-direction: column;
  flex-direction: column;
}
.swiper-wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  -o-transition-property: -o-transform;
  -ms-transition-property: -ms-transform;
  transition-property: transform;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.swiper-container-android .swiper-slide, .swiper-wrapper {
  -webkit-transform: translate3d(0px, 0, 0);
  -moz-transform: translate3d(0px, 0, 0);
  -o-transform: translate(0px, 0px);
  -ms-transform: translate3d(0px, 0, 0);
  transform: translate3d(0px, 0, 0);
}
.swiper-container-multirow > .swiper-wrapper {
  -webkit-box-lines: multiple;
  -moz-box-lines: multiple;
  -ms-flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
}
.swiper-container-free-mode > .swiper-wrapper {
  -webkit-transition-timing-function: ease-out;
  -moz-transition-timing-function: ease-out;
  -ms-transition-timing-function: ease-out;
  -o-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
  margin: 0 auto;
}
.swiper-slide {
  -webkit-flex-shrink: 0;
  -ms-flex: 0 0 auto;
  flex-shrink: 0;
  width: 100%;
  height: 100%;
  position: relative;
  background-color: #fff;
  overflow: hidden;
  display: flex;
  
}
/* Auto Height */
.swiper-container-autoheight, .swiper-container-autoheight .swiper-slide {
  height: auto;
}
.swiper-container-autoheight .swiper-wrapper {
  -webkit-box-align: start;
  -ms-flex-align: start;
  -webkit-align-items: flex-start;
  align-items: flex-start;
  -webkit-transition-property: -webkit-transform, height;
  -moz-transition-property: -moz-transform;
  -o-transition-property: -o-transform;
  -ms-transition-property: -ms-transform;
  transition-property: transform, height;
}
/* a11y */
.swiper-container .swiper-notification {
  position: absolute;
  left: 0;
  top: 0;
  pointer-events: none;
  opacity: 0;
  z-index: -1000;
}
/* IE10 Windows Phone 8 Fixes */
.swiper-wp8-horizontal {
  -ms-touch-action: pan-y;
  touch-action: pan-y;
}
.swiper-wp8-vertical {
  -ms-touch-action: pan-x;
  touch-action: pan-x;
}
/* Arrows */
.swiper-button-prev, .swiper-button-next {
  position: absolute;
  top: 50%;
  width: 27px;
  height: 44px;
  margin-top: -22px;
  z-index: 10;
  cursor: pointer;
  -moz-background-size: 27px 44px;
  -webkit-background-size: 27px 44px;
  background-size: 27px 44px;
  background-position: center;
  background-repeat: no-repeat;
}
.swiper-button-prev.swiper-button-disabled,
.swiper-button-next.swiper-button-disabled {
  opacity: 0.35;
  cursor: auto;
  pointer-events: none;
}
.swiper-button-prev, .swiper-container-rtl .swiper-button-next {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
  left: 10px;
  right: auto;
}
.swiper-button-prev.swiper-button-black,
.swiper-container-rtl .swiper-button-next.swiper-button-black {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
}
.swiper-button-prev.swiper-button-white,
.swiper-container-rtl .swiper-button-next.swiper-button-white {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
}
.swiper-button-next, .swiper-container-rtl .swiper-button-prev {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
  right: 10px;
  left: auto;
}
.swiper-button-next.swiper-button-black,
.swiper-container-rtl .swiper-button-prev.swiper-button-black {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
}
.swiper-button-next.swiper-button-white,
.swiper-container-rtl .swiper-button-prev.swiper-button-white {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
}
/* Pagination Styles */
.swiper-pagination {
  position: absolute;
  text-align: center;
  -webkit-transition: 300ms;
  -moz-transition: 300ms;
  -o-transition: 300ms;
  transition: 300ms;
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  z-index: 10;
}
.swiper-pagination.swiper-pagination-hidden {
  opacity: 0;
}
/* Common Styles */
.swiper-pagination-fraction,
.swiper-pagination-custom,
.swiper-container-horizontal > .swiper-pagination-bullets {
  bottom: 10px;
  left: 0;
  width: 100%;
}
/* Bullets */
.swiper-pagination-bullet {
  width: 14px;
  height: 14px;
  display: inline-block;
  background: #fff;
  opacity: 0.4;
}
button.swiper-pagination-bullet {
  border: none;
  margin: 0;
  padding: 0;
  box-shadow: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -webkit-appearance: none;
  appearance: none;
}
.swiper-pagination-clickable .swiper-pagination-bullet {
  cursor: pointer;
}
.swiper-pagination-white .swiper-pagination-bullet {
  background: #fff;
}
.swiper-pagination-bullet-active {
  opacity: 1;
  background: #fff;
}
.swiper-pagination-white .swiper-pagination-bullet-active {
  background: #fff;
}
.swiper-pagination-black .swiper-pagination-bullet-active {
  background: #000;
}
.swiper-container-vertical > .swiper-pagination-bullets {
  right: 15px;
  bottom: 15px;
}
.swiper-container-vertical
  > .swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 5px 0;
  display: block;
}
.swiper-container-horizontal
  > .swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 0 5px;
}
/* Progress */
.swiper-pagination-progress {
  background: rgba(0, 0, 0, 0.25);
  position: absolute;
}
.swiper-pagination-progress .swiper-pagination-progressbar {
  background: #007aff;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  -webkit-transform-origin: left top;
  -moz-transform-origin: left top;
  -ms-transform-origin: left top;
  -o-transform-origin: left top;
  transform-origin: left top;
}
.swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar {
  -webkit-transform-origin: right top;
  -moz-transform-origin: right top;
  -ms-transform-origin: right top;
  -o-transform-origin: right top;
  transform-origin: right top;
}
.swiper-container-horizontal > .swiper-pagination-progress {
  width: 100%;
  height: 4px;
  left: 0;
  top: 0;
}
.swiper-container-vertical > .swiper-pagination-progress {
  width: 4px;
  height: 100%;
  left: 0;
  top: 0;
}
.swiper-pagination-progress.swiper-pagination-white {
  background: rgba(255, 255, 255, 0.5);
}
.swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar {
  background: #fff;
}
.swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
  background: #000;
}
/* 3D Container */
.swiper-container-3d {
  -webkit-perspective: 1200px;
  -moz-perspective: 1200px;
  -o-perspective: 1200px;
  perspective: 1200px;
}
.swiper-container-3d .swiper-wrapper,
.swiper-container-3d .swiper-slide,
.swiper-container-3d .swiper-slide-shadow-left,
.swiper-container-3d .swiper-slide-shadow-right,
.swiper-container-3d .swiper-slide-shadow-top,
.swiper-container-3d .swiper-slide-shadow-bottom,
.swiper-container-3d .swiper-cube-shadow {
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.swiper-container-3d .swiper-slide-shadow-left,
.swiper-container-3d .swiper-slide-shadow-right,
.swiper-container-3d .swiper-slide-shadow-top,
.swiper-container-3d .swiper-slide-shadow-bottom {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 10;
}
.swiper-container-3d .swiper-slide-shadow-left {
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(rgba(0, 0, 0, 0.5)),
    to(rgba(0, 0, 0, 0))
  );
  /* Safari 4+, Chrome */
  background-image: -webkit-linear-gradient(
    right,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Chrome 10+, Safari 5.1+, iOS 5+ */
  background-image: -moz-linear-gradient(
    right,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Firefox 3.6-15 */
  background-image: -o-linear-gradient(
    right,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Opera 11.10-12.00 */
  background-image: linear-gradient(
    to left,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Firefox 16+, IE10, Opera 12.50+ */
}
.swiper-container-3d .swiper-slide-shadow-right {
  background-image: -webkit-gradient(
    linear,
    right top,
    left top,
    from(rgba(0, 0, 0, 0.5)),
    to(rgba(0, 0, 0, 0))
  );
  /* Safari 4+, Chrome */
  background-image: -webkit-linear-gradient(
    left,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Chrome 10+, Safari 5.1+, iOS 5+ */
  background-image: -moz-linear-gradient(
    left,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Firefox 3.6-15 */
  background-image: -o-linear-gradient(
    left,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Opera 11.10-12.00 */
  background-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Firefox 16+, IE10, Opera 12.50+ */
}
.swiper-container-3d .swiper-slide-shadow-top {
  background-image: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(rgba(0, 0, 0, 0.5)),
    to(rgba(0, 0, 0, 0))
  );
  /* Safari 4+, Chrome */
  background-image: -webkit-linear-gradient(
    bottom,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Chrome 10+, Safari 5.1+, iOS 5+ */
  background-image: -moz-linear-gradient(
    bottom,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Firefox 3.6-15 */
  background-image: -o-linear-gradient(
    bottom,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Opera 11.10-12.00 */
  background-image: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Firefox 16+, IE10, Opera 12.50+ */
}
.swiper-container-3d .swiper-slide-shadow-bottom {
  background-image: -webkit-gradient(
    linear,
    left bottom,
    left top,
    from(rgba(0, 0, 0, 0.5)),
    to(rgba(0, 0, 0, 0))
  );
  /* Safari 4+, Chrome */
  background-image: -webkit-linear-gradient(
    top,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Chrome 10+, Safari 5.1+, iOS 5+ */
  background-image: -moz-linear-gradient(
    top,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Firefox 3.6-15 */
  background-image: -o-linear-gradient(
    top,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Opera 11.10-12.00 */
  background-image: linear-gradient(
    to bottom,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0)
  );
  /* Firefox 16+, IE10, Opera 12.50+ */
}
/* Coverflow */
.swiper-container-coverflow .swiper-wrapper,
.swiper-container-flip .swiper-wrapper {
  /* Windows 8 IE 10 fix */
  -ms-perspective: 1200px;
}
/* Cube + Flip */
.swiper-container-cube, .swiper-container-flip {
  overflow: visible;
}
.swiper-container-cube .swiper-slide, .swiper-container-flip .swiper-slide {
  pointer-events: none;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
  z-index: 1;
}
.swiper-container-cube .swiper-slide .swiper-slide,
.swiper-container-flip .swiper-slide .swiper-slide {
  pointer-events: none;
}
.swiper-container-cube .swiper-slide-active,
.swiper-container-flip .swiper-slide-active,
.swiper-container-cube .swiper-slide-active .swiper-slide-active,
.swiper-container-flip .swiper-slide-active .swiper-slide-active {
  pointer-events: auto;
}
.swiper-container-cube .swiper-slide-shadow-top,
.swiper-container-flip .swiper-slide-shadow-top,
.swiper-container-cube .swiper-slide-shadow-bottom,
.swiper-container-flip .swiper-slide-shadow-bottom,
.swiper-container-cube .swiper-slide-shadow-left,
.swiper-container-flip .swiper-slide-shadow-left,
.swiper-container-cube .swiper-slide-shadow-right,
.swiper-container-flip .swiper-slide-shadow-right {
  z-index: 0;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
}
/* Cube */
.swiper-container-cube .swiper-slide {
  visibility: hidden;
  -webkit-transform-origin: 0 0;
  -moz-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
  transform-origin: 0 0;
  width: 100%;
  height: 100%;
}
.swiper-container-cube.swiper-container-rtl .swiper-slide {
  -webkit-transform-origin: 100% 0;
  -moz-transform-origin: 100% 0;
  -ms-transform-origin: 100% 0;
  transform-origin: 100% 0;
}
.swiper-container-cube .swiper-slide-active,
.swiper-container-cube .swiper-slide-next,
.swiper-container-cube .swiper-slide-prev,
.swiper-container-cube .swiper-slide-next + .swiper-slide {
  pointer-events: auto;
  visibility: visible;
}
.swiper-container-cube .swiper-cube-shadow {
  position: absolute;
  left: 0;
  bottom: 0px;
  width: 100%;
  height: 100%;
  background: #000;
  opacity: 0.6;
  -webkit-filter: blur(50px);
  filter: blur(50px);
  z-index: 0;
}
/* Fade */
.swiper-container-fade.swiper-container-free-mode .swiper-slide {
  -webkit-transition-timing-function: ease-out;
  -moz-transition-timing-function: ease-out;
  -ms-transition-timing-function: ease-out;
  -o-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.swiper-container-fade .swiper-slide {
  pointer-events: none;
  -webkit-transition-property: opacity;
  -moz-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
}
.swiper-container-fade .swiper-slide .swiper-slide {
  pointer-events: none;
}
.swiper-container-fade .swiper-slide-active,
.swiper-container-fade .swiper-slide-active .swiper-slide-active {
  pointer-events: auto;
}
.swiper-zoom-container {
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -moz-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
  text-align: center;
}
.swiper-zoom-container > img,
.swiper-zoom-container > svg,
.swiper-zoom-container > canvas {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}
/* Scrollbar */
.swiper-scrollbar {
  border-radius: 10px;
  position: relative;
  -ms-touch-action: none;
  background: rgba(0, 0, 0, 0.1);
}
.swiper-container-horizontal > .swiper-scrollbar {
  position: absolute;
  left: 1%;
  bottom: 3px;
  z-index: 50;
  height: 5px;
  width: 98%;
}
.swiper-container-vertical > .swiper-scrollbar {
  position: absolute;
  right: 3px;
  top: 1%;
  z-index: 50;
  width: 5px;
  height: 98%;
}
.swiper-scrollbar-drag {
  height: 100%;
  width: 100%;
  position: relative;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 10px;
  left: 0;
  top: 0;
}
.swiper-scrollbar-cursor-drag {
  cursor: move;
}
/* Preloader */
.swiper-lazy-preloader {
  width: 42px;
  height: 42px;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -21px;
  margin-top: -21px;
  z-index: 10;
  -webkit-transform-origin: 50%;
  -moz-transform-origin: 50%;
  transform-origin: 50%;
  -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
  -moz-animation: swiper-preloader-spin 1s steps(12, end) infinite;
  animation: swiper-preloader-spin 1s steps(12, end) infinite;
}
.swiper-lazy-preloader:after {
  display: block;
  content: "";
  width: 100%;
  height: 100%;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
  background-position: 50%;
  -webkit-background-size: 100%;
  background-size: 100%;
  background-repeat: no-repeat;
}
.swiper-lazy-preloader-white:after {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
}
@-webkit-keyframes swiper-preloader-spin {
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes swiper-preloader-spin {
  100% {
    transform: rotate(360deg);
  }
}

    </style>
</head>
<body>
    <!-- Page Wrap -->
<div class="page-wrap">

<div id="home-slider">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide-one">
        <div class="swiper-image" data-swiper-parallax-y="-20%">
          <div class="swiper-image-inner swiper-image-left swiper-image-one">
            <h1>A <span class="emphasis">Breath</span>. <br><span>Of Fresh Air.</span></h1>
            <p>Chapter I, page XV</p>
          </div>
        </div>
        <div class="swiper-image" data-swiper-parallax-y="35%">
          <div class="swiper-image-inner swiper-image-right swiper-image-two">
            <p class="paragraph">
              A Prophet sat in the market-place and told the fortunes of all who cared to engage his services. Suddenly there came running up one who told him that his house had been broken into by thieves, and that they had made off with everything they could lay
              hands on.
            </p>
          </div>
        </div>
      </div>
      <div class="swiper-slide swiper-slide-two">
        <div class="swiper-image" data-swiper-parallax-y="-20%">
          <div class="swiper-image-inner swiper-image-left swiper-image-three">
            <h1>The <span class="emphasis">Drop</span>. <br><span>Of Eternal life.</span></h1>
            <p>Chapter II, page VII</p>
          </div>
        </div>
        <div class="swiper-image" data-swiper-parallax-y="35%">
          <div class="swiper-image-inner swiper-image-right swiper-image-four">
            <p class="paragraph">
              A thirsty Crow found a Pitcher with some water in it, but so little was there that, try as she might, she could not reach it with her beak, and it seemed as though she would die of thirst within sight of the remedy.
            </p>
          </div>
        </div>
      </div>
      <div class="swiper-slide swiper-slide-three">
        <div class="swiper-image" data-swiper-parallax-y="-20%">
          <div class="swiper-image-inner swiper-image-left swiper-image-five">
            <h1>A <span class="emphasis">Sense</span>. <br><span>Of Things to Come.</span></h1>
            <p>Chapter III, page XI</p>
          </div>
        </div>
        <div class="swiper-image" data-swiper-parallax-y="35%">
          <div class="swiper-image-inner swiper-image-right swiper-image-six">
            <p class="paragraph">
              Every man carries Two Bags about with him, one in front and one behind, and both are packed full of faults. The Bag in front contains his neighbours’ faults, the one behind his own. Hence it is that men do not see their own faults, but never fail to see
              those of others.
            </p>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

</div>

<script src=&quot;https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js&quot;></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js'></script>
    <script id=&quot;rendered-js&quot; >
var mySwiper = new Swiper(&quot;.swiper-container&quot;, {
direction: &quot;vertical&quot;,
loop: true,
pagination: &quot;.swiper-pagination&quot;,
grabCursor: true,
speed: 1000,
paginationClickable: true,
parallax: true,
autoplay: false,
effect: &quot;slide&quot;,
mousewheelControl: 1 });
//# sourceURL=pen.js
  </script>
</body>
</html>