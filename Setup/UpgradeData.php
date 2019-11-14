<?php


namespace DevelSites\Resume\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
	/**
	 * @var \Psr\Log\LoggerInterface
	 */
	protected $_logger;
	/**
	 * @var \Magento\Cms\Model\PageFactory
	 */
	protected $_pageFactory;

	/**
	 * @var \Magento\Cms\Model\BlockFactory
	 */
	protected $_blockFactory;


	/**
	 * Construct
	 *
	 * @param \Magento\Cms\Model\PageFactory $pageFactory
	 * @param \Magento\Cms\Model\BlockFactory $blockFactory
	 * @param \Psr\Log\LoggerInterface $logger
	 */
	public function __construct(
		\Magento\Cms\Model\PageFactory $pageFactory,
		\Magento\Cms\Model\BlockFactory $blockFactory,
		\Psr\Log\LoggerInterface $logger
	) {
		$this->_pageFactory = $pageFactory;
		$this->_blockFactory = $blockFactory;
		$this->_logger = $logger;
	}

    /**
     * {@inheritdoc}
     */
    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
	    $setup->startSetup();

        if (version_compare($context->getVersion(), "1.0.0", "<")) {
	        //create new cms block
	        $block = $this->_blockFactory->create();
	        $block->setTitle('Resume education block')
	              ->setIdentifier('resume-education-block')
	              ->setIsActive(true)
	              ->setStores(array(0))
	              ->setContent('')
	              ->save();

	        //create new cms page
	        $page = $this->_pageFactory->create();
	        $page->setTitle('Resume page')
	             ->setIdentifier('itdelight/trainie/test')
	             ->setIsActive(true)
	             ->setPageLayout('1column')
	             ->setStores(array(0))
	             ->setContent('{{widget type="Magento\Cms\Block\Widget\Block" template="widget/static_block/default.phtml" block_id="' . $block->getId() . '"}}')
	             ->save();
        }

	    $setup->endSetup();
    }
}
