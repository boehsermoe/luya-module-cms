<?php

use yii\db\Migration;

/**
 * Class m200706_174918_cms_foreigen_keys
 */
class m200706_174918_cms_foreigen_keys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('cms_nav_fk_container', 'cms_nav', 'nav_container_id', 'cms_nav_container', 'id', null, 'CASCADE');

        $this->alterColumn('cms_nav', 'parent_nav_id', $this->integer(11)->null()->defaultValue(null));
        $this->update('cms_nav', ['parent_nav_id' => null], ['parent_nav_id' => 0]);
        $this->addForeignKey('cms_nav_fk_parent', 'cms_nav', 'parent_nav_id', 'cms_nav', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('cms_nav_item_fk_nav', 'cms_nav_item', 'nav_id', 'cms_nav', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('cms_nav_item_fk_lang', 'cms_nav_item', 'lang_id', 'admin_lang', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('cms_nav_item_fk_type', 'cms_nav_item', 'nav_item_type_id', 'cms_nav_item_page', 'id', 'CASCADE', 'CASCADE');
    
        $this->alterColumn('cms_nav_item_page', 'nav_item_id', $this->integer(11)->null()->defaultValue(null));
        $this->update('cms_nav_item_page', ['nav_item_id' => null], ['nav_item_id' => 0]);
        $this->addForeignKey('cms_nav_item_page_fk_nav_item', 'cms_nav_item_page', 'nav_item_id', 'cms_nav_item', 'id', 'CASCADE', 'CASCADE');
    
        $this->delete('cms_nav_item_page_block_item', ['nav_item_page_id' => null]);
        $this->alterColumn('cms_nav_item_page_block_item', 'nav_item_page_id', $this->integer(11)->notNull());
        $this->addForeignKey('cms_nav_item_page_block_item_fk_page', 'cms_nav_item_page_block_item', 'nav_item_page_id', 'cms_nav_item_page', 'id', 'CASCADE', 'CASCADE');
    
        $this->update('cms_nav_item_page_block_item', ['prev_id' => null], ['prev_id' => 0]);
        $this->addForeignKey('cms_nav_item_page_block_item_fk_page', 'cms_nav_item_page_block_item', 'prev_id', 'cms_nav_item_page_block_item', 'id', 'CASCADE', 'CASCADE');
        
        $this->addForeignKey('cms_nav_property_fk_nav', 'cms_nav_property', 'nav_id', 'cms_nav', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200706_174918_cms_foreigen_keys cannot be reverted.\n";

        return false;
    }
}
