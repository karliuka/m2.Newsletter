<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 *
 * See COPYING.txt for license details.
 */
namespace Faonni\Newsletter\Plugin\Newsletter\Model\Queue;

use Magento\Framework\Mail\MessageInterface;
use Magento\Framework\Mail\TransportInterface;

/**
 * Transport Builder Plugin
 */
class TransportBuilder
{
    /**
     * Newsletter Subscriber
     *
     * @var \Magento\Newsletter\Model\Subscriber
     */
    protected $_subscriber;
    
    /**
     * Set Template Vars
     *
     * @param TransportBuilder $subject     
     * @param array $templateVars
     * @return null
     */
    public function beforeSetTemplateVars($subject, $templateVars)
    {
        $this->_subscriber = isset($templateVars['subscriber'])
			? $templateVars['subscriber']
			: null;
		
        return null;
    }
    
    /**
     * Return Mail Transport
     *
     * @param TransportBuilder $subject
     * @param MessageInterface $result
     * @return MessageInterface
     */	
    public function afterGetTransport($subject, $result) 
    {
		if ($this->_subscriber) {
			$result->getMessage()->addHeader(
				'List-Unsubscribe', 
				$this->_subscriber->getUnsubscriptionLink()
			);		
		}
        return $result;
    }	
}
