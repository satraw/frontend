// 3D hover card
$(function () {
  var card = $(".cardbox");
  card.on('mousemove', function (e) {
    var x = e.clientX - $(this).offset().left + $(window).scrollLeft();
    var y = e.clientY - $(this).offset().top + $(window).scrollTop();

    var rY = map(x, 0, $(this).width(), -6, 6);
    var rX = map(y, 0, $(this).height(), -6, 6);

    $(this).children(".image").css("transform", "rotateY(" + rY + "deg)" + " " + "rotateX(" + -rX + "deg)");
  });

  card.on('mouseenter', function () {
    $(this).children(".image").css({
      transition: "all " + 0.05 + "s" + " linear",
    });
  });

  card.on('mouseleave', function () {
    $(this).children(".image").css({
      transition: "all " + 0.2 + "s" + " linear",
    });

    $(this).children(".image").css("transform", "rotateY(" + 0 + "deg)" + " " + "rotateX(" + 0 + "deg)");
  });

  function map(x, in_min, in_max, out_min, out_max) {
    return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
  }
});


// Navigation

$('#toggle').click(function (e) {
  e.preventDefault();
  $(this).toggleClass('active');
  $('#overlay').toggleClass('open');
  $('.backdrop-shade').toggleClass('overlay-navbar-backdrop');
  $('body').toggleClass('of-y-hidden');
});
$('.overlay-menu a').click(function () {
  $('.button_container').toggleClass('active');
  $('#overlay').toggleClass('open');
  $('.backdrop-shade').toggleClass('overlay-navbar-backdrop');
  return true;
});

$("nav.overlay-menu>ul>li>a").click(function (e) {
  e.preventDefault();
  if (this.href) {
    var target = this.href;
    setTimeout(function () {
      window.location = target;
    }, 500);
  }
});


// Mobile Navigation Sticky
$(document).ready(function () {
  $(window).bind('scroll', function () {
    var navHeight = $(window).height() - 60;
    if ($(window).scrollTop() > navHeight) {
      $('.nav-mob').addClass('nav-mob-fixed');
    } else {
      $('.nav-mob').removeClass('nav-mob-fixed');
    }
  });
});


// AOS animation

document.querySelectorAll('h1, h2').forEach(query => {
  query.classList.add('animated', 'fadeInUp', 'anim-dur-75ms');
});
document.querySelectorAll('h3, h4, p').forEach(query => {
  query.classList.add('animated', 'fadeIn', 'anim-dur-1s');
});


// Heading Flip Animation

$(document).ready(function ($) {

  // set animation timing
  var animationDelay = 2500,
    // loading bar effect
    barAnimationDelay = 3800,
    barWaiting = barAnimationDelay - 3000, // 3s is the duration of the transition on the loading bar - set in CSS
    // letters effect
    lettersDelay = 50;

  initHeadline();

  function initHeadline() {
    // insert <i> element for each letter of a changing word
    singleLetters($('.cd-headline.letters').find('b'));
    // initialise headline animation
    animateHeadline($('.cd-headline'));
  }

  function singleLetters($words) {
    $words.each(function () {
      var word = $(this),
        letters = word.text().split(''),
        selected = word.hasClass('is-visible');
      for (i in letters) {
        if (word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
        letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>' : '<i>' + letters[i] + '</i>';
      }
      var newLetters = letters.join('');
      word.html(newLetters);
    });
  }

  function animateHeadline($headlines) {
    var duration = animationDelay;
    $headlines.each(function () {
      var headline = $(this);
      var spanWrapper = headline.find('.cd-words-wrapper'),
        newWidth = spanWrapper.width() + 10;
      spanWrapper.css('min-width', newWidth);
      if (headline.hasClass('loading-bar')) {
        duration = barAnimationDelay;
        spanWrapper.css('width', '');
        setTimeout(function () {
          spanWrapper.addClass('is-loading')
        }, barWaiting);
      };
      //trigger animation
      setTimeout(function () {
        hideWord(headline.find('.is-visible').eq(0))
      }, duration);
    });
  }

  function hideWord($word) {
    var nextWord = takeNext($word);
    if ($word.parents('.cd-headline').hasClass('letters')) {
      var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
      hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
      showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);
    } else if ($word.parents('.cd-headline').hasClass('loading-bar')) {
      $word.parents('.cd-words-wrapper').removeClass('is-loading');
      switchWord($word, nextWord);
      setTimeout(function () {
        hideWord(nextWord)
      }, barAnimationDelay);
      setTimeout(function () {
        $word.parents('.cd-words-wrapper').addClass('is-loading')
      }, barWaiting);
    } else {
      switchWord($word, nextWord);
      setTimeout(function () {
        hideWord(nextWord)
      }, animationDelay);
    }
  }

  function hideLetter($letter, $word, $bool, $duration) {
    $letter.removeClass('in').addClass('out');
    if (!$letter.is(':last-child')) {
      setTimeout(function () {
        hideLetter($letter.next(), $word, $bool, $duration);
      }, $duration);
    } else if ($bool) {
      setTimeout(function () {
        hideWord(takeNext($word))
      }, animationDelay);
    }
    if ($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
      var nextWord = takeNext($word);
      switchWord($word, nextWord);
    }
  }

  function showLetter($letter, $word, $bool, $duration) {
    $letter.addClass('in').removeClass('out');
    if (!$letter.is(':last-child')) {
      setTimeout(function () {
        showLetter($letter.next(), $word, $bool, $duration);
      }, $duration);
    } else {
      if (!$bool) {
        setTimeout(function () {
          hideWord($word)
        }, animationDelay)
      }
    }
  }

  function takeNext($word) {
    return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
  }

  function takePrev($word) {
    return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
  }

  function switchWord($oldWord, $newWord) {
    $oldWord.removeClass('is-visible').addClass('is-hidden');
    $newWord.removeClass('is-hidden').addClass('is-visible');
  }

});

//   jQuery Lightbox

$(document).ready(function () {
  // add all to same gallery
  $(".gallery a").attr("data-fancybox", "mygallery");
  // assign captions and title from alt-attributes of images:
  $(".gallery a").each(function () {
    $(this).attr("data-caption", $(this).find("img").attr("alt"));
    $(this).attr("title", $(this).find("img").attr("alt"));
  });
  // start fancybox:
  $(".gallery a").fancybox();
});


// Card Blur Effect

$(".card-cs").mouseenter(function () {
    $(".card-cs > *").addClass('blurry');
  })
  .mouseleave(function () {
    $(".card-cs > *").removeClass('blurry');
  });
  