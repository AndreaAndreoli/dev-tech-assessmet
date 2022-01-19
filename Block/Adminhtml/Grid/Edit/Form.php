<?php
namespace HN\HeadCount\Block\Adminhtml\Grid\Edit;

/**
 * Adminhtml Add New Row Form.
 */
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        \HN\HeadCount\Model\Status $options,
        array $data = []
    ) {
        $this->_options = $options;
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Prepare form.
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        $dateFormat = $this->_localeDate->getDateFormat(\IntlDateFormatter::SHORT);
        $model = $this->_coreRegistry->registry('row_data');
        $form = $this->_formFactory->create(
            ['data' => [
                            'id' => 'edit_form',
                            'enctype' => 'multipart/form-data',
                            'action' => $this->getData('action'),
                            'method' => 'post'
                        ]
            ]
        );

        $form->setHtmlIdPrefix('wkgrid_');
        if ($model->getId()) {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Edit HeadCount'), 'class' => 'fieldset-wide']
            );
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        } else {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Add New HeadCount'), 'class' => 'fieldset-wide']
            );
        }

        $fieldset->addField(
            'school_code',
            'text',
            [
                'name' => 'school_code',
                'label' => __('School Code'),
                'id' => 'school_code',
                'title' => __('School Code'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );


        $fieldset->addField(
            'name',
            'text',
            [
                'name' => 'name',
                'label' => __('School Name'),
                'id' => 'name',
                'title' => __('School Name'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );

        $fieldset->addField(
            'hc_2004',
            'text',
            [
                'name' => 'hc_2004',
                'label' => __('Year 2004'),
                'id' => 'hc_2004',
                'title' => __('Year 2004'),
                'required' => false,
            ]
        );

        $fieldset->addField(
            'hc_2005',
            'text',
            [
                'name' => 'hc_2005',
                'label' => __('Year 2005'),
                'id' => 'hc_2005',
                'title' => __('Year 2005'),
                'required' => false,
            ]
        );
 
        
        $fieldset->addField(
            'hc_2006',
            'text',
            [
                'name' => 'hc_2006',
                'label' => __('Year 2006'),
                'id' => 'hc_2006',
                'title' => __('Year 2006'),
                'required' => false,
            ]
        );

        
        $fieldset->addField(
            'hc_2007',
            'text',
            [
                'name' => 'hc_2007',
                'label' => __('Year 2007'),
                'id' => 'hc_2007',
                'title' => __('Year 2007'),
                'required' => false,
            ]
        );

        
        $fieldset->addField(
            'hc_2008',
            'text',
            [
                'name' => 'hc_2008',
                'label' => __('Year 2008'),
                'id' => 'hc_2008',
                'title' => __('Year 2008'),
                'required' => false,
            ]
        );
        
        
        $fieldset->addField(
            'hc_2009',
            'text',
            [
                'name' => 'hc_2009',
                'label' => __('Year 2009'),
                'id' => 'hc_2009',
                'title' => __('Year 2009'),
                'required' => false,
            ]
        );

        
        $fieldset->addField(
            'hc_2010',
            'text',
            [
                'name' => 'hc_2010',
                'label' => __('Year 2010'),
                'id' => 'hc_2010',
                'title' => __('Year 2010'),
                'required' => false,
            ]
        );

        $fieldset->addField(
            'hc_2011',
            'text',
            [
                'name' => 'hc_2011',
                'label' => __('Year 2011'),
                'id' => 'hc_2011',
                'title' => __('Year 2011'),
                'required' => false,
            ]
        );


        $fieldset->addField(
            'hc_2012',
            'text',
            [
                'name' => 'hc_2012',
                'label' => __('Year 2012'),
                'id' => 'hc_2012',
                'title' => __('Year 2012'),
                'required' => false,
            ]
        );


        $fieldset->addField(
            'hc_2013',
            'text',
            [
                'name' => 'hc_2013',
                'label' => __('Year 2013'),
                'id' => 'hc_2013',
                'title' => __('Year 2013'),
                'required' => false,
            ]
        );


        $fieldset->addField(
            'hc_2014',
            'text',
            [
                'name' => 'hc_2014',
                'label' => __('Year 2014'),
                'id' => 'hc_2014',
                'title' => __('Year 2014'),
                'required' => false,
            ]
        );


        
        $fieldset->addField(
            'hc_2015',
            'text',
            [
                'name' => 'hc_2015',
                'label' => __('Year 2015'),
                'id' => 'hc_2015',
                'title' => __('Year 2015'),
                'required' => false,
            ]
        );

        $fieldset->addField(
            'hc_2016',
            'text',
            [
                'name' => 'hc_2016',
                'label' => __('Year 2016'),
                'id' => 'hc_2016',
                'title' => __('Year 2016'),
                'required' => false,
            ]
        );

        
        $fieldset->addField(
            'hc_2017',
            'text',
            [
                'name' => 'hc_2017',
                'label' => __('Year 2017'),
                'id' => 'hc_2017',
                'title' => __('Year 2017'),
                'required' => false,
            ]
        );

        $fieldset->addField(
            'hc_2018',
            'text',
            [
                'name' => 'hc_2018',
                'label' => __('Year 2018'),
                'id' => 'hc_2018',
                'title' => __('Year 2018'),
                'required' => false,
            ]
        );

        

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
