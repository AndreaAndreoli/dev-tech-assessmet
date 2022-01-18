<?php

namespace HN\HeadCount\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\App\Filesystem\DirectoryList;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;

        $installer->startSetup();

        /*
         * Create table 'wk_grid_records'
         */

        $table = $installer->getConnection()->newTable(
            $installer->getTable('hn_headcounts')
        )->addColumn(
            'id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Id'
        )->addColumn(
            'school_code',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => false],
            'School Code'
        )->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'School Name'
        )->addColumn(
            'hc_2004',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2004'
        )->addColumn(
            'hc_2005',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2005'
        )->addColumn(
            'hc_2006',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2006'
        )->addColumn(
            'hc_2007',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2007'
        )->addColumn(
            'hc_2008',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2008'
        )->addColumn(
            'hc_2009',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2009'
        )->addColumn(
            'hc_2010',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2010'
        )->addColumn(
            'hc_2011',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2011'
        )->addColumn(
            'hc_2012',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2012'
        )->addColumn(
            'hc_2013',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2013'
        )->addColumn(
            'hc_2014',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2014'
        )->addColumn(
            'hc_2015',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2015'
        )->addColumn(
            'hc_2016',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2016'
        )->addColumn(
            'hc_2017',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2017'
        )->addColumn(
            'hc_2018',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Year 2019'
        )->setComment(
            'HN HeadCount'
        );

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
