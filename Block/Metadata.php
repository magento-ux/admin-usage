<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\AdminUsage\Block;

/**
 * AdminUsage metadata output
 *
 * @api
 * @author      Magento UX team <ybannykh@adobe.com>
 * @since 100.0.2
 */
class Metadata extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\App\State
     */
    protected $appState;

    /**
     * @var \Magento\Backend\Model\Auth\Session
     */
    protected $authSession;

    /**
     * @var \Magento\Framework\App\ProductMetadataInterface
     */
    protected $productMetadata;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\App\ProductMetadataInterface $productMetadata
     * @param \Magento\Backend\Model\Auth\Session $authSession
     * @param \Magento\Framework\App\State $appState
     * @param array $data
     */
    public function __construct(
      \Magento\Framework\View\Element\Template\Context $context,
      \Magento\Framework\App\ProductMetadataInterface $productMetadata,
      \Magento\Backend\Model\Auth\Session $authSession,
      \Magento\Framework\App\State $appState,
      array $data = [])
    {
        $this->productMetadata = $productMetadata;
        $this->authSession = $authSession;
        $this->appState = $appState;
        parent::__construct($context, $data);
    }

    /**
     * Get product version
     *
     * @return string
     */
    public function getMagentoVersion()
    {
        return $this->productMetadata->getVersion();
    }

    /**
     * Get current user id (hash generated from email)
     *
     * @return string
     */
    public function getCurrentUser()
    {
        return md5( 'ADMIN_USER' . $this->authSession->getUser()->getEmail());
    }


    /**
     * Get Magento mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->appState->getMode();
    }



}
