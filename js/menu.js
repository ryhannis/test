const toggleTag = document.querySelector("a.nav-toggle")
const navTag = document.querySelector(".main-navigation")

toggleTag.addEventListener("click", function () {

navTag.classList.toggle("open")

if (navTag.classList.contains("open")) {
  toggleTag.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.55 44.55"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="44.55 4.24 40.3 0 22.27 18.03 4.24 0 0 4.24 18.03 22.27 0 40.3 4.24 44.55 22.27 26.52 40.3 44.55 44.55 40.3 26.52 22.27 44.55 4.24"/></g></g></svg>'
} else {
  toggleTag.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57 32"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Group_121" data-name="Group 121"><rect id="Rectangle_700" data-name="Rectangle 700" width="57" height="6"/><rect id="Rectangle_701" data-name="Rectangle 701" y="13" width="57" height="6"/><rect id="Rectangle_702" data-name="Rectangle 702" y="26" width="57" height="6"/></g></g></g></svg>'
}
});



Barba.Dispatcher.on('transitionCompleted', function() {
  toggleNav();
});

jQuery(function($) {
  //Please note, the DOM should be ready
  Barba.Pjax.start();

  var FadeTransition = Barba.BaseTransition.extend({
    start: function() {
      /**
       * This function is automatically called as soon the Transition starts
       * this.newContainerLoading is a Promise for the loading of the new container
       * (Barba.js also comes with an handy Promise polyfill!)
       */

      // As soon the loading is finished and the old page is faded out, let's fade the new page
      Promise.all([this.newContainerLoading, this.fadeOut()]).then(this.fadeIn.bind(this));
    },

    fadeOut: function() {
      /**
       * this.oldContainer is the HTMLElement of the old Container
       */

      return $(this.oldContainer)
        .animate({opacity: 0})
        .promise();
    },

    fadeIn: function() {
      /**
       * this.newContainer is the HTMLElement of the new Container
       * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
       * Please note, newContainer is available just after newContainerLoading is resolved!
       */

      var _this = this;
      var $el = $(this.newContainer);

      $(this.oldContainer).hide();

      $el.css({
        visibility: 'visible',
        opacity: 0
      });

      $el.animate({opacity: 1}, 400, function() {
        $('html, body').animate({scrollTop: 0}, 300);
        /**
         * Do not forget to call .done() as soon your transition is finished!
         * .done() will automatically remove from the DOM the old Container
         */

        _this.done();
      });
    }
  });

  /**
   * Next step, you have to tell Barba to use the new Transition
   */

  Barba.Pjax.getTransition = function() {
    /**
     * Here you can use your own logic!
     * For example you can use different Transition based on the current page or link...
     */

    return FadeTransition;
  };
});


