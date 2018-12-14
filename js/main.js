const calendar = new Calendar('calendar-wrap');

let mySlump = document.querySelectorAll('.slump-lbl-toggle');

Array.from(mySlump).forEach(slump => {
    slump.addEventListener('keydown', e => {
        if (e.which === 32 || e.which === 13) {
            e.preventDefault();
            slump.click();
        }
    });
});


/*
--------------------------------------------------------------------------
CAROUSEL
--------------------------------------------------------------------------
 */


$(document).ready(function () {
    $('#carousel').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            }
        ]
    });
});


$(document).ready(function () {
    $('#carousel2').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            }
        ]
    });
});


$(document).ready(function () {
    $('#carousel3').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            }
        ]
    });
});


$(document).ready(function () {
    $('#carousel4').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            }
        ]
    });
});


$(document).ready(function () {
    $('#carousel5').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            }
        ]
    });
});


/*
--------------------------------------------------------------------------
OUVERTURE VERS LES PARTIES EN DISPLAY NONE + VIDEO
--------------------------------------------------------------------------
 */


$(document).ready(function(){
   $('.btn-parti').click(function () {
       $('#calendrier').css('display', 'block');
       $('.flames1').removeClass('active');
       $('.flames2').addClass('active');
   })
});

$(document).ready(function (){
    $('#get__video').click(function(){
        $('.video').css('display', 'flex');
        $('.demarche').css('display', 'block')
        $('footer').css('display', 'flex');
        $('.flames2').removeClass('active');
        $('.flames3').addClass('active');
    })
});

$(document).ready(function () {
    $('.btn-play').click(function () {
        $('.btn-play').css('display', 'none');
        $('video').css('display', 'block');
        $('video').get(0).play();
    })
});

/*
--------------------------------------------------------------------------
SMOOTH SCROLL
--------------------------------------------------------------------------
*/

$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        let page = $(this).attr('href'); // Page cible
        let speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });
});


/*
--------------------------------------------------------------------------
POPUP DE RETENTION
--------------------------------------------------------------------------
*/


$(document).ready(function () {
   $('.btn-explication').click(function () {
      $('.popup').css('display', 'none');
       $('.video').css('display', 'flex');
       $('.demarche').css('display', 'block')
       $('footer').css('display', 'flex');
      $('.demarche').css('display', 'block');
       $('html, body').animate( { scrollTop: $('.demarche').offset().top }, 750 );
   });
   $('.popup').click(function () {
       $('.popup').fadeOut();
       ;
   })
});


/*
--------------------------------------------------------------------------
POP UP PRESENTATION ET CLONAGE DES ELEMENTS
--------------------------------------------------------------------------
 */


$(document).ready(function(){
    $('.myImage').click(function(){
        $('.appear').fadeIn();
    });
});

$(document).ready(function(){

    $('#arrow').click(function(){
        $('.appear').fadeOut();
    });
    $('.item').click(function (){
        let $selectItem = $(this);
        let $modal = $('#ModalSelected');
        $modal.find('.modal-title').text($selectItem.find('.prenom').text());
        $modal.find('.modal-description').text($selectItem.find('.description').text());

        $modal.find('#info__right').html('');
        $modal.find('#info__label').html('');
        $modal.find('.icon-image').html('');
        $modal.find('.moda-qualite').html('');
        $modal.find('.moda-btn').html('');
        $modal.find('#info__right').append($selectItem.find('.myImage').clone());
        $modal.find('#info__label').append($selectItem.find('#label').clone());
        $modal.find('.icon-image').append($selectItem.find('.icon__categorie').clone());
        $modal.find('.moda-qualite').append($selectItem.find('.info-qualite').clone());
        $modal.find('.moda-btn').append($selectItem.find('.switcher').clone());
    });
});


$(document).ready(function () {
    $(function () {
        $('form').on('submit',function (e) {

            $.ajax({
                type: 'post',
                url: 'index.php',
                data: $('form').serialize()
            });
            e.preventDefault();
        });
    });

});

document.addEventListener("mouseleave", function(e){
    if( e.clientY < 0 )
    {
        $('.popup').css('display', 'block');
    }
}, false);

/*
--------------------------------------------------------------------------
CHANGEMENT D'IMAGE AU SCROLL
--------------------------------------------------------------------------
 */


function changeImg() {
    if ($('.demarche').is(':visible')){
        if((window.scrollY > document.getElementById("illuAnim").offsetTop)&&(window.scrollY < document.getElementById("illuAnim").offsetTop+100)) {
            document.getElementById("illustration").setAttribute("src", "img/svg/illustration-0.svg");
        }
        else if((window.scrollY >= document.getElementById("illuAnim").offsetTop+100)&&(window.scrollY < document.getElementById("illuAnim").offsetTop+450)) {
            document.getElementById("illustration").setAttribute("src", "img/svg/illustration-1.svg");
        }
        else if((window.scrollY >= document.getElementById("illuAnim").offsetTop+450)&&(window.scrollY < document.getElementById("illuAnim").offsetTop+800)) {
            document.getElementById("illustration").setAttribute("src", "img/svg/illustration-2.svg");
        }
        else if((window.scrollY >= document.getElementById("illuAnim").offsetTop+800)&&(window.scrollY < document.getElementById("illuAnim").offsetTop+1100)) {
            document.getElementById("illustration").setAttribute("src", "img/svg/illustration-3.svg");
        }
        else if(window.scrollY >= document.getElementById("illuAnim").offsetTop+1100) {
            document.getElementById("illustration").setAttribute("src", "img/svg/illustration-4.svg");
        }
    }

}

/*
--------------------------------------------------------------------------
CHANGE LA VALEUR DES INPUT DANS LA PARTIE INFO
--------------------------------------------------------------------------
 */

$(document).ready(function () {
    $('.check').change(function () {
        if ($(this).prop('checked')) {
            $('.moda-btn input').prop('checked', true);
        }
        else {
            $('.moda-btn input').prop('checked', false);
        }
    });
    $('.check').trigger('change');
});



