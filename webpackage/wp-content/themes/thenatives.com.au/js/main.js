jQuery(document).ready(function ($) {

  var h_height = $('header#header').outerHeight()

  jQuery('.buttonMenu button').add($('nav .closeButton')).on('click', function () {
    if (jQuery('nav#menu').hasClass('open')) {
      jQuery('nav#menu').removeClass('open')
      jQuery('.openMenu').remove()
      jQuery('body').removeClass('nonScroll')

    }
    else {
      jQuery('nav#menu').addClass('open')
      jQuery('body').append('<div class="openMenu"></div>')
      jQuery('body').addClass('nonScroll')
    }
  })

  jQuery(document).on('click', '.openMenu', function () {
    if (jQuery('nav#menu').hasClass('open')) {
      jQuery('nav#menu').removeClass('open')
      jQuery('.openMenu').remove()
      jQuery('body').removeClass('nonScroll')
    }
  })
  var current_scroll = $(window).scrollTop();
  $(window).scroll(function () {
    if ($(window).scrollTop() <= h_height) {
      $('#header.sticky').removeClass('header-fixed');
      $('#header.sticky').removeClass('fixed-up');
      $('#header.sticky').css('height', '')


      if($('.socialHeader').length && $('.socialHeader').hasClass('onScroll')){
        $('#header .wrapperLogo').show();
        $('.socialHeader').removeClass('onScroll');
      }
    }
    else {
      $('#header.sticky').css('height', h_height);
      $('#header.sticky').addClass('header-fixed');

      if($('.socialHeader') && !$('.socialHeader').hasClass('onScroll')){
        $('.socialHeader').addClass('onScroll');
      }

      if($(window).scrollTop() > current_scroll){
        $('#header.sticky').removeClass('fixed-up');
        $('#header.sticky').addClass('fixed-down');

        if($('.socialHeader').length) {
          $('#header .wrapperLogo').hide();
          $('.socialHeader .prevPost').removeClass('currentEvent');
          $('.socialHeader .currentPost').addClass('currentEvent');
          $('.socialHeader .nextPost').removeClass('currentEvent');
        }

      }
      else {
        $('#header.sticky').removeClass('fixed-down');
        $('#header.sticky').addClass('fixed-up');

        if($('.socialHeader').length){
          $('#header .wrapperLogo').hide();
          $('.socialHeader .prevPost').addClass('currentEvent');
          $('.socialHeader .currentPost').removeClass('currentEvent');
          $('.socialHeader .nextPost').addClass('currentEvent');
        }
      }

    }
    current_scroll = $(window).scrollTop();

    if($('.header-fixed').length){
      $('.buttonMenu button').hover(function () {
          $('.tagButtonMenu').css('opacity','0')
        },
        function () {
          $('.tagButtonMenu').css('opacity','0')
        })
    } else {
      $('.buttonMenu button').hover(function () {
          $('.tagButtonMenu').css('opacity','1')
        },
        function () {
          $('.tagButtonMenu').css('opacity','0')
        })
    }
  });

  $('#menu-category-menu .menu-item a span').hover(
    function () {
      if ($(this).data('bg')) {
        $(this).children('.before').css('background-color', $(this).data('bg'))
        $(this).children('.after').css('background-color', 'transparent')
      }
      if ($(this).data('color'))
        $(this).css('color', $(this).data('color'))
    }, function () {
      if ($(this).data('bg')) {
        $(this).children('.after').css('background-color', $(this).data('bg'))
        $(this).children('.before').css('background-color', '')
      }
      $(this).css('color', '')
    }
  )

  jQuery('.dropdownButtons select').each(function () {
    var $this = jQuery(this), numberOfOptions = jQuery(this).children('option').length
    $this.addClass('select-hidden')
    $this.wrap('<div class="select"></div>')
    $this.after('<div class="select-styled"></div>')
    var $styledSelect = $this.next('div.select-styled')//$styledSelect.text($this.children('option').eq(0).text());
    var $list = jQuery('<ul />', {'class': 'select-options'}).insertAfter($styledSelect)
    for (var i = 0; i < numberOfOptions; i++) {
      jQuery('<li />', {
        text: $this.children('option').eq(i).text(),
        rel: $this.children('option').eq(i).val()
      }).appendTo($list)
    }
    var $listItems = $list.children('li')
    $styledSelect.click(function (e) {
      e.stopPropagation()
      jQuery('div.select-styled.active').not(this).each(function () {
        jQuery(this).removeClass('active').next('ul.select-options').hide()
      })
      jQuery(this).toggleClass('active').next('ul.select-options').toggle()
    })
    $listItems.click(function (e) {
      e.stopPropagation()
      $styledSelect.text(jQuery(this).text()).removeClass('active')
      $this.val(jQuery(this).attr('rel'))
      $list.hide()
    })
    jQuery(document).click(function () {
      $styledSelect.removeClass('active')
      $list.hide()
    })
  })

  $(window).scroll(function () {
    var scroll = $(window).scrollTop()
    var f_position = $('footer#footer').length ? $('footer#footer').offset().top : 0
    var body_padding_bottom = parseInt($('#body').css('padding-bottom').slice(0, -2))
    f_position = f_position - body_padding_bottom
    $('.bannerLeft, .bannerRight, .imgAdLeft, .imgAdRight').each(function () {
      position = f_position - $(this).outerHeight()
      if (scroll >= h_height && scroll < position) {
        if (!$(this).hasClass('fixed')) {
          $(this).addClass('fixed')
          $(this).removeClass('fixed-bottom')
          $(this).css('position', '')
        }
      }
      else {
        if (scroll < h_height) {
          $(this).removeClass('fixed')
          $(this).removeClass('fixed-bottom')
          $(this).css('position', '')
        }
        else {
          $(this).removeClass('fixed')
          $(this).addClass('fixed-bottom')
          $(this).css('position', 'absolute')
        }
      }
    })
  })

  $('.articleSlider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    customPaging: function (slider, i) {
      return (i + 1) + '/' + slider.slideCount
    }
  });

  $('.articleSliderShoot').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    slidesToShow: 1,
    adaptiveHeight: true,
    asNavFor: '.sliderPost',
    customPaging: function (slider, i) {
      return slider.slideCount + ' LOOKS';
    }
  });

  $('.sliderPost').slick({
    slidesToShow: 0,
    slidesToScroll: 1,
    asNavFor: '.articleSliderShoot',
    dots: false,
    focusOnSelect: true,
  });

  $('.wrapperSlider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 6,
    accessibility: true,
    arrows: true
  });

  if($('.filedUpload').length){
    $('.filedUpload input[type="file"]').css('display', 'none');
    var idForLabel = $('.filedUpload input[type="file"]').attr('id');
    $('.filedUpload .ginput_container').append("<label class='idForLabel' for='" + idForLabel + "'>upload</label>")
  }

  if(!$('.header-fixed').length){
    $('.buttonMenu button').hover(function () {
        $('.tagButtonMenu').css('opacity','1')
      },
      function () {
        $('.tagButtonMenu').css('opacity','0')
      })
  }
})
