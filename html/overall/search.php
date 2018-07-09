<style type="text/css">
    html, body {
  width: 100%;
  height: 100%;
  overflow-x: hidden;
}
body {
  font-family: 'Roboto', sans-serif;
  color: #2d2d2d;
  letter-spacing: 0.2px;
  /* Search Active */
}
body.search-active {
  overflow: hidden;
}
body.search-active .search-input {
  opacity: 1;
  transform: none;
  pointer-events: all;
}
body.search-active .icon-close {
  opacity: 1;
  transform: rotate(-90deg);
}
body.search-active .control {
  cursor: default;
}
body.search-active .control .btn-material {
  transform: scale(70);
}
body.search-active .control .icon-material-search {
  opacity: 0;
}
/* Close Icon */
.icon-close {
  position: fixed;
  top: 30px;
  right: 30px;
  color: #fff;
  cursor: pointer;
  font-size: 70px;
  opacity: 0;
  transition: all 0.3s ease-in-out;
}
.icon-close:hover {
  transform: rotate(0);
}
/* Search Input */
.search-input {
  height: 80px;
  position: absolute;
  top: 50%;
  left: 50px;
  margin-top: -40px;
  pointer-events: none;
  opacity: 0;
  transform: translate(40px, 0);
  transition: all 0.3s ease-in-out;
}
.search-input input {
  color: #fff;
  font-size: 54px;
  border: 0;
  background: transparent;
  -webkit-appearance: none;
  box-sizing: border-box;
  outline: 0;
  font-weight: 200;
}
.search-input ::-webkit-input-placeholder {
  color: #eee;
}
.search-input :-moz-placeholder {
  color: #eee;
  opacity: 1;
}
.search-input ::-moz-placeholder {
  color: #eee;
  opacity: 1;
}
.search-input :-ms-input-placeholder {
  color: #eee;
}
/* Container */
.container {
  padding-right: 50px;
  padding-left: 50px;
  position: relative;
}
.container.container-dark {
  background: #22313f;
  color: #fff;
}
/* Control btn */
.control {
  cursor: pointer;
}
.control .btn-material {
  position: absolute;
  top: -30px;
  width: 60px;
  height: 60px;
  right: 60px;
  border-radius: 100%;
  box-sizing: border-box;
  background: #e91e63;
  outline: 0;
  transform-origin: 50%;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
}
.control .btn-material:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}
.control .icon-material-search {
  color: #fff;
  position: absolute;
  top: -10px;
  right: 78px;
  transition: opacity 0.3s ease-in-out;
}
/* Utilities */
.p-y-md {
  padding-top: 2.8rem;
  padding-bottom: 2.8rem;
}
/* Typo */
h1, h2 {
  font-weight: 300;
}

</style>

<!-- page content + floating button -->
<div class='container p-y-md'>
  <div class='control'>
    <div class='btn-material'></div>
    <i class='material-icons icon-material-search'>search</i>
  </div>
</div>

<!-- full screen form controls -->
<i class='icon-close material-icons'>close</i>
<div class='search-input'>
  <input class='input-search' placeholder='Start Typing' type='text'>
</div>