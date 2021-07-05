<?php

    namespace Magenest\Movie\Setup;
    use Magento\Framework\Setup\InstallSchemaInterface;
    use Magento\Framework\Setup\ModuleContextInterface;
    use Magento\Framework\Setup\SchemaSetupInterface;

    /**
    * @codeCoverageIgnore
    */
    class InstallSchema implements InstallSchemaInterface
    {
    /**
    * {@inheritdoc}
    * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
    */
    public function install(
    SchemaSetupInterface $setup,
    ModuleContextInterface $context
    )
    {
    /**
    * Create table 'magenest_movie'
    */
    if (version_compare($context->getVersion(), '2.0.0') < 0) {
    $table = $setup->getConnection()
    ->newTable($setup->getTable('magenest_movie'))
    ->addColumn(
    'movie_id',
    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
    null,
    [
    'identity' => true,
    'unsigned' => true,
    'nullable' => false,
    'primary' => true
    ],
    'Movie ID'
    )
    ->addColumn(
    'name',
    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
    255,
    [
    'nullable' => false,
    'default' => ''
    ],
    'Name of movie'
    )
    ->addColumn(
        'description',
        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
        '64k',
        [
            'nullable' => false,
            'default' => ''
        ],
        'description of movie'
    )
    ->addColumn(
        'rating',
        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
        null,[],
        'rating of movie'
    )->addColumn(
            'director_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,[],
            'director id of movie'
        )
    ->setComment("table movie");
    $setup->getConnection()->createTable($table);

    /**
    * Create table 'magenest_director'
    */
    $table = $setup->getConnection()
    ->newTable($setup->getTable('magenest_director'))
    ->addColumn(
    'director_id',
    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
    null,
    [
    'identity' => true,
    'unsigned' => true,
    'nullable' => false,
    'primary' => true
    ],
    'Director ID'
    )
    ->addColumn(
    'name',
    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
    null,
    [
    'nullable' => false,
    'default' => ''
    ],
    'name'
    )->setComment("Director table");

    $setup->getConnection()->createTable($table);

    /**
    * Create table 'magenest_actor'
    */
    $table = $setup->getConnection()
    ->newTable($setup->getTable('magenest_actor'))
    ->addColumn(
    'actor_id',
    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
    null,
    [
    'identity' => true,
    'unsigned' => true,
    'nullable' => false,
    'primary' => true
    ],
    'Actor ID'
    )
    ->addColumn(
    'names',
    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
    null,
    [
    'nullable' => false,
    'default' => ''
    ],
    'name of actor'
    )->setComment("actor table");

    $setup->getConnection()->createTable($table);

        /**
         * Create table 'magenest_movie_actor'
         */
    $table = $setup->getConnection()
        ->newTable($setup->getTable('magenest_movie_actor'))
        ->addColumn(
            'movie_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
            'movie ID'
        )
        ->addColumn(
            'actor_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [
                'nullable' => false,
                'default' => ''
            ],
            'actor id'
        )->setComment("Director table");

        $setup->getConnection()->createTable($table);
    }
    }}
