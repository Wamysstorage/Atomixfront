// Tabs
$('.js-tab-trigger').on('click', function() {
	let tabName = $(this).attr('data-tab');
	let tab = $('.js-tab-content[data-tab="'+tabName+'"]');

	$('.js-tab-trigger.tabs_active').removeClass('tabs_active');
	$(this).addClass('tabs_active');

	$('.js-tab-content.tabs_active').removeClass('tabs_active');
	tab.addClass('tabs_active');
});

// Buttons 1
$('.js-footer-trigger').on('click', function() {
    let footerName = $(this).attr('data-foot');
    let footer = $('.js-footer-content[data-foot="'+footerName+'"]');

    $('.js-footer-trigger.footer_active').removeClass('footer_active');
    $(this).addClass('footer_active');

    $('.js-footer-content.footer_active').removeClass('footer_active');
    footer.addClass('footer_active');
});

// Buttons 2
$('.js-footer-trigger_two').on('click', function() {
    let footerName_two = $(this).attr('data-foot_two');
    let footer_two = $('.js-footer-content_two[data-foot_two="'+footerName_two+'"]');

    $('.js-footer-trigger_two.footer_active_two').removeClass('footer_active_two');
    $(this).addClass('footer_active_two');

    $('.js-footer-content_two.footer_active_two').removeClass('footer_active_two');
    footer_two.addClass('footer_active_two');
});

// Modal
$('.js-payNow_button').on('click', function (){
   $('.js_modal_window').show();
    $('.js-modal-overlay').show();
});

$('.js-modal-close').on('click', function (){
    $('.js_modal_window').hide();
    $('.js-modal-overlay').hide();
});
$('.js-modal-overlay').on('click', function (){
    $('.js_modal_window').hide();
    $('.js-modal-overlay').hide();
});
