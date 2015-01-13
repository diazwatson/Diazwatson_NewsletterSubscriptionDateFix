<?php
/**
 * Diazwatson_NewsletterSubscriptionDateFix
 *
 * @category    NewsletterSubscriptionDateFix
 * @package     Diazwatson_NewsletterSubscriptionDateFix
 * @Date        01/2015
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @author      @diazwatson
 */

class Diazwatson_NewsletterSubscriptionDateFix_Model_Observer
{

	/**
	 * An observer to update the subscription action date
	 * @param Varien_Event_Observer $observer
	 */
	public function setUpdateDate(Varien_Event_Observer $observer){

		$subscriber = $observer->getSubscriber();
		$subscriber['change_status_at'] = date("Y-m-d H:i:s", time());

	}
}