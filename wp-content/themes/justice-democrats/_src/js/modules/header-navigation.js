var waitFor = require('../utils/waitFor');

waitFor('.layout-header', function() {

  const menuToggle = $('[data-js-menu-toggle]');
  const openMenuClass = 'has-open-menu';

  // menu
  menuToggle.on('click', function(){
    $('body').toggleClass(openMenuClass);
  })

});
