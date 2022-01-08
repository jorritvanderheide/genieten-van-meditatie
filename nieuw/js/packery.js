// Packery Init
var $grid = $('.grid').packery({
  gutter: '.gutter-sizer',
  itemSelector: '.grid-item',
  percentPosition: true,
});

// Packery Layout
$(document).ready(function(){
  $grid.packery('layout');
});

//  Packery Fit
$grid.on( 'click', '.grid-item', function( event ) {
  var $item = $( event.currentTarget );
  $item.toggleClass('grid-item-l');
  $item.children().toggleClass('active');
  $item.children().toggleClass('inactive');
  $grid.packery( 'fit', event.currentTarget );
  $grid.packery('layout');
});