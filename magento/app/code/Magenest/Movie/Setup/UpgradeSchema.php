<?php
namespace Magenest\Movie\Setup;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface {


    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        // so sanh version de thu thien update.
        if(version_compare($context->getVersion(), '2.1.1', '<')){
            $setup->getConnection()->addForeignKey(
                $setup->getFkName('magenest_movie', 'director_id', $setup->getTable('magenest_table'), 'director_id'),
                $setup->getTable('magenest_movie'),
                'director_id',
                $setup->getTable('magenest_director'),
                'director_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_NO_ACTION
            );

        }
        if(version_compare($context->getVersion(), '2.2.0', '<')){
            $setup->getConnection()->addForeignKey(
                $setup->getFkName('magenest_movie_actor', 'movie_id', $setup->getTable('magenest_movie'), 'movie_id'),
                $setup->getTable('magenest_movie_actor'),
                'movie_id',
                $setup->getTable('magenest_movie'),
                'movie_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_NO_ACTION
            );
            $setup->getConnection()->addForeignKey(
                $setup->getFkName('magenest_movie_actor', 'actor_id', $setup->getTable('magenest_actor'), 'actor_id'),
                $setup->getTable('magenest_movie_actor'),
                'actor_id',
                $setup->getTable('magenest_actor'),
                'actor_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_NO_ACTION
            );
        }
        $setup->endSetup();

    }
}

