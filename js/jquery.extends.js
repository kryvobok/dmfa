
// $('img.photo',this).imagesLoaded(myFunction)
// execute a callback when all images have loaded.
// needed because .load() doesn't work on cached images
 
// mit license. paul irish. 2010.
// webkit fix from Oren Solomianik. thx!
 
// callback function is passed the last image to load
// as an argument, and the collection as `this`
 
 
jQuery.fn.imagesLoaded = function(callback){
var elems = this.filter('img'),
len = elems.length,
blank = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
elems.bind('load.imgloaded',function(){
if (--len <= 0 && this.src !== blank){
elems.unbind('load.imgloaded');
callback.call(elems,this);
}
}).each(function(){
// cached images don't fire load sometimes, so we reset src.
if (this.complete || this.complete === undefined){
var src = this.src;
// webkit hack from http://groups.google.com/group/jquery-dev/browse_thread/thread/eee6ab7b2da50e1f
// data uri bypasses webkit log warning (thx doug jones)
this.src = blank;
this.src = src;
}
});
 
return this;
};

(function($,sr){
// debouncing function from John Hann
// http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
var debounce = function (func, threshold, execAsap) {
var timeout;
return function debounced () {
var obj = this, args = arguments;
function delayed () {
if (!execAsap)
func.apply(obj, args);
timeout = null;
};
if (timeout)
clearTimeout(timeout);
else if (execAsap)
func.apply(obj, args);
timeout = setTimeout(delayed, threshold || 100);
};
}
// smartresize
jQuery.fn[sr] = function(fn){ return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
})(jQuery,'smartresize');

