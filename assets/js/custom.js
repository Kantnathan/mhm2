(function($) {
    "use strict";

    // ______________ RESPONSIVE MENU

	$(document).on("ready", function(e) {
        $('#navigation').superfish({
            delay: 300,
            animation: {
                opacity: 'show',
                height: 'show'
            },
            speed: 'fast',
            dropShadows: false
        });

        $(function() {
            $('#navigation').slicknav({
                closedSymbol: "&#8594;",
                openedSymbol: "&#8595;"
            });
        });

    });



    // ______________ ANIMATE EFFECTS
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 100,
        mobile: false,
    });
    wow.init();


	// ______________ PAGE LOADING
	$(window).on("load", function(e) {
		$("#global-loader").fadeOut("slow");
	})


    // ______________ BACK TO TOP BUTTON

	$(window).on("scroll", function(e) {
    	if ($(this).scrollTop() > 300) {
            $('#back-to-top').fadeIn('slow');
        } else {
            $('#back-to-top').fadeOut('slow');
        }
    });

    $("#back-to-top").on("click", function(e){
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

})(jQuery);

var $baseUrlD = "http://localhost/mboahost/nom_de_domaine/";
var $baseUrlH = "http://localhost/mboahost/hebergement_web/";
var $baseUrlV = "http://localhost/mboahost/vps/";
$(".panier-domaine").click(ajouterPanier);
$(".panier-hebergement").click(ajouterPanierHeb);

function ajouterPanier() {
    var $dmn = $(this);
    var $ind = $dmn.attr("data-id");
    var domaine = $("#domaine-voulu-" + $ind).val();
    var type = $("#type-voulu-" + $ind).val();
    var duree = $("#duree-voulu-" + $ind).val();
    var prix = $("#prix-" + $ind).val();

    $.ajax({
        url: $baseUrlD+"ajouter_panier/" + domaine + "/" + type + "/" + duree + "/" + prix,
        success: function (result) {
            // $("#cart").html(result);
            $.ajax({
                url: $baseUrlD+"get_panier/" + $ind,
                success: function (result2) {
                    $("#cart").empty().append(result2);
                    $("#upCart").empty().append(result2);
                    $("#nbprod").html($("#nombprod").val());
                    //alert(result);
                },
                error: function (e) {
                    alert(e.responseText);
                }
            });
        },
        error: function(e) {
            alert(e.responseText);
        }
    });
    
    $dmn.removeClass('btn-success panier-domaine').off('click');
    $dmn.addClass('btn-warning retirer-domaine');
    $dmn.html('Retirer du panier');
    $dmn.click(retirerPanier)
};

function ajouterPanierHeb(){
    var pack = $(this);
    var idPack = pack.attr("data-id");

    $.ajax({
        url: $baseUrlH+"ajouter_panier/"+idPack,
        success: function(result){
            if(result>0){
                window.location.replace($baseUrlH +"commande_domaine");
            }else{
                window.location.replace($baseUrlH +"commande_hebergement");
            }
        },
        error: function(e){
            alert(e.responseText);
        }
    });
};

function retirerPanier() {
    var $dmn = $(this);
    var $ind = $dmn.attr("data-id");
    var domaine = $("#domaine-voulu-" + $ind).val();
    var type = $("#type-voulu-" + $ind).val();
    var duree = $("#duree-voulu-" + $ind).val();
    var prix = $("#prix-" + $ind).val();
    $.ajax({
        url: $baseUrlD+"retirer_panier/" + domaine,
        success: function (result) {
            // $("#cart").html(result);
            $.ajax({
                url: $baseUrlD+"get_panier/" + $ind,
                success: function (result2) {
                    $("#cart").empty().append(result2);
                    $("#upCart").empty().append(result2);
                    $("#nbprod").html($("#nombprod").val());
                    //alert(result);
                },
                error: function (e) {
                    alert(e.responseText);
                }
            });
        }
    });
    
    $dmn.removeClass('btn-warning retirer-domaine').off('click');
    $dmn.addClass('btn-success panier-domaine');
    $dmn.html('Ajouter au panier');
    $dmn.click(ajouterPanier)
};

function retirerDomaine2(domaine) {
    $.ajax({
        url: $baseUrlD+"retirer_panier/" + domaine,
        success: function (result) {
            // $("#cart").html(result);
            $.ajax({
                url: $baseUrlD+"get_panier",
                success: function (result) {
                    $("#cart").empty().append(result);
                    $("#upCart").empty().append(result);
                    $("#nbprod").html($("#nombprod").val());
                    //alert(result);
                },
                error: function (e) {
                    alert(e.responseText);
                }
            });
        }
    });
    
};

function retirerHebergement(idPack) {
    $.ajax({
        url: $baseUrlH + "retirer_panier/" + idPack,
        success: function (result) {
            // $("#cart").html(result);
            $.ajax({
                url: $baseUrlD + "get_panier",
                success: function (result) {
                    $("#cart").empty().append(result);
                    $("#upCart").empty().append(result);
                    $("#nbprod").html($("#nombprod").val());
                    //alert(result);
                },
                error: function (e) {
                    alert(e.responseText);
                }
            });
        }
    });
};

function retirerVps(pid) {
    $.ajax({
        url: $baseUrlV + "retirer_panier/" + pid,
        success: function (result) {
            // $("#cart").html(result);
            $.ajax({
                url: $baseUrlD + "get_panier",
                success: function (result) {
                    $("#cart").empty().append(result);
                    $("#upCart").empty().append(result);
                    $("#nbprod").html($("#nombprod").val());
                    //alert(result);
                },
                error: function (e) {
                    alert(e.responseText);
                }
            });
        }
    });
};

$(".selPay").click( function (){
    var elm = $(this);
    var id = elm.attr("id");
    $(".selPay").removeClass("mtn");
    $(".selPay").removeClass("om");
    $(".selPay").removeClass("eum");
    $(".selPay").removeClass("btc");
    $(".selPay").addClass("btnPay");
    elm.removeClass("btnPay");
    elm.addClass(id);

    var classD = $("."+id+'d');
    $('.payDesc').hide();
    classD.show();
});