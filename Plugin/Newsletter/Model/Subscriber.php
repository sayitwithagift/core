<?php
namespace SayItWithAGift\Core\Plugin\Newsletter\Model;
use Magento\Newsletter\Model\Subscriber as Sb;
// 2018-07-03
final class Subscriber {
	/**
	 * 2018-07-03
	 * "Notify customers on their newsletter sign ups (Magento 2, PlazaThemes Grand theme)":
	 * https://github.com/sayitwithagift/core/issues/4
	 * @see \Magento\Newsletter\Model\Subscriber::subscribe()
	 * @see \Magento\Newsletter\Model\Subscriber::sendConfirmationSuccessEmail()
	 * @param Sb $sb
	 */
	function beforeSendConfirmationSuccessEmail(Sb $sb) {
		if (df_action_is('newsletter_subscriber_new')) {
			$sb['import_mode'] = false;
		}
	}
}